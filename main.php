<?php
/*
Plugin Name: Maids Maseter
Plugin URI: 
Version: 1.1
Author: David
Author URI: 
Description: maid master.
*/

function maids_install(){
	global $wpdb;
	$maid_table = $wpdb->prefix . "st_maid";	
	$charset_collate = $wpdb->get_charset_collate();
	
	$sql = "CREATE TABLE `$maid_table` (
		`id` int(11) NOT NULL,
		`code` varchar(15) NOT NULL,
		  `name` varchar(100) NOT NULL,
		  `date_of_birth` datetime NOT NULL,
		  `place_of_birth` datetime NOT NULL,
        `height` smallint(5) UNSIGNED NOT NULL,
		  `weight` tinyint(3) UNSIGNED NOT NULL,
		  `nationality` varchar(50) NOT NULL,
		  `address` text NOT NULL,
		  `religion` varchar(50) NOT NULL,
		  `education` varchar(50) NOT NULL,
		  `contact_no` varchar(255) NOT NULL,
		  `marrital_status` enum('1','2','3','4') NOT NULL COMMENT '1 = Single, 2 = Married, 3 = Separated, 4 = Widow',
		  `current_status` varchar(100) NOT NULL,
          `name_of_port_airport` varchar(255) NOT NULL,
		  `image` varchar(100) NOT NULL,
		  `salary` int(11) NOT NULL,
		  `no_of_children` tinyint(3) UNSIGNED NOT NULL,
		  `age` tinyint(3) UNSIGNED NOT NULL,
          `children_age` varchar(100) NOT NULL,
          `care_pets` varchar(20) NOT NULL,
		  `no_of_siblings` tinyint(3) UNSIGNED NOT NULL,
		  `my_number` tinyint(3) UNSIGNED NOT NULL,
		  `declaration` enum('1','0') NOT NULL COMMENT '1 = Checked, 0 = Unchecked',
		  `remark` text NOT NULL,
		  `created_date` datetime NOT NULL,
		  `created_by` int(10) UNSIGNED NOT NULL,
		  `modified_date` datetime NOT NULL,
		  `modified_by` int(10) UNSIGNED NOT NULL,
		  `status` enum('0','1','2') NOT NULL COMMENT '0 = Pending, 1 = Approved, 2 = Rejected',
		PRIMARY KEY (`id`)
	) $charset_collate;";

    $experience_table = $wpdb->prefix . 'maid_experience';
    $sql .= "CREATE TABLE IF NOT EXISTS `$experience_table` (
		  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
		  `maid_id` int(10) UNSIGNED NOT NULL,
		  `time_duration` varchar(25) NOT NULL,
		  `employer_name` varchar(100) NOT NULL,
		  `e_address` text NOT NULL,
		  `main_duties` text NOT NULL,
		  PRIMARY KEY (`id`)
	) $charset_collate;";

	$sql .= "CREATE TABLE IF NOT EXISTS `wp_maid_language_profiency` (
		  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
		  `maid_id` int(10) UNSIGNED NOT NULL,
		  `language` varchar(50) NOT NULL,
		  `spoken` enum('Poor','Fair','Good') NOT NULL,
		  `written` enum('Poor','Fair','Good') NOT NULL,
		  PRIMARY KEY (`id`)
	) $charset_collate;";

	$sql .= "CREATE TABLE IF NOT EXISTS `wp_maid_work_areas` (
		  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
		  `maid_id` int(10) UNSIGNED NOT NULL,
		  `work_area_id` smallint(5) UNSIGNED NOT NULL,
		  `willing` enum('Yes','No') DEFAULT NULL,
		  `experience` enum('Poor','Fair','Good','Very Good','N.A') DEFAULT NULL,
		  PRIMARY KEY (`id`)
	) $charset_collate;";

	$sql .= "DROP TABLE IF EXISTS `wp_work_areas_master`;
		  CREATE TABLE IF NOT EXISTS `wp_work_areas_master` (
		  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
		  `lable` text NOT NULL,
		  PRIMARY KEY (`id`)
	) $charset_collate;";

	$sql .= "INSERT INTO `wp_work_areas_master` (`id`, `lable`) VALUES
		(1, 'TAKING CARE OF NEWBORN TO 3 MONTHS BABY'),
		(2, 'TAKE CARE OF BABY DURING THE NIGHT TIME'),
		(3, 'TAKING CARE OF ELDERLY / DISABLE PERSON'),
		(4, 'USING AND OPERATING HOUSE APPLIANCE'),
		(5, 'DOING THE LAUNDRY BY HAND'),
		(6, 'WASHING THE CAR'),
		(7, 'ARE YOU AFRAID OF PETS ( DOG , CAT )'),
		(8, 'ARE YOU PREPARED TO WORK FOR A NON MUSLIM EMPLOYER');";

    // Create wp_employment_history table if it doesn't exist
    $sql .= "CREATE TABLE IF NOT EXISTS `wp_employment_history` (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`maid_id` int(11) NOT NULL,
		`from_date` varchar(50) NOT NULL,
		`to_date` varchar(50) NOT NULL,
		`country` varchar(100) NOT NULL,
		`employer` varchar(100) NOT NULL,
		`work_duties` text NOT NULL,
		`remark` text NOT NULL,
		PRIMARY KEY (`id`)
	) $charset_collate;";

	// Create wp_maid_feedback table if it doesn't exist
	$sql .= "CREATE TABLE IF NOT EXISTS `wp_maid_feedback` (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`maid_id` int(11) NOT NULL,
		`employer_name` varchar(100) NOT NULL,
		`feedback` text NOT NULL,
		PRIMARY KEY (`id`)
	) $charset_collate;";

	// Create wp_maid_skills table if it doesn't exist
	$sql .= "CREATE TABLE IF NOT EXISTS `wp_maid_skills` (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`maid_id` int(11) NOT NULL,
		`skill_id` int(11) NOT NULL,
		`other` text NOT NULL,
		`willing` varchar(10) NOT NULL,
		`experience` varchar(10) NOT NULL,
		`exp_year` varchar(50) NOT NULL,
		`assessment` varchar(50) NOT NULL,
		PRIMARY KEY (`id`)
	) $charset_collate;";

	// Create wp_maid_skills_otc table if it doesn't exist
	$sql .= "CREATE TABLE IF NOT EXISTS `wp_maid_skills_otc` (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`maid_id` int(11) NOT NULL,
		`skill_id` int(11) NOT NULL,
		`other` text NOT NULL,
		`willing` varchar(10) NOT NULL,
		`experience` varchar(10) NOT NULL,
		`exp_year` varchar(50) NOT NULL,
		`assessment` varchar(50) NOT NULL,
		PRIMARY KEY (`id`)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );
}

function maids_deactivation() {
	
}

if( is_admin() && ! empty ( $_SERVER['PHP_SELF'] ) && 'upload.php' !== basename( $_SERVER['PHP_SELF'] ) ) {
    function my_admin_load_styles_and_scripts() {
        wp_enqueue_media();
    }
    add_action( 'admin_enqueue_scripts', 'my_admin_load_styles_and_scripts' );
}

function david_maid_style_and_script()
{
    wp_enqueue_style( 'david_product-chosen-css', plugins_url('css/chosen.css', __FILE__),array() );
    wp_enqueue_style( 'david_product-datatables-css', plugins_url('css/jquery.dataTables.css', __FILE__),array() );
    wp_enqueue_style( 'david_product-jquery-ui', plugins_url('css/jquery-ui.css', __FILE__),array() );
    wp_enqueue_script( 'david_product-datatables', plugins_url('js/jquery.dataTables.js', __FILE__), array('jquery') );
    wp_enqueue_script( 'david_product-chosen', plugins_url('js/chosen.jquery.js', __FILE__), array('jquery') );
     wp_enqueue_script( 'david_product-jquery-ui', plugins_url('js/jquery-ui.js', __FILE__), array('jquery') );
}

function maids_add_to_menu() 
{
	add_menu_page('Maids', 'Maids', 'edit_posts', 'maid', 'maids_admin','dashicons-groups',25);
	add_submenu_page( 'maid', 'Add New Maid', 'Add New Maids', 'edit_posts', 'addmaid','maid_add_page');
	//add_submenu_page( 'maid', 'Maids Categories', 'Maids Categories', 'manage_options', 'maid_cat','maid_cat_page');

	// Tools: add a helper to add Care of pets skill into DB
	add_management_page(
		'Add DB Field: Care of pets',
		'Add Care of pets Skill',
		'manage_options',
		'add-care-of-pets-skill',
		'maids_tool_add_care_pets_page'
	);
	add_management_page(
		'Add DB Field: Spectacles (spec)',
		'Add Spectacles Field',
		'manage_options',
		'add-spec-column',
		'maids_tool_add_spec_column_page'
	);
}

function maid_add_page()
{
	maids_HandleUploadFile();
	include('pages/maid-add.php');	
}
function maid_cat_page()
{
	maids_HandleMaidsCat();
	include('pages/maid-cat.php');
		
}


function maids_admin()
{
	global $wpdb;
	maids_HandleUploadFile();
	$action = isset($_REQUEST['action']) ? sanitize_text_field( $_REQUEST['action'] ) : '';
	$maidid = isset($_REQUEST['maidid']) ? sanitize_text_field( $_REQUEST['maidid'] ) : '';
	if($action == 'edit' && $maidid != ''){
		include('pages/maid-edit.php');

	}
	elseif ($action == 'hide_show' && $maidid != '') {

		$is_show = isset($_REQUEST['is_show']) ? sanitize_text_field( $_REQUEST['is_show'] ) : '';

		if (!empty($is_show)){


			$table_name = $wpdb->prefix . "st_maid";
			 $res = $wpdb->query("UPDATE `$table_name` SET `is_show` = '".$is_show."' WHERE id = $maidid"); 
			if( false === $res ){
				print '<div class="notice notice-error is-dismissible"><p>The maid status not changed. Please try again.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
			}else{
				print '<div class="notice notice-success is-dismissible"><p>Maids status changed successfully.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
			}
		}
		include('pages/maid-data.php');
		
	}elseif ($action == 'status_approve' && $maidid != '') {

		$table_name = $wpdb->prefix . "st_maid";
		$res = $wpdb->query("UPDATE `$table_name` SET `status` = '1' WHERE id = $maidid");
		if( false === $res ){
			print '<div class="notice notice-error is-dismissible"><p>The maid is not approved. Please try again.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
		}else{
			print '<div class="notice notice-success is-dismissible"><p>Maids Approved successfully.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
		}
		include('pages/maid-data.php');

	}elseif ($action == 'status_pending' && $maidid != '') {

		$table_name = $wpdb->prefix . "st_maid";
		$res = $wpdb->query("UPDATE `$table_name` SET `status` = '0' WHERE id = $maidid");
		if( false === $res ){
			print '<div class="notice notice-error is-dismissible"><p>The maid status is not change. Please try again.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
		}else{
			print '<div class="notice notice-success is-dismissible"><p>Maids status changed successfully.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
		}
		include('pages/maid-data.php');

	}elseif ($action == 'status_reject' && $maidid != '') {

		$table_name = $wpdb->prefix . "st_maid";
		$res = $wpdb->query("UPDATE `$table_name` SET `status` = '2' WHERE id = $maidid");
		if( false === $res ){
			print '<div class="notice notice-error is-dismissible"><p>The maid is not Rejected. Please try again.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
		}else{
			print '<div class="notice notice-success is-dismissible"><p>Maids Rejected successfully.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
		}
		include('pages/maid-data.php');
	}elseif ($action == 'delete_maid' && $maidid != '') {
		$table_name = $wpdb->prefix . "st_maid";
	
	    $res = $wpdb->query("UPDATE `$table_name` SET `is_deleted` = '1' WHERE id = $maidid");
		if( false === $res ){
			print '<div class="notice notice-error is-dismissible"><p>The maid did not deleted. Please try again.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
		}else{
			print '<div class="notice notice-success is-dismissible"><p>Maids deleted Successfully.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
		}
		include('pages/maid-data.php');

	}elseif ($action == 'recall_maid' && $maidid != '') {
		$table_name = $wpdb->prefix . "st_maid";
	
	    $res = $wpdb->query("UPDATE `$table_name` SET `is_deleted` = '0' WHERE id = $maidid");
		if( false === $res ){
			print '<div class="notice notice-error is-dismissible"><p>The maid did not recall. Please try again.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
		}else{
			print '<div class="notice notice-success is-dismissible"><p>Maids recall Successfully.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
		}
		include('pages/maid-data.php');

	}elseif ($action == 'available' && $maidid != '') {
		$table_name = $wpdb->prefix . "st_maid";
	        	
	    $res = $wpdb->query("UPDATE `$table_name` SET `is_taken` = '8' WHERE id = $maidid");
		if( false === $res ){
			print '<div class="notice notice-error is-dismissible"><p>The maid status did not Change. Please try again.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
		}else{
			print '<div class="notice notice-success is-dismissible"><p>Maids Status change to Available Successfully.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
		}
		include('pages/maid-data.php');
	
	}
	elseif ($action == 'taken' && $maidid != '') {
		$table_name = $wpdb->prefix . "st_maid";
	        	
	    $res = $wpdb->query("UPDATE `$table_name` SET `is_taken` = '9' WHERE id = $maidid");
		if( false === $res ){
			print '<div class="notice notice-error is-dismissible"><p>The maid status did not Change. Please try again.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
		}else{
			print '<div class="notice notice-success is-dismissible"><p>Maids Status change to Taken Successfully.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
		}
		include('pages/maid-data.php');
	
	}

	else{
		include('pages/maid-data.php');
	}
}

