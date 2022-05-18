<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXEMPLO JS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <h1>EXEMPLO JS</h1>

        <p>
            <button class="btn btn-primary"
            onclick="olaMundo()"
            >
                OLÁ MUNDO
            </button>

            <button class="btn btn-dark" 
             onclick="fui('Thomas','INTERVALO...')"
            >
                FUI.....
            </button>
        </p>

        <!-- RETANGULO -->
        <div class="row">

            <div
            id="quadrado" 
            style="height:150px;" 
            class="bg-secondary col-md-6 offset-md-3">                    
            </div>

            <p class="mt-4 text-center">
                <button id="btnVerde"     class="btn btn-success"> VERDE</button>
                <button id="btnAzul"      class="btn btn-primary"> AZUL</button>
                <button id="btnVermelho"  class="btn btn-danger"> VERMELHO</button>
                <button id="btnPreto"     class="btn btn-dark"> PRETO</button>
                <button id="btnRedondo"   class="btn btn-info">REDONDO</button>
                <button id="btnMostrar"   class="btn btn-primary"> Mostrar</button>
                <button id="btnEsconder"  class="btn btn-dark"> Esconder</button>
                <button id="btnAbreFecha" class="btn btn-success"> Abre / Fecha</button>
            </p>
        </div>
        <!-- /RETANGULO -->

        <!--  CALCULADORA -->
        <div class="row">
            <h1>CALCULADORA</h1>
            <p>
                <input type="number" name="n1" id="n1">
                <span id="operacao"></span>
                <input type="number" name="n2" id="n2">
                =
                <input type="text" name="resultado" id="resultado">
            </p>
            <p>
                <button id="btnSomar" class="btn btn-dark">
                    <i class="fa-solid fa-plus"></i>
                </button>
                <button id="btnSubtrair" class="btn btn-danger">
                    <i class="fa-solid fa-minus"></i>
                </button>
                <button id="btnMultiplicar" class="btn btn-success">
                <i class="fa-solid fa-asterisk"></i>
                </button>
                <button id="btnDividir" class="btn btn-primary">
                <i class="fa-solid fa-divide"></i>
                </button>
            </p>
        </div>
        <!--  /CALCULADORA -->

        <!-- TEXTOS -->
        <div class="row">
            <h1>TEXTOS</h1>
            <div class="col-md-4">
                <label class="form-label" for="nome">Nome</label>
                <input class="form-control" type="text" name="nome" id="nome">
            </div>
            <div class="col-md-4">
                <label class="form-label" for="email">E-mail</label>
                <input class="form-control" type="text" name="email" id="email">
            </div>
            <div class="col-md-4">
                <label class="form-label" for="texto">Texto</label>
                <input class="form-control" type="text" name="texto" id="texto" disabled>
            </div>

            <p id="mudarCor"> Mudar cor? é só clicar! </p>
        </div>
        <!-- /TEXTOS -->

        <!-- VALIDAÇÕES -->
        <div class="row">
            <h1>VALIDAÇÕES</h1>
            <div class="col-md-6">
                <label class="form-label" for="senha">Senha</label>
                <input name="senha" id="senha" class="form-control" type="text" >
            </div>
            <div class="col-md-6">
                <label class="form-label" for="confirma_senha">Confirma Senha</label>
                <input name="confirma_senha" id="confirma_senha" class="form-control"type="text" >
            </div>
        </div>
        <!-- /VALIDAÇÕES -->

        <!-- MSG -->
        <div id="msg" class="alert alert-danger" style="display: none;"></div>

        <div id="msg1" class="alert alert-danger" style="display: none;"></div>

        <!-- MSG -->


        <div class="col-md-1">
            <button id="btnEnviar" class="btn btn-success"> 
                Enviar 
            </button>
        </div>
        
    </div>
    <br><br><br><br><br><br><br><br><br><br>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    function olaMundo(){
        //alert("Olá Mundo !.....");
        console.log("Olá Mundo !.....");
    }
    function fui(nome,msg){
        //alert(nome + "... Fui...."+msg);
        console.log(nome + "... Fui...."+msg);
    }
</script>

<!--  USO DE JQUERY -->


<!-- VALIDAÇÃO -->

