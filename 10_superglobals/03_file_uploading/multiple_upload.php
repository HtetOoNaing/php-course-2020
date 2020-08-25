<?php
if(isset($_POST['submit'])) {
  $files = $_FILES['files'];
  // echo '<pre>';
  // print_r($files);
  // echo '</pre>';

  foreach($files['name'] as $key => $name) {
    echo $key . ' => '. $name .'<br>';
    $tmp_name = $files['tmp_name'][$key];
    echo $tmp_name . '<br>';
    $result = move_uploaded_file($tmp_name,'uploads/'.$name);
  }

  // if($result) {
  //   echo 'Successfully uploaded';
  // } else {
  //   echo 'Files uploading Fail';
  // }

  // echo $result ? 'Successfully uploaded' : 'Files uploading Fail';

    // foreach($_FILES['files']['tmp_name'] as $key => $img_tmp_name) {
    //     // echo $key.'<br>';
    //     // echo $img_tmp_name.'<br>';
    //     $img_name = $_FILES['files']['name'][$key];
    //     // echo $img_name.'<br>';
    //     $result = move_uploaded_file($img_tmp_name,'uploads/'.$img_name);
    // }
    // if ($result) {
    //     echo "Images uploaded successfully";
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
  <input type="file" name="files[]" multiple><br>
  <button name="submit">Submit</button>
</form>
</body>
</html>
