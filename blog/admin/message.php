<?php
//include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }

//show message from add / edit page
if(isset($_GET['delpost'])){ 

	$stmt = $db->prepare('DELETE FROM message WHERE ID = :id') ;
	$stmt->execute(array(':id' => $_GET['delpost']));

	header('Location: message.php?action=deleted');
	exit;
} 

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin</title>
  <link rel="stylesheet" href="../style/normalize.css">
  <link rel="stylesheet" href="../style/main.css">
  <script language="JavaScript" type="text/javascript">
  function delpost(id, title)
  {
	  if (confirm("Are you sure you want to delete '" + title + "'"))
	  {
	  	window.location.href = 'message.php?delpost=' + id;
	  }
  }
  </script>
</head>
<body>
<div id="wrapper">

	<?php include('menu.php');?>

	<?php 
	//show message from add / edit page
	if(isset($_GET['action'])){ 
		echo '<h3>Post '.$_GET['action'].'.</h3>'; 
	} 
	?>

	<table>
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Message</th>
		<th>Date</th>
		<th>Action</th>
	</tr>
	<?php
		try {

			$stmt = $db->query('SELECT ID, NAME, EMAIL, TEXT,  DATE FROM message ORDER BY ID DESC');
			while($row = $stmt->fetch()){
				
				echo '<tr>';
				echo '<td>'.$row['NAME'].'</td>';
				echo '<td>'.$row['EMAIL'].'</td>';
				echo '<td>'.$row['TEXT'].'</td>';
				echo '<td>'.date('jS M Y', strtotime($row['DATE'])).'</td>';
				?>

				<td>
					<a href="javascript:delpost('<?php echo $row['ID'];?>','<?php echo $row['DATE'];?>')">Delete</a>
				</td>
				
				<?php 
				echo '</tr>';

			}

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}
	?>
	</table>


</div>
