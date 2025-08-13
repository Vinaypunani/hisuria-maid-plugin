<?php
/**
 * Test script for maid insertion
 * This file helps test the maid insertion functionality
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

function test_maid_database_structure() {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'st_maid';
    
    // Check if table exists
    $table_exists = $wpdb->get_var("SHOW TABLES LIKE '$table_name'") == $table_name;
    
    if (!$table_exists) {
        return array(
            'status' => 'error',
            'message' => 'Table does not exist. Please activate the plugin to create the table.'
        );
    }
    
    // Get table structure
    $columns = $wpdb->get_results("DESCRIBE $table_name");
    
    $required_columns = array(
        'id', 'code', 'name', 'date_of_birth', 'place_of_birth', 'height', 'weight',
        'nationality', 'address', 'religion', 'education', 'contact_no', 'marrital_status',
        'current_status', 'name_of_port_airport', 'image', 'salary', 'no_of_children',
        'age', 'children_age', 'no_of_siblings', 'my_number', 'declaration', 'remark',
        'created_date', 'created_by', 'modified_date', 'modified_by', 'status',
        'is_taken', 'is_show', 'is_deleted'
    );
    
    $existing_columns = array();
    foreach ($columns as $column) {
        $existing_columns[] = $column->Field;
    }
    
    $missing_columns = array_diff($required_columns, $existing_columns);
    
    if (!empty($missing_columns)) {
        return array(
            'status' => 'error',
            'message' => 'Missing required columns: ' . implode(', ', $missing_columns),
            'existing_columns' => $existing_columns
        );
    }
    
    return array(
        'status' => 'success',
        'message' => 'Database structure is correct',
        'columns' => $existing_columns
    );
}

function test_maid_insertion_sample() {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'st_maid';
    
    // Sample test data
    $test_data = array(
        'code' => 'TEST' . time(),
        'name' => 'Test Maid',
        'date_of_birth' => '1990-01-01',
        'age' => 34,
        'place_of_birth' => 'Test City',
        'height' => 160,
        'weight' => 55,
        'nationality' => 'Test Country',
        'address' => 'Test Address',
        'contact_no' => '1234567890',
        'religion' => 'Test Religion',
        'education' => 'High School',
        'marrital_status' => '1',
        'current_status' => 'Available',
        'name_of_port_airport' => 'Test Airport',
        'image' => '',
        'salary' => 800,
        'no_of_children' => 0,
        'children_age' => '',
        'no_of_siblings' => 2,
        'my_number' => 123456789,
        'declaration' => '1',
        'remark' => 'Test maid entry',
        'created_date' => current_time('mysql'),
        'created_by' => 1,
        'modified_date' => current_time('mysql'),
        'modified_by' => 1,
        'status' => '0',
        'is_taken' => '8',
        'is_show' => '4',
        'is_deleted' => '0'
    );
    
    $inserted = $wpdb->insert($table_name, $test_data);
    
    if ($inserted === false) {
        return array(
            'status' => 'error',
            'message' => 'Failed to insert test data: ' . $wpdb->last_error,
            'query' => $wpdb->last_query
        );
    }
    
    $insert_id = $wpdb->insert_id;
    
    // Clean up test data
    $wpdb->delete($table_name, array('id' => $insert_id));
    
    return array(
        'status' => 'success',
        'message' => 'Test insertion successful',
        'insert_id' => $insert_id
    );
}

// Run tests if accessed directly for debugging
if (defined('WP_DEBUG') && WP_DEBUG && isset($_GET['test_maid'])) {
    $structure_test = test_maid_database_structure();
    $insertion_test = test_maid_insertion_sample();
    
    echo '<h2>Maid Database Structure Test</h2>';
    echo '<pre>' . print_r($structure_test, true) . '</pre>';
    
    echo '<h2>Maid Insertion Test</h2>';
    echo '<pre>' . print_r($insertion_test, true) . '</pre>';
    
    exit;
}
?>