<script>
    $('#confirma_senha').blur(function (e) { 
        e.preventDefault();
        let senha =$('#senha').val();
        let confirma =$(this).val();
        if (senha == confirma) {
            $('#btnEnviar').removeClass('disabled');

            //$('#msg').empty();

            $('#msg').empty().append('DEU CERTO');

        } else {
            $('#btnEnviar').addClass('disabled')
            
            $('#msg').empty().append('DEU RUIM');
        }
    });
        //aparecer minimo e maximo de tamanho, sendo maximo 8, minimo 4
        //PODERIA UTILIZAR O KEYUP COMO FUNÇÃO

        $('#senha').mouseover(function (e) { 
            e.preventDefault();
            let tamanho = $(this).val();
            console.log(tamanho.length);

        if (tamanho.length < 4) {

            $('#msg1').empty().append('senha curta demais').show();
            $(this).focus();

            
        } else if(tamanho.length ) {
            $('#msg2').empty().append('senha segura').hide();
        }
        else {
            $('#msg1').empty().prepend('SENHA LONGA DEMAIS').show();

        }
        });
</script>


    
    <!--FIM VALIDAÇÃO -->

<script>
    $('#btnVerde').on('click', function () {        
        //remover as classes CSS do elemento
        //$('#quadrado').removeClass('bg-secondary');
        //$('#quadrado').addClass('bg-success');
        $('#quadrado').removeAttr('class');
        $('#quadrado').attr('class','bg-success col-md-6 offset-md-3');
    });

    $('#btnAzul').on('click', function () {       
        $('#quadrado').removeAttr('class');
        $('#quadrado').attr('class','bg-primary col-md-6 offset-md-3');
    });

    $('#btnVermelho').on('click', function () {       
        $('#quadrado').removeAttr('class');
        $('#quadrado').attr('class','bg-danger col-md-6 offset-md-3');
    });

    $('#btnPreto').on('click', function () {       
        $('#quadrado').removeAttr('class');
        $('#quadrado').attr('class','bg-dark col-md-6 offset-md-3');
    });

    $('#btnRedondo').mouseover(function () {       
        $('#quadrado').addClass('rounded-circle');
    });

    $('#btnEsconder').click(function (e) { 
        e.preventDefault();
        $('#quadrado').hide();        
    });

    $('#btnMostrar').click(function (e) { 
        e.preventDefault();
        $('#quadrado').show();        
    });

    $('#btnAbreFecha').click(function (e) { 
        e.preventDefault();
        $('#quadrado').toggle('slow');        
    });

    // CALCULADORA
    $('#btnSomar').click(function () { 
        let n1 = $('#n1').val();
        let n2 = $('#n2').val();
        let resultado = parseFloat(n1) + parseFloat(n2);
        $('#resultado').val(resultado);
        $('#resultado').attr('disabled','disabled')
        $('#operacao').empty().append('<stong>+</strong>');
    });

    $('#btnSubtrair').click(function () { 
        let n1 = $('#n1').val();
        let n2 = $('#n2').val();
        let resultado = parseFloat(n1) - parseFloat(n2);
        $('#resultado').val(resultado);
        $('#resultado').attr('disabled','disabled')
        $('#operacao').empty().append('<stong>-</strong>');
    });

    $('#btnMultiplicar').click(function () { 
        let n1 = $('#n1').val();
        let n2 = $('#n2').val();
        let resultado = parseFloat(n1) * parseFloat(n2);
        $('#resultado').val(resultado);
        $('#resultado').attr('disabled','disabled')
        $('#operacao').empty().append('<stong>*</strong>');
    });

    $('#btnDividir').click(function () { 
        let n1 = $('#n1').val();
        let n2 = $('#n2').val();
        let resultado;
        if(parseFloat(n2) != 0){
            resultado = parseFloat(n1) / parseFloat(n2);
        }else{
            resultado = 'Divisão por Zero';
        }
        
        $('#resultado').val(resultado);
        $('#resultado').attr('disabled','disabled')
        $('#operacao').empty().append('<stong>/</strong>');
    });

    $('#n2').blur(function (e) { 
        e.preventDefault();
        let n1 = $('#n1').val();
        let n2 = $(this).val();
        let resultado = parseFloat(n1) + parseFloat(n2);
        $('#resultado').val(resultado);
        $('#resultado').attr('disabled','disabled')
    });

    // TEXTOS
    $('#nome').keyup(function (e) { 
        var texto = $(this).val();
        $('#texto').val(texto);
    });

    $('#nome').blur(function (e) { 
        e.preventDefault();
        let texto = $(this).val();        
        $(this).val(texto.toUpperCase());        
    });

    $('#email').blur(function (e) { 
        e.preventDefault();
        let texto = $(this).val();
        $(this).val(texto.toLowerCase());
    });

    $('#mudarCor').click(function (e) { 
        e.preventDefault();
        $('label').addClass('text-danger');        
    });

// VALIDAÇÕES




    
</script>

</html>