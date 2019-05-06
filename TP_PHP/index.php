<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Authentification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Tangerine:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette|Raleway:800|Roboto" rel="stylesheet">
    <!-- RECHERCHE MARIMAR -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
    <link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="icon"       type="icon"     href="images/favicone.ico">
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <?php
                   
                    ?>
                </div>
                <div class="col-4"></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <?php   
                        //Déclaration de mon 2em Tableau
                        $User['user1']['Prénom']="Mor SECK";
                        $User['user1']['Login']="morseck00";
                        $User['user1']['MotdePasse']="123456";
                       
                        $User['user2']['Prénom']="Tamara BA";
                        $User['user2']['Login']="tamara.ba14@gmail.com";
                        $User['user2']['MotdePasse']="assthioune01";

                        $User['user3']['Prénom']="Yacine DIOP";
                        $User['user3']['Login']="yacinediop00";
                        $User['user3']['MotdePasse']="123456";

                        $User['user4']['Prénom']="Ousmane NDIAYE";
                        $User['user4']['Login']="ousmanendiaye00";
                        $User['user4']['MotdePasse']="123456";

                        $User['user5']['Prénom']="Khady SECK";
                        $User['user5']['Login']="khadyseck00";
                        $User['user5']['MotdePasse']="123456";

                       

                     /*   foreach($User['user1']as $i=> $v){
                            
                            echo " <b>$i</b> = $v";
                           
                        }
                        echo('<br>');
                        foreach($User['user2']as $i=> $v){
                            
                            echo " <b>$i</b> = $v";
                           
                        }
                        echo('<br>');
                        foreach($User['user3']as $i=> $v){
                            
                            echo " <b>$i</b> = $v";
                           
                        }
                        echo('<br>');
                        foreach($User['user4']as $i=> $v){
                            
                            echo " <b>$i</b> = $v";
                           
                        }
                        echo('<br>');
                        foreach($User['user5']as $i=> $v){
                            
                            echo " <b>$i</b> = $v";
                           
                        }
                        */
                    ?>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-12"><marquee behavior="alternate"><h1>Authentification</h1></marquee><div>
            </div>

		    <div class="box">
			    <h1>Authentification</h1>
			    <div class="inputBox">
				    <input type="text" name="login" required="" class="form-control">
				    <label>Login</label>
			    </div>
			    <div class="inputBox">
				<input type="password" name="password" required="">
				<label>Mot de Passe</label>
			    </div>
			    <input class="form-control btn btn-primary"" type="Submit" value="Se Connecter" name="con">
            </div>
	    </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['con'])){
    $log=$_POST['login'];
    $mdp=$_POST['password'];
        if (($User['user1']['Login']==$log && $User['user1']['MotdePasse']==$mdp)|| 
            ($User['user2']['Login']==$log && $User['user2']['MotdePasse']==$mdp)|| 
            ($User['user3']['Login']==$log && $User['user3']['MotdePasse']==$mdp)|| 
            ($User['user4']['Login']==$log && $User['user4']['MotdePasse']==$mdp)|| 
            ($User['user5']['Login']==$log && $User['user5']['MotdePasse']==$mdp)){
            header('location:pages/accueil.php');
   }else{
       $erreur='Vos identifiants ne sont pas dans le tableau';
   }
  
}
?>

