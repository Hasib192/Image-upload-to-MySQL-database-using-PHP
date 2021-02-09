<?php
	include "db_config.php";
?>

<!Doctype html>
<html>
	<head>
	</head>
	<body>
		
		<?php
			if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST" ){
				$image = $_FILES["image"]["name"]; //getting the image name from client machine
				/* 
					###Set image name with current time###
					$imageFileType = strtolower(pathinfo($image,PATHINFO_EXTENSION));
					$randomName = "IMG_" . date("his") . "." . $imageFileType; 
				*/
				$tempName = $_FILES["image"]["tmp_name"]; //temporary file name of the file on the server.
				$imageName = $image; //set the the image name with current name
				$targetDirectory = "upload/" . $imageName; //declaring the folder in which the image will be store
				move_uploaded_file($tempName, $targetDirectory); //move the image in that folder

				$query = "INSERT INTO images(image) VALUES ('$targetDirectory')";
				$result = mysqli_query($conn, $query);

				if(!$result){
					echo $result . "<br/>" . mysqli_error($conn);
				} else {
					echo "Image inserted into database<br />";
				}
			}
		?>
		
		<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
			<label>Select Image File:</label>
			<input type="file" name="image">
			<input type="submit" name="submit" value="Upload">
		</form>
	</body>
</html>