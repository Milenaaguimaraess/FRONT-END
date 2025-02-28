<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
    
    <link rel="stylesheet" href="styles/all.css">
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
   <main>
        <h1>CADASTRO</h1>
        
        <!-- o metodo "get" encaminha o formulario via url, diferente do "post" que é mais seguro-->
        <!-- o "post" encapsula e não deixa vazar nenhum dado, 
         diferente do get(usado geralmente pra saber se ta funcionando o site) -->
        <!-- <form action="pages/menu.php" method="get"> -->
        <form action="pages/menu.php" method="post">
            <!-- NOME USUARIO -->
            <div class="form-input">
                <label for="Nome"></label>
                <input placeholder="Insira seu NOME aqui" name="nome" id="nome" type="text">
            </div>
            <!-- email USUARIO -->
            <div class="form-input">
                <label for="Email"></label>
                <input placeholder="Insira seu email aqui EX: nome@email.com" name="email" id="email" type="text">
            </div>
             <!-- Senha USUARIO -->
            <div class="form-input">
                <label for="Senha"></label>
                <input placeholder="Insira sua senha aqui" name="senha" id="senha" type="password">
            </div>

            <button type="submit">Enviar</button>
        </form>
   </main> 
</body>
</html>