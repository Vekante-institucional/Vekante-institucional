<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vekante Educação e Cultura</title>
    <meta name="description" content="A Vekante Educação e Cultura é um laboratório de criação de projetos culturais que desenvolve soluções e experiências inovadoras de alto padrão de qualidade. Atuando em rede, colabora com diversos parceiros do mundo das artes, cultura e educação. Seus principais eixos de atuação são o cinema, plataformas criativas e experiências interativas"/>
    <!-- Bootstrap & main -->
    <link href="css/main.css" rel="stylesheet">
    <!-- design itens -->
    <link href="css/docs.css" rel="stylesheet">
    <link href="css/flat-ui.css" rel="stylesheet">
  </head>
  <body>
    <!-- menu heading -->
    <div class="row demo-row">
      <div class="col">
        <nav class="navbar navbar-inverse navbar-embossed navbar-expand-lg" role="navigation">
          <a class="navbar-brand" href="#">VEKANTE</a>
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-01"></button>
          <div class="collapse navbar-collapse" id="navbar-collapse-01">
            <ul class="nav navbar-nav mr-auto">
              <li><a href="#fakelink">Início</a></li>
              <li><a href="sobre.html">Sobre</a></li>
              <li class="dropdown">
                <a href="http://www.vekante.net" class="dropdown-toggle" data-toggle="dropdown">Portfólio</a>
                <span class="dropdown-arrow"></span>
                <ul class="dropdown-menu">
                  <li><a href="alma.html">Educação de Alma Brasileira</a></li>
                  <li><a href="promociona.html">Promociona 10 anos</a></li>
                  <li><a href="educovid.html">Educadores na Covid-19</a></li>
                  <li><a href="qsqjs.html">Quando sinto que já sei</a></li>
                </ul>
              </li>
              <li><a href="contato.html">Contato<span class="navbar-unread">1</span></a></li>
              <li class="btn-lang"><a href="/ESP/contato.html">ESP</a></li>
              <li class="btn-lang2"><a href="/ENG/contato.html">ENG</a></li>
             </ul>

          </div><!-- /.navbar-collapse -->
        </nav><!-- /navbar -->
      </div>
    </div> <!-- /row -->
    <div class="container mt-3">
      <div class="row">
        <div class="col-12">
          <img class="d-block w-100" src="images/contato-2.png" alt="Contato">
        </div>
      </div>
      <hr>
    </div>
    <div class="container mt-3">
      <div class="row">
          <div class="col-12">
            <h3 class="text-center"><b>Contato</b></h3>
           </div>
        </div>
      </div>
    <hr>
    
    <div class="login" name="contatoform">
      <div class="login-screen">
        <div class="login-icon">
          <h4>Envie sua  <small>mensagem</small>Se preferir escreva para contato@vekante.net</h4>
        </div>

        <form action="envia_fale.php" method="post" name="form" >
          <div class="login-form">
            <div class="form-group">
              <input name="nome" type="text" class="form-control login-field" placeholder="Seu nome" id="nome" />
              <label class="login-field-icon fui-user" for="login-name"></label>
           </div>

           <div class="form-group">
             <input name="email" type="email" class="form-control login-field"  placeholder="Seu email" id="email" />
              <label class="login-field-icon fui-lock" for="login-pass"></label>
            </div>

            <div class="form-group">
              <input name="assunto" type="text" class="form-control login-field" placeholder="Assunto" id="assunto" />
             <label class="login-field-icon fui-lock" for="login-pass"></label>
           </div>

            <div class="form-group">
             <textarea name="mensagem" type="text" class="form-control login-field" placeholder="Escreva sua mensagem" id="msgid"></textarea>
             <label class="login-field-icon fui-lock" for="login-pass"></label>
             </div>

             <input type="submit" name="submit" value="Enviar" class="btn btn-primary btn-lg btn-block">
          
          </div>
        </form>
      </div>
    </div>


    <hr>
  </br>
    <div class="text-center">
      <div class="container-bottom text-white bg-dark p-4">
        <div class="row">
           <div class="col-12">
            <!--antiga class col-md-4 col-lg-5 col-6-->
            <address>
            <strong>Vekante Educação e Cultura</strong><br>
            São Paulo, SP - Brasil<br>
            Barcelona, Cataluña - España<br>
            </address>
            <address>
            <strong>Contato</strong><br>
            <a href="mailto:contato@vekante.net">contato@vekante.net</a>
            </address>
        </div>
      </div>
    </div>
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>2015 - 2020 - Copyright © Vekante.net | Criado com <a href="https://getbootstrap.com">Bootstrap v4.0.0</a> e componentes de <a href="https://designmodo.com/">Flat UI</a>
           </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.0.0.js"></script>
  </body>
</html>