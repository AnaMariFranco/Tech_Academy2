<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">

    <title>Streams</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="imagens/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">SUPORTE</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            FAVORITOS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">JOGO 1</a></li>
            <li><a class="dropdown-item" href="#">JOGO 2</a></li>
            <li><a class="dropdown-item" href="#">JOGO 3</a></li>

          </ul>
        </li>
        
      </ul>
     
    </div>
  </div>
</nav>
    </header>

    <h1>
        Olá, somos a equipe Streams a sua disposição!
    </h1>

    <p> Teve algum problema com nosso site? Por favor nos mande uma mensagem, entraremos em contato </p>
    <p>assim que possível, já avisamos que o tempo de espera é de 48 horas! Desde já a equipe Streams</p>
    <p>agradece a sua compreensão.</p>
</body>
<footer>
    <section id="contato">
        <div class="contato">
            <h2>Entre em contato conosco:</h2>
            <form name="Formcontato">
                <label for="Nome"> Digite o seu nome completo: </label>
                <input type="text" name="nome" id="nome" required>
                <br>
                <label for="email">Digite seu e-mail:</label>
                <input type="email" name="email" id="email" required>
                <br>
                <label for="mensagem">Digite a mensagem que deseja enviar:</label>
                <textarea name="mensagem" id="mensagem" required rows="10"></textarea>
                <br>
                <button type="submit">
                    Envie sua mensagem
                </button>
            </form>
        </div>
    </section>

</footer>
</html>