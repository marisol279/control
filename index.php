<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Soporte</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <script defer src="assets/js/main.js"></script>
</head>

<body>

    <div class="panel">

        <!-- HEADER -->
        <header class="header">
            <div class="logo">&lt;/&gt; Desarrollo de Sistemas</div>
        </header>

        <!-- CONTENEDOR PRINCIPAL -->
        <div class="contenedor">

            <!-- MENU IZQUIERDO CON SUBMENU -->
            <nav class="menu-izquierdo">
                <div class="menu-principal" id="btnMenu">Menú</div>

                <div class="submenu oculto" id="submenu">
                    <a href="#" id="btnInicio">Inicio</a>
                    <a href="#" id="btnServicios">Servicios</a>
                    <a href="#" id="btnContacto">Contacto</a>
                </div>
            </nav>

            <!-- CONTENIDO -->
            <div class="contenido">

                <!-- INICIO -->

                <section id="inicio">


                    <div class="servicios-grid">

                        <div class="servicio-card">
                            <h3>🏢 ¿Quiénes Somos?</h3>
                            <p>
                                Empresa dedicada al desarrollo de sistemas y soluciones digitales
                                orientadas a mejorar procesos y potenciar negocios.
                            </p>
                        </div>

                        <div class="servicio-card">
                            <h3>🎯 Misión</h3>
                            <p>
                                Crear soluciones tecnológicas eficientes que ayuden a nuestros clientes
                                a optimizar recursos y alcanzar sus objetivos.
                            </p>
                        </div>

                        <div class="servicio-card">
                            <h3>🚀 Visión</h3>
                            <p>
                                Ser una empresa referente en desarrollo de sistemas,
                                reconocida por la calidad e innovación.
                            </p>
                        </div>

                        <div class="servicio-card">
                            <h3>🤝 Valores</h3>
                            <p>
                                Compromiso, calidad, innovación, responsabilidad
                                y trabajo en equipo.
                            </p>
                        </div>

                        <div class="servicio-card">
                            <h3>📂 Nuestros Trabajos</h3>
                            <p>
                                Sistemas, aplicaciones y soluciones digitales desarrolladas
                                con tecnologías modernas.
                            </p>
                        </div>

                    </div>
                </section>



                <!-- SERVICIOS -->
                <section id="servicios" class="oculto">


                    <div class="servicios-grid">
                        <div class="servicio-card">
                            <h3>🌐 Desarrollo Web</h3>
                            <p>HTML, CSS, JavaScript y diseño responsivo.</p>
                        </div>

                        <div class="servicio-card">
                            <h3>⚙️ Programación en PHP</h3>
                            <p>Backend, formularios y MySQL.</p>
                        </div>

                        <div class="servicio-card">
                            <h3>🗄️ Bases de Datos</h3>
                            <p>Diseño y consultas SQL.</p>
                        </div>

                        <div class="servicio-card">
                            <h3>💻 Aplicaciones</h3>
                            <p>Apps de escritorio personalizadas.</p>
                        </div>
                    </div>
                </section>

                <!-- CONTACTO -->
                <section id="contacto" class="oculto contacto">


                    <form id="formContacto">
                        <input type="text" name="nombre" placeholder="Nombre" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <textarea name="mensaje" placeholder="Tu mensaje" required></textarea>
                        <button type="submit">Enviar Mensaje</button>
                    </form>

                    <div id="respuesta"></div>
                </section>

            </div>
        </div>
    </div>

    <footer>
        © 2026 Desarrollo de Sistemas. Todos los derechos reservados.
    </footer>

</body>

</html>