function maids_HandleUploadFile()
{
	// Enable error reporting for debugging
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	// Debug logging
	error_log('maids_HandleUploadFile called');
	error_log('POST data: ' . print_r($_POST, true));
	error_log('REQUEST data: ' . print_r($_REQUEST, true));
	error_log('maid_csv_import_files_next: ' . (isset($_REQUEST['maid_csv_import_files_next']) ? $_REQUEST['maid_csv_import_files_next'] : 'NOT SET'));
	error_log('FILES data: ' . print_r($_FILES, true));
	
	global $wpdb;
	$table_name = $wpdb->prefix . "st_maid";
	if(get_option('maid_msg') == 'sucess'){
		print '<div class="notice notice-success is-dismissible"><p>Maids successfully added.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
		update_option('maid_msg', '');
	}
	if(get_option('maid_msg') == 'error'){
		print '<div class="notice notice-error is-dismissible"><p>The maid is not added. Please try again.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
		update_option('maid_msg', '');
	}
	if(isset($_REQUEST['maid_csv_import_files_next']) && $_REQUEST['maid_csv_import_files_next'] == 'deleteopt'){
		global $wpdb;
		if(!empty($_REQUEST['maidsid'])){
			$del_ids = implode(',', $_REQUEST['maidsid']);
			$res = $wpdb->query("UPDATE `$table_name` SET `is_deleted` = 1 WHERE id IN ($del_ids)");
			if( false === $res ){
				print '<div class="notice notice-error is-dismissible"><p>The maid is not deleted. Please try again.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
			}else{
				print '<div class="notice notice-success is-dismissible"><p>Maids successfully deleted.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
			}
		}
	}
//echo "<pre>";print_r($_REQUEST);exit;
	if(isset($_REQUEST['maid_csv_import_files_next']) && $_REQUEST['maid_csv_import_files_next'] == 'maidadd'){
		global $wpdb;
			$table_name = $wpdb->prefix .'st_maid';
			$code = isset($_REQUEST['code']) ? sanitize_text_field( $_REQUEST['code'] ) : 0;		
			// Enforce unique Maid Code server-side before any processing
            if ( empty( $code ) ) {
				update_option('maid_msg', 'error');
				$redirect = "admin.php?page=addmaid";
				wp_redirect( $redirect );
				exit;
			}
            $existing_count = (int) $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM `{$table_name}` WHERE `code` = %s", $code ) );
			if ( $existing_count > 0 ) {
                // Persist form values for repopulation
                $user_id = get_current_user_id();
                if ( $user_id ) {
                    $prefill = wp_unslash( $_POST );
                    unset( $prefill['maid_csv_import_files_next'] );
                    update_user_meta( $user_id, 'maid_form_prefill', $prefill );
                }
                update_option('maid_msg', 'error_code_exists');
				$redirect = "admin.php?page=addmaid";
				wp_redirect( $redirect );
				exit;
			}
			$salary = isset($_REQUEST['salary']) ? sanitize_text_field( $_REQUEST['salary'] ) : '';	
			$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : '';	
            
			//$date_of_birth = isset($_REQUEST['date_of_birth']) ? sanitize_text_field( $_REQUEST['date_of_birth'] ) : '';	
            $date_of_birth  =   isset($_REQUEST["date_of_birth"])&&$_REQUEST["date_of_birth"]!=''?date('Y-m-d',strtotime(str_replace('/', '-', $_REQUEST["date_of_birth"]))):null;
            
			$age = isset($_REQUEST['age']) ? sanitize_text_field( $_REQUEST['age'] ) : '';		
			$place_of_birth = isset($_REQUEST['place_of_birth']) ? sanitize_text_field( $_REQUEST['place_of_birth'] ) : '';		
            $height = isset($_REQUEST['height']) ? (int) $_REQUEST['height'] : 0; 		
			$weight = isset($_REQUEST['weight']) ? sanitize_text_field( $_REQUEST['weight'] ) : '';
			$nationality = isset($_REQUEST['nationality']) ? sanitize_text_field( $_REQUEST['nationality'] ) : '';		
			$address = isset($_REQUEST['address']) ? $_REQUEST['address'] : '';		
			$religion = isset($_REQUEST['religion']) ? $_REQUEST['religion'] : '';		
			$education = isset($_REQUEST['education']) ? sanitize_text_field( $_REQUEST['education'] ) : 1;
			$contact_no = isset($_REQUEST['contact_no']) ? $_REQUEST['contact_no'] : '';		
			$marrital_status = isset($_REQUEST['marrital_status']) ? sanitize_text_field( $_REQUEST['marrital_status'] ) : 1;		
			$current_status = isset($_REQUEST['current_status']) ? sanitize_text_field( $_REQUEST['current_status'] ) : 0;	
			$name_of_airport = isset($_REQUEST['name_of_airport']) ? $_REQUEST['name_of_airport'] : '';
			$maid_type= isset($_REQUEST['maid_type']) ? $_REQUEST['maid_type'] : '';
			$off_day = isset($_REQUEST['off_day']) ? sanitize_text_field($_REQUEST['off_day']) : '';
            
			$maid_logo_fr = isset($_REQUEST['maid_logo_fr']) ? $_REQUEST['maid_logo_fr'] : '';
			$no_of_children = isset($_REQUEST['no_of_children']) ? $_REQUEST['no_of_children'] : '';
			$children_age = isset($_REQUEST['children_age']) ? $_REQUEST['children_age'] : '';
			$no_of_siblings = isset($_REQUEST['no_of_siblings']) ? $_REQUEST['no_of_siblings'] : '';
			$my_number = isset($_REQUEST['my_number']) ? $_REQUEST['my_number'] : '';
			$declaration = isset($_REQUEST['declaration']) ? $_REQUEST['declaration'] : '';
			$remark = isset($_REQUEST['remark']) ? sanitize_text_field($_REQUEST['remark']) : '';
			$training_centre = isset($_REQUEST['training_centre']) ? sanitize_text_field($_REQUEST['training_centre']) : '';
			$certified_no = isset($_REQUEST['certified_no']) ? sanitize_text_field($_REQUEST['certified_no']) : '';
			$passport_logo_fr = isset($_REQUEST['passport_logo_fr']) ? $_REQUEST['passport_logo_fr'] : '';

			// Handle file uploads
			$maid_logo_fr = '';
			$passport_logo_fr = '';
			
			// Process profile photo upload
			if(isset($_FILES['maid_photo']) && $_FILES['maid_photo']['error'] == 0) {
				$maid_logo_fr = maids_handle_file_upload($_FILES['maid_photo'], 'maid_photos');
				error_log('Profile photo URL: ' . $maid_logo_fr);
			}
			
			// Process passport photo upload
			if(isset($_FILES['passport_photo']) && $_FILES['passport_photo']['error'] == 0) {
				$passport_logo_fr = maids_handle_file_upload($_FILES['passport_photo'], 'passport_photos');
				error_log('Passport photo URL: ' . $passport_logo_fr);
			}
			
			if(isset($_REQUEST['tc_interview']) && $_REQUEST['tc_interview'] != ""){
				$tc_interview = implode(",",$_REQUEST['tc_interview']);
			}else{
				$tc_interview = '';
			}

			$allergies = isset($_REQUEST['allergies']) ? sanitize_text_field($_REQUEST['allergies']) : '';
			$disability = isset($_REQUEST['disability']) ? sanitize_text_field($_REQUEST['disability']) : '';
			//$diet = isset($_REQUEST['diet']) ? $_REQUEST['diet'] : '';
			$diet = isset($_REQUEST['diet']) ? sanitize_text_field($_REQUEST['diet']) : '';

			$other_food = isset($_REQUEST['other_food']) ? sanitize_text_field($_REQUEST['other_food']) : '';

			$mental_illness = isset($_REQUEST['mental_illness']) ? sanitize_text_field($_REQUEST['mental_illness']) : '';
			$epilepsy = isset($_REQUEST['epilepsy']) ? sanitize_text_field($_REQUEST['epilepsy']) : '';
			$asthma = isset($_REQUEST['asthma']) ? sanitize_text_field($_REQUEST['asthma']) : '';
			$diabetas = isset($_REQUEST['diabetas']) ? sanitize_text_field($_REQUEST['diabetas']) : '';
			$hypertension = isset($_REQUEST['hypertension']) ? sanitize_text_field($_REQUEST['hypertension']) : '';
			$tuberculosis = isset($_REQUEST['tuberculosis']) ? sanitize_text_field($_REQUEST['tuberculosis']) : '';
			$heart_disease = isset($_REQUEST['heart_disease']) ? sanitize_text_field($_REQUEST['heart_disease']) : '';
			$malaria = isset($_REQUEST['malaria']) ? sanitize_text_field($_REQUEST['malaria']) : '';
			$operation = isset($_REQUEST['operation']) ? sanitize_text_field($_REQUEST['operation']) : '';


			$other_illness = isset($_REQUEST['other_illness']) ? sanitize_text_field($_REQUEST['other_illness']) : '';


			/*if(isset($_REQUEST['illness']) && $_REQUEST['illness'] != ""){
				$illness = implode(",",$_REQUEST['illness']);
			}else{
				$illness = '';
			}*/

            if(isset($_REQUEST['food_preferences']) && $_REQUEST['food_preferences'] != ""){
				$food_preferences = implode(",",$_REQUEST['food_preferences']);
			}else{
				$food_preferences = '';
			}
            // Care of pets (dogs/cats)
            if (isset($_REQUEST['care_pets']) && is_array($_REQUEST['care_pets'])) {
                $care_pets = implode(',', array_map('sanitize_text_field', $_REQUEST['care_pets']));
            } else {
                $care_pets = '';
            }
            // Spectacles (glasses) boolean
            $spec = 0;
            if (isset($_REQUEST['spec'])) {
                $val = strtolower( trim( (string) $_REQUEST['spec'] ) );
                $spec = in_array($val, array('1','yes','true'), true) ? 1 : 0;
            }
            
            $pevious_work_exp = isset($_REQUEST['exp']) ? sanitize_text_field($_REQUEST['exp']) : '';
			$rest_day = isset($_REQUEST['rest_day']) ? sanitize_text_field($_REQUEST['rest_day']) : '';
			$other_remark = isset($_REQUEST['other_remark']) ? sanitize_text_field($_REQUEST['other_remark']) : '';

			$fdw_declare = isset($_REQUEST['fdw_declare']) ? sanitize_text_field($_REQUEST['fdw_declare']) : '';

			if(isset($_REQUEST['fdw_interview']) && $_REQUEST['fdw_interview'] != ""){
				$fdw_interview = implode(",",$_REQUEST['fdw_interview']);
			}else{
				$fdw_interview = '';
			}
			$tc_declare = isset($_REQUEST['tc_declare']) ? sanitize_text_field($_REQUEST['tc_declare']) : '';

			if(isset($_REQUEST['fdw_availability']) && $_REQUEST['fdw_availability'] != ""){
				$fdw_availability = implode(",",$_REQUEST['fdw_availability']);
			}else{
				$fdw_availability = '';
			}
			

                $data = array( 'code' => $code, 
                	'name' => $name, 
                	'date_of_birth' => $date_of_birth, 
                	'age' => $age,
                	 'place_of_birth' => $place_of_birth, 
                	 'height' => $height, 
                	 'weight' => $weight, 
                	 'nationality' => $nationality, 
                	 'address' => $address,
                	 'contact_no' => $contact_no, 
                	 'religion' => $religion, 
                	 'education' => $education, 
                	 'marrital_status' => $marrital_status, 
                	 'current_status' => $current_status,
                	 'name_of_port_airport'=> $name_of_airport, 
                	 'maid_type' => $maid_type, 
                	 'off_day'=> $off_day,
                	 'image' => $maid_logo_fr, 
                	 'salary' => $salary,
                	 'no_of_children' => $no_of_children,
                	 'children_age' => $children_age,
                	 'no_of_siblings' => $no_of_siblings,
                	 'my_number' => $my_number,
                	 'training_centre' => $training_centre,
                	 'certified_no' => $certified_no,
                	 'tc_interview' => $tc_interview, 
                	 'allergies' => $allergies, 
                	 'disability' => $disability,
                	 'diet' => $diet,
                     'food_preferences' => $food_preferences,
                     'care_pets' => $care_pets,
                     'spec' => $spec,
                	 'other_food' => $other_food,
                	 'mental_illness' => $mental_illness,
                	 'epilepsy' => $epilepsy,
                	 'asthma' => $asthma,
                	 'diabetas' => $diabetas,
                	 'hypertension' => $hypertension,
                	 'tuberculosis' => $tuberculosis,
                	 'heart_disease' => $heart_disease,
                	 'malaria' => $malaria,
                	 'operation' => $operation,
                	 'other_illness' => $other_illness,
                	 'rest_day' => $rest_day, 
                	 'other_remark' => $other_remark,
                	 'pevious_work_exp' =>$pevious_work_exp,
                	 'fdw_declare' => $fdw_declare, 
                	 'fdw_interview' => $fdw_interview,
                	 'tc_declare' => $tc_declare,
                	 'fdw_availability' => $fdw_availability,
                	 'declaration' => $declaration,
                	 'remark' => $remark, 
                	 'modified_by' => get_current_user_id(),
                	 'passport_image' => $passport_logo_fr
                	  );        
	               $inserted = $wpdb->insert( $table_name, $data);
			
            if($inserted){
				try {
                // Clear any prefill data on success
                $user_id = get_current_user_id();
                if ( $user_id ) { delete_user_meta( $user_id, 'maid_form_prefill' ); }
				$maidid = $wpdb->insert_id;	
				// Handle time duration data (legacy field)
                if(isset($_REQUEST['time_duration']) && is_array($_REQUEST['time_duration']) && count($_REQUEST['time_duration'])>0){
                    $exp_table = $wpdb->prefix . 'maid_experience';
                    for ($i=0; $i < count($_REQUEST['time_duration']); $i++) {
                        $time_duration_val = isset($_REQUEST['time_duration'][$i]) ? sanitize_text_field($_REQUEST['time_duration'][$i]) : '';
                        $employer_name_val = isset($_REQUEST['exp_employer_name'][$i]) ? sanitize_text_field($_REQUEST['exp_employer_name'][$i]) : '';
                        $e_address_val     = isset($_REQUEST['e_address'][$i]) ? sanitize_textarea_field($_REQUEST['e_address'][$i]) : '';
                        $main_duties_val   = isset($_REQUEST['main_duties'][$i]) ? sanitize_textarea_field($_REQUEST['main_duties'][$i]) : '';

                        if($time_duration_val !== '' || $employer_name_val !== '' || $e_address_val !== '' || $main_duties_val !== ''){
                            $exp_array = array(
                                'maid_id' => $maidid,
                                'time_duration' => $time_duration_val,
                                'employer_name' => $employer_name_val,
                                'e_address' => $e_address_val,
                                'main_duties' => $main_duties_val
                            );
                            $wpdb->insert( $exp_table, $exp_array, array( '%d', '%s', '%s', '%s', '%s') );
                        }
                    }
                }
               
        
				// Handle feedback data
				if(isset($_REQUEST['feedback']) && is_array($_REQUEST['feedback']) && count($_REQUEST['feedback'])>0){
					for ($i=0; $i < count($_REQUEST['feedback']); $i++) {

						if(!empty($_REQUEST['feedback'][$i]) && !empty($_REQUEST['employer_name'][$i])){

							$employer_name = isset($_REQUEST['employer_name'][$i]) ? sanitize_text_field($_REQUEST['employer_name'][$i]) : '';
							$feedback = isset($_REQUEST['feedback'][$i]) ? sanitize_text_field($_REQUEST['feedback'][$i]) : '';

							$sql = "INSERT INTO `wp_maid_feedback`(`maid_id`, `employer_name`, `feedback`)  VALUES ('".$maidid."','".$employer_name."','".$feedback."')"; 
		                            
		                            $wpdb->get_results($sql);
				                    $lastid = $wpdb->insert_id;

						
                        }
				    }
				}    

				// Handle language proficiency data
				error_log('Processing language data');
				if(isset($_REQUEST['language']) && is_array($_REQUEST['language'])){
					error_log('Language data found: ' . print_r($_REQUEST['language'], true));
					foreach ($_REQUEST['language'] as $lang_key => $lang_value) {

						if (!empty($lang_value[0])){
							$lang_array = array(
									'maid_id' => $maidid,
									'language' => $lang_key,
									'spoken' => $lang_value[0],
									'written' => ''
							);

							$result = $wpdb->insert( 'wp_maid_language_profiency', $lang_array, array( '%d', '%s', '%s', '%s') );
							error_log('Language insert result: ' . ($result ? 'success' : 'failed'));
						}
					}
				} else {
					error_log('No language data found in request');
				}

				// Handle work area data
				if(isset($_REQUEST['work_area']) && is_array($_REQUEST['work_area'])){
					foreach ($_REQUEST['work_area'] as $key => $value) {

						if (!empty($value[0]) || !empty($value[1])){
							$work_array = array(
									'maid_id' => $maidid,
									'work_area_id' => $key,
									'willing' => $value[0],
									'experience' => $value[1]
							);

							$wpdb->insert( 'wp_maid_work_areas', $work_array, array( '%d', '%d', '%s', '%s') );
						}
					}
				}

				

                $work_area_tbl = "wp_maid_skill_master";
                // Ensure 'Care of pets' skill exists in master
                $care_label = 'Care of pets';
                $existing_care = $wpdb->get_row($wpdb->prepare("SELECT id FROM `$work_area_tbl` WHERE LOWER(lable) = LOWER(%s) LIMIT 1", $care_label));
                if (!$existing_care) {
                    $wpdb->insert($work_area_tbl, array('lable' => $care_label), array('%s'));
                }
                $query = "SELECT * FROM `$work_area_tbl` ORDER BY `id`";
                $areas = $wpdb->get_results($query);
                $count = $wpdb->num_rows;

                // Build list of JSON-only skills (language abilities, other skills, care of pets)
                $json_only_skill_ids = array();
                foreach ((array)$areas as $a_row) {
                    $label_low = strtolower((string)$a_row->lable);
                    if (strpos($label_low, 'language') !== false || strpos($label_low, 'other skills') !== false || strpos($label_low, 'care of pets') !== false) {
                        $json_only_skill_ids[] = (int)$a_row->id;
                    }
                }
                
				for($i=1; $i<= $count; $i++){
					$skill_id = $i;
                         
					/*$other = $_REQUEST['other_'.$i]; 
					$willing = $_REQUEST['willingness_'.$i]; 
					$experience = $_REQUEST['experience_'.$i];
					$exp_year = $_REQUEST['expe_year_'.$i];  
					$assessment = $_REQUEST['skill_area_'.$i]; */

					$other = isset($_REQUEST['other_'.$i]) ? $_REQUEST['other_'.$i] : '';
					$willing = isset($_REQUEST['willingness_'.$i]) ? $_REQUEST['willingness_'.$i] : '';
					$experience = isset($_REQUEST['experience_'.$i]) ? $_REQUEST['experience_'.$i] : '';
					$exp_year = isset($_REQUEST['expe_year_'.$i]) ? $_REQUEST['expe_year_'.$i] : '';
					$assessment = isset($_REQUEST['skill_area_'.$i]) ? $_REQUEST['skill_area_'.$i] : '';

					// Fallback: ensure $json_only_skill_ids is available even if earlier block didn't run
					if (!isset($json_only_skill_ids) || !is_array($json_only_skill_ids)) {
						$json_only_skill_ids = array();
						$areas_fallback = $wpdb->get_results("SELECT id, lable FROM wp_maid_skill_master");
						foreach ((array)$areas_fallback as $a_row_fb) {
							$lbl = strtolower((string)$a_row_fb->lable);
							if (strpos($lbl, 'language') !== false || strpos($lbl, 'other skills') !== false || strpos($lbl, 'care of pets') !== false) {
								$json_only_skill_ids[] = (int)$a_row_fb->id;
							}
						}
					}
                   

						/*$skill_array = array(
							'maid_id' => $maidid,
							'skill_id' => $skill_id,
							'other' => $other,
							'willing' => $willing,
							'experience' => $experience,
							'exp_year'   => $exp_year,
							'assessment' => $assessment
						);
	        
						$wpdb->insert( 'wp_maid_skills', $skill_array);*/
                        
                        if($willing != "" || $experience != "") {
						$sql = "INSERT INTO `wp_maid_skills` (`maid_id`, `skill_id`,`other`,`willing`,`experience`,`exp_year`,`assessment`) VALUES ('".$maidid."','".$skill_id."','".$other."','".$willing."','".$experience."','".$exp_year."','".$assessment."')"; 
                            
                            $wpdb->get_results($sql);
		                    $lastid = $wpdb->insert_id;
		                }

		                $other1 = isset($_REQUEST['other_skill_'.$i]) ? $_REQUEST['other_skill_'.$i] : '';
						$willing1 = isset($_REQUEST['willingness_skill_'.$i]) ? $_REQUEST['willingness_skill_'.$i] : '';
						$experience1 = isset($_REQUEST['experience_skill_'.$i]) ? $_REQUEST['experience_skill_'.$i] : '';
						$exp_year1 = isset($_REQUEST['expe_year_skill_'.$i]) ? $_REQUEST['expe_year_skill_'.$i] : '';
						$assessment1 = isset($_REQUEST['ass_skill_'.$i]) ? $_REQUEST['ass_skill_'.$i] : '';

		                if($willing1 != "" || $experience1 != "") {
						$sql = "INSERT INTO `wp_maid_skills_otc` (`maid_id`, `skill_id`,`other`,`willing`,`experience`,`exp_year`,`assessment`) VALUES ('".$maidid."','".$skill_id."','".$other1."','".$willing1."','".$experience1."','".$exp_year1."','".$assessment1."')"; 
                            
                            $wpdb->get_results($sql);
		                    $lastid = $wpdb->insert_id;
		                }
				}
	           
				update_option('maid_msg', 'sucess');
				//$redirect = "admin.php?page=maid&action=edit&maidid=".$maid_ID;
				$redirect = "admin.php?page=maid";
				//$redirect =  get_admin_url()."admin.php?page=maid"; 
				wp_redirect( $redirect );
				exit;
				} catch (Exception $e) {
					// Log the error
					error_log('Maid insertion error: ' . $e->getMessage());
					update_option('maid_msg', 'error');
					$redirect = "admin.php?page=addmaid";
					wp_redirect( $redirect );
					exit;
				}
			}else{
				update_option('maid_msg', 'error');
				$redirect = "admin.php?page=addmaid";
				wp_redirect( $redirect );
				exit;
			}
	}
	if(isset($_REQUEST['maid_csv_import_files_next']) && $_REQUEST['maid_csv_import_files_next'] == 'maidupdate'){
		global $wpdb;
		$action = isset($_REQUEST['action']) ? sanitize_text_field( $_REQUEST['action'] ) : '';
		$maidid = isset($_REQUEST['maidid']) ? sanitize_text_field( $_REQUEST['maidid'] ) : '';
		$table_name = $wpdb->prefix .'st_maid';

		if($action == 'edit' && $maidid != ''){
			$code = isset($_REQUEST['code']) ? sanitize_text_field( $_REQUEST['code'] ) : 0;		
			$salary = isset($_REQUEST['salary']) ? sanitize_text_field( $_REQUEST['salary'] ) : '';	
			$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : '';		
			/*$date_of_birth = isset($_REQUEST['date_of_birth']) ? sanitize_text_field( $_REQUEST['date_of_birth'] ) : '';*/
			$date_of_birth  =   isset($_REQUEST["date_of_birth"])&&$_REQUEST["date_of_birth"]!=''?date('Y-m-d',strtotime(str_replace('/', '-', $_REQUEST["date_of_birth"]))):null;

			$age = isset($_REQUEST['age']) ? sanitize_text_field( $_REQUEST['age'] ) : '';		
			$place_of_birth = isset($_REQUEST['place_of_birth']) ? sanitize_text_field( $_REQUEST['place_of_birth'] ) : '';		
            $height = isset($_REQUEST['height']) ? (int) $_REQUEST['height'] : 0;
			$weight = isset($_REQUEST['weight']) ? sanitize_text_field( $_REQUEST['weight'] ) : '';
			$nationality = isset($_REQUEST['nationality']) ? sanitize_text_field( $_REQUEST['nationality'] ) : '';		
			$address = isset($_REQUEST['address']) ? $_REQUEST['address'] : '';		
			$contact_no = isset($_REQUEST['contact_no']) ? $_REQUEST['contact_no'] : '';
			$religion = isset($_REQUEST['religion']) ? $_REQUEST['religion'] : '';		
			$education = isset($_REQUEST['education']) ? sanitize_text_field( $_REQUEST['education'] ) : '';		
			$marrital_status = isset($_REQUEST['marrital_status']) ? sanitize_text_field( $_REQUEST['marrital_status'] ) : 1;		
			$current_status = isset($_REQUEST['current_status']) ? sanitize_text_field( $_REQUEST['current_status'] ) : '';		
			$name_of_airport = isset($_REQUEST['name_of_airport']) ? $_REQUEST['name_of_airport'] : '';
			$maid_logo_fr = isset($_REQUEST['maid_logo_fr']) ? $_REQUEST['maid_logo_fr'] : '';
			$no_of_children = isset($_REQUEST['no_of_children']) ? $_REQUEST['no_of_children'] : '';
			$children_age = isset($_REQUEST['children_age']) ? $_REQUEST['children_age'] : '';
			$no_of_siblings = isset($_REQUEST['no_of_siblings']) ? $_REQUEST['no_of_siblings'] : '';
			$my_number = isset($_REQUEST['my_number']) ? $_REQUEST['my_number'] : '';
			$declaration = isset($_REQUEST['declaration']) ? $_REQUEST['declaration'] : '';
			$remark = isset($_REQUEST['remark']) ? sanitize_text_field($_REQUEST['remark']) : '';
			$maid_type= isset($_REQUEST['maid_type']) ? $_REQUEST['maid_type'] : '';
			$off_day = isset($_REQUEST['off_day']) ? sanitize_text_field($_REQUEST['off_day']) : '';

			$training_centre = isset($_REQUEST['training_centre']) ? sanitize_text_field($_REQUEST['training_centre']) : '';
			$certified_no = isset($_REQUEST['certified_no']) ? sanitize_text_field($_REQUEST['certified_no']) : '';

            $passport_logo_fr = isset($_REQUEST['passport_logo_fr']) ? $_REQUEST['passport_logo_fr'] : '';

            // Spectacles (glasses) boolean on update
            $spec = 0;
            if (isset($_REQUEST['spec'])) {
                $val = strtolower( trim( (string) $_REQUEST['spec'] ) );
                $spec = in_array($val, array('1','yes','true'), true) ? 1 : 0;
            }
			

			$tc_inew = $_REQUEST['tc_interview'];
			if(isset($_REQUEST['tc_interview']) && $_REQUEST['tc_interview'] != ""){
				$tc_interview = implode(",",$tc_inew);
			}else{
				$tc_interview = '';
			}

			$allergies = isset($_REQUEST['allergies']) ? sanitize_text_field($_REQUEST['allergies']) : '';
			$disability = isset($_REQUEST['disability']) ? sanitize_text_field($_REQUEST['disability']) : '';
			$diet = isset($_REQUEST['diet']) ? sanitize_text_field($_REQUEST['diet']) : '';
			//$diet = isset($_REQUEST['diet']) ? $_REQUEST['diet'] : '';
			$other_food = isset($_REQUEST['other_food']) ? sanitize_text_field($_REQUEST['other_food']) : '';

			$mental_illness = isset($_REQUEST['mental_illness']) ? sanitize_text_field($_REQUEST['mental_illness']) : '';
			$epilepsy = isset($_REQUEST['epilepsy']) ? sanitize_text_field($_REQUEST['epilepsy']) : '';
			$asthma = isset($_REQUEST['asthma']) ? sanitize_text_field($_REQUEST['asthma']) : '';
			$diabetas = isset($_REQUEST['diabetas']) ? sanitize_text_field($_REQUEST['diabetas']) : '';
			$hypertension = isset($_REQUEST['hypertension']) ? sanitize_text_field($_REQUEST['hypertension']) : '';
			$tuberculosis = isset($_REQUEST['tuberculosis']) ? sanitize_text_field($_REQUEST['tuberculosis']) : '';
			$heart_disease = isset($_REQUEST['heart_disease']) ? sanitize_text_field($_REQUEST['heart_disease']) : '';
			$malaria = isset($_REQUEST['malaria']) ? sanitize_text_field($_REQUEST['malaria']) : '';
			$operation = isset($_REQUEST['operation']) ? sanitize_text_field($_REQUEST['operation']) : '';
			$other_illness = isset($_REQUEST['other_illness']) ? sanitize_text_field($_REQUEST['other_illness']) : '';


			/*if(isset($_REQUEST['illness']) && $_REQUEST['illness'] != ""){
				$illness = implode(",",$_REQUEST['illness']);
			}else{
				$illness = '';
			}*/

			if(isset($_REQUEST['food_preferences']) && $_REQUEST['food_preferences'] != ""){
				$food_preferences = implode(",",$_REQUEST['food_preferences']);
			}else{
				$food_preferences = '';
			}
            // Care of pets (dogs/cats)
            if (isset($_REQUEST['care_pets']) && is_array($_REQUEST['care_pets'])) {
                $care_pets = implode(',', array_map('sanitize_text_field', $_REQUEST['care_pets']));
            } else {
                $care_pets = '';
            }

			$pevious_work_exp = isset($_REQUEST['exp']) ? sanitize_text_field($_REQUEST['exp']) : '';
			$rest_day = isset($_REQUEST['rest_day']) ? sanitize_text_field($_REQUEST['rest_day']) : '';
			$other_remark = isset($_REQUEST['other_remark']) ? sanitize_text_field($_REQUEST['other_remark']) : '';

			$fdw_declare = isset($_REQUEST['fdw_declare']) ? sanitize_text_field($_REQUEST['fdw_declare']) : '';
			if(isset($_REQUEST['fdw_interview']) && $_REQUEST['fdw_interview'] != ""){
				$fdw_interview = implode(",",$_REQUEST['fdw_interview']);
			}else{
				$fdw_interview = '';
			}

			$tc_declare = isset($_REQUEST['tc_declare']) ? sanitize_text_field($_REQUEST['tc_declare']) : '';
			if(isset($_REQUEST['fdw_availability']) && $_REQUEST['fdw_availability'] != ""){
				$fdw_availability = implode(",",$_REQUEST['fdw_availability']);
			}else{
				$fdw_availability = '';
			}
		

			/*$update_status = $wpdb->update($table_name, array( 
				'code' => $code, 'name' => $name, 'date_of_birth' => $date_of_birth, 'age' => $age, 'place_of_birth' => $place_of_birth, 'height' => $height, 'weight' => $weight, 'nationality' => $nationality, 'address' => $address,'contact_no' => $contact_no, 'religion' => $religion, 'education' => $education, 'marrital_status' => $marrital_status, 'current_status' => $current_status,'name_of_port_airport'=> $name_of_airport, 'image' => $maid_logo_fr, 'salary' => $salary,'no_of_children' => $no_of_children,'children_age' => $children_age,'no_of_siblings' => $no_of_siblings,'my_number' => $my_number,'training_centre' => $training_centre,'certified_no' => $certified_no,'tc_interview' => $tc_interview, 'allergies' => $allergies, 'disability' => $disability,'diet' => $diet,'food_preferences' => $food_preferences,'other_food' => $other_food,'illness' => $illness,'other_illness' => $other_illness,'rest_day' => $rest_day, 'other_remark' => $other_remark,'pevious_work_exp' =>$pevious_work_exp ,'declaration' => $declaration,'remark' => $remark, 'modified_by' => get_current_user_id()), array( 'id' => $maidid ), array( '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%d', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s' , '%s', '%s', '%s','%s', '%s', '%s', '%s' , '%s', '%s', '%s', '%s', '%s', '%s'), array( '%d' ) );*/

				$data = array( 'code' => $code, 
                	'name' => $name, 
                	'date_of_birth' => $date_of_birth, 
                	'age' => $age,
                	 'place_of_birth' => $place_of_birth, 
                	 'height' => $height, 
                	 'weight' => $weight, 
                	 'nationality' => $nationality, 
                	 'address' => $address,
                	 'contact_no' => $contact_no, 
                	 'religion' => $religion, 
                	 'education' => $education, 
                	 'marrital_status' => $marrital_status, 
                	 'current_status' => $current_status,
                	 'name_of_port_airport'=> $name_of_airport, 
                	 'maid_type'=> $maid_type,
                	 'off_day'=> $off_day,
                	 'image' => $maid_logo_fr, 
                	 'salary' => $salary,
                	 'no_of_children' => $no_of_children,
                	 'children_age' => $children_age,
                	 'no_of_siblings' => $no_of_siblings,
                	 'my_number' => $my_number,
                	 'training_centre' => $training_centre,
                	 'certified_no' => $certified_no,
                	 'tc_interview' => $tc_interview, 
                	 'allergies' => $allergies, 
                	 'disability' => $disability,
                	 'diet' => $diet,
                     'food_preferences' => $food_preferences,
                     'care_pets' => $care_pets,
                     'spec' => $spec,
                	 'other_food' => $other_food,
                	 'mental_illness' => $mental_illness,
                	 'epilepsy' => $epilepsy,
                	 'asthma' => $asthma,
                	 'diabetas' => $diabetas,
                	 'hypertension' => $hypertension,
                	 'tuberculosis' => $tuberculosis,
                	 'heart_disease' => $heart_disease,
                	 'malaria' => $malaria,
                	 'operation' => $operation,
                	 'other_illness' => $other_illness,
                	 'rest_day' => $rest_day, 
                	 'other_remark' => $other_remark,
                	 'pevious_work_exp' =>$pevious_work_exp,
                	 'fdw_declare' => $fdw_declare, 
                	 'fdw_interview' => $fdw_interview,
                	 'tc_declare' => $tc_declare,
                	 'fdw_availability' => $fdw_availability,
                	 'declaration' => $declaration,
                	 'remark' => $remark, 
                	 'modified_by' => get_current_user_id(),
                	 'passport_image' => $passport_logo_fr
                	);   
                	 //echo "<pre>"; print_r($data); echo "<pre>"; exit;
                	$id = array( 'id' => $maidid );
	                $update_status = $wpdb->update( $table_name, $data, $id);

			if (!empty($maidid)) {

                // Handle work experience data
                // Fallback: support JSON payload for dynamic fields similar to employment history
                $we_payload_raw = isset($_REQUEST['work_experience_payload']) ? wp_unslash($_REQUEST['work_experience_payload']) : '';
                if (!empty($we_payload_raw)) {
                    $we_decoded = json_decode(stripslashes($we_payload_raw), true);
                    if (is_array($we_decoded)) {
                        $_REQUEST['time_duration'] = array();
                        $_REQUEST['exp_employer_name'] = array();
                        $_REQUEST['e_address'] = array();
                        $_REQUEST['main_duties'] = array();
                        $_REQUEST['exp_id'] = array();
                        foreach ($we_decoded as $row_dec) {
                            $_REQUEST['exp_id'][] = isset($row_dec['id']) ? $row_dec['id'] : '';
                            $_REQUEST['time_duration'][] = isset($row_dec['time_duration']) ? $row_dec['time_duration'] : '';
                            $_REQUEST['exp_employer_name'][] = isset($row_dec['employer_name']) ? $row_dec['employer_name'] : '';
                            $_REQUEST['e_address'][] = isset($row_dec['e_address']) ? $row_dec['e_address'] : '';
                            $_REQUEST['main_duties'][] = isset($row_dec['main_duties']) ? $row_dec['main_duties'] : '';
                        }
                        error_log('WORK EXPERIENCE DEBUG - Fallback JSON payload parsed and arrays populated.');
                    }
                }

                if(isset($_REQUEST['time_duration']) && is_array($_REQUEST['time_duration'])) {
                    $exp_table = $wpdb->prefix . 'maid_experience';
                    // Simplify: delete all and re-insert current set to ensure removed rows are purged
                    $wpdb->query("DELETE FROM {$exp_table} WHERE maid_id = $maidid");

                    foreach($_REQUEST['time_duration'] as $i => $time_duration) {
                        $time_duration_val = isset($time_duration) ? sanitize_text_field($time_duration) : '';
                        $employer_name_val = isset($_REQUEST['exp_employer_name'][$i]) ? sanitize_text_field($_REQUEST['exp_employer_name'][$i]) : '';
                        $e_address_val     = isset($_REQUEST['e_address'][$i]) ? sanitize_textarea_field($_REQUEST['e_address'][$i]) : '';
                        $main_duties_val   = isset($_REQUEST['main_duties'][$i]) ? sanitize_textarea_field($_REQUEST['main_duties'][$i]) : '';

                        if($time_duration_val !== '' || $employer_name_val !== '' || $e_address_val !== '' || $main_duties_val !== '') {
                            $exp_array = array(
                                'maid_id' => $maidid,
                                'time_duration' => $time_duration_val,
                                'employer_name' => $employer_name_val,
                                'e_address' => $e_address_val,
                                'main_duties' => $main_duties_val
                            );
                            $wpdb->insert($exp_table, $exp_array, array('%d', '%s', '%s', '%s', '%s'));
                        }
                    }
                }
                
               
                // Handle employment history data
				// Debug: Log raw employment history data from $_REQUEST
				error_log('EMPLOYMENT HISTORY DEBUG - Raw $_REQUEST data:');
				error_log('from_date: ' . (isset($_REQUEST['from_date']) ? print_r($_REQUEST['from_date'], true) : 'NOT SET'));
				error_log('to_date: ' . (isset($_REQUEST['to_date']) ? print_r($_REQUEST['to_date'], true) : 'NOT SET'));
				error_log('country: ' . (isset($_REQUEST['country']) ? print_r($_REQUEST['country'], true) : 'NOT SET'));
				error_log('employer: ' . (isset($_REQUEST['employer']) ? print_r($_REQUEST['employer'], true) : 'NOT SET'));
				error_log('work_duties: ' . (isset($_REQUEST['work_duties']) ? print_r($_REQUEST['work_duties'], true) : 'NOT SET'));
				error_log('remark_emp: ' . (isset($_REQUEST['remark_emp']) ? print_r($_REQUEST['remark_emp'], true) : 'NOT SET'));

                // Fallback: If dynamic array inputs are not posted as arrays (reported issue),
                // accept JSON payload from hidden field `employment_history_payload` and
                // populate the expected array keys.
                $eh_payload_raw = isset($_REQUEST['employment_history_payload']) ? wp_unslash($_REQUEST['employment_history_payload']) : '';
                if(!empty($eh_payload_raw)){
                    $eh_decoded = json_decode(stripslashes($eh_payload_raw), true);
                    if(is_array($eh_decoded)){
                        $from_list = array();
                        $to_list = array();
                        $country_list = array();
                        $employer_list = array();
                        $duties_list = array();
                        $remark_list = array();
                        foreach($eh_decoded as $row_dec){
                            $from_list[]    = isset($row_dec['from_date']) ? (string)$row_dec['from_date'] : '';
                            $to_list[]      = isset($row_dec['to_date']) ? (string)$row_dec['to_date'] : '';
                            $country_list[] = isset($row_dec['country']) ? (string)$row_dec['country'] : '';
                            $employer_list[]= isset($row_dec['employer']) ? (string)$row_dec['employer'] : '';
                            $duties_list[]  = isset($row_dec['work_duties']) ? (string)$row_dec['work_duties'] : '';
                            $remark_list[]  = isset($row_dec['remark']) ? (string)$row_dec['remark'] : '';
                        }
                        $_REQUEST['from_date']  = $from_list;
                        $_REQUEST['to_date']    = $to_list;
                        $_REQUEST['country']    = $country_list;
                        $_REQUEST['employer']   = $employer_list;
                        $_REQUEST['work_duties']= $duties_list;
                        $_REQUEST['remark_emp'] = $remark_list;
                        error_log('EMPLOYMENT HISTORY DEBUG - Fallback JSON payload parsed and arrays populated.');
                    } else {
                        error_log('EMPLOYMENT HISTORY DEBUG - Fallback JSON payload exists but failed to decode');
                    }
                }
				
				// Debug: Additional array length checks
                if(isset($_REQUEST['from_date']) && is_array($_REQUEST['from_date'])) {
					error_log('EMPLOYMENT HISTORY DEBUG - Array lengths:');
					error_log('  from_date array length: ' . count($_REQUEST['from_date']));
					error_log('  to_date array length: ' . (isset($_REQUEST['to_date']) && is_array($_REQUEST['to_date']) ? count($_REQUEST['to_date']) : 'NOT ARRAY'));
					error_log('  country array length: ' . (isset($_REQUEST['country']) && is_array($_REQUEST['country']) ? count($_REQUEST['country']) : 'NOT ARRAY'));
					error_log('  employer array length: ' . (isset($_REQUEST['employer']) && is_array($_REQUEST['employer']) ? count($_REQUEST['employer']) : 'NOT ARRAY'));
					error_log('  work_duties array length: ' . (isset($_REQUEST['work_duties']) && is_array($_REQUEST['work_duties']) ? count($_REQUEST['work_duties']) : 'NOT ARRAY'));
					error_log('  remark_emp array length: ' . (isset($_REQUEST['remark_emp']) && is_array($_REQUEST['remark_emp']) ? count($_REQUEST['remark_emp']) : 'NOT ARRAY'));
				}
				
				if(isset($_REQUEST['from_date']) && is_array($_REQUEST['from_date'])) {
					error_log('EMPLOYMENT HISTORY DEBUG - Processing employment history for maid_id: ' . $maidid);
					error_log('EMPLOYMENT HISTORY DEBUG - Number of from_date entries: ' . count($_REQUEST['from_date']));
					
					// Delete existing records first
					error_log('EMPLOYMENT HISTORY DEBUG - Deleting existing employment history records for maid_id: ' . $maidid);
					$employment_table = $wpdb->prefix . 'employment_history';
                    $delete_result = $wpdb->query("DELETE FROM {$employment_table} WHERE maid_id = $maidid");
					error_log('EMPLOYMENT HISTORY DEBUG - Delete operation result: ' . ($delete_result !== false ? 'SUCCESS (rows affected: ' . $delete_result . ')' : 'FAILED - ' . $wpdb->last_error));

					// Insert new records - only if there's meaningful data
					foreach($_REQUEST['from_date'] as $i => $from_date) {
						error_log('EMPLOYMENT HISTORY DEBUG - Processing record #' . ($i + 1));
						
						$from_date = sanitize_text_field($from_date);
						$to_date = isset($_REQUEST['to_date'][$i]) ? sanitize_text_field($_REQUEST['to_date'][$i]) : '';
						$country = isset($_REQUEST['country'][$i]) ? sanitize_text_field($_REQUEST['country'][$i]) : '';
						$employer = isset($_REQUEST['employer'][$i]) ? sanitize_text_field($_REQUEST['employer'][$i]) : '';
						$work_duties = isset($_REQUEST['work_duties'][$i]) ? sanitize_textarea_field($_REQUEST['work_duties'][$i]) : '';
						$remark = isset($_REQUEST['remark_emp'][$i]) ? sanitize_textarea_field($_REQUEST['remark_emp'][$i]) : '';
						
						// Debug: Log the processed data for this record
						error_log('EMPLOYMENT HISTORY DEBUG - Record #' . ($i + 1) . ' data after sanitization:');
						error_log('  from_date: "' . $from_date . '"');
						error_log('  to_date: "' . $to_date . '"');
						error_log('  country: "' . $country . '"');
						error_log('  employer: "' . $employer . '"');
						error_log('  work_duties: "' . $work_duties . '"');
						error_log('  remark: "' . $remark . '"');
						
						// Only insert if there's at least a from_date AND employer (both required)
						error_log('EMPLOYMENT HISTORY DEBUG - Validation check for record #' . ($i + 1) . ': from_date="' . $from_date . '", employer="' . $employer . '"');
						
						if(!empty($from_date) && !empty($employer)) {
							error_log('EMPLOYMENT HISTORY DEBUG - Record #' . ($i + 1) . ' passed validation, inserting into database');
							
                            $insert_result = $wpdb->insert(
                                $employment_table,
                                array(
                                    'maid_id' => $maidid,
                                    'from_date' => $from_date,
                                    'to_date' => $to_date,
                                    'country' => $country,
                                    'employer' => $employer,
                                    'work_duties' => $work_duties,
                                    'remark' => $remark
                                ),
                                array('%d', '%s', '%s', '%s', '%s', '%s', '%s')
                            );
							
							// Debug: Log the result of the insert operation
							if($insert_result !== false) {
								$insert_id = $wpdb->insert_id;
								error_log('EMPLOYMENT HISTORY DEBUG - Record #' . ($i + 1) . ' INSERT SUCCESS - New ID: ' . $insert_id);
							} else {
								error_log('EMPLOYMENT HISTORY DEBUG - Record #' . ($i + 1) . ' INSERT FAILED - Error: ' . $wpdb->last_error);
								error_log('EMPLOYMENT HISTORY DEBUG - Last query: ' . $wpdb->last_query);
							}
						} else {
							error_log('EMPLOYMENT HISTORY DEBUG - Record #' . ($i + 1) . ' SKIPPED - Failed validation (missing from_date or employer)');
						}
					}
					error_log('EMPLOYMENT HISTORY DEBUG - Finished processing employment history for maid_id: ' . $maidid);
				} else {
					error_log('EMPLOYMENT HISTORY DEBUG - No employment history data found in $_REQUEST or from_date is not an array');
				}

                // Handle feedback data (Employment History in Singapore)
                // Fallback: parse JSON payload if provided
                $fb_payload_raw = isset($_REQUEST['feedback_payload']) ? wp_unslash($_REQUEST['feedback_payload']) : '';
                if (!empty($fb_payload_raw)) {
                    $fb_decoded = json_decode(stripslashes($fb_payload_raw), true);
                    if (is_array($fb_decoded)) {
                        $_REQUEST['employer_name'] = array();
                        $_REQUEST['feedback'] = array();
                        foreach ($fb_decoded as $row_dec) {
                            $_REQUEST['employer_name'][] = isset($row_dec['employer_name']) ? $row_dec['employer_name'] : '';
                            $_REQUEST['feedback'][] = isset($row_dec['feedback']) ? $row_dec['feedback'] : '';
                        }
                        error_log('FEEDBACK DEBUG - Fallback JSON payload parsed and arrays populated.');
                    }
                }

                // Always delete existing records first so removed cards are purged even when none are submitted
                $wpdb->query("DELETE FROM wp_maid_feedback WHERE maid_id = $maidid");

                // Insert new records if any
                if(isset($_REQUEST['feedback']) && is_array($_REQUEST['feedback'])) {
                    foreach($_REQUEST['feedback'] as $i => $feedback) {
                        if(!empty($feedback) && !empty($_REQUEST['employer_name'][$i])) {
                            $wpdb->insert(
                                'wp_maid_feedback',
                                array(
                                    'maid_id' => $maidid,
                                    'employer_name' => sanitize_text_field($_REQUEST['employer_name'][$i]),
                                    'feedback' => sanitize_textarea_field($feedback)
                                ),
                                array('%d', '%s', '%s')
                            );
                        }
                    }
                }    
				
				$wpdb->query("DELETE FROM wp_maid_language_profiency WHERE maid_id = $maidid ");

				foreach ($_REQUEST['language'] as $lang_key => $lang_value) {

					if (!empty($lang_value[0])){
						$lang_array = array(
								'maid_id' => $maidid,
								'language' => $lang_key,
								'spoken' => $lang_value[0],
								'written' => ''
						);

						$wpdb->insert( 'wp_maid_language_profiency', $lang_array, array( '%d', '%s', '%s', '%s') );
					}
				}

				$wpdb->query("DELETE FROM wp_maid_work_areas WHERE maid_id = $maidid ");

				foreach ($_REQUEST['work_area'] as $key => $value) {

					if (!empty($value[0]) || !empty($value[1])){
						$work_array = array(
								'maid_id' => $maidid,
								'work_area_id' => $key,
								'willing' => $value[0],
								'experience' => $value[1]
						);

						$wpdb->insert( 'wp_maid_work_areas', $work_array, array( '%d', '%d', '%s', '%s') );
					}
				}

				$work_area_tbl = "wp_maid_skill_master";
				$query = "SELECT * FROM `$work_area_tbl` ORDER BY `id`";
				$areas = $wpdb->get_results($query);
				$count = $wpdb->num_rows;
                
				for($i=1; $i<= $count; $i++){
					$skill_id = $i;


					$other = isset($_REQUEST['other_'.$i]) ? $_REQUEST['other_'.$i] : '';
					$willing = isset($_REQUEST['willingness_'.$i]) ? $_REQUEST['willingness_'.$i] : '';
					$experience = isset($_REQUEST['experience_'.$i]) ? $_REQUEST['experience_'.$i] : '';
					$exp_year = isset($_REQUEST['expe_year_'.$i]) ? $_REQUEST['expe_year_'.$i] : '';
					$assessment = isset($_REQUEST['skill_area_'.$i]) ? $_REQUEST['skill_area_'.$i] : '';
                        
                        $check_data =$wpdb->get_results("SELECT * FROM wp_maid_skills WHERE maid_id='".$maidid."' and skill_id = '".$skill_id."'");
                        $num_rows = $wpdb->num_rows;
                        if($num_rows > 0) {
                        $update = $wpdb->query("UPDATE wp_maid_skills SET 
							`other`='".$other."',
							`willing`='".$willing."',
							`experience`='".$experience."',
							`exp_year`='".$exp_year."',
							`assessment`='".$assessment."'
							WHERE maid_id='".$maidid."' and skill_id = '".$skill_id."'"); 
                        } else {
                        	if($willing != "" || $experience != "" || ((in_array((int)$skill_id, $json_only_skill_ids, true)) && $other != "")) {
                            	$sql = "INSERT INTO `wp_maid_skills` (`maid_id`, `skill_id`,`other`,`willing`,`experience`,`exp_year`,`assessment`) VALUES ('".$maidid."','".$skill_id."','".$other."','".$willing."','".$experience."','".$exp_year."','".$assessment."')"; 
	                            
                            	$wpdb->get_results($sql);
                            		            $lastid = $wpdb->insert_id;
                            	        }
                        }

                    $other1 = isset($_REQUEST['other_skill_'.$i]) ? $_REQUEST['other_skill_'.$i] : '';
					$willing1 = isset($_REQUEST['willingness_skill_'.$i]) ? $_REQUEST['willingness_skill_'.$i] : '';
					$experience1 = isset($_REQUEST['experience_skill_'.$i]) ? $_REQUEST['experience_skill_'.$i] : '';
					$exp_year1 = isset($_REQUEST['expe_year_skill_'.$i]) ? $_REQUEST['expe_year_skill_'.$i] : '';
					$assessment1 = isset($_REQUEST['ass_skill_'.$i]) ? $_REQUEST['ass_skill_'.$i] : '';

					// Fallback: ensure $json_only_skill_ids exists for OTC loop too
					if (!isset($json_only_skill_ids) || !is_array($json_only_skill_ids)) {
						$json_only_skill_ids = array();
						$areas_fallback = $wpdb->get_results("SELECT id, lable FROM wp_maid_skill_master");
						foreach ((array)$areas_fallback as $a_row_fb) {
							$lbl = strtolower((string)$a_row_fb->lable);
							if (strpos($lbl, 'language') !== false || strpos($lbl, 'other skills') !== false || strpos($lbl, 'care of pets') !== false) {
								$json_only_skill_ids[] = (int)$a_row_fb->id;
							}
						}
					}

					    $check_data =$wpdb->get_results("SELECT * FROM wp_maid_skills_otc WHERE maid_id='".$maidid."' and skill_id = '".$skill_id."'");
                        $num_rows = $wpdb->num_rows;
                        if($num_rows > 0) {
                        $update = $wpdb->query("UPDATE wp_maid_skills_otc SET 
							`other`='".$other1."',
							`willing`='".$willing1."',
							`experience`='".$experience1."',
							`exp_year`='".$exp_year1."',
							`assessment`='".$assessment1."'
							WHERE maid_id='".$maidid."' and skill_id = '".$skill_id."'"); 
                        } else {
                        	if($willing1 != "" || $experience1 != "" || ((in_array((int)$skill_id, $json_only_skill_ids, true)) && $other1 != "")) {
                            	$sql = "INSERT INTO `wp_maid_skills_otc` (`maid_id`, `skill_id`,`other`,`willing`,`experience`,`exp_year`,`assessment`) VALUES ('".$maidid."','".$skill_id."','".$other1."','".$willing1."','".$experience1."','".$exp_year1."','".$assessment1."')"; 
	                            
                            	$wpdb->get_results($sql);
                            		            $lastid = $wpdb->insert_id;
                            	        }
                        }  

				}
			}

			if ( false === $update_status ) {				
				$error_count = true;
				print '<div class="notice notice-error is-dismissible"><p>The maid is not updated. Please try again.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
			}else{
				//$wpdb->query("DELETE FROM `$maid_communes` WHERE `maid_id` = ".$maidid);
				
				print '<div class="notice notice-success is-dismissible"><p>The maid is successfully updated.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
			}
		}else{
			return;
		}
	}
}

function maids_HandleMaidsCat()
{
	global $wpdb;
	$maid_cat_table = $wpdb->prefix . "maid_cat";
	if(isset($_REQUEST['maid_action']) && $_REQUEST['maid_action'] == 'deletecatopt'){
		if(!empty($_REQUEST['conscatid'])){
			$del_ids = implode(',', $_REQUEST['conscatid']);
			if($_REQUEST['assignposts'] == 1){
				$maid_table = get_option('maid_table');
				$res = $wpdb->query("UPDATE `$maid_table` SET `cat_id` = 1 WHERE cat_id IN ($del_ids)");
			}
			if($_REQUEST['assignposts'] == 0){
				$maid_table = get_option('maid_table');
				$res = $wpdb->query("UPDATE `$maid_table` SET `is_deleted` = 0 WHERE cat_id IN ($del_ids)");
			}
			$res = $wpdb->query("UPDATE `$maid_cat_table` SET `is_deleted` = 0 WHERE id IN ($del_ids)");
			if ( false === $res ) {
				print '<div class="notice notice-error is-dismissible"><p>The conseil category is not deleted. Please try again.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';				
			}else{
				print '<div class="notice notice-success is-dismissible"><p>Conseil category successfully deleted.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';				
			}
		}
	}
	if(isset($_REQUEST['maid_action']) && $_REQUEST['maid_action'] == 'managecat'){
		if ( !isset( $_POST['_wpnonce_add-maid_cat'] ) || !wp_verify_nonce( $_POST['_wpnonce_add-maid_cat'], 'maid_cat_nonece' ) ){
			return;
		}
		/* category add action */
		if(isset($_REQUEST['maid_cat_id']) && $_REQUEST['maid_cat_id'] == ''){
			$name_fr = isset($_REQUEST['maid_cat_name_fr']) ? $_REQUEST['maid_cat_name_fr'] : '';
			$slug_fr = isset($_REQUEST['maid_cat_slug_fr']) ? sanitize_title($_REQUEST['maid_cat_slug_fr']) : '';
			$name_en = isset($_REQUEST['maid_cat_name_en']) ? $_REQUEST['maid_cat_name_en'] : '';
			$slug_en = isset($_REQUEST['maid_cat_slug_en']) ? sanitize_title($_REQUEST['maid_cat_slug_en']) : '';
			$name_nl = isset($_REQUEST['maid_cat_name_nl']) ? $_REQUEST['maid_cat_name_nl'] : '';
			$slug_nl = isset($_REQUEST['maid_cat_slug_nl']) ? sanitize_title($_REQUEST['maid_cat_slug_nl']) : '';
			$inserted = $wpdb->query( $wpdb->prepare("INSERT INTO $maid_cat_table (`name_fr`, `name_en`, `name_nl`, `slug_fr`, `slug_en`, `slug_nl`) VALUES (%s, %s, %s, %s, %s, %s)", $name_fr, $name_en, $name_nl, $slug_fr, $slug_en, $slug_nl) );
			if($inserted){			
				print '<div class="notice notice-success is-dismissible"><p>Category successfully added.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
				
			}else{
				print '<div class="notice notice-error is-dismissible"><p>Category not added. Please try again.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
			}
		}
		/* category edit action */
		if(isset($_REQUEST['maid_cat_id']) && $_REQUEST['maid_cat_id'] != ''){
			$catid = isset($_REQUEST['maid_cat_id']) ? sanitize_text_field( $_REQUEST['maid_cat_id'] ) : 0;
			$row = $wpdb->get_row( "SELECT * FROM $maid_cat_table WHERE id = $catid" );		
			if(empty($row)){
				print '<div class="notice notice-error is-dismissible"><p>edited category not found.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
				return;
			}
			$name_fr = isset($_REQUEST['maid_cat_name_fr']) ? $_REQUEST['maid_cat_name_fr'] : '';
			$slug_fr = isset($_REQUEST['maid_cat_slug_fr']) ? sanitize_title($_REQUEST['maid_cat_slug_fr']) : '';
			$name_en = isset($_REQUEST['maid_cat_name_en']) ? $_REQUEST['maid_cat_name_en'] : '';
			$slug_en = isset($_REQUEST['maid_cat_slug_en']) ? sanitize_title($_REQUEST['maid_cat_slug_en']) : '';
			$name_nl = isset($_REQUEST['maid_cat_name_nl']) ? $_REQUEST['maid_cat_name_nl'] : '';
			$slug_nl = isset($_REQUEST['maid_cat_slug_nl']) ? sanitize_title($_REQUEST['maid_cat_slug_nl']) : '';
			$update_status = $wpdb->update($maid_cat_table, array( 'name_fr' => $name_fr, 'slug_fr' => $slug_fr, 'name_en' => $name_en, 'slug_en' => $slug_en, 'name_nl' => $name_nl, 'slug_nl' => $slug_nl), array( 'ID' => $row->id ), array( '%s', '%s','%s', '%s','%s', '%s'), array( '%d' ) );
			if ( false === $update_status ) {
				print '<div class="notice notice-error is-dismissible"><p>Category not updated. Please try again.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
			}else{		
				print '<div class="notice notice-success is-dismissible"><p>Category update successfully.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
			}
		}
	}
}

function david_get_maid_cat_data(){
	global $wpdb;
	$table = $wpdb->prefix . "maid_cat";
	$cur_lan = pll_current_language('slug');  if($cur_lan == ''){ $cur_lan = pll_default_language('slug');}
	$name = "name_$cur_lan";
	$slug = "slug_$cur_lan";
	
	$primaryKey = 'id';

	$columns = array(
		array('db'        => 'id',
			'dt'        => 0),
		array(
			'db'        => 'id',
			'dt'        => 1,
			'formatter' => function( $d ) {
				return '<a href="?page=maid_cat&action=managecat&maid_catid='.$d.'">Edit</a>';
			}
		),
		array( 'db' => $name, 'dt' => 2 ),
		array( 'db' => $slug, 'dt' => 3 )
	);

	$sql_details = array(
		'user' => DB_USER,
		'pass' => DB_PASSWORD,
		'db'   => DB_NAME,
		'host' => DB_HOST
	);

	require( 'ssp.class.php' );
	
	$jsonp = preg_match('/^[$A-Z_][0-9A-Z_$]*$/i', $_GET['callback']) ?
	$_GET['callback'] :
	false;

	
	if ( $jsonp ) {
		echo $jsonp.'('.json_encode(
			SSP::complex($_GET, $sql_details, $table, $primaryKey, $columns, null, "is_deleted=1")
		).');';
	}
	exit;
}

function david_get_maid_data(){
	global $wpdb;
	
	// Debug logging
	if (defined('WP_DEBUG') && WP_DEBUG) {
		error_log('DataTables AJAX Request: ' . print_r($_REQUEST, true));
	}
	
	$table = $wpdb->prefix . "st_maid";

	$primaryKey = 'id';

	$columns = array(
		array('db'        => 'id',
			'dt'        => 0),
		array(
			'db'        => 'code',
			'dt'        => 1
		),
		array( 'db' => 'name', 'dt' => 2 ),
		array( 'db' => 'age', 'dt' => 3),
		array( 'db' => 'created_by', 'dt' => 4,
			'formatter' => function( $d ) {

				$user_meta=get_userdata($d);
				return $user_meta->roles;
			}
		),
		array( 'db' => 'nationality',   'dt' => 5 ),
		array(
			'db'        => 'is_taken',
			'dt'        => 6,
			'formatter' => function( $d ) {
				// if ($d == 0) {
				// 	$status = 'Pending';
				// }elseif ($d == 1) {
				// 	$status = 'Approved';
				// }elseif ($d == 2) {
				// 	$status = 'Rejected';
				// }
				if ($d == 8) {
					$status = 'Available';
				}elseif ($d == 9) {
					$status = 'Taken';
				 }

				return $status;
			}
		),
		array( 'db'        => 'is_show',
			'dt'        => 7,
			'formatter' => function( $d, $row ) {
				$hide_show = $d == 5 ? 'Hide' : 'Show';

				if ($d == 4) {
					$hide_show = 'Hide';
					$is_show = 5;
				}else if($d == 5){
					$hide_show = 'Show';
					$is_show = 4;
				}
				
				return '<a href="?page=maid&action=hide_show&maidid='.$row["id"].'&is_show='.$is_show.'"><button type="button">'.$hide_show.'</button></a>';
			}),
		array(
			'db'        => 'is_deleted',
			'dt'        => 8,
			'formatter' => function( $d, $row ) {

				if(current_user_can('supplier'))
				{
					return '
						<a href="?page=maid&action=edit&maidid='.$row["id"].'"><button class="button button-primary" type="button">Edit</button></a>';
				}
				else
				{
					/*if ($row['status'] == 1) {
						return '
						<a href="?page=maid&action=edit&maidid='.$d.'"><button class="button button-primary" type="button">Edit</button></a>
						<a href="?page=maid&action=status_pending&maidid='.$d.'"><button class="button button-primary" type="button">Pending</button></a>
						<a href="?page=maid&action=status_reject&maidid='.$d.'"><button class="button button-primary" type="button">Rejected</button></a>';
					}
					elseif ($row['status'] == 2) {
						return '
						<a href="?page=maid&action=edit&maidid='.$d.'"><button class="button button-primary" type="button">Edit</button></a>
						<a href="?page=maid&action=status_approve&maidid='.$d.'"><button class="button button-primary" type="button">Approved</button></a>
						<a href="?page=maid&action=status_pending&maidid='.$d.'"><button class="button button-primary" type="button">Pending</button></a>';
					}
					elseif ($row['status'] == 0) {
						return '
						<a href="?page=maid&action=edit&maidid='.$d.'"><button class="button button-primary" type="button">Edit</button></a>
						<a href="?page=maid&action=status_approve&maidid='.$d.'"><button class="button button-primary" type="button">Approved</button></a>
						<a href="?page=maid&action=status_reject&maidid='.$d.'"><button class="button button-primary" type="button">Rejected</button></a>';
					}*/

					$rtn_val='<a href="?page=maid&action=edit&maidid='.$row["id"].'"><button class="button button-primary" type="button">Edit</button></a>
					<a target="_blank" href="'.site_url().'/maid-details/?maid_id='.$row["id"].'"><button class="button button-primary" type="button">View </button></a>';
					
					
					if ($row['is_taken'] == 8) {
						$rtn_val.=' <a href="?page=maid&action=taken&maidid='.$row["id"].'"><button class="button button-primary" type="button">Taken</button></a>';
					}elseif($row['is_taken'] == 9){

						$rtn_val.=' <a href="?page=maid&action=available&maidid='.$row["id"].'"><button class="button button-primary" type="button">Available</button></a>';

					}
					

					if($d == 1){

						$rtn_val.=' <a href="?page=maid&action=recall_maid&maidid='.$row["id"].'"><button class="button button-primary" type="button">Recall</button></a>';

					}else{
						$rtn_val.=' <a href="?page=maid&action=delete_maid&maidid='.$row["id"].'"><button class="button button-primary" type="button">Delete</button></a>';
						
					}
					return $rtn_val;
				}
			}
		)
	);
/* 		array(
			'db'        => 'is_featured',
			'dt'        => 10,
			'formatter' => function( $d ) {
				$text = $d == 1 ? 'Yes' : 'No';
				return '<a href="javascript:void(0);" valid="'.$d.'" class="fetured'.$d.'">'.$text.'</a>';
			}
		)	
 */
	$sql_details = array(
		'user' => DB_USER,
		'pass' => DB_PASSWORD,
		'db'   => DB_NAME,
		'host' => DB_HOST
	);

	require( 'ssp.class.php' );
	
	// Handle both JSONP and regular AJAX requests
	$jsonp = isset($_GET['callback']) && preg_match('/^[$A-Z_][0-9A-Z_$]*$/i', $_GET['callback']) ?
		$_GET['callback'] :
		false;

	// Get request data from either GET or POST
	$request_data = array_merge($_GET, $_POST);
	
	try {
		if(current_user_can('supplier'))
		{
			$where = " created_by=" . intval(get_current_user_id()) . " AND is_deleted != 1";
			$result = SSP::complex($request_data, $sql_details, $table, $primaryKey, $columns, null, $where);
		}
		else
		{
			$result = SSP::complex($request_data, $sql_details, $table, $primaryKey, $columns, null, null);
		}
		
		if ( $jsonp ) {
			// JSONP response
			header('Content-Type: application/javascript');
			echo $jsonp.'('.json_encode($result).');';
		} else {
			// Regular JSON response
			header('Content-Type: application/json');
			echo json_encode($result);
		}
	} catch (Exception $e) {
		// Handle errors
		$error_response = array(
			'error' => 'Database error: ' . $e->getMessage(),
			'data' => array(),
			'recordsTotal' => 0,
			'recordsFiltered' => 0
		);
		
		if ( $jsonp ) {
			header('Content-Type: application/javascript');
			echo $jsonp.'('.json_encode($error_response).');';
		} else {
			header('Content-Type: application/json');
			echo json_encode($error_response);
		}
	}
	exit;
}

function st_get_category_name($id){
	global $wpdb;
	$table = $wpdb->prefix . "maid_cat";
	$cur_lan = pll_current_language('slug');  if($cur_lan == ''){ $cur_lan = pll_default_language('slug');}
	$name = "name_$cur_lan";
	
	$cat_name = $wpdb->get_var( "SELECT group_concat($name) FROM $table where id IN ($id)" );
	return $cat_name;
}

function david_check_code(){
	global $wpdb;
	$maidcode = ($_REQUEST['maidcode'] != '') ? $_REQUEST['maidcode'] : 0;
	$table = $wpdb->prefix . "st_maid";
	$user_count = $wpdb->get_var( "SELECT COUNT(*) FROM $table where code = '".$maidcode."' " );
	
	echo $user_count;
	die;
}

/* upload media */
function maids_admin_scripts()
{	
	wp_enqueue_script('jquery');
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_register_script('maid-upload', plugins_url('js/wp-media-upload.js',__FILE__ ), array('jquery','media-upload','thickbox'));
	wp_enqueue_script('maid-upload');
}

function maids_admin_styles()
{	
	wp_register_style('jquery_ui',  plugins_url('css/jquery-ui.min.css', __FILE__));
	wp_enqueue_style('jquery_ui');	
	wp_enqueue_style('thickbox');
}

function maids_update_featured_status(){
	global $wpdb;
	$table_name = $wpdb->prefix . "maid";
	$maidId = isset($_REQUEST['maidId']) ? trim( $_REQUEST['maidId'] ) : 0;
	$maidcom = isset($_REQUEST['maidcom']) ? trim( $_REQUEST['maidcom'] ) : '';
	$valid = isset($_REQUEST['valid']) ? trim( $_REQUEST['valid'] ) : 11;	
	if($valid <= 10 && $valid != 0){
		$maid_count = $wpdb->get_var( 'SELECT COUNT(*) FROM '.$table_name.' where ID != '.$maidId.' and commune = "'.$maidcom.'" and is_featured = '.$valid );
		if($maid_count == 0){			
			$update_status = $wpdb->query('UPDATE `'.$table_name.'` SET is_featured = '.$valid.' WHERE  ID = '.$maidId.' and commune = "'.$maidcom.'"');
			echo $valid;
		}
	}elseif($valid == 11){
		$update_status = $wpdb->update($table_name, array( 'is_featured' => $valid), array( 'ID' => $maidId ), array( '%d'), array( '%d' ) );
		if ( false === $update_status ) {
			echo 0;
		}else{
			echo $valid;
		}
	}else{
		echo 12;
	}
	exit;
}

function maids_update_view_status(){
	global $wpdb;
	$table_name = $wpdb->prefix . "st-maid";
	$maidId = isset($_REQUEST['maidId']) ? trim( $_REQUEST['maidId'] ) : 0;
	$type = isset($_REQUEST['type']) ? trim( $_REQUEST['type'] ) : '';
	$status = isset($_REQUEST['status']) ? trim( $_REQUEST['status'] ) : '';

	if($valid <= 10 && $valid != 0){
		$maid_count = $wpdb->get_var( 'SELECT COUNT(*) FROM '."st-maid".' where ID = '.$maidId );
		if($maid_count > 0){			
			$update_status = $wpdb->query('UPDATE `'.$table_name.'` SET is_featured = '.$valid.' WHERE  ID = '.$maidId.' and commune = "'.$maidcom.'"');
			echo $valid;
		}
	}elseif($valid == 11){
		$update_status = $wpdb->update($table_name, array( 'is_featured' => $valid), array( 'ID' => $maidId ), array( '%d'), array( '%d' ) );
		if ( false === $update_status ) {
			echo 0;
		}else{
			echo $valid;
		}
	}else{
		echo 12;
	}
	exit;
}


function maids_getCommunes($maidid){
	global $wpdb;
	$maid_communes = $wpdb->prefix . "maid_communes";
	$communenames = $wpdb->get_var( "SELECT GROUP_CONCAT(commune) FROM $maid_communes where maid_id = $maidid" );
	return $communenames;
}

function maids_handle_file_upload($file, $folder_name) {
	// Get WordPress upload directory
	$upload_dir = wp_upload_dir();
	$target_dir = $upload_dir['basedir'] . '/' . $folder_name . '/';
	
	error_log('Upload directory: ' . $target_dir);
	
	// Create directory if it doesn't exist
	if (!file_exists($target_dir)) {
		$created = wp_mkdir_p($target_dir);
		error_log('Created directory: ' . ($created ? 'yes' : 'no'));
	} else {
		error_log('Directory already exists');
	}
	
	// Generate unique filename
	$file_extension = pathinfo($file['name'], PATHINFO_EXTENSION);
	$unique_filename = uniqid() . '_' . time() . '.' . $file_extension;
	$target_file = $target_dir . $unique_filename;
	
	// Check file type
	$allowed_types = array('jpg', 'jpeg', 'png', 'gif');
	if (!in_array(strtolower($file_extension), $allowed_types)) {
		error_log('Invalid file type: ' . $file_extension);
		return '';
	}
	
	// Check file size (max 5MB)
	if ($file['size'] > 5 * 1024 * 1024) {
		error_log('File too large: ' . $file['size']);
		return '';
	}
	
	// Move uploaded file
	if (move_uploaded_file($file['tmp_name'], $target_file)) {
		// Return the URL
		$file_url = $upload_dir['baseurl'] . '/' . $folder_name . '/' . $unique_filename;
		error_log('File uploaded successfully: ' . $file_url);
		return $file_url;
	} else {
		error_log('Failed to move uploaded file');
		return '';
	}
}

function maids_ensure_tables_exist() {
	global $wpdb;
	$charset_collate = $wpdb->get_charset_collate();
	
	// Create missing tables if they don't exist
	$employment_history_table = $wpdb->prefix . 'employment_history';
	$sql = "CREATE TABLE IF NOT EXISTS `{$employment_history_table}` (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`maid_id` int(11) NOT NULL,
		`from_date` varchar(50) NOT NULL,
		`to_date` varchar(50) NOT NULL,
		`country` varchar(100) NOT NULL,
		`employer` varchar(100) NOT NULL,
		`work_duties` text NOT NULL,
		`remark` text NOT NULL,
		PRIMARY KEY (`id`)
	) $charset_collate;";

	$sql .= "CREATE TABLE IF NOT EXISTS `wp_maid_feedback` (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`maid_id` int(11) NOT NULL,
		`employer_name` varchar(100) NOT NULL,
		`feedback` text NOT NULL,
		PRIMARY KEY (`id`)
	) $charset_collate;";

	$sql .= "CREATE TABLE IF NOT EXISTS `wp_maid_skills` (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`maid_id` int(11) NOT NULL,
		`skill_id` int(11) NOT NULL,
		`other` text NOT NULL,
		`willing` varchar(10) NOT NULL,
		`experience` varchar(10) NOT NULL,
		`exp_year` varchar(50) NOT NULL,
		`assessment` varchar(50) NOT NULL,
		PRIMARY KEY (`id`)
	) $charset_collate;";

	$sql .= "CREATE TABLE IF NOT EXISTS `wp_maid_skills_otc` (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`maid_id` int(11) NOT NULL,
		`skill_id` int(11) NOT NULL,
		`other` text NOT NULL,
		`willing` varchar(10) NOT NULL,
		`experience` varchar(10) NOT NULL,
		`exp_year` varchar(50) NOT NULL,
		`assessment` varchar(50) NOT NULL,
		PRIMARY KEY (`id`)
	) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );

    // Ensure correct data type for height (some installs had TINYINT which truncates)
    $st_maid_table = $wpdb->prefix . 'st_maid';
    $heightCol = $wpdb->get_row( $wpdb->prepare("SHOW COLUMNS FROM `$st_maid_table` LIKE %s", 'height') );
    if ( $heightCol && isset($heightCol->Type) && stripos($heightCol->Type, 'tinyint') !== false ) {
        $wpdb->query("ALTER TABLE `$st_maid_table` MODIFY `height` SMALLINT(5) UNSIGNED NOT NULL");
    }
}

