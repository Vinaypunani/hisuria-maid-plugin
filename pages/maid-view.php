<style>.control-wrap {  margin: 10px 0;}.maid-text{background-color: #fff;font-size: 1em;height: auto;line-height: normal;margin: 0 0 3px;outline: medium none;padding: 5px 8px;width: 100%;}.maid-multitext{background-color: #fff;font-size: 1em;height: auto;line-height: normal;margin: 0 0 3px;outline: medium none;padding: 5px 8px;width: 80%;}
.personalheading
{
    float: left;
    background: #e6e6e6;
    font-size: 18px;
    font-weight: bold;
    line-height: 39px;
    padding-left: 18px;
    color: #000000;
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

#employment_history{border:none !important;}


</style>
<div class="wrap">
	<div id="icon-tools" class="icon32"></div>
    <h1 class="wp-heading-inline"><?php _e('Maid', 'st-maid'); ?></h1>
	<a href="admin.php?page=addmaid" class="page-title-action">Add New</a>
	<hr class="wp-header-end">
	<h2><?php _e('Maid Detail'); ?></h2>
	<?php 
		global $wpdb;
		
		$table_name = $wpdb->prefix .'st_maid';
		$maidid = isset($_REQUEST['maidid']) ? sanitize_text_field( $_REQUEST['maidid'] ) : 0;

		$row = $wpdb->get_row( "SELECT * FROM $table_name WHERE id = $maidid" );
		if(!empty($row)){
			
		
	?>
	<div class="welcome-panel">
	<form name="maidedit" method="post" id="maidedit" autocomplete="off">
		<div style="width: 83%;" class="personalheading">
              Personal Details</div>
	<div id="poststuff">
	<div id="post-body" class="metabox-holder columns-2">
	<div id="post-body-content" style="position: relative;">
		<div id="titlediv">
			<div class="personal_details">
			<div class="control-wrap">
			
			<table>
				<th>Code:</th>
				<td> <?php echo !empty($row->code)?$row->code:''; ?></td>
			</table>		
			</div>
			<div class="control-wrap">
				<table>
				<th>Salary:</th>
				<td> <?php echo !empty($row->salary)?$row->salary:''; ?></td>
				</table>
			</div>

			<div class="control-wrap">
			
			<table>
				<th>Name:</th>
				<td> <?php echo !empty($row->name)?$row->name:''; ?></td>
				</table>		
			</div>
            
            <?php
                $date = '';
                $date_of_birth = $row->date_of_birth;
                if($date_of_birth != '')
                {
                    $date = date('d/m/Y',strtotime($date_of_birth));
                }
            ?>
            
			<div class="control-wrap">
			
			<table>
				<th>Date of Birth:</th>
				<td> <?php echo $date;; ?></td>
				</table>			
			</div>
			<div class="control-wrap">
				
			<table>
				<th>Age:</th>
				<td> <?php echo !empty($row->age)?$row->age:''; ?></td>
				</table>		
			</div>
			<div class="control-wrap">
			
			<table>
				<th>Place of Birth:</th>
				<td> <?php echo $row->place_of_birth; ?></td>
				</table>		
			</div>
			<div class="control-wrap">
				
			<table>
				<th>Height (Cm):</th>
				<td> <?php echo !empty($row->height)?$row->height:''; ?></td>
				</table>		
			</div>
			<div class="control-wrap">
			<table>
				<th>Weight (Kg):</th>
				<td> <?php echo !empty($row->weight)?$row->weight:''; ?></td>
				</table>		
			</div>
			<div class="control-wrap">
			
			<table>
				<th>Nationality:</th>
				<td> <?php echo $row->nationality; ?></td>
				</table>			
			</div>
			<div class="control-wrap">
			
			<table>
				<th>Address:</th>
				<td> <?php echo $row->address; ?></td>
				</table>		
			</div>
			<div class="control-wrap">
			
				<table>
				<th>Religion:</th>
				<td> <?php echo $row->religion; ?></td>
				</table>		
			</div>
			<div class="control-wrap">
			
			<table>
				<th>Education:</th>
				<td> <?php echo $row->education; ?></td>
				</table>		
			</div>

			<div class="control-wrap">
			
			<table>
				<th>Contact Number:</th>
				<td> <?php echo !empty($row->contact_no)?$row->contact_no:''; ?></td>
				</table>		
			</div>		
			


			<div class="control-wrap">
			
			<?php if($row->marrital_status == '1'){
				$mary_stus='Single';
			}elseif ($row->marrital_status == '2') {
				$mary_stus='Married';
			}elseif ($row->marrital_status == '3') {
				$mary_stus='Separated';
			}elseif ($row->marrital_status == '4') {
				$mary_stus='Widow';
			} ?>
			<table>
				<th>Marrital Status:</th>
				<td> <?php echo $mary_stus; ?></td>
				</table>
			</div>
			<div class="control-wrap">
			
			<table>
				<th>Current Status:</th>
				<td> <?php echo !empty($row->current_status)?$row->current_status:''; ?></td>
				</table>	
			</div>
			
			<div class="control-wrap lgwrp">
				<label for="maid_logo_fr" style="vertical-align:top; font-weight: bold">Photo</label>
				
				<img src="<?php if($row->image != ''){ echo $row->image;} ?>" id="logofr" alt="" width="120px"/>

			</div>

			<div class="control-wrap">
				<table>
				<th>Name of Port/Airport:</th>
				<td> <?php echo !empty($row->name_of_port_airport)?$row->name_of_port_airport:''; ?></td>
				</table>			
			</div>


			<div class="control-wrap" style="margin-bottom: 30px;">
				
			    <table>
				<th>Maid Type:</th>
				<td> <?php echo $row->maid_type; ?></td>
				</table>
			</div>

			<div class="control-wrap" style="margin-bottom: 30px;">
				
				<table>
				<th>Off Day:</th>
				<td> <?php echo !empty($row->off_day)?$row->off_day:''; ?></td>
				</table>
			</div>
			
		</div>

			<div style="width: 98%;" class="personalheading">
                        Family Details
            </div>&nbsp
            <div class="personal_details" style="padding-bottom: 20px; float:left; width:100%;">
            <div <?php if($row->marrital_status == '1'){ echo 'style="display:none;"';} ?> class="control-wrap" id="field_no_of_children">
			
			<table>
				<th>No of Children:</th>
				<td> <?php echo !empty($row->no_of_children)?$row->no_of_children:''; ?></td>
				</table>		
			</div>

			<div <?php if($row->marrital_status == '1'){ echo 'style="display:none;"';} ?> class="control-wrap" id="field_children_age">
			
			<table>
				<th>Age:</th>
				<td> <?php echo !empty($row->children_age)?$row->children_age:''; ?></td>
				</table>		
			</div>

			<div class="control-wrap">
				
			<table>
				<th>Number of Siblings:</th>
				<td> <?php echo !empty($row->no_of_siblings)?$row->no_of_siblings:''; ?></td>
				</table>	
			</div>

			<div class="control-wrap">
			<table>
				<th>I am Number:</th>
				<td> <?php echo !empty($row->my_number)?$row->my_number:''; ?></td>
				</table>	
			</div>
		</div>

            <div style="width: 98%;" class="personalheading">
                 MEDICAL HISTORY/DIETARY RESTRICTIONS
            </div>&nbsp
			<div class="personal_details medical" style="padding-bottom: 20px; float:left; width:100%;">
	            <div class="control-wrap" id="" >
					
					<table>
						<th>Allergies:</th>
						<td> <?php echo !empty($row->allergies)?$row->allergies:''; ?></td>
					</table>		
				</div>

				<div class="control-wrap" id="">
					<table>
						<th>Physical Disabilities:</th>
						<td> <?php echo !empty($row->disability)?$row->disability:''; ?></td>
					</table>		
				</div>

				<div class="control-wrap" id="">
					<table>
						<th>Dietary Restrictions:</th>
						<td> <?php echo !empty($row->diet)?stripslashes($row->diet):''; ?></td>
					</table>		
				</div>

				 <div class="control-wrap" id="">
					
	                <?php $mt_ill=($row->mental_illness == 1)? 'Yes':'No'; ?>
	                <table>
						<th>MENTAL ILLNESS:</th>
						<td> <?php echo $mt_ill; ?></td>
					</table>
                </div>

                <div class="control-wrap" id="" style="clear:both;">
					
	                <?php $epilepsy=($row->epilepsy == 1)? 'Yes':'No'; ?>
	                <table>
						<th>EPILEPSY:</th>
						<td> <?php echo $epilepsy; ?></td>
					</table>
                </div>

                <div class="control-wrap" id="">
					
	                <?php $asthma=($row->asthma == 1)? 'Yes':'No'; ?>
	                <table>
						<th>ASTHMA:</th>
						<td> <?php echo $asthma; ?></td>
					</table>
                </div>

                <div class="control-wrap" id="">
					
	                <?php $diabetas=($row->diabetas == 1)? 'Yes':'No'; ?>
	                <table>
						<th>DIABETES:</th>
						<td> <?php echo $diabetas; ?></td>
					</table>
                </div>

                <div class="control-wrap" id="">
					
	                <?php $hypertension=($row->hypertension == 1)? 'Yes':'No'; ?>
	                <table>
						<th>HYPERTENSION:</th>
						<td> <?php echo $hypertension; ?></td>
					</table>
                </div>

                <div class="control-wrap" id="">
					
	                <?php $tuber=($row->tuber == 1)? 'Yes':'No'; ?>
	                <table>
						<th>TUBERCULOSIS:</th>
						<td> <?php echo $tuber; ?></td>
					</table>
                </div>

                <div class="control-wrap" id="">
					
	                  <?php $heart=($row->heart == 1)? 'Yes':'No'; ?>
	                <table>
						<th>HEART DISEAS:</th>
						<td> <?php echo $heart; ?></td>
					</table>
                </div>

                <div class="control-wrap" id="">
					
	                <?php $malaria=($row->malaria == 1)? 'Yes':'No'; ?>
	                <table>
						<th>MALARIA:</th>
						<td> <?php echo $malaria; ?></td>
					</table>
                </div>

                <div class="control-wrap" id="">
					
	                 <?php $operation=($row->operation == 1)? 'Yes':'No'; ?>
	                <table>
						<th>OPERATIONS:</th>
						<td> <?php echo $operation; ?></td>
					</table>
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


				<div class="control-wrap" id="">
				  <label for="food_preferences" style="font-weight: bold;">Food Handling Preferences</label> <br/>
					 <div class="illness"><input disabled="disabled" type="checkbox" name="food_preferences[]" value="1" <?php  if(in_array(1,$food)) { echo "checked"; } ?>>NO PORK</div>
					 <div class="illness"><input type="checkbox" disabled="disabled" name="food_preferences[]" disabled="disabled" value="2" <?php  if(in_array(2,$food)) { echo "checked"; } ?>>NO BEEF</div>
					 <div class="illness"><input id="other_food" type="checkbox" name="food_preferences[]" disabled="disabled" value="3" <?php  if(in_array(3,$food)) { echo "checked"; } ?>>OTHERS</div>
				</div>
                
                <?php  if(in_array(10,$illness)) { ?>
				<div class="control-wrap second_sec" id="other_illnesses" style="float:right;">
					<label for="other_illness">Other Illness</label>
					<input class="maid-text" name="other_illness" value="<?php echo !empty($row->other_illness)?$row->other_illness:''; ?>" id="other_illness" maxlength="50" type="text">		
				</div>
				<?php } else { ?>
				<div class="control-wrap second_sec" id="other_illnesses" style="float:right;display:none;">
					<label for="other_illness">Other Illness</label>
					<input class="maid-text" name="other_illness" value="<?php echo !empty($row->other_illness)?$row->other_illness:''; ?>" id="other_illness" maxlength="50" type="text">		
				</div>

				<?php } ?>
                <?php  if(in_array(3,$food)) { ?>
				<div class="control-wrap" id="other_food_pref">
					<label for="other_food">Other Food Preferences</label>
					<input class="maid-text" name="other_food" value="<?php echo !empty($row->other_food)?$row->other_food:''; ?>" id="other_food" maxlength="50" type="text">		
				</div>
				<?php } else { ?>
                <div class="control-wrap" id="other_food_pref" style="display:none;">
					<label for="other_food">Other Food Preferences</label>
					<input class="maid-text" name="other_food" value="<?php echo !empty($row->other_food)?$row->other_food:''; ?>" id="other_food" maxlength="50" type="text">		
				</div>
				<?php } ?>

			</div>

			<div style="width: 98%;" class="personalheading">
                        Other Details
            </div>&nbsp
			<div class="personal_details" style="padding-bottom: 20px; float:left; width:100%;">
	            <div class="control-wrap" id="">
				<label for="rest_day">Preference for Rest Day</label>
				<input class="maid-text" name="rest_day" value="<?php echo !empty($row->rest_day)?$row->rest_day:''; ?>" id="rest_day" maxlength="50" type="text">		
				</div>

				<div class="control-wrap" id="">
				<label for="other_remark">Other Remarks</label>	
				<textarea class="maid-text" rows="5" name="other_remark" id="other_remark"><?php echo !empty($row->other_remark)?$row->other_remark:''; ?></textarea>	
				</div>

			</div>
            <?php /*
			<div style="width: 98%;" class="personalheading">
                        Work Experience
            </div>&nbsp

            <div id="work_experience_container">
            	<?php 
        $experience_row = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."maid_experience WHERE maid_id = $maidid" );
            	foreach ($experience_row as $experience) { ?>
            	
	            <div id="work_experience" class="personal_details">

	            	<div class="control-wrap">
						<label for="time_duration">Time Duration</label>
						<input class="maid-text" name="time_duration[]" value="<?php echo !empty($experience->time_duration)?$experience->time_duration:''; ?>" id="time_duration" maxlength="50" type="text">		
					</div>
					<div class="control-wrap">
						<label for="employer_name">Name of Employer</label>
						<input class="maid-text" name="employer_name[]" value="<?php echo !empty($experience->employer_name)?$experience->employer_name:''; ?>" id="employer_name" maxlength="50" type="text">		
					</div>
					<div class="control-wrap">
						<label for="e_address">Address</label>
						<textarea class="maid-text" rows="4" name="e_address[]" id="e_address"><?php echo !empty($experience->e_address)?$experience->e_address:''; ?>	</textarea>		
					</div>
					<div class="control-wrap">
						<label for="main_duties">Main Duties</label>
						<textarea class="maid-text" rows="4" name="main_duties[]" id="main_duties"><?php echo !empty($experience->main_duties)?$experience->main_duties:''; ?>	</textarea>		
					</div>
	            </div>
	        		<?php 
	        	}
            	?>
	        </div>
	        <div id="add_experience" style="float: right; width:100%;">
				<a id="addButton" style="float: right; margin:10px 0;" href="javascript:void(0);" onclick="add_experience()" class="dellbtn"><img src="http://localhost/hisuria/wp-content/uploads/2018/10/plusmore.png"/></a>
			</div>
			*/?>

			<div style="width: 98%;" class="personalheading">
                EMPLOYMENT HISTORY OVERSEAS
            </div>

			<div id="employment_history_container">
				<?php 
	        	$employment_history = $wpdb->get_results("SELECT * FROM wp_employment_history WHERE maid_id = $maidid" );
            	$count_emp_hstry = $wpdb->num_rows;
            	?>
            	<input type="hidden" value="<?php echo $count_emp_hstry; ?>"
            	name="count_emp_hstry" id="count_emp_hstry">
            	<?php
            	$i= 1;
            	foreach ($employment_history as $emp) { 

	                /*$from_date = '';
	                $to_date = '';
	               
	                if($emp->from_date != '')
	                {
	                    $from_date = date('d/m/Y',strtotime($emp->from_date));
	                }
	                if($emp->to_date != '')
	                {
	                    $to_date = date('d/m/Y',strtotime($emp->to_date));
	                }*/
                ?>

	            <div id="employment_history" class="personal_details">
	            	<div class="control-wrap">
						<label for="from_date">From</label>
						<input class="maid-text from_date" name="from_date[]" value="<?php echo !empty($emp->from_date)?$emp->from_date:''; ?>" id="from_date<?php echo $i; ?>" maxlength="50" type="text"></label>		
					</div>
					<div class="control-wrap">
						<label for="to_date">To Date</label>
						<input class="maid-text to_date" name="to_date[]" value="<?php echo !empty($emp->to_date)?$emp->to_date:''; ?>" id="to_date<?php echo $i; ?>" maxlength="50" type="text"></label>	
					</div>
					<div class="control-wrap">
						<label for="country">Country</label>
						<input class="maid-text" name="country[]" value="<?php echo !empty($emp->country)?$emp->country:''; ?> " id="country" maxlength="50" type="text" autocomplete="nope">		
					</div>
					<div class="control-wrap">
						<label for="employer">Employer Name</label>
						<input class="maid-text" name="employer[]" value="<?php echo !empty($emp->employer)?$emp->employer:''; ?>" id="employer" maxlength="50" type="text">		
					</div>
					
					<div class="control-wrap">
						<label for="work_duties">Work Duties</label>
						<textarea class="maid-text" rows="4" name="work_duties[]" id="work_duties"><?php echo !empty($emp->work_duties)?$emp->work_duties:''; ?></textarea>		
					</div>
					<div class="control-wrap">
						<label for="remark_emp">Reamrk</label>
						<textarea class="maid-text" rows="4" name="remark_emp[]" id="remark_emp"><?php echo !empty($emp->remark)?$emp->remark:''; ?></textarea>		
					</div>

	            </div>
	            <?php $i++; } ?>
	        </div>
	        <div id="add_employment_history" style="float: right; width:100%;">
				<a id="addButton" style="float: right; margin:10px 0;" href="javascript:void(0);" onclick="add_employment_history()" class="dellbtn"><img src="http://localhost/hisuria/wp-content/uploads/2018/10/plusmore.png"/></a>

			</div>


            <div style="width: 98%;" class="personalheading">
                        Language Profiency
            </div>&nbsp

            <table style="width:100%" class="table_custm">
            	<tr style="text-align: left;">
            		<th>Language</th>
            		<th>Spoken</th>
            	</tr>
            	<tr>
            		<td>Maindarin</td>
            		<td>
            			<?php 
		            	$mandarin_row = $wpdb->get_row( "SELECT * FROM wp_maid_language_profiency WHERE maid_id = $maidid AND language = 'mandarin'" ); ?>
            			<select name="language[mandarin][]" id="mandarin_spocken">
							<option value="">--Select One--</option>
							<option value="Poor" <?php if($mandarin_row->spoken == 'Poor'){ echo 'selected="selected"';} ?>>Poor</option>
							<option value="Fair" <?php if($mandarin_row->spoken == 'Fair'){ echo 'selected="selected"';} ?>>Fair</option>
							<option value="Good" <?php if($mandarin_row->spoken == 'Good'){ echo 'selected="selected"';} ?>>Good</option>

						</select>
            		</td>
            		
            	</tr>
            	<tr>
            		<td>ENGLISH</td>
            		<td>
            			<?php 
		            	$english_row = $wpdb->get_row( "SELECT * FROM wp_maid_language_profiency WHERE maid_id = $maidid AND language = 'english'" ); ?>
            			<select name="language[english][]" id="english_spocken">
							<option value="">--Select One--</option>
							<option value="Poor" <?php if($english_row->spoken == 'Poor'){ echo 'selected="selected"';} ?>>Poor</option>
							<option value="Fair" <?php if($english_row->spoken == 'Fair'){ echo 'selected="selected"';} ?>>Fair</option>
							<option value="Good" <?php if($english_row->spoken == 'Good'){ echo 'selected="selected"';} ?>>Good</option>

						</select>
            		</td>
            		
            	</tr>
            	<tr>
            		<td>MALAY</td>
            		<td>
            			<?php 
		            	$malay_row = $wpdb->get_row( "SELECT * FROM wp_maid_language_profiency WHERE maid_id = $maidid AND language = 'Indonesian/Malay'" ); ?>
            			<select name="language[Indonesian/Malay][]" id="malay_spocken">
							<option value="">--Select One--</option>
							<option value="Poor" <?php if($malay_row->spoken == 'Poor'){ echo 'selected="selected"';} ?>>Poor</option>
							<option value="Fair" <?php if($malay_row->spoken == 'Fair'){ echo 'selected="selected"';} ?>>Fair</option>
							<option value="Good" <?php if($malay_row->spoken == 'Good'){ echo 'selected="selected"';} ?>>Good</option>
						</select>
            		</td>
            		
            	</tr>
            	<tr>
            		<td>CANTONESE</td>
            		<td>
            			<?php 
		            	$cantonese_row = $wpdb->get_row( "SELECT * FROM wp_maid_language_profiency WHERE maid_id = $maidid AND language = 'cantonese'" ); ?>
            			<select name="language[cantonese][]" id="cantonese_spocken">
							<option value="">--Select One--</option>
							<option value="Poor" <?php if($cantonese_row->spoken == 'Poor'){ echo 'selected="selected"';} ?>>Poor</option>
							<option value="Fair" <?php if($cantonese_row->spoken == 'Fair'){ echo 'selected="selected"';} ?>>Fair</option>
							<option value="Good" <?php if($cantonese_row->spoken == 'Good'){ echo 'selected="selected"';} ?>>Good</option>
						</select>
            		</td>
            		
            	</tr>
            	<tr>
            		<td>ARABIC</td>
            		<td>
            			<?php 
		            	$arabic_row = $wpdb->get_row( "SELECT * FROM wp_maid_language_profiency WHERE maid_id = $maidid AND language = 'arabic'" ); ?>
            			<select name="language[arabic][]" id="arabic_spocken">
							<option value="">--Select One--</option>
							<option value="Poor" <?php if($arabic_row->spoken == 'Poor'){ echo 'selected="selected"';} ?>>Poor</option>
							<option value="Fair" <?php if($arabic_row->spoken == 'Fair'){ echo 'selected="selected"';} ?>>Fair</option>
							<option value="Good" <?php if($arabic_row->spoken == 'Good'){ echo 'selected="selected"';} ?>>Good</option>
						</select>
            		</td>
            	</tr>
            </table>
            <?php /*
            <div style="width: 98%;" class="personalheading">
                        Work Areas
            </div>&nbsp

            <table style="width:100%" class="table_custm">
            	<tr style="text-align: left;">
            		<th>Task</th>
            		<th>Willing</th>
            		<th>Experience</th>
            	</tr>
            	<?php 
					$work_area_tbl = $wpdb->prefix . "work_areas_master";
					//$query = "SELECT id, lable FROM `$work_area_tbl` where is_deleted = 1 GROUP BY `$name` ORDER BY `$name`";
					$query = "SELECT * FROM `$work_area_tbl` AS wa ORDER BY `id`";
					$areas = $wpdb->get_results($query);

					  if(!empty($areas)){
						  foreach($areas as $area){ ?>
						  <tr>
		            		<td><?php echo $area->lable; ?></td>
		            		<td>
		            			<?php 
		            			$work_row = $wpdb->get_row( "SELECT * FROM wp_maid_work_areas WHERE maid_id = $maidid AND work_area_id = $area->id" ); 
		            			//echo "<pre>"; print_r($work_row);exit;?>
		            			<select name="work_area[<?= $area->id; ?>][]" id="work_area">
									<option value="">--Select One--</option>
									<option value="Yes" <?php if(!empty($work_row) && $work_row->willing == 'Yes'){ echo 'selected="selected"';} ?>>Yes</option>
									<option value="No" <?php if(!empty($work_row) && $work_row->willing == 'No'){ echo 'selected="selected"';} ?>>No</option>
								</select>
		            		</td>
		            		<td>
		            			<select name="work_area[<?= $area->id; ?>][]" id="work_area">
									<option value="">--Select One--</option>
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
            </table>
            */?>

            <div style="width: 98%;" class="personalheading">
                        Fdw Skills (Based On FDW'S Declaration)
            </div>
			<div id="Fdw_skills_container">
	            <div id="fdw_skills" class="personal_details fdw_skills">

	            	

	            	<div class="control-wrap">
                        <input type="checkbox" name="fdw_declare" value="1" <?php if($row->fdw_declare == 1) { echo 'checked'; } ?>>Based on Fdw's Declaration, No Evaluation/Observation by Singapore Ea or Overseas Training Centre/Ea
					</div>


                    <?php 
				     $fdw_interview = explode(',',$row->fdw_interview);
				    ?>

	                <div class="control-wrap">
                        <label>Training Centre Singapore EA</label><br/>
                         <input type="checkbox" name="fdw_interview[]" value="1" <?php 
                         if(in_array(1,$fdw_interview)) { echo 'checked'; } ?>>Interviewed via Telephone/Teleconference<br>
                         <input type="checkbox" name="fdw_interview[]" value="2" <?php 
                         if(in_array(2,$fdw_interview)) { echo 'checked'; } ?>>Interviewed via Videoconference<br>
                         <input type="checkbox" name="fdw_interview[]" value="3" <?php 
                         if(in_array(3,$fdw_interview)) { echo 'checked'; } ?>>Interviewed in Person<br>
                         <input type="checkbox" name="fdw_interview[]" value="4" <?php 
                         if(in_array(4,$fdw_interview)) { echo 'checked'; } ?>>Interviewed in Person and Also Made Observation of Fdw in the Areas of Work Listed in Table<br>
					</div>	

                <?php 
					$work_area_tbl = $wpdb->prefix . "maid_skill_master";
					
					$query = "SELECT * FROM `$work_area_tbl` ORDER BY `id`";
					$areas = $wpdb->get_results($query);
					$count = $wpdb->num_rows;
					?>
					 <input class="maid-text" name="skill_count" value="<?php echo $count; ?>" id="skill_count" maxlength="50" type="hidden">
					<?php 
					if(!empty($areas)){
				    foreach($areas as $area){ ?>
                   
	            	<div class="skill_label">
						<label><?php echo $area->lable; ?></label>
					</div>
                    <?php 
		            	$work_row = $wpdb->get_row( "SELECT * FROM wp_maid_skills WHERE maid_id = $maidid AND skill_id = $area->id" ); 
		            ?>
		            <?php if($area->id != 2 && $area->id != 3 && $area->id != 4)  { ?>
					<div class="control-wrap">
                        <label>Other Details</label> 
                       
                        <input class="maid-text" name="other_<?= $area->id; ?>" value="<?php if(!empty($work_row->other)){ echo $work_row->other;} ?>" id="other_<?= $area->id; ?>" maxlength="50" type="text">	
					</div>
					<?php } ?>

					<div class="control-wrap">
                        <label>Willingness</label> 
                        <input type="radio" value="Yes" name="willingness_<?= $area->id; ?>"<?php echo ($work_row->willing== 'Yes') ?  "checked" : "" ;   ?> >Yes
                        <input type="radio" value="No" name="willingness_<?= $area->id; ?>"<?php echo ($work_row->willing== 'No') ?  "checked" : "" ;   ?> >No
					</div>

					<div class="control-wrap">
                        <label>Experience</label> 
                        <input type="radio" value="Yes" name="experience_<?= $area->id; ?>" <?php echo ($work_row->experience== 'Yes') ?  "checked" : "" ;   ?>>Yes
                        <input type="radio" value="No" name="experience_<?= $area->id; ?>" <?php echo ($work_row->experience== 'No') ?  "checked" : "" ;   ?>>NO

					</div>	

					<div class="control-wrap">
                        <label>Assessment</label> 
                        <select name="skill_area_<?= $area->id; ?>" id="skill_area_<?= $area->id; ?>">
							<option value="N.A" <?php if(!empty($work_row) && $work_row->assessment == 'N.A'){ echo 'selected="selected"';} ?>>N.A</option>
							
							<option value="Poor" <?php if(!empty($work_row) && $work_row->assessment == 'Poor'){ echo 'selected="selected"';} ?>>Poor</option>
							<option value="Fair" <?php if(!empty($work_row) && $work_row->assessment == 'Fair'){ echo 'selected="selected"';} ?>>Fair</option>
							<option value="Good" <?php if(!empty($work_row) && $work_row->assessment == 'Good'){ echo 'selected="selected"';} ?>>Good</option>
							<option value="Very Good" <?php if(!empty($work_row) && $work_row->assessment == 'Very Good'){ echo 'selected="selected"';} ?>>Very Good</option>
							<option value="Excellent" <?php if(!empty($work_row) && $work_row->assessment == 'Excellent'){ echo 'selected="selected"';} ?>>Excellent</option>
							
						</select>
					</div>	
                    
                    <?php if(!empty($work_row) && $work_row->experience== 'Yes'){ ?>
                        <div class="control-wrap exp_year"  id="exp_year_<?= $area->id; ?>">
                        <label>Experience Year</label> 
                        <input class="maid-text" name="expe_year_<?= $area->id; ?>" value="<?php if(!empty($work_row->exp_year)){ echo $work_row->exp_year;} ?>" id="expe_year_<?= $area->id; ?>" maxlength="50" type="text">	
					</div>
                    <?php } else { ?>
                         <div class="control-wrap exp_year"  style="display:none;" id="exp_year_<?= $area->id; ?>">
                        <label>Experience Year</label> 
                        <input class="maid-text" name="expe_year_<?= $area->id; ?>" value="" id="expe_year_<?= $area->id; ?>" maxlength="50" type="text">	
					</div>

                    <?php } ?>	
                    
						

					<?php 
					    }
					} ?>    

					
	            </div>
	        </div>
        </br>

        <div style="width: 98%;" class="personalheading">
                 Fdw Skills (Interviewed By Overseas Training Centre)
        </div>

			<div id="Fdw_skills_container">
	            <div id="fdw_skills" class="personal_details fdw_skills">

	            	
                    <div class="control-wrap">
                        <input type="checkbox" name="tc_declare" value="1" <?php if($row->tc_declare == 1) { echo "checked" ; } ?>>Interviewed by Overseas Training Centre/Ea
					</div>

	            	<div class="control-wrap">
                        <label>Foreign Training Centre Name</label> 
                        <input class="maid-text" name="training_centre" value="<?php echo !empty($row->training_centre)?$row->training_centre:''; ?>" id="training_centre" maxlength="50" type="text">	
					</div>

					<div class="control-wrap">
                        <label>Third Party Certified No</label> 
                        <input class="maid-text" name="certified_no" value="<?php echo !empty($row->certified_no)?$row->certified_no:''; ?>" id="certified_no" maxlength="50" type="text">	
					</div>
                    <?php 
	                   
                        //echo $row->tc_interview;  
		                $tc_intv = explode(",",$row->tc_interview);
		       
	                ?>
					<div class="control-wrap">
                        <label>Training Centre Interview</label> <br/>
                         <input type="checkbox" name="tc_interview[]" value="1" <?php  if(in_array(1,$tc_intv)) { echo "checked"; } ?>>Interviewed via Telephone/Teleconference<br>
                         <input type="checkbox" name="tc_interview[]" value="2" <?php  if(in_array(2,$tc_intv)) { echo "checked"; } ?>>Interviewed via Videoconference<br>
                         <input type="checkbox" name="tc_interview[]" value="3" <?php  if(in_array(3,$tc_intv)) { echo "checked"; } ?>>Interviewed in Person<br>
                         <input type="checkbox" name="tc_interview[]" value="4" <?php  if(in_array(4,$tc_intv)) { echo "checked"; } ?>>Interviewed in Person and Also Made Observation of Fdw in the Areas of Work Listed in Table<br>
					</div>
                <?php 
					$work_area_tbl = $wpdb->prefix . "maid_skill_master";
					
					$query = "SELECT * FROM `$work_area_tbl` ORDER BY `id`";
					$areas = $wpdb->get_results($query);
					$count = $wpdb->num_rows;
					?>
					 <input class="maid-text" name="skill_count" value="<?php echo $count; ?>" id="skill_count" maxlength="50" type="hidden">
					<?php 
					if(!empty($areas)){
				    foreach($areas as $area){ ?>
                   
	            	<div class="skill_label">
						<label><?php echo $area->lable; ?></label>
					</div>
                    
                    <?php 
		            	$work_row = $wpdb->get_row( "SELECT * FROM wp_maid_skills_otc WHERE maid_id = $maidid AND skill_id = $area->id" ); 
		            ?>

		            <?php if($area->id != 2 && $area->id != 3 && $area->id != 4)  { ?>
					<div class="control-wrap">
                        <label>Other Details</label> 
                       
                        <input class="maid-text" name="other_skill_<?= $area->id; ?>" value="<?php if(!empty($work_row->other)){ echo $work_row->other;} ?>" id="other_skill_<?= $area->id; ?>" maxlength="50" type="text">	
					</div>
                    <?php } ?> 
					<div class="control-wrap">
                        <label>Willingness</label> 
                        <input type="radio" value="Yes" name="willingness_skill_<?= $area->id; ?>"<?php echo ($work_row->willing== 'Yes') ?  "checked" : "" ;   ?> >Yes
                        <input type="radio" value="No" name="willingness_skill_<?= $area->id; ?>"<?php echo ($work_row->willing== 'No') ?  "checked" : "" ;   ?> >No
					</div>

					<div class="control-wrap">
                        <label>Experience</label> 
                        <input type="radio" value="Yes" name="experience_skill_<?= $area->id; ?>" <?php echo ($work_row->experience== 'Yes') ?  "checked" : "" ;   ?>>Yes
                        <input type="radio" value="No" name="experience_skill_<?= $area->id; ?>" <?php echo ($work_row->experience== 'No') ?  "checked" : "" ;   ?>>NO

					</div>	

					<div class="control-wrap">
                        <label>Assessment</label> 
                        <select name="ass_skill_<?= $area->id; ?>" id="ass_skill_<?= $area->id; ?>">
							<option value="N.A" <?php if(!empty($work_row) && $work_row->assessment == 'N.A'){ echo 'selected="selected"';} ?>>N.A</option>
							
							<option value="Poor" <?php if(!empty($work_row) && $work_row->assessment == 'Poor'){ echo 'selected="selected"';} ?>>Poor</option>
							<option value="Fair" <?php if(!empty($work_row) && $work_row->assessment == 'Fair'){ echo 'selected="selected"';} ?>>Fair</option>
							<option value="Good" <?php if(!empty($work_row) && $work_row->assessment == 'Good'){ echo 'selected="selected"';} ?>>Good</option>
							<option value="Very Good" <?php if(!empty($work_row) && $work_row->assessment == 'Very Good'){ echo 'selected="selected"';} ?>>Very Good</option>
							<option value="Excellent" <?php if(!empty($work_row) && $work_row->assessment == 'Excellent'){ echo 'selected="selected"';} ?>>Excellent</option>
							
						</select>
					</div>	
                    
                    <?php if(!empty($work_row) && $work_row->experience== 'Yes'){ ?>
                        <div class="control-wrap exp_year"  id="exp_year_skill_<?= $area->id; ?>">
                        <label>Experience Year</label> 
                        <input class="maid-text" name="expe_year_skill_<?= $area->id; ?>" value="<?php if(!empty($work_row->exp_year)){ echo $work_row->exp_year;} ?>" id="expe_year_skill_<?= $area->id; ?>" maxlength="50" type="text">	
					</div>
                    <?php } else { ?>
                         <div class="control-wrap exp_year"  style="display:none;" id="exp_year_skill_<?= $area->id; ?>">
                        <label>Experience Year</label> 
                        <input class="maid-text" name="expe_year_skill_<?= $area->id; ?>" value="" id="expe_year_skill_<?= $area->id; ?>" maxlength="50" type="text">	
					</div>

                    <?php } ?>	
                    
						

					<?php 
					    }
					} ?>    

					
	            </div>
	        </div>
        </br>

            <div style="width: 98%;" class="personalheading">
                Employment History in Singapore
            </div>

            <div class="form-control" style="margin:15px 0 25px; float:left;">
				<label><strong>Previous Working Experience in Singapore</strong></label><br/> <?php  //if(in_array(2,$food)) { echo "checked"; } ?>
				<div class="emp_work"><input type="checkbox" name="exp" value="1" id="" class="exp_list" <?php if($row->pevious_work_exp == 1) {echo "checked"; } ?>>Yes</div>
                <div class="emp_work"><input type="checkbox" name="exp" value="0" id="" class="exp_list" <?php if($row->pevious_work_exp == 0) { echo "checked"; } ?>>No</div>
			</div>
            


			<div style="width: 98%;" class="personalheading">
                Feedback from Previous Employers in Singapore
            </div>
			<div id="feedback_container">
                <?php 

            	$maid_feedback = $wpdb->get_results( "SELECT * FROM wp_maid_feedback WHERE maid_id = $maidid" );
            	foreach ($maid_feedback as $feedback) { 
            		?>

	            <div id="feedback_div" class="personal_details">
					<div class="control-wrap">
						<label for="employer_name">Name of Employer</label>
						<input class="maid-text" name="employer_name[]" value="<?php echo !empty($feedback->employer_name)?$feedback->employer_name:''; ?>" id="employer_name" maxlength="50" type="text" autocomplete="nope">		
					</div>
					<div class="control-wrap">
						<label for="feedback">Feedback</label>
						<textarea class="maid-text" rows="4" name="feedback[]" id="feedback"><?php echo !empty($feedback->feedback)?$feedback->feedback:''; ?></textarea>		
					</div>
	            </div>
	            <?php } ?>
	        </div>
	        <div id="add_feedback" style="float: right; width:100%;">
				<a id="addFeedback" style="float: right; margin:10px 0;" href="javascript:void(0);" onclick="add_feedback();" class="dellbtn"><img src="http://localhost/hisuria/wp-content/uploads/2018/10/plusmore.png"/></a>
			</div>

			<div style="width: 98%;" class="personalheading">
                Availability of Fdw to Be Interviewed by Prospective Employer
            </div>
            <?php $fdw_availability = explode(',',$row->fdw_availability); ?>
			<div id="Fdw_skills_container">
	            <div id="fdw_skills" class="personal_details fdw_skills">
					<div class="control-wrap">
                         <input type="checkbox" name="fdw_availability[]" value="1" <?php if(in_array(1,$fdw_availability)) { echo 'checked'; } ?>>Fdw Is Not Available for Interview<br>
                         <input type="checkbox" name="fdw_availability[]" value="2"<?php if(in_array(2,$fdw_availability)) { echo 'checked'; } ?>>Fdw Can Be Interviewed by Phone<br>
                         <input type="checkbox" name="fdw_availability[]" value="3"<?php if(in_array(3,$fdw_availability)) { echo 'checked'; } ?>>Fdw Can Be Interviewed by Video-conference<br>
                         <input type="checkbox" name="fdw_availability[]" value="4"<?php if(in_array(4,$fdw_availability)) { echo 'checked'; } ?>>Fdw Can Be Interviewed in Person
					</div>
				</div>
            </div>

            <div style="width: 98%;" class="personalheading">
                Declaration
            </div>&nbsp

            <div class="form-control" style="margin:15px 0 25px; float:left;">
				<label><strong>Declaration</strong></label>&nbsp
				<input type="checkbox" name="declaration" value="1" <?php if(!empty($row->declaration) && $row->declaration == '1'){ echo 'checked="checked"';} ?>>I declare that all particulars given herein are true and accurate to the best of my knowledge.
			</div>&nbsp

            <div style="width: 98%;" class="personalheading">
                        Remarks
            </div>

            <div class="remark_custm">
            <div class="form-control">
				<label for="remark">Remark Form</label>
				<textarea class="maid-text" rows="4" name="remark" value="" id="remark"><?php echo !empty($row->remark)?$row->remark:''; ?></textarea>		
			</div>
		</div>
			<div class="control-wrap">
				<p class="submit" style="text-align: right;">
					<input name="maid_csv_import_files_next" type="hidden" value="maidupdate" /><input type="submit" class="button button-primary btn_cutm" name="submit" value="Update" />
				</p>
			</div>
		</div>
	</div>
	<div id="postbox-container-1" class="postbox-container">
	</div>
	</div>
	</div>
	</form>
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

			jQuery(".stchosen").chosen({no_results_text: "Oops, nothing found!"});
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
			var exp_container = jQuery("#work_experience").html();
			jQuery( "#work_experience_container" ).append('<div class="personal_details work_experience"><button type="button" class="remove_btn"><span>x</span></button><div class="control-wrap"><label for="time_duration">Time Duration</label><input class="maid-text" name="time_duration[]" value="" id="time_duration" maxlength="50" type="text"></div><div class="control-wrap"><label for="employer_name">Name of Employer</label><input class="maid-text" name="employer_name[]" value="" id="employer_name" maxlength="50" type="text"></div><div class="control-wrap"><label for="e_address">Address</label><textarea class="maid-text" rows="4" name="e_address[]" id="e_address">	</textarea></div><div class="control-wrap"><label for="main_duties">Main Duties</label><textarea class="maid-text" rows="4" name="main_duties[]" id="main_duties">	</textarea></div></div>');
			jQuery(".remove_btn").click(function(){
	            jQuery(this).parent('.work_experience').remove();
			});
		}	

		function add_feedback()
		{
			var exp_container = jQuery(".feedback").html();

			jQuery( "#feedback_container" ).append('<div id="feedback_div" class="personal_details feeback"><button type="button" class="remove_btn"><span>x</span></button><div class="control-wrap"><label for="feedback">Feedback</label><textarea class="maid-text" rows="4" name="feedback[]" id="feedback"></textarea></div><div class="control-wrap"><label for="employer_name">Name of Employer</label><input class="maid-text" name="employer_name[]" value="" id="employer_name" maxlength="50" type="text" autocomplete="nope"></div> </div>');
			jQuery(".remove_btn").click(function(){
	            jQuery(this).parent('.feeback').remove();
		    });
		}	

		function add_employment_history()
		{
			var exp_container = jQuery(".employment_history").html();

			var total_element = jQuery(".personal_details.employment_history").length;

			var cnt = jQuery('#count_emp_hstry').val();

			var i = parseInt(cnt) + 1;
			var j = parseInt(total_element) + parseInt(i); 

			jQuery( "#employment_history_container" ).append('<div id="" class="personal_details employment_history"><button type="button" class="remove_btn"><span>x</span></button><div class="control-wrap"><label for="to_date">To Date</label><input class="maid-text to_date" name="to_date[]" value="" id="to_date'+j+'" maxlength="50" type="text"></label></div> <div class="control-wrap"><label for="from_date">From Date</label><input class="maid-text from_date" name="from_date[]" value="" id="from_date'+j+'" maxlength="50" type="text"></label></div><div class="control-wrap"><label for="employer">Employer Name</label><input class="maid-text" name="employer[]" value="" id="employer'+j+'" maxlength="50" type="text"></div><div class="control-wrap"><label for="country">Country</label><input class="maid-text" name="country[]" value="" id="country'+j+'" maxlength="50" type="text" autocomplete="nope"></div><div class="control-wrap"><label for="remark_emp">Reamrk</label><textarea class="maid-text" rows="4" name="remark_emp[]" id="remark_emp'+j+'"></textarea></div><div class="control-wrap"><label for="work_duties">Work Duties</label><textarea class="maid-text" rows="4" name="work_duties[]" id="work_duties'+j+'"></textarea></div> </div> </div>');
				/*$('#from_date'+j).datepicker({
	                autoclose: true,
	                changeMonth: true, 
	                changeYear: true,
	                maxDate: "today",
	                 yearRange: "-100:+00",
	                dateFormat: 'dd/mm/yy'
	            });
				$('#to_date'+j).datepicker({
	                autoclose: true,
	                changeMonth: true, 
	                changeYear: true,
	                maxDate: "today",
	                 yearRange: "-100:+00",
	                dateFormat: 'dd/mm/yy'
	            });*/

	            
			jQuery(".remove_btn").click(function(){
	            jQuery(this).parent('.employment_history').remove();
			});
		}

		jQuery("#marrital_status").change(function(){
			if(this.value == 1)
			{
				jQuery('#field_no_of_children').val('');
		    	jQuery("#field_no_of_children").css("display", "none");
		    	jQuery('#field_children_age').val('');
		    	jQuery("#field_children_age").css("display", "none");
		    }
		    else
		    {
		    	jQuery("#field_no_of_children").css("display", "inline");
		    	jQuery("#field_children_age").css("display", "inline");
		    }
		});
	</script>
		<?php }else{
			echo '<p>Agence not found.</p>';
		}?>
</div>