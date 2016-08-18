<?php
include "valida_cookies.php";
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/style-novo.css" rel="stylesheet" type="text/css">
    <link href="css/style-painel.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.js"></script>
  </head><body>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <a href="index.php"><img src="images\logo-painel .png" class="img-responsive"></a>
          </div>
          <div class="col-md-4 text-left"></div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <ul class="nav nav-justified nav-pills"></ul>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
	
      <div class="container">
	  
	  <input name="codigo" type="hidden" value="<?php print $codigo; ?>">

        <div class="row">
          <div class="col-md-12 text-center">
            <div class="section">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="section">
                      <div class="container">
                        <div class="row text-center">
                          <div class="col-md-4 col-xs-3 text-center">
                            <a href="marcacao-consultas-cli.php"><i class="fa fa-5x fa-calendar-o fa-fw text-muted"></i></a>
                            <h3 class="text-center">Agendar Consultas</h3>
                            <p class="text-left"></p>
                          </div>
                          <div class="col-md-4 col-xs-3 text-center">
                            <a href="editar.php?codigo=$codigo'"><i class="fa fa-5x -o fa-fw text-muted fa-edit"></i></a>
                            <h3 class="text-center">Editar Dados</h3>
                            <p class="text-left"></p>
                          </div>
                          <div class="col-md-4 col-xs-3 text-center">
                            <a href="logout.php"><i class="fa fa-5x fa-fw text-muted -times fa-power-off"></i></a>
                            <h3 class="text-center">Logout</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  

</body></html>