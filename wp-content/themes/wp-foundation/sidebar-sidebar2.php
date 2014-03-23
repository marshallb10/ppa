				<div id="sidebar2" class="sidebar three columns" role="complementary">

          <a href="http://www.google.com"><img src="http://localhost/ppa/wp-content/uploads/2014/03/contractors.jpg" alt="homeowners" class="aligncenter size-full wp-image-80 sidebar-img"></a>

					<div class="panel">

						<?php if ( is_active_sidebar( 'sidebar2' ) ) : ?>

              <?php dynamic_sidebar( 'sidebar2' ); ?>

            <?php else : ?>

              <!-- This content shows up if there are no widgets defined in the backend. -->

              <div class="alert-box">Please activate some Widgets.</div>

            <?php endif; ?>

					</div>

				</div>