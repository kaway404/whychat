<?php
require 'static/php/system/database.php';
require 'static/php/system/config.php';
?>

<?php
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$whos = $_GET['who'];
$msgs = DBRead( 'chat', "WHERE id and eu = $iduser ORDER BY id ASC" );
if (!$msgs)
echo '';
else  
	foreach ($msgs as $msg):	 
?>


<div class="_1t_p clearfix">
	<div class="_41ud">
		<div class="clearfix _o46 _3erg _29_7 direction_ltr text_align_ltr">
			<div class="_3058 _ui9 _hh7 _s1- _52mr _3oh-" id="js_2m"><div class="_aok"><span class="_3oh- _58nk"><?php echo $msg['texto']; ?></span></div></div><span class="_40fu"><span class="_2u_d"></span>
		</span>
	</div>
</div>
</div>


<?php endforeach; ?>

<!-- <?php
if($msg['eu'] == $iduser) {
?>
<div class="_1t_p clearfix">
	<div class="_41ud eumandei">
		<div class="clearfix _o46 _3erg _29_7 direction_ltr text_align_ltr">
			<div class="_3058 _ui9 _hh7 _s1- _52mr _3oh- eumandeiback" id="js_2m"><div class="_aok"><span class="_3oh- _58nk"><?php echo $msg['texto']; ?></span></div></div><span class="_40fu"><span class="_2u_d"></span>
		</span>
	</div>
</div>
</div>

<?php } ?> -->


