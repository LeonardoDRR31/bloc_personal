
document.addEventListener('DOMContentLoaded', () => {

    // Desplazamiento suave al hacer clic en el menú
    document.querySelectorAll('.nav-menu a, .hero a').forEach(link => {

        link.addEventListener('click', function(event) {

            const target = document.querySelector(this.getAttribute('href'));

            if (target) {
                event.preventDefault();

                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }

        });

    });

});
