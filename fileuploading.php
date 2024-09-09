<?php
$servername="localhost";
$username="root";
$password="";
$db="fp";
$con=mysqli_connect($servername,$username,$password,$db);
if(!$con){
    die("connection failed".mysqli_connect_error());
}
if(isset($_FILES["files"])){
    $name=$_FILES["files"]["name"];
    $tmpname=$_FILES["files"]["tmp_name"];
    $type=$_FILES["files"]["type"];
    $size=$_FILES["files"]["size"];
    $path=$_FILES["files"]["full_path"];
    $upload=move_uploaded_file($tmpname, "images/" .$name);
    if($upload){
        $sqlinsert="INSERT INTO `file`( `name`, `tmpname`, `type`, `size`, `path`) VALUES ( '$name,' $tmpname',' $type',' $size',' $path')";
    }
      $res=mysqli_query($con,$sqlinsert);
      if($res){
        echo"uploaded";
      }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="fileuploading.php" method="POST" enctype="multipart/form-data">
        <label for="fp">FILE UPLOADING</label>
        <input type="file" name="files" id="fp">
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>