<!DOCTYPE html>
<html lang="pt-br">
     <head>
        <meta charset="utf-8">
        <!-- <link rel="icon" href="img/fav-icon.png" type="image/x-icon" /> -->
        <meta name="description" content="Tudo que você precisa saber sobre o esporte no IFRS - Campus Ibirubá"

        <meta property="og:type" content="website"/>
        <meta property="og:title" content="Site IFRS-Sports - Página Inicial - Home"/>
        <meta property="og:description" content="Tudo que você precisa saber sobre o esporte no IFRS - Campus Ibirubá"/>
        <meta property="og:url" content=""/>
        <meta property="og:image" content=""/>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="favicon.ico">

        <!-- Title Até 70 caracteres -->
        <!-- Description Até 140 caracteres -->
        <title>IFRS Sports</title>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/responsivo-tablet.css">
        <link rel="stylesheet" type="text/css" href="css/responsivo.css">
        <link rel="stylesheet" type="text/css" href="css/FONTES.css">

    </head>
    <body>
        
        <!--FIM HORARIOS-->
        <!-- MENU-->
<header class="menu-area">
            <div class="container_12">
                <div class="grid_4 logo-menu">
                   <a href="home.html"> <img src="img/logoif.png"></a>
                </div>
                <div class="grid_8">
                    <ul class="list-menu">
                       <li class="active"><a href="competicao.html">Competições</a></li>
                        <li><a href="esportes.html">Esportes</a></li>
                        <li><a href="home.html#sobre">Sobre</a></li>
                        <li><a href="contato.html">Contato</a></li>
                        <li><a href="login.html">Login</a></li>
                    </ul>
                </div>
            </div>
        </header>
                <!--FIM MENU-->
        <!-- BANER-->
        <section class="baner-area-contato">
            <div class="container_12 ">
                <div class="grid_4 contatook">
                    <h2>Contato</h2>
                </div>    
            </div>

        </section>
        <!-- FIMBANER -->
        <!-- CONTATO -->
        <!-- FIM CONTATO-->
        <!-- FOOTER-->




        <section class="form2">
            <div class="container_12">
                <h3><strong>Para contatar algum problema, dar uma sugestão ou informar algum erro oferecemos esta opção de contato!</strong></h3>
                    <form action="contato.php" method="post" id="contactForm">
                        <div>
                        <div class="form-tudo grid_4">
                            <input type="text"  id="nome"  name="nome" Placeholder="Nome completo"  required="">
                        </div>

                         <div class="form-tudo grid_4">
                           
                            <input type="email"  id="email"  name="email" Placeholder="Seu email" required="">
                        </div>

                        <div class="form-tudo grid_4">
                           
                            <input type="tel"  pattern="^\d{2}\d{5}\d{4}$" id="tel"  name="tel" Placeholder="Telefone (xx)xxxxx-xxxx" required="">
                        </div>
                        </div>
                        <div class="form-tudo">
                            <textarea  name="msg"  id="msg" rows="7" Placeholder="Deixe-nos sua sugestão" required=""></textarea>
                        </div>
                         
                       <button type="submit" value="submit" class="btn-form"><strong>Enviar</strong></button>
                        
                    </form>
            </div>
        </section>





        <footer class="footer-area">
            <div class="container_12">
                <h6>Todos os Direitos Reservados - IFRS Sports - 2019</h6>
            </div>
        </footer>
        <!-- FIM FOOTER -->
    </body>
</html>