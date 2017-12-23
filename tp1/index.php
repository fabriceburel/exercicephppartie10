<?php
session_start();
?>
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
        include 'checkpost.php';
        if ($checkBirthday && $checkTown && $checkPostalCode && $checkStreet && $checkDegree && $checkExperience && $checkHack && $checkMail && $checkPoleEmploi && $checkSuperHero && $checkUrl && $checkFirstname && $checkName && $checkPhone && !empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['birthday']) && !empty($_POST['country']) && !empty($_POST['nationality']) && !empty($_POST['street']) && !empty($_POST['postalCode']) && !empty($_POST['town']) && !empty($_POST['mail']) && !empty($_POST['phone']) && !empty($_POST['degree']) && !empty($_POST['poleEmploi']) && (!empty($_POST['badge']) && $_POST['badge'] >= 0) && !empty($_POST['linkCodeAcademy']) && !empty($_POST['superHero']) && !empty($_POST['hack']) && !empty($_POST['experience']))
        {
            //permet de sauvegarder les valeurs saisis par l'utilisateur lors du clique sur le bouton envoyer lorsque le formulaire est complet
            $_SESSION['name'] = htmlspecialchars($_POST['name']);
            $_SESSION['firstname'] = htmlspecialchars($_POST['firstname']);
            $_SESSION['birthday'] = htmlspecialchars($_POST['birthday']);
            $_SESSION['country'] = htmlspecialchars($_POST['country']);
            $_SESSION['nationality'] = htmlspecialchars($_POST['nationality']);
            $_SESSION['street'] = htmlspecialchars($_POST['street']);
            $_SESSION['postalCode'] = htmlspecialchars($_POST['postalCode']);
            $_SESSION['town'] = htmlspecialchars($_POST['town']);
            $_SESSION['mail'] = htmlspecialchars($_POST['mail']);
            $_SESSION['phone'] = htmlspecialchars($_POST['phone']);
            $_SESSION['degree'] = htmlspecialchars($_POST['degree']);
            $_SESSION['poleEmploi'] = htmlspecialchars($_POST['poleEmploi']);
            $_SESSION['badge'] = htmlspecialchars($_POST['badge']);
            $_SESSION['linkCodeAcademy'] = htmlspecialchars($_POST['linkCodeAcademy']);
            $_SESSION['superHero'] = htmlspecialchars($_POST['superHero']);
            $_SESSION['hack'] = htmlspecialchars($_POST['hack']);
            $_SESSION['experience'] = htmlspecialchars($_POST['experience']);
            $dateBirthday = htmlspecialchars($_POST['birthday']);
            ?>
        <div id="summaryID">
            <p><span class="summary">Nom : </span><?php echo htmlspecialchars($_POST['name']); ?></p>
            <p><span class="summary">Prénom : </span><?php echo htmlspecialchars($_POST['firstname']); ?></p>
            <p><span class="summary">Date de naissance : </span><?php echo strftime("%A %e %B %g", strtotime($dateBirthday)); ?></p>
            <p><span class="summary">Pays de naissance : </span><?php echo htmlspecialchars($_POST['country']); ?></p>
            <p><span class="summary">Nationalité : </span><?php echo htmlspecialchars($_POST['nationality']); ?></p>
            <p><span class="summary"> Adresse : </span></p>
            <p><?php echo htmlspecialchars($_POST['street']); ?></p>
            <p><?php echo htmlspecialchars($_POST['postalCode']); ?></p>
            <p><?php echo htmlspecialchars($_POST['town']); ?></p>
            <p><span class="summary">Email : </span><?php echo htmlspecialchars($_POST['mail']); ?></p>
            <p><span class="summary">Téléphone : </span><?php echo htmlspecialchars($_POST['phone']); ?></p>
            <p><span class="summary"> Diplôme : </span><?php echo htmlspecialchars($_POST['degree']); ?></p>
            <p><span class="summary">Numéro pôle emploi : </span><?php echo htmlspecialchars($_POST['poleEmploi']); ?></p>
            <p><span class="summary"> Nombre de badge : </span><?php echo htmlspecialchars($_POST['badge']); ?></p>
            <p><span class="summary"> Liens codecademy : </span><?php echo htmlspecialchars($_POST['linkCodeAcademy']); ?></p>
            <p><span class="summary"> Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</span></p>
            <p><?php echo htmlspecialchars($_POST['superHero']); ?></p>
            <p><span class="summary"> Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</span></p>
            <p><?php echo htmlspecialchars($_POST['hack']); ?></p>
            <p><span class="summary">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</span></p>
            <p><?php echo htmlspecialchars($_POST['experience']); ?></p>
        </div>
            <a href = "index.php" title = "Accueil"><button>Modifier mes informations</button></a>
            <?php
        }
        else
        {
            //permet de sauvegarder les valeurs saisis par l'utilisateur lors du clique sur le bouton envoyer lorsque le formulaire n'est pas complet
            //Avant le clique sur le submit on initialise les variable de messages d'erreur à rien.
            if (isset($_POST['name']))
            {
                $_SESSION['name'] = htmlspecialchars($_POST['name']);
            }else{
                $textName = '';
            }
            if (isset($_POST['firstname']))
            {
                $_SESSION['firstname'] = htmlspecialchars($_POST['firstname']);
            }else{
                $textFirstname = '';
            }
            if (isset($_POST['birthday']))
            {
                $_SESSION['birthday'] = htmlspecialchars($_POST['birthday']);
            }
            if (isset($_POST['country']))
            {
                $_SESSION['country'] = htmlspecialchars($_POST['country']);
            }
            if (isset($_POST['nationality']))
            {
                $_SESSION['nationality'] = htmlspecialchars($_POST['nationality']);
            }
            if (isset($_POST['street']))
            {
                $_SESSION['street'] = htmlspecialchars($_POST['street']);
            }else{
                $textStreet = '';
            }
            if (isset($_POST['postalCode']))
            {
                $_SESSION['postalCode'] = htmlspecialchars($_POST['postalCode']);
            }else{
                $textPostalCode = '';
            }
            if (isset($_POST['town']))
            {
                $_SESSION['town'] = htmlspecialchars($_POST['town']);
            }else{
                $textTown = '';
            }
            if (isset($_POST['mail']))
            {
                $_SESSION['mail'] = htmlspecialchars($_POST['mail']);
            }else {
                $textMail = '' ;
            }
            if (isset($_POST['phone']))
            {
                $_SESSION['phone'] = htmlspecialchars($_POST['phone']);
            }else{
              $textPhone = '';
            }            
            if (isset($_POST['degree']))
            {
                $_SESSION['degree'] = htmlspecialchars($_POST['degree']);
            }else{
                $textDegree = '';
            }          
            if (isset($_POST['poleEmploi']))
            {
                $_SESSION['poleEmploi'] = htmlspecialchars($_POST['poleEmploi']);
            }else{
                $textPoleEmploi = '';
            }
            if (isset($_POST['badge']))
            {
                $_SESSION['badge'] = htmlspecialchars($_POST['badge']);
            }else{
                $textBadge = '';
            }
            if (isset($_POST['linkCodeAcademy']))
            {
                $_SESSION['linkCodeAcademy'] = htmlspecialchars($_POST['linkCodeAcademy']);
            }else{
                $textURL = '';
            }
            if (isset($_POST['superHero']))
            {
                $_SESSION['superHero'] = htmlspecialchars($_POST['superHero']);
            }else{
                $textSuperHero = '';
            }
            if (isset($_POST['hack']))
            {
                $_SESSION['hack'] = htmlspecialchars($_POST['hack']);
            }else{
                $textHack = '';
            }
            if (isset($_POST['experience']))
            {
                $_SESSION['experience'] = htmlspecialchars($_POST['experience']);
            }else{
                $textExperience = '';
            }
            ?>
            <div class="row"><h2 class="col-lg-offset-3">Saisi de vos données</h2></div>
            <form class="container" action="index.php" method="post">
                <div class="row"><label class="col-lg-offset-2 col-lg-2"><h3>Nom : </h3></label></div><div class="row"><input class="col-lg-offset-2 col-lg-3" cols="100" type="text" name="name" required value="<?php echo (isset($_SESSION['name'])) ? $_SESSION['name'] : ''; ?>"><p class="textError"><?php echo $textName; ?></p></div>
                <div class="row"><label class="col-lg-offset-2 col-lg-2"><h3>Prénom : </h3></label></div><div class="row"><input class="col-lg-offset-2 col-lg-3" type="text" name="firstname" required value="<?php echo (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] : ''; ?>" ><p class="textError"><?php echo $textFirstname; ?></p></div>
                <div class="row"><label class="col-lg-offset-2 col-lg-6"><h3>Date de Naissance (format: JJ/MM/YYYY) : </h3></label></div><div class="row"><input class="col-lg-offset-2 col-lg-3" type="date" name="birthday" required value="<?php echo (isset($_SESSION['birthday'])) ? $_SESSION['birthday'] : ''; ?>" ><p class="textError"><?php echo $textBirthday; ?></p></div>
                <div class="row"><label class="col-lg-offset-2 col-lg-4"><h3>Pays de Naissance : </h3></label></div><div class="row"><select class="col-lg-offset-2"     name="country" required>
                            <?php
                            include 'tablecountrie.php';
                            foreach ($countryArray as $country)
                            {
                                ?>
                                <option class="col-lg-3" value="<?php echo $country ?>"<?php echo (isset($_SESSION['country']) && $_SESSION['country'] == $country) ? ' selected' : ''; ?>><?php echo $country ?></option>
                                <?php
                            }
                            ?> 
                        </select></div>                
                <div class="row"><label class=" col-lg-offset-2 col-lg-2"><h3>Nationalité</h3></label></div><div class="row"><select class="col-lg-offset-2" name="nationality">
                            <?php
                            foreach ($nationalityArray as $nationality)
                            {
                                ?>
                                <option class="col-lg-3" value="<?php echo $nationality ?>"<?php echo (isset($_SESSION['nationality']) && $_SESSION['nationality'] == $nationality) ? ' selected' : ''; ?>><?php echo $nationality ?></option>
                                <?php
                            }
                            ?>                    
                        </select></div>
                <div class="row"><label class=" col-lg-offset-2 col-lg-2"><h3>Adresse : </h3></label></div>
                <div class="row"><label class=" col-lg-offset-3 col-lg-2"><h4>N°de rue et nom de rue : </h4></label></div><div class="row"><input class="col-lg-offset-3 col-lg-3" type="text" name="street" required value="<?php echo (isset($_SESSION['street'])) ? $_SESSION['street'] : ''; ?>" ><p class="textError"><?php echo $textStreet; ?></p></div>
                <div class="row"><label class=" col-lg-offset-3 col-lg-2"><h4>Code Postal : </h4></label></div><div class="row"><input class="col-lg-offset-3 col-lg-1  postalCode" type="number" min="0" max="99000" required name="postalCode" value="<?php echo (isset($_SESSION['postalCode'])) ? $_SESSION['postalCode'] : ''; ?>" ><p class="textError"><?php echo $textPostalCode; ?></p></div>
                <div class="row"><label class=" col-lg-offset-3 col-lg-1"><h4>Ville : </h4></label></div><div class="row"><input class="col-lg-offset-3 col-lg-3" type="text" name="town" required value="<?php echo (isset($_SESSION['town'])) ? $_SESSION['town'] : ''; ?>" ><p class="textError"><?php echo $textTown; ?></p></div>
                <div class="row"><label class=" col-lg-offset-2 col-lg-2"><h3>Adresse mail : </h3></label></div><div class="row"><input class="col-lg-offset-2 col-lg-3" type="email" name="mail" required value="<?php echo (isset($_SESSION['mail'])) ? $_SESSION['mail'] : ''; ?>" ><p class="textError"><?php echo $textMail; ?></p></div>
                <div class="row"><label class=" col-lg-offset-2 col-lg-6"><h3>Numéro de téléphone :(format : 03.NN.NN.NN.NN) </h3></label></div><div class="row"><input class="col-lg-offset-2 col-lg-2" type="tel" name="phone" required value="<?php echo (isset($_SESSION['phone'])) ? $_SESSION['phone'] : ''; ?>" ><p class="textError"><?php echo $textPhone; ?></p></div>
                <div class="row"><label class=" col-lg-offset-2 col-lg-2"><h3>Diplôme : </h3></label></div><div class="row"><select class="col-lg-offset-2" name="degree" required>
                                <option value="SANS" <?php echo (isset($_SESSION['degree']) && $_SESSION['degree'] == "SANS") ? ' selected' : ''; ?>>SANS</option>
                                <option value="BAC" <?php echo (isset($_SESSION['degree']) && $_SESSION['degree'] == "BAC") ? ' selected' : ''; ?>>BAC</option>
                                <option value="BAC+2" <?php echo (isset($_SESSION['degree']) && $_SESSION['degree'] == "BAC+2") ? ' selected' : ''; ?>>BAC+2</option>
                                <option value="BAC+3" <?php echo (isset($_SESSION['degree']) && $_SESSION['degree'] == "BAC+3") ? ' selected' : ''; ?>>BAC+3</option>
                                <option value="Supérieur" <?php echo (isset($_SESSION['degree']) && $_SESSION['degree'] == "Supérieur") ? ' selected' : ''; ?>>Supérieur</option>
                            </select></div>
                <div class="row"><label class=" col-lg-offset-2 col-lg-4"><h3>Numéro pôle emploi : </h3></label></div><div class="row"><input class="col-lg-offset-2 col-lg-2" type="text" name="poleEmploi" required value="<?php echo (isset($_SESSION['poleEmploi'])) ? $_SESSION['poleEmploi'] : ''; ?>" ><p class="textError"><?php echo $textPoleEmploi ?></p></div>
                <div class="row"><label class=" col-lg-offset-2 col-lg-4"><h3>Nombre de badge : </h3></label></div><div class="row"><input class="col-lg-offset-2 col-lg-1" type="number" name="badge" min="0" required value=<?php echo (isset($_SESSION['badge'])) ? $_SESSION['badge'] : 0; ?> ><p class="textError"><?php echo $textBadge ?></p></div>
                <div class="row"><label class=" col-lg-offset-2 col-lg-4"><h3>Liens codecademy : </h3></label></div><div class="row"><input class="col-lg-offset-2 col-lg-4" type="url" name="linkCodeAcademy" value="<?php echo (isset($_SESSION['linkCodeAcademy'])) ? $_SESSION['linkCodeAcademy'] : ''; ?>" ><p class="textError"><?php echo $textURL ?></p></div>
                <div class="row"><label class="col-lg-offset-2 col-lg-8"><h3>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi? (de 30 à 200 caractères)</h3></label></div><div class="row"><textarea class="col-lg-offset-2 col-lg-6" name="superHero" required><?php echo (isset($_SESSION['superHero'])) ? $_SESSION['superHero'] : ''; ?></textarea><p class="textError"><?php echo $textSuperHero ?></p></div>
                <div class="row"><label class="col-lg-offset-2 col-lg-8"><h3>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) (de 30 à 200 caractères) </h3></label></div><div class="row"><textarea  class="col-lg-offset-2 col-lg-6" name="hack" required><?php echo (isset($_SESSION['hack'])) ? $_SESSION['hack'] : ''; ?></textarea><p class="textError"><?php echo $textHack ?></p></div>
                <div class="row"><label class=" col-lg-offset-2 col-lg-8"><h3>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? (de 30 à 200 caractères)</h3></label></div><div class="row"><textarea  class="col-lg-offset-2 col-lg-6" required name="experience"><?php echo (isset($_SESSION['experience'])) ? $_SESSION['experience'] : ''; ?></textarea><p class="textError"><?php echo $textExperience ?></p></div>
                <button  class="col-lg-offset-3" type = "submit">Valider</button>
            </form>
            <?php
        }
        ?>
        <a class="col-lg-offset-1" href = "../index.php" title = "Accueil"><input type = "button" value = "Accueil"/></a>
</body>
</html>
