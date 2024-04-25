<?php
    get_header();
?>

<main>

    <div class="introduction-container">
        <p>
            En ocasiones, mejorar los procesos de tu empresa es sólo cuestión de química. En Prolimpie desarrollamos y
            proveemos productos químicos de uso industrial e institucional que ayudan a mejorar la calidad de la
            operación y la eficiencia productiva.
        </p>

        <p>
            Tenemos todo lo necesario para el funcionamiento de tu empresa.
        </p>

        <b>Da click sobre el área para la que buscas insumos químicos.</b>
    </div>

    <div class='interactive-map-container'>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/vectorizado.png" alt="Interactive map">
    </div>

    <div class="about-us-container">
        <div class="about-us-column">
            <h2 class>SOBRE PROLIMPIE</h2>

            <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/ironshield.png">
                <div class='card-info'>
                    <h3>IRON SHIELD <br> LÍNEA METAL MECÁNICA</h3>
                    <p>
                        Productos químicos para optimizar los procesos de transformación del metal en la industria
                        Metal-Mecánica.

                        <b>Productos:</b> Lubricantes para maquinados de metal, antiadherente de soldadura, mejoradores de
                        adherencia, desengrasantes e inhibidores de oxidación, más...
                    </p>
                </div>
            </div>

            <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/kiment.png">
                <div class='card-info'>
                    <h3>Kiment <br> Línea institucional</h3>
                    <p>Productos químicos para mantenimiento, limpieza y productividad en Hoteles, Restaurantes y
                        Oficinas.

                        <b>Productos:</b> Abrillantador de llantas, blanqueador, cera para muebles y pisos,
                        desengrasante para
                        manos, desengrasante alcalino, desincrustante, desoxidante, emulsificante, gel sanitizante,
                        jabón líquido, limpiador de vidrios, sarricida, etc.</p>
                </div>
            </div>

        </div>
        <div class="about-us-column about-us-img-container">
            <img class='about-us-img'
                src="https://img.freepik.com/premium-photo/portrait-worker-zinc-galvanizing-production-plant-holding-canisters-with-chemicals-acids_308072-3997.jpg"
                alt="">
        </div>
    </div>

    <?php
         get_template_part('template-parts/form');
    ?>



</main>

<?php
        get_footer();
    ?>