# Changelog

All notable changes to the Product Catalog plugin will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.0.0] - 2025-01-27

### Added
- Custom Post Type 'fs-products' with /products/ URL structure
- Classic editor support for product descriptions
- Four custom taxonomies:
  * Product Categories (hierarchical, with images)
  * Product Brands (non-hierarchical, with images)
  * Product Tags (non-hierarchical)
  * Product Types (hierarchical, with images)
- ACF Pro integration with JSON-based field storage
- Product Information tab with repeater field (unlimited rows)
- Product Specifications tab with repeater field (unlimited rows)
- Custom admin columns with thumbnails and taxonomy filters
- Taxonomy image support via ACF fields
- ACF Pro dependency checking with auto-deactivation
- Custom admin styling for enhanced UX
- Helper functions for retrieving products and taxonomies
- Translation-ready with text domain 'fs-product-catalog'
- Comprehensive documentation in README.md

### Technical Implementation
- WordPress coding standards compliant
- Modular class-based architecture
- ACF JSON for version control friendly field management
- Proper escaping and sanitization
- Singleton pattern for main plugin class
- Custom rewrite rules with flush on activation/deactivation

### Files Structure
- `fs-product-catalog.php` - Main plugin file with dependency checking
- `includes/class-fs-product-cpt.php` - Custom Post Type registration and management
- `includes/class-fs-product-taxonomies.php` - Taxonomy registration and image support
- `includes/class-fs-product-acf.php` - ACF integration and field management
- `acf-json/group_fs_product_meta_fields.json` - ACF field definitions
- `assets/css/admin.css` - Admin interface styling
- `README.md` - Plugin documentation
- `CHANGELOG.md` - Version history (this file)

### Requirements
- WordPress 5.8 or higher
- PHP 7.4 or higher
- ACF Pro plugin (required dependency)
