<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>tec</title>
</head>
<body>

    <form>
    <H3>cadastro</H3>
    <input type="text" placeholder="Login" id="login">
    <input type="password" placeholder="Senha" id="senha">
    <input type="text" placeholder="telefone" id="telefone">
    <input type="email" placeholder="email" id="email">
    <input type="submit" onclick="logar(); return false">
    </form>

    <script>
        function logar(){

            var login = document.getElementById('login').value;
            var senha = document.getElementById('senha').value;
            
            if(login == "admin" && senha == "admin"){
                alert('Sucesso');
                location.href = "home.html";
            }else{
                alert('usuario ou senha incorretos');
            }


        }

    </script>
       
</body>
</html>
</html>
