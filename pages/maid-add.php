<style>
/* Hide WordPress Admin Footer */
#wpfooter {
    display: none !important;
}

/* Modern Maid Form Styles */
:root {
    --primary-color: #2563eb;
    --primary-hover: #1d4ed8;
    --secondary-color: #64748b;
    --success-color: #10b981;
    --warning-color: #f59e0b;
    --danger-color: #ef4444;
    --light-bg: #f8fafc;
    --border-color: #e2e8f0;
    --text-primary: #1e293b;
    --text-secondary: #64748b;
    --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
    --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1);
    --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1);
    --radius: 8px;
    --transition: all 0.2s ease-in-out;
}

/* Form Container */
.maid-form-container {
    max-width: 1200px;
    margin: 0 auto;
    background: #fff;
    border-radius: var(--radius);
    box-shadow: var(--shadow-lg);
    overflow: hidden;
}

/* Header */
.maid-form-header {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-hover));
    color: white;
    padding: 2rem;
    text-align: center;
}

.maid-form-header h1 {
    margin: 0;
    font-size: 2rem;
    font-weight: 600;
}

.maid-form-header p {
    margin: 0.5rem 0 0;
    opacity: 0.9;
    font-size: 1.1rem;
}

/* Progress Bar */
.progress-container {
    background: var(--light-bg);
    padding: 1rem 2rem;
    border-bottom: 1px solid var(--border-color);
}

.progress-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
}

.progress-step {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--text-secondary);
    font-weight: 500;
    transition: var(--transition);
}

.progress-step.active {
    color: var(--primary-color);
}

.progress-step.completed {
    color: var(--success-color);
}

.progress-step-number {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: var(--border-color);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    font-size: 0.875rem;
    transition: var(--transition);
}

.progress-step.active .progress-step-number {
    background: var(--primary-color);
    color: white;
}

.progress-step.completed .progress-step-number {
    background: var(--success-color);
    color: white;
}

/* Form Sections */
.form-section {
    display: none;
    padding: 2rem;
    animation: fadeIn 0.3s ease-in-out;
}

.form-section.active {
    display: block;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

.section-header {
    background: var(--light-bg);
    padding: 1.5rem;
    border-radius: var(--radius);
    margin-bottom: 2rem;
    border-left: 4px solid var(--primary-color);
}

.section-header h3 {
    margin: 0;
    color: var(--text-primary);
    font-size: 1.25rem;
    font-weight: 600;
}

.section-header p {
    margin: 0.5rem 0 0;
    color: var(--text-secondary);
    font-size: 0.875rem;
}

/* Form Grid */
.form-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.form-row {
    display: flex;
    gap: 1rem;
    align-items: end;
}

/* Form Controls */
.form-group {
    margin-bottom: 1.5rem;
}

.form-label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 500;
    color: var(--text-primary);
    font-size: 0.875rem;
}

.form-label.required::after {
    content: " *";
    color: var(--danger-color);
}

.form-input,
.form-textarea,
.form-select {
    width: 100%;
    padding: 0.75rem 1rem;
    border: 2px solid var(--border-color);
    border-radius: var(--radius);
    font-size: 1rem;
    transition: var(--transition);
    background: white;
    color: var(--text-primary);
}

.form-input:focus,
.form-textarea:focus,
.form-select:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgb(37 99 235 / 0.1);
}

.form-input.error,
.form-textarea.error,
.form-select.error {
    border-color: var(--danger-color);
}

.form-textarea {
    resize: vertical;
    min-height: 100px;
}

/* File Upload */
.file-upload {
    position: relative;
    display: inline-block;
    cursor: pointer;
    width: 100%;
}

.file-upload input[type=file] {
    position: absolute;
    opacity: 0;
    width: 100%;
    height: 100%;
    cursor: pointer;
}

.file-upload-label {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1rem;
    border: 2px dashed var(--border-color);
    border-radius: var(--radius);
    background: var(--light-bg);
    color: var(--text-secondary);
    transition: var(--transition);
    text-align: center;
    justify-content: center;
}

.file-upload:hover .file-upload-label {
    border-color: var(--primary-color);
    background: rgb(37 99 235 / 0.05);
}

.file-preview {
    margin-top: 1rem;
    text-align: center;
}

.file-preview img {
    max-width: 200px;
    max-height: 200px;
    border-radius: var(--radius);
    box-shadow: var(--shadow-md);
}

/* Checkbox and Radio Groups */
.checkbox-group,
.radio-group {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    margin-top: 0.5rem;
}

.checkbox-item,
.radio-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    cursor: pointer;
    padding: 0.5rem;
    border-radius: var(--radius);
    transition: var(--transition);
}

.checkbox-item:hover,
.radio-item:hover {
    background: var(--light-bg);
}

.checkbox-item input[type="checkbox"],
.radio-item input[type="radio"] {
    width: 18px;
    height: 18px;
    accent-color: var(--primary-color);
}

/* Tables */
.modern-table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    border-radius: var(--radius);
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    margin: 1rem 0;
}

.modern-table th {
    background: var(--light-bg);
    padding: 1rem;
    text-align: left;
    font-weight: 600;
    color: var(--text-primary);
    border-bottom: 1px solid var(--border-color);
}

.modern-table td {
    padding: 1rem;
    border-bottom: 1px solid var(--border-color);
    vertical-align: middle;
}

.modern-table tr:hover {
    background: var(--light-bg);
}

/* Buttons */
.btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: var(--radius);
    font-size: 1rem;
    font-weight: 500;
    text-decoration: none;
    cursor: pointer;
    transition: var(--transition);
    text-align: center;
    justify-content: center;
}

.btn-primary {
    background: var(--primary-color);
    color: white;
}

.btn-primary:hover {
    background: var(--primary-hover);
    transform: translateY(-1px);
    box-shadow: var(--shadow-md);
}

.btn-secondary {
    background: var(--secondary-color);
    color: white;
}

.btn-secondary:hover {
    background: #475569;
}

.btn-success {
    background: var(--success-color);
    color: white;
}

.btn-danger {
    background: var(--danger-color);
    color: white;
}

.btn-outline {
    background: transparent;
    border: 2px solid var(--border-color);
    color: var(--text-primary);
}

.btn-outline:hover {
    border-color: var(--primary-color);
    color: var(--primary-color);
}

/* Navigation Buttons */
.form-navigation {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 2rem;
    background: var(--light-bg);
    border-top: 1px solid var(--border-color);
}

/* Add/Remove Buttons */
.add-remove-container {
    display: flex;
    justify-content: flex-end;
    margin: 1rem 0;
}

.add-btn {
    background: var(--success-color);
    color: white;
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: var(--transition);
    font-size: 1.25rem;
    font-weight: bold; 
}

.add-btn:hover {
    background: #059669;
    transform: scale(1.1);
}

.remove-btn {
    background: var(--danger-color);
    color: white;
    border: none;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: var(--transition);
    font-size: 1rem;
    font-weight: bold;
    position: absolute;
    top: 0.5rem;
    right: 0.5rem;
}

.remove-btn:hover {
    background: #dc2626;
    transform: scale(1.1);
}

/* Dynamic Sections */
.dynamic-section {
    position: relative;
    background: white;
    border: 1px solid var(--border-color);
    border-radius: var(--radius);
    padding: 1.5rem;
    margin-bottom: 1rem;
    box-shadow: var(--shadow-sm);
}

/* Responsive Design */
@media (max-width: 768px) {
    .form-grid {
        grid-template-columns: 1fr;
    }
    
    .form-row {
        flex-direction: column;
        gap: 0;
    }
    
    .progress-bar {
        flex-direction: column;
        gap: 1rem;
    }
    
    .form-navigation {
        flex-direction: column;
        gap: 1rem;
    }
    
    .checkbox-group,
    .radio-group {
        flex-direction: column;
    }
}

/* Loading States */
.loading {
    opacity: 0.6;
    pointer-events: none;
}

.loading::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    width: 20px;
    height: 20px;
    margin: -10px 0 0 -10px;
    border: 2px solid var(--border-color);
    border-top: 2px solid var(--primary-color);
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* Success/Error Messages */
.message {
    padding: 1rem;
    border-radius: var(--radius);
    margin-bottom: 1rem;
    font-weight: 500;
}

.message.success {
    background: rgb(16 185 129 / 0.1);
    color: var(--success-color);
    border: 1px solid rgb(16 185 129 / 0.2);
}

.message.error {
    background: rgb(239 68 68 / 0.1);
    color: var(--danger-color);
    border: 1px solid rgb(239 68 68 / 0.2);
}

/* Legacy Compatibility */
.control-wrap { margin: 10px 0; }
.maid-text { 
    background-color: #fff;
    font-size: 1em;
    height: auto;
    line-height: normal;
    margin: 0 0 3px;
    outline: medium none;
    padding: 5px 8px;
    width: 100%;
}
.maid-multitext {
    background-color: #fff;
    font-size: 1em;
    height: auto;
    line-height: normal;
    margin: 0 0 3px;
    outline: medium none;
    padding: 5px 8px;
    width: 80%;
}
/* Popup Modal */
.maid-popup-overlay { position: fixed; top: 0; right: 0; bottom: 0; left: 0; background: rgba(15, 23, 42, 0.5); display: none; align-items: center; justify-content: center; z-index: 99999; }
.maid-popup-overlay.visible { display: flex; }
.maid-popup-modal { background: #fff; border-radius: var(--radius); box-shadow: var(--shadow-lg); max-width: 500px; width: calc(100% - 2rem); padding: 1rem 1.25rem; border-left: 4px solid var(--danger-color); }
.maid-popup-modal.success { border-left-color: var(--success-color); }
.maid-popup-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: .5rem; }
.maid-popup-title { font-weight: 600; color: var(--text-primary); }
.maid-popup-body { color: var(--text-secondary); line-height: 1.6; }
.maid-popup-close { background: transparent; border: none; font-size: 1.25rem; cursor: pointer; color: var(--text-secondary); }
.maid-popup-close:hover { color: var(--text-primary); }
</style>


