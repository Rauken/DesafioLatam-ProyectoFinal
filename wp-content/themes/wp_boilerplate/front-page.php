<?php get_header(); ?>

<!--Header-->
<header id="home">
        <img src="<?php echo get_theme_file_uri('assets/img/logo.png'); ?>" alt="" class="mt-100">
    </header>
    <!--Secciones-->
    <div class="container text-center mt-50">

        <!--Seccion 1-->
        <div class="row">
            <div class="tindog text-shadow text-success seccion1 col-md-12">
                <h1>Granja El Capricho</h1>
                <p>El Capricho, ubicada en las cercanías de la ciudad de Nogales, es la única que posee un certificación como predio orgánico desde hace 5 años y pertenece a una cooperativa orgánica única en la provincia de Quillota</p>
            </div>
        </div>
        <!--Intermedio 1-->
        <div class="row p-3" id="about">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6 mt-50 tindog text-white">
                        <h1>¿Que es el cultivo Orgánico?</h1>
                        <p>
                            Los Cultivos orgánicos en la actualidad son conocidos como aquellos métodos de producción de alimentos pura y exclusivamente naturales. En estos restringe el uso de aditivos químicos o cualquiera otra sustancia que contenta materiales sintéticos, tales
                            como pesticidas, herbicidas y/o fertilizantes artificiales.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo get_theme_file_uri('assets/img/fotos/0 (19).jpg'); ?>" alt="cultivo" class="image  border-image">
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>

        </div>
        <!--Seccion 1-->
        <div class="row seccion1" id="aprende">
            <div class="col-md-12">
                <h1 class="tindog text-shadow text-success">¡Conoce mas acerca de los productos Organicos!</h1>
            </div>
            <div class="col-md-1"></div>
            <?php get_template_part('content','secctions'); ?>
            <div class="col-md-1"></div>
        </div>
        <br/>
        <!--Seccion 3-->
        <div class="row" id="galeria">
            <div class="col-md-12 tindogit text-white">
                <h1 class="m-2">Galeria</h1>
            </div>
            <div id="gg-screen"></div>
            <div class="gg-box align-content-center">
            <?php get_template_part('content','gallery'); ?>
            </div>
        </div>
        <br/>
    </div>
<?php get_footer(); ?>      