
// Año automático del footer

document.getElementById("year").textContent =
    new Date().getFullYear();


// Desplazamiento suave del menú

document.querySelectorAll('.nav-menu a').forEach(link => {

    link.addEventListener('click', function() {

        document.querySelectorAll('.nav-menu a').forEach(item => {
            item.classList.remove('active');
        });

        this.classList.add('active');

    });

});
