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
            --secondary: #0f172a;
            --accent: #38bdf8;
            --light: #f1f5f9;
            --white: #ffffff;
            --text: #475569;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: var(--white);
            color: var(--secondary);
            line-height: 1.7;
        }

        .container {
            width: 90%;
            max-width: 1150px;
            margin: auto;
        }

        a { text-decoration: none; }

        img {
            width: 100%;
            display: block;
            object-fit: cover;
        }

        /* HEADER */

        .header {
            background: rgba(15, 23, 42, 0.97);
            padding: 18px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 3px 15px rgba(0,0,0,0.15);
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
            white-space: nowrap;
        }

        .logo span { color: var(--accent); }

        .nav-menu {
            display: flex;
            gap: 22px;
            flex-wrap: wrap;
        }

        .nav-menu a {
            color: #cbd5e1;
            font-size: 14px;
            transition: 0.3s;
        }

        .nav-menu a:hover { color: var(--accent); }

        /* INICIO */

        .hero {
            background: linear-gradient(135deg, #0f172a, #1e3a8a);
            color: white;
            padding: 100px 0;
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            align-items: center;
            gap: 60px;
        }

        .section-label {
            display: inline-block;
            color: var(--accent);
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 2px;
            margin-bottom: 18px;
        }

        .hero h1 {
            font-size: clamp(38px, 5vw, 58px);
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .hero h1 span { color: var(--accent); }

        .hero p {
            color: #cbd5e1;
            font-size: 17px;
            max-width: 550px;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            background: var(--primary);
            color: white;
            padding: 13px 30px;
            border-radius: 30px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            background: var(--accent);
            color: var(--secondary);
            transform: translateY(-4px);
        }

        .hero-image img {
            height: 390px;
            border-radius: 25px;
            border: 5px solid rgba(255,255,255,0.15);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }

        /* SECCIONES */

        .section { padding: 85px 0; }

        .section-light { background: var(--light); }

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
            border-radius: 5px;
        }

        /* SOBRE MÍ */

        .about-content {
            display: grid;
            grid-template-columns: 0.8fr 1.2fr;
            align-items: center;
            gap: 50px;
        }

        .about-content img {
            height: 340px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.12);
        }

        .about-content h3 {
            font-size: 25px;
            margin-bottom: 15px;
            color: var(--primary);
        }

        .about-content p {
            color: var(--text);
            margin-bottom: 15px;
        }

        /* FORMACIÓN */

        .education-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .education-card {
            background: white;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.07);
            transition: 0.3s;
        }

        .education-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.12);
        }

        .education-card img { height: 220px; }

        .education-card div { padding: 25px; }

        .education-card h3 {
            color: var(--primary);
            margin-bottom: 10px;
        }

        .education-card p { color: var(--text); }

        /* HABILIDADES */

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .skill-card {
            background: var(--secondary);
            color: white;
            text-align: center;
            padding: 35px 15px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 15px;
            border-bottom: 5px solid var(--primary);
            transition: 0.3s;
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

        .hobby-card {
            background: white;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.07);
            transition: 0.3s;
        }

        .hobby-card:hover { transform: translateY(-8px); }

        .hobby-card img { height: 220px; }

        .hobby-card h3 {
            color: var(--primary);
            padding: 18px 20px 5px;
        }

        .hobby-card p {
            color: var(--text);
            padding: 0 20px 25px;
        }

        /* PROYECTOS */

        .project-card {
            max-width: 650px;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .project-card:hover { transform: translateY(-8px); }

        .project-card img { height: 300px; }

        .project-card h3 {
            color: var(--primary);
            font-size: 23px;
            padding: 20px 25px 5px;
        }

        .project-card p {
            color: var(--text);
            padding: 0 25px 25px;
        }

        /* CONTACTO */

        #contacto p {
            color: var(--text);
            margin-bottom: 12px;
            font-size: 17px;
        }

        /* FOOTER */

        .footer {
            background: var(--secondary);
            color: #cbd5e1;
            text-align: center;
            padding: 25px 15px;
            font-size: 14px;
        }

        /* RESPONSIVE */

        @media (max-width: 900px) {
            .navbar {
                flex-direction: column;
            }

            .nav-menu {
                justify-content: center;
                gap: 12px 18px;
            }

            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero p {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-image img {
                max-width: 450px;
                margin: auto;
            }

            .about-content {
                grid-template-columns: 1fr;
            }

            .about-content img {
                max-width: 450px;
                margin: auto;
            }

            .skills-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .hero { padding: 65px 0; }

            .hero-image img { height: 280px; }

            .section { padding: 60px 0; }

            .section h2 { font-size: 28px; }

            .education-grid,
            .hobbies-grid {
                grid-template-columns: 1fr;
            }

            .skills-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 12px;
            }

            .skill-card {
                padding: 25px 10px;
                font-size: 17px;
            }

            .project-card img { height: 220px; }
        }
    </style>
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

                    <a href="#sobre-mi" class="btn">Conóceme</a>
                </div>

                <div class="hero-image">
                    <img src="src/images/portada.jpg" alt="Mi fotografía">
                </div>

            </div>
        </section>

        <!-- SOBRE MÍ -->
        <section id="sobre-mi" class="section">
            <div class="container">

                <span class="section-label">01 — SOBRE MÍ</span>
                <h2>Conoce mi historia</h2>

                <div class="about-content">

                    <img src="src/images/perfil.jpg" alt="Fotografía personal">

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
                        <img src="src/images/secundaria.jpg" alt="Mi etapa escolar">

                        <div>
                            <h3>Educación secundaria</h3>
                            <p>Nombre de mi colegio.</p>
                            <p>Mis años de formación escolar.</p>
                        </div>
                    </article>

                    <article class="education-card">
                        <img src="src/images/universidad.jpg" alt="Mi universidad">

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
                        <img src="src/images/hobby1.jpg" alt="Programación">
                        <h3>Programación</h3>
                        <p>Me gusta aprender nuevas tecnologías.</p>
                    </article>

                    <article class="hobby-card">
                        <img src="src/images/hobby2.jpg" alt="Música">
                        <h3>Escuchar música</h3>
                        <p>Disfruto escuchar música en mi tiempo libre.</p>
                    </article>

                    <article class="hobby-card">
                        <img src="src/images/hobby3.jpg" alt="Videojuegos">
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
                    <img src="src/images/proyecto1.jpg" alt="Mi proyecto personal">

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