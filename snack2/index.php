<!-- 
## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 -->

<?php 

    extract($_GET);
    $grantedAccess = false;

    if (strlen($name) >= 3 ) {
        // echo nl2br("Name OK \n");

        if ((strpos($mail, '@') !== false) && (strpos($mail, '.') !== false)) {
            // echo nl2br("Mail OK \n");

            if ( is_numeric($age) == 1) {
                // echo nl2br("Age OK \n");
                $grantedAccess = true;
            }
        }        
    }

    if ($grantedAccess == true) {
        echo 'Accesso riuscito';
    } else {
        echo 'Accesso negato';
    }
?>
