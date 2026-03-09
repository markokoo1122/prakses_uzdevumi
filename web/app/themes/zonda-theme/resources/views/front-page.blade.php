<?php get_header(); ?>
<?php
$img1 = carbon_get_post_meta(get_the_ID(), 'section_image_1');
$img2 = carbon_get_post_meta(get_the_ID(), 'section_image_2');
$img3 = carbon_get_post_meta(get_the_ID(), 'section_image_3');
$img4 = carbon_get_post_meta(get_the_ID(), 'section_image_4');
$img5 = carbon_get_post_meta(get_the_ID(), 'section_image_5');
$img6 = carbon_get_post_meta(get_the_ID(), 'section_image_6');
$img7 = carbon_get_post_meta(get_the_ID(), 'section_image_7');
$img8 = carbon_get_post_meta(get_the_ID(), 'section_image_8');
$img9 = carbon_get_post_meta(get_the_ID(), 'section_image_9');
$img11 = carbon_get_post_meta(get_the_ID(), 'section_image_11');
$img12 = carbon_get_post_meta(get_the_ID(), 'section_image_12');
$logo = carbon_get_post_meta(get_the_ID(), 'crb_logo');
?>

<main class="main-content">

    <div class="front-page-container">

        <div class="hero-section">

            <div class="hero-content">

                <?php  echo wp_get_attachment_image($img7, 'full', false, [
                        'class' => 'hero-content'
                ]); ?>
                

            </div>

            <div class="hero-text">

                <p style="text-align: left;">We provide designers with minimalist products with a multitude of options.
                    Pure shapes, clean lines and gentle apertures that deliver precise performance where needed.</p>


            </div>

        </div>

        <div class="products-section">

            <div class="product-card">

                <?php echo wp_get_attachment_image($img1, 'large'); ?>
                <hr>
                <p>systems</p>

            </div>

            <div class="product-card">

                <?php echo wp_get_attachment_image($img2, 'large'); ?>
                <hr>
                <p>round luminaires</p>

            </div>

            <div class="product-card">

                <?php echo wp_get_attachment_image($img3, 'large'); ?>
                <hr>
                <p>linear luminaires</p>

            </div>

            <div class="product-card">

                <?php echo wp_get_attachment_image($img4, 'large'); ?>
                <hr>
                <p>surface luminaires</p>

            </div>

            <div class="product-card">

                <?php echo wp_get_attachment_image($img5, 'large'); ?>
                <hr>
                <p>recessed luminaires</p>

            </div>

            <div class="product-card">

                <?php echo wp_get_attachment_image($img6, 'large'); ?>
                <hr>
                <p>trimless luminaires</p>

            </div>

        </div>

        <div class="button-container">
            <a href="#" class="btn">all products</a>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="images-container">

            <div class="tall-image">

                <?php echo wp_get_attachment_image($img8, 'large'); ?>
                <div class="label">FADING</div>

            </div>

            <div class="image-tower">

                <div class="tower1">

                    <?php  echo wp_get_attachment_image($img9, 'full', false, [
                        'class' => 'tower1'
                    ]); ?>
                    <div class="label">ALLORA</div>

                </div>

                <div class="tower2">

                    <?php  echo wp_get_attachment_image($img9, 'full', false, [
                        'class' => 'tower2'
                    ]); ?>
                    <div class="label">GOBI</div>

                </div>

            </div>

        </div>


        <div class="button-container">
            <a href="#" class="btn">more</a>
        </div>

        <div class="end-section">
            <div class="end-text">
                <div class="e-text">
                    <p>True to our values and vision and with an eye for our high quality standards in our products, in
                        our
                        designs and in our service to our customers.<br><br>
                        We strive for the highest quality in each of our lighting tools that we develop and
                        deliver.<br><br>
                        Our knowledge and operation enable us to propose products and solutions customized for each
                        project.
                </div>
                </p>
            </div>
            <br>
            <div>
                <<?php echo wp_get_attachment_image($img12, 'large'); ?>
            </div>
        </div>

    </div>

</main>


<?php get_footer(); ?>