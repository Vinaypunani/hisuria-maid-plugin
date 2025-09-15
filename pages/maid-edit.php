<style>
/* Modern CSS Reset */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

/* Modern Form Styles */
.modern-form {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
    max-width: 100%;
    margin: 0 auto;
}

.section-header {
    background: linear-gradient(135deg, #4f46e5 0%, #3b82f6 100%);
    color: white;
    padding: 20px 30px;
    border-radius: 10px 10px 0 0;
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 0;
}

.section-content {
    background: white;
    padding: 30px;
    border-radius: 0 0 10px 10px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

.form-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
    color: #374151;
}

.form-label .required {
    color: #ef4444;
    margin-left: 4px;
}

.form-input {
    width: 100%;
    padding: 10px 16px;
    border: 2px solid #e5e7eb;
    border-radius: 8px;
    font-size: 1rem;
    line-height: 1.5;
    transition: all 0.2s;
}

.form-input:focus {
    outline: none;
    border-color: #4f46e5;
    box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
}

.form-input:read-only {
    background-color: #f9fafb;
    cursor: not-allowed;
}

.form-select {
    width: 100%;
    padding: 10px 16px;
    border: 2px solid #e5e7eb;
    border-radius: 8px;
    font-size: 1rem;
    line-height: 1.5;
    background-color: white;
    cursor: pointer;
}

/* Error styles for form fields */
.form-input.error,
.form-textarea.error,
.form-select.error {
    border-color: #ef4444;
    box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
}

/* Chosen dropdown error styles - consistent with form inputs */
.chosen-container.error .chosen-single {
    border-color: #ef4444 !important;
    box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1) !important;
}

.form-textarea {
    width: 100%;
    padding: 10px 16px;
    border: 2px solid #e5e7eb;
    border-radius: 8px;
    font-size: 1rem;
    line-height: 1.5;
    min-height: 100px;
    resize: vertical;
}

/* Medical Conditions Styles */
.initial-fields {
    margin-bottom: 32px;
}

.field-row {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}

.field-item {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.field-item .form-label {
    color: #4a5568;
    font-size: 0.95rem;
}

.field-item .form-input {
    width: 100%;
    padding: 8px 12px;
    border: 1px solid #e2e8f0;
    border-radius: 6px;
    font-size: 0.95rem;
}

.bottom-section {
    margin-top: 32px;
    border-top: 1px solid #e5e7eb;
    padding-top: 32px;
}

/* Employment History Styles */
.employment-record {
    background: white;
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    padding: 24px;
    margin-bottom: 24px;
    position: relative;
    transition: all 0.2s ease;
}

.employment-record:hover {
    border-color: #4f46e5;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
}

.remove-record-btn {
    position: absolute;
    top: 8px;
    right: 8px;
    width: 28px;
    height: 28px;
    border-radius: 50%;
    border: none;
    background: #ef4444;
    color: white;
    font-size: 18px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s ease;
    z-index: 2;
}

.remove-record-btn:hover {
    background: #dc2626;
    transform: scale(1.05);
}

.add-record-btn-container {
    display: flex;
    justify-content: flex-end;
    margin-top: 16px;
}

.add-record-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 20px;
    background: #4f46e5;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 0.95rem;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s ease;
}

.add-record-btn:hover {
    background: #4338ca;
    transform: translateY(-1px);
}

.add-record-btn span {
    font-size: 20px;
    line-height: 1;
}

/* Language Proficiency Styles */
.language-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    margin-top: 16px;
    background: white;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.language-table th {
    background: #f8fafc;
    padding: 16px;
    font-weight: 600;
    color: #1f2937;
    text-align: left;
    border-bottom: 1px solid #e5e7eb;
}

.language-table td {
    padding: 16px;
    border-bottom: 1px solid #e5e7eb;
    color: #374151;
}

.language-table tr:last-child td {
    border-bottom: none;
}

.language-table tr:hover {
    background: #f8fafc;
}

.language-select {
    width: 100%;
    max-width: 200px;
    padding: 8px 12px;
    border: 1px solid #e5e7eb;
    border-radius: 6px;
    background: white;
    color: #374151;
    font-size: 0.95rem;
    transition: all 0.2s ease;
}

.language-select:hover {
    border-color: #d1d5db;
}

.language-select:focus {
    border-color: #4f46e5;
    outline: none;
    box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
}

/* Work Areas Styles */
.work-areas-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    margin-top: 16px;
    background: white;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.work-areas-table th {
    background: #f8fafc;
    padding: 16px;
    font-weight: 600;
    color: #1f2937;
    text-align: left;
    border-bottom: 1px solid #e5e7eb;
}

.work-areas-table td {
    padding: 16px;
    border-bottom: 1px solid #e5e7eb;
    color: #374151;
    vertical-align: middle;
}

.work-areas-table tr:last-child td {
    border-bottom: none;
}

.work-areas-table tr:hover {
    background: #f8fafc;
}

.work-select {
    width: 100%;
    max-width: 150px;
    padding: 8px 12px;
    border: 1px solid #e5e7eb;
    border-radius: 6px;
    background: white;
    color: #374151;
    font-size: 0.95rem;
    transition: all 0.2s ease;
}

.work-select:hover {
    border-color: #d1d5db;
}

.work-select:focus {
    border-color: #4f46e5;
    outline: none;
    box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
}

.work-select[value="Yes"] {
    color: #059669;
}

.work-select[value="No"] {
    color: #dc2626;
}

.task-name {
    font-weight: 500;
    color: #1f2937;
}

/* FDW Skills Styles */
.fdw-skills-container {
    background: white;
    border-radius: 8px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    margin-top: 16px;
}

.fdw-skill-card {
    border-bottom: 1px solid #e5e7eb;
    padding: 24px;
}

.fdw-skill-card:last-child {
    border-bottom: none;
}

.fdw-declaration {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 16px 24px;
    background: #f8fafc;
    border-radius: 8px 8px 0 0;
    margin-bottom: 16px;
}

.fdw-declaration input[type="checkbox"] {
    margin-top: 4px;
}

.fdw-interview {
    padding: 24px;
    border-bottom: 1px solid #e5e7eb;
}

.fdw-interview-title {
    font-weight: 600;
    color: #1f2937;
    margin-bottom: 16px;
}

.fdw-interview-options {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.fdw-interview-option {
    display: flex;
    align-items: flex-start;
    gap: 12px;
}

.skill-section {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
    padding: 24px;
}

.skill-label {
    font-weight: 600;
    color: #1f2937;
    grid-column: 1 / -1;
    margin-bottom: 16px;
    font-size: 1.1rem;
}

.skill-field {
    margin-bottom: 20px;
}

.skill-field-label {
    display: block;
    font-weight: 500;
    color: #374151;
    margin-bottom: 8px;
}

.skill-radio-group {
    display: flex;
    gap: 24px;
}

.skill-radio-option {
    display: flex;
    align-items: center;
    gap: 8px;
}

.skill-radio-option input[type="radio"] {
    width: 16px;
    height: 16px;
    border: 2px solid #e5e7eb;
    border-radius: 50%;
    appearance: none;
    -webkit-appearance: none;
    outline: none;
    cursor: pointer;
    position: relative;
    transition: all 0.2s ease;
}

.skill-radio-option input[type="radio"]:checked {
    border-color: #4f46e5;
    background: #4f46e5;
}

.skill-radio-option input[type="radio"]:checked::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 6px;
    height: 6px;
    background: white;
    border-radius: 50%;
}

.skill-radio-option label {
    font-size: 0.95rem;
    color: #374151;
    cursor: pointer;
}

.skill-input {
    width: 100%;
    padding: 8px 12px;
    border: 1px solid #e5e7eb;
    border-radius: 6px;
    font-size: 0.95rem;
    transition: all 0.2s ease;
}

.skill-input:hover {
    border-color: #d1d5db;
}

.skill-input:focus {
    border-color: #4f46e5;
    outline: none;
    box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
}

.skill-select {
    width: 100%;
    padding: 8px 12px;
    border: 1px solid #e5e7eb;
    border-radius: 6px;
    background: white;
    color: #374151;
    font-size: 0.95rem;
    transition: all 0.2s ease;
}

.skill-select:hover {
    border-color: #d1d5db;
}

.skill-select:focus {
    border-color: #4f46e5;
    outline: none;
    box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
}

/* Employment History Styles */
.employment-history-section {
    background: white;
    border-radius: 8px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    padding: 24px;
    margin-bottom: 24px;
}

.experience-toggle {
    display: flex;
    gap: 24px;
    margin-bottom: 24px;
}

.experience-option {
    display: flex;
    align-items: center;
    gap: 8px;
}

.experience-option input[type="checkbox"] {
    width: 18px;
    height: 18px;
    border: 2px solid #e5e7eb;
    border-radius: 4px;
    appearance: none;
    -webkit-appearance: none;
    outline: none;
    cursor: pointer;
    position: relative;
    transition: all 0.2s ease;
}

.experience-option input[type="checkbox"]:checked {
    border-color: #4f46e5;
    background: #4f46e5;
}

.experience-option input[type="checkbox"]:checked::after {
    content: "✓";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 12px;
}

.experience-option label {
    font-size: 0.95rem;
    color: #374151;
    cursor: pointer;
}

.feedback-section {
    margin-top: 32px;
}

.feedback-card {
    background: white;
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    padding: 24px;
    margin-bottom: 16px;
    transition: all 0.2s ease;
    position: relative;
}

.feedback-card:hover {
    border-color: #4f46e5;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
}

.add-feedback-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 20px;
    background: #4f46e5;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 0.95rem;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s ease;
}

.add-feedback-btn:hover {
    background: #4338ca;
    transform: translateY(-1px);
}

.add-feedback-btn span {
    font-size: 20px;
    line-height: 1;
}

.feedback-field {
    margin-bottom: 16px;
}

.feedback-field:last-child {
    margin-bottom: 0;
}

.feedback-label {
    display: block;
    font-weight: 500;
    color: #374151;
    margin-bottom: 8px;
}

.feedback-input {
    width: 100%;
    padding: 8px 12px;
    border: 1px solid #e5e7eb;
    border-radius: 6px;
    font-size: 0.95rem;
    transition: all 0.2s ease;
}

.feedback-input:hover {
    border-color: #d1d5db;
}

.feedback-input:focus {
    border-color: #4f46e5;
    outline: none;
    box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
}

.feedback-textarea {
    width: 100%;
    padding: 8px 12px;
    border: 1px solid #e5e7eb;
    border-radius: 6px;
    font-size: 0.95rem;
    min-height: 100px;
    resize: vertical;
    transition: all 0.2s ease;
}

.feedback-textarea:hover {
    border-color: #d1d5db;
}

.feedback-textarea:focus {
    border-color: #4f46e5;
    outline: none;
    box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
}

/* FDW Availability Styles */
.availability-section {
    background: white;
    border-radius: 8px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    padding: 24px;
    margin-bottom: 24px;
}

.availability-options {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.availability-option {
    display: flex;
    align-items: flex-start;
    gap: 12px;
}

.availability-option input[type="checkbox"] {
    width: 18px;
    height: 18px;
    border: 2px solid #e5e7eb;
    border-radius: 4px;
    appearance: none;
    -webkit-appearance: none;
    outline: none;
    cursor: pointer;
    position: relative;
    transition: all 0.2s ease;
    margin-top: 2px;
}

.availability-option input[type="checkbox"]:checked {
    border-color: #4f46e5;
    background: #4f46e5;
}

.availability-option input[type="checkbox"]:checked::after {
    content: "✓";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 12px;
}

.availability-option label {
    font-size: 0.95rem;
    color: #374151;
    cursor: pointer;
    line-height: 1.4;
}

/* Declaration Styles */
.declaration-section {
    background: white;
    border-radius: 8px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    padding: 24px;
    margin-bottom: 24px;
}

.declaration-option {
    display: flex;
    align-items: flex-start;
    gap: 12px;
}

.declaration-option input[type="checkbox"] {
    width: 18px;
    height: 18px;
    border: 2px solid #e5e7eb;
    border-radius: 4px;
    appearance: none;
    -webkit-appearance: none;
    outline: none;
    cursor: pointer;
    position: relative;
    transition: all 0.2s ease;
    margin-top: 2px;
}

.declaration-option input[type="checkbox"]:checked {
    border-color: #4f46e5;
    background: #4f46e5;
}

.declaration-option input[type="checkbox"]:checked::after {
    content: "✓";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 12px;
}

.declaration-option label {
    font-size: 0.95rem;
    color: #374151;
    cursor: pointer;
    line-height: 1.4;
}

/* Remarks Styles */
.remarks-section {
    background: white;
    border-radius: 8px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    padding: 24px;
    margin-bottom: 24px;
}

.remarks-field {
    margin-bottom: 16px;
}

.remarks-label {
    display: block;
    font-weight: 500;
    color: #374151;
    margin-bottom: 8px;
}

.remarks-textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #e5e7eb;
    border-radius: 6px;
    font-size: 0.95rem;
    min-height: 120px;
    resize: vertical;
    transition: all 0.2s ease;
}

.remarks-textarea:hover {
    border-color: #d1d5db;
}

.remarks-textarea:focus {
    border-color: #4f46e5;
    outline: none;
    box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
}

/* Submit Button Styles */
.submit-section {
    display: flex;
    justify-content: flex-end;
    margin-top: 32px;
}

.submit-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 12px 24px;
    background: #4f46e5;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 1rem;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s ease;
}

.submit-button:hover {
    background: #4338ca;
    transform: translateY(-1px);
}

.bottom-row {
    display: flex;
    gap: 48px;
}

.food-preferences {
    flex: 2;
}

.other-illness {
    flex: 1;
}

.checkbox-group {
    display: flex;
    gap: 24px;
    margin-top: 12px;
}

.checkbox-item {
    display: flex;
    align-items: center;
    gap: 8px;
}

.checkbox-item input[type="checkbox"] {
    appearance: none;
    -webkit-appearance: none;
    width: 20px;
    height: 20px;
    border: 2px solid #d1d5db;
    border-radius: 4px;
    cursor: pointer;
    position: relative;
    transition: all 0.2s ease;
}

.checkbox-item input[type="checkbox"]:checked {
    background: #4f46e5;
    border-color: #4f46e5;
}

.checkbox-item input[type="checkbox"]:checked::after {
    content: "✓";
    position: absolute;
    color: white;
    font-size: 14px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.checkbox-item label {
    font-size: 0.9rem;
    color: #4b5563;
    cursor: pointer;
    user-select: none;
}

.medical-conditions {
    margin-top: 32px;
}

.medical-conditions h3 {
    font-size: 1.1rem;
    color: #1f2937;
    margin-bottom: 16px;
    font-weight: 600;
}

.medical-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
}

.medical-item {
    display: flex;
    flex-direction: column;
    gap: 12px;
    padding: 16px;
    background: #ffffff;
    border-radius: 8px;
    border: 1px solid #e5e7eb;
    transition: all 0.2s ease;
}

.medical-item:hover {
    border-color: #4f46e5;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
}

.medical-item label:first-child {
    font-weight: 500;
    color: #374151;
    font-size: 0.95rem;
}

.medical-options {
    display: flex;
    gap: 16px;
}

.medical-option {
    display: flex;
    align-items: center;
    gap: 8px;
}

.medical-option input[type="radio"] {
    appearance: none;
    -webkit-appearance: none;
    width: 20px;
    height: 20px;
    border: 2px solid #d1d5db;
    border-radius: 50%;
    outline: none;
    cursor: pointer;
    position: relative;
    transition: all 0.2s ease;
}

