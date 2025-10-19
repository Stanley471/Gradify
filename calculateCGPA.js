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

// CGPA Calculator Logic (5.0 scale)
// Author: GitHub Copilot
// This script dynamically calculates CGPA, total credits, and total grade points as the user enters data.
// It also supports adding/removing courses and keeps the summary section updated.

// Grade to point mapping (5.0 scale)
const gradePoints = {
    'A': 5.0,
    'B': 4.0,
    'C': 3.0,
    'D': 2.0,
    'E': 1.0,
    'F': 0.0
};

// Utility: Get all course rows
function getCourseRows() {
    return Array.from(document.querySelectorAll('#cgpa-form tbody tr'));
}

// Utility: Extract course data from a row
function getCourseData(row) {
    const name = row.querySelector('input[type="text"]').value.trim();
    const grade = row.querySelector('select').value;
    const credits = parseFloat(row.querySelector('input[type="number"]').value) || 0;
    return { name, grade, credits };
}

// Calculate and update summary
function updateSummary() {
    const rows = getCourseRows();
    let totalCredits = 0;
    let totalGradePoints = 0;
    let cgpa = 0;

    rows.forEach(row => {
        const { grade, credits } = getCourseData(row);
        if (grade && credits > 0) {
            totalCredits += credits;
            totalGradePoints += (gradePoints[grade] || 0) * credits;
        }
    });
    cgpa = totalCredits > 0 ? (totalGradePoints / totalCredits) : 0;

    // Update summary fields
    document.getElementById('total-credits').value = totalCredits.toFixed(2);
    document.getElementById('total-grade-points').value = totalGradePoints.toFixed(2);
    document.getElementById('cgpa').value = cgpa.toFixed(2);
}

// Add a new course row
function addCourseRow() {
    const tbody = document.querySelector('#cgpa-form tbody');
    const idx = tbody.children.length;
    const tr = document.createElement('tr');
    tr.className = 'border-t border-black/5';
    tr.innerHTML = `
        <td class="py-3 pr-6">
            <label class="sr-only" for="course-${idx+1}">Course ${idx+1}</label>
            <input id="course-${idx+1}" name="courses[${idx}][name]" type="text" placeholder="e.g., New Course"
                class="w-full rounded-md border border-black/10 px-3 py-2 outline-none focus:ring-2 focus:ring-blue-500/30" />
        </td>
        <td class="py-3 pr-6">
            <label class="sr-only" for="grade-${idx+1}">Grade ${idx+1}</label>
            <select id="grade-${idx+1}" name="courses[${idx}][grade]" required
                class="w-full rounded-md border border-black/10 px-3 py-2 bg-white outline-none focus:ring-2 focus:ring-blue-500/30">
                <option value="">Select</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
            </select>
        </td>
        <td class="py-3 pr-6">
            <label class="sr-only" for="credits-${idx+1}">Credits ${idx+1}</label>
            <input id="credits-${idx+1}" name="courses[${idx}][credits]" type="number" step="0.5" min="0" placeholder="e.g., 3" required
                class="w-28 rounded-md border border-black/10 px-3 py-2 outline-none focus:ring-2 focus:ring-blue-500/30" />
        </td>
        <td class="py-3 pr-6">
            <button type="button" data-remove-row class="px-3 py-1.5 rounded-md border border-black/10 text-red-600 hover:bg-red-50">Remove</button>
        </td>
    `;
    tbody.appendChild(tr);
    updateSummary();
}

// Remove a course row
function removeCourseRow(btn) {
    const row = btn.closest('tr');
    row.parentNode.removeChild(row);
    updateSummary();
}

// Event listeners
function setupCGPAEvents() {
    const form = document.getElementById('cgpa-form');
    // Add row
    form.querySelector('[data-add-row]').addEventListener('click', addCourseRow);
    // Remove row (delegated)
    form.querySelector('tbody').addEventListener('click', function(e) {
        if (e.target && e.target.matches('[data-remove-row]')) {
            removeCourseRow(e.target);
        }
    });
    // Update summary on input change
    form.addEventListener('input', function(e) {
        if (e.target.matches('input, select')) {
            updateSummary();
        }
    });
    // Update summary on form reset
    form.addEventListener('reset', function() {
        setTimeout(updateSummary, 10);
    });
    // Initial summary
    updateSummary();
}

// Initialize on DOMContentLoaded
window.addEventListener('DOMContentLoaded', setupCGPAEvents);




