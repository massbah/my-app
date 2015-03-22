<?php 
session_start();

if($_FILES)
{

  $destination="../uploads/".$_FILES['uploadfile']['name'];

  $name=$_FILES['uploadfile']['tmp_name'];
  move_uploaded_file($name, $destination);
  echo $destination;
    //echo $destination;
}
else
{
echo "Error";
}
?>