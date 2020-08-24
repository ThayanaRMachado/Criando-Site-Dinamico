<section class="banner-principal">
		<div class="overlay"></div><!--overlay - vai ter opacidade dem cima da imagem.-->
		<div class="center">
			<form>
				<h2>Qual o seu melho e-mail?</h2>
				<input type="email" name="email" required>
				<input type="submit" name="acao" value="Cadastrar">
			</form>
		</div><!--center-->
	</section><!--banner-principal-->

	<section class="descricao-autor">
		<div class="center">
			<div class="w50 left"><!--w50 sempre no css vai pegar 50% da largura da tela.-->
				<h2>Guilherme C. Grillo</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
			</div><!--w50-->
			<div class="w50 left">
				<img class="right" src="<?php echo INCLUDE_PATH; ?>images/foto.jpg">
			</div><!--w50-->
			<div class="clear"></div><!--Ao utilizar float, a altura ñ é mais calculada e tem q/ limpar. p/ ñ ter problema de espaçamento.-->
		</div><!--center-->
	</section><!--descricao-autor-->

	<section class="especialidades"><!--Ao utilizar float, a altura ñ é mais calculada e tem q/ limpar.-->
		<div class="center">
		<h2 class="title">Especialidades</h2>
			<div class="w33 left box-especialidade">
				<h3><i class="fab fa-css3"></i></h3>
				<h4>CSS3</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
			</div><!--box-especialidade-->
			<div class="w33 left box-especialidade"><!--Será utilizada qdo. tiver 3 box na mesma fileira.-->
				<h3><i class="fab fa-html5"></i></h3>
				<h4>HTML5</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
			</div><!--box-especialidade-->
			<div class="w33 left box-especialidade">
				<h3><i class="fab fa-js-square"></i></h3>
				<h4>JavaScript</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
			</div><!--box-especialidade-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--especialidades-->

	<section class="extras">
		<div class="center">
			<div class="w50 left depoimentos-container">
				<h2 class="title">Depoimentos dos nossos clientes</h2>
				<div class="depoimento-single">
					<p class="depoimento-descricao">"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old."</p>
					<p class="nome-autor">Lorem Ipsum</p>
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p class="depoimento-descricao">"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old."</p>
					<p class="nome-autor">Lorem Ipsum</p>
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p class="depoimento-descricao">"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old."</p>
					<p class="nome-autor">Lorem Ipsum</p>
				</div><!--depoimento-single-->
			</div><!--w50-->
			<div class="w50 left servicos-container">
				<h2 class="title">Serviços</h2>
				<div class="servicos">
					<ul>
						<li>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</li>
						<li>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</li>
						<li>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</li>
					</ul>
				</div><!--servicos-->
			</div><!--w50-->
			<div class="clear">
		</div><!--center-->
	</section><!--extras-->