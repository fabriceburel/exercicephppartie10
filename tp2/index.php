<!DOCTYPE html>
<html>
    <head>
        <title>TP1</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body class="container">
        <div class="row"><h1 class="col-lg-offset-3">Formulaire d'inscirption E2N</h1></div>
        <?php
        /* On vérifie ici que l'ensemble des input recois bien la forme qui est attendu
         * 
         * On vérifie en premier que le mail est bien sous forme de mail 
         */

        //Vérification du format du prénom saisi
        if (isset($_POST['firstname']) && preg_match('/((^[éèàëêa-z\']{2,10}[-][éèàëêa-z\']{2,10}$)|(^[éèàëêa-z\']{2,10}$))/i', $_POST['firstname']))
        {
            $textFirstname = '';
            $checkFirstname = true;
        }
        else if (!isset($_POST['firstname']))
        {
            $textFirstname = '';
            $checkFirstname = false;
        }
        else
        {
            $textFirstname = 'Ce n\'est pas prénom, recommencez !';
            $checkFirstname = false;
        }
        if (isset($_POST['name']) && preg_match('/((^[éèàëêa-z\']{2,10}[-][éèàëêa-z\']{2,10}$)|(^[éèàëêa-z\']{2,10}$))/i', $_POST['name']))
        {
            $textName = '';
            $checkName = true;
        }
        else if (!isset($_POST['name']))
        {
            $textName = '';
            $checkName = false;
        }
        else
        {
            $textName = 'Ce n\'est pas Nom, recommencez !';
            $checkName = false;
        }
        /* vérification de la saisie correct d'un texte pour societé
         * \w pour autorisé tout les caractère alphanumérique, \s pour autoriser les espaces
         * On autorise également les accents les points et les virgules
         * et entre 30 et 200 caractères
         * avec /i on ne se préocuppe pas de la cast.
         */
        if (isset($_POST['society']) && preg_match('/^[\wéàèëêöùôâ\']{1,15}([\s-]{0,3}[\wéàèëêöôùâ.,\']{1,25}){1,50}$/i', $_POST['society']))
        {
            $textSociety = '';
            $checkSociety = true;
        }
        else if (!isset($_POST['society']))
        {
            $textSociety = '';
            $checkSociety = false;
        }
        else
        {
            $textSociety = 'Le  nom de la société n\'est pas conforme au format attendu, recommencez !';
            $checkSociety = false;
        }
        if (isset($_POST['age']) && preg_match('/^[\d]{1,4}$/', $_POST['age']) && $_POST['age'] >=0)
        {
            $textAge = '';
            $checkAge = true;
        }
        else if (!isset($_POST['age']))
        {
            $textAge = '';
            $checkAge = false;
        }
        else
        {
            $textAge = 'L\'age n\'est pas conforme, recommencez !';
            $checkAge = false;
        }
        ?>
        <div class="container">
            <div class="row"><h2 class="col-lg-offset-3">Saisie de vos données</h2></div>
            <form class="container" action="index.php" method="post">
                <div class="row"><label class="col-lg-offset-2 col-lg-2"><h3>Civilité : </h3></label></div><div class="row"><select class="col-lg-offset-2 col-lg-3" name="civility" required>
                        <option value="Madame" <?php echo (isset($_POST['civility']) && $_POST['civility'] == 'Madame') ? ' selected' : ''; ?>>Madame</option>
                        <option value="Monsieur" <?php echo (isset($_POST['civility']) && $_POST['civility'] == 'Monsieur') ? ' selected' : ''; ?>>Monsieur</option>
                    </select></div>
                <div class="row"><label class="col-lg-offset-2 col-lg-2"><h3>Nom : </h3></label></div><div class="row"><input class="col-lg-offset-2 col-lg-3" cols="100" type="text" name="name" required value="<?php echo (isset($_POST['name'])) ? $_POST['name'] : ''; ?>"><p class="textError"><?php echo $textName; ?></p></div>
                <div class="row"><label class="col-lg-offset-2 col-lg-2"><h3>Prénom : </h3></label></div><div class="row"><input class="col-lg-offset-2 col-lg-3" type="text" name="firstname" required value="<?php echo (isset($_POST['firstname'])) ? $_POST['firstname'] : ''; ?>" ><p class="textError"><?php echo $textFirstname; ?></p></div>
                <div class="row"><label class="col-lg-offset-2 col-lg-1"><h3>Age :</h3></label></div><div class="row"><input class="col-lg-offset-2 col-lg-1" cols="100" type="number" name="age" min="0" value="<?php echo (isset($_POST['age'])) ? $_POST['age'] : '0'; ?>"><p class="textError"><?php echo $textAge; ?></p></div>
                <div class="row"><label class="col-lg-offset-2 col-lg-2"><h3>Société : </h3></label></div><div class="row"><input class="col-lg-offset-2 col-lg-4" cols="100" type="text" name="society" required value="<?php echo (isset($_POST['society'])) ? $_POST['society'] : ''; ?>"><p class="textError"><?php echo $textSociety; ?></p></div>
                <button  class="row col-lg-offset-3" type = "submit">Valider</button>
            </form>
        </div>
        <?php
        if (!empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['age'] && $checkAge && $checkFirstname && $checkName && $checkSociety))
        {
            ?>
            <div id="summaryID">
                <div class="row"><h2 class="col-lg-offset-3 col-lg-4"> Recapitulatif des informations</h2></div>
                <div class="row"><p class="col-lg-offset-2 col-lg-2"><span class="summary">Civilité : </span><?php echo htmlspecialchars($_POST['civility']); ?></p></div>
                <div class="row"><p class="col-lg-offset-2 col-lg-2"><span class="summary name">Nom : </span><span id="name"><?php echo htmlspecialchars($_POST['name']); ?></span></p></div>
                <div class="row"><p class="col-lg-offset-2 col-lg-5"><span class="summary firstname">Prénom : </span><span id="firstname"><?php echo htmlspecialchars($_POST['firstname']); ?></span></p></div>
                <div class="row"><p class="col-lg-offset-2 col-lg-2"><span class="summary">Age : </span><?php
                        echo htmlspecialchars($_POST['age']);
                        echo $_POST['age'] <= 1 ? ' An' : ' Ans';
                        ?></p></div>
                <div class="row"><p class="col-lg-offset-2 col-lg-5"><span class="summary">Société : </span><span id="society"><?php echo htmlspecialchars($_POST['society']); ?></span></p></div>
            </div>
            <?php
        }
        ?>
        <a class="col-lg-offset-3" href = "../index.php" title = "Accueil"><input type = "button" value = "Accueil"/></a>
    </body>
</html>
