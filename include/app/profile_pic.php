<?php
session_start();
if(isset($_POST['submit'])) {
  $errors= array();
  $file_name = $_FILES['image']['name'];
  $file_size =$_FILES['image']['size'];
  $file_tmp =$_FILES['image']['tmp_name'];
  $file_type=$_FILES['image']['type'];
  $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

  $expensions= array("jpeg","jpg","png");

  if(in_array($file_ext,$expensions)=== false){
   $errors[]="extension not allowed, please choose a JPEG or PNG file.";
 }

 if($file_size > 2097152){
   $errors[]='File size must be excately 2 MB';
 }

 if(empty($errors)==true){
  $file = "../../images/".$_SESSION['nic'];
  echo $file;
 
    unlink($file);
    move_uploaded_file($file_tmp,"../../images/".$_SESSION['nic']);
  


}else{
 print_r($errors);
}
}
?>

<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<title><div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

</div></title>
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link href="../../css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="../../css/ionicons.css" rel="stylesheet" type="text/css" />

</head>

<body>
  <table cellpadding="5" cellspacing="5">
    <tr>
     <td>

      <img src="../../images/noavatar.png" class="img-rounded" width="150" height="150">
    </td>
    <td valign="top">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">    
        <input type="hidden" name="user_id" value="00010">
        <fieldset>
         <legend> CHANGE PICTURE </legend>
         <input type="file" name="image" size="20" />
         <br />
         <input type="submit" name="submit" value="upload" />
       </fieldset>
     </form>    </td>
   </tr>
 </table>

</body>
</html>