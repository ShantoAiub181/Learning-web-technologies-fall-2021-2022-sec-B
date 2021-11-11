<?php
	$title= "display";
	include('header.php');
	
?>

	<div id="page_title">
		<h1>User List</h1>
	</div>

	

	<div id="main_content">
		<table border="1">
			<tr>
				
				<td>NAME</td>
				<td>PROFIT</td>
				<td></td>
				
			</tr>
			<tr>
				
				<td>Samsung</td>
				<td>5000</td>
				<td>
					<a href="edit.php?id=1">edit</a> |
					<a href="delete.php?id=1">delete</a>
				</td>
			</tr>
			<tr>
				
				<td>Nokia</td>
				<td>1500</td>
				<td>
					<a href="edit.php?id=2">edit</a> |
					<a href="delete.php?id=2">delete</a>
				</td>
			</tr>
			<tr>
				
				<td>Xiaomi</td>
				<td>3300</td>
				<td>
					<a href="edit.php?id=3">edit</a> |
					<a href="delete.php?id=3">delete</a>
				</td>
			</tr>
		</table>
	</div>

<?php include('footer.php'); ?>