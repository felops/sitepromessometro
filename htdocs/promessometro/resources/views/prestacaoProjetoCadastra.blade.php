@extends ('navbar')

<!DOCTYPE html>
<html>
    <head>
        <title>CADASTRO PRESTACAO DE CONTAS DE PROJETOS</title>
        
    </head>  
    <body>
    <section style="margin-top: 75px; ">
        <div class="middle-cadastra">
                <div class="middlecenter-cadastra text-center">
                    <form action = "cadastrar" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                            <li>ID_PROJETO</li>
                            <input type="text" name="ID_PROJETO"></input><br>
                            <li>ID_RESPONSAVEL_PROJETO</li>
                            <input type="text" name="ID_RESPONSAVEL_PROJETO"></input><br>
                            <li>DATA_REFERENCIA</li>
                            <input type="text" name="DATA_REFERENCIA"></input><br>
                            <li>PERCENTUAL_PROJETO</li>
                            <input type="text" name="PERCENTUAL_PROJETO"></input><br><br>
                            <input type="submit" value="Cadastrar" class="btn btn-success btn-lg"></input><br><br>
                            </form>
                            <input type="submit" value="Voltar" class="btn btn-success btn-lg" onclick="location.href= '/promessometro/public/prestacaoprojeto'"> 
                </div>
            </div>
        </section>
    </body>
</html>
