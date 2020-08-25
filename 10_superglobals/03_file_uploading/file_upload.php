<?php
if(isset($_POST['submit'])) {
  $file = $_FILES['file'];
  echo '<pre>';
  print_r($file);
  echo '</pre>';



  $file_name = $file['name'];
  $file_size = $file['size'];
  $file_error = $file['error'];
  $file_tmp_name = $file['tmp_name'];

  $result = move_uploaded_file($file_tmp_name,'uploads/'.$file_name);
  var_dump($result);

  // $file_name_arr = explode('.',$file_name);
  // print_r($file_name_arr);
  // $file_ext = strtolower(end($file_name_arr));
  // echo '<br>';
  // echo ($file_ext);
  // echo '<br>';
  // $allowed = array('jpg','jpeg','png','svg');
  // if (in_array($file_ext,$allowed)) {
  //   if($file_error === 0) {
  //     if($file_size < 100000) {
  //       $result = move_uploaded_file($file_tmp_name,'uploads/'.$file_name);
  //       var_dump($result);
  //       if($result) {
  //         echo 'File uploaded Successfully';
  //       } else {
  //         'File uploading Fail';
  //       }
  //     } else {
  //       echo 'Your file is too big';
  //     }
      
  //   } else {
  //     echo 'There was an error uploading your file!';
  //   }
    
  // } else {
  //   echo 'You cannot upload files of this type!';
  // }




  


  // $file_name_arr = explode('.',$file_name);
  // $file_ext = strtolower(end($file_name_arr));
  // $allowed = array('jpg','jpeg','png');
  // if(in_array($file_ext,$allowed)) {
  //   if($file_error === 0) {
  //     if($file_size < 1000000) {
  //       $result = move_uploaded_file($file_tmp_name,'uploads/'.$file_name);
  //       if($result) {
  //         echo 'File uploaded successfully';
  //       }
  //     } else {
  //       echo 'Your file is too big';
  //     }
  //   } else {
  //     echo 'There was an error uploading your file!';
  //   }
  // } else {
  //   echo 'You cannot upload files of this type!';
  // }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
  <label for="my_file">
    upload image
  </label><br>
  <input type="file" name="file" id="my_file"><br>
  <button name="submit">Submit</button>
</form>
</body>
</html>
