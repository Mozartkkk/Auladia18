<?php
$nota1 = isset($_POST['nota1']) ? $_POST['nota1'] : null;
$nota2 = isset($_POST['nota2']) ? $_POST['nota2'] : null;
$nota3 = isset($_POST['nota3']) ? $_POST['nota3'] : null;
$nota4 = isset($_POST['nota4']) ? $_POST['nota4'] : null;
$aluno = isset($_POST['aluno']) ? $_POST['aluno'] : null;

function media($nota1,$nota2,$nota3,$nota4){
    $notas=($nota1+$nota2+$nota3+$nota4)/4;
    return $notas;
}

$nota_media=media($nota1,$nota2,$nota3,$nota4);

if ($nota1 < 0 || $nota1 >= 11 || $nota2 <0 || $nota2 >= 11 || $nota3 <0 || $nota3 >= 11 || $nota4 <0 || $nota4 >= 11):
echo "Nota  invalida, gentileza Informar Notas de 0 a 10". "<br>";
endif;

echo "Nome do Aluno: ". $aluno . "<br>"
."Sua nota 1: ". $nota1 . "<br>"
."Sua nota 2: ". $nota2 . "<br>"
."Sua nota 3: ". $nota3 . "<br>"
."Sua nota 4: ". $nota4 . "<br>"
."Sua media: ". $nota_media. "<br>";

if ($nota_media >=8):
echo "Aluno Aprovado!";
else:
echo "Aluno Reprovado!";
endif;


?>
<html>
<body>
<div class="container">
    <h1>Calcula Media</h1>
    <hr class="divider" />
    <div class="row">
        <div class="col-md-12 col-sm-12">

            <form action="?" method="post">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="aluno">Informe o nome do aluno:</label>
                            <input type="text" class="form-control" name="aluno" id="aluno" >
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="nota1">Informe a nota 1:</label>
                            <input type="text" name="nota1" id="nota1" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="nota2">Informe a nota 2:</label>
                            <input type="text" name="nota2" id="nota2" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="nota3">Informe a nota 3:</label>
                            <input type="text" name="nota3" id="nota3" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="nota4">Informe a nota 4:</label>
                            <input type="text" name="nota4" id="nota4" class="form-control">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12 text-right">
                        <input type="submit" class="btn btn-success" value="Calcular">
                    </div>
                </div>

            </form>
        </div>

    </div>
</div>
<?php include("includes/footer.php"); ?>
</body>
</html>