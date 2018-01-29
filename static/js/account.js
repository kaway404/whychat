$(document).ready(function() {
    $("#registrar").click(function() {
        var emailr = $("#emailr").val(); 
        var senhar = $("#senhar").val();
		var nomer = $("#nome").val(); 
        var sobrenomer = $("#sobrenome").val();
        $.post("register.php", {emailr: emailr,senhar: senhar,nomer: nomer,sobrenomer: sobrenomer},
        function(data){
         $("#resposta").html(data);
         }
         , "html"); 
         return false;
    });
}); 

$(document).ready(function() {
    $("#login").click(function() {
        var emaill = $("#emaill").val(); 
        var senhal = $("#senhal").val();
        $.post("login.php", {emaill: emaill,senhal: senhal},
        function(data){
         $("#resposta").html(data);
         }
         , "html"); 
         return false;
    });
}); 