<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">

    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/social.css">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    
    <link rel="stylesheet" type="text/css" href="csshake.min.css">
    <!-- or from surge.sh -->
    <link rel="stylesheet" type="text/css" href="https://csshake.surge.sh/csshake.min.css">

    <title>Paulínia MAKER</title>
</head>
<body class="gradient">
<sessao-homepage>    
    <!-- MENU -->
    <header class="container-menu fixed-top">
        <div class="container-menu brackets">
            <a href="https://pauliniamaker.com.br/">HOME</a>
            <a>BLOG</a>
            <a>CURSOS</a>
            <a>SOBRE</a>
            <a href="contato.php">CONTATO</a>
        </div>
    </header>

    <!-- OUTDOOR -->
    <div class="container">
        <h1>CONTATO</h1>
        <section class="body">
        <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
 
            <label>Nome</label>
            <input name="name" placeholder="Seu Nome">
             
            <label>Email</label>
            <input name="email" type="email" placeholder="Seu email">
             
            <label>Mensagem</label>
            <textarea name="message" placeholder="O que deseja falar?"></textarea>
             
            <label>*Quanto é 2+2? (Anti-spam)</label>
            <input name="human" placeholder="Responda aqui">
             
            <input id="submit" name="submit" type="submit" value="Submit">
             
        </form>
        <br>
        <div id="resultado">
            <?php
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];
                $from = 'De: Paulínia Maker'; 
                $to = 'pauliniamaker@gmail.com'; 
                $subject = 'Contato pelo Website';
                $human = $_POST['human'];
                        
                $body = "De: $name\n E-Mail: $email\n Mensagem:\n $message";

                if ($_POST['submit']) {
                    if ($name != '' && $email != '') {
                        if ($human == '4') {				 
                            if (mail ($to, $subject, $body, $from)) { 
                            echo '<p>Sua mensagem foi enviada!</p>';
                        } else { 
                            echo '<p>Algo deu errado, volte e tente novamente!</p>'; 
                        } 
                    } else if ($_POST['submit'] && $human != '4') {
                        echo '<p>Voc&ecirc; respondeu ao anti-spam incorretamente!</p>';
                    }
                    } else {
                        echo '<p>Voc&ecirc; precisa responder todas as quest&otilde;es!!</p>';
                    }
                }
            ?><br>
        </div>
        </section>

        <div class="container text-center">
            <div class="div-social a-social">
                <a href="https://www.youtube.com/channel/UCxJC9GXdJgxAAFF3dyjZeyw?sub_confirmation=1" target="_blank"><span>YouTube</span></a>
                <a href="https://github.com/PauliniaMaker" target="_blank"><span>Github</span></a>
                <a href="https://codepen.io/pauliniamaker" target="_blank"><span>CodePen</span></a>
                <a href="https://www.instagram.com/paulinia.maker/" target="_blank"><span>Instagram</span></a>
            </div>
        </div>
    </div>
   
    <!-- RODAPÉ -->
    <footer class="container-footer fixed-bottom">
        <span>Paulínia Maker™. Todos os direitos reservado. Professores Eduardo Soranzzo e Geraldo Fernandes. #VemSerMaker</span>
    </footer>

</sessao-homepage>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>