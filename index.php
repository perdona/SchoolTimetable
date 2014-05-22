
<!DOCTYPE html>
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
    
    $sql = 'INSERT INTO TBL_Professor ( '.$keys.' ) VALUES ( '.$values.' );';

    mysql_query( $sql ) or die( mysql_error() );

    echo mysql_insert_id();

}

?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/assets/ico/favicon.ico">
    <link href="./css/bootstrap-responsive.css" rel="stylesheet">
    <link href="./css/bootstrap-theme-min.css" rel="stylesheet">
    <link href="./css/bootstrap-theme.css" rel="stylesheet">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="./starter-template.css" rel="stylesheet"> -->

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">School Timetable</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="starter-template">
        <br/>
        <br/>
        <br/>
        <br/>
        <h1>Cadastro de Professores</h1>

        <form class="form-horizontal">
      <div class="control-group">
        <label class="control-label" for="inputEmail">Email</label>
        <div class="controls">
          <input type="text" id="inputEmail" placeholder="Email">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="inputPassword">Password</label>
        <div class="controls">
          <input type="password" id="inputPassword" placeholder="Password">
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <label class="checkbox">
            <input type="checkbox"> Remember me
          </label>
          <button type="submit" class="btn">Sign in</button>
        </div>
      </div>
    </form>
      </div>

      <div class="control">
        <form action="" method="post" class="form-search" name="frm_professor" id="frm_professor">
            
          <label>Nome do Professor:</label>
          <input type="text" class="input-" placeholder="Nome" name="ST_NomeProfessor" id="ST_NomeProfessor">
          <br/>
          <input type="submit" name="Enviar" id="Enviar" class="btn btn-primary search">

          
        </form>
      </div>
      

    </div>

    <div class="container">
    
    </div>
    <!-- /.container -->
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
    <script type="text/javascript" src="js/cad_professor.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>
