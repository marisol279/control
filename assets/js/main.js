document.addEventListener("DOMContentLoaded", () => {

    const btnMenu = document.getElementById("btnMenu");
    const submenu = document.getElementById("submenu");

    const inicio = document.getElementById("inicio");
    const servicios = document.getElementById("servicios");
    const contacto = document.getElementById("contacto");

    btnMenu.addEventListener("click", () => {
        submenu.classList.toggle("oculto");
    });

    document.getElementById("btnInicio").addEventListener("click", e => {
        e.preventDefault();
        inicio.style.display = "block";
        servicios.style.display = "none";
        contacto.style.display = "none";
        submenu.classList.add("oculto");
    });

    document.getElementById("btnServicios").addEventListener("click", e => {
        e.preventDefault();
        inicio.style.display = "none";
        servicios.style.display = "block";
        contacto.style.display = "none";
        submenu.classList.add("oculto");
    });

    document.getElementById("btnContacto").addEventListener("click", e => {
        e.preventDefault();
        inicio.style.display = "none";
        servicios.style.display = "none";
        contacto.style.display = "block";
        submenu.classList.add("oculto");
    });

});
