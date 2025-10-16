// Wait for the page to fully load before running the script
document.addEventListener('DOMContentLoaded', function () {
    // Get the CGPA form element
    var form = document.getElementById('cgpa-form');
    if (!form) return;

    // Get the table and tbody elements
    var table = form.querySelector('table');
    var tbody = table ? table.querySelector('tbody') : null;
    if (!table || !tbody) return;

    // Get the "Add Course" button
    var addButton = form.querySelector('[data-add-row]');

    /**
     * Reindexes all table rows to maintain proper IDs and names
     * This ensures that when rows are added/removed, the form data structure stays consistent
     */
    function reindexRows() {
        // Get all table rows as an array
        var rows = Array.prototype.slice.call(tbody.querySelectorAll('tr'));

        // Loop through each row and update its form elements
        rows.forEach(function (row, rowIndex) {
            // Get all form elements in this row
            var courseInput = row.querySelector('input[type="text"]');
            var gradeSelect = row.querySelector('select');
            var creditsInput = row.querySelector('input[type="number"]');
            var courseLabel = row.querySelector('label[for^="course-"]');
            var gradeLabel = row.querySelector('label[for^="grade-"]');
            var creditsLabel = row.querySelector('label[for^="credits-"]');

            // Create new IDs based on row position (1-indexed)
            var courseId = 'course-' + (rowIndex + 1);
            var gradeId = 'grade-' + (rowIndex + 1);
            var creditsId = 'credits-' + (rowIndex + 1);

            // Update course input ID, name, and associated label
            if (courseInput) {
                courseInput.id = courseId;
                courseInput.name = 'courses[' + rowIndex + '][name]';
                if (courseLabel) courseLabel.setAttribute('for', courseId);
            }

            // Update grade select ID, name, and associated label
            if (gradeSelect) {
                gradeSelect.id = gradeId;
                gradeSelect.name = 'courses[' + rowIndex + '][grade]';
                if (gradeLabel) gradeLabel.setAttribute('for', gradeId);
            }

            // Update credits input ID, name, and associated label
            if (creditsInput) {
                creditsInput.id = creditsId;
                creditsInput.name = 'courses[' + rowIndex + '][credits]';
                if (creditsLabel) creditsLabel.setAttribute('for', creditsId);
            }
        });
    }

    /**
     * Creates a new table row by cloning the first row and clearing its values
     * This ensures the new row has the same structure as existing rows
     */
    function buildRowFromTemplate() {
        // Clone the first row to use as template
        var firstRow = tbody.querySelector('tr');
        var newRow = firstRow.cloneNode(true);

        // Clear all text inputs in the new row
        var textInputs = newRow.querySelectorAll('input[type="text"]');
        textInputs.forEach(function (el) { el.value = ''; });

        // Clear all number inputs in the new row
        var numberInputs = newRow.querySelectorAll('input[type="number"]');
        numberInputs.forEach(function (el) { el.value = ''; });

        // Reset all select dropdowns in the new row
        var selects = newRow.querySelectorAll('select');
        selects.forEach(function (el) { el.value = ''; });

        return newRow;
    }

    // Add click event listener to "Add Course" button
    if (addButton) {
        addButton.addEventListener('click', function () {
            // Create new row from template
            var newRow = buildRowFromTemplate();
            // Add it to the table
            tbody.appendChild(newRow);
            // Reindex all rows to fix IDs and names
            reindexRows();
        });
    }

    // Add event delegation to handle "Remove" button clicks
    // This allows us to handle clicks on dynamically added buttons
    tbody.addEventListener('click', function (e) {
        var target = e.target;

        // Check if the clicked element is a remove button
        if (target && target.matches('[data-remove-row]')) {
            // Find the table row containing this button
            var row = target.closest('tr');
            if (!row) return;

            // Count total rows to prevent removing the last row
            var totalRows = tbody.querySelectorAll('tr').length;
            if (totalRows <= 1) return;

            // Remove the row from the table
            row.parentElement.removeChild(row);
            // Reindex remaining rows to fix IDs and names
            reindexRows();
        }
    });

    // Initial reindexing when page loads to ensure proper structure
    reindexRows();
});

