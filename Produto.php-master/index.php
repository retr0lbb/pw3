<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;        
    }

    body {
        min-height: 100vh;
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: consolas;
    }

    main{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    h2 {
        border-bottom: 1px black solid;
        margin: 10px;
        text-align: center;
    }

    section{
        width: 30vw;
        height: 50vh;
        margin: 2vw;
        border: 1px solid gray;
        box-shadow: 2px 2px 2px;
        border-radius: 10px;
    }

    label {
        margin: 5px;
    }

    form {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    button {
        margin: 5%;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contatos</title>
</head>
<body>
    <main>
    <section>
        <h2>Adicionar Login</h2>
        <form action="Actions\add.php" method="post">
            <label for="nome">Nome:</label>
            <input id="nome" name="nome" type="text">
            <label for="senha">Senha:</label>
            <input id="senha" name="senha" type="text">
            <label for="email">Email</label>
            <input id="email"type="email" name="email">
            
    
            <button type="submmit">Enviar</button>
        </form>
    </section>
    </main>

    <?php
    include "../Contato.class.php";
    $usuario = new Usuario();

    $lista = $usuario->getAll();

    foreach($lista as $item):
        ?>
        <p><?php echo $item['id'];?></p>
        <p><?php echo $item['nome'];?></p>
        <p><?php echo $item['email'];?></p>
        <p><?php echo $item['senha'];?></p>
        <hr>
        <?php
        endforeach;
</body>
</html>