.medical-option input[type="radio"]:checked {
    border-color: #4f46e5;
    background: #4f46e5;
}

.medical-option input[type="radio"]:checked::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 8px;
    height: 8px;
    background: white;
    border-radius: 50%;
}

.medical-option input[type="radio"]:hover {
    border-color: #4f46e5;
}

.medical-option label {
    font-size: 0.9rem;
    color: #4b5563;
    cursor: pointer;
    user-select: none;
}

@media (max-width: 1024px) {
    .field-row {
        grid-template-columns: repeat(2, 1fr);
    }
    .medical-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .bottom-row {
        flex-direction: column;
        gap: 24px;
    }
    .checkbox-group {
        flex-wrap: wrap;
        gap: 16px;
    }
}

@media (max-width: 640px) {
    .field-row {
        grid-template-columns: 1fr;
    }
    .medical-grid {
        grid-template-columns: 1fr;
    }
    .checkbox-group {
        flex-direction: column;
        gap: 12px;
    }
}

/* Image Upload Styles */
.image-upload {
    background: #f9fafb;
    border: 2px dashed #e5e7eb;
    border-radius: 8px;
    padding: 20px;
    text-align: center;
    margin-bottom: 20px;
}

.image-upload-btn {
    background: #4f46e5;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-weight: 500;
    transition: all 0.2s;
}

.image-upload-btn:hover {
    background: #4338ca;
}

.image-preview {
    max-width: 120px;
    border-radius: 8px;
    margin-top: 10px;
}

/* Hide Work Areas and Work Experience sections */
.work-areas-section,
.work-experience-section {
    display: none !important;
}

/* Responsive Design */
@media (max-width: 768px) {
    .form-grid {
        grid-template-columns: 1fr;
    }
    
    .section-header {
        font-size: 1.25rem;
        padding: 15px 20px;
    }
    
    .section-content {
        padding: 20px;
    }
}
.chosen-container-single .chosen-single{height: 30px;
    border: 1px solid #ddd;
    border-radius: 0;     box-shadow: inset 0 1px 2px rgba(0,0,0,.07); line-height: 28px;}
    input[readonly].maid_logo_fr{background: #fff;}
    .control-wrap label{width: 160px;
    float: left;}
 .personal_details .control-wrap input, .personal_details .control-wrap textarea, .personal_details .control-wrap .chosen-container {width:75%; float:right;}
 .personal_details .control-wrap {
    margin: 10px 0 0;  min-height: 35px;
    display: block;
    float: left;
    width: 49%;
}
#work_experience{border:none !important;}
 .personal_details .control-wrap:nth-child(2n){float:right; clear: right;}

#post-body.columns-2 #postbox-container-1{width:auto;}
.personal_details .control-wrap .chosen-container{width:75% !important;}
#poststuff #post-body.columns-2 {
    margin-right: 172px;
}
#post-body-content{min-width: 100%;}
#maidlogo-fr{margin-top: 10px;
    margin-bottom: 30px;
    background: #e6e6e6;
    border-radius: 0;
    border: none;
    box-shadow: none;
    font-weight: bold; 
    height: 35px;
    color: #000; }

.remark_custm{padding-top: 20px;
    float: left;
    width: 100%;}
