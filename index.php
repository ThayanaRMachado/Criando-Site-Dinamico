<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Projeto 01</title>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300,400;1,700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/62ed879477.js" crossorigin="anonymous" href="<?php echo INCLUDE_PATH; ?>"></script>
	<link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><!--tag do design responsivo--> 
	<meta name="keywords" content="palavras-chave,do,meu,site"><!--Palavras chave do site-->
	<meta name="description" content="Descrição do meu website"><!--Para o google saber a descrição do site.-->
	<meta charset="utf-8" />
</head>
<body>
	<header>
		<div class="center">
			<div class="logo left"><a href="/">Logomarca</a></div><!--logo-->
			<nav class="desktop right"><!--Navegação p/ desktop.Dependendo do tamanho da tela, ela ficará escondida e a mobile aparece.-->
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contatos">Contato</a></li>
				</ul>
			</nav>
			 <nav class="mobile right"><!--Navegação p/ mobile.Dependendo do tamanho da tela, ela ficará escondida e a desktop aparece.-->
			 	<!--O menu dará lugar a esse ícone qdo a tela reduzir p/ 700px-->
			 	<div class="botao-menu-mobile">
			 		<i class="fas fa-bars"></i>
			 	</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>"sobre>Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>"servicos>Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>"contatos>Contato</a></li>
				</ul>
			</nav>
			<div class="clear"></div><!--Para o background voltar a aparecer-->
		</div><!--center-->
	</header>

	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';

		if (file_exists('pages/'.$url.'.php')) {
			include('pages/'.$url.'.php');
		}else{
			//Podemos fazer o que quiser, pois a página não existe.
			$pagina404 = true;
			include('pages/404.php');
		}
	?>	
	
	<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
		<div class="center">
			<p>Todos os direitos reservados</p>
		</div><!--center-->
	</footer>
	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<!--/Aqui vão ficar todos os códios javaScript.-->
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script><!--está importando arquivos externos-->
</body>
</html>