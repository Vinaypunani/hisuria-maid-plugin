<?php
/**
 * Database Fix Script for Maid Master Plugin
 * Run this script to create missing tables
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Include WordPress
require_once('../../../wp-config.php');

global $wpdb;
$charset_collate = $wpdb->get_charset_collate();

echo "Creating missing tables...\n";

// Create commune table
$commune_table = $wpdb->prefix . 'commune';
$sql = "CREATE TABLE IF NOT EXISTS `{$commune_table}` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
    PRIMARY KEY (`id`)
) $charset_collate;";

$result = $wpdb->query($sql);
if ($result !== false) {
    echo "✓ Commune table created/verified\n";
} else {
    echo "✗ Error creating commune table: " . $wpdb->last_error . "\n";
}

// Create maid_cat table
$maid_cat_table = $wpdb->prefix . 'maid_cat';
$sql = "CREATE TABLE IF NOT EXISTS `{$maid_cat_table}` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name_en` varchar(255) NOT NULL,
    `name_` varchar(255) NOT NULL,
    `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
    PRIMARY KEY (`id`)
) $charset_collate;";

$result = $wpdb->query($sql);
if ($result !== false) {
    echo "✓ Maid category table created/verified\n";
} else {
    echo "✗ Error creating maid category table: " . $wpdb->last_error . "\n";
}

// Insert some sample data
$commune_data = array(
    array('name' => 'Central', 'is_deleted' => 0),
    array('name' => 'North', 'is_deleted' => 0),
    array('name' => 'South', 'is_deleted' => 0),
    array('name' => 'East', 'is_deleted' => 0),
    array('name' => 'West', 'is_deleted' => 0)
);

foreach ($commune_data as $commune) {
    $wpdb->insert($commune_table, $commune);
}

$category_data = array(
    array('name_en' => 'General Housekeeping', 'name_' => 'General Housekeeping', 'is_deleted' => 0),
    array('name_en' => 'Childcare', 'name_' => 'Childcare', 'is_deleted' => 0),
    array('name_en' => 'Elderly Care', 'name_' => 'Elderly Care', 'is_deleted' => 0),
    array('name_en' => 'Cooking', 'name_' => 'Cooking', 'is_deleted' => 0)
);

foreach ($category_data as $category) {
    $wpdb->insert($maid_cat_table, $category);
}

echo "✓ Sample data inserted\n";
echo "Database fix completed!\n";
?>
