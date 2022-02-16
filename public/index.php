<?php
    const APP_PATH = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR;
    // definiáltuk a constanst, ami a projekt mappájára mutat
    const PAGES_PATH = APP_PATH . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR;
?>

<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Receptkönyv</title>
</head>
<body>
    <pre>
        <?php
            // print_r($_SERVER);
            // super globálok: $_get, $_server
            // $_SERVER[HTTP_USER_AGENT] => Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0
            // $time = date("Y-m-d H:i:s");
            // log/agent.log
            $data = date("Y-m-d H:i:s")." - ".$_SERVER["HTTP_USER_AGENT"].PHP_EOL;
            file_put_contents(APP_PATH."log".DIRECTORY_SEPARATOR."agent.log", $data, FILE_APPEND);
        ?>
    </pre>
        <?php
            // directory_separator: olyan, mint a / csak mindig az oprendszernek megfelelő karaktet rakja be
            include PAGES_PATH .$_SERVER['QUERY_STRING'].'.page.php';
            //query_string azt tárolja, amit a böngészőben az URL végére írunk
            // pl. ha a home-ot írjuk oda, akkor a home fált töltse be a mappából
        ?>


</body>
</html>