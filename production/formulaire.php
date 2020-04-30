<?php

include "produitC.php";
include "produit.php";
?>

<html>

<head>
    <title>Ajouter produit</title>
</head>

<body>

    <script type="text/javascript">
        function test() {

            if (document.myform.nom.value.length == 0) {


                alert("veuillez remplir le champ");

            }

            if (document.myform.idproduit.value.length == 0) {


                alert("veuillez remplir le champ");

            }

        }
    </script>
    <fieldset>

        <legend>Ajouter produit</legend>

        <form method="post" name="myform" action=ajoutproduit.php>
            <table>

                <tr>
                    <td>Id produit :</td>
                    <td><input type="text" name="idproduit"></td>

                </tr>

                <tr>
                    <td>nomproduit :</td>
                    <td><input type="text" name="nomproduit"></td>

                </tr>
                <tr>
                    <td>categorieproduit:</td>
                    <td><input type="text" name="categorieproduit"></td>

                </tr>

                <tr>
                    <td>prixproduit :</td>
                    <td><input type="text" name="prixproduit"></td>

                </tr>

                <tr>
                    <td>marqueproduit :</td>
                    <td><input type="text" name="marqueproduit"></td>
                </tr>

                <tr>
                        <td>quantiteproduit:</td>
                        <td><input type="text" name="quantiteproduit"></td>
                </tr>
                <tr>
                        <td>code:</td>
                        <td><input type="text" name="code"></td>
                </tr>

                



                <tr>
                    <td> </td>
                    <td><input type="submit" name="ajouter" value="ajouter" onclick="test()"></td>

                </tr>


            </table>
        </form>
        




    </fieldset>









</body>

</html>

