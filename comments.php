<?php 

if(isset($_POST['commentSubmit'])) {

	$uid = $_POST['uid'];
	$date = $_POST['date'];
	$message = $_POST['message'];
}
    require_once"connexion.php";
    $conn=se_connecter();
    $query="INSERT INTO `comments` (uid, date, message ) VALUES ('$uid','$date','$message ')";
    $conn->exec($query);

    header("location:Blog.php");




                     
                          

?>