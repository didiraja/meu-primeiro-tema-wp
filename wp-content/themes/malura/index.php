<?php
    $queryTaxonomy = array_key_exists('taxonomy', $_GET);
    if ($_GET['taxonomy'] === '') {
        wp_redirect( home_url() );
    }
    $css_especifico = 'index';
    require_once('header.php');
?>

      
  <main class="home-main">
        <div class="container">
        
            <?php $taxonomias = get_terms('localizacao'); ?>   
            <form class="busca-localizacao-form" method="get" action="<?= bloginfo('url'); ?>">
                <select name="taxonomy">
                   <option value="">Todos</option>
                    <?php foreach($taxonomias as $taxonomia)  { ?>
                    <option value="<?= $taxonomia->slug ?>"><?= $taxonomia->name ?></option>
                    <?php } ?>
                </select>
                <button type="submit">Filtrar</button>
            </form>
       
       
        <?php
            
            if($queryTaxonomy) {
                $taxQuery = array(
                    array(
                        'taxonomy' => 'localizacao',
                        'field' => 'slug',
                        'terms' => $_GET['taxonomy']
                    )
                );
            }
          
            $args = array(
                'post_type' => 'imovel',
                'tax_query' => $taxQuery
            );
                
            $loop = new WP_Query( $args );
         
                if ( $loop->have_posts() ) { ?>
            <ul class="imoveis-listagem">
            <?php
                    while( $loop->have_posts() ) {
                        $loop->the_post();
            ?>
                <li class="imoveis-listagem-item">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                        <h2><?php the_title(); ?></h2>
                        <div><?php the_content(); ?></div>
                    </a>
                </li>
                
            <?php
                    }
                }
            ?>
            
            </ul>
        
      </div>
  </main>
    
<?php get_footer(); ?>