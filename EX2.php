<?php 

    $fichier = fopen("commande.txt", "r");
    if(!$fichier){ 
        echo "could not open the file" ; 
    } 
    else { 
        
        while(!feof($fichier)){

            list($numero,$matricule,$date,$produit,$quantite,$prix) = explode(" | ",fgets($fichier,1024));
            $cmd = array(
                "Numero" => $numero, 
                "Matricule" => $matricule,
                "Date" => $date,
                "Produit" => $produit,
                "Quantite" => $quantite,
                "Prix" => $prix,
            );
            echo $cmd["Numero"]."<br>";
            echo $cmd["Matricule"]."<br>";
            echo $cmd["Date"]."<br>";
            echo $cmd["Produit"]."<br>";
            echo $cmd["Quantite"]."<br>";
            echo $cmd["Prix"]."<br>";

        }

        fclose ($fichier);
    } 


?>
