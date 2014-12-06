<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<div class='m-all t-1of3 d-1of3 formation homebox cf'>
						<h1><?php echo stripslashes(get_option('left-heading')); ?></h1>
						<p><?php echo stripslashes(get_option('left-text')); ?></p>
						<!-- <div class='green-btn'><a href='<?php echo stripslashes(get_option("left-link-url")); ?>'><?php echo stripslashes(get_option('left-link-text')); ?></a></div> -->
						<nav class="red-brackets"><a href='<?php echo stripslashes(get_option("left-link-url")); ?>'><?php echo stripslashes(get_option('left-link-text')); ?></a></nav>
					</div>

					<div class='m-all t-1of3 d-1of3 traduction homebox cf'>
						<h1><?php echo stripslashes(get_option('centre-heading')); ?></h1>
						<p><?php echo stripslashes(get_option('centre-text')); ?></p>
						<!-- <div class='red-btn'><a href='<?php echo stripslashes(get_option("centre-link-url")); ?>'><?php echo stripslashes(get_option('centre-link-text')); ?></a></div> -->
						<nav class="green-brackets"><a href='<?php echo stripslashes(get_option("centre-link-url")); ?>'><?php echo stripslashes(get_option('centre-link-text')); ?></a></nav>
					</div>

					<div class='m-all t-1of3 d-1of3 redaction homebox cf'>
						<h1><?php echo stripslashes(get_option('right-heading')); ?></h1>
						<p><?php echo stripslashes(get_option('right-text')); ?></p>
						<nav class='red-brackets'><a href='<?php echo stripslashes(get_option("right-link-url")); ?>'><?php echo stripslashes(get_option('right-link-text')); ?></a></nav>
					</div>

					<div class="m-all t-1of2 d-1of2 about-contact cf">
						<h1><?php echo stripslashes(get_option('about-heading')); ?></h1>
						<p><?php echo stripslashes(get_option('about-text')); ?></p>
						<?php
							if (strlen(get_option('about-link-url')) != 0) { ?>
								<nav class='green-brackets'><a href='<?php echo stripslashes(get_option("about-link-url")); ?>'><?php echo stripslashes(get_option('about-link-text')); ?></a></nav>
							<?php } ?>
					</div>

					<div class="m-all t-1of2 d-1of2 about-contact cf">
						<h1><?php echo stripslashes(get_option('contact-heading')); ?></h1>
						<p><?php echo stripslashes(get_option('contact-text')); ?></p>
						<nav class='red-brackets'><a href='<?php echo stripslashes(get_option("contact-link-url")); ?>'><?php echo stripslashes(get_option('contact-link-text')); ?></a></nav>
					</div>

				</div>

			</div>


<?php get_footer(); ?>
