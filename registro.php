<html>
<head>
<meta charset="utf-8">
<title>Mine Horta Vale Verde</title>
</head>
<body>
<h1>Mine Horta Vale Verde </h1>
<form action="salvar.php" method="post">
N°: <input name="numb"> <br>
Data: <input name="data"> <br>
Firma: <input name="firma"> <br>
Endereço: <input name="end">
Complemento: <input name="comple"> <br>
Bairro: <input name="bairro"> 
Cidade: <input name="cidade"> 
Estado: <input type="text" name="estado"> <br>
CEP: <input name="cep">
CNPJ: <input name="cnpj"> 
Inscrição: <input name="ins"> <br>
Tel.: <input name="tel">
Cel.: <input name="cel"> <br> 
Email: <input name="email"> <br>
OBS.: <br> 
<textarea name="obs" rows="6" cols="80"><?=$obs?></textarea> <br>
<input type="submit" value="confirmar">
</form>
</body>
</html> 