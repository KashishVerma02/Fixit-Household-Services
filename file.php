<html>
<form method="POST" enctype="multipart/form-data">
<lable>Select Name:</lable>
<input type="file" name="f1">
<input type="submit" name="s1">
<?php
if(isset($_POST['s1'])){
//$pic=$_POST['f1'];
$file_name=$_FILES['f1']['name'];
$conn=@mysql_connect('localhost','root','');
mysql_select_db("householdservices",$conn);
$file_tmp=$_FILES['f1']['tmp_name'];
$img=addslashes($_FILES['f1']['name']);
$imgc=addslashes(file_get_contents($_FILES['f1']['tmp_name']));
$file_size=$_FILES['f1']['size'];
$file_type=$_FILES['f1']['type']; 
//echo $imgc;
$sql= "update serviceprovider set img_text='$imgc' where providerid=3";
	mysql_query($sql,$conn);
	$dest="image/";
$t_file=$dest.basename($_FILES['f1']['name']);
	move_uploaded_file($file_tmp,$t_file);
}
?>
</form>    
</html>