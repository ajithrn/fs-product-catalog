# Changelog

All notable changes to the FluxStack Product Catalog plugin will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.1.0] - 2025-01-27

### Added
- **Frontend Template System**: Complete template hierarchy with theme override support
- **Template Loader**: WordPress-style template loading with fallback system
- **Single Product Layout**: Title, content, 50/50 image/info split, specification tabs
- **Archive Templates**: Product archive and all taxonomy archive templates
- **Template Parts**: Modular components (breadcrumbs, header, content, gallery, info, specs, sidebar, product cards)
- **AJAX Filtering**: Real-time product filtering without page reload
- **Search Functionality**: Debounced search input with live results
- **Infinite Scroll**: Automatic loading using Intersection Observer API
- **Load More Button**: Fallback for infinite scroll with manual loading
- **Custom Lightbox Gallery**: Lightweight image gallery with keyboard navigation
- **Specification Tabs**: Tabbed interface for product specifications
- **Breadcrumb Navigation**: SEO-friendly breadcrumbs with hierarchical support
- **Filter Sidebar**: Search, categories, brands, types, and tags filtering
- **Active Filters Display**: Visual representation of applied filters
- **Mobile Responsive Design**: Mobile-first approach with collapsible filters
- **CSS Variables System**: Easy customization via CSS custom properties
- **Conditional Asset Loading**: Only loads CSS/JS when needed for better performance
- **WordPress Hooks & Filters**: Extensive customization options for developers
- **Developer Documentation**: Comprehensive DEVELOPER.md with technical details

### Frontend Assets
- `frontend-common.css`: Shared styles with CSS variables
- `frontend-single.css`: Single product page styles
- `frontend-archive.css`: Archive and filter styles
- `frontend-single.js`: Gallery lightbox and tabs functionality
- `frontend-archive.js`: AJAX filtering and infinite scroll

### New Classes
- `FS_Product_Template_Loader`: Template hierarchy and loading
- `FS_Product_Frontend`: Asset management and frontend hooks
- `FS_Product_Ajax`: AJAX request handling for filters and pagination

### Templates
- `single-product.php`: Single product template
- `archive-product.php`: Product archive template
- `taxonomy-category.php`: Category archive template
- `taxonomy-brand.php`: Brand archive template
- `taxonomy-type.php`: Type archive template
- `taxonomy-tag.php`: Tag archive template
- Template parts in `parts/` directory
- Loop templates in `parts/loop/` directory

### Hooks & Filters
- `fs_product_before_main_content`: Action before main content
- `fs_product_after_main_content`: Action after main content
- `fs_product_before_single_product`: Action before single product
- `fs_product_after_single_product`: Action after single product
- `fs_product_posts_per_page`: Filter products per page (default: 12)
- `fs_product_archive_columns`: Filter archive columns (default: 3)
- `fs_product_sidebar_position`: Filter sidebar position (default: 'left')
- `fs_product_show_breadcrumbs`: Filter breadcrumb display (default: true)
- `fs_product_show_sidebar`: Filter sidebar display (default: true)
- `fs_product_thumbnail_size`: Filter thumbnail size (default: 'large')
- `fs_product_ajax_query_args`: Filter AJAX query arguments
- `fs_product_breadcrumbs`: Filter breadcrumb array

### Documentation
- Updated README.md with user-focused content
- Added DEVELOPER.md with complete technical documentation
- Separated user and developer documentation for clarity

### Technical Improvements
- WordPress Coding Standards compliant (PHP, JavaScript, CSS)
- Modular JavaScript using module pattern
- BEM naming convention for CSS classes
- Semantic HTML5 markup
- ARIA labels and keyboard navigation support
- Nonce verification for all AJAX requests
- Proper input sanitization and output escaping
- Mobile-first responsive design
- Performance optimized with conditional loading

### Browser Support
- Modern browsers (Chrome, Firefox, Safari, Edge)
- IE11 with graceful degradation
- Mobile browsers (iOS Safari, Chrome Mobile)

### Accessibility
- ARIA labels for interactive elements
- Keyboard navigation support (arrow keys, ESC, tab)
- Focus management for modals and tabs
- Screen reader friendly markup
- Semantic HTML structure

---

## [1.0.0] - 2025-01-27

### Added
- Custom Post Type 'fs-products' with /product/ URL structure
- Classic editor support for product descriptions
- Four custom taxonomies:
  * Product Categories (hierarchical, with images)
  * Product Brands (non-hierarchical, with images)
  * Product Tags (non-hierarchical)
  * Product Types (hierarchical, with images)
- ACF Pro integration with JSON-based field storage
- Product Information tab with repeater field (unlimited rows)
- Product Specifications tab with repeater field (unlimited rows)
- Product Gallery field for multiple images
- Custom admin columns with thumbnails and taxonomy filters
- Taxonomy image support via ACF fields
- ACF Pro dependency checking with auto-deactivation
- Custom admin styling for enhanced UX
- Helper functions for retrieving products and taxonomies
- Translation-ready with text domain 'fs-product-catalog'

### Technical Implementation
- WordPress coding standards compliant
- Modular class-based architecture
- ACF JSON for version control friendly field management
- Proper escaping and sanitization
- Singleton pattern for main plugin class
- Custom rewrite rules with flush on activation/deactivation

### Files Structure
- `fs-product-catalog.php`: Main plugin file with dependency checking
- `includes/class-fs-product-cpt.php`: Custom Post Type registration and management
- `includes/class-fs-product-taxonomies.php`: Taxonomy registration and image support
- `includes/class-fs-product-acf.php`: ACF integration and field management
- `acf-json/group_fs_product_meta_fields.json`: ACF field definitions
- `assets/css/admin.css`: Admin interface styling

### Requirements
- WordPress 5.8 or higher
- PHP 7.4 or higher
- ACF Pro plugin (required dependency)

---

## Version History

- **1.1.0** (2025-01-27): Frontend template system, AJAX filtering, infinite scroll
- **1.0.0** (2025-01-27): Initial release with custom post type and admin features
