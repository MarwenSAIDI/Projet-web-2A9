
<?php
include 'crud.php';
require_once("entites 1.2/Livraison.php");
require_once("entites 1.2/Livraison_F.php");
require 'mail/phpmailer/PHPMailerAutoload.php';
require"ShoppingCart.php";
$id = rand(100,999).date('Y:m:d:H:i:s');


$shoppingCart = new ShoppingCart();
$member_id = 2;
$cartItem = $shoppingCart->getMemberCartItem($member_id);
global  $item_quantity;
global  $item_price;
    if (! empty($cartItem)) {
        foreach ($cartItem as $item) {
            $item_quantity = $item_quantity + $item["quantity"];
            $item_price = $item_price + ($item["prixproduit"] * $item["quantity"]);
        }
    }else {$item_quantity = 0;
    $item_price = 0;}

    foreach ($cartItem as $item) {

            $item_quantity = $item_quantity + $item["quantity"];
            $item_prices = $item_price + ($item["prixproduit"] * $item["quantity"]);
        }

if (isset($_POST['c_cin']) and isset($_POST['c_address']) and isset($_POST['c_email_address']) and isset($_POST['c_ville']) and isset($_POST['c_region']) and isset($_POST['c_post']) and isset($_POST['c_order_notes']) ){
$commande =new commande($id,$_POST['c_cin'],$_POST['c_address'],$_POST['c_email_address'] ,$_POST['c_ville'],$_POST['c_region'],$_POST['c_post'], $_POST['c_order_notes'],$item_prices );
$liv = new livraison($id,'Ahmed',$_POST['c_email_address'],$_POST['payement'],'E.C');
$liv_f = new livraisonF();
$liv_f->ajout_L($liv);
$new_command =new crud();
$new_command->insert($commande);






////////mailing//////////
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';



$mail->Username='care.point.tn1@gmail.com';
$mail->Password='carepoint753951';

$mail->setFrom('carepoint555@gmail.com');
$mail->addAddress($_POST['c_email_address']);


$mail->isHTML(true);
$mail->Subject='Commande';
$mail->Body='<h1 align=center>Votre Commande a été reçue et doit être confirmée.</h1> <br> <h3 align=center> Merci d avoir choisi Carepoint </h3> <br>';

/*if (!$mail->send())
	{echo "message could not be sent";}
else{header('location:thankyou.html');}*/}
?>