<?php
// Magic constants
// echo __DIR__.'<br>';
// echo __FILE__.'<br>';

// Create directory
// mkdir('test');

// Rename directory
// rename('test','my_folder');

// Delete directory
// rmdir('my_folder');

// Read files and folders inside directory
// $files = scandir('../');
// echo '<pre>';
// print_r($files);
// echo '</pre>';

// file_get_contents, file_put_contents
$content = file_get_contents('test.php');
echo $content .'<br>';
// file_put_contents('lorem.txt',$content.PHP_EOL.'This is  new my file');
// echo file_get_contents('lorem.txt');


// $handle = fopen('ßlorem.txt','a');

// $filesize = filesize('lorem.txt');
// var_dump($filesize);
// $result = fread($handle,$filesize);
// echo $result;

// $result = fwrite($handle,' This is another one');
// var_dump($result);

// fclose($handle);



// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filesize
// file

