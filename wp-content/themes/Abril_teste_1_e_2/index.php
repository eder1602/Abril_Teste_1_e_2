<?php get_header(); ?>


  <div class="container">
    <div class="alignContent">

        <section class="subMenu">
          <h2>+Acessados</h2>
          <nav>
            <ul>
              <?php
                query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC');
                if (have_posts()) : while (have_posts()) : the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php
                endwhile; endif;
                wp_reset_query();
              ?>
              <li><a href="#" id="button-ordem-alfabetica">|A-Z|</a></li>
            </ul>
          </nav>
        </section>
      <!--<div class="" style="float:left; width:100%; height: 100px; background: #F60;">

      </div>-->

      <section class="mainlyContent">

        <div class="featured-content">
          <div class="row no-gutters">

            <?php
              query_posts('showposts=1&post_type=post');
            ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="col-md-6 col-sm-12">
                <div class="mainFeatured">
                  <a href="<?php the_permalink(); ?>" id="mainFeatured-image-<?php echo get_the_ID() ?>"><?php
                    if ( function_exists( 'the_post_thumbnail' ) )
                    the_post_thumbnail('mainFeatured');
                  ?></a>
                  <div class="positionTextFeatured">
                    <h2>
                      <?php $category_detail=get_the_category();
                        if(array_key_exists('cat_name', $category_detail[0])){
                          echo "<label class='glyphicon glyphicon-stop' aria-hidden='true'></label>" . $category_detail[0]->cat_name;
                        } else {
                          echo '';
                        }
                      ?>
                    </h2>
                    <h3><a href="#" id="mainFeatured-<?php echo get_the_ID() ?>"><?php the_title(); ?></a></h3>
                  </div> 
                </div>
              </div>
            <?php endwhile; ?>
            <?php endif; ?>



            <?php
              query_posts('showposts=1&post_type=post&offset=1');
            ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="col-md-3 col-sm-6">
                <div class="mainFeatured-small">
                  <a href="<?php the_permalink(); ?>" id="mainFeatured-small-image-<?php echo get_the_ID() ?>"><?php
                    if ( function_exists( 'the_post_thumbnail' ) )
                    the_post_thumbnail('mainFeaturedSmall');
                  ?></a>
                  <div class="positionTextFeatured-small">
                    <h2>
                      <?php $category_detail=get_the_category();
                        if(array_key_exists('cat_name', $category_detail[0])){
                          echo "<label class='glyphicon glyphicon-stop' aria-hidden='true'></label>" . $category_detail[0]->cat_name;
                        } else {
                          echo '';
                        }
                      ?>
                    </h2>
                    <h3><a href="<?php the_permalink(); ?>" id="mainFeatured-small-link-<?php echo get_the_ID() ?>"><?php the_title(); ?></a></h3>
                  </div>
                </div>
              </div>
            <?php endwhile;  ?>
            <?php endif; ?>

            <div class="col-md-3 col-sm-6">
              <div class="mainFeatured-small">
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/publicidade-fusca.jpg" alt=""></a>
              </div>
            </div>

            <?php
              query_posts('showposts=2&post_type=post&offset=2');
            ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="col-md-3 col-sm-6">
                <div class="mainFeatured-small">
                  <a href="<?php the_permalink(); ?>" id="mainFeatured-small-image-<?php echo get_the_ID() ?>"><?php
                    if ( function_exists( 'the_post_thumbnail' ) )
                    the_post_thumbnail('mainFeaturedSmall');
                  ?></a>
                  <div class="positionTextFeatured-small">
                    <h2>
                      <?php $category_detail=get_the_category();
                        if(array_key_exists('cat_name', $category_detail[0])){
                          echo "<label class='glyphicon glyphicon-stop' aria-hidden='true'></label>" . $category_detail[0]->cat_name;
                        } else {
                          echo '';
                        }
                      ?>
                    </h2>
                    <h3><a href="<?php the_permalink(); ?>" id="mainFeatured-small-link-<?php echo get_the_ID() ?>"><?php the_title(); ?></a></h3>
                  </div>
                </div>
              </div>
            <?php endwhile;  ?>
            <?php endif; ?>
          </div>
        </div>

        <div class="columnGroup">
          <div class="row no-gutters">
            <?php
              query_posts('showposts=4&post_type=post&offset=4');
            ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="columnModule">
                  <a href="<?php the_permalink(); ?>" id="columnModule-image-<?php echo get_the_ID() ?>"><?php
                  if ( function_exists( 'the_post_thumbnail' ) )
                  the_post_thumbnail('columnModule');
                  ?></a>
                  <div class="positionTextColumn">
                    <h2>
                      <?php $category_detail=get_the_category();
                        if(array_key_exists('cat_name', $category_detail[0])){
                          echo "<label class='glyphicon glyphicon-stop' aria-hidden='true'></label>" . $category_detail[0]->cat_name;
                        } else {
                          echo '';
                        }
                      ?>
                    </h2>
                  </div>
                  <h3><a href="<?php the_permalink(); ?>" id="columnModule-title-<?php echo get_the_ID() ?>"><?php the_title(); ?></a></h3>
                  <p><a href="#" id="columnModule-excerpt-<?php echo get_the_ID() ?>"><?php the_excerpt(); ?></a></p>
                  <p class="ColumnModuleLink"><a href="<?php the_permalink(); ?>">+ <?php the_title(); ?></a></p>
                </div>
              </div>
            <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </section>

      <!--<div style="background:#6FA; width:100%; height:1000px;">
      </div>-->
    </div>
  </div>


<?php get_footer(); ?>