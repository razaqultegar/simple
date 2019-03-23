<?php get_header() ?>
    <main>
      <div class="landing">
        <div class="">
          <h1>Halo, saya Razaqul Tegar</h1>
          <h2>Seorang lelaki beruntung kelahiran Banyumas,<br>30 Januari. Sedang menjalani karir profesionalnya sebagai Full Stack Developer di <a target="_blank" href='https://www.puskomedia.id/'>Puskomedia Indonesia</a>.<br></h2>
          <h2>
              <a target="_blank" href='https://twitter.com/razaqultegar'>Twitter </a>/
              <a target="_blank" href='https://www.instagram.com/razaqultegar'>Instagram </a>/
              <a target="_blank" href="mailto:myrazaqul@gmail.com"> Email </a>
          </h2>
        </div>
        <div class="is-gravatar">
          <?php $admin_email = get_option('admin_email'); echo get_avatar( $admin_email, 100 ); ?>
        </div>
      </div>

      <br><hr>
      <div class="columns">
        <div class="blog">
          <h3> Blog</h3>
          <ul>
            <?php if( is_home() || is_archive() ) { if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <li>
                <a href="<?php the_permalink(); ?>"> <?php the_title() ?> </a>
                <span style="color:grey;"> -  <?php echo get_the_date(); ?></span>
              </li>
            <?php endwhile; endif; } ?>
          </ul>
        </div>

        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <div id="secondary" class="widget" role="complementary">
          <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>
        <?php endif; ?>
      </div>

      <br><hr>
      <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
      <div id="secondary" class="links" role="complementary">
        <?php dynamic_sidebar( 'footer-1' ); ?>
      </div>
      <?php endif; ?>
    </main>
<?php get_footer() ?>
