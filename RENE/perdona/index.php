<?php
require( 'config.php' );

if ( $_POST ) {

    foreach ($_POST as $k => $v) {
        if ( $v == 'Submit' ) {
            continue;
        }
        $keys .= $k . ',';
        $values .= '"'.addslashes($v) . '",';
    }
    $keys = substr_replace($keys, '', -1);
    $values = substr_replace($values, '', -1);
    
    $sql = 'INSERT INTO professor ( '.$keys.' ) VALUES ( '.$values.' );';

    mysql_query( $sql ) or die( mysql_error() );

    echo mysql_insert_id();

}

?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <form action="" method="post" name="frm_professor" id="frm_professor" class="form1">
            <ul>
                <li>
                    Nome: <input type="text" name="nome" id="nome">
                </li>
                <li>
                    <input type="submit" name="Enviar" id="Enviar">   
                </li>
            </ul>
        </form>
        <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
        <script type="text/javascript" src="js/cad_professor.js"></script>
    </body>
</html>