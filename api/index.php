
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mi Blog Personal</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
</head>

<body>

    <!-- NAVEGACIÓN -->
    <header class="header">
        <div class="container navbar">

            <a href="#inicio" class="logo">Mi Blog<span>.</span></a>

            <nav class="nav-menu">
                <a href="#inicio">Inicio</a>
                <a href="#sobre-mi">Sobre mí</a>
                <a href="#articulos">Artículos</a>
                <a href="#proyectos">Proyectos</a>
                <a href="#contacto">Contacto</a>
            </nav>

        </div>
    </header>

    <!-- CONTENIDO -->
    <main>

        <!-- INICIO -->
        <section id="inicio" class="hero">
            <div class="container hero-content">

                <span class="hero-label">
                    BIENVENIDO A MI ESPACIO PERSONAL
                </span>

                <h1>
                    Hola, soy <span>desarrollador web.</span>
                </h1>

                <p>
                    Comparto mis conocimientos, proyectos,
                    experiencias y todo lo que voy aprendiendo
                    en el mundo de la tecnología.
                </p>

                <div class="hero-buttons">

                    <a href="#articulos" class="btn btn-primary">
                        Ver artículos
                    </a>

                    <a href="#sobre-mi" class="btn btn-outline">
                        Conóceme
                    </a>

                </div>
                 <div class="hero-image">
            <img src="../images/perfil.jpg" alt="Mi fotografía personal">
        </div>

            </div>
        </section>

        <!-- SOBRE MÍ -->
        <?php include __DIR__ . '/secciones/sobre-mi.php'; ?>

        <!-- ARTÍCULOS -->
        <?php include __DIR__ . '/secciones/articulos.php'; ?>

        <!-- PROYECTOS -->
        <?php include __DIR__ . '/secciones/proyectos.php'; ?>

        <!-- CONTACTO -->
        <?php include __DIR__ . '/secciones/contacto.php'; ?>

    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <p>
                © <?php echo date('Y'); ?> Mi Blog Personal.
                Todos los derechos reservados.
            </p>
        </div>
    </footer>

    <script src="../js/main.js"></script>

</body>
</html>
