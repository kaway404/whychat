<div id="home">
	<?php 
if(isset($_GET['login'])){
	?>
<div class="form">
	<h1>Login</h1>
	<span>E-mail</span>
	<input id="emaill" type="text" placeholder="Exemplo: fulano@domaion.com	"/>
	<span>Senha</span>
	<input id="senhal" type="password" placeholder="Senha"/>
	<div class="btn" id="login">Login</div>
	<p>Já tenho uma conta, <a href="?registro">Cliquei aqui para realizar registro.</a></p>
	<div id="resposta"></div>
</div>
<?php } else if(isset($_GET['registro'])){?>
<div class="form">
	<h1>Registre-se</h1>
	<span>E-mail</span>
	<input id="emailr" type="text" placeholder="Exemplo: fulano@domaion.com"/>
	<span>Senha</span>
	<input id="senhar" type="password" placeholder="Senha"/>
	<span>Nome</span>
	<input id="nome" type="text" placeholder="Exemplo: Alexandre"/>
	<span>Sobrenome</span>
	<input id="sobrenome" type="text" placeholder="Exemplo: Silva"/>
	<div class="btn" id="registrar">Registrar</div>
	<p>Não tenho uma conta, <a href="?login">Cliquei aqui para fazer login.</a></p>
	<div id="resposta"></div>
</div>
<?php } else{?>
<div class="form">
	<h1>Registre-se</h1>
	<span>E-mail</span>
	<input id="emailr" type="text" placeholder="Exemplo: fulano@domaion.com"/>
	<span>Senha</span>
	<input id="senhar" type="password" placeholder="Senha"/>
	<span>Nome</span>
	<input id="nome" type="text" placeholder="Exemplo: Alexandre"/>
	<span>Sobrenome</span>
	<input id="sobrenome" type="text" placeholder="Exemplo: Silva"/>
	<div class="btn" id="registrar">Registrar</div>
	<p>Não tenho uma conta, <a href="?login">Cliquei aqui para fazer login.</a></p>
	<div id="resposta"></div>
</div>
<?php } ?>
</div>

	<script type="text/javascript" src="static/js/account.js"></script>