<div class="col-xs-12 margin-bottom-lg margin-top">
              <!-- Start the Loop. -->
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <div class="post">
                    <div class="entry">
                      <div class="col-xs-12 padding-top-lg">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 padding-top-lg">
                          <?php the_post_thumbnail('my-size', array('class' => 'img img-responsive center-block')); ?>
                        </div>
                        <div class="col-xs-6">
                          <div class="col-xs-12">
                            <h4 class="text-left ">
                              <?php the_title(); ?>a
                            </h4> 
                            <?php 
                              the_excerpt(); 
                            ?>
                          </div>
                          <div class="col-xs-12">
                            <div class="col-xs-4">
                              <a href="<?php the_permalink(); ?>">
                                  <button type="button" class="btn btn-success">Read More</button>
                              </a>
                            </div>
                            <div class="col-xs-8">
                              <small><?php the_time('m.j.Y'); ?> by <?php the_author_posts_link(); ?></small>
                            </div>
                          </div>
                        </div>
                      </div>
                     
                    </div>
                    
                </div>
                <?php endwhile; else : ?>
                <!-- The very first "if" tested to see if there were any Posts to -->
                <!-- display.  This "else" part tells what do if there weren't any. -->
                  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <!-- REALLY stop The Loop. -->
               <?php endif; ?>
            </div>