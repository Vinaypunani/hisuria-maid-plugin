<?php
// Simple test file to debug form submission
if (!defined('ABSPATH')) {
    require_once('../../../wp-load.php');
}

echo "<h1>Form Submission Test</h1>";

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<h2>Form Data Received:</h2>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    
    echo "<h2>Request Data:</h2>";
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
    
    // Test database connection
    global $wpdb;
    echo "<h2>Database Test:</h2>";
    $result = $wpdb->get_results("SHOW TABLES LIKE 'wp_st_maid'");
    if ($result) {
        echo "Main table exists<br>";
    } else {
        echo "Main table does not exist<br>";
    }
    
    $result = $wpdb->get_results("SHOW TABLES LIKE 'wp_employment_history'");
    if ($result) {
        echo "Employment history table exists<br>";
    } else {
        echo "Employment history table does not exist<br>";
    }
    
    $result = $wpdb->get_results("SHOW TABLES LIKE 'wp_maid_feedback'");
    if ($result) {
        echo "Feedback table exists<br>";
    } else {
        echo "Feedback table does not exist<br>";
    }
    
    $result = $wpdb->get_results("SHOW TABLES LIKE 'wp_maid_skills'");
    if ($result) {
        echo "Skills table exists<br>";
    } else {
        echo "Skills table does not exist<br>";
    }
} else {
    echo "<h2>No form data received</h2>";
    echo "<p>This page is for testing form submissions. Please submit the maid form to see the data.</p>";
}
?> 