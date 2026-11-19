
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mi espacio personal</title>

    <link rel="stylesheet" href="src/css/style.css">
</head>

<body>

    <header class="header">
        <div class="container navbar">

            <a href="#inicio" class="logo">Mi Espacio<span>.</span></a>

            <nav class="nav-menu">
                <a href="#inicio">Inicio</a>
                <a href="#sobre-mi">Sobre mí</a>
                <a href="#formacion">Formación</a>
                <a href="#habilidades">Habilidades</a>
                <a href="#hobbies">Hobbies</a>
                <a href="#proyectos">Proyectos</a>
                <a href="#contacto">Contacto</a>
            </nav>

        </div>
    </header>

    <main>

        <!-- INICIO -->

        <section id="inicio" class="hero">
            <div class="container hero-content">

                <div>
                    <span class="section-label">
                        BIENVENIDO A MI ESPACIO PERSONAL
                    </span>

                    <h1>
                        Hola, soy <span>Tu Nombre.</span>
                    </h1>

                    <p>
                        Soy estudiante y apasionado por la tecnología.
                        Me gusta aprender, crear proyectos y compartir
                        mis experiencias.
                    </p>

                    <a href="#sobre-mi" class="btn">
                        Conóceme
                    </a>
                </div>

                <div class="hero-image">
                    <img src="src/images/portada.jpg"
                         alt="Mi fotografía">
                </div>

            </div>
        </section>

        <!-- SOBRE MÍ -->

        <section id="sobre-mi" class="section">
            <div class="container">

                <span class="section-label">01 — SOBRE MÍ</span>

                <h2>Conoce mi historia</h2>

                <div class="about-content">

                    <img src="src/images/perfil.jpg"
                         alt="Fotografía personal">

                    <div>
                        <h3>¡Hola! Soy Tu Nombre.</h3>

                        <p>
                            Soy una persona apasionada por la tecnología,
                            la programación y el aprendizaje constante.
                        </p>

                        <p>
                            En este espacio comparto mi historia,
                            formación académica, intereses y proyectos.
                        </p>
                    </div>

                </div>

            </div>
        </section>

        <!-- FORMACIÓN -->

        <section id="formacion" class="section section-light">
            <div class="container">

                <span class="section-label">02 — EDUCACIÓN</span>

                <h2>Mi formación académica</h2>

                <div class="education-grid">

                    <article class="education-card">
                        <img src="src/images/secundaria.jpg"
                             alt="Mi etapa escolar">

                        <div>
                            <h3>Educación secundaria</h3>
                            <p>Nombre de mi colegio.</p>
                            <p>Mis años de formación escolar.</p>
                        </div>
                    </article>

                    <article class="education-card">
                        <img src="src/images/universidad.jpg"
                             alt="Mi universidad">

                        <div>
                            <h3>Educación universitaria</h3>
                            <p>Nombre de mi universidad.</p>
                            <p>Mi carrera profesional.</p>
                        </div>
                    </article>

                </div>

            </div>
        </section>

        <!-- HABILIDADES -->

        <section id="habilidades" class="section">
            <div class="container">

                <span class="section-label">03 — CONOCIMIENTOS</span>

                <h2>Mis habilidades</h2>

                <div class="skills-grid">
                    <article class="skill-card">HTML</article>
                    <article class="skill-card">CSS</article>
                    <article class="skill-card">JavaScript</article>
                    <article class="skill-card">PHP</article>
                </div>

            </div>
        </section>

        <!-- HOBBIES -->

        <section id="hobbies" class="section section-light">
            <div class="container">

                <span class="section-label">04 — TIEMPO LIBRE</span>

                <h2>Mis hobbies</h2>

                <div class="hobbies-grid">

                    <article class="hobby-card">
                        <img src="src/images/hobby1.jpg"
                             alt="Programación">

                        <h3>Programación</h3>
                        <p>Me gusta aprender nuevas tecnologías.</p>
                    </article>

                    <article class="hobby-card">
                        <img src="src/images/hobby2.jpg"
                             alt="Música">

                        <h3>Escuchar música</h3>
                        <p>Disfruto escuchar música en mi tiempo libre.</p>
                    </article>

                    <article class="hobby-card">
                        <img src="src/images/hobby3.jpg"
                             alt="Videojuegos">

                        <h3>Videojuegos</h3>
                        <p>Me gusta disfrutar de los videojuegos.</p>
                    </article>

                </div>

            </div>
        </section>

        <!-- PROYECTOS -->

        <section id="proyectos" class="section">
            <div class="container">

                <span class="section-label">05 — TRABAJOS</span>

                <h2>Mis proyectos</h2>

                <article class="project-card">
                    <img src="src/images/proyecto1.jpg"
                         alt="Mi proyecto personal">

                    <h3>Mi blog personal</h3>

                    <p>
                        Un espacio donde comparto mi historia,
                        conocimientos y experiencias.
                    </p>
                </article>

            </div>
        </section>

        <!-- CONTACTO -->

        <section id="contacto" class="section section-light">
            <div class="container">

                <span class="section-label">06 — CONTACTO</span>

                <h2>Hablemos</h2>

                <p>
                    Estoy abierto a compartir ideas y conocer
                    nuevas oportunidades.
                </p>

                <p>
                    Correo: tu-correo@ejemplo.com
                </p>

            </div>
        </section>

    </main>

    <footer class="footer">
        <p>
            © <span id="year"></span> Tu Nombre.
            Todos los derechos reservados.
        </p>
    </footer>

    <script src="src/js/main.js"></script>

</body>
</html>
