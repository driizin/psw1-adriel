<?php
include_once ("dados.php");
 if( !empty($_POST['form_submit']) ){
 obterDados($_POST);
 }
 ?>


<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>formulario</title>
</head>

<body>
    <header id="cabeçalho">

        <div class="conteudo">

            <div class="caixa-img"><img class="logo" src="WhatsApp Image 2023-02-07 at 10.44.55.jpeg" alt="logo-unifg"></div>

            <div class="menu">
                <div class="menus">Home</div>
                <div class="menus">Anteriores</div>
                <div class="menus">Localização</div>
                <div class="menus">Entra</div>
            </div>
        </div>

        <div class="caixa-linha">
            <span class="linha1"></span>
            <spam class="linha"></spam>
        </div>

    </header>

    <main id="corpo">

        <div class="conteudo-for">
            <div class="titlo">
                <h1>FORMULÁRIO DE CADASTRO</h1>
            </div>
            <div class="caixa-formulario">
                <form class="form" action="dados.php" method="get">
                    <div class="caixa-per">

                        <div class="for-1">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" id="nome" required>
                        </div>
                        
                        <div class="for-2">
                            <label for="cpf">CPF:</label>
                            <input type="" name="cpf" id="cpf" required>
                        </div>

                    </div>
                    <div class="caixa-per">
                        <div class="for-3">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" required placeholder="Digite seu email">
                        </div>
                        <div class="for-4">
                            <label for="senha">Senha:</label>
                            <input type="password" name="senha" id="senha" required placeholder="Digite sua senha">
                        </div>
                    </div>
                    <div class="caixa-per">
                        <div class="for-5">
                            <label for="cidade">Cidade:</label>
                            <input type="text" name="cidade" id="cidade" required>
                        </div>
                        <div class="for-6">
                            <label for="estado">Estado:</label>
                            <select name="estado" id="estado" required>
                                <option value="">Selecione</option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MG">MG</option>
                                <option value="MS">MS</option>
                                <option value="MT">MT</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="PR">PR</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="RS">RS</option>
                                <option value="SC">SC</option>
                                <option value="SE">SE</option>
                                <option value="SP">SP</option>
                                <option value="TO">TO</option>
                            </select>
                        </div>
                        <div class="for-7">
                            <label for="cep">Cep:</label>
                            <input type="number" name="cep" id="cep" required>
                        </div>

                    </div>
                    <div class="caixa-per">
                        <div class="for-8">
                            <label for="ocupacao">Ocupações:</label>
                            <select name="ocupacao" id="ocupacao" required placeholder="Qual é a sua ocupações">
                                <option value="">Selecione!</option>
                                <option value="Estudante de Ensino Médio">Estudante de Ensino Médio</option>
                                <option value="Estudante Universitário">Estudante Universitário</option>
                                <option value="Trabalha">Trabalha</option>
                                <option value="Trabalha e Estuda">Trabalha e Estuda</option>
                            </select>
                        </div>
                        <div class="for-9">
                            <label for="escola">Instituição:</label>
                            <input type="text" name="escola" id="escola" required placeholder="Qual é o nome da sua instituição">
                        </div>
                    </div>
                    <div class="botões">
                        <button class="botão-envio" type="submit">
                            <div class="svg-wrapper-1">
                                <div class="svg-wrapper">
                                    <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <span class="span">Cadastra</span>
                        </button>
                        <button type="reset" class="noselect">
                            <span class="text">Delete</span>
                            <span class="icon">
                                <svg class="svgg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z">
                                    </path>
                                </svg>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </main>

    <footer id="rodape">

        <p>@UNIFG <?php echo date("Y"); ?></p>

    </footer>

    <script>
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })

        window.addEventListener("scroll", function() {
            var span = document.querySelector("span");
            span.classList.toggle("sticky", window.scrollY > 0);
        })

        window.addEventListener("scroll", function() {
            var spam = document.querySelector("spam");
            spam.classList.toggle("sticky", window.scrollY > 0);
        })

        window.addEventListener("scroll", function() {
            var img = document.querySelector("img");
            img.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>

</body>

</html>