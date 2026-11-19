
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mi blog personal de tecnología y desarrollo web">

    <title>Mi Blog Personal</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 85px;
        }

        body {
            font-family: Arial, sans-serif;
            color: #374151;
            line-height: 1.7;
        }

        a {
            text-decoration: none;
        }

        .container {
            width: 90%;
            max-width: 1150px;
            margin: auto;
        }

        /* NAVBAR */

        .header {
            background: #101827;
            padding: 18px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: white;
            font-size: 25px;
            font-weight: bold;
        }

        .logo span {
            color: #60a5fa;
        }

        .nav-menu {
            display: flex;
            gap: 25px;
        }

        .nav-menu a {
            color: #d1d5db;
            font-size: 14px;
            transition: .3s;
        }

        .nav-menu a:hover,
        .nav-menu a.active {
            color: #60a5fa;
        }

        /* INICIO */

        .hero {
            background: #101827;
            color: white;
            min-height: 570px;
            display: flex;
            align-items: center;
            padding: 80px 0;
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1.3fr .7fr;
            align-items: center;
            gap: 50px;
        }

        .hero-label,
        .section-label {
            color: #3b82f6;
            font-size: 12px;
            letter-spacing: 2px;
            font-weight: bold;
        }

        .hero h1 {
            font-size: clamp(38px, 5vw, 62px);
            line-height: 1.15;
            margin: 20px 0;
        }

        .hero h1 span {
            color: #60a5fa;
        }

        .hero p {
            color: #cbd5e1;
            max-width: 600px;
            font-size: 17px;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .btn {
            display: inline-block;
            padding: 12px 25px;
            border-radius: 7px;
            font-weight: bold;
            transition: .3s;
            cursor: pointer;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
        }

        .btn-outline {
            border: 1px solid #64748b;
            color: white;
        }

        .hero-image img {
            width: 100%;
            max-width: 350px;
            height: 420px;
            object-fit: cover;
            border-radius: 20px;
            border: 4px solid #334155;
        }

        .photo-placeholder {
            width: 300px;
            height: 350px;
            border-radius: 20px;
            background: #1e293b;
            border: 1px solid #475569;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: #94a3b8;
            font-size: 50px;
        }

        /* SECCIONES */

        .section {
            padding: 100px 0;
        }

        .section-light {
            background: #f8fafc;
        }

        .section h2 {
            font-size: 38px;
            color: #101827;
            margin: 15px 0;
        }

        .section-description {
            color: #6b7280;
            margin-bottom: 35px;
        }

        /* SOBRE MÍ */

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
            margin-top: 35px;
        }

        .about-image img {
            width: 100%;
            max-width: 420px;
            height: 450px;
            object-fit: cover;
            border-radius: 15px;
        }

        .about-placeholder {
            max-width: 420px;
            height: 350px;
            background: #e2e8f0;
            border-radius: 15px;
            display: grid;
            place-items: center;
            font-size: 55px;
        }

        .about-text h3 {
            font-size: 27px;
            margin-bottom: 15px;
            color: #101827;
        }

        .about-text p {
            color: #6b7280;
            margin-bottom: 15px;
        }

        /* ARTÍCULOS Y PROYECTOS */

        .articles-grid,
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .article-card,
        .project-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 30px;
            transition: .3s;
        }

        .article-card:hover,
        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,.06);
        }

        .card-icon {
            font-size: 35px;
            margin-bottom: 15px;
        }

        .article-card span {
            color: #2563eb;
            font-size: 11px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .article-card h3,
        .project-card h3 {
            color: #101827;
            font-size: 20px;
            margin: 10px 0;
        }

        .article-card p,
        .project-card p {
            color: #6b7280;
            margin-bottom: 15px;
        }

        .coming-soon {
            color: #2563eb;
            font-size: 13px;
            font-weight: bold;
        }

        /* CONTACTO */

        .contact-form {
            max-width: 650px;
            display: grid;
            gap: 18px;
            margin-top: 30px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #d1d5db;
            border-radius: 7px;
            font: inherit;
        }

        .contact-form button {
            width: fit-content;
        }

        /* FOOTER */

        .footer {
            background: #0b1220;
            color: #94a3b8;
            padding: 30px 0;
            text-align: center;
            font-size: 13px;
        }

        /* RESPONSIVE */

        @media(max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 18px;
            }

            .nav-menu {
                flex-wrap: wrap;
                justify-content: center;
                gap: 13px;
            }

            .hero-content,
            .about-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-image {
                order: -1;
            }

            .hero-image img {
                max-width: 260px;
                height: 320px;
            }

            .hero-buttons {
                justify-content: center;
                flex-wrap: wrap;
            }

            .hero {
                padding: 65px 0;
            }

            .section {
                padding: 70px 0;
            }

            .section h2 {
                font-size: 30px;
            }

            .articles-grid,
            .projects-grid {
                grid-template-columns: 1fr;
            }

            .about-image img {
                height: 350px;
            }

            .contact-form button {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <!-- NAVEGACIÓN -->

    <header class="header">
        <div class="container navbar">

            <a href="#inicio" class="logo">Mi Blog<span>.</span></a>

            <nav class="nav-menu">
                <a href="#inicio" class="active">Inicio</a>
                <a href="#sobre-mi">Sobre mí</a>
                <a href="#articulos">Artículos</a>
                <a href="#proyectos">Proyectos</a>
                <a href="#contacto">Contacto</a>
            </nav>

        </div>
    </header>

    <main>

        <!-- INICIO -->

        <section id="inicio" class="hero">
            <div class="container hero-content">

                <div class="hero-text">

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

                </div>

                <div class="hero-image">
                    <div class="photo-placeholder">
                        👤
                        <small>Mi fotografía</small>
                    </div>
                </div>

            </div>
        </section>

        <!-- SOBRE MÍ -->

        <section id="sobre-mi" class="section">
            <div class="container">

                <span class="section-label">01 — SOBRE MÍ</span>

                <h2>Conoce un poco sobre mí</h2>

                <div class="about-content">

                    <div class="about-image">
                        <div class="about-placeholder">👤</div>
                    </div>

                    <div class="about-text">

                        <h3>Hola, soy desarrollador web.</h3>

                        <p>
                            Soy una persona apasionada por la tecnología,
                            la programación y el desarrollo de soluciones
                            digitales.
                        </p>

                        <p>
                            Me gusta aprender constantemente, explorar
                            nuevas tecnologías y desarrollar proyectos.
                        </p>

                        <p>
                            En este espacio compartiré mis conocimientos,
                            experiencias y proyectos.
                        </p>

                    </div>

                </div>
            </div>
        </section>

        <!-- ARTÍCULOS -->

        <section id="articulos" class="section section-light">
            <div class="container">

                <span class="section-label">02 — ARTÍCULOS</span>

                <h2>Mis artículos</h2>

                <p class="section-description">
                    Próximamente compartiré conocimientos,
                    tutoriales y experiencias.
                </p>

                <div class="articles-grid">

                    <article class="article-card">
                        <div class="card-icon">💻</div>
                        <span>DESARROLLO WEB</span>
                        <h3>Mis primeros pasos en desarrollo web</h3>
                        <p>
                            Experiencias y aprendizajes en el mundo
                            del desarrollo web.
                        </p>
                        <div class="coming-soon">Próximamente</div>
                    </article>

                    <article class="article-card">
                        <div class="card-icon">⚙️</div>
                        <span>PROGRAMACIÓN</span>
                        <h3>Aprendiendo PHP</h3>
                        <p>
                            Conocimientos y experiencias sobre
                            programación y desarrollo.
                        </p>
                        <div class="coming-soon">Próximamente</div>
                    </article>

                </div>
            </div>
        </section>

        <!-- PROYECTOS -->

        <section id="proyectos" class="section">
            <div class="container">

                <span class="section-label">03 — PROYECTOS</span>

                <h2>Mis proyectos</h2>

                <p class="section-description">
                    Algunos de mis trabajos y desarrollos personales.
                </p>

                <div class="projects-grid">

                    <article class="project-card">
                        <div class="card-icon">🌐</div>
                        <h3>Mi blog personal</h3>
                        <p>
                            Un espacio personal donde comparto
                            conocimientos y experiencias.
                        </p>
                        <span class="coming-soon">Proyecto personal</span>
                    </article>

                </div>
            </div>
        </section>

        <!-- CONTACTO -->

        <section id="contacto" class="section section-light">
            <div class="container">

                <span class="section-label">04 — CONTACTO</span>

                <h2>Hablemos</h2>

                <p class="section-description">
                    ¿Tienes alguna idea o proyecto? Me gustaría conocerte.
                </p>

                <form class="contact-form" id="contactForm">

                    <input type="text" placeholder="Tu nombre" required>

                    <input type="email" placeholder="Tu correo electrónico" required>

                    <textarea placeholder="Escribe tu mensaje..." rows="6" required></textarea>

                    <button type="submit" class="btn btn-primary">
                        Enviar mensaje
                    </button>

                </form>

                <p id="formMessage" style="margin-top:15px;"></p>

            </div>
        </section>

    </main>

    <!-- FOOTER -->

    <footer class="footer">
        <div class="container">
            <p>
                © <span id="year"></span> Mi Blog Personal.
                Todos los derechos reservados.
            </p>
        </div>
    </footer>

    <!-- JAVASCRIPT -->

    <script>
        // Año automático
        document.getElementById('year').textContent =
            new Date().getFullYear();

        // Menú activo según la sección visible
        const sections = document.querySelectorAll('main section');
        const navLinks = document.querySelectorAll('.nav-menu a');

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    navLinks.forEach(link => {
                        link.classList.toggle(
                            'active',
                            link.getAttribute('href') === '#' + entry.target.id
                        );
                    });
                }
            });
        }, { threshold: 0.4 });

        sections.forEach(section => observer.observe(section));

        // Formulario de demostración
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            document.getElementById('formMessage').textContent =
                '¡Gracias por tu mensaje! El formulario todavía no está conectado.';

            this.reset();
        });
    </script>

</body>
</html>
