<div class="wrap">
	<div id="icon-tools" class="icon32"></div>
	<link rel="stylesheet" href="<?php echo plugins_url('../css/modern-table.css', __FILE__); ?>"
    <h1 class="wp-heading-inline"><?php _e('Maids', 'st-maid'); ?></h1>
	<a href="admin.php?page=addmaid" class="page-title-action">Add New</a>
	<hr class="wp-header-end">
    <div class="welcome-panel">
	<!--<form class="validate" name="export_maid" method="post">
		<p class="submit" style="text-align: right;">
			<input name="maid_csv_import_files_next" type="hidden" value="export" /><input type="submit" class="button button-primary" name="submit" value="Export Province CSV" />
		</p>
	 </form>-->	
	<form id="frm-maid" action="" method="POST">
	<input type="hidden" value="deleteopt" name="maid_csv_import_files_next">
	<div class="dataTables_length" id="example_length"><label>View 
		<select name="status_filter" aria-controls="example" id="status_filter" class="">
			<option value="">All</option>
			<option value="9">Taken</option>
			<option value="8">Available</option>
			<option value="5">Hide</option>
			<option value="4">Show</option>
		</select></label>
	</div>
	<?php 
		$html = '<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
				<th><input name="select_all" value="1" id="example-select-all" type="checkbox" /></th>
                <th>Code</th>
                <th>Name</th>
                <th>Age</th>
                <th>Added by</th>
                <th>Nationality</th>
                <th>Status</th>
                <th>Show / Hide	</th>
                <th>Action</th>
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
		$wp_jdt_script .= "            'url': '". admin_url('admin-ajax.php') ."',";
		$wp_jdt_script .= "            'type': 'POST',";
		$wp_jdt_script .= "            'data': { 'action': 'load_maid_data' },";
		$wp_jdt_script .= "            'error': function(xhr, status, error) {";
		$wp_jdt_script .= "                console.error('DataTables Ajax Error:', error);";
		$wp_jdt_script .= "                console.error('Response:', xhr.responseText);";
		$wp_jdt_script .= "            }";
		$wp_jdt_script .= "        },
									createdRow: function(row, data, index) {
										jQuery('td', row).eq(10).addClass('featured');
										jQuery('td', row).eq(2).addClass('id');
										jQuery('td', row).eq(7).addClass('maidcommune');
									},
									'columnDefs': [{
										'targets': 0,
										 'searchable':false,
										 'orderable':false,
										 'className': 'dt-body-center',
										 'render': function (data, type, full, meta){
											 return '<input type=\"checkbox\" name=\"maidsid[]\" value=\"' + jQuery('<div/>').text(data).html() + '\">';
										 }
									}],
									
									'order': [2, 'desc']";
		$wp_jdt_script .= "    } );";
		//$wp_jdt_script .= "     jQuery('#example_length').before('<div class=\"delwrp\"><label>Action  </label><button style=\"margin: 11px 0 0 11px;\" class=\"button button-primary button-large dellbtn\" id=\"delbtn\" type=\"button\">Delete</button></div>');";
		$wp_jdt_script .= "    jQuery( '#delbtn' ).on('click', function(){";
		$wp_jdt_script .= "    		if(jQuery('td.dt-body-center input[type=\"checkbox\"]').is(':checked')){
										if (confirm('Are you sure to delete maid?')) { 
											jQuery( '#frm-maid' ).submit();
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
		$wp_jdt_script .= "    jQuery( '#example tbody' ).on( 'click', 'td.featured', function() {";
		$wp_jdt_script .= "    		 var selctedtd = jQuery(this); 
										var textinput = jQuery('<input>', {
											value: selctedtd.text(),
											type: 'text',
											blur: function() {
												if(this.value == ''){ 						  selctedtd.text(0);												
												}else{
													selctedtd.text(this.value);
												}
												jQuery.ajax({
													'url': '". site_url() ."/wp-admin/admin-ajax.php',
													type: 'POST',
													dataType: 'json',
													data: {
														'action': 'update_maid_featured_val',
														'maidId': selctedtd.closest('tr').children('td.maidids').text(),
														'maidcom': selctedtd.closest('tr').children('td.maidcommune').text(),
														'valid': selctedtd.text()
													},
													error: function (xhr, status) {
														selctedtd.text(0);		
													},
													success: function(data){
														if(data == 0){
															alert('Ordering not update, please try again!');
														}else if(data == null){
														}else if(data == 12){
															alert('Maximum 11 ordering value allowed.');
															selctedtd.text(11);
														}else{
															selctedtd.text(data);
														}
													}
												});
											},
											keyup: function(e) {
											   if (e.which === 13) textinput.blur();
											}
										}).appendTo( selctedtd.empty() ).focus();";
		$wp_jdt_script .= "    });";
		$wp_jdt_script .= "});";
		$wp_jdt_script .= "</script>";
	   echo $html;
	   echo $wp_jdt_script;
	?>	
	</form>
	</div>
</div>
<script type="text/javascript">
	jQuery( '#status_filter' ).on('change', function(){
		var value = jQuery('#status_filter').find(':selected').val();
		var table = jQuery('#example').DataTable();
		
        if (value==8 || value==9) {

        table
        .columns( 6 )
        .search(value)
        .draw();
        }
        else if(value==5 || value==4){
        	table
        .columns( 7 )
        .search(value)
        .draw();
        }else if (value==''){
        	table
        	.columns().search( '' )
			 .draw();
        }
	});
</script>