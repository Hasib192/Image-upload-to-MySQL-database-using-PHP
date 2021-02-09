<?php
	include "db_config.php";
?>
<!Doctype html>
<html>
	<head>
	</head>
	<body>
		<?php
		
		$query = "SELECT * FROM images";
		$result = mysqli_query($conn, $query);
	
		if(!$result){
			echo $result . "<br/>" . mysqli_error($conn);
		}
		
		if(mysqli_num_rows($result)>0){
			while($row = mysqli_fetch_array($result)){
		?>
			<img src="<?php echo $row['image']; ?>" height="200px" width="200px" />
		<?php
			}
		} else {
		?>
			<h3>No image Found!</h3>
		<?php
		}
		?>
	</body>
</html>