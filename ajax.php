<?php
$arr_file_types = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg'];
 
if (!(in_array($_FILES['file']['type'], $arr_file_types))) {
  echo "false";
  return;
}
// change gallery path to user specific
$gallery_user = 'gallery';
if (!file_exists($gallery_user)) {
  mkdir($gallery_user, 0777);
}
 
move_uploaded_file($_FILES['file']['tmp_name'], $gallery_user.'/' . $_FILES['file']['name']);
//move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . time() . '_' . $_FILES['file']['name']);

 
//echo "File uploaded successfully.";
?>
