<!doctype html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Jornal | Mídia Impressa</title>
   
  <link href="https://fonts.googleapis.com/css?family=Vidaloka" rel="stylesheet">

  <link rel="stylesheet" href="css/quizymemorygame.css">
  <link rel="stylesheet" href="css/main.css">

</head>
<body>
  <header>
    <div class="container-custom">
      <img src="img/icon.png" class="logo-img"/>
      <div class="text">jornal</div>
    </div>
  </header>

  <div id="main" role="main">
    
    <div class="overlay"></div>

    <div id="tutorial-memorygame" class="quizy-memorygame">
      <ul>
          <li class="match1">
            <img src="img/press.png">
          </li>
          <li class="match2">
            <br><br><p class="text-style1">Importante <br/><i>Penny Paper</i></p>
          </li>
          <li class="match3">
            <img src="img/watergate.png">
          </li>
          <li class="match4">
            <img src="img/gazeta.png">
          </li>
          <li class="match5">
            <img src="img/tv.png">
          </li>
          <li class="match6">
           <img src="img/tablet.png">
          </li>
          <li class="match1">
            <img src="img/gutenberg.png">
          </li>
          <li class="match2">
            <img src="img/thesun.png">
          </li>
          <li class="match3">
            <img src="img/waterteam.png">
          </li>
          <li class="match4">
            <br/><br><p class="text-style1">Primeiro <br/>jornal impresso <br/>no Brasil</p>
          </li>
          <li class="match5">
            <br><br><p class="text-style1">Causou uma revolução no design dos jornais</p>
          </li>
          <li class="match6">
            <br><br><p class="text-style1">Recebeu um Global Media Awards por inovação</p>
          </li>
      </ul>      
    </div>

    <div class="reset-button">
      <hr/>
      Encontre os pares corretos: clique nas imagens para jogar. <a id="restart" href=""> <div class="reset-icon"></div> Restart </a>
	  <br/>
	  Muito difícil? Descubra as respostas <a href="https://prezi.com/p/zhb490ww5w3-/" target="_blank">aqui</a>. 
    </div>
  </div>


  <footer>
    <div class="container-custom">
 
      <div class="logo-fabico">
        <img src="img/fabico.png" class=""/>
      </div> 

        <div class="info">
          <br/>
          <p>2017. Disciplina de Mídia Impressa</p>
          <p>Por Bibiana Davila, baseado no plugin <a href="http://memorygame.quizyplugin.com/" target="_blank">jQuery Memory Card.</p>
        </div>
    
    </div>
  </footer>
  
  <script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>
  <script src="js/jquery-ui-1.8.17.custom.min.js"></script>
  
  <script src="js/jquery.flip.min.js"></script>
  <script src="js/jquery.quizymemorygame.js"></script>
  
  <script>
    var quizyParams = {itemWidth: 156, itemHeight: 156, itemsMargin:40, colCount:4, animType:'flip' , flipAnim:'tb', animSpeed:250, resultIcons:true, randomised:true }; 
    $('#tutorial-memorygame').quizyMemoryGame(quizyParams);
    $('#restart').click(function(){
      $('#tutorial-memorygame').quizyMemoryGame('restart');
      return false;
    });
  </script>

</body>
</html>