function add_supplier_role_activation() {
       add_role( 'supplier', 'Supplier', array( 'read' => true, 'edit_posts' => true, 'level_0' => true ) );
}

add_action('admin_enqueue_scripts','david_maid_style_and_script');  // add custom style and script

add_action('admin_print_scripts', 'maids_admin_scripts');
add_action('admin_print_styles', 'maids_admin_styles');
add_action('wp_ajax_load_maid_cat_data', 'david_get_maid_cat_data');
add_action('wp_ajax_load_maid_data', 'david_get_maid_data');
add_action('wp_ajax_nopriv_load_maid_data', 'david_get_maid_data');
add_action('wp_ajax_check_code', 'david_check_code');
add_action('wp_ajax_update_maid_featured_val', 'maids_update_featured_status');
add_action('wp_ajax_update_maid_view_val', 'maids_update_view_status');
add_action('admin_menu', 'maids_add_to_menu');
register_activation_hook(__FILE__, 'maids_install');

// Admin Tools page callback: runs a safe add of Care of pets skill and shows current ID
function maids_tool_add_care_pets_page() {
    if (!current_user_can('manage_options')) { wp_die(__('You do not have sufficient permissions to access this page.')); }
    global $wpdb;
    $table = $wpdb->prefix . 'maid_skill_master';
    $label = 'Care of pets';
    $existing = $wpdb->get_var($wpdb->prepare("SELECT id FROM `$table` WHERE LOWER(`lable`) = LOWER(%s) LIMIT 1", $label));
    if (isset($_POST['do_add_care_pets'])) {
        if (!$existing) {
            $wpdb->insert($table, array('lable' => $label), array('%s'));
            $existing = $wpdb->insert_id;
        }
        echo '<div class="updated notice"><p>Care of pets skill ensured. ID: '.esc_html($existing ? $existing : $wpdb->insert_id).'</p></div>';
    }
    // Always fetch ID for display
    $current_id = $wpdb->get_var($wpdb->prepare("SELECT id FROM `$table` WHERE LOWER(`lable`) = LOWER(%s) LIMIT 1", $label));
    echo '<div class="wrap"><h1>Add DB Field: Care of pets</h1>';
    echo '<p>This tool ensures a row with label <strong>Care of pets</strong> exists in <code>'.esc_html($table).'</code> and shows its ID.</p>';
    if ($current_id) {
        echo '<p><strong>Current ID:</strong> '.esc_html($current_id).'</p>';
    } else {
        echo '<p><strong>Current ID:</strong> Not found</p>';
    }
    echo '<form method="post"><p><button class="button button-primary" name="do_add_care_pets" value="1">Ensure Care of pets Skill</button></p></form>';
    echo '<h2>SQL Query</h2><code>SELECT `id` FROM `'.esc_html($table).'` WHERE LOWER(`lable`) = \"care of pets\" LIMIT 1;</code>';
    echo '</div>';
}

