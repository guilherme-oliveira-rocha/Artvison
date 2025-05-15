<?php get_header(); ?>
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
                                    <a class="nav-link active" aria-current="page" href="<?php echo home_url('/'); ?>">Home</a>
                                </li>
                                <li class="nav-item px-3">
                                    <a class="nav-link" href="<?php echo home_url('/#company'); ?>">Empresa</a>
                                </li>
                                <li class="nav-item px-3">
                                    <a class="nav-link" href="<?php echo home_url('/#services'); ?>">Serviço</a>
                                </li>
                                <li class="nav-item px-3">
                                    <a class="nav-link" href="<?php echo home_url('/#products'); ?>">Produto</a>
                                </li>
                                <li class="nav-item px-3">
                                    <a class="nav-link" href="<?php echo home_url('/#contact-us'); ?>">Contato</a>
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
                        <img src="<?php echo get_field('image_slick_1'); ?>" class="d-block w-100 h-100 position-absolute"alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo get_field('image_slick_2'); ?>" class="d-block w-100 h-100 position-absolute" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo get_field('image_slick_3'); ?>"class="d-block w-100 h-100 position-absolute" alt="...">
                           
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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex align-items-center justify-content-center container flex-column mb-5">
                <?php while (have_posts()) : the_post(); ?>
                <?php
                        if( have_rows('title_and_description') ):
                            while( have_rows('title_and_description') ): the_row();
                                // Variáveis
                                $title = get_sub_field('title');
                                $description = get_sub_field('description');
                                echo'<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="our-products">
                                        <h2 class="mt-5 display-1 text-center mb-5" style="font-size: 3rem;">'.$title.'</h2>
                                        <p style="font-size: 20px;text-align: center;">'.$description.'</p>  
                                    </div>';
                            endwhile;
                        endif;
                    ?>
            </div>
            </div>
                
            <?php endwhile; ?>
            <?php get_footer(); ?>
            