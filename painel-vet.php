<?php
include "valida_cookies.php";
?>

<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/style-novo.css" rel="stylesheet" type="text/css">
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
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section">
              <div class="container">
                <div class="row text-center">
                  <div class="col-xs-3 col-md-3">
                    <a href="visualizar-servicos-vet.php"><i class="fa fa-5x fa-fw text-muted fa-check-square-o"></i></a>
                    <h3>Consultas Agendadas</h3>
                  </div>
                  <div class="col-xs-3 col-md-3">
                    <a href="marcacao-cirurgias.php"><i class="fa fa-5x fa-fw text-muted fa-calendar-o"></i></a>
                    <h3>Agendar Cirurgias</h3>
                  </div>
                  <div class="col-xs-3 col-md-3">
                    <a href="visualizar-cirurgias.php"><i class="fa fa-5x fa-fw text-muted -o -circle-o -square fa-check"></i></a>
                    <h3>Cirurgias Agendadas</h3>
                  </div>
                  <div class="col-xs-3 col-md-3">
                    <a href="cadastro-usuario-vet.php"><i class="fa fa-5x fa-fw text-muted -o -circle-o -square fa-user-plus"></i></a>
                    <h3>Cadastrar um Usuário</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-xs-3 text-center col-md-4"></div>
          <div class="col-xs-3 text-center col-md-4">
            <a href="logout.php"><i class="fa fa-5x fa-fw hub text-muted fa-power-off"></i></a>
            <h3>Logout</h3>
          </div>
        </div>
      </div>
    </div>
  

</body></html>