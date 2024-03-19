<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="agoravai.png">
    <title>Ivalid</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <nav>   
        <ul>
            <li><a href="#">Entrar</a></li>
            <li><a href="#">Criar conta</a></li>
        </ul>
            </nav>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
               
                <img src="ivalid.png" alt="Ivalid">
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Cadastre seu Supermercado:</h2>
                <form class="form" action="create.php" method="POST">
                    <label class="label-input" for="nome">
                    <input type="text" placeholder="Nome" name="nome" id="nome">
                    </label>
                        
                    <label class="label-input" for="email">
                    <input type="email" placeholder="Email" name="email" id="email">
                    </label>
                    
                    <label class="label-input" for="num">
                        <input type="password" placeholder="Número de Telefone(com DDD:)" name="num" id="num">
                    </label>
                    
                    
                    <button class="btn btn-second" type="submit" name="btn-cadastrar">Log in</button>        
                </form>
            </div><!-- second column -->
        </div><!-- first content -->
    </div>
 

</body>
</html>