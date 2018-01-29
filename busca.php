<?php
require 'static/php/system/database.php';
require 'static/php/system/config.php';
?>
<?php 
$nome = $_POST['nome'];
?>

<?php
if(empty($nome)){
	echo "";
}else{?>
<p style="padding: 10px;">Buscas encontradas</p>
<?php
$profile2 = DBRead( 'user', "WHERE nome LIKE '%$nome%' ORDER BY id DESC LIMIT 9" );
 if (!$profile2)
	echo "<p style='padding: 10px;'>Nenhuma busca encontrada</p>";
else 
	foreach ($profile2 as $profile22):
 ?>

<div class="peoples searchp">
		<div class="people">
			<div id="aosa">
				<img src="https://static.xx.fbcdn.net/rsrc.php/v3/yh/r/TtT8ytNf438.png"/>
			</div>
		</div>
		<span><?php echo $profile22['nome']; ?> <?php echo $profile22['sobrenome']; ?></span>
	</div>

 <?php endforeach; } ?>