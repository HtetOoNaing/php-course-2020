<?php
date_default_timezone_set('Asia/Yangon');
// Print current timestamp
// echo time();
// Print current date
// echo date('Y-m-d H:i:s');
// echo date('Y-m-d H:i:s',time()+60*60*24);
// echo '<br>';
// Print yesterday
// echo date('Y-F-D H:i:s',time()+ 60*60*24*7);
// https://www.php.net/manual/en/datetime.format.php
// Different format: https://www.php.net/manual/en/function.date.php

// String to timestamp
echo strtotime('+1 day 5 hours') . "<br>";
echo date('Y-m-d H:i:s',strtotime('+5 days 5 hours '));
// echo '<br>';
// Parse date: https://www.php.net/manual/en/function.date-parse.php