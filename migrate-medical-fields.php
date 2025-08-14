<?php
/**
 * Database Migration Script for Medical Condition Fields
 * 
 * This script renames the medical condition fields from the old names to the new names:
 * - 'tuber' -> 'tuberculosis'
 * - 'heart' -> 'heart_disease'
 * 
 * Run this script once to update your database structure.
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    require_once('../../../wp-config.php');
}

// Check if user is admin
if (!current_user_can('manage_options')) {
    wp_die('You do not have sufficient permissions to access this page.');
}

global $wpdb;
$table_name = $wpdb->prefix . 'st_maid';

echo "<h2>Medical Fields Migration Script</h2>";
echo "<p>This script will update the database structure for medical condition fields.</p>";

// Check if the old columns exist
$old_columns_exist = false;
$new_columns_exist = false;

$columns = $wpdb->get_results("SHOW COLUMNS FROM $table_name");
foreach ($columns as $column) {
    if ($column->Field === 'tuber') {
        $old_columns_exist = true;
        echo "<p>✓ Found old column: 'tuber'</p>";
    }
    if ($column->Field === 'heart') {
        $old_columns_exist = true;
        echo "<p>✓ Found old column: 'heart'</p>";
    }
    if ($column->Field === 'tuberculosis') {
        $new_columns_exist = true;
        echo "<p>✓ Found new column: 'tuberculosis'</p>";
    }
    if ($column->Field === 'heart_disease') {
        $new_columns_exist = true;
        echo "<p>✓ Found new column: 'heart_disease'</p>";
    }
}

if (!$old_columns_exist && !$new_columns_exist) {
    echo "<p>❌ No medical condition columns found. Please check your database structure.</p>";
    exit;
}

if ($old_columns_exist && !$new_columns_exist) {
    echo "<p>🔄 Migrating old columns to new names...</p>";
    
    // Rename tuber to tuberculosis
    if ($wpdb->query("ALTER TABLE $table_name CHANGE `tuber` `tuberculosis` TINYINT(1) NULL DEFAULT NULL")) {
        echo "<p>✓ Successfully renamed 'tuber' to 'tuberculosis'</p>";
    } else {
        echo "<p>❌ Failed to rename 'tuber' to 'tuberculosis': " . $wpdb->last_error . "</p>";
    }
    
    // Rename heart to heart_disease
    if ($wpdb->query("ALTER TABLE $table_name CHANGE `heart` `heart_disease` TINYINT(1) NULL DEFAULT NULL")) {
        echo "<p>✓ Successfully renamed 'heart' to 'heart_disease'</p>";
    } else {
        echo "<p>❌ Failed to rename 'heart' to 'heart_disease': " . $wpdb->last_error . "</p>";
    }
    
    echo "<p>✅ Migration completed successfully!</p>";
    
} elseif ($new_columns_exist && !$old_columns_exist) {
    echo "<p>✅ Database already has the new column names. No migration needed.</p>";
    
} else {
    echo "<p>⚠️ Both old and new columns exist. This might cause conflicts.</p>";
    echo "<p>Please manually check your database structure and remove duplicate columns if necessary.</p>";
}

echo "<hr>";
echo "<p><strong>Note:</strong> After running this migration, you should:</p>";
echo "<ol>";
echo "<li>Test the maid edit form to ensure it works correctly</li>";
echo "<li>Verify that existing data is preserved</li>";
echo "<li>Delete this migration file for security</li>";
echo "</ol>";

echo "<p><a href='admin.php?page=maidmaster'>← Back to Maid Master</a></p>";
?> 