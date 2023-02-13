<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
	 <link rel="stylesheet" type="text/css" href="estilo.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
</head>
<body>
<nav>
  <ul>
    <li><a href="painel.php">Home</a></li>
    <li><a href="inscrição.php">Cadastrar novos pacientes</a></li>
    <li><a href="Remover.php">Remover pacientes</a></li>
    <li><a href="exibição.php">Exibição dos pacientes</a></li>
    <li><a href="Exibir_visitas.php">Exibir todas as visitas</a></li>
    <li><a href="Reescrever.php">Atualizar pacientes já cadastrados</a></li>
    <li><a href="Logout.php">Sair</a></li>

  </ul>
</nav>
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
