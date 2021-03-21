<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href= "../media/css/accueil.css">
    <link type="text/css" rel="stylesheet" href= "../media/css/nav.css">
    <link type="text/css" rel="stylesheet" href= "../media/css/footer.css">
    
    <title>Accueil</title>
</head>

<body>
    <?php include('../vues/nav.php');?>

    <section class= "container1">
        <h1>NOS TENDANCES</h1>
        <hr/>

        <div class= "container_gallery">
            <div class="container_image">
                <div class="container_image1">
                    <img class="car1" src="https://cdn.pixabay.com/photo/2016/12/07/21/50/car-1890494_1280.jpg" alt="test1">
                </div>

                <div class="container_image2">
                    <img class="car2" src="https://cdn.pixabay.com/photo/2016/12/07/21/50/car-1890494_1280.jpg" alt="test2">
                </div>

                <div class="container_image3">
                    <img class="car3" src="https://cdn.pixabay.com/photo/2016/12/07/21/50/car-1890494_1280.jpg" alt="test3">
                </div>
            </div>    
        </div>
    </section>
    
    <section class= "container2">
        <h2>NOS SERVICES</h2>
        <hr/>   
        <div class= "container_service">
            <div class="container_type">
                <div class="container_type1">
                    <img class="type1" src="../media/images/reparation.png" alt="test1">
                    <div class="para_serv">
                        <span class="title_serv">SERVICE 1 :</span>
                        <p class="serv">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse volutpat semper interdum. 
                        Morbi consectetur nibh arcu, auctor eleifend justo porttitor ac. </p>
                    </div>
                </div>

                <div class="container_type2">
                    <img class="type2" src="../media/images/lavage.png" alt="test2">
                    <div class="para_serv">
                        <span class="title_serv">SERVICE 2 :</span>
                        <p class="serv">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse volutpat semper interdum. 
                        Morbi consectetur nibh arcu, auctor eleifend justo porttitor ac. </p>
                    </div>
                </div>

                <div class="container_type3">
                    <img class="type3" src="../media/images/vente.png" alt="test3">
                    <div class="para_serv">
                        <span class="title_serv">SERVICE 3 :</span>
                        <p class="serv">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse volutpat semper interdum. 
                        Morbi consectetur nibh arcu, auctor eleifend justo porttitor ac. </p>
                    </div>
                </div>
            </div>    
        </div>
    </section>

    <section class= "container3">
        <div class= "container_coord">
            <hr/>
            <h3>NOS COORDONNÉES</h3>
            <div class= "coord">
                <div class="adresse">
                    <img class="position" src="../media/images/position.png" alt="test3">
                    <span class="contact">10 rue de Chaumont, 75019 Paris </span>
                </div>
            
                <div class="tel">
                    <img class="call" src="../media/images/call.png" alt="test3">
                    <span class="contact">01 42 54 85 43</span>
                </div>

                <div class="email">
                    <img class="mail" src="../media/images/mail.png" alt="test3">
                    <span class="contact_mail">personne@mail.com</span>
                </div>
            </div>
        </div>
    </section>

    <?php include('../vues/foot.php');?>
</body>
</html>