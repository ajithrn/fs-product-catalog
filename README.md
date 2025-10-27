# FluxStack Product Catalog Plugin

A WordPress plugin for managing products without ecommerce functionality. Built with ACF Pro integration and following WordPress coding standards.

## Features

- **Custom Post Type**: Products (fs-products) with clean URLs (/products/)
- **Custom Taxonomies**:
  - Product Categories (hierarchical, with images)
  - Product Brands (non-hierarchical, with images)
  - Product Tags (non-hierarchical)
  - Product Types (hierarchical, with images)
- **ACF Integration**: Custom fields using ACF Pro with JSON storage
- **Classic Editor**: Uses classic editor instead of block editor
- **Admin Enhancements**: Custom columns, sortable fields, taxonomy images

## Requirements

- WordPress 5.8 or higher
- PHP 7.4 or higher
- ACF Pro plugin (required for custom fields)

## Installation

1. Upload the `fs-product-catalog` folder to `/wp-content/plugins/`
2. Ensure ACF Pro is installed and activated
3. Activate the Product Catalog plugin through the 'Plugins' menu in WordPress
4. Visit the Products menu in the WordPress admin

## Plugin Structure

```
fs-product-catalog/
├── fs-product-catalog.php          # Main plugin file
├── README.md                        # This file
├── includes/
│   ├── class-fs-product-cpt.php    # Custom Post Type registration
│   ├── class-fs-product-taxonomies.php  # Taxonomy registration
│   └── class-fs-product-acf.php    # ACF field management
├── acf-json/
│   └── group_fs_product_meta_fields.json  # ACF field definitions
└── assets/
    └── css/
        └── admin.css                # Admin styling
```

## Custom Fields

### WordPress Standard Fields
- **Title**: Product name (WordPress default)
- **Content Editor**: Product description (WordPress default classic editor)
- **Featured Image**: Product main image (WordPress default)

### ACF Custom Fields (JSON-based)

#### Product Information Tab
- **Product Information**: Repeater field (unlimited rows) with:
  - Title (text)
  - Content (WYSIWYG)

#### Product Specifications Tab
- **Specifications**: Repeater field (unlimited rows) with:
  - Tab Title (text)
  - Content (WYSIWYG with HTML support)

**Note**: All ACF fields are stored in JSON format in the `acf-json/` directory for easy management and version control. Fields can be edited directly in WordPress admin under Custom Fields → Field Groups.

## Taxonomies

### Product Categories (fs-product-category)
- Hierarchical (like categories)
- Supports images via ACF
- URL: `/product-category/`

### Product Brands (fs-product-brand)
- Non-hierarchical (like tags)
- Supports images via ACF
- URL: `/product-brand/`

### Product Tags (fs-product-tag)
- Non-hierarchical (like tags)
- URL: `/product-tag/`

### Product Types (fs-product-type)
- Hierarchical (like categories)
- Supports images via ACF
- URL: `/product-type/`

## Usage Examples

### Get Products in Template

```php
// Get all products
$products = FS_Product_CPT::get_products();

// Get products by category
$products = FS_Product_CPT::get_products_by_taxonomy(
    'fs-product-category',
    'category-slug',
    10
);

// Get product information
$product_info = FS_Product_ACF::get_product_info( $post_id );

// Get specification tabs
$spec_tabs = FS_Product_ACF::get_product_specifications_tabs( $post_id );
```

### Get Terms with Images

```php
// Get categories with images
$categories = FS_Product_Taxonomies::get_terms_with_images( 'fs-product-category' );

foreach ( $categories as $category ) {
    echo $category->name;
    if ( $category->image ) {
        echo '<img src="' . esc_url( $category->image['url'] ) . '" />';
    }
}
```

## ACF JSON

The plugin uses ACF JSON for field synchronization:
- Fields are stored in `/acf-json/` directory
- Automatically loaded when plugin is active
- Version control friendly

## Hooks and Filters

The plugin provides several hooks for customization:

### Actions
- `fs_product_catalog_init` - Fires when plugin components are initialized

### Filters
- `acf/settings/save_json` - Customize ACF JSON save location
- `acf/settings/load_json` - Customize ACF JSON load locations

## Admin Features

### Custom Columns
- Thumbnail preview
- Categories, Brands, Types, Tags
- Sortable columns

### Taxonomy Images
- Upload images for categories, brands, and types
- Display in admin columns
- Accessible via ACF fields

## Development

### Coding Standards
- Follows WordPress Coding Standards
- PSR-4 autoloading structure
- Proper escaping and sanitization
- Translation-ready

### File Naming
- Internal name: `fs-products`
- Public URLs: `/products/`
- Taxonomy prefix: `fs-product-`
- Field prefix: `field_fs_product_`

## Support

For issues or questions, please contact the development team.


## License

GPL v2 or later

## Credits

Developed by Ajith R N
