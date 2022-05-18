<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 3 JS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <h1>ATIVIDADE 3 JS</h1>       
        <!--  CALCULO DE MÉDIA -->
        <div class="row mt-4 mb-4">
            <h2 class="text-center"> Calculo de Média</h2>
            <div class="col-md-3">
                <label for="n1" class="form-label">N1</label>
                <input 
                min="0" max = "10" step = "0.5"
                type="number" name="n1" id="n1" class="form-control">
            </div>

            <div class="col-md-3">
                <label for="n2" class="form-label">N2</label>
                <input                
                min="0" max = "10" step = "0.5"
                type="number" name="n2" id="n2" class="form-control">
            </div>

            <div class="col-md-3">
                <label for="n3" class="form-label">N3</label>
                <input
                min="0" max = "10" step = "0.5"
                type="number" name="n3" id="n3" class="form-control">
            </div>

            <div class="col-md-3">
                <label for="n4" class="form-label">N4</label>
                <input 
                min="0" max = "10" step = "0.5"
                type="number" name="n4" id="n4" class="form-control">
            </div>

            <div class="col-md-3 offset-md-9 mt-1 mb-1">
                <button id= "btnMedia"class="btn btn-primary">Calcular média</button>
            </div>
            <div class="alert alert-secondary">
                Média : <span id="media"></span> - Resultado <span id="resultado"></span>
            </div>
        </div>
        <!--  CALCULO DE MÉDIA -->

        <!-- TABUADA -->

        <div class="row">
            <h1 class="text-center">TABUADA</h1>
            <div class="col-md-3 offset-md-3">
                <label for="numero_tabuada" class="form-label">Informe um número</label>
                <input 
                min="0" max = "10" step = "0.5"
                type="number" name="numero_tabuada" id="numero_tabuada" class="form-control">                
            </div>
            
            <div class="col-md-3">                
                <button id="btnTabuada"class="btn btn-dark mt-4">Criar a tabuada</button>
            </div>

            <h2 id="titulo_tabuada" class="text-center m-2">Tabudada do XX</h2>
            <p id="tabuada"></p>
        </div>
        
        <!-- TABUADA -->

    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<!--  USO DE JQUERY -->
<script>

    //MEDIA

    $('#btnMedia').click(function (e) { 
        e.preventDefault();
    
        let media = ((parseFloat($('#n1').val() ) + parseFloat($('#n2').val() ) + parseFloat($('#n3').val() ) + parseFloat($('#n4').val() ) )/4);
        console.log(media);

        $('#media').empty().prepend(media);
        
        if(media < 4.99){
            $('#resultado').empty().append('REPROVADO');
        }
        else if(media > 5){
            $('#resultado').empty().append('APROVADO');
        }
    });

    // tabuada

    $('#btnTabuada').click(function (e) { 
        e.preventDefault();

        let valor = $('#numero_tabuada').val();   
                 
        for (let i = 1; i <=10 ; i++) 
        {
            $('#tabuada').append(valor * i);                  
            
        };
        
        


    });


    
 
</script>

</html>