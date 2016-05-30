@extends ('navbar')

<!DOCTYPE html>
<html>
    <head>
        <title>Cadastre-se</title>
        
    </head>  
    <style>
    .stepwizard-step p {
    margin-top: 10px;
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;

}

.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
    </style>
    <body>
        <section style="margin-top: 75px; ">
            <div class="middle-cadastra">                
                <div class="middlecenter-cadastra text-center">                
                    <div class="container">
                        <div class="stepwizard">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step">
                                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                    <p>Step 1</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                    <p>Step 2</p>
                                </div>
                                <div class="stepwizard-step">
                                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                <p>Step 3</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form method="post" action="/promessometro/public/cadastro/2">
                        Nome*
                        <br>
                        <input type="text" name='nome'>
                        <br><br>
                        Email*
                        <br>
                        <input type="email" name='email'>
                        <br><br>
                        Cidade*
                        <br>
                        <input type="number" name='id_cidade'>
                        <br><br>
                        ID Tipo Usuario
                        <br>
                        <input type="number" name='id_tipo_usuario'>
                        <br><br>
                        OSA*
                        <br>
                        <input type="number" name='id_osa'>
                        <br><br>
                        Cargo*
                        <br>
                        <input type="text" name='cargo'>
                        <br><br>
                        <input type="submit" value="Voltar" class="btn btn-success btn-lg" onclick="location.href= '/promessometro/public'"> 
                        <input type="submit" class="btn btn-success btn-lg" value="Próximo">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                    <br><br>
                </div>
            </div>
        </section>
    </body>
</html>
