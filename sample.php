<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Sample</title>

<script type="text/javascript" src="css/jquery-1.10.1.min.js"></script>

    <style type="text/css" title="currentStyle">
			@import "css/demo_page.css";
			@import "css/demo_table_jui.css";
			@import "css/jquery-ui-1.8.4.custom.css";
		</style>
 <script src="js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			jQuery(document).ready(function() {
				oTable = jQuery('#tbl').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
								} );
				});		
		</script> 

</head>

<br/><br/>
				<!-- <div class='demo_jui'> -->
					<table cellpadding='0' cellspacing='0' border='0' class='display' id='tbl' class='jtable'>
					<thead>
						<tr>
							<th>ID</th><th>First Name</th><th>Last Name</th><th>Contact</th><th>Email</th><th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><center>".$row['id']."</center></td>
							<td>".$row['fname']."</td>
							<td>".$row['lname']."</td>
							<td>".$row['contact']."</td>
							<td>".$row['email']."</td>
							<td><center><a class='fancybox fancybox.ajax' href='addstudent.php?ppid=".$row['id']."' onclick='return update()'><img src = 'images/edit-icon.png' height='30' width='30' alt = 'edit' title = 'edit'/></a><a href='delete.php?pid=".$row['id']."' onclick='return bura()' ><img src = 'images/edit_delete.png' height='30' width='30' alt = 'delete' title = 'delete'/></a></center></td>
						</tr>
					</tbody>
		
					</table>
				<!--  </div> -->
			



    <?php
     
    function limit_words($string, $word_limit)
    {
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
    }
     
     
    # Example Usage
     
    $content = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utsadasdas enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
     
    echo limit_words($content,20);
     
     
    ?>




</body>
</html>