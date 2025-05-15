<?php get_header(); ?>
            <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h1><?php the_title(); ?></h1>
          <ol>
            <li><a class="breadcrumbs-url" href="https://www.artvison.com.br/#hero">Home</a></li>
            <li><a class="breadcrumbs-url" href="https://www.artvison.com.br/#products">Produtos</a></li>
            <li><?php the_title(); ?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
            <?php
                if( have_rows('imagens_slick') ):
                    while( have_rows('imagens_slick') ): the_row();
                        // Variáveis
                        $imagem = get_sub_field('imagem');
                        echo' <div class="swiper-slide">
                                  <img src="'.$imagem.'" alt="">
                                </div>';
                    endwhile;
                endif;
            ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Informações da Obra</h3>
              <ul>
                <li><strong>Categoria</strong>: <?php echo get_the_terms($post->ID, 'categorys')[0]->name ?></li>
                <li><strong>Cliente</strong>: <?php echo get_field('detalhes_obras_cliente'); ?></li>
                <li><strong>Data da Obra</strong>: <?php echo get_field('detalhes_obras_data_obra'); ?></li>
              </ul>
            </div>
            <div class="portfolio-description">
               <!--<h2>Forro Modular de Isopor: Solução Leve e Eficiente para Todos os Ambientes</h2> -->
              <p>
                <?php echo get_field('informacoes_obras_descricao_detalhada'); ?>
              </p>
            </div>
          </div>
        <div class="d-flex col-lg-12 justify-content-center text-center">
            <a href="https://wa.me/551139934241" target="_blank" class="btn-get-started scrollto">Solicite agora um orçamento!</a>
            <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
          </div>
        </div>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
            <?php get_footer(); ?>