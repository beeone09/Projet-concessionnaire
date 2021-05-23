<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../media/css/identification.css">
    <title>Document</title>
</head>
<body>
    <?php include('../vues/nav.php');?>

    <section class="container_cnx">
        <h1 class="titre1_cnx">Se connecter</h1>
        <h4 class="titre2_cnx">Veuillez vous identifier ou vous inscrire</h4>

        <input type='checkbox' id='form-switch'>
            <form id='login-form' action="" method=''>
                <input name="usr" type="text" placeholder="Username" required>
                <input name="pwd" type="password" placeholder="Password" required>
                <button name='submit' type='submit'>Se connecter</button>
                <label for="form-switch"><span>S'inscrire</span></label>
            </form>

            <form id='register-form' action="" method=''>
                <input name="usr" type="text" placeholder="Username" required>
                <input name="mail" type="email" placeholder="Email" required>
                <input name="pwd" type="password" placeholder="Password" required>
                <input name="repwd" type="password" placeholder="Re password" required>

                <button type='submit'>S'inscrire</button>
                <label for="form-switch">Se connecter</label>
            </form>
    </section>

    <?php include('../vues/foot.php');?>
</body>
</html>