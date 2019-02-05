<?php
/**
 * Template Name: Blog
 *
 * @package /*name*/
 * @since /*name*/
 */
get_header(); ?>

<div class="dt-sc-fitness-procedure-container row">
                <?php
                $args = array('posts_per_page' => 6 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();?>
                  <?php echo the_post_thumbnail();?>
                  <?php
                    $category = get_the_category();
                    echo $category[0]->cat_name;
                    ?>
                   <?php  the_title();?>
                         <?php the_excerpt(); ?></div>
                            <div class="details-hover">
                                <a class="button button-color none" href="<?php the_permalink() ?>">Подробнее</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                ?>
            </div>
