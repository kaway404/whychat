<?php
	require 'system/database.php';
	require 'system/config.php';
	$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
    $user = DBRead('user', "WHERE id = '{$iduser}' LIMIT 1 ");
    $user = $user[0];
    $idcry = DBEscape( strip_tags(trim($_COOKIE['thecry']) ) );
    $usercry = DBRead('user', "WHERE thecry = '{$idcry}' LIMIT 1 ");
    $usercry = $usercry[0];
?>
<div id="chat">

<div class="left menu">
	<div class="status">
	<div class="friends">
	</div>
	<div id="p">WhyChat</div>
</div>

<div class="search">
	<input type="text" id="busca" placeholder="Pesquisar no WhyChat"/>	
	<div class="peoples">
		<div class="people">
			<div id="aosa">
				<img src="https://static.xx.fbcdn.net/rsrc.php/v3/yh/r/TtT8ytNf438.png"/>
			</div>
		</div>
		<span>Nova mensagem</span>
	</div>

<div class="src">

</div>

</div>

<script>
$("document").ready(function(){
  $("#busca").keyup(function(){
	var $this = $(this);
	var val   = $this.val();
	console.log(val);
	
	if(val == ""){
		$('.src').html("");
	}else{
		$.ajax({
		  url: "busca.php",
		  type: "POST",
		  data: {nome: val},
		  cache: false,
		  
		  success: function(res){
			$('.src').html(res);
		  }
		  
		});
	}
	
  });
  
  $('html, body').click(function(){
	$('.src').html("");
  });
  
});
</script>


</div>




<div class="toper"></div>

</div>