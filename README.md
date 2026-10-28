# WooSmart Filter Lite

A free, open-source WooCommerce product-filtering plugin with AJAX updates, responsive product cards, shortcode integration, and a dedicated Elementor widget.

## Features

- Product category filtering
- Product name search
- Minimum and maximum price
- Global WooCommerce attribute filters (such as color and size)
- In-stock and on-sale filters
- Sorting by newest, price, name and popularity
- AJAX results without refreshing the page
- Pagination, product counts and reset controls
- Elementor widget with column and page-size controls
- Responsive CSS

## Shortcode

```text
[woosmart_filter columns="3" per_page="9"]
```

Use it in a Shortcode block, WordPress page, or Elementor Shortcode widget.

## Elementor widget

Search for **WooSmart Product Filter** in the Elementor editor. Requires the Elementor plugin to be active. Without Elementor, the shortcode works normally.

## Installation

1. Download the installable plugin ZIP from the release.
2. In WordPress, navigate to **Plugins > Add New Plugin > Upload Plugin**.
3. Upload the ZIP, install and activate it. WooCommerce must be active.
4. Add the shortcode above to a page, or use the Elementor widget.
5. Add published WooCommerce products and categories to see filtering in action.

## Project structure

```text
woosmart-filter-lite/
├── assets/
│   ├── css/filter.css
│   └── js/filter.js
├── includes/
│   ├── class-elementor-widget.php
│   └── class-woosmart-filter.php
├── woosmart-filter-lite.php
├── README.md
└── LICENSE
```

## Important notes

- This is a new MVP and has not been live-tested inside a WordPress/WooCommerce installation. Test on staging before production use.
- The filter renders its own product grid. It does **not** automatically filter an existing Elementor Products widget or theme archive grid.
- Global attributes must be configured under **Products > Attributes**.
- Tax and shipping calculations are not part of this plugin.
- Performance and compatibility with large catalogs, variable-product pricing, themes, and WooCommerce releases should be verified before production deployment.

## License

GPL-2.0-or-later.
