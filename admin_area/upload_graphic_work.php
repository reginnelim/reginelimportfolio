<?php
	session_start();
	require_once('db.php');
	$id = $_GET['id'];
	echo $id;

	if(isset($_POST['submit'], $_FILES['my_image'])){
		$img_name = $_FILES['my_image']['name'];
		$img_size = $_FILES['my_image']['size'];
		$tmp_name = $_FILES['my_image']['tmp_name'];
		$error = $_FILES['my_image']['error'];

		if ($error === 0) {
			if ($img_size > 9000000) {
				$em = "Sorry, your file is too large.";
				$query = array(
					'id' => $id,
					'error' => $em
					);
				$query = http_build_query($query);
				header("Location: edit_graphic_work.php?$query");
			}else {
				$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
				$img_ex_lc = strtolower($img_ex);

				$allowed_exs = array("jpg", "jpeg", "png");
				if (in_array($img_ex_lc, $allowed_exs)) {
					$new_img_name = uniqid("IMG", true).'.'.$img_ex_lc;
					$img_upload_path = 'img/'.$new_img_name;
					move_uploaded_file($tmp_name, $img_upload_path);

					//Insert into Database
					$sql="UPDATE `gallerydb` SET `pic$id`='$new_img_name'";
        			mysqli_query($conn,$sql);
        			header("Location: index.php#graphic-works");
				}else {
					$em = "You can't upload files of this type";
					$query = array(
					'id' => $id,
					'error' => $em
					);
					$query = http_build_query($query);
					header("Location: edit_graphic_work.php?$query");
				}
			}
		}else {
			$em = "unknown error occurred!";
			$query = array(
					'id' => $id,
					'error' => $em
					);
			$query = http_build_query($query);
			header("Location: edit_graphic_work.php?$query");
		}
	}
	else{
		header("Location: edit_graphic_work.phpid={$id}");
	}
	
?>