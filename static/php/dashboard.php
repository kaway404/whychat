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



<div class="toper">
	<?php 
if(isset($_GET['iduser'])){
	$chatuser = DBEscape( strip_tags(trim($_GET['iduser']) ) );
	$chatid = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
    $chatid = DBRead('user', "WHERE id = '{$chatuser}' LIMIT 1 ");
    $chatid = $chatid[0];
	?>
	<p class="peoplechat"><?php echo $chatid['nome']; ?> <?php echo $chatid['sobrenome']; ?></p>
	<?php } ?>
</div>

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

<div class="centermsg">
<?php 
if(isset($_GET['iduser'])){
	$chatuser = DBEscape( strip_tags(trim($_GET['iduser']) ) );
	$chatid = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
    $chatid = DBRead('user', "WHERE id = '{$chatuser}' LIMIT 1 ");
    $chatid = $chatid[0];
	?>

	<div class="msgtoper" id="todasmsg">

	</div>

	<div class="bottommsg">
	<form method="post">
	<input type="text" id="sendmsg" class="sendmsg" placeholder="Escreva uma mensagem..."/>
	<button id="enviarsms"></button>
	</form>	
	</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script>
$(document).ready(function() {
    $("#enviarsms").click(function() {
        var msg = $("#sendmsg");
        var msgPost = msg.val();
        $.post("send.php?who=<?php echo $_GET['iduser']; ?>", {msg: msgPost},
        function(data){
         $("#resposta2").html(data);
         }
         , "html");
         return false;
    });
});
</script>

<script>
function chatrealtime(){
	var req = new XMLHttpRequest();
	req.onreadystatechange = function(){
		if(req.readyState == 4 && req.status == 200){
			document.getElementById('todasmsg').innerHTML = req.responseText;
		}
	}

req.open('GET', 'chat.php?who=<?php echo $_GET['iduser']; ?>', true);
req.send();

}

setInterval(function(){chatrealtime();}, 1000);
</script>

	<?php } else{?>

	<?php } ?>
</div>

</div>


