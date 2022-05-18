<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 1 JS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <h1>ATIVIDADE 1 JS</h1>

            <!--  CAIXA DE TEXTO -->        
            <div class="row">
                <h1 class="text-center">CAIXA DE TEXTO</h1>

                <div id="caixa" style="min-height:150px;" class="border border-dark col-md-6 offset-md-3"></div>
            <!--  CAIXA DE TEXTO -->   

            <!-- CONTADOR -->
            <div class="alert alert-success" class="col-md-6 offset-md-3">
                Faltam <span id="contador"> 50 </span> caracters
            </div>
            <!-- CONTADOR -->


           

            <p class="mt-4 text-center">
                <button id="btn1" class="btn btn-success"> Abacaxi</button>
                <button id="btn2" class="btn btn-primary"> Batata</button>
                <button id="btn3" class="btn btn-danger"> Carvão</button>
                <button id="btn4" class="btn btn-dark"> Dados</button>
                <button id="btn5" class="btn btn-info">Facas</button>
                <button id="btn6" class="btn btn-primary"> Garfos</button>
                <button id="btn7" class="btn btn-dark"> Hidrante</button>
                <button id="btn8" class="btn btn-success"> Individual</button>
                <span id="btnLimpar"class="btn btn-success 1"> Limpar</span>
            </p>
        </div>
        <!--  CAIXA DE TEXTO -->       

    </div>
    <br><br><br><br><br><br><br><br><br><br>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<!--  USO DE JQUERY -->

<!-- FUNÇÃO DO CONTADOR -->
<script>
        
        function contador(){

            var texto =  $('#caixa').text()
            var tamanho = texto.length;
            var limite = 50;
            var textoFinal = texto.substr(0,50);

            
        }
        
        //pegar o valor do botão clicando
        $('button').click(function (e) { 
            e.preventDefault();                       
            var valor = $(this).text();        
            $('#caixa').append(valor + ", ");

            console.log(valor);
            contador();
           
        });
        

        $('#btnLimpar').click(function (e) { 
            e.preventDefault();
            var apagar = $(this).text();
            $('#caixa').append(apagar).empty(); 
            
            contador();

            $('button').removeClass('disabled');

            
        });

</script>

</html>