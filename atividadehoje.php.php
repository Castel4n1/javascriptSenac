<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 13-05-2022 JS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
     <div class="row mt-5 mb-2">
         <h1>Nome: Kauê Castelani do Bomfim</h1>
         <p>Horário de início: 20:18h</p>
     </div>

    <!-- ATIVIDADE 1 -->
    <div class="row mt-5">
        <h2>1) Crie um script para informar quem é o maior valor entre o 1° e 2º número </h2>
        <div class="col-md-6">
            <label for="n1" class="form-label">1º Número</label>
            <input type="text" name="n1" id="n1" class="form-control">
        </div>
        <div class="col-md-6">
            <label for="n2" class="form-label">2º Número</label>
            <input type="text" name="n2" id="n2" class="form-control">
        </div>
        <!-- MSG -->
        <div id="msg" class="alert alert-info mt-2"></div>
        <!-- /MSG -->
    </div>
    <!-- /ATIVIDADE 1 -->


    <!-- ATIVIADE 2 -->
    <div class="row mt-5">
        <h2>2) Crie um script que mostre a quantidade de caracteres enquanto o texto é escrito</h2>
        <div class="col-12">
            <label for="texto" class="form-label">Digite um texto</label>
            <input type="text" name="texto" id="texto" class="form-control">
        </div>
        <div class="col-12 alert alert-secondary mt-2">
            <strong><span id="nCaracteres">0</span></strong> Caracteres
        </div>       
    </div>
    <!-- ATIVIADE 2 -->


    <!-- ATIVIDADE 3 -->
    <div class="row mt-5 mb-5">
        <h2>3) Crie um script para mover o conteudo de uma caixa para outra</h2>
        <div class="col-md-5 offset-md-1">
            <label for="caixa1" class="form-label">Conteudo - CAIXA 1</label>
            <textarea name="caixa1" id="caixa1" cols="30" rows="10" class="form-control"></textarea>
            <button id="btn1" class="btn btn-primary">Mover para caixa 2 >></button>
        </div>
        <div class="col-md-5 offset">
            <label for="caixa2" class="form-label">Conteudo - CAIXA 2</label>
            <textarea name="caixa2" id="caixa2" cols="30" rows="10" class="form-control"></textarea>
            <button id="btn2" class="btn btn-danger"> << Mover para caixa 1</button>
        </div>
    </div>
    <!-- /ATIVIDADE 3 -->

    
    <!-- DADOS DO ALUNO -->
    <div class="row m-5">
        <p>Nome completo: Kauê Castelani do Bomfim</p>
        <p>Horário de Término: 21:55h</p>
    </div>
    <!-- DADOS DO ALUNO -->
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<!--  AREA PARA RESPOSTAS -->
<script> 

// SCRIPT VALOR MAIOR
$('#n2').keyup(function (e) { 
    var n1 = 0;
    var n2 = 0;


});


</script>

</html>