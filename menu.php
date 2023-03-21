<style>
    @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,400;1,300&display=swap');

/* Estilos para el menu*/
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: 'Ubuntu', sans-serif;
}

.menu{
    background-color: #1A202C !important;
    color: #fff !important;
    height: 75px !important;
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
}
/* Medidas para el logo */
.logo--small {
    width: 235px !important;
    height: auto;
}


.menu__container{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 90%;
    max-width: 1200px;
    height: 100%;
    margin: 0 auto;
}

.menu__links{
    height: 100%;
    transition: transform .5s;
    display: flex;
}

.menu__item{
    list-style: none;
    position: relative;
    height: 100%;
    --clip: polygon(0 0, 100% 0, 100% 0, 0 0);
    --transform: rotate(-90deg);
}

.menu__item:hover{
    --clip: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
    --transform: rotate(0);
}

.menu__link{
    color: #fff;
    text-decoration: none;
    padding: 0 30px;
    display: flex;
    height: 100%;
    align-items: center;
}

.menu__link:hover{
    background-color: #5e7094;
}


.menu__arrow{
    transform: var(--transform);
    transition: transform .3s;
    display: block;
    margin-left: 3px;
}

.menu__nesting{
    list-style: none;
    transition:clip-path .3s;
    clip-path: var(--clip);
    position: absolute;
    right: 0;
    bottom: 0;
    width: max-content;
    transform: translateY(100%);
    background-color: #000;
}

.menu__link--inside{
    padding: 30px 100px 30px 20px;
}

.menu__link--inside:hover{
    background-color: #798499;
}

.menu__hamburguer{
    height: 100%;
    display: flex;
    align-items: center;
    padding: 0 15px;
    cursor: pointer;
    display: none;
}

.menu__img{
    display: block;
    width: 36px;
}

@media (max-width:800px){
    .menu__hamburguer{
        display: flex;
    }

    .menu__item{
        --clip:0;
        overflow:hidden ;
    }

    .menu__item--active{
        --transform: rotate(0);
        --background: #5e7094;
    }

    .menu__item--show{
        background-color: var(--background);
    }


    .menu__links{
        position: fixed;
        max-width: 400px;
        width: 100%;
        top: 70px;
        bottom: 0;
        right: 0;
        background-color: #000;
        overflow-y: auto;
        display: grid;
        grid-auto-rows: max-content;
        transform: translateX(100%);
    }

    .menu__links--show{
        transform: unset;
        width: 100%;
    }

    .menu__link{
        padding: 25px 0;
        padding-left: 30px;
        height: auto;
    }

    .menu__arrow{
        margin-left: auto;
        margin-right: 20px;
    }

    .menu__nesting{
        display: grid;
        position: unset;
        width: 100%;
        transform: translateY(0);
        height: 0;
        transition: height .3s;
    }

    .menu__link--inside{
        width: 90%;
        margin-left: auto;
        border-left: 1px solid #798499;
    }
}
    </style>

    <!--Codiigo para el menu -->
    <nav class="menu">
        <section class="menu__container">
            <a href="index.php">
                <img src="img/LOGO.PNG" class="menu__logo logo--small">
            </a>

            <ul class="menu__links">
                <li class="menu__item">
                    <a href="login.php" class="menu__link">Iniciar Sesión</a>
                </li>
    
                <li class="menu__item">
                    <a href="registro.php" class="menu__link">Registrarse</a>
                </li>
    
                <li class="menu__item menu__item--show">
                    <a href="#"  class="menu__link">Sobre Nosotros <img src="assets/arrow.svg" class="menu__arrow"></a>
    
                    <ul class="menu__nesting">
                        <li class="menu__inside">
                            <a href="ideales.php" class="menu__link menu__link--inside">Ideales Quickeng</a>
                        </li>
                        <li class="menu__inside">
                            <a href="Que-es-quickeng.php" class="menu__link menu__link--inside">¿Qué es Quickeng?</a>
                        </li>
                    </ul>
                </li>
    
            </ul>

            <div class="menu__hamburguer">
                <img src="assets/menu.svg" class="menu__img">
            </div>
        </section>

      
    <script src="js/app.js"></script>
    </nav>

