<?php 
    if(isset($_GET['escola'])){
        $escola = $_GET['escola'];
        
    } else {
        $escola = 'null';
    };
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário Alunos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

</head>
<body>
    <div class='container'>
        <div class='row'>
            <div class="text-center">
                <img src="img/logo_imed.png" class="rounded" alt="Logo IMED" style="width:30%; padding:20px;">
            </div>
            <h1 class="text-center">Formulário para solicitar o Brinde</h1>
        </div>
        <div class='row'>
            <form action="insere.php" method="post">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" >Nome Completo</span>
                        </div>
                        <input type="text" name="nome" required autofocus class="form-control" placeholder="Nome Completo" aria-label="Nome Completo" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" >Email</span>
                        </div>
                        <input type="email" name="email" required class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" >Celular</span>
                        </div>
                        <input type="text" name="celular" required class="form-control" placeholder="Celular" aria-label="Celular" aria-describedby="basic-addon1" pattern="[0-9()-\s]*">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" >Endereço</span>
                        </div>
                        <input type="text" name="endereco" required class="form-control" placeholder="Endereço" aria-label="Endereço" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" >Número</span>
                        </div>
                        <input type="text" name="numero" required class="form-control" placeholder="Número" aria-label="Número" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="cidade">Cidade</label>
                        </div>
                        <select class="custom-select" id="cidade" name="cidade">
                            
                            <option value="Passo Fundo">Passo Fundo</option>
                            <option value="Marau">Marau</option>
                            <option value="Carazinho">Carazinho</option>
                            <option value="Não-me-Toque">Não-me-Toque</option>
                            <option value="Soledade">Soledade</option>
                            <option value="Casca">Casca</option>
                            <option value="Getulio Vargas">Getúlio Vargas</option>
                            <option value="Outra">Outra</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" >Ano Conclusão</span>
                        </div>
                        <input type="text" name="conclusao" required class="form-control" placeholder="Ano Conclusão Ensino Médio" aria-label="Ano Conclusão" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="cidade">Curso de Interesse</label>
                        </div>
                        <select class="custom-select" id="interesse" name="interesse">
                            
                            <option value="Passo Fundo">Administração</option>
                            <option value="Marau">Arquitetura e Urbanismo</option>
                            <option value="Ciencia da Computacao">Carazinho</option>
                            <option value="Ciencias Contabeis">Ciências Contábeis</option>
                            <option value="Direito">Direito</option>
                            <option value="Enfermagem">Enfermagem</option>
                            <option value="Engenharia Civil">Engenharia Civil</option>
                            <option value="Engenharia de Producao">Engenharia de Produção</option>
                            <option value="Engenharia de Eletrica">Engenharia de Elétrica</option>
                            <option value="Engenharia Mecanica">Engenharia Mecânica</option>
                            <option value="Medicina">Medicina</option>
                            <option value="Medicina Veterinaria">Medicina Veterinária</option>
                            <option value="Odontologia">Odontologia</option>
                            <option value="Psicologia">Psicologia</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <input type="hidden" name="escola" class="form-control" placeholder="Escola" aria-label="Escola" aria-describedby="basic-addon1" value=<?php echo '"'.$escola.'"';?>>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script type="text/javascript">
        $(function(){
        var telMask = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        numOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(telMask.apply({}, arguments), options);
            }
        };

        $('input[name="celular"]').mask(telMask, numOptions);
        });

    </script>
    <script>
        function isEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }
        $( "input[name='email']" ).change(function() {
        // Check input( $( this ).val() ) for validity here
            console.log(isEmail($(this).val()));
            if(!isEmail($(this).val())){
                $(this).val("");
                $(this).focus();
            }
        });
    </script>
</body>
</html>