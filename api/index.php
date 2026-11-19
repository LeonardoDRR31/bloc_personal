
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi espacio personal</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        :root {
            --primary: #2563eb;
            --dark: #0f172a;
            --accent: #38bdf8;
            --light: #f1f5f9;
            --text: #475569;
            --white: #fff;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            color: var(--dark);
            line-height: 1.7;
        }

        .container {
            width: 90%;
            max-width: 1150px;
            margin: auto;
        }

        img {
            display: block;
            width: 100%;
            object-fit: cover;
        }

        a {
            text-decoration: none;
        }

        /* HEADER */

        .header {
            background: var(--dark);
            padding: 18px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .logo {
            color: white;
            font-size: 25px;
            font-weight: bold;
        }

        .logo span {
            color: var(--accent);
        }

        .nav-menu {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .nav-menu a {
            color: #cbd5e1;
            font-size: 14px;
            transition: .3s;
        }

        .nav-menu a:hover {
            color: var(--accent);
        }

        /* HERO */

        .hero {
            background: linear-gradient(135deg, #0f172a, #1e40af);
            color: white;
            padding: 100px 0;
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            align-items: center;
            gap: 50px;
        }

        .section-label {
            color: var(--accent);
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 2px;
            display: inline-block;
            margin-bottom: 15px;
        }

        .hero h1 {
            font-size: clamp(38px, 5vw, 58px);
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: var(--accent);
        }

        .hero p {
            color: #cbd5e1;
            font-size: 17px;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            background: var(--primary);
            color: white;
            padding: 13px 30px;
            border-radius: 30px;
            transition: .3s;
            font-weight: bold;
        }

        .btn:hover {
            background: var(--accent);
            color: var(--dark);
            transform: translateY(-4px);
        }

        .hero-image img {
            height: 390px;
            border-radius: 25px;
            border: 5px solid rgba(255,255,255,.2);
        }

        /* SECCIONES */

        .section {
            padding: 85px 0;
        }

        .section-light {
            background: var(--light);
        }

        .section h2 {
            font-size: 35px;
            margin-bottom: 40px;
        }

        .section h2::after {
            content: "";
            display: block;
            width: 65px;
            height: 4px;
            background: var(--primary);
            margin-top: 10px;
        }

        /* SOBRE MI */

        .about-content {
            display: grid;
            grid-template-columns: .8fr 1.2fr;
            align-items: center;
            gap: 50px;
        }

        .about-content img {
            height: 340px;
            border-radius: 20px;
        }

        .about-content h3 {
            color: var(--primary);
            font-size: 25px;
            margin-bottom: 15px;
        }

        .about-content p {
            color: var(--text);
            margin-bottom: 15px;
        }

        /* FORMACION */

        .education-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .education-card,
        .hobby-card,
        .project-card {
            background: white;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,.08);
            transition: .3s;
        }

        .education-card:hover,
        .hobby-card:hover,
        .project-card:hover {
            transform: translateY(-8px);
        }

        .education-card img {
            height: 220px;
        }

        .education-card div {
            padding: 25px;
        }

        .education-card h3,
        .hobby-card h3,
        .project-card h3 {
            color: var(--primary);
            margin-bottom: 10px;
        }

        .education-card p,
        .hobby-card p,
        .project-card p {
            color: var(--text);
        }

        /* HABILIDADES */

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .skill-card {
            background: var(--dark);
            color: white;
            text-align: center;
            padding: 35px 15px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 15px;
            border-bottom: 5px solid var(--primary);
            transition: .3s;
        }

        .skill-card:hover {
            background: var(--primary);
            transform: translateY(-8px);
        }

        /* HOBBIES */

        .hobbies-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .hobby-card img {
            height: 220px;
        }

        .hobby-card h3,
        .hobby-card p {
            padding-left: 20px;
            padding-right: 20px;
        }

        .hobby-card h3 {
            padding-top: 18px;
        }

        .hobby-card p {
            padding-bottom: 25px;
        }

        /* PROYECTOS */

        .project-card {
            max-width: 650px;
        }

        .project-card img {
            height: 300px;
        }

        .project-card h3,
        .project-card p {
            padding-left: 25px;
            padding-right: 25px;
        }

        .project-card h3 {
            padding-top: 20px;
        }

        .project-card p {
            padding-bottom: 25px;
        }

        /* CONTACTO */

        #contacto p {
            color: var(--text);
            margin-bottom: 12px;
        }

        /* FOOTER */

        .footer {
            background: var(--dark);
            color: #cbd5e1;
            text-align: center;
            padding: 25px;
        }

        /* RESPONSIVE */

        @media (max-width: 900px) {
            .navbar {
                flex-direction: column;
            }

            .nav-menu {
                justify-content: center;
            }

            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .about-content {
                grid-template-columns: 1fr;
            }

            .about-content img {
                max-width: 450px;
                margin: auto;
            }

            .hero-image img {
                max-width: 450px;
                margin: auto;
            }

            .skills-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .hero {
                padding: 65px 0;
            }

            .section {
                padding: 60px 0;
            }

            .section h2 {
                font-size: 28px;
            }

            .education-grid,
            .hobbies-grid {
                grid-template-columns: 1fr;
            }

            .hero-image img {
                height: 280px;
            }
        }
    </style>
</head>

<body>

    <header class="header">
        <div class="container navbar">

            <a href="#inicio" class="logo">
                Mi Espacio<span>.</span>
            </a>

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
                        Hola, soy <span>LEONARDO DAVID ROJAS ROJAS.</span>
                    </h1>

                    <p>
                        Soy estudiante y apasionado por la tecnología.
                        Me gusta aprender, crear proyectos y compartir
                        mis experiencias.
                    </p>

                    <a href="#sobre-mi" class="btn">Conóceme</a>
                </div>

                <div class="hero-image">
                    <img src="/img/portada.jpeg" alt="Mi fotografía">
                </div>

            </div>
        </section>

        <!-- SOBRE MI -->

        <section id="sobre-mi" class="section">
            <div class="container">

                <span class="section-label">01 — SOBRE MÍ</span>
                <h2>Conoce mi historia</h2>

                <div class="about-content">

                    <img src="/img/portada.jpeg" alt="Fotografía personal">

                    <div>
                        <h3>¡Hola! Soy Leonardo David Rojas Rojas.</h3>

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

        <!-- FORMACION -->

        <section id="formacion" class="section section-light">
            <div class="container">

                <span class="section-label">02 — EDUCACIÓN</span>
                <h2>Mi formación académica</h2>

                <div class="education-grid">

                    <article class="education-card">
                        <img src="../img/colegio.jpg" alt="Mi etapa escolar">

                        <div>
                            <h3>Educación secundaria</h3>
                            <p>Gloriosa 329</p>
                            <p>Mis años de formación escolar.</p>
                        </div>
                    </article>

                    <article class="education-card">
                        <img src="/img/uno.jpg" alt="Mi universidad">

                        <div>
                            <h3>Educación universitaria</h3>
                            <p>Universidad Nacional del Santa.</p>
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
                        <img src="/desarrollo" alt="Programación">
                        <h3>Programación</h3>
                        <p>Me gusta aprender nuevas tecnologías.</p>
                    </article>

                    <article class="hobby-card">
                        <img src="/img/piano" alt="Música">
                        <h3>Escuchar música</h3>
                        <p>Disfruto escuchar música en mi tiempo libre.</p>
                    </article>

                    <article class="hobby-card">
                        <img src="../img/juegos" alt="Videojuegos">
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
                    <img src="../img/proyecto1.jpeg" alt="Mi proyecto personal">

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

                <p>Correo: tu-correo@ejemplo.com</p>

            </div>
        </section>

    </main>

    <footer class="footer">
        <p>
            © <span id="year"></span> Tu Nombre.
            Todos los derechos reservados.
        </p>
    </footer>

    <script>
        document.getElementById("year").textContent =
            new Date().getFullYear();
    </script>

</body>
</html>
