  <?php
  $nom="";
  $email="";
  $nomEvent="";
  $tel="";


   $nom=$_POST["nom"];
   $email=$_POST["email"];
   $nomEvent=$_POST["nomEvent"];
   $tel=$_POST["tel"];
   if((!empty($nom))&&(!empty($email))&&(!empty($nomEvent))&&(!empty($tel)))
   { 
    require_once"connexion.php";
    $conn=se_connecter();
    $query="INSERT INTO participant (nom,email,nomEvent,tel) VALUES ('$nom','$email','$nomEvent',$tel)";
    $conn->exec($query);
    header("location:event.php");
 }
 

  ?> 