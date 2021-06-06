<head>
<title>minecraft</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="main.css">
<link type="image/x-icon" rel="shortcut icon" href="logo.png">
</head>
<body>
<header>
  <ul>
  <li><a href="index.html" class="menu"><img src="logo.png" class="logo"/>Главная</a></li>
  <li><a href="mods.html" class="menu">Моды</a></li>
  <li><a href="builds.html" class="menu">Постройки</a></li>
  <li><a href="ideas.html" class="menu">Идеи</a></li>
  <li><a href="ul.html" class="menu">Списки идей</a></li>
  </ul>
</header>
<main>
<div class="spiski" id="spiski">
  <?require_once ("script.php");
  $articles = ideas_all($db);
  ?>
  <ul>
    <?php foreach($articles as $a): ?>
  <li><?=$a["idea"]?></li>
  <?php endforeach;?>
  </ul>
</div>
<form class="spiskiinput">
<input type="text" placeholder="Введите искомое слово" id="poisk"></form>
<script type="text/javascript" src="script.js"></script>
</main>
<footer>
  <div class="footertext"> Сделано Родиным Николаем</div>
  <div class="line"></div>
</footer>
</body>
