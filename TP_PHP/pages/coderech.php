<?php
     //Déclaration de mon  Tableau de mes dix produits
     $Produits['Produit1']['Nom Produit']="Tomate";
     $Produits['Produit1']['Prix Unitaire']=1500;
     $Produits['Produit1']['Quantité']=10;
     $Produits['Produit1']['Prix Total']=$Produits['Produit1']['Prix Unitaire'] * $Produits['Produit1']['Quantité'];
    
     $Produits['Produit2']['Nom Produit']="Patate";
     $Produits['Produit2']['Prix Unitaire']=2500;
     $Produits['Produit2']['Quantité']=5;
     $Produits['Produit2']['Prix Total']=$Produits['Produit2']['Prix Unitaire'] * $Produits['Produit2']['Quantité'];



     $Produits['Produit3']['Nom Produit']="Pomme de Terre";
     $Produits['Produit3']['Prix Unitaire']=1250;
     $Produits['Produit3']['Quantité']=35;
     $Produits['Produit3']['Prix Total']=$Produits['Produit3']['Prix Unitaire'] * $Produits['Produit3']['Quantité'];
   

     
     $Produits['Produit4']['Nom Produit']="Carotte";
     $Produits['Produit4']['Prix Unitaire']=750;
     $Poduits['Produit4']['Quantité']=4;
     $Produits['Produit4']['Prix Total']=$Produits['Produit4']['Prix Unitaire'] * $Produits['Produit4']['Quantité'];
    
 
     $Produits['Produit5']['Nom Produit']="Pomme de Terre";
     $Produits['Produit5']['Prix Unitaire']=1250;
     $Poduits['Produit5']['Quantité']=35;
     $Produits['Produit5']['Prix Total']=$Produits['Produit5']['Prix Unitaire'] * $Produits['Produit5']['Quantité'];
    

 
     $Produits['Produit6']['Nom Produit']="Salade";
     $Produits['Produit6']['Prix Unitaire']=800;
     $Poduits['Produit6']['Quantité']=24;
     $Produits['Produit6']['Prix Total']=$Produits['Produit6']['Prix Unitaire'] * $Produits['Produit6']['Quantité'];
     foreach($Produits['Produit5']as $i=> $v){
         echo " <b>$i</b> = $v <br>";
     }

     echo"<hr>";
     $Produits['Produit7']['Nom Produit']="Salade";
     $Produits['Produit7']['Prix Unitaire']=250;
     $Poduits['Produit7']['Quantité']=7;
     $Produits['Produit7']['Prix Total']=$Produits['Produit7']['Prix Unitaire'] * $Produits['Produit7']['Quantité'];
     foreach($Produits['Produit5']as $i=> $v){
         echo " <b>$i</b> = $v <br>";
     }
     echo"<hr>";
     $Produits['Produit8']['Nom Produit']="Salade";
     $Produits['Produit8']['Prix Unitaire']=750;
     $Poduits['Produit8']['Quantité']=25;
     $Produits['Produit8']['Prix Total']=$Produits['Produit8']['Prix Unitaire'] * $Produits['Produit8']['Quantité'];
     foreach($Produits['Produit5']as $i=> $v){
         echo " <b>$i</b> = $v <br>";
     }

     echo"<hr>";
     $Produits['Produit9']['Nom Produit']="Salade";
     $Produits['Produit9']['Prix Unitaire']=400;
     $Poduits['Produit9']['Quantité']=20;
     $Produits['Produit9']['Prix Total']=$Produits['Produit9']['Prix Unitaire'] * $Produits['Produit9']['Quantité'];
     foreach($Produits['Produit5']as $i=> $v){
         echo " <b>$i</b> = $v <br>";
     }

     echo"<hr>";
     $Produits['Produit10']['Nom Produit']="Salade";
     $Produits['Produit10']['Prix Unitaire']=300;
     $Poduits['Produit10']['Quantité']=20;
     $Produits['Produit10']['Prix Total']=$Produits['Produit10']['Prix Unitaire'] * $Produits['Produit10']['Quantité'];
     foreach($Produits['Produit5']as $i=> $v){
         echo " <b>$i</b> = $v <br>";
     }

   
?>
