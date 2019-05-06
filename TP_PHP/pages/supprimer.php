
<?php
    $Clé_USB_16_GB=5;
    $Cartouche=6;
    $ecran_15=10;
    $Papier=2000;
    $Disque=25000;
    $clavierPc=15000;
    $Chargeur=10000;
    $sacordi=12000;
    $souris=10000;
    $encre=5000;
    $produit=array(
        array('Clé USB 16 GB' ,8000, $Clé_USB_16_GB, $Clé_USB_16_GB*8000),
        array('Cartouche Imprimante' ,10000, $Cartouche ,$Cartouche*10000),
        array("écran 15 pouce" , 35000, $ecran_15, $ecran_15*35000) ,
        array('Papier RAM' ,$Papier, 80, $Papier*80) ,
        array('Disque Dur 500GB' , $Disque, 3, $Disque*3) ,
        array('Clavier PC' , $clavierPc, 6, $clavierPc*6) ,
        array('Chargeur PC' ,$Chargeur, 50,$Chargeur*50) ,
        array('Sac Ordinateur' ,$sacordi, 8,$sacordi*8) ,
        array('Souris Sans fil ' ,$souris, 10, $souris*5) ,
        array('Encre Imprimante' ,$encre, 10, $encre*7) ,    
    );
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="icon"       type="icon"     href="../images/favicone.ico">
</head>
<body>
    <form action="supprimer.php" method="POST">  
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-collapse">
                 <a class="navbar-brand" href="#">APPLICATION-PHP</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="accueil.php">Liste Produits<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="recherche.php">Rechercher Produit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ajouter.php">Ajouter Produit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="modifier.php">Modifier Produit</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="supprimer.php">Supprimer Produit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Se Deconnecter</a>
                        </li>
                    </ul>
                </div>
            </nav >
        </div>
    <div class= "container">
        <br>
         <br>
        <div class= "row">
            <div class= "col-lg-3"></div>
            <div class= "col-lg-6"><h1>SUPPRIMER UN PRODUIT</h1></div>
            <div class= "col-lg-3"></div>
        </div>
        <br>
        <br>
        <div class= "row">
            <div class= "col-lg-3"> </div>
                <div class= "col-lg-5">
                    <label>Entrer le Nom du Produit à Supprimer: </label> 
                    <input type= "text" class="form-control" name="supprimer">

                    
                </div> <br>
                <div class= "col-lg-4" ><br>
                    <input  type="submit" class="btn btn-primary btnrech" name="sup" value= "Supprimer">
                </div> 
            </div>
        <br>
        <br>
        <div class= "row">
            <div class= "col-lg-1"></div>
            <div class= "col-lg-10">
            <?php
                echo'
                    <table class="table">
                        <tr>
                             <thead class="bg-success colortitre">
                                <th class="center" scope="col-lg-3">Nom Produit</th>
                                <th class="center" scope="col-lg-3">Prix Unitaire  / Fcfa</th>
                                <th class="center" scope="col-lg-3">Quantité</th>
                                <th class="center" scope="col-lg-3">Montant / Fcfa</th>
                        </tr>
                            </thead>
                    ';   
                      
                    if(isset($_POST['sup'])){
                        $sup=$_POST['supprimer'];

                        for($ligne=0;$ligne<=10;$ligne++){
                            echo"<tr>";
                            for ($col=0;$col<=10;$col++){
                                if($sup==$produit[$ligne][$col]){
                                     unset($produit[$ligne]);

                                     // echo"<td".$produit[$ligne][$col]."</td>";
                                }else{
                                     echo"<td class='center bord'>".$produit[$ligne][$col]."</td>";
                                }
                            }
                             echo"</tr>";
                        }
                    }
            
                

		          
                  
                ?>
            </div>
            <div class= "col-lg-1"></div>
        </div>
    </form>
</body>
</html>
 <?php
 /* if(isset($_POST["supprimer"])){
                        $sup=$_POST['supprimer'];
                        for($ligne=0;$ligne <=10;$ligne++){
                            echo"<tr>";
                            for($col=0;$col <=10;$col++){
                                $key0 = array_search($sup, $array);
                                
                                // echo ' <td>'. $produit[$ligne][$col] .'</td> <br>' ;
                                 echo ' <td>'. $key0.'</td>' ;
                                
                            }

                          
                            echo"</tr>";
                     //   }
                   // }
                    */ 

                    ?>