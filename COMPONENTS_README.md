# Reusable Layout Components

This project now uses clean, reusable components for consistent design across all pages.

## Components

### 1. `header.php`
- Sticky header with logo and navigation
- Responsive mobile menu with hamburger toggle
- Desktop navigation with icons
- Clean, organized Tailwind CSS classes

### 2. `footer.php`
- Footer with brand section
- Quick links and support links
- Social media icons
- Copyright and legal links

### 3. `sidebar.php`
- Optional sidebar component
- Can be customized or left empty if not needed
- Hidden by default on mobile, visible on large screens

### 4. `layout.php`
- Main layout wrapper
- Handles page structure and includes all components
- Supports dynamic content injection

### 5. `js/mobile-menu.js`
- Shared JavaScript for mobile menu functionality
- Handles open/close, click outside, and Escape key

## Usage

### Basic Usage

```php
<?php
$title = 'My Page Title';
$content = 'path/to/content.php'; // or inline HTML string
include 'layout.php';
?>
```

### With Custom Classes

```php
<?php
$title = 'My Page Title';
$main_class = 'min-h-screen px-6 py-10 bg-gradient-to-br from-slate-50 to-white';
$content = '<div>Your content here</div>';
include 'layout.php';
?>
```

### With Sidebar

```php
<?php
$title = 'My Page Title';
$show_sidebar = true;
$content = '<div>Your content here</div>';
include 'layout.php';
?>
```

### With Additional Scripts

```php
<?php
$title = 'My Page Title';
$content = '<div>Your content here</div>';
$additional_scripts = ['js/custom.js', 'js/another.js'];
include 'layout.php';
?>
```

### Inline Content Example

```php
<?php
$title = 'My Page Title';

ob_start();
?>
<div class="max-w-4xl mx-auto px-6 py-10">
    <h1 class="text-3xl font-bold">My Content</h1>
    <p>This is inline content.</p>
</div>
<?php
$content = ob_get_clean();
include 'layout.php';
?>
```

## File Structure

```
Gradify/
├── header.php          # Header component
├── footer.php          # Footer component
├── sidebar.php         # Sidebar component (optional)
├── layout.php          # Main layout wrapper
├── test.php            # Template example
├── example-page.php    # Usage example
└── js/
    └── mobile-menu.js  # Mobile menu functionality
```

## Benefits

1. **DRY Principle**: No code duplication across pages
2. **Consistency**: Same header/footer on all pages
3. **Maintainability**: Update once, changes everywhere
4. **Clean Code**: Organized Tailwind classes
5. **Responsive**: Mobile-first design built-in

## Updating Components

- To update the header: Edit `header.php`
- To update the footer: Edit `footer.php`
- To update the sidebar: Edit `sidebar.php`
- Changes will automatically reflect on all pages using the layout


