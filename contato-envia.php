<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="favicon.ico">
  <title>Rogério Ventura | Saxofonista e Flautista</title>
  <meta name="description" content="Wireframe design of a landing page by Pingendo">
  <meta name="keywords" content="Pingendo bootstrap example template wireframe landing">
  <meta name="author" content="Pingendo">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="wireframe.css"> </head>

<body class="bg-info">
  <div class="py-5 text-center" style="background-image: url('imagens/topo.jpg');background-repeat:no-repeat;background-size:cover;"></div>
  <nav class="navbar navbar-expand-md navbar-dark py-1 bg-secondary">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-between" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a class="nav-link mx-2" href="index.html">HOME</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link mx-2" href="release.html">RELEASE</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link mx-2" href="https://www.facebook.com/rogerio.ventura.9" target="_blank">EVENTOS</a>
          </li>
          <li class="nav-item dropdown px-2">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MULTIMÍDIA</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="musicas.html">MÚSICAS</a>
              <a class="dropdown-item" href="videos.html">VÍDEOS</a>
              <a class="dropdown-item" href="fotos.html">FOTOS</a>
            </div>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link" href="localizacao.html">LOCALIZAÇÃO</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link" href="repertorio.html">REPERTÓRIO</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link" href="aulas.html">AULAS</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link" href="parceiros.html">PARCEIROS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato.html">CONTATO</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-6">
              <h4 class="text-center text-danger">Telefones</h4>
            </div>
            <div class="col-md-1"></div>
          </div>
          <div class="row">
            <div class="col-md-1">
              <p class="text-right"></p>
            </div>
            <div class="col-md-6">
              <p class="text-right">(11) 9.9564-3589 vivo
                <img class="img-fluid d-block" src="imagens/whatsapp.png" align="right"> </p>
            </div>
            <div class="col-md-1"></div>
          </div>
          <div class="row">
            <div class="col-md-1">
              <p class="text-right"></p>
            </div>
            <div class="col-md-6">
              <p class="text-right mx-4"> (11 ) 9.8577-2902 tim</p>
            </div>
            <div class="col-md-1"></div>
          </div>
          <div class="row">
            <div class="col-md-1">
              <p class="text-right"></p>
            </div>
            <div class="col-md-6">
              <a href="mailto:rogerioventurasax@gmail.com" class="text-danger text-right mx-1">rogerioventurasax@gmail.com
                <img class="img-fluid d-block float-right" src="imagens/email.png" align="right"> </a>
              <p class="text-center"></p>
            </div>
            <div class="col-md-1"></div>
          </div>
          <div class="row">
            <div class="col-md-1">
              <p class="text-right"></p>
            </div>
            <div class="col-md-3">
              <a href="https://www.facebook.com/rogerio.ventura.9" target="blank">
                <img class="img-fluid d-block float-right" src="imagens/facebook.png">
              </a>
            </div>
            <div class="col-md-3">
              <a href="https://www.instagram.com/rogerioventurasax/?hl=pt-br" target="blank">
                <img class="img-fluid d-block" src="imagens/instagram.png">
              </a>
            </div>
            <div class="col-md-1"></div>
          </div>
        </div>
        <div class="col-md-6">
          <h1 class="text-danger">Contato</h1>
          <p>Mensagem enviada com sucesso!</p>



        <?
            $nome= $_POST['nome'];
            $email= $_POST['email'];
            $telefone= $_POST['telefone'];
            $comentario= $_POST['comentario'];
            $data= $_POST['data'];
            //$periodo= $_POST['periodo'];
            $periodo= "Manhã";
            //aqui n&oacute;s resgatamos as vari&aacute;veis do formul&aacute;rio

            //$para = "coffenet.web@gmail.com";
            $para = "rogerioventurasax@gmail.com, rogeriotravagini@hotmail.com, coffenet.web@gmail.com";

            $assunto = "Contato do site Rogerio Ventura";
            $mensagem = 'Nome: '.$nome. "<br>"
            .'E-mail: ' .$email. "<br>" 
            .'Telefone: ' .$telefone. "<br>"
            .'Data: ' .$data. "<br>"
            .'Periodo: ' .$periodo. "<br>"
            .'Mensagem: ' .$comentario. "<br>";


            $headers =  "Content-Type:text/html; charset=UTF-8\n";
            $headers .= "From:  Rogerio Ventura<$email>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
            $headers .= "X-Sender:  <$email>\n"; //email do servidor //que enviou
            $headers .= "X-Mailer: PHP  v".phpversion()."\n";
            $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
            $headers .= "Return-Path:  <$email>\n"; //caso a msg //seja respondida vai para  este email.
            $headers .= "MIME-Version: 1.0\n";


            mail ($para, $assunto, $mensagem, $headers);

        ?>






          
        </div>
      </div>
    </div>
  </div>
  <div class="bg-dark py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="text-secondary mb-0 text-left">Todos direitos para ROGÉRIO VENTURA PRODUÇÕES DE EVENTOS&nbsp;
            <br>CNPJ: 13.815.737/0001-04</p>
        </div>
      </div>
      <div class="row d-flex justify-content-between">
        <div class="col-lg-4 col-md-12"> </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>