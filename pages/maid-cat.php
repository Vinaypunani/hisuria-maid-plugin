<div class="wrap">
	<div id="icon-tools" class="icon32"></div>
    <h2><?php _e('Agence Categories', 'st-maid'); ?></h2>
	<div id="col-container" class="wp-clearfix">
	<div id="col-left">
	<div class="col-wrap">
		<div class="form-wrap">
		<?php 
			global $wpdb;
			$table_name = $wpdb->prefix . "maid_cat";
			$catid = isset($_REQUEST['maid_catid']) ? sanitize_text_field( $_REQUEST['maid_catid'] ) : 0;
			$row = $wpdb->get_row( "SELECT * FROM $table_name WHERE id = $catid" );			
			if(!empty($row)){ echo '<h2>Edit Category</h2>'; }else{ echo '<h2>Add New Category</h2>'; }
		?>
		<form id="conseilcat" method="post" action="?page=maid_cat" class="validate">
		<input name="maid_action" value="managecat" type="hidden">
		<input name="maid_cat_id" value="<?php if(!empty($row)){ echo $row->id;} ?>" type="hidden">
		<input type="hidden" id="_wpnonce_add-maid_cat" name="_wpnonce_add-maid_cat" value="<?php echo wp_create_nonce( 'maid_cat_nonece' );?>" />
		<div class="form-field form-required term-name-wrap">
			<label for="maid_cat_name_fr">Name (French)<span class="required">*</span></label>
			<input name="maid_cat_name_fr" id="maid_cat_name_fr" value="<?php if(!empty($row)){ echo $row->name_fr;} ?>" type="text" maxlength="100" required>
			<p>The name is how it appears on your site.</p>
		</div>
		<div class="form-field term-slug-wrap">
			<label for="maid_cat_slug_fr">Slug (French)<span class="required">*</span></label>
			<input name="maid_cat_slug_fr" id="maid_cat_slug_fr" value="<?php if(!empty($row)){ echo $row->slug_fr;} ?>" type="text" maxlength="100" required>
			<p>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</p>
		</div>
		<div class="form-field form-required term-name-wrap">
			<label for="maid_cat_name_en">Name (English)<span class="required">*</span></label>
			<input name="maid_cat_name_en" id="maid_cat_name_en" value="<?php if(!empty($row)){ echo $row->name_en;} ?>" type="text" maxlength="100" required>
			<p>The name is how it appears on your site.</p>
		</div>
		<div class="form-field term-slug-wrap">
			<label for="maid_cat_slug_en">Slug (English)<span class="required">*</span></label>
			<input name="maid_cat_slug_en" id="maid_cat_slug_en" value="<?php if(!empty($row)){ echo $row->slug_en;} ?>" type="text" maxlength="100" required>
			<p>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</p>
		</div>
		<div class="form-field form-required term-name-wrap">
			<label for="maid_cat_name_nl">Name (Netherlands)<span class="required">*</span></label>
			<input name="maid_cat_name_nl" id="maid_cat_name_nl" value="<?php if(!empty($row)){ echo $row->name_nl;} ?>" type="text" maxlength="100" required>
			<p>The name is how it appears on your site.</p>
		</div>
		<div class="form-field term-slug-wrap">
			<label for="maid_cat_slug_nl">Slug (Netherlands)<span class="required">*</span></label>
			<input name="maid_cat_slug_nl" id="maid_cat_slug_nl" value="<?php if(!empty($row)){ echo $row->slug_nl;} ?>" type="text" maxlength="100" required>
			<p>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</p>
		</div>
		<p class="submit"><input name="submit" id="submit" class="button button-primary" value="<?php if(!empty($row)){ echo 'Update Category'; }else{ echo 'Save Category'; } ?>" type="submit"></p>
		</form>
		<script>
			function convertToSlug(Text)
			{
				return Text
					.toLowerCase()
					.replace(/ /g,'-')
					.replace(/[^\w-]+/g,'')
					;
			}
			jQuery(document).ready(function(){
				jQuery("#maid_cat_name_fr").blur(function(){					
					var name = jQuery("#maid_cat_name_fr").val();
					if(jQuery('#maid_cat_slug_fr').val() == '' && name != ''){
						var slug = convertToSlug(name);
						jQuery('#maid_cat_slug_fr').val(slug);
					}
				});
				jQuery("#maid_cat_name_en").blur(function(){					
					var name = jQuery("#maid_cat_name_en").val();
					if(jQuery('#maid_cat_slug_en').val() == '' && name != ''){
						var slug = convertToSlug(name);
						jQuery('#maid_cat_slug_en').val(slug);
					}
				});
				jQuery("#maid_cat_name_nl").blur(function(){					
					var name = jQuery("#maid_cat_name_nl").val();
					if(jQuery('#maid_cat_slug_nl').val() == '' && name != ''){
						var slug = convertToSlug(name);
						jQuery('#maid_cat_slug_nl').val(slug);
					}
				});
			});
		</script>
		</div>
	</div>
	</div>
	<div id="col-right">
	<div class="col-wrap">
		<div class="welcome-panel">
		<form id="frm-conseilcat" action="" method="POST">
		<input type="hidden" value="deletecatopt" name="maid_action">
		<input type="hidden" value="0" name="assignposts" id="assignposts">
		<?php 
			$html = '<table id="example" class="display" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th><input name="select_all" value="1" id="example-select-all" type="checkbox" /></th>
					<th>Action</th>
					<th>Name</th>
					<th>Slug</th>
				</tr>
			</thead>
			<tbody>';		
		   $html .= '</tbody></table>';
		   $wp_jdt_script = "";    
			$wp_jdt_script .= "<script type='text/javascript' language='javascript' class='init'> \n";
			$wp_jdt_script .= "jQuery(document).ready(function($) {";
			$wp_jdt_script .= "    var mytbl = jQuery('#example').DataTable( {";
			$wp_jdt_script .= "        'lengthMenu': [[30, 50, 100], [30, 50, 100]],";
			$wp_jdt_script .= "        'processing': true,";
			$wp_jdt_script .= "        'serverSide': true,";
			$wp_jdt_script .= "        'ajax': {";
			$wp_jdt_script .= "            'url': '". site_url() ."/wp-admin/admin-ajax.php?action=load_maid_cat_data',";
			$wp_jdt_script .= "            'dataType': 'jsonp' ";
			$wp_jdt_script .= "        },
										createdRow: function(row, data, index) {
											jQuery('td', row).eq(6).addClass('ordering');
											jQuery('td', row).eq(1).addClass('conseilid');
										},
										'columnDefs': [{
											'targets': 0,
											 'searchable':false,
											 'orderable':false,
											 'className': 'dt-body-center',
											 'render': function (data, type, full, meta){
												 if(data == 1){
													return '';
												 }else{
													return '<input type=\"checkbox\" name=\"conscatid[]\" value=\"' + jQuery('<div/>').text(data).html() + '\">';
												 }
											 }
										}],
										'order': [1, 'desc']";
			$wp_jdt_script .= "    } );";
			$wp_jdt_script .= "     jQuery('#example_length').before('<div class=\"delwrpcat\"><strong>Action  </strong>   ( Do not delete the post & assign it to `unassigned category`? <input type=\"checkbox\" name=\"assignchk\" val=\"1\"/>) <button style=\"margin: 0 0 0 11px;\" class=\"button button-primary button-large dellbtn\" id=\"delcatbtn\" type=\"button\">Delete</button></div><br>');";
			$wp_jdt_script .= "    jQuery( '#delcatbtn' ).on('click', function(){";
			$wp_jdt_script .= "    		if(jQuery('td.dt-body-center input[type=\"checkbox\"]').is(':checked')){
											if (confirm('Are you sure to delete maid category with posts?')) { 
												if(jQuery('input[name=\"assignchk\"]').is(':checked')){
													jQuery('#assignposts').val(1);
												}
												jQuery('#frm-conseilcat').submit();
											}
										}";
			$wp_jdt_script .= "    });";
			$wp_jdt_script .= "    jQuery( '#example-select-all' ).on('click', function(){";
			$wp_jdt_script .= "    		 var rows = mytbl.rows({ 'search': 'applied' }).nodes();
										jQuery('input[type=\"checkbox\"]', rows).prop('checked', this.checked);";
			$wp_jdt_script .= "    });";
			$wp_jdt_script .= "    jQuery('#example tbody').on('change', 'input[type=\"checkbox\"]', function(){";
			$wp_jdt_script .= "    		 if(!this.checked){
											var el = jQuery('#example-select-all').get(0);
											if(el && el.checked && ('indeterminate' in el)){
												el.indeterminate = true;
											}
										}	";
			$wp_jdt_script .= "    });";
			$wp_jdt_script .= "});";
			$wp_jdt_script .= "</script>";
		   echo $html;
		   echo $wp_jdt_script;
		?>
		</form>
		</div>
	</div>
	</div>
	</div>		
</div>