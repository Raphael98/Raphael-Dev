<!DOCTYPE html>
<html lang="pt">
<head>
  <?php
  try{
		$pdo = new PDO('mysql:host=localhost;dbname=study', 'root', 'tsuki.1');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$ip = $_SERVER['REMOTE_ADDR'];
		$date = date('Y-m-d');
		$stmt = $pdo->query("SELECT * FROM visits WHERE ip = '{$ip}' AND date = now()");
		$rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
		if(count($rs) != 0){
			$stmt = $pdo->prepare('INSERT INTO visits (ip, date) VALUE (:ip, now());');
			$stmt->bindValue(':ip', $ip);
			$stmt->execute();
		}
  }catch(PDOException $ex){
    echo $ex->getMessage();
  }
  ?>
  <meta charset="utf-8">
  <title>Raphael - Dev</title>
  <meta name="description" content="Raphael Andrade Alves, desenvolvedor Web PHP">
  <meta name="keywords" content="desenvolvimento, desenvolvedor, Freelancer, web, desenvolvedor web, são paulo,
  desenvolvimento web, sites, sistemas, php, mysql, sql, jquery, javascript, profissional, freela, loja virtual, e-commerce,
  aplicativos, aplicações, software, analista de sistemas, nerd" />
  <meta name="RATING" content="Geral">
  <meta name="ROBOTS" content="index,follow">
  <meta name="OWNER" content="raphael.andrade98@outlook.com">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="icon" href="resources/img/code.png">
  <link rel="stylesheet" href="resources/css/style.css">
  <!-- jQuery -->
  <script src="resources/js/jqueryGoogle.js"></script>
  <script src="resources/js/main.js"></script>
  <!-- Semantic ui -->
  <link rel="stylesheet" href="resources/css/semantic.min.css">
  <script src="resources/js/semantic.min.js"></script>
  <!-- Dev icons -->
  <link rel="stylesheet" href="resources/css/devicon.min.css">
  <link rel="stylesheet" href="resources/css/devicon-colors.css">
</head>

<body>
  <div id="sidebar">
    <a href="#sobre"> Sobre</a>
    <a href="#skills"> Habilidades</a>
    <a href="#contato"> Contato</a>
    <a href="#projetos"> Projetos</a>
  </div>

  <nav id="menu">
    <a href="index.html"><span id="logo">&#60/Raphael&#62</span></a>
    <button id="collapse">&#9776</button>
    <div id="itens">
      <a href="#sobre"> Sobre</a>
      <a href="#skills"> Habilidades</a>
      <a href="#contato"> Contato</a>
      <a href="#projetos"> Projetos</a>
    </div>
  </nav>
  <section id="banner">
    <div id="content">
      <h1>Raphael Andrade Alves</h1>
      <h2>Desenvolvedor Web/PHP</h2>
    </div>
  </section>

  <section class="ui grid section-light">
    <div class="sixteen wide column">
      <span id="sobre"></span>
      <h1>Sobre</h1>
      <p>
          Sou desenvolvedor web, apaixonado por ciência e tecnologia, cursando análise e desenvolvimento de sistemas na Fatec Zona Leste. Sou focado em back-end,
          tenho sólido conhecimento em PHP e Banco de dados SQL, mas, também tenho plena capacidade de
          desenhar layouts responsivos utilizando HTML, CSS, Javascript e Bootstrap. Sou autodidata, considero
          que possuo um ótimo raciocínio lógico, facilidade pra resolver problemas e para me adaptar a diferentes
          ambientes.
      </p>
    </div>
  </section>

  <section class="ui grid section-dark">
    <span id="skills"></span>
    <div class="sixteen wide column">
      <h1>Skills</h1>
    </div>
      <div class="eight wide mobile column four wide tablet column two wide computer column"><i class="devicon-html5-plain"></i><br>HTML 5</div>
      <div class="eight wide mobile column four wide tablet column two wide computer column"><i class="devicon-css3-plain"></i><br>CSS 3</div>
      <div class="eight wide mobile column four wide tablet column two wide computer column"><i class="devicon-bootstrap-plain"></i><br>Bootstrap</div>
      <div class="eight wide mobile column four wide tablet column two wide computer column"><i class="devicon-git-plain"></i><br>Git</div>
      <div class="eight wide mobile column four wide tablet column two wide computer column"><i class="devicon-javascript-plain"></i><br>Javascript</div>
      <div class="eight wide mobile column four wide tablet column two wide computer column"><i class="devicon-php-plain"></i><br>PHP</div>
      <div class="eight wide mobile column four wide tablet column two wide computer column"><i class="devicon-mysql-plain"></i><br>MySQL/SQL</div>
      <div class="eight wide mobile column four wide tablet column two wide computer column"><i class="devicon-linux-plain"></i><br>Ubuntu</div>
      <div class="eight wide mobile column four wide tablet column four wide computer column"><i class="devicon-jquery-plain"></i><br>jQuery</div>
      <div class="eight wide mobile column four wide tablet column four wide computer column"><i class="devicon-less-plain-wordmark"></i><br>Less</div>
      <div class="eight wide mobile column four wide tablet column four wide computer column"><i class="devicon-photoshop-plain"></i><br>Photoshop</div>
      <div class="eight wide mobile column four wide tablet column four wide computer column"><i class="devicon-laravel-plain"></i><br>Laravel</div>
  </section>

  <section class="ui grid section-light">
    <div class="sixteen wide column">
      <h1>Contato</h1>
      <table id="contato">
        <tr>
          <td>Email: </td>
          <td>raphael.andrade98@outlook.com</td>
        </tr>
        <tr>
          <td>Linkedin: </td>
          <td><a href="https://www.linkedin.com/in/raphael-alves-dev" rel="noopener">linkedin.com/in/raphael-alves-dev</a></td>
        </tr>
      </table>
    </div>
  </section>

  <section class="ui grid section-dark">
    <div class="sixteen wide column">
      <span id="projetos"></span>
      <h1>Projetos</h1>
      <h4>Confira um dos meus projetos</h4>
      <span style="margin:30px"<b>Ah, caso você queira dar uma olhadinha no código de cada projeto,
        visite o meu <a href="https://github.com/Raphael98">Github
          <i  style="font-size:25px" class="devicon-github-plain"></i></a></b></span>
    </div>
    <div class="sixteen wide column">
      <a href="http://toniight.raphael-alves.com.br" style="display:block; margin:5px">
      <div id="projects">
        <div class="label">toniight</div>
      </div>
      </a>
    </div>
  </section>

  <footer class="ui grid" style="margin-left:0">
    <div class="sixteen wide column">
      Raphael A. Alves &copy; 2017<br>
      Powered by <a href="https://semantic-ui.com/"> Semantic UI</a><br>
    </div>
  </footer>

</body>
</html>