.table_custm tr th:first-child{width: 70%;}
.table_custm{margin-top:10px; margin-bottom:20px; width:100%; float:left;}
.remark_custm label{width:100px; float:left;}
.remark_custm textarea{width: 75%; float:right; margin-right:2px;}
.btn_cutm{background:#e6e6e6 !important; color:#000 !important; border-color:#e6e6e6 !important; font-weight: bold; text-shadow:none !important; box-shadow:none !important;}  
.remove_btn{    float: right;
    clear: right;
    background: red;
    color: #fff;
    font-size: 15px;
    border: none;
    border-radius: 50%;
    height: 22px;
    width: 22px; margin-top:5px; 
    cursor: pointer;
}
.chosen-results{width:100%;}

.remove_btn span{position: relative; top:-2px;}

.fdw_skills .control-wrap.skill_label label {
    width: 700px !important;
    float: left !important;
}

.personal_details .skill_label {
    margin: 10px 0 0;
    min-height: 35px;
    display: block;
    float: left;
    width: 98% !important;
    font-weight: bold;
}

.fdw_skills .control-wrap input {
    width: auto; 
    float: none; 
}

 .personal_details.fdw_skills .control-wrap:nth-child(2n){float:left;}

 .fdw_skills .control-wrap label{width: 200px; float: left;}

 .medical .control-wrap input[type="checkbox"]{
    width: auto !important; 
    float: none; 
}
.medical .control-wrap input{
    float: none; 
}

.illness {margin-right : 10px;float:left;}
div.illness {width: 124px;}

.emp_work {margin-right : 10px;float:left;}
div.emp_work {width: 50px;}


#passportlogo-fr{margin-top: 10px;
    margin-bottom: 30px;
    background: #e6e6e6;
    border-radius: 0;
    border: none;
    box-shadow: none;
    font-weight: bold; 
    height: 35px;
    color: #000; }
input[readonly].passport_logo_fr{background: #fff;}

.welcome-panel{
    background-color: #fff !important;
}

#wpfooter{display: none !important;}

/* Modern Dynamic Sections */
.dynamic-section {
    position: relative;
    background: white;
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    padding: 1.5rem;
    margin-bottom: 1rem;
    box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
}

/* Add/Remove Buttons */
.add-remove-container {
    display: flex;
    justify-content: flex-end;
    margin: 1rem 0;
}

.add-btn {
    background: #10b981;
    color: white;
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s ease-in-out;
    font-size: 1.25rem;
    font-weight: bold; 
}

.add-btn:hover {
    background: #059669;
    transform: scale(1.1);
}

.remove-btn {
    background: #ef4444;
    color: white;
    border: none;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s ease-in-out;
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

</style>
<div class="wrap">
	<div id="icon-tools" class="icon32"></div>
    <h1 class="wp-heading-inline"><?php _e('Maid', 'st-maid'); ?></h1>
	<a href="admin.php?page=addmaid" class="page-title-action">Add New</a>
	<hr class="wp-header-end">
	<h2><?php _e('Edit Maid'); ?></h2>
	<?php 
		global $wpdb;
		//$cur_lan = pll_current_language('slug');  if($cur_lan == ''){ $cur_lan = pll_default_language('slug');}
		$table_name = $wpdb->prefix .'st_maid';
		$maidid = isset($_REQUEST['maidid']) ? sanitize_text_field( $_REQUEST['maidid'] ) : 0;

		$row = $wpdb->get_row( "SELECT * FROM $table_name WHERE id = $maidid" );
		if(empty($row)) {
			echo '<div class="notice notice-error"><p>Maid not found or invalid ID provided.</p></div>';
			return;
		}
	?>
	<div class="modern-form">
	<form name="maidedit" method="post" id="maidedit" autocomplete="off">
		<div class="section-header">
			Personal Details
		</div>
		<div class="section-content">
			<div class="form-grid">
			<div class="form-group">
				<label class="form-label" for="code">Code</label>
				<input class="form-input" name="code" value="<?php echo !empty($row->code)?$row->code:''; ?>" id="code" maxlength="15" type="text" readonly>			
			</div>
			<div class="form-group">
				<label class="form-label" for="salary">Salary</label>
				<input class="form-input" name="salary" value="<?php echo !empty($row->salary)?$row->salary:''; ?>" id="salary" type="number" placeholder="Enter salary amount">
			</div>
			<div class="form-group">
				<label class="form-label" for="name">Name <span class="required">*</span></label>
				<input class="form-input" name="name" value="<?php echo !empty($row->name)?$row->name:''; ?>" id="name" maxlength="50" type="text" required autocomplete="nope" placeholder="Enter full name">			
			</div>
            
            <?php
                $date = '';
                $date_of_birth = $row->date_of_birth;
                if($date_of_birth != '')
                {
                    $date = date('d/m/Y',strtotime($date_of_birth));
                }
            ?>
            
			<div class="form-group">
				<label class="form-label" for="date_of_birth">Date of Birth <span class="required">*</span></label>
				<input class="form-input" name="date_of_birth" value="<?php echo $date; ?>" id="datepicker" maxlength="50" type="text" required autocomplete="off" placeholder="DD/MM/YYYY">			
			</div>
			<div class="form-group">
				<label class="form-label" for="age">Age <span class="required">*</span></label>
				<input class="form-input" name="age" value="<?php echo !empty($row->age)?$row->age:''; ?>" id="age" maxlength="50" type="number" required placeholder="Enter age">			
			</div>
			<div class="form-group">
				<label class="form-label" for="place_of_birth">Place of Birth <span class="required">*</span></label>
				<input class="form-input" name="place_of_birth" value="<?php echo $row->place_of_birth; ?>" id="place_of_birth" maxlength="50" type="text" required placeholder="Enter place of birth">			
			</div>
			<div class="form-group">
				<label class="form-label" for="height">Height (cm) <span class="required">*</span></label>
				<input class="form-input" name="height" value="<?php echo !empty($row->height)?$row->height:''; ?>" id="height" maxlength="50" type="number" required placeholder="Enter height in centimeters">			
			</div>
			<div class="form-group">
				<label class="form-label" for="weight">Weight (kg) <span class="required">*</span></label>
				<input class="form-input" name="weight" value="<?php echo !empty($row->weight)?$row->weight:''; ?>" id="weight" maxlength="50" type="number" required placeholder="Enter weight in kilograms">			
			</div>
			<div class="form-group">
				<label class="form-label" for="nationality">Nationality <span class="required">*</span></label>
				<select name="nationality" id="nationality" class="form-select stchosen chosen-select" data-required="true">
					<option value="">Select nationality</option>
					<option value="Indonesian" <?php echo ($row->nationality == 'Indonesian') ? 'selected' : ''; ?>>Indonesian</option>
					<option value="Philippines" <?php echo ($row->nationality == 'Philippines') ? 'selected' : ''; ?>>Philippines</option>
					<option value="Myanmar" <?php echo ($row->nationality == 'Myanmar') ? 'selected' : ''; ?>>Myanmar</option>
					<option value="Indian" <?php echo ($row->nationality == 'Indian') ? 'selected' : ''; ?>>Indian</option>
					<option value="Sri Lankan" <?php echo ($row->nationality == 'Sri Lankan') ? 'selected' : ''; ?>>Sri Lankan</option>
				</select>			
			</div>
			<div class="form-group" style="grid-column: 1 / -1;">
				<label class="form-label" for="address">Address</label>
				<textarea class="form-textarea" rows="4" name="address" id="address" autocomplete="nope" placeholder="Enter complete address"><?php echo $row->address; ?></textarea>		
			</div>
			<div class="form-group">
				<label class="form-label" for="religion">Religion <span class="required">*</span></label>
				<input class="form-input" name="religion" value="<?php echo $row->religion; ?>" id="religion" maxlength="50" type="text" required placeholder="Enter religion">		
			</div>
			<div class="form-group">
				<label class="form-label" for="education">Education <span class="required">*</span></label>
				<input class="form-input" name="education" value="<?php echo $row->education; ?>" id="education" maxlength="50" type="text" required placeholder="Enter education details">		
			</div>

            <div class="form-group">
                <label class="form-label" for="contact_no">Contact Number <span class="required">*</span></label>
                <input class="form-input" name="contact_no" value="<?php echo !empty($row->contact_no)?$row->contact_no:''; ?>" id="contact_no" type="number" inputmode="numeric" step="1" min="1000000" max="99999999999999" required placeholder="Enter contact number (7-14 digits)">
            </div>

			<div class="form-group">
				<label class="form-label" for="marrital_status">Marital Status <span class="required">*</span></label>
				<select name="marrital_status" id="marrital_status" class="form-select" required>
					<option value="">Select marital status</option>
					<option value="1" <?php if($row->marrital_status == '1'){ echo 'selected="selected"';} ?>>Single</option>
					<option value="2" <?php if($row->marrital_status == '2'){ echo 'selected="selected"';} ?>>Married</option>
					<option value="3" <?php if($row->marrital_status == '3'){ echo 'selected="selected"';} ?>>Separated</option>
					<option value="4" <?php if($row->marrital_status == '4'){ echo 'selected="selected"';} ?>>Widow</option>
				</select>
			</div>

			<div class="form-group">
				<label class="form-label" for="current_status">Current Status <span class="required">*</span></label>
				<input class="form-input" name="current_status" value="<?php echo !empty($row->current_status)?$row->current_status:''; ?>" id="current_status" maxlength="50" type="text" required placeholder="Enter current status">		
			</div>
			
			<div class="form-group" style="grid-column: 1 / -1;">
				<label class="form-label" for="maid_logo_fr">Photo</label>
                <div class="image-upload">
                    <input class="form-input maid_logo_fr" type="text" name="maid_logo_fr" readonly="readonly" value="<?php echo $row->image ? esc_attr($row->image) : ''; ?>" placeholder="No file chosen" />
                    <button id="maidlogo-fr" class="image-upload-btn" type="button">Choose File</button>
                    <div style="margin-top: 10px;">
                        <img src="<?php echo $row->image ? esc_url($row->image) : ''; ?>" id="logofr" alt="Maid photo" class="image-preview" style="<?php echo $row->image ? '' : 'display:none;'; ?>"/>
                    </div>
                </div>
			</div>

			<div class="form-group">
				<label class="form-label" for="name_of_airport">Name of Port/Airport <span class="required">*</span></label>
				<input class="form-input" name="name_of_airport" value="<?php echo !empty($row->name_of_port_airport)?$row->name_of_port_airport:''; ?>" id="name_of_airport" maxlength="50" type="text" required autocomplete="nope" placeholder="Enter port or airport name">			
			</div>

			<div class="form-group">
				<label class="form-label" for="maid_type">Maid Type <span class="required">*</span></label>
				<select name="maid_type" id="maid_type" class="form-select" required>
					<option value="">Select maid type</option>
					<option value="New" <?php if($row->maid_type == 'New'){ echo 'selected="selected"';} ?>>New</option>
					<option value="Transfer" <?php if($row->maid_type == 'Transfer'){ echo 'selected="selected"';} ?>>Transfer</option>
					<option value="Misc" <?php if($row->maid_type == 'Misc'){ echo 'selected="selected"';} ?>>Misc</option>
				</select>
			</div>

			<div class="form-group">
				<label class="form-label" for="off_day">Off Day <span class="required">*</span></label>
				<input class="form-input" name="off_day" value="<?php echo !empty($row->off_day)?$row->off_day:''; ?>" id="off_day" type="number" min="0" required placeholder="Enter number of off days">
			</div>

			<div class="form-group" style="grid-column: 1 / -1;">
				<label class="form-label" for="maid_passport_fr">Passport Photo</label>
                <div class="image-upload">
                    <input class="form-input passport_logo_fr" type="text" name="passport_logo_fr" readonly="readonly" value="<?php echo $row->passport_image ? esc_attr($row->passport_image) : ''; ?>" placeholder="No file chosen" />
                    <button id="passportlogo-fr" class="image-upload-btn" type="button">Choose File</button>
                    <div style="margin-top: 10px;">
                        <img src="<?php echo $row->passport_image ? esc_url($row->passport_image) : ''; ?>" id="passportlogofr" alt="Passport photo" class="image-preview" style="<?php echo $row->passport_image ? '' : 'display:none;'; ?>"/>
                    </div>
                </div>
			</div>
			</div><!-- End of form-grid -->
			</div><!-- End of section-content -->

			
			
		</div>

			<div class="section-header">
				Family Details
			</div>
			<div class="section-content">
				<div class="form-grid">
					<div class="form-group">
						<label class="form-label" for="no_of_children">Number of Children</label>
						<input class="form-input" name="no_of_children" value="<?php echo !empty($row->no_of_children)?$row->no_of_children:''; ?>" id="no_of_children" type="number" min="0" max="20" step="1" placeholder="Enter number of children (0 if none)">		
					</div>

					<div class="form-group">
						<label class="form-label" for="children_age">Age(s) of Children (If Any)</label>
						<input class="form-input" name="children_age" value="<?php echo !empty($row->children_age)?$row->children_age:''; ?>" id="children_age" type="text" maxlength="100" placeholder="e.g., 5, 8, 12 (separate ages with commas)">		
					</div>

					<div class="form-group">
						<label class="form-label" for="no_of_siblings">Number of Siblings</label>
						<input class="form-input" name="no_of_siblings" value="<?php echo !empty($row->no_of_siblings)?$row->no_of_siblings:''; ?>" id="no_of_siblings" type="number" min="0" max="20" step="1" placeholder="Enter number of siblings">		
					</div>

					<div class="form-group">
						<label class="form-label" for="my_number">Birth Order</label>
						<input class="form-input" name="my_number" value="<?php echo !empty($row->my_number)?$row->my_number:''; ?>" id="my_number" type="number" min="1" max="20" step="1" placeholder="Enter your position among siblings">		
					</div>
				</div>
			</div>

            <div class="section-header">
                Medical History & Dietary Restrictions
            </div>
            <div class="section-content">
                                    <div class="initial-fields">
                        <div class="field-row">
                            <div class="field-item">
                                <label class="form-label" for="allergies">Allergies</label>
                                <input class="form-input" name="allergies" value="<?php echo !empty($row->allergies)?$row->allergies:''; ?>" id="allergies" maxlength="50" type="text" placeholder="-">		
                            </div>

                            <div class="field-item">
                                <label class="form-label" for="disability">Physical Disabilities</label>
                                <input class="form-input" name="disability" value="<?php echo !empty($row->disability)?$row->disability:''; ?>" id="disability" maxlength="50" type="text" placeholder="-">		
                            </div>

                            <div class="field-item">
                                <label class="form-label" for="diet">Dietary Restrictions</label>
                                <input class="form-input" name="diet" value="<?php echo !empty($row->diet)?stripslashes($row->diet):''; ?>" id="diet" maxlength="50" type="text" placeholder="-">		
                            </div>
                            <div class="field-item">
                                <label class="form-label">Spectacles (Glasses)</label>
                                <div class="medical-options">
                                    <div class="medical-option">
                                        <input type="radio" name="spec" value="1" id="spec_yes" <?php if(!empty($row->spec) && (string)$row->spec==='1'){ echo 'checked'; } ?>>
                                        <label for="spec_yes">Yes</label>
                                    </div>
                                    <div class="medical-option">
                                        <input type="radio" name="spec" value="0" id="spec_no" <?php if((string)($row->spec ?? '0')==='0'){ echo 'checked'; } ?>>
                                        <label for="spec_no">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="medical-conditions">
                        <h3>Medical Conditions</h3>
                        <div class="medical-grid">
                            <div class="medical-item">
                                <label>Mental Illness</label>
                                <div class="medical-options">
                                    <div class="medical-option">
                                        <input type="radio" name="mental_illness" value="1" id="mental_illness_yes" <?php if($row->mental_illness == 1) { echo "checked"; } ?>>
                                        <label for="mental_illness_yes">Yes</label>
                                    </div>
                                    <div class="medical-option">
                                        <input type="radio" name="mental_illness" value="0" id="mental_illness_no" <?php if($row->mental_illness == 0 || is_null($row->mental_illness)) { echo "checked"; } ?>>
                                        <label for="mental_illness_no">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="medical-item">
                                <label>Epilepsy</label>
                                <div class="medical-options">
                                    <div class="medical-option">
                                        <input type="radio" name="epilepsy" value="1" id="epilepsy_yes" <?php if($row->epilepsy == 1) { echo "checked"; } ?> required>
                                        <label for="epilepsy_yes">Yes</label>
                                    </div>
                                    <div class="medical-option">
                                        <input type="radio" name="epilepsy" value="0" id="epilepsy_no" <?php if($row->epilepsy == 0 || is_null($row->epilepsy)) { echo "checked"; } ?>>
                                        <label for="epilepsy_no">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="medical-item">
                                <label>Asthma</label>
                                <div class="medical-options">
                                    <div class="medical-option">
                                        <input type="radio" name="asthma" value="1" id="asthma_yes" <?php if($row->asthma == 1) { echo "checked"; } ?> required>
                                        <label for="asthma_yes">Yes</label>
                                    </div>
                                    <div class="medical-option">
                                        <input type="radio" name="asthma" value="0" id="asthma_no" <?php if($row->asthma == 0 || is_null($row->asthma)) { echo "checked"; } ?>>
                                        <label for="asthma_no">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="medical-item">
                                <label>Diabetes</label>
                                <div class="medical-options">
                                    <div class="medical-option">
                                        <input type="radio" name="diabetas" value="1" id="diabetas_yes" <?php if($row->diabetas == 1) { echo "checked"; } ?> required>
                                        <label for="diabetas_yes">Yes</label>
                                    </div>
                                    <div class="medical-option">
                                        <input type="radio" name="diabetas" value="0" id="diabetas_no" <?php if($row->diabetas == 0 || is_null($row->diabetas)) { echo "checked"; } ?>>
                                        <label for="diabetas_no">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="medical-item">
                                <label>Hypertension</label>
                                <div class="medical-options">
                                    <div class="medical-option">
                                        <input type="radio" name="hypertension" value="1" id="hypertension_yes" <?php if($row->hypertension == 1) { echo "checked"; } ?> required>
                                        <label for="hypertension_yes">Yes</label>
                                    </div>
                                    <div class="medical-option">
                                        <input type="radio" name="hypertension" value="0" id="hypertension_no" <?php if($row->hypertension == 0 || is_null($row->hypertension)) { echo "checked"; } ?>>
                                        <label for="hypertension_no">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="medical-item">
                                <label>Tuberculosis</label>
                                <div class="medical-options">
                                    <div class="medical-option">
                                        <input type="radio" name="tuberculosis" value="1" id="tuberculosis_yes" <?php if($row->tuberculosis == 1) { echo "checked"; } ?> required>
                                        <label for="tuberculosis_yes">Yes</label>
                                    </div>
                                    <div class="medical-option">
                                        <input type="radio" name="tuberculosis" value="0" id="tuberculosis_no" <?php if($row->tuberculosis == 0 || is_null($row->tuberculosis)) { echo "checked"; } ?>>
                                        <label for="tuberculosis_no">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="medical-item">
                                <label>Heart Disease</label>
                                <div class="medical-options">
                                    <div class="medical-option">
                                        <input type="radio" name="heart_disease" value="1" id="heart_disease_yes" <?php if($row->heart_disease == 1) { echo "checked"; } ?> required>
                                        <label for="heart_disease_yes">Yes</label>
                                    </div>
                                    <div class="medical-option">
                                        <input type="radio" name="heart_disease" value="0" id="heart_disease_no" <?php if($row->heart_disease == 0 || is_null($row->heart_disease)) { echo "checked"; } ?>>
                                        <label for="heart_disease_no">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="medical-item">
                                <label>Malaria</label>
                                <div class="medical-options">
                                    <div class="medical-option">
                                        <input type="radio" name="malaria" value="1" id="malaria_yes" <?php if($row->malaria == 1) { echo "checked"; } ?> required>
                                        <label for="malaria_yes">Yes</label>
                                    </div>
                                    <div class="medical-option">
                                        <input type="radio" name="malaria" value="0" id="malaria_no" <?php if($row->malaria == 0 || is_null($row->malaria)) { echo "checked"; } ?>>
                                        <label for="malaria_no">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="medical-item">
                                <label>Operations</label>
                                <div class="medical-options">
                                    <div class="medical-option">
                                        <input type="radio" name="operation" value="1" id="operation_yes" <?php if($row->operation == 1) { echo "checked"; } ?> required>
                                        <label for="operation_yes">Yes</label>
                                    </div>
                                    <div class="medical-option">
                                        <input type="radio" name="operation" value="0" id="operation_no" <?php if($row->operation == 0 || is_null($row->operation)) { echo "checked"; } ?>>
                                        <label for="operation_no">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				
                
                <?php /*
				<div class="control-wrap" id="" >
				  <label for="children_age">Past And Existing Illnesses</label><br/>
					 <div class="illness"><input type="checkbox" name="illness[]" value="1" <?php  if(in_array(1,$illness)) { echo "checked"; } ?>>MENTAL ILLNESS</div>
					 <div class="illness"><input type="checkbox" name="illness[]" value="2" <?php  if(in_array(2,$illness)) { echo "checked"; } ?>>EPILEPSY </div>
					 <div class="illness"><input type="checkbox" name="illness[]" value="3" <?php  if(in_array(3,$illness)) { echo "checked"; } ?>>ASTHMA </div>
					 <div class="illness"><input type="checkbox" name="illness[]" value="4" <?php  if(in_array(4,$illness)) { echo "checked"; } ?>>DIABETES </div>
	                 <div class="illness"><input type="checkbox" name="illness[]" value="5" <?php  if(in_array(5,$illness)) { echo "checked"; } ?>>HYPERTENSION </div>
					 <div class="illness"><input type="checkbox" name="illness[]" value="6" <?php  if(in_array(6,$illness)) { echo "checked"; } ?>>TUBERCULOSIS </div>
					 <div class="illness"><input type="checkbox" name="illness[]" value="7" <?php  if(in_array(7,$illness)) { echo "checked"; } ?>>HEART DISEAS </div>
					 <div class="illness"><input type="checkbox" name="illness[]" value="8" <?php  if(in_array(8,$illness)) { echo "checked"; } ?>>MALARIA </div>
					 <div class="illness"><input type="checkbox" name="illness[]" value="9" <?php  if(in_array(9,$illness)) { echo "checked"; } ?>>OPERATIONS</div> 
					 <div class="illness"><input type="checkbox" name="illness[]" 
					 	id= "other_ill"value="10" <?php  if(in_array(10,$illness)) { echo "checked"; } ?>>OTHERS </div>
				</div> */?>

				<?php 
				$food = explode(',',$row->food_preferences);
				?>


                    <div class="bottom-section">
                        <div class="bottom-row">
                            <div class="food-preferences">
                                <label class="form-label">Food Handling Preferences</label>
                                <div class="checkbox-group">
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="no_pork" name="food_preferences[]" value="1" <?php if(in_array(1,$food)) { echo "checked"; } ?>>
                                        <label for="no_pork">NO PORK</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="no_beef" name="food_preferences[]" value="2" <?php if(in_array(2,$food)) { echo "checked"; } ?>>
                                        <label for="no_beef">NO BEEF</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="others_food" name="food_preferences[]" value="3" <?php if(in_array(3,$food)) { echo "checked"; } ?>>
                                        <label for="others_food">OTHERS</label>
                                    </div>
                                </div>
                                <div class="other-food-input" style="margin-top: 10px; <?php echo !in_array(3,$food) ? 'display:none;' : ''; ?>" id="other_food_input">
                                    <label class="form-label">Other Food Preferences</label>
                                    <input type="text" class="form-input" name="other_food" value="<?php echo !empty($row->other_food)?$row->other_food:''; ?>" placeholder="Specify other food preferences">
                                </div>
                            </div>
                            <div class="other-illness">
                                <label class="form-label">Other Illness</label>
                                <input type="text" class="form-input" name="other_illness" value="<?php echo !empty($row->other_illness)?$row->other_illness:''; ?>" placeholder="-">
                            </div>
                        </div>
                    </div>
                
                <?php /* if(in_array(10,$illness)) { ?>
				<div class="control-wrap second_sec" id="other_illnesses" style="float:right;">
					<label for="other_illness">Other Illness</label>
					<input class="maid-text" name="other_illness" value="<?php echo !empty($row->other_illness)?$row->other_illness:''; ?>" id="other_illness" maxlength="50" type="text">		
				</div>
				<?php } else { ?>
				<div class="control-wrap second_sec" id="other_illnesses" style="float:right;display:none;">
					<label for="other_illness">Other Illness</label>
					<input class="maid-text" name="other_illness" value="<?php echo !empty($row->other_illness)?$row->other_illness:''; ?>" id="other_illness" maxlength="50" type="text">		
				</div>

				                <?php } */ ?>


			</div>

            <div class="section-header">
                Other Details
            </div>
            <div class="section-content">
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label" for="rest_day">Preference for Rest Day (Number of Rest Day(s) Per Month)</label>
                        <input class="form-input" name="rest_day" value="<?php echo !empty($row->rest_day)?$row->rest_day:''; ?>" id="rest_day" maxlength="50" type="text" placeholder="Enter rest day preference">		
                    </div>


                    <div class="form-group" style="grid-column: 1 / -1;">
                        <label class="form-label" for="other_remark">Other Remarks</label>	
                        <textarea class="form-textarea" rows="4" name="other_remark" id="other_remark" placeholder="Enter any additional remarks"><?php echo !empty($row->other_remark)?$row->other_remark:''; ?></textarea>		
                    </div>
                </div>
            </div>

			</div>
            <div class="section-header work-experience-section">
                Work Experience
            </div>
            <div class="section-content work-experience-section">
                <div id="work_experience_container">
                    <?php 
                    $experience_row = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."maid_experience WHERE maid_id = $maidid");
                    foreach ($experience_row as $experience) { ?>
                    <div class="employment-record">
                        <div class="form-grid">
                            <input type="hidden" name="exp_id[]" value="<?php echo (int)$experience->id; ?>">
                            <div class="form-group">
                                <label class="form-label" for="time_duration">Time Duration</label>
                                <input class="form-input" name="time_duration[]" value="<?php echo !empty($experience->time_duration)?$experience->time_duration:''; ?>" id="time_duration" type="text" placeholder="Enter time duration">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="employer_name">Name of Employer</label>
                                <input class="form-input" name="exp_employer_name[]" value="<?php echo !empty($experience->employer_name)?$experience->employer_name:''; ?>" id="exp_employer_name" type="text" placeholder="Enter employer name">
                            </div>

                            <div class="form-group" style="grid-column: 1 / -1;">
                                <label class="form-label" for="e_address">Address</label>
                                <textarea class="form-textarea" name="e_address[]" id="e_address" rows="3" placeholder="Enter address"><?php echo !empty($experience->e_address)?$experience->e_address:''; ?></textarea>
                            </div>

                            <div class="form-group" style="grid-column: 1 / -1;">
                                <label class="form-label" for="main_duties">Main Duties</label>
                                <textarea class="form-textarea" name="main_duties[]" id="main_duties" rows="3" placeholder="Describe main duties"><?php echo !empty($experience->main_duties)?$experience->main_duties:''; ?></textarea>
                            </div>
                        </div>
                        <button type="button" class="remove-record-btn" onclick="removeWorkExperience(this)">
                            <span>×</span>
                        </button>
                    </div>
                    <?php } ?>
                </div>
                <div class="add-record-btn-container">
                    <button type="button" class="add-record-btn" onclick="add_experience()">
                        <span>+</span> Add Work Experience
                    </button>
                </div>
                <input type="hidden" name="work_experience_payload" id="work_experience_payload" value="">
            </div>


            <div class="section-header">
                Employment History Overseas
            </div>
            <div class="section-content">
                <div class="employment-history-section">
                    <div id="employment_history_container">
                        <?php 
                        $employment_table = $wpdb->prefix . 'employment_history';
                        $employment_rows = $wpdb->get_results("SELECT * FROM {$employment_table} WHERE maid_id = $maidid ORDER BY id ASC");
                        $countries = array('SINGAPORE','MALAYSIA','INDONESIA','TAIWAN','HONG KONG','MIDDLE EAST','BRUNEI','INDIA','PHILIPPINES','MYANMAR','SRI LANKA','BANGLADESH','OTHERS');
                        if(!empty($employment_rows)){
                            foreach($employment_rows as $emp){ ?>
                                <div class="employment-record">
                                    <div class="form-grid">
                                        <div class="form-group">
                                            <label class="form-label" for="from_date">From Date</label>
                                            <input class="form-input emp-from" name="from_date[]" value="<?php echo esc_attr($emp->from_date); ?>" type="text" placeholder="DD/MM/YYYY">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="to_date">To Date</label>
                                            <input class="form-input emp-to" name="to_date[]" value="<?php echo esc_attr($emp->to_date); ?>" type="text" placeholder="DD/MM/YYYY">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="country">Country</label>
                                            <select class="form-select emp-country" name="country[]">
                                                <option value="">Select country</option>
                                                <?php foreach($countries as $c){ $sel = (strtoupper($emp->country) === $c) ? 'selected="selected"' : ''; ?>
                                                    <option value="<?php echo esc_attr($c); ?>" <?php echo $sel; ?>><?php echo esc_html($c); ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group" style="grid-column: 1 / -1;">
                                            <label class="form-label" for="employer">Employer</label>
                                            <input class="form-input" name="employer[]" value="<?php echo esc_attr($emp->employer); ?>" type="text" placeholder="Enter employer name">
                                        </div>
                                        <div class="form-group" style="grid-column: 1 / -1;">
                                            <label class="form-label" for="work_duties">Work Duties</label>
                                            <textarea class="form-textarea" name="work_duties[]" rows="3" placeholder="Describe work duties"><?php echo esc_textarea($emp->work_duties); ?></textarea>
                                        </div>
                                        <div class="form-group" style="grid-column: 1 / -1;">
                                            <label class="form-label" for="remark_emp">Remark</label>
                                            <textarea class="form-textarea" name="remark_emp[]" rows="2" placeholder="Remark (optional)"><?php echo esc_textarea($emp->remark); ?></textarea>
                                        </div>
                                    </div>
                                    <button type="button" class="remove-record-btn" onclick="removeEmploymentHistory(this)">
                                        <span>×</span>
                                    </button>
                                </div>
                            <?php }
                        } else { ?>
                            <div class="employment-record">
                                <div class="form-grid">
                                    <div class="form-group">
                                        <label class="form-label" for="from_date">From Date</label>
                                        <input class="form-input emp-from" name="from_date[]" value="" type="text" placeholder="DD/MM/YYYY">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="to_date">To Date</label>
                                        <input class="form-input emp-to" name="to_date[]" value="" type="text" placeholder="DD/MM/YYYY">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="country">Country</label>
                                        <select class="form-select emp-country" name="country[]">
                                            <option value="">Select country</option>
                                            <?php foreach($countries as $c){ ?>
                                                <option value="<?php echo esc_attr($c); ?>"><?php echo esc_html($c); ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group" style="grid-column: 1 / -1;">
                                        <label class="form-label" for="employer">Employer</label>
                                        <input class="form-input" name="employer[]" value="" type="text" placeholder="Enter employer name">
                                    </div>
                                    <div class="form-group" style="grid-column: 1 / -1;">
                                        <label class="form-label" for="work_duties">Work Duties</label>
                                        <textarea class="form-textarea" name="work_duties[]" rows="3" placeholder="Describe work duties"></textarea>
                                    </div>
                                    <div class="form-group" style="grid-column: 1 / -1;">
                                        <label class="form-label" for="remark_emp">Remark</label>
                                        <textarea class="form-textarea" name="remark_emp[]" rows="2" placeholder="Remark (optional)"></textarea>
                                    </div>
                                </div>
                                <button type="button" class="remove-record-btn" onclick="removeEmploymentHistory(this)">
                                    <span>×</span>
                                </button>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="add-record-btn-container">
                        <button type="button" class="add-record-btn" onclick="add_employment_history()">
                            <span>+</span> Add Employment
                        </button>
                    </div>
                    <input type="hidden" name="employment_history_payload" id="employment_history_payload" value="">
                </div>
            </div>
<!-- 
            <div class="section-header">
                Language Proficiency
            </div>
            <div class="section-content">
                <table class="language-table">
                    <thead>
                        <tr>
                            <th>Language</th>
                            <th>Spoken</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mandarin</td>
                            <td>
                                <?php 
                                $mandarin_row = $wpdb->get_row( "SELECT * FROM wp_maid_language_profiency WHERE maid_id = $maidid AND language = 'mandarin'" ); ?>
                                <select class="language-select" name="language[mandarin][]" id="mandarin_spocken">
                                    <option value="">Select proficiency</option>
                                    <option value="Poor" <?php if(!empty($mandarin_row) && $mandarin_row->spoken == 'Poor'){ echo 'selected="selected"';} ?>>Poor</option>
                                    <option value="Fair" <?php if(!empty($mandarin_row) && $mandarin_row->spoken == 'Fair'){ echo 'selected="selected"';} ?>>Fair</option>
                                    <option value="Good" <?php if(!empty($mandarin_row) && $mandarin_row->spoken == 'Good'){ echo 'selected="selected"';} ?>>Good</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>English</td>
                            <td>
                                <?php 
                                $english_row = $wpdb->get_row( "SELECT * FROM wp_maid_language_profiency WHERE maid_id = $maidid AND language = 'english'" ); ?>
                                <select class="language-select" name="language[english][]" id="english_spocken">
                                    <option value="">Select proficiency</option>
                                    <option value="Poor" <?php if(!empty($english_row) && $english_row->spoken == 'Poor'){ echo 'selected="selected"';} ?>>Poor</option>
                                    <option value="Fair" <?php if(!empty($english_row) && $english_row->spoken == 'Fair'){ echo 'selected="selected"';} ?>>Fair</option>
                                    <option value="Good" <?php if(!empty($english_row) && $english_row->spoken == 'Good'){ echo 'selected="selected"';} ?>>Good</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Malay</td>
                            <td>
                                <?php 
                                $malay_row = $wpdb->get_row( "SELECT * FROM wp_maid_language_profiency WHERE maid_id = $maidid AND language = 'Indonesian/Malay'" ); ?>
                                <select class="language-select" name="language[Indonesian/Malay][]" id="malay_spocken">
                                    <option value="">Select proficiency</option>
                                    <option value="Poor" <?php if(!empty($malay_row) && $malay_row->spoken == 'Poor'){ echo 'selected="selected"';} ?>>Poor</option>
                                    <option value="Fair" <?php if(!empty($malay_row) && $malay_row->spoken == 'Fair'){ echo 'selected="selected"';} ?>>Fair</option>
                                    <option value="Good" <?php if(!empty($malay_row) && $malay_row->spoken == 'Good'){ echo 'selected="selected"';} ?>>Good</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Cantonese</td>
                            <td>
                                <?php 
                                $cantonese_row = $wpdb->get_row( "SELECT * FROM wp_maid_language_profiency WHERE maid_id = $maidid AND language = 'cantonese'" ); ?>
                                <select class="language-select" name="language[cantonese][]" id="cantonese_spocken">
                                    <option value="">Select proficiency</option>
                                    <option value="Poor" <?php if(!empty($cantonese_row) && $cantonese_row->spoken == 'Poor'){ echo 'selected="selected"';} ?>>Poor</option>
                                    <option value="Fair" <?php if(!empty($cantonese_row) && $cantonese_row->spoken == 'Fair'){ echo 'selected="selected"';} ?>>Fair</option>
                                    <option value="Good" <?php if(!empty($cantonese_row) && $cantonese_row->spoken == 'Good'){ echo 'selected="selected"';} ?>>Good</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Arabic</td>
                            <td>
                                <?php 
                                $arabic_row = $wpdb->get_row( "SELECT * FROM wp_maid_language_profiency WHERE maid_id = $maidid AND language = 'arabic'" ); ?>
                                <select class="language-select" name="language[arabic][]" id="arabic_spocken">
                                    <option value="">Select proficiency</option>
                                    <option value="Poor" <?php if(!empty($arabic_row) && $arabic_row->spoken == 'Poor'){ echo 'selected="selected"';} ?>>Poor</option>
                                    <option value="Fair" <?php if(!empty($arabic_row) && $arabic_row->spoken == 'Fair'){ echo 'selected="selected"';} ?>>Fair</option>
                                    <option value="Good" <?php if(!empty($arabic_row) && $arabic_row->spoken == 'Good'){ echo 'selected="selected"';} ?>>Good</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> -->
            <div class="section-header work-areas-section">
                Work Areas
            </div>
            <div class="section-content work-areas-section">
                <table class="work-areas-table">
                    <thead>
                        <tr>
                            <th>Task</th>
                            <th>Willing</th>
                            <th>Experience</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $work_area_tbl = $wpdb->prefix . "work_areas_master";
                        $query = "SELECT * FROM `$work_area_tbl` AS wa ORDER BY `id`";
                        $areas = $wpdb->get_results($query);

                        if(!empty($areas)){
                            foreach($areas as $area){ ?>
                            <tr>
                                <td class="task-name"><?php echo $area->lable; ?></td>
                                <td>
                                    <?php 
                                    $work_row = $wpdb->get_row( "SELECT * FROM wp_maid_work_areas WHERE maid_id = $maidid AND work_area_id = $area->id" ); ?>
                                    <select class="work-select" name="work_area[<?= $area->id; ?>][]" id="work_area_willing_<?= $area->id; ?>">
                                        <option value="">Select option</option>
                                        <option value="Yes" <?php if(!empty($work_row) && $work_row->willing == 'Yes'){ echo 'selected="selected"';} ?>>Yes</option>
                                        <option value="No" <?php if(!empty($work_row) && $work_row->willing == 'No'){ echo 'selected="selected"';} ?>>No</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="work-select" name="work_area[<?= $area->id; ?>][]" id="work_area_exp_<?= $area->id; ?>">
                                        <option value="">Select level</option>
                                        <option value="Poor" <?php if(!empty($work_row) && $work_row->experience == 'Poor'){ echo 'selected="selected"';} ?>>Poor</option>
                                        <option value="Fair" <?php if(!empty($work_row) && $work_row->experience == 'Fair'){ echo 'selected="selected"';} ?>>Fair</option>
                                        <option value="Good" <?php if(!empty($work_row) && $work_row->experience == 'Good'){ echo 'selected="selected"';} ?>>Good</option>
                                        <option value="Very Good" <?php if(!empty($work_row) && $work_row->experience == 'Very Good'){ echo 'selected="selected"';} ?>>Very Good</option>
                                        <option value="N.A" <?php if(!empty($work_row) && $work_row->experience == 'N.A'){ echo 'selected="selected"';} ?>>N.A</option>
                                    </select>
                                </td>
                            </tr>
                            <?php unset($work_row);
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="section-header">
                                    MDW Skills (Based On MDW's Declaration)
            </div>
            <div class="section-content">
                <div class="fdw-skills-container">
                    <div class="fdw-declaration">
                        <input type="checkbox" name="fdw_declare" value="1" <?php if($row->fdw_declare == 1) { echo 'checked'; } ?>>
                        <span>Based on MDW's Declaration, No Evaluation/Observation by Singapore EA or Overseas Training Centre/EA</span>
                    </div>

                    <?php 
                    $fdw_interview = explode(',',$row->fdw_interview);
                    ?>

                    <div class="fdw-interview">
                        <div class="fdw-interview-title">Training Centre Singapore EA</div>
                        <div class="fdw-interview-options">
                            <div class="fdw-interview-option">
                                <input type="checkbox" name="fdw_interview[]" value="1" <?php if(in_array(1,$fdw_interview)) { echo 'checked'; } ?>>
                                <span>Interviewed via Telephone/Teleconference</span>
                            </div>
                            <div class="fdw-interview-option">
                                <input type="checkbox" name="fdw_interview[]" value="2" <?php if(in_array(2,$fdw_interview)) { echo 'checked'; } ?>>
                                <span>Interviewed via Videoconference</span>
                            </div>
                            <div class="fdw-interview-option">
                                <input type="checkbox" name="fdw_interview[]" value="3" <?php if(in_array(3,$fdw_interview)) { echo 'checked'; } ?>>
                                <span>Interviewed in Person</span>
                            </div>
                            <div class="fdw-interview-option">
                                <input type="checkbox" name="fdw_interview[]" value="4" <?php if(in_array(4,$fdw_interview)) { echo 'checked'; } ?>>
                                <span>Interviewed in Person and Also Made Observation of MDW in the Areas of Work Listed in Table</span>
                            </div>
                        </div>
                    </div>

                    <?php 
                    $work_area_tbl = $wpdb->prefix . "maid_skill_master";
                    $query = "SELECT * FROM `$work_area_tbl` ORDER BY `id`";
                    $areas = $wpdb->get_results($query);
                    $count = $wpdb->num_rows;
                    ?>
                    <input type="hidden" name="skill_count" value="<?php echo $count; ?>" id="skill_count">
                    
                    <?php 
                    if(!empty($areas)){
                        foreach($areas as $area){ 
                            $work_row = $wpdb->get_row("SELECT * FROM wp_maid_skills WHERE maid_id = $maidid AND skill_id = $area->id");
                    ?>
                    <div class="fdw-skill-card">
                        <div class="skill-label"><?php echo $area->lable; ?></div>

                        <?php if ((int)$area->id !== 6) { ?>
                        <div class="skill-section">
                            <?php $is_other_skills = (stripos($area->lable, 'other skills') !== false); ?>
                            <?php $is_care_pets = (stripos($area->lable, 'care of pets') !== false); ?>
                            <?php if (!$is_other_skills && !$is_care_pets) { ?>
                            <div class="skill-field">
                                <label class="skill-field-label">Willingness</label>
                                <div class="skill-radio-group">
                                    <div class="skill-radio-option">
                                        <input type="radio" value="Yes" name="willingness_<?= $area->id; ?>" id="willingness_yes_<?= $area->id; ?>" <?php echo (!empty($work_row) && $work_row->willing == 'Yes') ? "checked" : ""; ?>>
                                        <label for="willingness_yes_<?= $area->id; ?>">Yes</label>
                                    </div>
                                    <div class="skill-radio-option">
                                        <input type="radio" value="No" name="willingness_<?= $area->id; ?>" id="willingness_no_<?= $area->id; ?>" <?php echo (empty($work_row) || $work_row->willing == 'No' || is_null($work_row->willing)) ? "checked" : ""; ?>>
                                        <label for="willingness_no_<?= $area->id; ?>">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="skill-field">
                                <label class="skill-field-label">Experience</label>
                                <div class="skill-radio-group">
                                    <div class="skill-radio-option">
                                        <input type="radio" value="Yes" name="experience_<?= $area->id; ?>" id="experience_yes_<?= $area->id; ?>" <?php echo (!empty($work_row) && $work_row->experience == 'Yes') ? "checked" : ""; ?>>
                                        <label for="experience_yes_<?= $area->id; ?>">Yes</label>
                                    </div>
                                    <div class="skill-radio-option">
                                        <input type="radio" value="No" name="experience_<?= $area->id; ?>" id="experience_no_<?= $area->id; ?>" <?php echo (empty($work_row) || $work_row->experience == 'No' || is_null($work_row->experience)) ? "checked" : ""; ?>>
                                        <label for="experience_no_<?= $area->id; ?>">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="skill-field">
                                <label class="skill-field-label">Assessment</label>
                                <select class="skill-select" name="skill_area_<?= $area->id; ?>" id="skill_area_<?= $area->id; ?>">
                                    <option value="N.A" <?php if(!empty($work_row) && $work_row->assessment == 'N.A'){ echo 'selected="selected"';} ?>>N.A</option>
                                    <option value="Poor" <?php if(!empty($work_row) && $work_row->assessment == 'Poor'){ echo 'selected="selected"';} ?>>Poor</option>
                                    <option value="Fair" <?php if(!empty($work_row) && $work_row->assessment == 'Fair'){ echo 'selected="selected"';} ?>>Fair</option>
                                    <option value="Good" <?php if(!empty($work_row) && $work_row->assessment == 'Good'){ echo 'selected="selected"';} ?>>Good</option>
                                    <option value="Very Good" <?php if(!empty($work_row) && $work_row->assessment == 'Very Good'){ echo 'selected="selected"';} ?>>Very Good</option>
                                    <option value="Excellent" <?php if(!empty($work_row) && $work_row->assessment == 'Excellent'){ echo 'selected="selected"';} ?>>Excellent</option>
                                </select>
                            </div>

                            <?php if(!empty($work_row) && $work_row->experience == 'Yes'){ ?>
                            <div class="skill-field" id="exp_year_<?= $area->id; ?>">
                                <label class="skill-field-label">Experience Year</label>
                                <input class="skill-input" type="text" name="expe_year_<?= $area->id; ?>" value="<?php if(!empty($work_row->exp_year)){ echo $work_row->exp_year;} ?>" id="expe_year_<?= $area->id; ?>" maxlength="50" placeholder="Enter years of experience">
                            </div>

                            <?php } else { ?>
                            <div class="skill-field" id="exp_year_<?= $area->id; ?>" style="display:none;">
                                <label class="skill-field-label">Experience Year</label>
                                <input class="skill-input" type="text" name="expe_year_<?= $area->id; ?>" value="" id="expe_year_<?= $area->id; ?>" maxlength="50" placeholder="Enter years of experience">
                            </div>
                            <?php } ?>
                            <?php } ?>

                            <?php 
                            if ($is_other_skills) {
                                $other_json_raw = !empty($work_row->other) ? $work_row->other : '';
                                $other_checked = array();
                                $other_text_val = '';
                                $preset_options = array(
                                    'tube_feeding' => 'TUBE FEEDING',
                                    'insulin_injection' => 'INSULIN INJECTION',
                                    'autistic' => 'AUTISTIC',
                                    'stroke_patient' => 'STROKE PATIENT',
                                    'dementia' => 'DEMENTIA',
                                    'bedridden' => 'BEDRIDDEN',
                                    'sewing' => 'SEWING',
                                    'wheelchair' => 'WHEELCHAIR',
                                    'mental_disability' => 'MENTAL DISABILITY',
                                    'other' => 'OTHER SPECIAL NEEDS'
                                );
                                $decoded_other = json_decode($other_json_raw, true);
                                if (json_last_error() === JSON_ERROR_NONE && is_array($decoded_other)) {
                                    if (isset($decoded_other['other_skills']) && is_array($decoded_other['other_skills'])) {
                                        $other_checked = $decoded_other['other_skills'];
                                    }
                                    if (isset($decoded_other['other_text'])) {
                                        $other_text_val = (string)$decoded_other['other_text'];
                                    }
                                }
                            ?>
                            <div class="skill-field" style="grid-column: 1 / -1;">
                                <label class="skill-field-label">Other Skills (select all that apply)</label>
                                <input type="hidden" name="other_<?= $area->id; ?>" id="other_skills_json_<?= $area->id; ?>" value='<?php echo esc_attr($other_json_raw); ?>'>
                                <div id="other_skills_container_<?= $area->id; ?>" class="other-skills-grid" style="display:grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap:10px;">
                                    <?php foreach ($preset_options as $okey => $olabel): $is_checked = !empty($other_checked[$okey]); ?>
                                    <label class="checkbox-item" style="display:flex; align-items:center; gap:8px;">
                                        <input type="checkbox" class="other-skill-checkbox" data-key="<?php echo esc_attr($okey); ?>" <?php echo $is_checked ? 'checked' : ''; ?>>
                                        <span><?php echo esc_html($olabel); ?></span>
                                    </label>
                                    <?php endforeach; ?>
                                </div>
                                <div id="other_special_needs_wrap_<?= $area->id; ?>" style="margin-top:10px; <?php echo !empty($other_checked['other']) ? '' : 'display:none;'; ?>">
                                    <label class="skill-field-label" for="other_special_needs_input_<?= $area->id; ?>">Please specify</label>
                                    <input class="skill-input" type="text" id="other_special_needs_input_<?= $area->id; ?>" maxlength="100" value="<?php echo esc_attr($other_text_val); ?>" placeholder="Enter other special needs">
                                </div>
                            </div>
                            <script type="text/javascript">
                            (function($){
                                $(function(){
                                    var areaId = <?= (int)$area->id; ?>;
                                    var $container = $('#other_skills_container_' + areaId);
                                    var $hidden = $('#other_skills_json_' + areaId);
                                    var $otherWrap = $('#other_special_needs_wrap_' + areaId);
                                    var $otherInput = $('#other_special_needs_input_' + areaId);
                                    $container.on('change', '.other-skill-checkbox', function(){
                                        var key = $(this).data('key');
                                        if (key === 'other') {
                                            $otherWrap.toggle(this.checked);
                                        }
                                    });
                                    $('form').on('submit', function(){
                                        var data = { other_skills: {}, other_text: '' };
                                        $container.find('.other-skill-checkbox').each(function(){
                                            var key = $(this).data('key');
                                            data.other_skills[key] = $(this).is(':checked');
                                        });
                                        data.other_text = $.trim($otherInput.val() || '');
                                        $hidden.val(JSON.stringify(data));
                                    });
                                });
                            })(jQuery);
                            </script>
                            <?php } elseif ($is_care_pets) { ?>
                            <?php
                                $care_json_raw = !empty($work_row->other) ? $work_row->other : '';
                                $dog_checked = false; $cat_checked = false;
                                $decoded_care = json_decode($care_json_raw, true);
                                if (json_last_error() === JSON_ERROR_NONE && is_array($decoded_care)) {
                                    $flags = isset($decoded_care['care_pets']) && is_array($decoded_care['care_pets']) ? $decoded_care['care_pets'] : array();
                                    $dog_checked = !empty($flags['dog']);
                                    $cat_checked = !empty($flags['cat']);
                                }
                            ?>
                            <div class="skill-field" style="grid-column: 1 / -1;">
                                <label class="skill-field-label">Care of Pets</label>
                                <input type="hidden" name="other_<?= $area->id; ?>" id="care_pets_json_<?= $area->id; ?>" value='<?php echo esc_attr($care_json_raw); ?>'>
                                <div id="care_pets_container_<?= $area->id; ?>" class="other-skills-grid" style="display:grid; grid-template-columns: repeat(2, minmax(160px, 1fr)); gap:10px;">
                                    <label class="checkbox-item" style="display:flex; align-items:center; gap:8px;">
                                        <input type="checkbox" class="care-pet-checkbox" data-key="dog" <?php echo $dog_checked ? 'checked' : ''; ?>>
                                        <span>Dog</span>
                                    </label>
                                    <label class="checkbox-item" style="display:flex; align-items:center; gap:8px;">
                                        <input type="checkbox" class="care-pet-checkbox" data-key="cat" <?php echo $cat_checked ? 'checked' : ''; ?>>
                                        <span>Cat</span>
                                    </label>
                                </div>
                            </div>
                            <script type="text/javascript">
                            (function($){
                                $(function(){
                                    var areaId = <?= (int)$area->id; ?>;
                                    var $container = $('#care_pets_container_' + areaId);
                                    var $hidden = $('#care_pets_json_' + areaId);
                                    $('form').on('submit', function(){
                                        var data = { care_pets: {} };
                                        $container.find('.care-pet-checkbox').each(function(){
                                            var key = $(this).data('key');
                                            data.care_pets[key] = $(this).is(':checked');
                                        });
                                        $hidden.val(JSON.stringify(data));
                                    });
                                });
                            })(jQuery);
                            </script>
                            <?php } else { ?>
                            <div class="skill-field">
                                <label class="skill-field-label">Other Details</label>
                                <input class="skill-input" type="text" name="other_<?= $area->id; ?>" value="<?php if(!empty($work_row->other)){ echo $work_row->other;} ?>" id="other_<?= $area->id; ?>" maxlength="50" placeholder="Enter other details">
                            </div>
                            <?php } ?>
                        </div>
                        <?php } else { ?>
                        <?php 
                        // Prepare existing languages from JSON in `other`
                        $existing_languages = array();
                        if (!empty($work_row) && !empty($work_row->other)) {
                            $decoded_other = json_decode($work_row->other, true);
                            if (json_last_error() === JSON_ERROR_NONE && is_array($decoded_other) && isset($decoded_other['languages']) && is_array($decoded_other['languages'])) {
                                $existing_languages = $decoded_other['languages'];
                            }
                        }
                        // Load language options dynamically from maid_language_profiency or fallback list
                        $language_options = $wpdb->get_col("SELECT DISTINCT language FROM {$wpdb->prefix}maid_language_profiency ORDER BY language");
                        if (empty($language_options)) {
                            $language_options = array('English','Mandarin','Indonesian/Malay','Cantonese','Arabic','Hindi','Tamil','Burmese','Tagalog','Thai');
                        }
                        ?>
                        <div class="skill-section">
                            <div class="skill-field" style="grid-column: 1 / -1;">
                                <label class="skill-field-label">Language Abilities</label>
                                <input type="hidden" name="other_<?= $area->id; ?>" id="lang_json_<?= $area->id; ?>" value='<?php echo !empty($work_row->other) ? esc_attr($work_row->other) : ''; ?>'>
                                <div id="language_rows_<?= $area->id; ?>" class="language-rows">
                                    <?php 
                                    if (!empty($existing_languages)) { 
                                        foreach ($existing_languages as $idx => $lang) { 
                                            $lang_name = isset($lang['name']) ? $lang['name'] : '';
                                            $has_lang = isset($lang['has_language']) ? $lang['has_language'] : '';
                                            $skill_lvl = isset($lang['skill']) ? $lang['skill'] : '';
                                    ?>
                                    <div class="language-row" data-index="<?php echo (int)$idx; ?>" style="display:grid; grid-template-columns: 2fr 1fr auto; gap:8px; margin-bottom:8px; align-items:center;">
                                        <div>
                                            <input type="text" list="language_options_<?= $area->id; ?>" class="skill-input language-name" placeholder="Language name" value="<?php echo esc_attr($lang_name); ?>" autocomplete="off">
                                        </div>
                                        <div>
                                            <select class="skill-select skill-level">
                                                <option value="">Select level</option>
                                                <option value="Poor" <?php echo ($skill_lvl === 'Poor') ? 'selected' : ''; ?>>Poor</option>
                                                <option value="Fair" <?php echo ($skill_lvl === 'Fair') ? 'selected' : ''; ?>>Fair</option>
                                                <option value="Good" <?php echo ($skill_lvl === 'Good') ? 'selected' : ''; ?>>Good</option>
                                            </select>
                                        </div>
                                        <button type="button" class="button remove-language-row" style="padding:6px 10px;">Remove</button>
                                    </div>
                                    <?php 
                                        } 
                                    } else { 
                                    ?>
                                    <div class="language-row" data-index="0" style="display:grid; grid-template-columns: 2fr 1fr auto; gap:8px; margin-bottom:8px; align-items:center;">
                                        <div>
                                            <input type="text" list="language_options_<?= $area->id; ?>" class="skill-input language-name" placeholder="Language name" autocomplete="off">
                                        </div>
                                        <div>
                                            <select class="skill-select skill-level">
                                                <option value="">Select level</option>
                                                <option value="Poor">Poor</option>
                                                <option value="Fair">Fair</option>
                                                <option value="Good">Good</option>
                                            </select>
                                        </div>
                                        <button type="button" class="button remove-language-row" style="padding:6px 10px;">Remove</button>
                                    </div>
                                    <?php } ?>
                                </div>
                                <datalist id="language_options_<?= $area->id; ?>">
                                    <?php foreach ($language_options as $opt) { ?>
                                        <option value="<?php echo esc_attr($opt); ?>"></option>
                                    <?php } ?>
                                </datalist>
                                <button type="button" class="button" id="add_language_btn_<?= $area->id; ?>" style="margin-top:8px;">Add Language</button>
                            </div>
                        </div>

                        <script type="text/javascript">
                        (function($){
                            $(function(){
                                var areaId = <?= (int)$area->id; ?>;
                                var $rowsWrap = $('#language_rows_' + areaId);
                                var $hidden = $('#lang_json_' + areaId);

                                function serializeRows(){
                                    var data = { languages: [] };
                                    $rowsWrap.find('.language-row').each(function(){
                                        var $row = $(this);
                                        var name = $.trim($row.find('.language-name').val() || '');
                                        var skill = $row.find('.skill-level').val() || '';
                                        if(name !== '' || skill !== ''){
                                            data.languages.push({ name: name, skill: skill });
                                        }
                                    });
                                    $hidden.val(JSON.stringify(data));
                                }

                                $('#add_language_btn_' + areaId).on('click', function(){
                                    var idx = $rowsWrap.find('.language-row').length;
                                    var rowHtml = ''+
                                        '<div class="language-row" data-index="'+idx+'" style="display:grid; grid-template-columns: 2fr 1fr auto; gap:8px; margin-bottom:8px; align-items:center;">'+
                                            '<div><input type="text" list="language_options_'+areaId+'" class="skill-input language-name" placeholder="Language name" autocomplete="off"></div>'+
                                            '<div><select class="skill-select skill-level">'+
                                                '<option value="">Select level</option>'+
                                                '<option value="Poor">Poor</option>'+
                                                '<option value="Fair">Fair</option>'+
                                                '<option value="Good">Good</option>'+
                                            '</select></div>'+
                                            '<button type="button" class="button remove-language-row" style="padding:6px 10px;">Remove</button>'+
                                        '</div>';
                                    $rowsWrap.append(rowHtml);
                                });

                                $rowsWrap.on('click', '.remove-language-row', function(){
                                    $(this).closest('.language-row').remove();
                                });

                                $('form').on('submit', function(e){
                                    var isValid = true;
                                    $rowsWrap.find('.language-row').each(function(){
                                        var $row = $(this);
                                        var name = $.trim($row.find('.language-name').val() || '');
                                        var $skillSel = $row.find('.skill-level');
                                        var skill = $skillSel.val() || '';
                                        if(name !== '' && skill === ''){
                                            isValid = false;
                                            $skillSel.css('border', '1px solid #dc2626');
                                        } else {
                                            $skillSel.css('border', '');
                                        }
                                    });
                                    if(!isValid){
                                        e.preventDefault();
                                        alert('Please select a skill level for each language entered.');
                                        return false;
                                    }
                                    serializeRows();
                                });
                            });
                        })(jQuery);
                        </script>
                        <?php } ?>
                    </div>
                    <?php 
                        }
                    }
                    ?>
                </div>
            </div>

					
	            </div>
	        </div>
        </br>

        <div style="width: 98%;" class="personalheading">
                 MDW Skills (Interviewed By Overseas Training Centre)
        </div>

            <div class="section-header">
                MDW Skills (Interviewed By Overseas Training Centre)
            </div>
            <div class="section-content">
                <div class="fdw-skills-container">
                    <div class="fdw-declaration">
                        <input type="checkbox" name="tc_declare" value="1" <?php if($row->tc_declare == 1) { echo "checked" ; } ?>>
                        <span>Interviewed by Overseas Training Centre/EA</span>
                    </div>

                    <div class="skill-section">
                        <div class="skill-field">
                            <label class="skill-field-label">Foreign Training Centre Name</label>
                            <input class="skill-input" type="text" name="training_centre" value="<?php echo !empty($row->training_centre)?$row->training_centre:''; ?>" id="training_centre" maxlength="50" placeholder="Enter training centre name">
                        </div>

                        <div class="skill-field">
                            <label class="skill-field-label">Third Party Certified No</label>
                            <input class="skill-input" type="text" name="certified_no" value="<?php echo !empty($row->certified_no)?$row->certified_no:''; ?>" id="certified_no" maxlength="50" placeholder="Enter certification number">
                        </div>
                    </div>

                    <?php 
                    $tc_intv = explode(",",$row->tc_interview);
                    ?>

                    <div class="fdw-interview">
                        <div class="fdw-interview-title">Training Centre Interview</div>
                        <div class="fdw-interview-options">
                            <div class="fdw-interview-option">
                                <input type="checkbox" name="tc_interview[]" value="1" <?php if(in_array(1,$tc_intv)) { echo "checked"; } ?>>
                                <span>Interviewed via Telephone/Teleconference</span>
                            </div>
                            <div class="fdw-interview-option">
                                <input type="checkbox" name="tc_interview[]" value="2" <?php if(in_array(2,$tc_intv)) { echo "checked"; } ?>>
                                <span>Interviewed via Videoconference</span>
                            </div>
                            <div class="fdw-interview-option">
                                <input type="checkbox" name="tc_interview[]" value="3" <?php if(in_array(3,$tc_intv)) { echo "checked"; } ?>>
                                <span>Interviewed in Person</span>
                            </div>
                            <div class="fdw-interview-option">
                                <input type="checkbox" name="tc_interview[]" value="4" <?php if(in_array(4,$tc_intv)) { echo "checked"; } ?>>
                                <span>Interviewed in Person and Also Made Observation of MDW in the Areas of Work Listed in Table</span>
                            </div>
                        </div>
                    </div>
                    <?php 
                    $work_area_tbl = $wpdb->prefix . "maid_skill_master";
                    $query = "SELECT * FROM `$work_area_tbl` ORDER BY `id`";
                    $areas = $wpdb->get_results($query);
                    $count = $wpdb->num_rows;
                    ?>
                    <input type="hidden" name="skill_count" value="<?php echo $count; ?>" id="skill_count">
                    
                    <?php 
                    if(!empty($areas)){
                        foreach($areas as $area){ 
                            $work_row = $wpdb->get_row("SELECT * FROM wp_maid_skills_otc WHERE maid_id = $maidid AND skill_id = $area->id");
                    ?>
                    <div class="fdw-skill-card">
                        <div class="skill-label"><?php echo $area->lable; ?></div>

                        <?php if ((int)$area->id !== 6) { ?>
                        <div class="skill-section">
                            <?php $is_other_skills_otc = (stripos($area->lable, 'other skills') !== false); ?>
                            <?php $is_care_pets_otc = (stripos($area->lable, 'care of pets') !== false); ?>
                            <?php if (!$is_other_skills_otc && !$is_care_pets_otc) { ?>
                            <div class="skill-field">
                                <label class="skill-field-label">Willingness</label>
                                <div class="skill-radio-group">
                                    <div class="skill-radio-option">
                                        <input type="radio" value="Yes" name="willingness_skill_<?= $area->id; ?>" id="willingness_skill_yes_<?= $area->id; ?>" <?php echo (!empty($work_row) && $work_row->willing == 'Yes') ? "checked" : ""; ?>>
                                        <label for="willingness_skill_yes_<?= $area->id; ?>">Yes</label>
                                    </div>
                                    <div class="skill-radio-option">
                                        <input type="radio" value="No" name="willingness_skill_<?= $area->id; ?>" id="willingness_skill_no_<?= $area->id; ?>" <?php echo (empty($work_row) || $work_row->willing == 'No' || is_null($work_row->willing)) ? "checked" : ""; ?>>
                                        <label for="willingness_skill_no_<?= $area->id; ?>">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="skill-field">
                                <label class="skill-field-label">Experience</label>
                                <div class="skill-radio-group">
                                    <div class="skill-radio-option">
                                        <input type="radio" value="Yes" name="experience_skill_<?= $area->id; ?>" id="experience_skill_yes_<?= $area->id; ?>" <?php echo (!empty($work_row) && $work_row->experience == 'Yes') ? "checked" : ""; ?>>
                                        <label for="experience_skill_yes_<?= $area->id; ?>">Yes</label>
                                    </div>
                                    <div class="skill-radio-option">
                                        <input type="radio" value="No" name="experience_skill_<?= $area->id; ?>" id="experience_skill_no_<?= $area->id; ?>" <?php echo (empty($work_row) || $work_row->experience == 'No' || is_null($work_row->experience)) ? "checked" : ""; ?>>
                                        <label for="experience_skill_no_<?= $area->id; ?>">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="skill-field">
                                <label class="skill-field-label">Assessment</label>
                                <select class="skill-select" name="ass_skill_<?= $area->id; ?>" id="ass_skill_<?= $area->id; ?>">
                                    <option value="N.A" <?php if(!empty($work_row) && $work_row->assessment == 'N.A'){ echo 'selected="selected"';} ?>>N.A</option>
                                    <option value="Poor" <?php if(!empty($work_row) && $work_row->assessment == 'Poor'){ echo 'selected="selected"';} ?>>Poor</option>
                                    <option value="Fair" <?php if(!empty($work_row) && $work_row->assessment == 'Fair'){ echo 'selected="selected"';} ?>>Fair</option>
                                    <option value="Good" <?php if(!empty($work_row) && $work_row->assessment == 'Good'){ echo 'selected="selected"';} ?>>Good</option>
                                    <option value="Very Good" <?php if(!empty($work_row) && $work_row->assessment == 'Very Good'){ echo 'selected="selected"';} ?>>Very Good</option>
                                    <option value="Excellent" <?php if(!empty($work_row) && $work_row->assessment == 'Excellent'){ echo 'selected="selected"';} ?>>Excellent</option>
                                </select>
                            </div>

                            <?php if(!empty($work_row) && $work_row->experience == 'Yes'){ ?>
                            <div class="skill-field" id="exp_year_skill_<?= $area->id; ?>">
                                <label class="skill-field-label">Experience Year</label>
                                <input class="skill-input" type="text" name="expe_year_skill_<?= $area->id; ?>" value="<?php if(!empty($work_row->exp_year)){ echo $work_row->exp_year;} ?>" id="expe_year_skill_<?= $area->id; ?>" maxlength="50" placeholder="Enter years of experience">
                            </div>
                            <?php } else { ?>
                            <div class="skill-field" id="exp_year_skill_<?= $area->id; ?>" style="display:none;">
                                <label class="skill-field-label">Experience Year</label>
                                <input class="skill-input" type="text" name="expe_year_skill_<?= $area->id; ?>" value="" id="expe_year_skill_<?= $area->id; ?>" maxlength="50" placeholder="Enter years of experience">
                            </div>
                            <?php } ?>
                            <?php } ?>

                            <?php 
                            if ($is_other_skills_otc) {
                                $other_json_raw_skill = !empty($work_row->other) ? $work_row->other : '';
                                $other_checked_skill = array();
                                $other_text_val_skill = '';
                                $preset_options_skill = array(
                                    'tube_feeding' => 'TUBE FEEDING',
                                    'insulin_injection' => 'INSULIN INJECTION',
                                    'autistic' => 'AUTISTIC',
                                    'stroke_patient' => 'STROKE PATIENT',
                                    'dementia' => 'DEMENTIA',
                                    'bedridden' => 'BEDRIDDEN',
                                    'sewing' => 'SEWING',
                                    'wheelchair' => 'WHEELCHAIR',
                                    'mental_disability' => 'MENTAL DISABILITY',
                                    'other' => 'OTHER SPECIAL NEEDS'
                                );
                                $decoded_other_skill = json_decode($other_json_raw_skill, true);
                                if (json_last_error() === JSON_ERROR_NONE && is_array($decoded_other_skill)) {
                                    if (isset($decoded_other_skill['other_skills']) && is_array($decoded_other_skill['other_skills'])) {
                                        $other_checked_skill = $decoded_other_skill['other_skills'];
                                    }
                                    if (isset($decoded_other_skill['other_text'])) {
                                        $other_text_val_skill = (string)$decoded_other_skill['other_text'];
                                    }
                                }
                            ?>
                            <div class="skill-field" style="grid-column: 1 / -1;">
                                <label class="skill-field-label">Other Skills (select all that apply)</label>
                                <input type="hidden" name="other_skill_<?= $area->id; ?>" id="other_skills_json_skill_<?= $area->id; ?>" value='<?php echo esc_attr($other_json_raw_skill); ?>'>
                                <div id="other_skills_container_skill_<?= $area->id; ?>" class="other-skills-grid" style="display:grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap:10px;">
                                    <?php foreach ($preset_options_skill as $okey => $olabel): $is_checked = !empty($other_checked_skill[$okey]); ?>
                                    <label class="checkbox-item" style="display:flex; align-items:center; gap:8px;">
                                        <input type="checkbox" class="other-skill-checkbox-skill" data-key="<?php echo esc_attr($okey); ?>" <?php echo $is_checked ? 'checked' : ''; ?>>
                                        <span><?php echo esc_html($olabel); ?></span>
                                    </label>
                                    <?php endforeach; ?>
                                </div>
                                <div id="other_special_needs_wrap_skill_<?= $area->id; ?>" style="margin-top:10px; <?php echo !empty($other_checked_skill['other']) ? '' : 'display:none;'; ?>">
                                    <label class="skill-field-label" for="other_special_needs_input_skill_<?= $area->id; ?>">Please specify</label>
                                    <input class="skill-input" type="text" id="other_special_needs_input_skill_<?= $area->id; ?>" maxlength="100" value="<?php echo esc_attr($other_text_val_skill); ?>" placeholder="Enter other special needs">
                                </div>
                            </div>
                            <script type="text/javascript">
                            (function($){
                                $(function(){
                                    var areaId = <?= (int)$area->id; ?>;
                                    var $container = $('#other_skills_container_skill_' + areaId);
                                    var $hidden = $('#other_skills_json_skill_' + areaId);
                                    var $otherWrap = $('#other_special_needs_wrap_skill_' + areaId);
                                    var $otherInput = $('#other_special_needs_input_skill_' + areaId);
                                    $container.on('change', '.other-skill-checkbox-skill', function(){
                                        var key = $(this).data('key');
                                        if (key === 'other') {
                                            $otherWrap.toggle(this.checked);
                                        }
                                    });
                                    $('form').on('submit', function(){
                                        var data = { other_skills: {}, other_text: '' };
                                        $container.find('.other-skill-checkbox-skill').each(function(){
                                            var key = $(this).data('key');
                                            data.other_skills[key] = $(this).is(':checked');
                                        });
                                        data.other_text = $.trim($otherInput.val() || '');
                                        $hidden.val(JSON.stringify(data));
                                    });
                                });
                            })(jQuery);
                            </script>
                            <?php } elseif ($is_care_pets_otc) { ?>
                            <?php
                                $care_json_raw_skill = !empty($work_row->other) ? $work_row->other : '';
                                $dog_checked_skill = false; $cat_checked_skill = false;
                                $decoded_care_skill = json_decode($care_json_raw_skill, true);
                                if (json_last_error() === JSON_ERROR_NONE && is_array($decoded_care_skill)) {
                                    $flags = isset($decoded_care_skill['care_pets']) && is_array($decoded_care_skill['care_pets']) ? $decoded_care_skill['care_pets'] : array();
                                    $dog_checked_skill = !empty($flags['dog']);
                                    $cat_checked_skill = !empty($flags['cat']);
                                }
                            ?>
                            <div class="skill-field" style="grid-column: 1 / -1;">
                                <label class="skill-field-label">Care of Pets</label>
                                <input type="hidden" name="other_skill_<?= $area->id; ?>" id="care_pets_json_skill_<?= $area->id; ?>" value='<?php echo esc_attr($care_json_raw_skill); ?>'>
                                <div id="care_pets_container_skill_<?= $area->id; ?>" class="other-skills-grid" style="display:grid; grid-template-columns: repeat(2, minmax(160px, 1fr)); gap:10px;">
                                    <label class="checkbox-item" style="display:flex; align-items:center; gap:8px;">
                                        <input type="checkbox" class="care-pet-checkbox-skill" data-key="dog" <?php echo $dog_checked_skill ? 'checked' : ''; ?>>
                                        <span>Dog</span>
                                    </label>
                                    <label class="checkbox-item" style="display:flex; align-items:center; gap:8px;">
                                        <input type="checkbox" class="care-pet-checkbox-skill" data-key="cat" <?php echo $cat_checked_skill ? 'checked' : ''; ?>>
                                        <span>Cat</span>
                                    </label>
                                </div>
                            </div>
                            <script type="text/javascript">
                            (function($){
                                $(function(){
                                    var areaId = <?= (int)$area->id; ?>;
                                    var $container = $('#care_pets_container_skill_' + areaId);
                                    var $hidden = $('#care_pets_json_skill_' + areaId);
                                    $('form').on('submit', function(){
                                        var data = { care_pets: {} };
                                        $container.find('.care-pet-checkbox-skill').each(function(){
                                            var key = $(this).data('key');
                                            data.care_pets[key] = $(this).is(':checked');
                                        });
                                        $hidden.val(JSON.stringify(data));
                                    });
                                });
                            })(jQuery);
                            </script>
                            <?php } else { ?>
                            <div class="skill-field">
                                <label class="skill-field-label">Other Details</label>
                                <input class="skill-input" type="text" name="other_skill_<?= $area->id; ?>" value="<?php if(!empty($work_row->other)){ echo $work_row->other;} ?>" id="other_skill_<?= $area->id; ?>" maxlength="50" placeholder="Enter other details">
                            </div>
                            <?php } ?>
                        </div>
                        <?php } else { ?>
                        <?php 
                        // Prepare existing languages from JSON in `other` (OTC)
                        $existing_languages_otc = array();
                        if (!empty($work_row) && !empty($work_row->other)) {
                            $decoded_other_otc = json_decode($work_row->other, true);
                            if (json_last_error() === JSON_ERROR_NONE && is_array($decoded_other_otc) && isset($decoded_other_otc['languages']) && is_array($decoded_other_otc['languages'])) {
                                $existing_languages_otc = $decoded_other_otc['languages'];
                            }
                        }
                        // Load language options dynamically or fallback list
                        $language_options_otc = $wpdb->get_col("SELECT DISTINCT language FROM {$wpdb->prefix}maid_language_profiency ORDER BY language");
                        if (empty($language_options_otc)) {
                            $language_options_otc = array('English','Mandarin','Indonesian/Malay','Cantonese','Arabic','Hindi','Tamil','Burmese','Tagalog','Thai');
                        }
                        ?>
                        <div class="skill-section">
                            <div class="skill-field" style="grid-column: 1 / -1;">
                                <label class="skill-field-label">Language Abilities</label>
                                <input type="hidden" name="other_skill_<?= $area->id; ?>" id="lang_json_skill_<?= $area->id; ?>" value='<?php echo !empty($work_row->other) ? esc_attr($work_row->other) : ''; ?>'>
                                <div id="language_rows_skill_<?= $area->id; ?>" class="language-rows">
                                    <?php 
                                    if (!empty($existing_languages_otc)) { 
                                        foreach ($existing_languages_otc as $idx => $lang) { 
                                            $lang_name = isset($lang['name']) ? $lang['name'] : '';
                                            $skill_lvl = isset($lang['skill']) ? $lang['skill'] : '';
                                    ?>
                                    <div class="language-row" data-index="<?php echo (int)$idx; ?>" style="display:grid; grid-template-columns: 2fr 1fr auto; gap:8px; margin-bottom:8px; align-items:center;">
                                        <div>
                                            <input type="text" list="language_options_skill_<?= $area->id; ?>" class="skill-input language-name" placeholder="Language name" value="<?php echo esc_attr($lang_name); ?>" autocomplete="off">
                                        </div>
                                        <div>
                                            <select class="skill-select skill-level">
                                                <option value="">Select level</option>
                                                <option value="Poor" <?php echo ($skill_lvl === 'Poor') ? 'selected' : ''; ?>>Poor</option>
                                                <option value="Fair" <?php echo ($skill_lvl === 'Fair') ? 'selected' : ''; ?>>Fair</option>
                                                <option value="Good" <?php echo ($skill_lvl === 'Good') ? 'selected' : ''; ?>>Good</option>
                                            </select>
                                        </div>
                                        <button type="button" class="button remove-language-row" style="padding:6px 10px;">Remove</button>
                                    </div>
                                    <?php 
                                        } 
                                    } else { 
                                    ?>
                                    <div class="language-row" data-index="0" style="display:grid; grid-template-columns: 2fr 1fr auto; gap:8px; margin-bottom:8px; align-items:center;">
                                        <div>
                                            <input type="text" list="language_options_skill_<?= $area->id; ?>" class="skill-input language-name" placeholder="Language name" autocomplete="off">
                                        </div>
                                        <div>
                                            <select class="skill-select skill-level">
                                                <option value="">Select level</option>
                                                <option value="Poor">Poor</option>
                                                <option value="Fair">Fair</option>
                                                <option value="Good">Good</option>
                                            </select>
                                        </div>
                                        <button type="button" class="button remove-language-row" style="padding:6px 10px;">Remove</button>
                                    </div>
                                    <?php } ?>
                                </div>
                                <datalist id="language_options_skill_<?= $area->id; ?>">
                                    <?php foreach ($language_options_otc as $opt) { ?>
                                        <option value="<?php echo esc_attr($opt); ?>"></option>
                                    <?php } ?>
                                </datalist>
                                <button type="button" class="button" id="add_language_btn_skill_<?= $area->id; ?>" style="margin-top:8px;">Add Language</button>
                            </div>
                        </div>

                        <script type="text/javascript">
                        (function($){
                            $(function(){
                                var areaId = <?= (int)$area->id; ?>;
                                var $rowsWrap = $('#language_rows_skill_' + areaId);
                                var $hidden = $('#lang_json_skill_' + areaId);

                                function serializeRows(){
                                    var data = { languages: [] };
                                    $rowsWrap.find('.language-row').each(function(){
                                        var $row = $(this);
                                        var name = $.trim($row.find('.language-name').val() || '');
                                        var skill = $row.find('.skill-level').val() || '';
                                        if(name !== '' || skill !== ''){
                                            data.languages.push({ name: name, skill: skill });
                                        }
                                    });
                                    $hidden.val(JSON.stringify(data));
                                }

                                $('#add_language_btn_skill_' + areaId).on('click', function(){
                                    var idx = $rowsWrap.find('.language-row').length;
                                    var rowHtml = ''+
                                        '<div class="language-row" data-index="'+idx+'" style="display:grid; grid-template-columns: 2fr 1fr auto; gap:8px; margin-bottom:8px; align-items:center;">'+
                                            '<div><input type="text" list="language_options_skill_'+areaId+'" class="skill-input language-name" placeholder="Language name" autocomplete="off"></div>'+
                                            '<div><select class="skill-select skill-level">'+
                                                '<option value="">Select level</option>'+
                                                '<option value="Poor">Poor</option>'+
                                                '<option value="Fair">Fair</option>'+
                                                '<option value="Good">Good</option>'+
                                            '</select></div>'+
                                            '<button type="button" class="button remove-language-row" style="padding:6px 10px;">Remove</button>'+
                                        '</div>';
                                    $rowsWrap.append(rowHtml);
                                });

                                $rowsWrap.on('click', '.remove-language-row', function(){
                                    $(this).closest('.language-row').remove();
                                });

                                $('form').on('submit', function(e){
                                    var isValid = true;
                                    $rowsWrap.find('.language-row').each(function(){
                                        var $row = $(this);
                                        var name = $.trim($row.find('.language-name').val() || '');
                                        var $skillSel = $row.find('.skill-level');
                                        var skill = $skillSel.val() || '';
                                        if(name !== '' && skill === ''){
                                            isValid = false;
                                            $skillSel.css('border', '1px solid #dc2626');
                                        } else {
                                            $skillSel.css('border', '');
                                        }
                                    });
                                    if(!isValid){
                                        e.preventDefault();
                                        alert('Please select a skill level for each language entered.');
                                        return false;
                                    }
                                    serializeRows();
                                });
                            });
                        })(jQuery);
                        </script>
                        <?php } ?>
                    </div>
                    <?php 
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="section-header">
                Employment History in Singapore
            </div>
            <div class="section-content">
                <div class="employment-history-section">
                    <div class="experience-toggle">
                        <label class="feedback-label">Previous Working Experience in Singapore</label>
                        <div class="experience-option">
                            <input type="checkbox" name="exp" value="1" id="exp_yes" class="exp_list" <?php if($row->pevious_work_exp == 1) {echo "checked"; } ?>>
                            <label for="exp_yes">Yes</label>
                        </div>
                        <div class="experience-option">
                            <input type="checkbox" name="exp" value="0" id="exp_no" class="exp_list" <?php if($row->pevious_work_exp == 0) { echo "checked"; } ?>>
                            <label for="exp_no">No</label>
                        </div>
                    </div>

                    <div class="section-header">
                        Feedback from Previous Employers
                    </div>
                    <div id="feedback_container">
                        <?php 
                        $maid_feedback = $wpdb->get_results("SELECT * FROM wp_maid_feedback WHERE maid_id = $maidid");
                        foreach ($maid_feedback as $feedback) { 
                        ?>
                        <div class="feedback-card">
                            <button type="button" class="remove-record-btn" onclick="removeFeedback(this)">
                                <span>×</span>
                            </button>
                            <div class="feedback-field">
                                <label class="feedback-label" for="employer_name">Name of Employer</label>
                                <input class="feedback-input" name="employer_name[]" value="<?php echo !empty($feedback->employer_name)?$feedback->employer_name:''; ?>" id="employer_name" maxlength="50" type="text" placeholder="Enter employer name" autocomplete="nope">
                            </div>
                            <div class="feedback-field">
                                <label class="feedback-label" for="feedback">Feedback</label>
                                <textarea class="feedback-textarea" name="feedback[]" id="feedback" placeholder="Enter employer feedback"><?php echo !empty($feedback->feedback)?$feedback->feedback:''; ?></textarea>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="add-record-btn-container">
                        <button type="button" class="add-feedback-btn" onclick="add_feedback()">
                            <span>+</span> Add Feedback
                        </button>
                    </div>
                    <input type="hidden" name="feedback_payload" id="feedback_payload" value="">
                </div>
            </div>

            <div class="section-header">
                Availability of MDW to Be Interviewed
            </div>
            <div class="section-content">
                <div class="availability-section">
                    <?php $fdw_availability = explode(',',$row->fdw_availability); ?>
                    <div class="availability-options">
                        <div class="availability-option">
                            <input type="checkbox" name="fdw_availability[]" value="1" id="fdw_not_available" <?php if(in_array(1,$fdw_availability)) { echo 'checked'; } ?>>
                            <label for="fdw_not_available">MDW Is Not Available for Interview</label>
                        </div>
                        <div class="availability-option">
                            <input type="checkbox" name="fdw_availability[]" value="2" id="fdw_phone" <?php if(in_array(2,$fdw_availability)) { echo 'checked'; } ?>>
                            <label for="fdw_phone">MDW Can Be Interviewed by Phone</label>
                        </div>
                        <div class="availability-option">
                            <input type="checkbox" name="fdw_availability[]" value="3" id="fdw_video" <?php if(in_array(3,$fdw_availability)) { echo 'checked'; } ?>>
                            <label for="fdw_video">MDW Can Be Interviewed by Video-conference</label>
                        </div>
                        <div class="availability-option">
                            <input type="checkbox" name="fdw_availability[]" value="4" id="fdw_person" <?php if(in_array(4,$fdw_availability)) { echo 'checked'; } ?>>
                            <label for="fdw_person">MDW Can Be Interviewed in Person</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-header">
                Declaration
            </div>
            <div class="section-content">
                <div class="declaration-section">
                    <div class="declaration-option">
                        <input type="checkbox" name="declaration" value="1" id="declaration_checkbox" <?php if(!empty($row->declaration) && $row->declaration == '1'){ echo 'checked="checked"';} ?>>
                        <label for="declaration_checkbox">I declare that all particulars given herein are true and accurate to the best of my knowledge.</label>
                    </div>
                </div>
            </div>

            <div class="section-header">
                Remarks
            </div>
            <div class="section-content">
                <div class="remarks-section">
                    <div class="remarks-field">
                        <label class="remarks-label" for="remark">Additional Remarks</label>
                        <textarea class="remarks-textarea" name="remark" id="remark" placeholder="Enter any additional remarks"><?php echo !empty($row->remark)?$row->remark:''; ?></textarea>
                    </div>
                </div>
            </div>

            <div class="submit-section">
                <input type="hidden" name="maid_csv_import_files_next" value="maidupdate">
                <button type="submit" class="submit-button" name="submit">Update</button>
            </div>
		</div>
	
	<div id="postbox-container-1" class="postbox-container">
	</div>
	</div>
	</div>
	</form>
	</div>
	</div>
	<script type="text/javascript" language="javascript" class="init">

        jQuery(function () {
        //Date picker
            jQuery('#datepicker').datepicker({
                autoclose: true,
                changeMonth: true, 
                changeYear: true,
                maxDate: "today",
                 yearRange: "-100:+00",
                dateFormat: 'dd/mm/yy'
            });

            var cnt = jQuery('#count_emp_hstry').val();
            var i;

            // Initialize datepickers for existing dynamic fields
            initEmploymentDatepickers(document);

            /*for(i=1; i <= cnt; i++) {

	            $('#from_date'+i).datepicker({
	                autoclose: true,
	                changeMonth: true, 
	                changeYear: true,
	                maxDate: "today",
	                 yearRange: "-100:+00",
	                dateFormat: 'dd/mm/yy'
	            });
				$('#to_date'+i).datepicker({
	                autoclose: true,
	                changeMonth: true, 
	                changeYear: true,
	                maxDate: "today",
	                 yearRange: "-100:+00",
	                dateFormat: 'dd/mm/yy'
	            });
           }*/
        });

        jQuery(document).ready(function(){

	    	
            jQuery('.exp_list').on('change', function() {
		       jQuery('.exp_list').not(this).prop('checked', false);  
		    });

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

	    	jQuery('input[name^="experience"]').on('click', function() {	

                var name1 = this.name;
                var exp = jQuery(this).val();

			    var cnt = name1.substring(11,12);

			    if(exp == 'Yes') {
			    	
				        jQuery('#exp_year_' +cnt).show();
				        

			    }
			    else {
			            
			            jQuery('#exp_year_' +cnt).hide();
			    }
			    
	    		
	        });

	        jQuery('input[name^="experience_skill"]').on('click', function() {	

                var name1 = this.name;
                var exp = $(this).val();

			    var cnt = name1.substring(17,18);
			    if(exp == 'Yes') {
			
				        jQuery('#exp_year_skill_' +cnt).show();
			    }
			    else {
			            jQuery('#exp_year_skill_' +cnt).hide();
			    }
			    
	    		
	        });

	        jQuery("#other_food").click(function () {
	            if (jQuery(this).is(":checked")) {
	                jQuery("#other_food_pref").show();
	            } else {
	                jQuery("#other_food_pref").hide();
	            }
	        });

	        jQuery("#other_ill").click(function () {
	            if (jQuery(this).is(":checked")) {
	                jQuery("#other_illnesses").show();
	            } else {
	                jQuery("#other_illnesses").hide();
	            }
	        });
	   
    
        });
        
		jQuery(document).ready(function($){	

		    jQuery('#my_number').blur(function() {
		    	
				if(jQuery.trim(jQuery('#my_number').val()) != ''){
					var my_number = jQuery('#my_number').val();
					var no_of_siblings = jQuery('#no_of_siblings').val();
					//alert(my_number);
					//alert(no_of_siblings);
					if(parseInt(no_of_siblings) < parseInt(my_number)){
							alert('Please enter valid value in my number in siblings.');
							jQuery('#my_number').val('');
							
					}
					
				}
			});

			// Children fields validation and error clearing
			jQuery('#no_of_children, #children_age').on('input', function() {
				// Clear error styling when user starts typing
				jQuery('#no_of_children, #children_age').removeClass('error');
			});

			jQuery(".stchosen").chosen({no_results_text: "Oops, nothing found!"});
		
		// Clear error states when user makes changes
		jQuery('.stchosen').on('change', function() {
			var field = jQuery(this);
			var fieldId = field.attr('id');
			if (field.val() && field.val().trim() !== '') {
				field.removeClass('error');
				if (fieldId) {
					jQuery('#' + fieldId + '_chosen').removeClass('error');
				}
				// Also remove from any chosen container in same form group
				field.closest('.form-group').find('.chosen-container').removeClass('error');
			}
		});
		
		// Clear error states for regular input fields
		jQuery('.form-input, .form-textarea').on('input change', function() {
			if (jQuery(this).val().trim() !== '') {
				jQuery(this).removeClass('error');
			}
		});

			// Enforce numeric contact number length (7-14 digits) on input
			jQuery('#contact_no').on('input', function(){
				var val = this.value.replace(/[^0-9]/g, '');
				if (val.length > 14) { val = val.slice(0,14); }
				this.value = val;
			});
			setTimeout(function(){ jQuery('.stchosen').trigger("chosen:updated"); }, 3000);
			
			/* Repeter text box for specialities */
			var max_fields      = 10; 
			var wrapper         = $(".input_fields_wrap"); 
			var add_button      = $(".add_field_button"); 
			
			var x = 1;
			jQuery(add_button).click(function(e){ 
				e.preventDefault();
				if(x < max_fields){ 
					x++; 
					jQuery(wrapper).append('<div><input type="text" maxlength="255" class="maid-multitext" name="maid_specialities_fr[]"/><a href="#" class="remove_field button">Remove</a></div>');
				}
			});
			
			jQuery(wrapper).on("click",".remove_field", function(e){ //user click on remove text
				e.preventDefault(); jQuery(this).parent('div').remove(); x--;
			})
		});	

        function add_experience()
        {
            jQuery("#work_experience_container").append(`
                <div class="employment-record">
                    <div class="form-grid">
                        <input type=\"hidden\" name=\"exp_id[]\" value=\"\"> 
                        <div class="form-group">
                            <label class="form-label" for="time_duration">Time Duration</label>
                            <input class="form-input" name="time_duration[]" value="" type="text" placeholder="Enter time duration">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="employer_name">Name of Employer</label>
                            <input class="form-input" name="exp_employer_name[]" value="" type="text" placeholder="Enter employer name">
                        </div>

                        <div class="form-group" style="grid-column: 1 / -1;">
                            <label class="form-label" for="e_address">Address</label>
                            <textarea class="form-textarea" name="e_address[]" rows="3" placeholder="Enter address"></textarea>
                        </div>

                        <div class="form-group" style="grid-column: 1 / -1;">
                            <label class="form-label" for="main_duties">Main Duties</label>
                            <textarea class="form-textarea" name="main_duties[]" rows="3" placeholder="Describe main duties"></textarea>
                        </div>
                    </div>
                    <button type="button" class="remove-record-btn" onclick="removeWorkExperience(this)">
                        <span>×</span>
                    </button>
                </div>
            `);
        }

        function removeWorkExperience(button) {
            jQuery(button).closest('.employment-record').remove();
        }	

        function add_feedback()
        {
            jQuery("#feedback_container").append(`
                <div class="feedback-card">
                    <button type="button" class="remove-record-btn" onclick="removeFeedback(this)">
                        <span>×</span>
                    </button>
                    <div class="feedback-field">
                        <label class="feedback-label" for="employer_name">Name of Employer</label>
                        <input class="feedback-input" name="employer_name[]" value="" maxlength="50" type="text" placeholder="Enter employer name" autocomplete="nope">
                    </div>
                    <div class="feedback-field">
                        <label class="feedback-label" for="feedback">Feedback</label>
                        <textarea class="feedback-textarea" name="feedback[]" placeholder="Enter employer feedback"></textarea>
                    </div>
                </div>
            `);
        }

        function removeFeedback(button) {
            jQuery(button).closest('.feedback-card').remove();
        }	

        // Build country options once for dynamic adds
        var countryOptions = '<option value="">Select country</option>'+
            '<option value="SINGAPORE">SINGAPORE</option>'+
            '<option value="MALAYSIA">MALAYSIA</option>'+
            '<option value="INDONESIA">INDONESIA</option>'+
            '<option value="TAIWAN">TAIWAN</option>'+
            '<option value="HONG KONG">HONG KONG</option>'+
            '<option value="MIDDLE EAST">MIDDLE EAST</option>'+
            '<option value="BRUNEI">BRUNEI</option>'+
            '<option value="INDIA">INDIA</option>'+
            '<option value="PHILIPPINES">PHILIPPINES</option>'+
            '<option value="MYANMAR">MYANMAR</option>'+
            '<option value="SRI LANKA">SRI LANKA</option>'+
            '<option value="BANGLADESH">BANGLADESH</option>'+
            '<option value="OTHERS">OTHERS</option>';


		jQuery("#marrital_status").change(function(){
			// Children fields are now always visible regardless of marital status
			// Users can enter 0 for number of children if they have none
		});

		// Show/hide Other Food Preferences input based on OTHERS checkbox
		jQuery("#others_food").change(function(){
			if(this.checked)
			{
				jQuery("#other_food_input").show();
			}
			else
			{
				jQuery("#other_food_input").hide();
				jQuery("#other_food_input input[name='other_food']").val(''); // Clear the input when hidden
			}
		});
	</script>
	<script type="text/javascript">
		function initEmploymentDatepickers(scope){
			jQuery(scope).find('.emp-from, .emp-to').each(function(){
				jQuery(this).datepicker({
					autoclose: true,
					changeMonth: true,
					changeYear: true,
					maxDate: "today",
					yearRange: "-100:+00",
					dateFormat: 'dd/mm/yy'
				});
			});
		}

		function add_employment_history(){
			var countries = [
				'SINGAPORE','MALAYSIA','INDONESIA','TAIWAN','HONG KONG','MIDDLE EAST','BRUNEI','INDIA','PHILIPPINES','MYANMAR','SRI LANKA','BANGLADESH','OTHERS'
			];
			var countryOptions = '<option value="">Select country<\/option>';
			for(var i=0;i<countries.length;i++){
				countryOptions += '<option value="'+countries[i]+'">'+countries[i]+'<\/option>';
			}
			var tpl = ''+
			'<div class="employment-record">'+
			'  <div class="form-grid">'+
			'    <div class="form-group">'+
			'      <label class="form-label" for="from_date">From Date<\/label>'+
			'      <input class="form-input emp-from" name="from_date[]" type="text" placeholder="DD/MM/YYYY">'+
			'    <\/div>'+
			'    <div class="form-group">'+
			'      <label class="form-label" for="to_date">To Date<\/label>'+
			'      <input class="form-input emp-to" name="to_date[]" type="text" placeholder="DD/MM/YYYY">'+
			'    <\/div>'+
			'    <div class="form-group">'+
			'      <label class="form-label" for="country">Country<\/label>'+
			'      <select class="form-select emp-country" name="country[]">'+countryOptions+'<\/select>'+
			'    <\/div>'+
			'    <div class="form-group" style="grid-column: 1 / -1;">'+
			'      <label class="form-label" for="employer">Employer<\/label>'+
			'      <input class="form-input" name="employer[]" type="text" placeholder="Enter employer name">'+
			'    <\/div>'+
			'    <div class="form-group" style="grid-column: 1 / -1;">'+
			'      <label class="form-label" for="work_duties">Work Duties<\/label>'+
			'      <textarea class="form-textarea" name="work_duties[]" rows="3" placeholder="Describe work duties"><\/textarea>'+
			'    <\/div>'+
			'    <div class="form-group" style="grid-column: 1 / -1;">'+
			'      <label class="form-label" for="remark_emp">Remark<\/label>'+
			'      <textarea class="form-textarea" name="remark_emp[]" rows="2" placeholder="Remark (optional)"><\/textarea>'+
			'    <\/div>'+
			'  <\/div>'+
			'  <button type="button" class="remove-record-btn" onclick="removeEmploymentHistory(this)"><span>×<\/span><\/button>'+
			'<\/div>';

			var $node = jQuery(tpl);
			jQuery('#employment_history_container').append($node);
			initEmploymentDatepickers($node);
		}

		function removeEmploymentHistory(btn){
			jQuery(btn).closest('.employment-record').remove();
		}

		// Validate interview requirements (language proficiency is now optional)
		function validateLanguageAndInterview() {
			let isValid = true;
			let errorMessages = [];
			
			// Language proficiency is now optional - removed mandatory validation
			
			// Validate that at least one interview method is selected
			const interviewSelected = jQuery('input[name="tc_interview[]"]:checked').length > 0;
			if (!interviewSelected) {
				errorMessages.push('Please select at least one interview method');
				isValid = false;
			}
			
			if (!isValid) {
				alert('Please complete the following:\n• ' + errorMessages.join('\n• '));
			}
			
			return isValid;
		}

		// Custom validation for form submission
		jQuery(document).on('submit', '#maidedit', function(e){
			console.log('Form submission started - Edit Form');
			
			// First validate language and interview requirements
			if (!validateLanguageAndInterview()) {
				e.preventDefault();
				return false;
			}
			
			// Validate all required fields (both HTML5 required and data-required)
			var hasErrors = false;
			var errorFields = [];
			
			// Check HTML5 required fields
			jQuery('#maidedit [required]').each(function() {
				var field = jQuery(this);
				var value = field.val();
				
				if (!value || value.trim() === '') {
					var label = field.closest('.form-group').find('label').first().text().replace('*', '').trim();
					if (!label) {
						label = field.attr('placeholder') || field.attr('name') || 'Field';
					}
					errorFields.push(label);
					field.addClass('error');
					hasErrors = true;
				}
			});
			
			// Check data-required fields (like chosen dropdowns)
			jQuery('#maidedit [data-required="true"]').each(function() {
				var field = jQuery(this);
				var value = field.val();
				var fieldId = field.attr('id');
				
				if (!value || value.trim() === '') {
					var label = field.closest('.form-group').find('label').first().text().replace('*', '').trim();
					if (!label) {
						label = field.attr('placeholder') || field.attr('name') || 'Field';
					}
					errorFields.push(label);
					field.addClass('error');
					
					// For chosen dropdowns, add error class to chosen container
					if (fieldId && field.hasClass('stchosen')) {
						var chosenContainer = jQuery('#' + fieldId + '_chosen');
						if (chosenContainer.length > 0) {
							chosenContainer.addClass('error');
						} else {
							// Fallback: find chosen container in same form group
							field.closest('.form-group').find('.chosen-container').addClass('error');
						}
					}
					
					hasErrors = true;
				}
			});
			
			// Validate children fields consistency
			var numChildren = jQuery('#no_of_children').val();
			var childrenAges = jQuery('#children_age').val();
			
			// Clear any existing error states for children fields
			jQuery('#no_of_children, #children_age').removeClass('error');
			
			// If number of children is greater than 0, validate ages are provided
			if (numChildren && parseInt(numChildren) > 0) {
				if (!childrenAges || childrenAges.trim() === '') {
					jQuery('#children_age').addClass('error');
					errorFields.push('Age(s) of Children (required when number of children > 0)');
					hasErrors = true;
				} else {
					// Validate that the number of ages roughly matches number of children
					var agesList = childrenAges.split(',').filter(function(age) { return age.trim() !== ''; });
					if (agesList.length !== parseInt(numChildren)) {
						jQuery('#children_age').addClass('error');
						errorFields.push('Age(s) of Children (provide ' + numChildren + ' age(s) separated by commas)');
						hasErrors = true;
					}
				}
			}
			
			// If ages are provided but number of children is 0 or empty
			if (childrenAges && childrenAges.trim() !== '') {
				if (!numChildren || parseInt(numChildren) === 0) {
					jQuery('#no_of_children').addClass('error');
					errorFields.push('Number of Children (required when ages are provided)');
					hasErrors = true;
				}
			}
			
			// If validation fails, prevent submission and show error
			if (hasErrors) {
				e.preventDefault();
				var errorMsg = 'Please fill in the following required fields:\n• ' + errorFields.join('\n• ');
				alert(errorMsg);
				
				// Focus on first error (prefer chosen dropdown over hidden select)
				var firstErrorField = jQuery('#maidedit .error').first();
				if (firstErrorField.hasClass('stchosen')) {
					var fieldId = firstErrorField.attr('id');
					jQuery('#' + fieldId + '_chosen .chosen-single').focus();
				} else {
					firstErrorField.focus();
				}
				
				return false;
			}
			var data = [];
			jQuery('#employment_history_container .employment-record').each(function(){
				var $rec = jQuery(this);
				var row = {
					from_date: $rec.find('input[name="from_date[]"]').val() || '',
					to_date: $rec.find('input[name="to_date[]"]').val() || '',
					country: $rec.find('select[name="country[]"]').val() || '',
					employer: $rec.find('input[name="employer[]"]').val() || '',
					work_duties: $rec.find('textarea[name="work_duties[]"]').val() || '',
					remark: $rec.find('textarea[name="remark_emp[]"]').val() || ''
				};
				// Include rows with any meaningful content
				if (row.from_date || row.to_date || row.country || row.employer || row.work_duties || row.remark){
					data.push(row);
				}
			});
			jQuery('#employment_history_payload').val(JSON.stringify(data));
			// Also normalize the static array inputs count to match the JSON, in case
			// the browser posts only last row. We clear and rebuild hidden mirrors.
			var $mirror = jQuery('<div style="display:none" id="eh-mirror"></div>');
			jQuery(this).append($mirror);
			for (var i=0;i<data.length;i++){
				$mirror.append('<input name="from_date[]" value="'+(data[i].from_date||'')+'" />');
				$mirror.append('<input name="to_date[]" value="'+(data[i].to_date||'')+'" />');
				$mirror.append('<input name="country[]" value="'+(data[i].country||'')+'" />');
				$mirror.append('<input name="employer[]" value="'+(data[i].employer||'')+'" />');
				$mirror.append('<textarea name="work_duties[]">'+(data[i].work_duties||'')+'<\/textarea>');
				$mirror.append('<textarea name="remark_emp[]">'+(data[i].remark||'')+'<\/textarea>');
			}

			// Build Work Experience payload and hidden mirrors (similar to employment history)
			var weData = [];
			jQuery('#work_experience_container .employment-record').each(function(){
				var $rec = jQuery(this);
				var row = {
					id: $rec.find('input[name="exp_id[]"]').val() || '',
					time_duration: $rec.find('input[name="time_duration[]"]').val() || '',
					employer_name: $rec.find('input[name="exp_employer_name[]"]').val() || '',
					e_address: $rec.find('textarea[name="e_address[]"]').val() || '',
					main_duties: $rec.find('textarea[name="main_duties[]"]').val() || ''
				};
				if (row.time_duration || row.employer_name || row.e_address || row.main_duties){
					weData.push(row);
				}
			});
			jQuery('#work_experience_payload').val(JSON.stringify(weData));
			var $weMirror = jQuery('<div style="display:none" id="we-mirror"></div>');
			jQuery(this).append($weMirror);
			for (var j=0;j<weData.length;j++){
				$weMirror.append('<input name="exp_id[]" value="'+(weData[j].id||'')+'" />');
				$weMirror.append('<input name="time_duration[]" value="'+(weData[j].time_duration||'')+'" />');
				$weMirror.append('<input name="exp_employer_name[]" value="'+(weData[j].employer_name||'')+'" />');
				$weMirror.append('<textarea name="e_address[]">'+(weData[j].e_address||'')+'<\/textarea>');
				$weMirror.append('<textarea name="main_duties[]">'+(weData[j].main_duties||'')+'<\/textarea>');
			}

			// Build Feedback (Employment History in Singapore) payload + mirror
			var fbData = [];
			jQuery('#feedback_container .feedback-card').each(function(){
				var $rec = jQuery(this);
				var r = {
					employer_name: $rec.find('input[name="employer_name[]"]').val() || '',
					feedback: $rec.find('textarea[name="feedback[]"]').val() || ''
				};
				if (r.employer_name || r.feedback){ fbData.push(r); }
			});
			jQuery('#feedback_payload').val(JSON.stringify(fbData));
			var $fbMirror = jQuery('<div style="display:none" id="fb-mirror"></div>');
			jQuery(this).append($fbMirror);
			for (var k=0;k<fbData.length;k++){
				$fbMirror.append('<input name="employer_name[]" value="'+(fbData[k].employer_name||'')+'" />');
				$fbMirror.append('<textarea name="feedback[]">'+(fbData[k].feedback||'')+'<\/textarea>');
			}
		});
	</script>
</div>