// Admin Tools: ensure st_maid.spec column exists (Spectacles Yes/No)
function maids_tool_add_spec_column_page() {
    if (!current_user_can('manage_options')) { wp_die(__('You do not have sufficient permissions to access this page.')); }
    global $wpdb;
    $table = $wpdb->prefix . 'st_maid';
    $has = $wpdb->get_var($wpdb->prepare("SHOW COLUMNS FROM `$table` LIKE %s", 'spec'));
    if (isset($_POST['do_add_spec'])) {
        if (!$has) {
            $wpdb->query("ALTER TABLE `$table` ADD `spec` TINYINT(1) NOT NULL DEFAULT 0 AFTER `care_pets`");
            $has = 'spec';
        }
        echo '<div class="updated notice"><p>Spec column ensured on '.esc_html($table).'.</p></div>';
    }
    echo '<div class="wrap"><h1>Add DB Field: Spectacles (spec)</h1>';
    echo '<p>This tool creates <code>spec</code> TINYINT(1) on <code>'.esc_html($table).'</code> to store whether the maid wears glasses.</p>';
    echo '<form method="post"><p><button class="button button-primary" name="do_add_spec" value="1">Ensure spec Column</button></p></form>';
    echo '<h2>SQL</h2><code>ALTER TABLE `'.esc_html($table).'` ADD `spec` TINYINT(1) NOT NULL DEFAULT 0 AFTER `care_pets`;</code>';
    echo '</div>';
}
// Ensure new column exists on upgrade without deactivating/activating plugin
function maids_maybe_add_care_pets_column() {
    global $wpdb;
    $table = $wpdb->prefix . 'st_maid';
    $col = $wpdb->get_results($wpdb->prepare("SHOW COLUMNS FROM `$table` LIKE %s", 'care_pets'));
    if (empty($col)) {
        $wpdb->query("ALTER TABLE `$table` ADD `care_pets` varchar(20) NOT NULL DEFAULT '' AFTER `children_age`");
    }
    // Ensure spectacles (spec) column exists (0/1)
    $col2 = $wpdb->get_results($wpdb->prepare("SHOW COLUMNS FROM `$table` LIKE %s", 'spec'));
    if (empty($col2)) {
        $wpdb->query("ALTER TABLE `$table` ADD `spec` TINYINT(1) NOT NULL DEFAULT 0 AFTER `care_pets`");
    }
}
add_action('plugins_loaded', 'maids_maybe_add_care_pets_column');
register_deactivation_hook(__FILE__, 'maids_deactivation');

// Ensure tables exist on plugin load
add_action('init', 'maids_ensure_tables_exist');
register_activation_hook( __FILE__, 'add_supplier_role_activation' );