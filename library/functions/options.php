<?php

// Author: Jonathan Evans

//Start Springbox Options
//***********************
// Options Page Functions

add_action( 'admin_menu', 'sbox_options_menu' );

function sbox_options_menu() {
	add_menu_page( 'SpringBox Options', 'SpringBox Options', 'manage_options', 'sbox-user-options', 'sbox_options_page', '', 99 );
}

function sbox_options_page() {
	//if we got here with a POST, update the database with the new options
	if (isset($_POST['update_sbox_options'])) {
        if ( $_POST['update_sbox_options'] == 'true' ) { sbox_options_update(); }
    }
	// here's the main function that will generate our options page
?>

<!--Options Markup-->
<div class="wrap">
    <div id="icon-themes" class="icon32"><br />
    </div>
    <h1>Springbox Options</h1>
    <form method="POST" action="">
        <input type="hidden" name="update_sbox_options" value="true" />
        <h2>Presentation Boxes</h2>
        <p>These options allow you to customise the titles, text and links for all the text on the front page.</p>
        <p>Basic HTML should work OK. Link URLs should include the http bit.</p>
        
        <!-- LEFT BOX -->
        <h3>Left Box</h3>
            <!-- Heading -->
        <p>
            <input type="text" name="left-heading" id="left-heading" size="48" value="<?php esc_attr_e( get_option( 'left-heading' ) ); ?>"/>
            <label for="left-title">Heading</label>
        </p>
            <!-- Text -->
        <p>
            <textarea name="left-text" id="left-text" cols=60 rows=6><?php esc_attr_e( get_option( 'left-text' ) ); ?></textarea></p>
        </p>
            <!-- URL -->
        <p>
            <input type="text" name="left-link-url" id="left-link-url" size="48" value="<?php esc_attr_e( get_option( 'left-link-url' ) ); ?>"/>
            <label for="left-link-url">Link Target</label>
        </p>
        <p>
            <!-- Link text -->
            <input type="text" name="left-link-text" id="left-link-text" size="48" value="<?php esc_attr_e( get_option( 'left-link-text' ) ); ?>"/>
            <label for="left-link-text">Link Text</label>
        </p>
        
        <!-- CENTRE BOX -->
        <h3>Centre Box</h3>
            <!-- Heading -->
        <p>
            <input type="text" name="centre-heading" id="centre-heading" size="48" value="<?php esc_attr_e( get_option( 'centre-heading' ) ); ?>"/>
            <label for="centre-title">Heading</label>
        </p>
            <!-- Text -->
        <p>
            <textarea name="centre-text" id="centre-text" cols=60 rows=6><?php esc_attr_e( get_option( 'centre-text' ) ); ?></textarea></p>
        </p>
            <!-- URL -->
        <p>
            <input type="text" name="centre-link-url" id="centre-link-url" size="48" value="<?php esc_attr_e( get_option( 'centre-link-url' ) ); ?>"/>
            <label for="centre-link-url">Link Target</label>
        </p>
        <p>
            <!-- Link text -->
            <input type="text" name="centre-link-text" id="centre-link-text" size="48" value="<?php esc_attr_e( get_option( 'centre-link-text' ) ); ?>"/>
            <label for="centre-link-text">Link Text</label>
        </p>

        <!-- RIGHT BOX -->
        <h3>Right Box</h3>
            <!-- Heading -->
        <p>
            <input type="text" name="right-heading" id="right-heading" size="48" value="<?php esc_attr_e( get_option( 'right-heading' ) ); ?>"/>
            <label for="right-title">Heading</label>
        </p>
            <!-- Text -->
        <p>
            <textarea name="right-text" id="right-text" cols=60 rows=6><?php esc_attr_e( get_option( 'right-text' ) ); ?></textarea></p>
        </p>
            <!-- URL -->
        <p>
            <input type="text" name="right-link-url" id="right-link-url" size="48" value="<?php esc_attr_e( get_option( 'right-link-url' ) ); ?>"/>
            <label for="right-link-url">Link Target</label>
        </p>
        <p>
            <!-- Link text -->
            <input type="text" name="right-link-text" id="right-link-text" size="48" value="<?php esc_attr_e( get_option( 'right-link-text' ) ); ?>"/>
            <label for="right-link-text">Link Text</label>
        </p>

        <h2>About &amp; Contact</h2>
        
        <h3>About</h3>
        <!-- ABOUT -->
        <p>
            <input type="text" name="about-heading" id="about-heading" size="48" value="<?php esc_attr_e( get_option( 'about-heading' ) ); ?>"/>
            <label for="about-heading">About Us Heading</label>
        </p>
        <p>
            <textarea name="about-text" id="about-text" cols=60 rows=6><?php esc_attr_e( get_option( 'about-text' ) ); ?></textarea></p>
        </p>
            <!-- URL -->
        <p>
            <input type="text" name="about-link-url" id="about-link-url" size="48" value="<?php esc_attr_e( get_option( 'about-link-url' ) ); ?>"/>
            <label for="about-link-url">About Us Link Target (Optional)</label>
        </p>
        <p>
            <!-- Link text -->
            <input type="text" name="about-link-text" id="about-link-text" size="48" value="<?php esc_attr_e( get_option( 'about-link-text' ) ); ?>"/>
            <label for="about-link-text">About Us Link Text (Optional)</label>
        </p>
        
        <h3>Contact</h3>
        <!-- Contact -->
        <p>
            <input type="text" name="contact-heading" id="contact-heading" size="48" value="<?php esc_attr_e( get_option( 'contact-heading' ) ); ?>"/>
            <label for="contact-heading">Contact Us Heading</label>
        </p>
        <p>
            <textarea name="contact-text" id="contact-text" cols=60 rows=6><?php esc_attr_e( get_option( 'contact-text' ) ); ?></textarea></p>
        </p>
            <!-- URL -->
        <p>
            <input type="text" name="contact-link-url" id="contact-link-url" size="48" value="<?php esc_attr_e( get_option( 'contact-link-url' ) ); ?>"/>
            <label for="contact-link-url">Contact Us Link Target (Optional)</label>
        </p>
        <p>
            <!-- Link text -->
            <input type="text" name="contact-link-text" id="contact-link-text" size="48" value="<?php esc_attr_e( get_option( 'contact-link-text' ) ); ?>"/>
            <label for="contact-link-text">Contact Us Link Text (Optional)</label>
        </p>


        
        
        <!-- submit button -->
        <p><input type="submit" name="search" value="Update Options" class="button" /></p>
    </form>
</div>

<?php
}
function sbox_options_update() {
	// this is where validation would go
	
    // left
    update_option( 'left-heading', stripslashes($_POST['left-heading']) );
	update_option( 'left-text', stripslashes($_POST['left-text']) );
    update_option( 'left-link-url', stripslashes($_POST['left-link-url']) );
    update_option( 'left-link-text', stripslashes($_POST['left-link-text']) );

    //centre
    update_option( 'centre-heading', stripslashes($_POST['centre-heading']) );
    update_option( 'centre-text', stripslashes($_POST['centre-text']) );
    update_option( 'centre-link-url', stripslashes($_POST['centre-link-url']) );
    update_option( 'centre-link-text', stripslashes($_POST['centre-link-text']) );

    //right
    update_option( 'right-heading', stripslashes($_POST['right-heading']) );
    update_option( 'right-text', stripslashes($_POST['right-text']) );
    update_option( 'right-link-url', stripslashes($_POST['right-link-url']) );
    update_option( 'right-link-text', stripslashes($_POST['right-link-text']) );

    // about
    update_option( 'about-heading', stripslashes($_POST['about-heading']) );
    update_option( 'about-text', stripslashes($_POST['about-text']) );
    update_option( 'about-link-url', stripslashes($_POST['about-link-url']) );
    update_option( 'about-link-text', stripslashes($_POST['about-link-text']) );

    // contact
    update_option( 'contact-heading', stripslashes($_POST['contact-heading']) );
    update_option( 'contact-text', stripslashes($_POST['contact-text']) );
    update_option( 'contact-link-url', stripslashes($_POST['contact-link-url']) );
    update_option( 'contact-link-text', stripslashes($_POST['contact-link-text']) );

}