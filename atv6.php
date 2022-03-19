<html>

<head>
    <title>Aula de PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
   

    <h1>Dados da Pessoa</h1>
    

    <form action ="boot.php" method="get">
       
    <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome"  placeholder="Qual teu nome ?">
            
        </div>
    
    <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Qual teu email ?">
            
        </div>
        <br>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha Monstra ">
        </div>
        <br>
        <div class="form-group">
            <label for="cidade">Cidade Nasc</label>
            <input type="text" class="form-control" id="cidade" name="cidade" aria-describedby="emailHelp" placeholder="Ji-Paraná">
            
        </div>
        <br>
        <div class="form-group">
            <label for="estado">Estado Nascimento</label>
            <input type="text" class="form-control" id="estado" name="estado" aria-describedby="emailHelp" placeholder="RONDONIA">
            
        </div>
        <br>
        <div class="form-group">        
            <input type="radio" name="tipo" id="aluno" value="aluno">
            <label for="aluno">Aluno</label><br>
            <input type="radio" name="tipo" id="professor"value="professor">
            <label for="professor">Professor</label><br>
        </div>
        <br>

        <div class="form-group">
            <label for="sujestao">Sujestão</label>
            <textarea class="form-control" id="sujestao" name="sujestao" rows="3"></textarea>
        </div>
        <br>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="concorda" name="concorda">
            <label class="form-check-label" for="concorda">Concorda ??? </label>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="reset" class="btn ">Limpar</button>
</form>

  

</body>


</html>