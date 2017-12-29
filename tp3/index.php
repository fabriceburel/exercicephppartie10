<!DOCTYPE html>
<html>
    <head>
        <title>TP1</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body class="container">
        <div class="row"><h1 class="col-lg-offset-4">Les Grands écrvains</h1></div>
        <div class="container">
            <?php
            $portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
            $portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
            $portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
            $portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

            function writer($portraits)
            {
                foreach ($portraits as $key => $value)
                {
                    if ($key == 'name')
                    {
                        $name = $value;
                    }
                    elseif ($key == 'firstname')
                    {
                        $firstname = $value;
                    }
                    elseif ($key == 'portrait')
                    {
                        $picture = $value;
                    }
                }
                ?>
                <figure class="portrait col-lg-4">
                    <div class="picture"><img src="<?php echo $picture ?>" alt="photo de <?php echo $name . ' ' . $firstname ?>"/></div>
                    <figcaption>Portrait de <?php echo $name . ' ' . $firstname ?></figcaption>
                </figure>
                <?php
            }
            ?>
            <div class="row col-lg-offset-1">
                <?php
                writer($portrait1);
                writer($portrait2);
                writer($portrait3);
                writer($portrait4);
                ?>
            </div>
            <a class="col-lg-offset-3" href = "../index.php" title = "Accueil"><input type = "button" value = "Accueil"/></a>
        </div>
    </body>
</html>
