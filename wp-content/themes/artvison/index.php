<?php
/* Template Name: Home*/
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<?php echo get_template_directory_uri(). '/assets/css/style.css'; ?>" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Artvison</title>
</head>

<body>
    <main>
        <div class="container-fluid">
            <nav class="navbar fixed-top navbar-expand-lg" id="hide-menu" style="display: none;">
                <div class="container">
                    <a class="navbar-brand" href="#">Artvison</a>
                    <div class="container">
                        <div class="d-none d-sm-block d-sm-none d-md-block">
                            <a class="navbar-brand" href="#">
                                <img src="<?php echo get_template_directory_uri(). '/assets/images/home/Artvison.png" alt="" width="50" height="50"'; ?>">
                            </a>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto flex-nowrap">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#company">Empresa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Serviço</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#products">Produto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact-us">Contato</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <section id="Home">
                <nav class="my-nav navbar navbar-expand-lg navbar-light bg-light pull-right">
                    <div class="container">
                        <div class="container">
                            <div class="d-none d-sm-block d-sm-none d-md-block">
                                <a class="navbar-brand" href="#">
                                    <img src="<?php echo get_template_directory_uri(). '/assets/images/home/Artvison.png" alt="" width="100" height="100"'; ?>">
                                </a>
                            </div>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto flex-nowrap">
                                <li class="nav-item px-3">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item px-3">
                                    <a class="nav-link" href="#company">Empresa</a>
                                </li>
                                <li class="nav-item px-3">
                                    <a class="nav-link" href="#services">Serviço</a>
                                </li>
                                <li class="nav-item px-3">
                                    <a class="nav-link" href="#products">Produto</a>
                                </li>
                                <li class="nav-item px-3">
                                    <a class="nav-link" href="#contact-us">Contato</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div id="carouselExampleCaptions" class="my-carousel carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner display-2">
                <div class="carousel-item active">
                        <img src="<?php echo get_field('image_slick_image_1'); ?>" class="d-block w-100 h-100 position-absolute"
                            alt="...">
                        <div class="carousel-caption d-none d-md-block text-center">
                            <p class="title-images"><?php echo get_field('image_slick_text_1'); ?></p>
                            <div id="contact" class="text-center mt-xl-5">
                                <a class="btn btn-light image-button fw-bold" href="tel:+55 113993-4241"
                                    target="_blank">Telefonar</a>
                                <a class="btn btn-light image-button fw-bold" href="https://wa.me/551139934241"
                                    target="_blank">Whatsapp</a>
                                <a class="btn btn-light image-button fw-bold" href="javascript:void(0);">E-mail</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo get_field('image_slick_image_2'); ?>" class="d-block w-100 h-100 position-absolute" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <p class="title-images"><?php echo get_field('image_slick_text_2'); ?></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo get_field('image_slick_image_3'); ?>"
                            class="d-block w-100 h-100 position-absolute" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <p class="title-images"><?php echo get_field('image_slick_text_3'); ?></p>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            </section>
            <section id="company" class="mt-5">
                <div class="row " id="mission">
                    <?php
                        if( have_rows('quality') ):
                            while( have_rows('quality') ): the_row();
                                // Variáveis
                                $image = get_sub_field('image');
                                $title = get_sub_field('title');
                                $description = get_sub_field('description');
                                echo' <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center box-icon">
                                        <div class="align-icon">
                                            <span>'.$image.'</i></span>
                                        </div>
                                        <br />
                                        <h5>'.$title.'</h5>
                                        <p>'.$description.'</p>
                                    </div>';
                            endwhile;
                        endif;
                    ?>
                </div>
                <div class="mt-5">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" id="about">
                            <span class="title">
                                <h2><?php echo get_field('title_history'); ?></h2>
                            </span>
                            <div class="row">
                                <p><?php echo get_field('description_history'); ?></p>
                                <?php
                                    if( have_rows('mission_value') ):
                                        while( have_rows('mission_value') ): the_row();
                                            // Variáveis
                                            $image = get_sub_field('image');
                                            $title = get_sub_field('title');
                                            $description = get_sub_field('description');
                                            echo'<h5 class="title-about"><span class="icon-title">
                                                '.$image.'</span>'.$title.'
                                                </h5>
                                                <p>'.$description.'</p>';
                                        endwhile;
                                    endif;
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <div class="parallax"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="services" class="mt-7">
                <div class="row" id="our-services">
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12" id="our_services_title">
                        <div class="float-end">
                            <h2 class="mt-7">
                                <?php echo get_field ('title_services');?>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mt-2">
                        <div class="ps-5">
                            <div class="row">
                            <?php
                                if( have_rows('divisorias') ):
                                    while( have_rows('divisorias') ): the_row();
                                        // Variáveis
                                        $image = get_sub_field('image');
                                        $title = get_sub_field('title');
                                        echo'<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-2">
                                                <h4>
                                                    <p class="mouse-event-service">'.$image.''.$title.'</p>
                                                </h4>';
                                                if( have_rows('description') ):
                                                    while( have_rows('description') ): the_row();
                                                    $image = get_sub_field('image');
                                                    $description = get_sub_field('description');
                                                    echo'<p class="sub-service ms-3">
                                                            <span class="mouse-event-service">'.$image.''.$description.'</span>
                                                        </p>';
                                                    endwhile;
                                                endif;
                                        echo'</div>';                
                                    endwhile;
                                endif;
                            ?>   
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="products">
                <div id="Unloader_products">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
                            <div class="position-relative px-2 py-2 container-image-right-top float-end mt-6">
                                <div class="text-block">
                                    <h5 class="text-show"><?php echo get_field('produtos_forro_modular_titulo_forro_modular'); ?></h5>
                                    <h5 class="text-hover">
                                        <ul>
                                            <li><a href="#Products" page="<?php echo get_template_directory_uri(). '/mineral_fiber.php' ; ?>"
                                                    class="link-image-work button-load"><?php echo get_field('produtos_forro_modular_fibra_mineral'); ?>
                                            <li><a href="#Products" page="<?php echo get_template_directory_uri(). '/polystyrene.php'; ?>"
                                                    class="link-image-work button-load"><?php echo get_field('produtos_forro_modular_isopor'); ?></a></li>
                                            <li><a href="#Products" page="<?php echo get_template_directory_uri(). '/glass_wool.php'; ?>"
                                                    class="link-image-work button-load"><?php echo get_field('produtos_forro_modular_la_de_vidro'); ?></a></li>
                                        </ul>
                                    </h5>
                                </div>
                                <img src="<?php echo get_template_directory_uri(). '/assets/images/Foto_Obras/Forros/modular/Fibra_mineral/Fibra-Mineral.png'; ?>"
                                    class="img-fluid rounded-circle image-work" alt="..." />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="container-image text-center">
                                <div class="text-block">
                                    <h5 class="text-show"><?php echo get_field('produtos_dry_wall_titulo_dry_wall'); ?></h5>
                                    <h5 class="text-hover">
                                        <ul>
                                        <li><a href="#Products" page="<?php echo get_template_directory_uri(). '/wall.php'; ?>"
                                                    class="link-image-work button-load"><?php echo get_field('produtos_dry_wall_dry_wall_parede'); ?></a></li>
                                            <li><a href="#Products" page="<?php echo get_template_directory_uri(). '/plaster.php'; ?>"
                                                    class="link-image-work button-load"><?php echo get_field('produtos_dry_wall_dry_wall_forro'); ?></a></li>
                                        </ul>
                                    </h5>
                                </div>
                                <img src="<?php echo get_template_directory_uri(). '/assets/images/Foto_Obras/Dry Wall/forro/Dry-Wall-Forro.JPG'; ?>"
                                    class="img-fluid rounded-circle image-work" alt="..."/>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="container-image container-image-left-top float-start mt-6">
                                <div class="text-block text-block-left-top">
                                    <h5 class="text-show"><?php echo get_field('produtos_eucatex_titulo_eucatex'); ?></h5>
                                    <h5 class="text-hover">
                                        <ul>
                                            <li><a href="#Products" page="<?php echo get_template_directory_uri(). '/eucatex_divider.php'; ?>"
                                                    class="link-image-work button-load"><?php echo get_field('produtos_eucatex_divisoria_eucatex'); ?></a></li>
                                        </ul>
                                    </h5>
                                </div>
                                <img src="<?php echo get_template_directory_uri(). '/assets/images/Foto_Obras/divisórias Eucatex/Divisoria-Eucatex.jpg'; ?>"
                                    class="img-fluid rounded-circle image-work" alt="..." />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="container-image text-center">
                                <div class="text-block">
                                    <h5 class="text-show"><?php echo get_field('produtos_office_linha_90mm_titulo_office'); ?></h5>
                                    <h5 class="text-hover">
                                        <ul>
                                            <li><a href="#Products"
                                                    page="<?php echo get_template_directory_uri(). '/office_divider_line_90mm.php'; ?>"
                                                    class="link-image-work button-load"><?php echo get_field('produtos_office_linha_90mm_divisoria_office_linha_90mm'); ?></a></li>
                                        </ul>
                                    </h5>
                                </div>
                                <img src="<?php echo get_template_directory_uri(). '/assets/images/Foto_Obras/divisória office Linha 90mm/Divisoria-Office-Linha-90mm.jpeg'; ?>"
                                    class="img-fluid rounded-circle image-work" alt="..." />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" id="our-products">
                            <h2 class="mt-5 display-1 text-center">
                                <?php echo get_field('title_products'); ?>
                            </h2>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="container-image text-center">
                                <div class="text-block">
                                    <h5 class="text-show"><?php echo get_field('produtos_forro_pvc_titulo_forro_pvc'); ?></h5>
                                    <h5 class="text-hover">
                                        <ul>
                                            <li><a href="#Products" page="<?php echo get_template_directory_uri(). '/pvc_lining.php'; ?>"
                                                    class="link-image-work button-load"><?php echo get_field('produtos_forro_pvc_forro_pvc'); ?></a>
                                            </li>
                                        </ul>
                                    </h5>
                                </div>
                                <img src="<?php echo get_template_directory_uri(). '/assets/images/Foto_Obras/Forros/PVC_réguas/art11.png'; ?>"
                                    class="img-fluid rounded-circle image-work" alt="..." />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="container-image container-image-right-bottom float-end mb-2">
                                <div class="text-block text-block-right-bottom">
                                    <h5 class="text-show"><?php echo get_field('produtos_divisoria_sanitaria_eucatex_titulo_divisoria_sanitaria_eucatex'); ?></h5>
                                    <h5 class="text-hover">
                                        <ul>
                                            <li><a href="#Products" page="<?php echo get_template_directory_uri(). '/eucatex_sanitary_partition.php'; ?>"
                                                    class="link-image-work button-load"><?php echo get_field('produtos_divisoria_sanitaria_eucatex_divisoria_sanitaria_eucatex'); ?></a></li>
                                        </ul>
                                    </h5>
                                </div>
                                <img src="<?php echo get_template_directory_uri(). '/assets/images/Foto_Obras/Div. Sanitaria PVC ou eucatex/Div. Sant. PVC 1.jpg'; ?>"
                                    class="img-fluid rounded-circle image-work" alt="..." />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="container-image text-center">
                                <div class="text-block">
                                    <h5 class="text-show"><?php echo get_field('produtos_divisoria_sanitaria_pvc_titulo_divisoria_sanitaria_pvc'); ?></h5>
                                    <h5 class="text-hover">
                                        <ul>
                                            <li><a href="#Products" page="<?php echo get_template_directory_uri(). '/sanitary_part_pvc.php'; ?>"
                                                    class="link-image-work button-load"><?php echo get_field('produtos_divisoria_sanitaria_pvc_divisoria_sanitaria_pvc'); ?>
                                                    <br />PVC</a></li>
                                        </ul>
                                    </h5>
                                </div>
                                <img src="<?php echo get_template_directory_uri(). '/assets/images/Foto_Obras/Div. Sanitaria PVC ou eucatex/Divisoria-Sanitaria-PVC.jpg'; ?>"
                                    class="img-fluid rounded-circle image-work" alt="..." />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="container-image container-image-left-bottom float-start mb-2">
                                <div class="text-block text-block-left-bottom">
                                    <h5 class="text-show"><?php echo get_field('produtos_divisoria_sanitaria_ts_titulo_divisoria_sanitaria_ts'); ?></h5>
                                    <h5 class="text-hover">
                                        <ul>
                                            <li><a href="#Products"
                                                    page="<?php echo get_template_directory_uri(). '/sanitary_partition_ts.php'; ?>"
                                                    class="link-image-work button-load"><?php echo get_field('produtos_divisoria_sanitaria_ts_divisoria_sanitaria_ts'); ?>
                                            </li>
                                        </ul>
                                    </h5>
                                </div>
                                <img src="<?php echo get_template_directory_uri(). '/assets/images/Foto_Obras/Div sanitária. TS/Divsoria-Sanitaria-TS-2.jpeg'; ?>"
                                    class="img-fluid rounded-circle image-work" alt="..." />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="loader_event" style="display: none;">
                    <butto id="closeButton" class="position-fixed"><i class="fas fa-arrow-left"></i> Voltar</button>
                </div>
                <div id="loader" class="loader_event position-relative w-100 h-100 overflow-hidden" style="display: none;">
                    <div id="load_products"></div>
                </div>
            </section>
            <section id="contact-us">
                <div class="row form-contact">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 mt-2" id="OurServices_body">
                    <form id="formExemplo" method="POST">
                        <?php echo do_shortcode( '[contact-form-7 id="260" title="Contact"]' ); ?>
                    </form>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 text-center" id="contact-us-tile">
                        <h2 class="mt-7 display-1 text-center">
                            <span>Fale</span>
                            <br />
                            <span style="color: #3C3C3E;">Conosco</h5>
                        </h2>
                    </div>
                </div>
            </section>
            <br />
            <br />
            <!-- Footer -->
            <footer class="text-center text-lg-start" style="background-color: #3C3C3E; color: white;">
                <!-- Section: Social media -->
                <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                    <!-- Left -->
                    <div class="me-5 d-none d-lg-block">
                        <span>Conheça nossas redes sociais:</span>
                    </div>
                    <!-- Left -->

                    <!-- Right -->
                    <div>
                        <a href="https://www.facebook.com/artvison.artvison" class="me-4 text-reset" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/_artvison/" class="me-4 text-reset" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                    <!-- Right -->
                </section>
                <!-- Section: Social media -->

                <!-- Section: Links  -->
                <section class="">
                    <div class="container text-center text-md-start mt-5">
                        <!-- Grid row -->
                        <div class="row mt-3">
                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                <!-- Content -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    <i class="fas fa-building me-3"></i>Artvison Forros e Divisórias
                                </h6>
                                <p>
                                    A ART VISON, uma das principais empresas especializadas no mercado de divisórias, forros
                                    e
                                    dry wall, desde 1991, distribui seus produtos com qualidade, garantia, rapidez e mão de
                                    obra
                                    especializada.
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Produtos
                                </h6>
                                <p>
                                    Forro Modular
                                </p>
                                <p>
                                    Dry Wall
                                </p>
                                <p>
                                    Divisória Eucatex
                                </p>
                                <p>
                                    Forro PVC
                                    Divisória Office Linha 90mm
                                </p>
                                <p>
                                    Divisória Sanitaria
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Useful links
                                </h6>
                                <p>
                                    <a href="#" class="text-reset">Home</a>
                                </p>
                                <p>
                                    <a href="#company" class="text-reset">Empresa</a>
                                </p>
                                <p>
                                    <a href="#services" class="text-reset">Serviço</a>
                                </p>
                                <p>
                                    <a href="#products" class="text-reset">Produto</a>
                                </p>
                                <p>
                                    <a href="#contact-us" class="text-reset">Contato</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Contato
                                </h6>
                                <p><i class="fas fa-home me-3"></i>Rua Encruzilhada do Sul, 532 - Jd. Paulistano - São Paulo
                                    - SP <br /> Cep 02816-010</p>
                                <p>
                                    <i class="fas fa-envelope me-3"></i>
                                    artvison@artvison.com.br
                                </p>
                                <p><i class="fas fa-phone me-3"></i> (11) 3993-4241</p>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                    </div>
                </section>
                <!-- Section: Links  -->
    </main>
            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                <span class="text-reset fw-bold">Artvison</span>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./js/jquery.mask.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script src="https://kit.fontawesome.com/e4a553e910.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(). '/assets/js/script.js'; ?>"></script>
</body>

</html>
