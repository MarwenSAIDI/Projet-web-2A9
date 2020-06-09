  <?php
  $nom="";
  $email="";
  $sujet="";
  $tel="";
  $message="";

   $nom=$_POST["nom"];
   $email=$_POST["email"];
   $sujet=$_POST["sujet"];
   $tel=$_POST["tel"];
   $message=$_POST["message"];
   if((!empty($nom))&&(!empty($email))&&(!empty($sujet))&&(!empty($tel))&&(!empty($message)))
   { 
    require_once"connexion.php";
    $conn=se_connecter();
    $query="INSERT INTO contact (nom,email,sujet,tel,message) VALUES ('$nom','$email','$sujet',$tel,'$message')";
    $conn->exec($query);
    header("location:index.php");
 }
 

  ?> 