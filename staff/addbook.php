<?php
$con=mysqli_connect("localhost","root",'','library_thdcihet');
$ttl=mysqli_escape_string($con,$_POST['title']);
$id=mysqli_escape_string($con,$_POST['id']);
$author=mysqli_escape_string($con,$_POST['author']);
$descp=mysqli_escape_string($con,$_POST['descp']);
$noc=mysqli_escape_string($con,$_POST['noc']);
$loc=mysqli_escape_string($con,$_POST['loc']);
$file_name = $_POST['id'].'.jpg';
$file = $_FILES['thmbnl'];
$file_type = $file ['type'];
$file_ext=$file['name'];
$file_ext=substr(strrchr($file_ext,'.'),1);
if($file_ext=="jpg")
{
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];
$str='../thumbnails/'.$file_name;
move_uploaded_file($_FILES['thmbnl']['tmp_name'], "{$str}");
$result=mysqli_query($con,"INSERT INTO books (id,title,author,description,no_of_copies,loc) VALUES ('{$id}','{$ttl}','{$author}','{$descp}','{$noc}','{$loc}')");
}
header("location:managebooks.php");
?>