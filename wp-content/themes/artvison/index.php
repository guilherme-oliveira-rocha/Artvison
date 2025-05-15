<?php
/* Template Name: Home*/
?>
<?php get_header(); ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1><?php echo get_field('pimeira_secao_titulo'); ?></h1>
          <h2><?php echo get_field('pimeira_secao_descricao'); ?></h2>
          <div class="d-flex">
            <a href="#about" class="btn-get-started scrollto"><?php echo get_field('pimeira_secao_nome_botao'); ?></a>
            <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
          </div>
        </div>
        <div class="d-flex justify-content-center col-lg-6 order-1 order-lg-2 hero-img">
          <img loading=”lazy” src="<?php echo get_field('pimeira_secao_imagem'); ?>" class="img-fluid animated" alt="Art Vison - Divisórias e Forros">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><?php echo get_field('segunda_secao_icone_missao'); ?></div>
              <h4 class="title"><?php echo get_field('segunda_secao_titulo_missao'); ?></h4>
              <p class="description"><?php echo get_field('segunda_secao_descricao_missao'); ?></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><?php echo get_field('segunda_secao_icone_valores'); ?></div>
              <h4 class="title"><?php echo get_field('segunda_secao_titulo_valores'); ?></h4>
              <p class="description"><?php echo get_field('segunda_secao_descricao_valores'); ?></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
             <div class="icon"><?php echo get_field('segunda_secao_icone_visao'); ?></div>
              <h4 class="title"><?php echo get_field('segunda_secao_titulo_visao'); ?></h4>
              <p class="description"><?php echo get_field('segunda_secao_descricao_visao'); ?></p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img loading=”lazy” src="<?php echo get_field('terceira_secao_imagem'); ?>" class="img-fluid" alt="Sobre a Empresa">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3><?php echo get_field('terceira_secao_titulo'); ?></h3>
            <p class="fst-italic">
             <?php echo get_field('terceira_secao_primeira_descricao'); ?>
            </p>
            <ul>
                <?php
                    if( have_rows('terceira_secao_qualidades') ):
                        while( have_rows('terceira_secao_qualidades') ): the_row();
                            // Variáveis
                            $icone = get_sub_field('html_icone_verificado');
                            $descricao = get_sub_field('descricao_qualidade');
                            echo' <li>'.$icone. $descricao.'</li>';
                        endwhile;
                    endif;
                ?>
            </ul>
            <p>
               <?php echo get_field('terceira_secao_ultima_descricao'); ?>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="386" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php echo get_field('terceira_secao_titulo_clientes'); ?></p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="18572" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php echo get_field('terceira_secao_titulo_orcamentos'); ?></p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="11437" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php echo get_field('terceira_secao_titulo_obras'); ?></p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="27956" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php echo get_field('terceira_secao_titulo_metros_quadrados_instalados'); ?></p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <span><?php echo get_field('quarta_secao_titulo'); ?></span>
          <h2><?php echo get_field('quarta_secao_titulo'); ?></h2>
          <p><?php echo get_field('quarta_secao_descricao'); ?></p>
        </div>

        <div class="row">
            
            <?php
                if( have_rows('quarta_secao_servicos') ):
                    while( have_rows('quarta_secao_servicos') ): the_row();
                        // Variáveis
                        $icone = get_sub_field('icone');
                        $titulo = get_sub_field('titulo');
                        $descricao = get_sub_field('descricao');
                        echo'<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                                <div class="icon-box">
                                  <div class="icon">'.$icone.'</div>
                                  <h4>'.$titulo.'</h4>
                                  <p>'.$descricao.'</p>
                                </div>
                              </div>';
                    endwhile;
                endif;
            ?>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="products" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>Produtos</span>
          <h2>Produtos</h2>
          <p>Conheça Nossa Arte: Explore Nossa Galeria de Projetos!</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todos</li>
                <? $categorys = get_terms( array(
                    'taxonomy'   => 'categorys',
                    'hide_empty' => false,
                    ) );
                    foreach($categorys as $key => $value) { 
                        echo "<li data-filter='.filter-" . $value->slug . "'>" . $value->name . ""; 
                    } 
                    ?>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
            
            <?php
                $args = array(  
                    'post_type' => 'produtos',
                    'post_status' => 'publish',
                    'posts_per_page' => -1, 
                    'orderby' => 'rand',
                );
            
                $loop = new WP_Query( $args ); 
                    
                while ( $loop->have_posts() ) : $loop->the_post(); 
                ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo get_the_terms($post->ID, 'categorys')[0]->slug ?>">
                    <img loading=”lazy” src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="Forro PVC">
                    <div class="portfolio-info">
                      <div class="d-flex justify-content-between align-items-center">
                        <h4><?php the_title();  ?></h4>
                        <div>
                          <a href="<?php the_post_thumbnail_url(); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?php the_title(); ?>"><i class="bx bx-plus"></i></a>
                          <a href="<?php echo the_permalink(); ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                      </div>
                      <p><?php echo get_field( "informacoes_obras_breve_descricao", $post->ID); ?></p>
                    </div>
                 </div>
                    <?php
                endwhile;
                ?>
            <?php
                wp_reset_postdata(); 
            ?>  
        </div>
      </div>
    </section><!-- End Portfolio Section -->

     <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <span><?php echo get_field('sexta_secao_titulo'); ?></span>
          <h2><?php echo get_field('sexta_secao_titulo'); ?></h2>
          <p><?php echo get_field('sexta_secao_descricao'); ?></p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper" style="background-color: ">

            <?php
                if( have_rows('sexta_secao_pessoas_do_feddback') ):
                    while( have_rows('sexta_secao_pessoas_do_feddback') ): the_row();
                        // Variáveis
                        $foto = get_sub_field('foto');
                        $nome = get_sub_field('nome');
                        $cargo = get_sub_field('cargo');
                        $descricao_feedback = get_sub_field('descricao_feedback');
                        echo'<div class="swiper-slide">
                              <div class="testimonial-item">
                                <p>
                                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                 '.$descricao_feedback.'
                                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img loading=”lazy” src="'.$foto.'" class="testimonial-img" alt="'.$nome.'">
                                <h3>'.$nome.'</h3>
                                <h4>'.$cargo.'</h4>
                              </div>
                            </div><!-- End testimonial item -->';
                    endwhile;
                endif;
            ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3><?php echo get_field('setima_secao_titulo'); ?></h3>
          <p> <?php echo get_field('setima_secao_descricao'); ?>.</p>
          <a class="cta-btn" href="#contact"><?php echo get_field('setima_secao_nome_botao'); ?></a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <span><?php echo get_field('oitava_secao_titulo'); ?></span>
          <h2><?php echo get_field('oitava_secao_titulo'); ?></h2>
          <p><?php echo get_field('oitava_secao_descricao'); ?></p>
        </div>

        <div class="row">
            
        <?php
            if( have_rows('oitava_secao_socios') ):
                while( have_rows('oitava_secao_socios') ): the_row();
                    // Variáveis
                    $foto = get_sub_field('foto');
                    $nome = get_sub_field('nome');
                    $cargo = get_sub_field('cargo');
                    $responsabilidade = get_sub_field('responsabilidade');
                    echo'<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                              <img loading=”lazy” src="'.$foto.'" alt="'.$nome.'">
                              <h4>'.$nome.'</h4>
                              <span>'.$cargo.'</span>
                              <p>
                               '.$responsabilidade.'
                              </p>
                              <!-- <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                              </div> -->
                            </div>
                          </div>';
                endwhile;
            endif;
        ?>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div>
            <div class="loader"></div>
        </div>
      <div class="container">
         <div class="section-title">
          <span><?php echo get_field('nona_secao_titulo'); ?></span>
          <h2><?php echo get_field('nona_secao_titulo'); ?></h2>
          <p><?php echo get_field('nona_secao_descricao'); ?></p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <?php echo get_field('nona_secao_icone_endereco'); ?>
                <h4><?php echo get_field('nona_secao_titulo_endereco'); ?></h4>
                <p><?php echo get_field('nona_secao_descricao_endereco'); ?></p>
              </div>

              <div class="email">
               <?php echo get_field('nona_secao_icone_email'); ?>
                <h4><?php echo get_field('nona_secao_titulo_email'); ?></h4>
                <p><?php echo get_field('nona_secao_descricao_email'); ?></p>
              </div>

              <div class="phone">
                <?php echo get_field('nona_secao_icone_telefone'); ?>
                <h4><?php echo get_field('nona_secao_titulo_telefone'); ?></h4>
                <p><?php echo get_field('nona_secao_descricao_telefone'); ?></p>
              </div>

                <?php echo get_field('nona_secao_iframe_google_maps_artvison'); ?>
              <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.9804248675578!2d-46.70737558800451!3d-23.46117057878055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef981310f4c0b%3A0xcb01c9dbac32cbef!2sR.%20Encruzilhada%20do%20Sul%2C%20532%20-%20Jardim%20Paulistano%20(Zona%20Norte)%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2002816-010%2C%20Brasil!5e0!3m2!1spt-BR!2sie!4v1718314530950!5m2!1spt-BR!2sie" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>-->
            </div>

          </div>
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <?php echo do_shortcode( '[contact-form-7 id="2d4bc93" title="New_Contact"]' ); ?>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
<?php get_footer(); ?>