<div class="content_div"> 
	<h2 class="page_heading"><?php echo $page_title;?></h2>
	<h3><?php echo "Notification Send list (" . $files_list_count[0]['num'] . ")"; ?></h3>
	 <form name="cate_form" id="cate_form" class="cate_form" method="post">
		<select name="file_category" id="file_category">
		<option selected="selected" value="all">All Category</option>
		<?php 
		$file_count_cate = 1;
		foreach($cate_list as $cate){ ?>

			<option <?php if($_POST['file_category'] == $cate['id']) { ?> selected="selected" <?php } ?> value="<?php echo $cate['id']; ?>"><?php echo $cate['category_name']; ?></option>
		<?php 
		$file_count_cate++;
		} ?>
		</select>
	</form>
	<table width="900px" border="0" cellspacing="0" cellpadding="10" align="center" class="tble" id="userstable">
		<thead class="title">
			<tr>
				<th><strong><?php echo SNO; ?></strong></th>
				<th><strong>Sender</strong></th>
				<th><strong>Receiver</strong></th>
				<th><strong>File Name</strong></th>
				<th><strong>Send By</strong></th>
				<th><strong>Date</strong></th>
			</tr>	
		</thead>
		<tbody>
			<?php 
			$file_count = 1;
			foreach($files_list as $file){ ?>
			<tr id="">
				<td><?php echo $file_count; ?></td>
				<td><?php echo $file['sender']; ?></td>
				<td><?php echo $file['receiver']; ?></td>
				<td><?php echo $file['file_name']; ?></td>
				<td><?php echo $file['sending_method']; ?></td>
				<td><?php echo date('m/d/Y', strtotime($file['created_date'])); ?></td>
			</tr>
			<?php 
			$file_count++;
			} ?>
		</tbody>
</table>
</div>
<link rel="stylesheet" href="libs/data-tables/jquery.dataTables.css" type="text/css"> 

<script type="text/javascript" src="libs/data-tables/jquery.dataTables.js"></script> 
<script type="text/javascript" src="js/jquery-ui.js"></script>
 <script type="text/javascript">
$(document).ready(function () {
	//jQuery.noConflict();
	$('#userstable').dataTable({
		"paging":   true,
        "info":     true,
		"searching": true,
		"aLengthMenu": [[10, 20, 50], [10, 20, 50]]
	});
	$("#file_category").on("change", function() {
    $(".cate_form").submit();
    });
}); 
</script>
</div>