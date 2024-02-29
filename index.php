<?php
include_once("utils.class.php");
if (!empty($_GET)) {
if ($_GET['connection']=='echoué') {
    echo "<script>alert('Votre Login Ou Mot De Passe Incorrect');</script>";
}else if ($_GET['inscription']=='ok') {
    echo "<script>alert('Votre Compte Bien Crée');</script>";
}
else{
    echo'';
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleIndex.css">
    <!-- <link rel="stylesheet" href="assets/css/monStyle.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <title>Document</title>
</head>
<body>
    <div class="loginBox  col-10 col-md-4 m-0 my-3 pb-0">

        <div class="loginBox1 d-flex  mb- mt-0 mx-0">
            <button class="btn py-2 " id="inscription">Incription</button>
            <button class="btn py-2 " id="connecter">Se Connecter</button>
        </div>

    <div class="m-5 pl-md-5 ">

            <div id="div1" class="partieconnecter col-12  col-md-12"  style="display:block;">
                <form action="connecter.php" method="post">
                <div class="inputBox"> 
                    <input id="uname" type="text" name="login" placeholder="login"> 
                    <input id="pass" type="password" name="password" placeholder="Mot De Passe">
                 </div>
                     <input type="submit" name="" class="" value="Connecter">            
                     <!-- <a href="" class="btn">Connecter</a> -->
                <div class="mt-3 d-flex justify-content-end">
                <!-- <a href="" id="">Forget Password<br> </a> -->
                </div>
            </form>
            </div>



            <div id="div2" style="display:none; " class="loginBox3 p-0 m-0 ">
            <div class="container-fluid d-flex justifier-content-star bg-primray">
               <form action="inscription.php" method="POST">

                <input id="" type="text" class="form-control " name="nom" placeholder="Nom"> 
                <input id="" type="text" name="prenom" placeholder="Prenom"> 
                <input id="" type="text" name="cin" placeholder="Cin"> 
                <input id="" type="text" name="tel" placeholder="Telephone"> 
                <input id="" type="text" name="email" placeholder="Email"> 
                <input id="" type="password" name="mp" placeholder="Mot De Passe"> 
                <input id="" type="password" name="cmp" placeholder="Confirmer Mot De Passe">
                <div class="mt-3 d-flex justify-content-end">
                <input type="submit" name="" value="Inscrire"> 
                </div>
                </form>
                </div>
            </div>
            






        </div>
    



    </div>
    <script src="assets/js/indexLogin.js"></script>
</body>
</html>