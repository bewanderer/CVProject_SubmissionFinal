<?php

 $conn = mysqli_connect('localhost', 'root', '', 'mydatabase');

 if(!$conn)
 {
 	echo 'Connection error: ';
 }
 else {
  echo 'Connected';
}
   
?>