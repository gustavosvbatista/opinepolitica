<?php 

get_header();



?>

<div id="archive-wrapper">

  <div class="title-panel text-center big-header">
    <h1>Conheça mais sobre cada Projeto,</h1> 
    <h2>dê a sua opinião,</h2> 
    <h1>e mostre que estamos de olho!</h1>
  </div>

  <div class="title-panel text-center small-header">
    <h4>Conheça mais sobre cada Projeto,</h4> 
    <h4>dê a sua opinião,</h4> 
    <h4>e mostre que estamos de olho!</h4>
  </div>

<div class="todos-projetos">
	
<?php $loop = new WP_Query( array( 'post_type' => 'projeto' , 'posts_per_page' => -1) ); 

 while ( $loop->have_posts() ) : $loop->the_post(); 

 $projetos = new projetosModel($post->ID);
 ?>
         

<div class="panel panel-default mini-projeto">
                <div class="panel-heading mini-projeto-header"><?php the_title(); ?></div>
                <div class="panel-body">
                    <div class="pic-projeto" style="background-image: url('http://www.apostasfc.com/blog/wp-content/uploads/2014/05/apostas-desportivas_Portugal_TVI_maisfutebol_Aposta-X.jpg');">

                    </div>      
                    <div class="projeto-excerpt">
                        <?php echo the_excerpt(); ?>
                    </div>
                    <div class="panel-bottom">
                        <a href="<?php echo the_permalink(); ?>">
                            <div class="see-more">
                                SAIBA MAIS
                            </div>
                        </a>
                         <div class="percent-wrapper">
                        <span class="mini-percent-naoapoiaram">
                            <span class="glyphicon glyphicon-thumbs-down mini-icon-n"></span>
                            <?php echo $projetos->getNegativar_percent(); ?>
                        </span>

                        <span class="mini-percent-apoiaram">
                            <span class="glyphicon glyphicon-thumbs-up mini-icon-s"></span>
                            <?php echo $projetos->getPositivar_percent(); ?>
                        </span>
                    </div>
                    </div>
                </div>

            </div>




<?php endwhile; ?>




</div>




</div>
<?php get_footer() ?>