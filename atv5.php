<html>

<head>
    <title>Aula de PHP</title>
</head>

<body>
   

    <h1>Dados da Pessoa</h1>
    

    <form action="radio.php" method="get">

    <label for="nome">Nome</label><br>
    <input type="text" name="nome" id="nome">
    <br>

    <label for="senha">senha</label><br>
    <input type="password" name="senha" id="senha">
    <br>
    
    
        <input type="radio" name="tipo" id="aluno" value="aluno">
        <label for="aluno">Aluno</label><br>
        <input type="radio" name="tipo" id="professor"value="professor">
        <label for="professor">Professor</label><br>
    
    <input type="submit" value="Enviar">
    <input type="reset" value="Limpar">
   
    </form>

  

</body>


</html>