<?php
/**
 * Quick Fix for Image Field Length Issue
 * Run this script to fix the image field length problem
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Include WordPress
require_once('../../../wp-config.php');

global $wpdb;

echo "Fixing image field lengths...\n";

$st_maid_table = $wpdb->prefix . 'st_maid';

// Fix image field length
$result = $wpdb->query("ALTER TABLE `$st_maid_table` MODIFY `image` VARCHAR(500) NOT NULL");
if ($result !== false) {
    echo "✓ Image field updated to VARCHAR(500)\n";
} else {
    echo "✗ Error updating image field: " . $wpdb->last_error . "\n";
}

// Fix passport_image field length
$result = $wpdb->query("ALTER TABLE `$st_maid_table` MODIFY `passport_image` VARCHAR(500) NOT NULL");
if ($result !== false) {
    echo "✓ Passport image field updated to VARCHAR(500)\n";
} else {
    echo "✗ Error updating passport_image field: " . $wpdb->last_error . "\n";
}

echo "Image field fix completed!\n";
?>
