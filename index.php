<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
	 <link rel="stylesheet" type="text/css" href="estilo.css">
    <style>
        .Verificador{
            padding: 450px;
            font-size: 20px;
        }
        .Enviar{
            text-align: center;
        }

        body{
                background-image: url(LogoSample_ByTailorBrands.jpg);
            }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
</head>
<body>
    <form class="Verificador" action="submit_form_usuarios.php" method="post">
        <label>Nome:</label>
        <input type="text" id="nome" name="nome"><br>
        <label>Email:</label>
        <input type="email" id="email" name="email"><br>
        <label>Senha:</label>
        <input type="password" id="senha" name="senha"><br>
        <input class = "Enviar" type="submit"  value="Enviar">
   
    </form>
</body>
</html>