<div class="maid-form-container">
    <div class="maid-form-header">
        <h1>📋 Maid Registration Form</h1>
        <p>Complete the form below to register a new maid. Please fill in all required fields marked with *</p>
        <button type="button" class="btn btn-outline" onclick="fillTestData()" style="margin-top: 1rem; background: rgba(255,255,255,0.2); color: white; border-color: white;">
            🧪 Fill Test Data
        </button>
			</div>
    <!-- Custom Popup -->
    <div id="maid-popup" class="maid-popup-overlay" role="dialog" aria-modal="true" aria-live="assertive" aria-hidden="true">
        <div id="maid-popup-modal" class="maid-popup-modal">
            <div class="maid-popup-header">
                <div class="maid-popup-title">Notice</div>
                <button type="button" class="maid-popup-close" aria-label="Close" onclick="hidePopup()">×</button>
            </div>
            <div id="maid-popup-content" class="maid-popup-body"></div>
        </div>
    </div>
    
    <!-- Progress Bar -->
    <div class="progress-container">
        <div class="progress-bar">
            <div class="progress-step active" data-step="1">
                <div class="progress-step-number">1</div>
                <span>Personal Details</span>
			</div>
            <div class="progress-step" data-step="2">
                <div class="progress-step-number">2</div>
                <span>Family & Medical</span>
			</div>
            <div class="progress-step" data-step="3">
                <div class="progress-step-number">3</div>
                <span>Employment History</span>
			</div>
            <div class="progress-step" data-step="4">
                <div class="progress-step-number">4</div>
                <span>Skills & Languages</span>
			</div>
            <div class="progress-step" data-step="5">
                <div class="progress-step-number">5</div>
                <span>Review & Submit</span>
			</div>
			</div>
			</div>

    <form name="maidedit" method="post" id="maidedit" autocomplete="off" action="" enctype="multipart/form-data">
        <input autocomplete="false" name="hidden" type="text" style="display:none;">
        
        <!-- Messages Display -->
        <?php 
        $maid_msg = get_option('maid_msg');
        if($maid_msg == 'sucess') {
            echo '<div class="notice notice-success is-dismissible"><p><strong>Success!</strong> Maid has been added successfully.</p></div>';
            delete_option('maid_msg');
        } elseif($maid_msg == 'error') {
            echo '<div class="notice notice-error is-dismissible"><p><strong>Error!</strong> Failed to add maid. Please try again.</p></div>';
            delete_option('maid_msg');
        } elseif($maid_msg == 'error_code_exists') {
            echo '<div class="notice notice-error is-dismissible"><p><strong>Error!</strong> Maid code already exists. Please use a different code.</p></div>';
            delete_option('maid_msg');
        } elseif($maid_msg == 'error_db') {
            echo '<div class="notice notice-error is-dismissible"><p><strong>Database Error!</strong> Please check the error logs and try again.</p></div>';
            delete_option('maid_msg');
        }
        // Prefill values after a failed submission (e.g., duplicate code)
        $maid_prefill = [];
        $current_user_id = get_current_user_id();
        if ( $current_user_id ) {
            $stored = get_user_meta( $current_user_id, 'maid_form_prefill', true );
            if ( is_array( $stored ) ) {
                $maid_prefill = $stored;
            }
        }
        ?>
        
        <!-- Step 1: Personal Details -->
        <div class="form-section active" id="step-1">
            <div class="section-header">
                <h3>👤 Personal Details</h3>
                <p>Basic information about the maid including identification and contact details</p>
			</div>
            
            <div class="form-grid">
                <div class="form-group">
                    <label for="code" class="form-label required">Maid Code</label>
                    <input class="form-input" name="code" value="<?php echo isset($maid_prefill['code']) ? esc_attr($maid_prefill['code']) : ''; ?>" id="code" maxlength="15" type="text" required autocomplete="off" placeholder="Enter maid code">
			</div>
                
                <div class="form-group">
                    <label for="name" class="form-label required">Full Name</label>
                    <input class="form-input" name="name" autocomplete="nope" value="<?php echo isset($maid_prefill['name']) ? esc_attr($maid_prefill['name']) : ''; ?>" id="name" maxlength="50" type="text" required placeholder="Enter full name">
			</div>
                
                <div class="form-group">
                    <label for="date_of_birth" class="form-label required">Date of Birth</label>
                    <input class="form-input" name="date_of_birth" value="<?php echo isset($maid_prefill['date_of_birth']) ? esc_attr($maid_prefill['date_of_birth']) : ''; ?>" id="datepicker" maxlength="50" type="text" required autocomplete="off" placeholder="DD/MM/YYYY">
			</div>

                <div class="form-group">
                    <label for="age" class="form-label required">Age</label>
                    <input class="form-input" name="age" value="<?php echo isset($maid_prefill['age']) ? esc_attr($maid_prefill['age']) : ''; ?>" id="age" maxlength="50" type="text" required autocomplete="off" placeholder="Enter age">
			</div>

                <div class="form-group">
                    <label for="place_of_birth" class="form-label required">Place of Birth</label>
                    <input class="form-input" name="place_of_birth" value="<?php echo isset($maid_prefill['place_of_birth']) ? esc_attr($maid_prefill['place_of_birth']) : ''; ?>" id="place_of_birth" maxlength="50" type="text" required autocomplete="off" placeholder="Enter place of birth">
                </div>
                
                <div class="form-group">
                    <label for="nationality" class="form-label required">Nationality</label>
                    <input class="form-input" name="nationality" value="<?php echo isset($maid_prefill['nationality']) ? esc_attr($maid_prefill['nationality']) : ''; ?>" id="nationality" maxlength="50" type="text" required autocomplete="off" placeholder="Enter nationality">
                </div>
                
                <div class="form-group">
                    <label for="religion" class="form-label required">Religion</label>
                    <input class="form-input" name="religion" value="<?php echo isset($maid_prefill['religion']) ? esc_attr($maid_prefill['religion']) : ''; ?>" id="religion" maxlength="50" type="text" required autocomplete="off" placeholder="Enter religion">
                </div>
                
                <div class="form-group">
                    <label for="education" class="form-label required">Education Level</label>
                    <input class="form-input" name="education" value="<?php echo isset($maid_prefill['education']) ? esc_attr($maid_prefill['education']) : ''; ?>" id="education" maxlength="50" type="text" required autocomplete="off" placeholder="Enter education level">
                </div>
                
                <div class="form-group">
                    <label for="contact_no" class="form-label required">Contact Number</label>
                    <input class="form-input" name="contact_no" value="<?php echo isset($maid_prefill['contact_no']) ? esc_attr($maid_prefill['contact_no']) : ''; ?>" id="contact_no" maxlength="50" type="text" required autocomplete="nope" placeholder="Enter contact number">
                </div>
                
                <div class="form-group">
                    <label for="marrital_status" class="form-label required">Marital Status</label>
                    <select name="marrital_status" id="marrital_status" class="form-select stchosen" required>
                        <option value="">Select marital status</option>
                <option value="1" <?php echo (isset($maid_prefill['marrital_status']) && $maid_prefill['marrital_status']=='1') ? 'selected' : ''; ?>>Single</option>
                <option value="2" <?php echo (isset($maid_prefill['marrital_status']) && $maid_prefill['marrital_status']=='2') ? 'selected' : ''; ?>>Married</option>
                <option value="3" <?php echo (isset($maid_prefill['marrital_status']) && $maid_prefill['marrital_status']=='3') ? 'selected' : ''; ?>>Separated</option>
                <option value="4" <?php echo (isset($maid_prefill['marrital_status']) && $maid_prefill['marrital_status']=='4') ? 'selected' : ''; ?>>Widow</option>
				<?php 
					global $wpdb;
					$communetable = $wpdb->prefix . "commune";
					$communes = $wpdb->get_results("SELECT name FROM `$communetable` ");
					if(!empty($communes)){
						  foreach($communes as $type){
							  echo '<option value="'.$type->name.'">'.$type->name.'</option>';
						  }
					}
				?>
			</select>
			</div>
                
                <div class="form-group">
                    <label for="current_status" class="form-label required">Current Status</label>
                    <input class="form-input" name="current_status" value="<?php echo isset($maid_prefill['current_status']) ? esc_attr($maid_prefill['current_status']) : ''; ?>" id="current_status" maxlength="50" type="text" required autocomplete="off" placeholder="Enter current status">
                </div>
                
                <div class="form-group">
                    <label for="salary" class="form-label">Salary</label>
                    <input class="form-input" name="salary" value="<?php echo isset($maid_prefill['salary']) ? esc_attr($maid_prefill['salary']) : ''; ?>" id="salary" type="number" autocomplete="off" placeholder="Enter salary">
                </div>
                
                <div class="form-group">
                    <label for="height" class="form-label required">Height (cm)</label>
                    <input class="form-input" name="height" value="<?php echo isset($maid_prefill['height']) ? esc_attr($maid_prefill['height']) : ''; ?>" id="height" maxlength="5" type="number" min="0" max="300" step="1" required autocomplete="off" placeholder="Enter height in cm">
                </div>
                
                <div class="form-group">
                    <label for="weight" class="form-label required">Weight (kg)</label>
                    <input class="form-input" name="weight" value="<?php echo isset($maid_prefill['weight']) ? esc_attr($maid_prefill['weight']) : ''; ?>" id="weight" maxlength="50" type="text" required autocomplete="off" placeholder="Enter weight in kg">
                </div>
                
                <div class="form-group" style="grid-column: 1 / -1;">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-textarea" rows="4" name="address" id="address" autocomplete="off" placeholder="Enter full address"><?php echo isset($maid_prefill['address']) ? esc_textarea($maid_prefill['address']) : ''; ?></textarea>
			</div>
			<!-- <div class="control-wrap">
			<label for="category">Category <span class="required">*</span></label>
			<select name="category[]" id="category" class="maid-text stchosen" required multiple>
			<option value="">Select Category</option>
				<?php 
					$maid_cat_table = $wpdb->prefix . "maid_cat";
					$name = "name_$cur_lan";
					$query = "SELECT id, $name FROM `$maid_cat_table` where is_deleted = 1 GROUP BY `$name` ORDER BY `$name`";
					$categories = $wpdb->get_results($query);
					  if(!empty($categories)){
						  foreach($categories as $type){
						  echo "<option value='{$type->id}'>{$type->$name}</option>";
						}
					}
				?>
			</select>
			</div> -->
			
                <div class="form-group" style="grid-column: 1 / -1;">
                    <label for="name_of_airport" class="form-label required">Port/Airport Name</label>
                    <input class="form-input" name="name_of_airport" value="<?php echo isset($maid_prefill['name_of_airport']) ? esc_attr($maid_prefill['name_of_airport']) : ''; ?>" id="name_of_airport" maxlength="50" type="text" required autocomplete="nope" placeholder="Enter port or airport name">
			</div>

                <div class="form-group">
                    <label for="maid_type" class="form-label required">Maid Type</label>
                    <select name="maid_type" id="maid_type" class="form-select stchosen">
                        <option value="">Select maid type</option>
                    <option value="New" <?php echo (isset($maid_prefill['maid_type']) && $maid_prefill['maid_type']=='New') ? 'selected' : ''; ?>>New</option>
                    <option value="Transfer" <?php echo (isset($maid_prefill['maid_type']) && $maid_prefill['maid_type']=='Transfer') ? 'selected' : ''; ?>>Transfer</option>
                    <option value="Misc" <?php echo (isset($maid_prefill['maid_type']) && $maid_prefill['maid_type']=='Misc') ? 'selected' : ''; ?>>Misc</option>
			    </select>
			</div>

                <div class="form-group">
                    <label for="off_day" class="form-label required">Off Day</label>
                    <input class="form-input" name="off_day" value="<?php echo isset($maid_prefill['off_day']) ? esc_attr($maid_prefill['off_day']) : ''; ?>" id="off_day" type="number" autocomplete="off" min="0" placeholder="Enter off day preference">
                </div>
			</div>

            <!-- Photo Upload Section -->
            <div class="section-header">
                <h3>📸 Photo Upload</h3>
                <p>Upload profile photo and passport photo</p>
            </div>
            
            <div class="form-grid">
                <div class="form-group">
                    <label class="form-label required">Profile Photo</label>
                    <div class="file-upload">
                        <input type="file" id="maid_photo" name="maid_photo" accept="image/*" onchange="previewImage(this, 'logofr')" required>
                        <div class="file-upload-label">
                            <span>📷</span>
                            <span>Click to upload profile photo</span>
                        </div>
                    </div>
                    <input class="maid_logo_fr" type="hidden" name="maid_logo_fr" value="">
                    <div class="file-preview">
                        <img src="" id="logofr" alt="" style="display: none;">
                    </div>
            </div>
			
                <div class="form-group">
                    <label class="form-label required">Passport Photo</label>
                    <div class="file-upload">
                        <input type="file" id="passport_photo" name="passport_photo" accept="image/*" onchange="previewImage(this, 'passportlogofr')" required>
                        <div class="file-upload-label">
                            <span>🛂</span>
                            <span>Click to upload passport photo</span>
                        </div>
                    </div>
                    <input class="passport_logo_fr" type="hidden" name="passport_logo_fr" value="">
                    <div class="file-preview">
                        <img src="" id="passportlogofr" alt="" style="display: none;">
                    </div>
                </div>
                        </div>
            
            <!-- Navigation Buttons -->
            <div class="form-navigation">
                <div></div>
                <button type="button" class="btn btn-primary" onclick="nextStep(2)">
                    Next Step <span>→</span>
                </button>
		</div>
			</div>
        
        <!-- Step 2: Family & Medical Details -->
        <div class="form-section" id="step-2">
            <div class="section-header">
                <h3>👨‍👩‍👧‍👦 Family Details</h3>
                <p>Information about family members and children</p>
				</div>

            <div class="form-grid">
                <div class="form-group" id="field_no_of_children" style="display:none;">
                    <label for="no_of_children" class="form-label">Number of Children</label>
                    <input class="form-input" name="no_of_children" value="" id="no_of_children" maxlength="50" type="text" autocomplete="off" placeholder="Enter number of children">
				</div>

                <div class="form-group" id="field_children_age" style="display:none;">
                    <label for="children_age" class="form-label">Children Age</label>
                    <input class="form-input" name="children_age" value="" id="children_age" maxlength="50" type="text" autocomplete="off" placeholder="Enter children age">
				</div>

                <div class="form-group">
                    <label for="no_of_siblings" class="form-label">Number of Siblings</label>
                    <input class="form-input" name="no_of_siblings" value="" id="no_of_siblings" maxlength="50" type="text" autocomplete="off" placeholder="Enter number of siblings">
                </div>

                <div class="form-group">
                    <label for="my_number" class="form-label">I am Number</label>
                    <input class="form-input" name="my_number" value="" id="my_number" maxlength="50" type="text" autocomplete="off" placeholder="Enter your position among siblings">
				</div>
			</div>

            <!-- Medical History Section -->
            <div class="section-header">
                <h3>🏥 Medical History & Dietary Restrictions</h3>
                <p>Important health information and dietary preferences</p>
				</div>

            <div class="form-grid">
                <div class="form-group">
                    <label for="allergies" class="form-label">Allergies</label>
                    <input class="form-input" name="allergies" value="<?php echo isset($maid_prefill['allergies']) ? esc_attr($maid_prefill['allergies']) : ''; ?>" id="allergies" maxlength="50" type="text" autocomplete="off" placeholder="Enter any allergies">
				</div>

                <div class="form-group">
                    <label for="disability" class="form-label">Physical Disabilities</label>
                    <input class="form-input" name="disability" value="<?php echo isset($maid_prefill['disability']) ? esc_attr($maid_prefill['disability']) : ''; ?>" id="disability" maxlength="50" type="text" autocomplete="off" placeholder="Enter any physical disabilities">
				</div>

                <div class="form-group">
                    <label for="diet" class="form-label">Dietary Restrictions</label>
                    <input class="form-input" name="diet" value="<?php echo isset($maid_prefill['diet']) ? esc_attr($maid_prefill['diet']) : ''; ?>" id="diet" maxlength="50" type="text" autocomplete="off" placeholder="Enter dietary restrictions">
	                </div>
                </div>

            <!-- Medical Conditions -->
            <div class="section-header">
                <h3>🏥 Medical Conditions</h3>
                <p>Please indicate if the maid has any of the following conditions</p>
                </div>

            <div class="form-grid">
                <div class="form-group">
                    <label class="form-label">Mental Illness</label>
                    <div class="radio-group">
                        <div class="radio-item">
                            <input type="radio" name="mental_illness" value="1" id="mental_illness_yes" class="illness1">
                            <label for="mental_illness_yes">Yes</label>
	                </div>
                        <div class="radio-item">
                            <input type="radio" name="mental_illness" value="0" id="mental_illness_no" class="illness1">
                            <label for="mental_illness_no">No</label>
                </div>
	                </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Epilepsy</label>
                    <div class="radio-group">
                        <div class="radio-item">
                            <input type="radio" name="epilepsy" value="1" id="epilepsy_yes" class="illness2">
                            <label for="epilepsy_yes">Yes</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="epilepsy" value="0" id="epilepsy_no" class="illness2">
                            <label for="epilepsy_no">No</label>
                        </div>
	                </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Asthma</label>
                    <div class="radio-group">
                        <div class="radio-item">
                            <input type="radio" name="asthma" value="1" id="asthma_yes" class="illness3">
                            <label for="asthma_yes">Yes</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="asthma" value="0" id="asthma_no" class="illness3">
                            <label for="asthma_no">No</label>
                        </div>
	                </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Diabetes</label>
                    <div class="radio-group">
                        <div class="radio-item">
                            <input type="radio" name="diabetas" value="1" id="diabetes_yes" class="illness4">
                            <label for="diabetes_yes">Yes</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="diabetas" value="0" id="diabetes_no" class="illness4">
                            <label for="diabetes_no">No</label>
                        </div>
	                </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Hypertension</label>
                    <div class="radio-group">
                        <div class="radio-item">
                            <input type="radio" name="hypertension" value="1" id="hypertension_yes" class="illness5">
                            <label for="hypertension_yes">Yes</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="hypertension" value="0" id="hypertension_no" class="illness5">
                            <label for="hypertension_no">No</label>
                        </div>
	                </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Tuberculosis</label>
                    <div class="radio-group">
                        <div class="radio-item">
                            <input type="radio" name="tuber" value="1" id="tuberculosis_yes" class="illness6">
                            <label for="tuberculosis_yes">Yes</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="tuber" value="0" id="tuberculosis_no" class="illness6">
                            <label for="tuberculosis_no">No</label>
                        </div>
	                </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Heart Disease</label>
                    <div class="radio-group">
                        <div class="radio-item">
                            <input type="radio" name="heart" value="1" id="heart_yes" class="illness7">
                            <label for="heart_yes">Yes</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="heart" value="0" id="heart_no" class="illness7">
                            <label for="heart_no">No</label>
                        </div>
                    </div>
				</div>

                <div class="form-group">
                    <label class="form-label">Malaria</label>
                    <div class="radio-group">
                        <div class="radio-item">
                            <input type="radio" name="malaria" value="1" id="malaria_yes" class="illness8">
                            <label for="malaria_yes">Yes</label>
				</div>
                        <div class="radio-item">
                            <input type="radio" name="malaria" value="0" id="malaria_no" class="illness8">
                            <label for="malaria_no">No</label>
                        </div>
                    </div>
				</div>

                <div class="form-group">
                    <label class="form-label">Operations</label>
                    <div class="radio-group">
                        <div class="radio-item">
                            <input type="radio" name="operation" value="1" id="operations_yes" class="illness9">
                            <label for="operations_yes">Yes</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="operation" value="0" id="operations_no" class="illness9">
                            <label for="operations_no">No</label>
                        </div>
                    </div>
				</div>

                <div class="form-group" style="grid-column: 1 / -1;">
                    <label for="other_illness" class="form-label">Other Illness</label>
                    <input class="form-input" name="other_illness" value="<?php echo isset($maid_prefill['other_illness']) ? esc_attr($maid_prefill['other_illness']) : ''; ?>" id="other_illness" maxlength="50" type="text" placeholder="Enter other illnesses if any">
			</div>

                <!-- Original illness checkboxes (commented out but preserved) -->
                <!-- 
                <div class="form-group" style="grid-column: 1 / -1;">
                    <label class="form-label">Past And Existing Illnesses</label>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="illness[]" value="1" id="illness_1">
                            <label for="illness_1">MENTAL ILLNESS</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="illness[]" value="2" id="illness_2">
                            <label for="illness_2">EPILEPSY</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="illness[]" value="3" id="illness_3">
                            <label for="illness_3">ASTHMA</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="illness[]" value="4" id="illness_4">
                            <label for="illness_4">DIABETES</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="illness[]" value="5" id="illness_5">
                            <label for="illness_5">HYPERTENSION</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="illness[]" value="6" id="illness_6">
                            <label for="illness_6">TUBERCULOSIS</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="illness[]" value="7" id="illness_7">
                            <label for="illness_7">HEART DISEASE</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="illness[]" value="8" id="illness_8">
                            <label for="illness_8">MALARIA</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="illness[]" value="9" id="illness_9">
                            <label for="illness_9">OPERATIONS</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="illness[]" value="10" id="other_ill">
                            <label for="other_ill">OTHERS</label>
                        </div>
                    </div>
                </div>
                -->
				</div>

            <!-- Food Preferences -->
            <div class="section-header">
                <h3>🍽️ Food Handling Preferences</h3>
                <p>Dietary restrictions and food preferences</p>
				</div>

            <div class="form-grid">
                <div class="form-group" style="grid-column: 1 / -1;">
                    <label class="form-label">Food Preferences</label>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="food_preferences[]" value="1" id="no_pork">
                            <label for="no_pork">No Pork</label>
			</div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="food_preferences[]" value="2" id="no_beef">
                            <label for="no_beef">No Beef</label>
            </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="food_preferences[]" value="3" id="food_pref_other">
                            <label for="food_pref_other">Others</label>
                        </div>
					</div>
					</div>

                <div class="form-group" id="other_food_pref" style="display:none; grid-column: 1 / -1;">
                    <label for="other_food_input" class="form-label">Other Food Preferences</label>
                    <input class="form-input" name="other_food" value="" id="other_food_input" maxlength="50" type="text" autocomplete="off" placeholder="Specify other food preferences">
					</div>
	            </div>
            
            <!-- Navigation Buttons -->
            <div class="form-navigation">
                <button type="button" class="btn btn-outline" onclick="prevStep(1)">
                    <span>←</span> Previous Step
                </button>
                <button type="button" class="btn btn-primary" onclick="nextStep(3)">
                    Next Step <span>→</span>
                </button>
	        </div>
			</div>
        
        <!-- Step 3: Employment History -->
        <div class="form-section" id="step-3">
            <div class="section-header">
                <h3>💼 Employment History</h3>
                <p>Previous work experience and employment details</p>
            </div>
            
            <!-- Other Details -->
            <div class="form-grid">
                <div class="form-group">
                    <label for="rest_day" class="form-label">Preference for Rest Day (Number of Rest Day(s) Per Month)</label>
                    <input class="form-input" name="rest_day" value="<?php echo isset($maid_prefill['rest_day']) ? esc_attr($maid_prefill['rest_day']) : ''; ?>" id="rest_day" type="number" inputmode="numeric" min="0" max="31" step="1" autocomplete="off" placeholder="Enter rest days per month (0-31)">
                </div>

                <div class="form-group" style="grid-column: 1 / -1;">
                    <label class="form-label">Care of Pets</label>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="care_pets[]" value="dogs" id="care_pets_dogs">
                            <label for="care_pets_dogs">Dogs</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="care_pets[]" value="cats" id="care_pets_cats">
                            <label for="care_pets_cats">Cats</label>
                        </div>
                    </div>
                </div>

                <div class="form-group" style="grid-column: 1 / -1;">
                    <label for="other_remark" class="form-label">Other Remarks</label>
                    <textarea class="form-textarea" rows="4" name="other_remark" id="other_remark" autocomplete="off" placeholder="Enter any additional remarks"><?php echo isset($maid_prefill['other_remark']) ? esc_textarea($maid_prefill['other_remark']) : ''; ?></textarea>
                </div>
            </div>
            
            <!-- Work Experience -->
            <div class="section-header">
                <h3>🧾 Work Experience</h3>
                <p>Enter previous work experience records</p>
            </div>

            <div id="work_experience_container">
                <div class="dynamic-section" id="work_experience">
                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label" for="time_duration">Time Duration</label>
                            <input class="form-input" name="time_duration[]" value="" id="time_duration" type="text" autocomplete="off" placeholder="e.g., Jan 2021 - Dec 2022">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exp_employer_name">Name of Employer</label>
                            <input class="form-input" name="exp_employer_name[]" value="" id="exp_employer_name" maxlength="50" type="text" autocomplete="off" placeholder="Enter employer name">
                        </div>
                        <div class="form-group" style="grid-column: 1 / -1;">
                            <label class="form-label" for="e_address">Address</label>
                            <textarea class="form-textarea" rows="3" name="e_address[]" id="e_address" autocomplete="off" placeholder="Enter address"></textarea>
                        </div>
                        <div class="form-group" style="grid-column: 1 / -1;">
                            <label class="form-label" for="main_duties">Main Duties</label>
                            <textarea class="form-textarea" rows="3" name="main_duties[]" id="main_duties" autocomplete="off" placeholder="Describe main duties"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="add-remove-container">
                <button type="button" class="add-btn" onclick="add_work_experience()" title="Add Work Experience">+</button>
            </div>

            <!-- Employment History Overseas -->
            <div class="section-header">
                <h3>🌍 Employment History Overseas</h3>
                <p>Previous work experience in other countries</p>
            </div>
            
			<div id="employment_history_container">
                <div id="employment_history" class="dynamic-section">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="from_date" class="form-label">From Date</label>
                    <input class="form-input from_date" name="from_date[]" value="<?php echo isset($maid_prefill['from_date'][0]) ? esc_attr($maid_prefill['from_date'][0]) : ''; ?>" id="from_date" maxlength="50" type="text" autocomplete="off" placeholder="DD/MM/YYYY">
					</div>
                        
                        <div class="form-group">
                            <label for="to_date" class="form-label">To Date</label>
                    <input class="form-input to_date" name="to_date[]" value="<?php echo isset($maid_prefill['to_date'][0]) ? esc_attr($maid_prefill['to_date'][0]) : ''; ?>" id="to_date" maxlength="50" type="text" autocomplete="off" placeholder="DD/MM/YYYY">
					</div>
						
                        <div class="form-group">
                            <label for="country" class="form-label">Country</label>
                            <select name="country[]" id="country" class="form-select" autocomplete="nope">
                                <option value="">Select country</option>
						<?php
							$countries = [
                                        'Singapore', 'Malaysia', 'Indonesia', 'Taiwan', 'Hong Kong', 
                                        'Middle East', 'Brunei', 'India', 'Philippines', 'Myanmar', 
                                        'Sri Lanka', 'Bangladesh', 'Others'
                                    ];
                                    foreach ($countries as $country): ?>
                                        <option value="<?php echo strtoupper($country); ?>" <?php echo (isset($maid_prefill['country'][0]) && strtoupper($country)==$maid_prefill['country'][0]) ? 'selected' : ''; ?>><?php echo $country; ?></option>
							<?php endforeach; ?>
						</select>
                        </div>

                        <div class="form-group">
                            <label for="employer" class="form-label">Employer Name</label>
                    <input class="form-input" name="employer[]" value="<?php echo isset($maid_prefill['employer'][0]) ? esc_attr($maid_prefill['employer'][0]) : ''; ?>" id="employer" maxlength="50" type="text" autocomplete="off" placeholder="Enter employer name">
					</div>
                        
                        <div class="form-group" style="grid-column: 1 / -1;">
                            <label for="work_duties" class="form-label">Work Duties</label>
                    <textarea class="form-textarea" rows="4" name="work_duties[]" id="work_duties" autocomplete="off" placeholder="Describe work duties"><?php echo isset($maid_prefill['work_duties'][0]) ? esc_textarea($maid_prefill['work_duties'][0]) : ''; ?></textarea>
					</div>
					
                        <div class="form-group" style="grid-column: 1 / -1;">
                            <label for="remark_emp" class="form-label">Remarks</label>
                    <textarea class="form-textarea" rows="4" name="remark_emp[]" id="remark_emp" autocomplete="off" placeholder="Enter any remarks"><?php echo isset($maid_prefill['remark_emp'][0]) ? esc_textarea($maid_prefill['remark_emp'][0]) : ''; ?></textarea>
					</div>
					</div>
	            </div>
	        </div>

            <div class="add-remove-container">
                <button type="button" class="add-btn" onclick="add_employment_history()" title="Add Employment History">+</button>
			</div>

            <!-- Navigation Buttons -->
            <div class="form-navigation">
                <button type="button" class="btn btn-outline" onclick="prevStep(2)">
                    <span>←</span> Previous Step
                </button>
                <button type="button" class="btn btn-primary" onclick="nextStep(4)">
                    Next Step <span>→</span>
                </button>
            </div>
            </div>

        <!-- Step 4: Skills & Languages -->
        <div class="form-section" id="step-4">
            <div class="section-header">
                <h3>🗣️ Language Proficiency</h3>
                <p>Language skills and communication abilities</p>
            </div>
            
            <table class="modern-table">
                <thead>
                    <tr>
            		<th>Language</th>
                        <th>Spoken Level</th>
            	</tr>
                </thead>
                <tbody>
            	<tr>
                        <td>Mandarin</td>
            		<td>
                            <select name="language[mandarin][]" id="mandarin_spocken" class="form-select">
							<option value="">--Select One--</option>
							<option value="Poor">Poor</option>
							<option value="Fair">Fair</option>
							<option value="Good">Good</option>
						</select>
            		</td>
            	</tr>
            	<tr>
                        <td>English</td>
            		<td>
                            <select name="language[english][]" id="english_spocken" class="form-select">
							<option value="">--Select One--</option>
							<option value="Poor">Poor</option>
							<option value="Fair">Fair</option>
							<option value="Good">Good</option>
						</select>
            		</td>
            	</tr>
            	<tr>
                        <td>Malay</td>
            		<td>
                            <select name="language[Indonesian/Malay][]" id="malay_spocken" class="form-select">
							<option value="">--Select One--</option>
							<option value="Poor">Poor</option>
							<option value="Fair">Fair</option>
							<option value="Good">Good</option>
						</select>
            		</td>
            	</tr>
            	<tr>
            		<td>Cantonese</td>
            		<td>
                            <select name="language[cantonese][]" id="cantonese_spocken" class="form-select">
							<option value="">--Select One--</option>
							<option value="Poor">Poor</option>
							<option value="Fair">Fair</option>
							<option value="Good">Good</option>
						</select>
            		</td>
            	</tr>
            	<tr>
            		<td>Arabic</td>
            		<td>
                            <select name="language[arabic][]" id="arabic_spocken" class="form-select">
							<option value="">--Select One--</option>
							<option value="Poor">Poor</option>
							<option value="Fair">Fair</option>
							<option value="Good">Good</option>
						</select>
            		</td>
            	</tr>
                </tbody>
            </table>
            
            <!-- FDW Skills Section -->
            <div class="section-header">
                <h3>🔧 FDW Skills (Based On FDW'S Declaration)</h3>
                <p>Skills assessment based on maid's declaration</p>
            </div>
            
            <div id="Fdw_skills_container">
                <div id="fdw_skills" class="form-grid">
                    <div class="form-group" style="grid-column: 1 / -1;">
                        <div class="checkbox-item">
                            <input type="checkbox" name="fdw_declare" value="1" id="fdw_declare">
                            <label for="fdw_declare">Based on Fdw's Declaration, No Evaluation/Observation by Singapore Ea or Overseas Training Centre/Ea</label>
                        </div>
					</div>

                    <div class="form-group" style="grid-column: 1 / -1;">
                        <label class="form-label">Training Centre Singapore EA</label>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="fdw_interview[]" value="1" id="fdw_interview_1">
                                <label for="fdw_interview_1">Interviewed via Telephone/Teleconference</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="fdw_interview[]" value="2" id="fdw_interview_2">
                                <label for="fdw_interview_2">Interviewed via Videoconference</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="fdw_interview[]" value="3" id="fdw_interview_3">
                                <label for="fdw_interview_3">Interviewed in Person</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="fdw_interview[]" value="4" id="fdw_interview_4">
                                <label for="fdw_interview_4">Interviewed in Person and Also Made Observation of Fdw in the Areas of Work Listed in Table</label>
                            </div>
                        </div>
					</div>	

                <?php 
					$work_area_tbl = $wpdb->prefix . "maid_skill_master";
					$query = "SELECT * FROM `$work_area_tbl` ORDER BY `id`";
					$areas = $wpdb->get_results($query);
					$count = $wpdb->num_rows;
					?>
                    <input class="form-input" name="skill_count" value="<?php echo $count; ?>" id="skill_count" maxlength="50" type="hidden">
                    
					<?php 
					if(!empty($areas)){
				    foreach($areas as $area){ ?>
                            <div class="form-group" style="grid-column: 1 / -1;">
                                <div class="section-header" style="margin-bottom: 1rem;">
                                    <h4><?php echo $area->lable; ?></h4>
                                </div>
                                
                                <?php if($area->id != 2 && $area->id != 3 && $area->id != 4) { ?>
                                <div class="form-group">
                                    <label for="other_<?= $area->id; ?>" class="form-label">Other Details</label>
                                    <input class="form-input" name="other_<?= $area->id; ?>" value="" id="other_<?= $area->id; ?>" maxlength="50" type="text" autocomplete="off" placeholder="Enter other details">
					</div>
                    <?php } ?>
                                
                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">Willingness</label>
                                        <div class="radio-group">
                                            <div class="radio-item">
                                                <input type="radio" value="Yes" name="willingness_<?= $area->id; ?>" id="willingness_<?= $area->id; ?>_yes">
                                                <label for="willingness_<?= $area->id; ?>_yes">Yes</label>
                                            </div>
                                            <div class="radio-item">
                                                <input type="radio" value="No" name="willingness_<?= $area->id; ?>" id="willingness_<?= $area->id; ?>_no">
                                                <label for="willingness_<?= $area->id; ?>_no">No</label>
                                            </div>
                                        </div>
					</div>

                                    <div class="form-group">
                                        <label class="form-label">Experience</label>
                                        <div class="radio-group">
                                            <div class="radio-item">
                                                <input type="radio" value="Yes" name="experience_<?= $area->id; ?>" id="experience_<?= $area->id; ?>_yes">
                                                <label for="experience_<?= $area->id; ?>_yes">Yes</label>
                                            </div>
                                            <div class="radio-item">
                                                <input type="radio" value="No" name="experience_<?= $area->id; ?>" id="experience_<?= $area->id; ?>_no">
                                                <label for="experience_<?= $area->id; ?>_no">No</label>
                                            </div>
                                        </div>
					</div>	

                                    <div class="form-group">
                                        <label for="skill_area_<?= $area->id; ?>" class="form-label">Assessment</label>
                                        <select name="skill_area_<?= $area->id; ?>" id="skill_area_<?= $area->id; ?>" class="form-select">
							<option value="N.A">N.A</option>
							<option value="Poor">Poor</option>
							<option value="Fair">Fair</option>
							<option value="Good">Good</option>
							<option value="Very Good">Very Good</option>
							<option value="Excellent">Excellent</option>
						</select>
					</div>	
					</div>

                                <div class="form-group exp_year" style="display:none;" id="exp_year_<?= $area->id; ?>">
                                    <label for="expe_year_<?= $area->id; ?>" class="form-label">Experience Year</label>
                                    <input class="form-input" name="expe_year_<?= $area->id; ?>" value="" id="expe_year_<?= $area->id; ?>" maxlength="50" type="text" autocomplete="off" placeholder="Enter years of experience">
                                </div>
                            </div>
					<?php 
					    }
					} ?>    
	            </div>
	        </div>
            
            <!-- FDW Skills (Interviewed By Overseas Training Centre) -->
            <div class="section-header">
                <h3>🏫 FDW Skills (Interviewed By Overseas Training Centre)</h3>
                <p>Skills assessment by overseas training centre</p>
            </div>
            
            <div id="Fdw_skills_container">
                <div id="fdw_skills" class="form-grid">
                    <div class="form-group" style="grid-column: 1 / -1;">
                        <div class="checkbox-item">
                            <input type="checkbox" name="tc_declare" value="1" id="tc_declare">
                            <label for="tc_declare">Interviewed by Overseas Training Centre/Ea</label>
                        </div>
					</div>

                    <div class="form-group">
                        <label for="training_centre" class="form-label">Foreign Training Centre Name</label>
                    <input class="form-input" name="training_centre" value="<?php echo isset($maid_prefill['training_centre']) ? esc_attr($maid_prefill['training_centre']) : ''; ?>" id="training_centre" maxlength="50" type="text" autocomplete="off" placeholder="Enter training centre name">
					</div>

                    <div class="form-group">
                        <label for="certified_no" class="form-label">Third Party Certified No</label>
                    <input class="form-input" name="certified_no" value="<?php echo isset($maid_prefill['certified_no']) ? esc_attr($maid_prefill['certified_no']) : ''; ?>" id="certified_no" maxlength="50" type="text" autocomplete="off" placeholder="Enter certification number">
					</div>

                    <div class="form-group" style="grid-column: 1 / -1;">
                        <label class="form-label">Training Centre Interview</label>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="tc_interview[]" value="1" id="tc_interview_1">
                                <label for="tc_interview_1">Interviewed via Telephone/Teleconference</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="tc_interview[]" value="2" id="tc_interview_2">
                                <label for="tc_interview_2">Interviewed via Videoconference</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="tc_interview[]" value="3" id="tc_interview_3">
                                <label for="tc_interview_3">Interviewed in Person</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="tc_interview[]" value="4" id="tc_interview_4">
                                <label for="tc_interview_4">Interviewed in Person and Also Made Observation of Fdw in the Areas of Work Listed in Table</label>
                            </div>
                        </div>
					</div>

					<?php 
					if(!empty($areas)){
				    foreach($areas as $area){ ?>
                            <div class="form-group" style="grid-column: 1 / -1;">
                                <div class="section-header" style="margin-bottom: 1rem;">
                                    <h4><?php echo $area->lable; ?></h4>
					</div>
                       
                                <?php if($area->id != 2 && $area->id != 3 && $area->id != 4) { ?>
                                <div class="form-group">
                                    <label for="other_skill_<?= $area->id; ?>" class="form-label">Other Details</label>
                                    <input class="form-input" name="other_skill_<?= $area->id; ?>" value="" id="other_skill_<?= $area->id; ?>" maxlength="50" type="text" autocomplete="off" placeholder="Enter other details">
					</div>
					<?php } ?>

                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">Willingness</label>
                                        <div class="radio-group">
                                            <div class="radio-item">
                                                <input type="radio" value="Yes" name="willingness_skill_<?= $area->id; ?>" id="willingness_skill_<?= $area->id; ?>_yes">
                                                <label for="willingness_skill_<?= $area->id; ?>_yes">Yes</label>
                                            </div>
                                            <div class="radio-item">
                                                <input type="radio" value="No" name="willingness_skill_<?= $area->id; ?>" id="willingness_skill_<?= $area->id; ?>_no">
                                                <label for="willingness_skill_<?= $area->id; ?>_no">No</label>
                                            </div>
                                        </div>
					</div>

                                    <div class="form-group">
                                        <label class="form-label">Experience</label>
                                        <div class="radio-group">
                                            <div class="radio-item">
                                                <input type="radio" value="Yes" name="experience_skill_<?= $area->id; ?>" id="experience_skill_<?= $area->id; ?>_yes">
                                                <label for="experience_skill_<?= $area->id; ?>_yes">Yes</label>
                                            </div>
                                            <div class="radio-item">
                                                <input type="radio" value="No" name="experience_skill_<?= $area->id; ?>" id="experience_skill_<?= $area->id; ?>_no">
                                                <label for="experience_skill_<?= $area->id; ?>_no">No</label>
                                            </div>
                                        </div>
					</div>	

                                    <div class="form-group">
                                        <label for="ass_skill_<?= $area->id; ?>" class="form-label">Assessment</label>
                                        <select name="ass_skill_<?= $area->id; ?>" id="ass_skill_<?= $area->id; ?>" class="form-select">
							<option value="N.A">N.A</option>
							<option value="Poor">Poor</option>
							<option value="Fair">Fair</option>
							<option value="Good">Good</option>
							<option value="Very Good">Very Good</option>
							<option value="Excellent">Excellent</option>
						</select>
					</div>	
					</div>
						
                                <div class="form-group exp_year" style="display:none;" id="exp_year_skill_<?= $area->id; ?>">
                                    <label for="expe_year_skill_<?= $area->id; ?>" class="form-label">Experience Year</label>
                                    <input class="form-input" name="expe_year_skill_<?= $area->id; ?>" value="" id="expe_year_skill_<?= $area->id; ?>" maxlength="50" type="text" autocomplete="off" placeholder="Enter years of experience">
                                </div>
                            </div>
					<?php 
					    }
					} ?>    
	            </div>
	        </div>
            
            <!-- Employment History in Singapore -->
            <div class="section-header">
                <h3>🇸🇬 Employment History in Singapore</h3>
                <p>Previous working experience in Singapore</p>
            </div>

            <div class="form-grid">
                <div class="form-group" style="grid-column: 1 / -1;">
                    <label class="form-label">Previous Working Experience in Singapore</label>
                    <div class="radio-group">
                        <div class="radio-item">
                            <input type="radio" name="exp" value="1" id="exp_yes" class="exp_list">
                            <label for="exp_yes">Yes</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" name="exp" value="0" id="exp_no" class="exp_list">
                            <label for="exp_no">No</label>
                        </div>
                    </div>
                </div>
			</div>

            <!-- Feedback from Previous Employers in Singapore -->
            <div class="section-header">
                <h3>💬 Feedback from Previous Employers in Singapore</h3>
                <p>Feedback and references from previous employers</p>
            </div>
            
			<div id="feedback_container">
                <div id="feedback_div" class="dynamic-section">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="employer_name" class="form-label">Name of Employer</label>
                            <input class="form-input" name="employer_name[]" value="" id="employer_name" maxlength="50" type="text" autocomplete="nope" placeholder="Enter employer name">
					</div>
                        
                        <div class="form-group" style="grid-column: 1 / -1;">
                            <label for="feedback" class="form-label">Feedback</label>
                            <textarea class="form-textarea" rows="4" name="feedback[]" id="feedback" autocomplete="off" placeholder="Enter feedback from employer"></textarea>
					</div>
	            </div>
	        </div>
			</div>
			
            <div class="add-remove-container">
                <button type="button" class="add-btn" onclick="add_feedback()" title="Add Feedback">+</button>
            </div>
            
            <!-- Availability of FDW to Be Interviewed -->
            <div class="section-header">
                <h3>📞 Availability of FDW to Be Interviewed by Prospective Employer</h3>
                <p>Interview availability options</p>
            </div>
            
            <div class="form-grid">
                <div class="form-group" style="grid-column: 1 / -1;">
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="fdw_availability[]" value="1" id="fdw_availability_1">
                            <label for="fdw_availability_1">FDW Is Not Available for Interview</label>
					</div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="fdw_availability[]" value="2" id="fdw_availability_2">
                            <label for="fdw_availability_2">FDW Can Be Interviewed by Phone</label>
				</div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="fdw_availability[]" value="3" id="fdw_availability_3">
                            <label for="fdw_availability_3">FDW Can Be Interviewed by Video-conference</label>
            </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="fdw_availability[]" value="4" id="fdw_availability_4">
                            <label for="fdw_availability_4">FDW Can Be Interviewed in Person</label>
            </div>
            </div>
			</div>
			</div>
			
            <!-- Navigation Buttons -->
            <div class="form-navigation">
                <button type="button" class="btn btn-outline" onclick="prevStep(3)">
                    <span>←</span> Previous Step
                </button>
                <button type="button" class="btn btn-primary" onclick="nextStep(5)">
                    Next Step <span>→</span>
                </button>
			</div>
		</div>
        
        <!-- Step 5: Review & Submit -->
        <div class="form-section" id="step-5">
            <div class="section-header">
                <h3>📋 Review & Submit</h3>
                <p>Review all information before submitting</p>
	</div>
            
            <!-- Declaration -->
            <div class="form-group">
                <div class="checkbox-item">
                    <input type="checkbox" name="declaration" value="1" id="declaration" required>
                    <label for="declaration" class="form-label required">I declare that all particulars given herein are true and accurate to the best of my knowledge.</label>
	</div>
	</div>
            
            <!-- Final Remarks -->
            <div class="form-group">
                <label for="remark" class="form-label">Final Remarks</label>
                <textarea class="form-textarea" rows="4" name="remark" id="remark" autocomplete="off" placeholder="Enter any final remarks"><?php echo isset($maid_prefill['remark']) ? esc_textarea($maid_prefill['remark']) : ''; ?></textarea>
	</div>
            
            <!-- Navigation Buttons -->
            <div class="form-navigation">
                <button type="button" class="btn btn-outline" onclick="prevStep(4)">
                    <span>←</span> Previous Step
                </button>
                <input name="maid_csv_import_files_next" type="hidden" value="maidadd" />
                <button type="submit" class="btn btn-success">
                    <span>✓</span> Submit Form
                </button>
                
            </div>
        </div>
</div>

<script type="text/javascript" language="javascript" class="init">
    // Modern Form Navigation and Functionality
    let currentStep = 1;
    const totalSteps = 5;
    
    // Initialize form
    jQuery(document).ready(function($) {
        // Initialize date picker
            jQuery('#datepicker').datepicker({
                autoclose: true,
                changeMonth: true, 
                changeYear: true,
                maxDate: "today",
                 yearRange: "-100:+00",
                dateFormat: 'dd/mm/yy'
            });

        // Initialize chosen select
        jQuery(".stchosen").chosen({no_results_text: "Oops, nothing found!"});

        // Form validation and interactions
        initializeFormValidation();
        initializeFormInteractions();
    });

    // Navigation Functions
    function nextStep(step) {
        if (validateCurrentStep(currentStep)) {
            showStep(step);
            updateProgressBar(step);
        }
    }

    function prevStep(step) {
        showStep(step);
        updateProgressBar(step);
    }

    function showStep(step) {
        // Hide all steps
        jQuery('.form-section').removeClass('active');
        
        // Show current step
        jQuery(`#step-${step}`).addClass('active');
        
        currentStep = step;
        
        // Smooth scroll to top
        jQuery('html, body').animate({
            scrollTop: jQuery('.maid-form-container').offset().top - 20
        }, 500);
    }

    function updateProgressBar(step) {
        // Update progress steps
        jQuery('.progress-step').removeClass('active completed');
        
        for (let i = 1; i <= totalSteps; i++) {
            if (i < step) {
                jQuery(`[data-step="${i}"]`).addClass('completed');
            } else if (i === step) {
                jQuery(`[data-step="${i}"]`).addClass('active');
            }
        }
    }

    // Validation Functions
    function validateCurrentStep(step) {
		let isValid = true;
		const currentSection = jQuery(`#step-${step}`);
		
		// Clear previous error states
		currentSection.find('.form-input, .form-textarea, .form-select, input[type="radio"], input[type="checkbox"]').removeClass('error');
		
		// Collect missing required fields and show a single popup
		const missingFields = [];
		const processedGroupNames = new Set();
		
		currentSection.find('[required]').each(function() {
			const field = jQuery(this);
			const type = (field.attr('type') || '').toLowerCase();
			let fieldValid = true;
			
			if (type === 'checkbox' || type === 'radio') {
				const groupName = field.attr('name');
				if (processedGroupNames.has(groupName)) {
					return; // already validated this group
				}
				const isChecked = currentSection.find(`input[name="${groupName}"]:checked`).length > 0;
				if (!isChecked) {
					fieldValid = false;
					currentSection.find(`input[name="${groupName}"]`).addClass('error');
				}
				processedGroupNames.add(groupName);
			} else if (type === 'file') {
				const el = this;
				let hasFile = (el.files && el.files.length > 0) || ((field.val() || '').trim() !== '');
				if (!hasFile) {
					// Fallbacks: check preview image or hidden helper field within the same group
					const group = field.closest('.form-group');
					const previewImg = group.find('.file-preview img');
					const hiddenHelper = group.find('input[type="hidden"]');
					const hasPreview = previewImg.length && (previewImg.attr('src') || '').trim() !== '';
					const hasHidden = hiddenHelper.length && (hiddenHelper.val() || '').trim() !== '';
					hasFile = hasPreview || hasHidden;
				}
				if (!hasFile) {
					fieldValid = false;
					field.addClass('error');
				}
			} else {
				const rawVal = field.val();
				const value = (rawVal == null ? '' : String(rawVal)).trim();
				if (!value) {
					fieldValid = false;
					field.addClass('error');
				}
			}
			
			if (!fieldValid) {
				let labelText = field.closest('.form-group').find('label.form-label').first().text();
				labelText = (labelText || '').replace('*', '').trim();
				if (!labelText) {
					labelText = field.attr('placeholder') || field.attr('name') || 'This field';
				}
				if (missingFields.indexOf(labelText) === -1) {
					missingFields.push(labelText);
				}
				isValid = false;
			}
		});
		
		if (!isValid) {
			const first = missingFields[0] || 'a required field';
			showPopup('Please fill the required field: ' + first, 'error', 4000);
			const firstInvalid = currentSection.find('.error').first();
			if (firstInvalid.length) { firstInvalid.focus(); }
			return false;
		}
		
        // Step-specific validation
        switch(step) {
            case 1:
                isValid = validatePersonalDetails();
                break;
            case 2:
                isValid = validateFamilyMedical();
                break;
            case 3:
                isValid = validateEmploymentHistory();
                break;
            case 4:
                isValid = validateSkillsLanguages();
                break;
            case 5:
                isValid = validateFinalStep();
                break;
        }
        
        return isValid;
    }

    function validatePersonalDetails() {
        let isValid = true;
        
        // Validate age (numeric only)
        const age = jQuery('#age').val();
        if (age && !/^\d+$/.test(age)) {
            jQuery('#age').addClass('error');
            showMessage('Age must be a number', 'error');
            isValid = false;
        }
        
        // Validate contact number
        const contact = jQuery('#contact_no').val();
        if (contact && !/^[\d\s\-\+\(\)]+$/.test(contact)) {
            jQuery('#contact_no').addClass('error');
            showMessage('Please enter a valid contact number', 'error');
            isValid = false;
        }
        
        return isValid;
    }

    function validateFamilyMedical() {
        let isValid = true;
        
        // Validate siblings number
        const siblings = jQuery('#no_of_siblings').val();
        const myNumber = jQuery('#my_number').val();
        
        if (siblings && myNumber && parseInt(myNumber) > parseInt(siblings)) {
            jQuery('#my_number').addClass('error');
            showMessage('Your position number cannot be greater than total siblings', 'error');
            isValid = false;
        }
        
        return isValid;
    }

    function validateEmploymentHistory() {
        // Enforce numeric rest_day between 0 and 31 if provided
        const restDayEl = jQuery('#rest_day');
        const val = restDayEl.val();
        if (val !== undefined && val !== null && String(val).trim() !== '') {
            const num = Number(val);
            if (!Number.isInteger(num) || num < 0 || num > 31) {
                restDayEl.addClass('error');
                showPopup('Rest days must be a whole number between 0 and 31.', 'error', 4000);
                return false;
            }
        }
        return true; // Add specific validation if needed
    }

    function validateSkillsLanguages() {
        return true; // Add specific validation if needed
    }

    function validateFinalStep() {
        let isValid = true;
        
        // Check declaration
        if (!jQuery('#declaration').is(':checked')) {
            showMessage('Please accept the declaration to continue', 'error');
            isValid = false;
        }
        
        return isValid;
    }

    // Message Display
    function showMessage(message, type = 'success') {
        // Remove existing messages
        jQuery('.message').remove();
        
        // Create message element
        const messageHtml = `<div class="message ${type}">${message}</div>`;
        
        // Insert at top of current step
        jQuery(`#step-${currentStep}`).prepend(messageHtml);
        
        // Auto remove after 5 seconds
        setTimeout(() => {
            jQuery('.message').fadeOut();
        }, 5000);
    }

    // Custom Popup Helpers
    function showPopup(message, kind = 'error', autoCloseMs = 3000) {
        const overlay = jQuery('#maid-popup');
        const modal = jQuery('#maid-popup-modal');
        const content = jQuery('#maid-popup-content');
        // Set content and style
        content.html(message);
        modal.toggleClass('success', kind === 'success');
        // Show
        overlay.addClass('visible').attr('aria-hidden', 'false');
        // Auto close
        if (autoCloseMs && Number(autoCloseMs) > 0) {
            clearTimeout(window._maidPopupTimer);
            window._maidPopupTimer = setTimeout(hidePopup, autoCloseMs);
        }
    }

    function hidePopup() {
        const overlay = jQuery('#maid-popup');
        overlay.removeClass('visible').attr('aria-hidden', 'true');
        clearTimeout(window._maidPopupTimer);
    }

    // Form Interactions
    function initializeFormInteractions() {
        // Radio button groups (mutually exclusive)
        jQuery('.illness1, .illness2, .illness3, .illness4, .illness5, .illness6, .illness7, .illness8, .illness9, .exp_list').on('change', function() {
            const name = jQuery(this).attr('name');
            jQuery(`input[name="${name}"]`).not(this).prop('checked', false);
        });

        // Experience year toggle
        jQuery('input[name^="experience"]').on('click', function() {
            const name = this.name;
            const exp = jQuery(this).val();
            const cnt = name.substring(11, 12);
            
            if (exp === 'Yes') {
                jQuery(`#exp_year_${cnt}`).show();
            } else {
                jQuery(`#exp_year_${cnt}`).hide();
            }
        });

        // Food preferences
        jQuery("#food_pref_other").click(function() {
            if (jQuery(this).is(":checked")) {
                jQuery("#other_food_pref").show();
            } else {
                jQuery("#other_food_pref").hide();
                jQuery('#other_food_input').val('');
            }
        });

        // Other illness field toggle
        jQuery("#other_ill").click(function() {
            if (jQuery(this).is(":checked")) {
                jQuery("#other_illnesses").show();
            } else {
                jQuery("#other_illnesses").hide();
            }
        });

        // Marital status change
        jQuery("#marrital_status").change(function() {
            if (this.value == 1) {
                jQuery('#no_of_children').val('');
                jQuery("#field_no_of_children").hide();
                jQuery('#children_age').val('');
                jQuery("#field_children_age").hide();
            } else {
                jQuery("#field_no_of_children").show();
                jQuery("#field_children_age").show();
            }
        });

        // Age validation (numeric only)
        jQuery('#age').on('keydown keyup', function(e) {
            const regExp = new RegExp('^[0-9\b]+');
            const value = String.fromCharCode(e.which) || e.key;
            
            if (!regExp.test(value)) {
                e.preventDefault();
                return false;
            }
        });

        // Code validation
        jQuery('#code').blur(function() {
            if (jQuery.trim(jQuery('#code').val()) !== '') {
                jQuery.post("<?php echo site_url(); ?>/wp-admin/admin-ajax.php?action=check_code", 
                    'maidcode=' + jQuery('#code').val(), 
                    function(data) {
                        if (jQuery.trim(data) !== '0') {
                            showMessage('The entered Code already exists. Please try another Code.', 'error');
                            jQuery('#code').val('').focus();
                        }
                    }
                );
            }
        });

        // Siblings validation
        jQuery('#my_number').blur(function() {
            if (jQuery.trim(jQuery('#my_number').val()) !== '') {
                const myNumber = jQuery('#my_number').val();
                const noOfSiblings = jQuery('#no_of_siblings').val();

                if (parseInt(noOfSiblings) < parseInt(myNumber)) {
                    showMessage('Please enter valid value in my number in siblings.', 'error');
                    jQuery('#my_number').val('');
                }
            }
        });
    }

    // File Upload Functions
    function previewImage(input, previewId) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                const preview = jQuery(`#${previewId}`);
                preview.attr('src', e.target.result);
                preview.show();
                
                // Update hidden input with file name
                const fileName = input.files[0].name;
                const hiddenInput = input.closest('.form-group').find('input[type="hidden"]');
                hiddenInput.val(fileName);
            };
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    // Dynamic Section Functions
    function add_employment_history() {
        const container = jQuery("#employment_history_container");
        const newSection = jQuery("#employment_history").clone();
        
        // Clear values
        newSection.find('input, textarea, select').val('');
        
        // Add remove button
        newSection.append('<button type="button" class="remove-btn" onclick="removeSection(this)"><span>×</span></button>');
        
        // Add to container
        container.append(newSection);
        
        // Reinitialize chosen
        newSection.find('.stchosen').chosen({no_results_text: "Oops, nothing found!"});
    }

    function add_feedback() {
        const container = jQuery("#feedback_container");
        const newSection = jQuery("#feedback_div").clone();
        
        // Clear values
        newSection.find('input, textarea').val('');
        
        // Add remove button
        newSection.append('<button type="button" class="remove-btn" onclick="removeSection(this)"><span>×</span></button>');
        
        // Add to container
        container.append(newSection);
    }

    function add_work_experience() {
        const container = jQuery('#work_experience_container');
        const newSection = jQuery('#work_experience').clone();

        // Clear values
        newSection.find('input, textarea').val('');

        // Add remove button
        newSection.append('<button type="button" class="remove-btn" onclick="removeSection(this)"><span>×</span></button>');

        // Append to container
        container.append(newSection);
    }

    function removeSection(button) {
        jQuery(button).closest('.dynamic-section').remove();
    }


    // Form submission
    jQuery('#maidedit').on('submit', function(e) {
        console.log('Form submission started');
        
        // Temporarily disable validation for testing
        let allValid = true;
        /*
        // Validate all steps before submission
        for (let step = 1; step <= totalSteps; step++) {
            if (!validateCurrentStep(step)) {
                allValid = false;
                showStep(step); // Show the step with errors
                break;
            }
        }
        */
        
        if (!allValid) {
            e.preventDefault();
            console.log('Form validation failed');
            return false;
        }
        
        // Show loading state
        jQuery(this).addClass('loading');
        jQuery('button[type="submit"]').prop('disabled', true).html('<span class="loading-spinner"></span> Submitting...');
        
        // Debug: Log form data
        console.log('Form action:', jQuery(this).attr('action'));
        console.log('Form method:', jQuery(this).attr('method'));
        console.log('Form enctype:', jQuery(this).attr('enctype'));
        
        // Check if files are selected
        var maidPhoto = jQuery('#maid_photo')[0].files[0];
        var passportPhoto = jQuery('#passport_photo')[0].files[0];
        
        if (maidPhoto) {
            console.log('Maid photo selected:', maidPhoto.name, 'Size:', maidPhoto.size);
        }
        if (passportPhoto) {
            console.log('Passport photo selected:', passportPhoto.name, 'Size:', passportPhoto.size);
        }
        
        // Form will submit normally
        console.log('Form will submit normally');
    });

    // Initialize form validation
    function initializeFormValidation() {
        // Real-time validation
        jQuery('.form-input, .form-textarea, .form-select').on('blur', function() {
            const field = jQuery(this);
            const value = field.val().trim();
            
            if (field.prop('required') && !value) {
                field.addClass('error');
            } else {
                field.removeClass('error');
            }
        });
        
        // Clear error on input
        jQuery('.form-input, .form-textarea, .form-select').on('input', function() {
            jQuery(this).removeClass('error');
        });
    }

    // Keyboard navigation
    jQuery(document).keydown(function(e) {
        if (e.ctrlKey || e.metaKey) {
            switch(e.which) {
                case 37: // Left arrow
                    if (currentStep > 1) {
                        e.preventDefault();
                        prevStep(currentStep - 1);
                    }
                    break;
                case 39: // Right arrow
                    if (currentStep < totalSteps) {
                        e.preventDefault();
                        nextStep(currentStep + 1);
                    }
                    break;
            }
        }
    });

    // Progress bar click navigation
    jQuery('.progress-step').click(function() {
        const step = parseInt(jQuery(this).data('step'));
        if (step <= currentStep) {
            showStep(step);
            updateProgressBar(step);
        }
    });

    // Original form initialization functions
    jQuery(document).ready(function(){
        // Date picker initialization
        jQuery('#datepicker').datepicker({
                autoclose: true,
                changeMonth: true, 
                changeYear: true,
                maxDate: "today",
                 yearRange: "-100:+00",
                dateFormat: 'dd/mm/yy'
        });

        // Radio button exclusivity for medical conditions
	    	jQuery('.exp_list').on('change', function() {
		       jQuery('.exp_list').not(this).prop('checked', false);  
		    });

		    jQuery('.illness1').on('change', function() {
		       jQuery('.illness1').not(this).prop('checked', false);  
		    });

		    jQuery('.illness2').on('change', function() {
		       jQuery('.illness2').not(this).prop('checked', false);  
		    });

		    jQuery('.illness3').on('change', function() {
		       jQuery('.illness3').not(this).prop('checked', false);  
		    });

		    jQuery('.illness4').on('change', function() {
		       jQuery('.illness4').not(this).prop('checked', false);  
		    });

		    jQuery('.illness5').on('change', function() {
		       jQuery('.illness5').not(this).prop('checked', false);  
		    });

		    jQuery('.illness6').on('change', function() {
		       jQuery('.illness6').not(this).prop('checked', false);  
		    });

		    jQuery('.illness7').on('change', function() {
		       jQuery('.illness7').not(this).prop('checked', false);  
		    });

		    jQuery('.illness8').on('change', function() {
		       jQuery('.illness8').not(this).prop('checked', false);  
		    });

		    jQuery('.illness9').on('change', function() {
		       jQuery('.illness9').not(this).prop('checked', false);  
		    });

        // Experience year toggle for FDW skills
	    	jQuery('input[name^="experience"]').on('click', function() {	
                var name1 = this.name;
                var exp = jQuery(this).val();
			    var cnt = name1.substring(11,12);

			    if(exp == 'Yes') {
				        jQuery('#exp_year_' +cnt).show();
            } else {
			            jQuery('#exp_year_' +cnt).hide();
			    }
	        });
	   
        // Experience year toggle for overseas training skills
	    	jQuery('input[name^="experience_skill"]').on('click', function() {	
                var name1 = this.name;
                var exp = jQuery(this).val();
			    var cnt = name1.substring(17,18);
			    if(exp == 'Yes') {
				        jQuery('#exp_year_skill_' +cnt).show();
            } else {
			            jQuery('#exp_year_skill_' +cnt).hide();
			    }
	        });

        // Food preferences toggle
            jQuery("#food_pref_other").click(function () {
                if (jQuery(this).is(":checked")) {
                    jQuery("#other_food_pref").show();
                } else {
                    jQuery("#other_food_pref").hide();
                    jQuery('#other_food_input').val('');
                }
            });

        // Other illness toggle
	        jQuery("#other_ill").click(function () {
	            if (jQuery(this).is(":checked")) {
	                jQuery("#other_illnesses").show();
	            } else {
	                jQuery("#other_illnesses").hide();
	            }
	        });
    
        // Siblings validation
			 jQuery('#my_number').blur(function() {
				if(jQuery.trim($('#my_number').val()) != ''){
					var my_number = $('#my_number').val();
					var no_of_siblings = $('#no_of_siblings').val();

                    if(parseInt(no_of_siblings) < parseInt(my_number)){
                            showPopup('Please enter valid value in my number in siblings.', 'error', 4000);
                            jQuery('#my_number').val('');
                    }
				}
			});

        // Chosen dropdown initialization
			jQuery(".stchosen").chosen({no_results_text: "Oops, nothing found!"});

        // Code validation
			jQuery('#code').blur(function() {
				if(jQuery.trim($('#code').val()) != ''){
					jQuery.post("<?php echo site_url(); ?>/wp-admin/admin-ajax.php?action=check_code",'maidcode='+$('#code').val(),function(data){ 
                        if($.trim(data) != 0){
                            showPopup('The entered Code already exists. Please try another Code.', 'error', 5000);
                            jQuery('#code').val('');
                            jQuery('#code').focus();
                        }
					});
				}
			});

        // Marital status change handler
        jQuery("#marrital_status").change(function(){
            if(this.value == 1) {
                jQuery('#no_of_children').val('');
                jQuery("#field_no_of_children").css("display", "none");
                jQuery('#children_age').val('');
                jQuery("#field_children_age").css("display", "none");
            } else {
                jQuery("#field_no_of_children").css("display", "inline");
                jQuery("#field_children_age").css("display", "inline");
            }
        });

        // Age validation - numbers only
        jQuery('#age').on('keydown keyup', function(e) {
            var regExp = new RegExp('^[0-9\b]+');
            var value = String.fromCharCode(e.which) || e.key;
            if (!regExp.test(value)) {
				e.preventDefault();
                return false;
            }
        });
    });

    // Test Data Function
    function fillTestData() {
        // Personal Details
        jQuery('#code').val('MAID001');
        jQuery('#name').val('Maria Santos Garcia');
        jQuery('#datepicker').val('15/03/1990');
        jQuery('#age').val('33');
        jQuery('#place_of_birth').val('Manila, Philippines');
        jQuery('#nationality').val('Filipino');
        jQuery('#religion').val('Roman Catholic');
        jQuery('#education').val('High School Graduate');
        jQuery('#contact_no').val('+65 9123 4567');
        jQuery('#marrital_status').val('2').trigger('chosen:updated');
        jQuery('#current_status').val('Available');
        jQuery('#salary').val('800');
        jQuery('#height').val('160');
        jQuery('#weight').val('55');
        jQuery('#address').val('123 Main Street, Manila, Philippines');
        jQuery('#name_of_airport').val('Changi Airport');
        jQuery('#maid_type').val('New').trigger('chosen:updated');
        jQuery('#off_day').val('12');

        // Family Details
        jQuery('#no_of_siblings').val('3');
        jQuery('#my_number').val('2');
        jQuery('#no_of_children').val('1');
        jQuery('#children_age').val('8');

        // Medical Details
        jQuery('#allergies').val('None');
        jQuery('#disability').val('None');
        jQuery('#diet').val('No restrictions');
        jQuery('#other_illness').val('None');

        // Medical Conditions - Set to "No" for all
        jQuery('input[name="mental_illness"][value="0"]').prop('checked', true);
        jQuery('input[name="epilepsy"][value="0"]').prop('checked', true);
        jQuery('input[name="asthma"][value="0"]').prop('checked', true);
        jQuery('input[name="diabetas"][value="0"]').prop('checked', true);
        jQuery('input[name="hypertension"][value="0"]').prop('checked', true);
        jQuery('input[name="tuber"][value="0"]').prop('checked', true);
        jQuery('input[name="heart"][value="0"]').prop('checked', true);
        jQuery('input[name="malaria"][value="0"]').prop('checked', true);
        jQuery('input[name="operation"][value="0"]').prop('checked', true);

        // Food Preferences
        jQuery('#no_pork').prop('checked', true);
        jQuery('#food_pref_other').prop('checked', true);
        jQuery('#other_food_pref').show();
        jQuery('#other_food_input').val('3');

        // Employment History
        jQuery('#rest_day').val('Sunday');
        jQuery('#other_remark').val('Hardworking and reliable maid with good references.');

        // Employment History Overseas
        jQuery('#from_date').val('01/01/2020');
        jQuery('#to_date').val('31/12/2022');
        jQuery('#country').val('SINGAPORE');
        jQuery('#employer').val('Mr. & Mrs. Tan');
        jQuery('#work_duties').val('General housekeeping, cooking, childcare, elderly care');
        jQuery('#remark_emp').val('Excellent performance, very reliable and trustworthy.');

        // Language Proficiency
        jQuery('#mandarin_spocken').val('Fair');
        jQuery('#english_spocken').val('Good');
        jQuery('#malay_spocken').val('Poor');
        jQuery('#cantonese_spocken').val('Poor');
        jQuery('#arabic_spocken').val('Poor');

        // FDW Skills Declaration
        jQuery('#fdw_declare').prop('checked', true);
        jQuery('#fdw_interview_1').prop('checked', true);
        jQuery('#fdw_interview_3').prop('checked', true);

        // Fill FDW Skills for each skill area (assuming 5 skill areas)
        for (let i = 1; i <= 5; i++) {
            if (jQuery(`#other_${i}`).length) {
                jQuery(`#other_${i}`).val('Good experience');
            }
            jQuery(`input[name="willingness_${i}"][value="Yes"]`).prop('checked', true);
            jQuery(`input[name="experience_${i}"][value="Yes"]`).prop('checked', true);
            jQuery(`#skill_area_${i}`).val('Good');
            jQuery(`#exp_year_${i}`).show();
            jQuery(`#expe_year_${i}`).val('3');
        }

        // Overseas Training Centre
        jQuery('#tc_declare').prop('checked', true);
        jQuery('#training_centre').val('Philippine Training Centre');
        jQuery('#certified_no').val('TC2023001');
        jQuery('#tc_interview_3').prop('checked', true);

        // Fill Overseas Training Skills
        for (let i = 1; i <= 5; i++) {
            if (jQuery(`#other_skill_${i}`).length) {
                jQuery(`#other_skill_${i}`).val('Certified training completed');
            }
            jQuery(`input[name="willingness_skill_${i}"][value="Yes"]`).prop('checked', true);
            jQuery(`input[name="experience_skill_${i}"][value="Yes"]`).prop('checked', true);
            jQuery(`#ass_skill_${i}`).val('Good');
            jQuery(`#exp_year_skill_${i}`).show();
            jQuery(`#expe_year_skill_${i}`).val('2');
        }

        // Employment History in Singapore
        jQuery('#exp_yes').prop('checked', true);

        // Feedback from Previous Employers
        jQuery('#employer_name').val('Mr. & Mrs. Lim');
        jQuery('#feedback').val('Excellent maid, very hardworking and trustworthy. Highly recommended.');

        // Availability for Interview
        jQuery('#fdw_availability_2').prop('checked', true);
        jQuery('#fdw_availability_3').prop('checked', true);
        jQuery('#fdw_availability_4').prop('checked', true);

        // Declaration
        jQuery('#declaration').prop('checked', true);

        // Final Remarks
        jQuery('#remark').val('This maid has excellent references and is highly recommended for employment.');

        // Show success message
        showMessage('✅ Test data filled successfully! You can now test the form navigation and submission.', 'success');

        // Trigger chosen updates
        jQuery('.stchosen').trigger('chosen:updated');

        // Show children fields since marital status is married
        jQuery('#field_no_of_children').show();
        jQuery('#field_children_age').show();
    }
	</script>

    </div>
    <div id="postbox-container-1" class="postbox-container">
        <img src="" id="imgadd" alt="" width="280px"/>
    </div>
    </div>
    </div>
    </form>
</div>