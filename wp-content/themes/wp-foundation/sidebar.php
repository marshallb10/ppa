				<div id="sidebar1" class="sidebar three columns" role="complementary">

          <img src="http://localhost/ppa/wp-content/uploads/2014/03/homeowners.jpg" alt="homeowners" class="aligncenter size-full wp-image-80 sidebar-img">

					<div class="panel">
				
						<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

							<?php dynamic_sidebar( 'sidebar1' ); ?>

						<?php else : ?>

							<!-- This content shows up if there are no widgets defined in the backend. -->
							
							<div class="alert-box">Please activate some Widgets.</div>

						<?php endif; ?>

					</div>

				</div>