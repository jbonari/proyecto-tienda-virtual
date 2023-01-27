<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Tienda de Camisetas</title>
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
    </head>
    <body>

    <div id="container">
        <!--cabecera-->
        <header id="header">
            <div id="logo">
                <img src="./assets/img/camiseta.png" alt="Camiseta Logo" />
                <a href="index_maqueta.php">
                    Tienda de Camisetas
                </a>
            </div>
        </header>

        <!--menu-->
        <nav id="menu">
            <ul>
                <li>
                    <a href="$">Inicio</a>
                </li>
                <li>
                    <a href="$">Categoría 1</a>
                </li>
                <li>
                    <a href="$">Categoría 2</a>
                </li>
                <li>
                    <a href="$">Categoría 3</a>
                </li>
                <li>
                    <a href="$">Categoría 4</a>
                </li>
                <li>
                    <a href="$">Categoría 5</a>
                </li>
            </ul>
        </nav>

        <div id="content">
            <!--barra lateral-->
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <h3>Entrar a la web</h3>
                    <form action="#" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password">
                        <input type="submit" value="Enviar">
                    </form>

                    <ul>
                        <li><a href="#">Mis pedidos</a></li>
                        <li><a href="#">Gestionar pedidos</a></li>
                        <li><a href="#">Gestionar Categorias</a></li>
                    </ul>

                </div>
            </aside>

            <!--contenido central-->
            <div id="central">
                <h1>Productos destacados</h1>

                <div class="product">
                    <img src="assets/img/camiseta.png" />
                    <h2>Camiseta azul ancha</h2>
                    <p>30 Euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>

                <div class="product">
                    <img src="assets/img/camiseta.png" />
                    <h2>Camiseta azul ancha</h2>
                    <p>30 Euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>

                <div class="product">
                    <img src="assets/img/camiseta.png" />
                    <h2>Camiseta azul ancha</h2>
                    <p>30 Euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>


            </div>


        </div>

        <!--pie de pagina-->
        <footer id="footer">
            <p>Desarrollado por JB WEB &copy; <?=date('Y')?></p>
        </footer>

    </div>

    </body>

</html>