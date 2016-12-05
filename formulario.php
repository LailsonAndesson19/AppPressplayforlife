<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário - Press play for life</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style_formulario.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet">
   
</head>
<body>
	
 <div class="container">
    <form action="processamento.php" method="post"  enctype="multipart/form-data">
    
      <div class="form-group">
        <label>Nome:</label>
          <input type="text" class="form-control" name="nome" placeholder="Digite seu nome">
      </div>
      
      <div class="form-group">
        <label>Sexo:</label>
          <select name="sexo" class="form-control" placeholder="Qual seu sexo">
            <option value="Feminino">Feminino</option>
            <option value="Masculino">Masculino</option>
            <option value="Outros" selected>Outros</option>
          </select>
      </div>
      
      <div class="form-group">
        <label>Email:</label>
          <input type="email" class="form-control" name="email" placeholder="Digite seu email" required>
      </div>
      
       <div class="form-group">
        <label>Jogos:</label>
          <input type="text" class="form-control" name="jogo" placeholder="Digite seus jogos preferidos" required>
      </div>
      
      <div class="form-group">
        <label>Comente:</label>
          <textarea class="form-control" name="exp" rows="5" required></textarea>
      </div>
      
      <div class="form-group">
        <label>Envie nos seu vídeo</label>
          <input type="file" class="form-control" name="arq" required>
      </div>
      <br>
		<button type="submit" class="btn btn-default btn-block" ><h4 class="panel-title" >Enviar</h4></button>
    </form>    
                
  </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>
