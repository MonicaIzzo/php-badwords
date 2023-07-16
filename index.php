<!--
PHP Badwords
nome repo: php-badwords

Descrizione:
Creare un form che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare

-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS">
    <meta name="author" content="Monica Izzo">
    <title>php Badwords | Pagina iniziale</title>

    <!-- icon-->
    <link rel="icon" type="image/png" sizes="32x32" href="img/faicon.png">

    <!-- stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container-md p-5 mx-auto mt-5 bg-primary text-white" id="cardData">
        <h1 class="text-center mt-2">INSERISCI IL TUO PARAGRAFO</h1>
        <!-- FORM -->
        <form action="confirm.php" method="POST">
            <section id="form-section">
                <div class="card p-3 shadow mt-5 mb-5" id="card">
                    <div class="card-body">
                        <!-- PARAGRAFO INPUT-->
                        <div class="mb-3">
                            <label class="form-label">Inserisci il tuo testo qui...</label>
                            <textarea class="form-control" id="" rows="5" name="paragraph"></textarea>
                        </div>
                        <!-- PAROLA DA CENSURARE -->
                        <div class="mb-3">
                            <label class="form-label">Inserisci il termine da censurare...</label>
                            <input type="text" class="form-control" id="" placeholder="Termine da censurare" name="censor">
                        </div>
                    </div>
                    <!-- BUTTON -->
                    <div class="container text-center button" id="button">
                        <div class="row justify-content-center mt-3">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-lg m-2" id="">Invia</button>
                                <button type="reset" class="btn btn-outline-secondary btn-lg m-2" id="reset-button">Annulla</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
    </div>
    <?php


    /* 
    echo 'Ciao Classe 100'; //Serve per stampare a schermo
    var_dump('Ciao Classe 100'); //Serve avere delle info su una variabile
    */


    /* 
    $first_name = 'Monica';
    $last_name = 'Izzo';
    $full_name = $first_name . ' ' . $last_name; //?Interpolazione di varibili - TIPO 1
    echo "<h1>$full_name<h1>";
    */


    /* 
    $first_name = 'Monica';
    $last_name = 'Izzo';
    $full_name = "$first_name $last_name"; //?Interpolazione di varibili - TIPO 2
    echo "<h1>$full_name<h1>";
    */


    /* 
    $presentazione = 'Ciao sono ';
    $first_name = 'Monica';
    $last_name = 'Izzo';
    $full_name = $first_name . ' ' . $last_name;
    $presentazione .= $full_name;
    echo "<h1>$presentazione<h1>";



LE STRINGHE
PHP ci permette di interagire con le stringhe attraverso tantissime funzioni. Nella documentazione uﬃciale troviamo la lista dettagliata di tutte: http://php.net/manual/en/ref.strings.php

Alcuni esempi:
echo $variabile - stampa il contenuto della variabile
explode(delimitatore, stringa) - crea un array dividendo una stringa ad ogni occorrenza del delimitatore
trim(stringa) - toglie gli spazi bianchi all’inizio e alla ﬁne di una stringa
str_replace(porzioneDaModiﬁcare, conCosa, stringa) - sostituisce una porzione di una stringa con un nuovo valore strlen(stringa) - ritorna la lunghezza di una stringa
str_contains(stringa, valore) - restituisce true se value è presente nella stringa, altrimenti false
ucﬁrst(stringa) - ucwords(stringa) - rende maiuscolo il primo carattere della stringa / il primo carattere di ogni parola
*/
    ?>
</body>

</html>