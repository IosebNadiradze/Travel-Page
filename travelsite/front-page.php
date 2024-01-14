<?php

$home_section_1 = get_field('home_section_1');
$main_title = $home_section_1['main_title'];
$main_paragraph = $home_section_1['main_paragraph'];
$main_button= $home_section_1['main_button'];
$main_image= $home_section_1['main_image'];

$home_section_2 = get_field('home_section_2');
$service_title = $home_section_2['service_title'];
$service_images = $home_section_2['service_images'];
$content_titles = $home_section_2['content_titles'];
$content_paragraphs = $home_section_2['content_paragraphs'];

$home_section_3 = get_field('home_section_3');
$content = $home_section_3['content'];
$card_images = $home_section_3['card_images'];
$numbers = $home_section_3['numbers'];
$texts = $home_section_3['texts'];

$home_section_4 = get_field('home_section_4');
$fourth_section_title = $home_section_4['fourth_section_title'];
$fourth_section_image = $home_section_4['fourth_section_image'];
$fourth_section_images = $home_section_4['fourth_section_images'];
$fourth_section_text = $home_section_4['fourth_section_text'];
$fourth_section_paragraph = $home_section_4['fourth_section_paragraph'];

$home_section_5 = get_field('home_section_5');
$buttons = $home_section_5['buttons'];
$tour_card_images = $home_section_5['tour_card_images'];
$tour_card_icons= $home_section_5['tour_card_icons'];
$day_night = $home_section_5['day_night'];
$price = $home_section_5['price'];
$tour_text = $home_section_5['tour_text'];
$tour_location = $home_section_5['tour_location'];
$location_text = $home_section_5['location_text'];
$fifth_section_title = $home_section_5['fifth_section_title'];
$button_text = $home_section_5['button_text'];

$home_section_6 = get_field('home_section_6');
$title = $home_section_6['title'];
$sixth_images = $home_section_6['sixth_images'];
$trip_title = $home_section_6['trip_title'];
$trip_paragraph = $home_section_6['trip_paragraph'];
$paragraph = $home_section_6['paragraph'];

$home_section_7 = get_field('home_section_7');
$title_7 = $home_section_7['title_7'];

$home_section_8 = get_field('home_section_8');
$title_8 = $home_section_8['title_8'];

// echo '<pre>';
// print_r($fourth_section_paragraph);
// echo '</pre>';

get_header();


?>


<main class="homepage">
    <section class="home-section-1">
        <?php if ($main_image) : ?>
            <img src="<?php echo $main_image['url']; ?>" alt="<?php echo $main_image['alt']; ?>">
        <?php endif; ?>
        <div class="main-content">
            <h1 class="main-title"><?php echo $main_title; ?></h1>
            <p class="main-paragraph">
                <?php echo $main_paragraph; ?>
            </p>
            <div class="button-1">
                <button class="main-button">
                    <a href="#"><?php echo $main_button; ?></a>
                </button>
            </div>
        </div>
    </section>
    <section class="home-section-2">
        <h2 class="service-title"><?php echo $service_title; ?></h2>
        <div class="services">
            <?php for($i=1; $i <= 3; $i++) : ?>
                <div class="service-card">
                    <img src="<?php echo $service_images['service_image_' . $i]['url']; ?>" alt="<?php echo $service_images['service_image_' . $i]['alt']; ?>">
                    <div class="service-content">
                        <h2 class="content-title"><?php echo $content_titles['content_title_' . $i] ?></h2>
                        <p class="content-paragraph"><?php echo $content_paragraphs['content_paragraph_' . $i] ?></p>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </section>
    <section class="home-section-3">
        <div class="container">
            <div class="content">
                <h2 class="title"><?php echo $content['title']; ?></h2>
                <p class="paragraph"><?php echo $content['paragraph']; ?></p>
            </div>
            <div class="card-list">
                <?php for($i=1; $i <= 4; $i++) : ?>
                    <div class="card">
                        <img src="<?php echo $card_images['card_image_' . $i]['url']; ?>" alt="<?php echo $card_images['card_image_' . $i]['alt']; ?>">
                        <div class="card-content">
                            <p class="number"><?php echo $numbers['number_' . $i] ?></p>
                            <p class="text"><?php echo $texts['text_' . $i] ?></p>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
    <section class="home-section-4">
        <h2 class="fourth-section-title"><?php echo $fourth_section_title; ?></h2>
        <div class="fourth-content">
            <img src="<?php echo $fourth_section_image['url']; ?>" alt="<?php echo $fourth_section_image['alt']; ?>">
            <div class="fourth-cards">
                <?php for($i=1; $i <= 3; $i++) : ?>
                    <div class="card-1">
                        <img src="<?php echo $fourth_section_images['image_' . $i]['url']; ?>" alt="<?php echo $fourth_section_images['image_' . $i]['alt']; ?>">
                        <div class="card-1-content">
                            <p class="fourth-section-text"><?php echo $fourth_section_text['text_' . $i] ?></p>
                            <p class="fourth-section-text"><?php echo $fourth_section_paragraph['paragraph_' . $i] ?></p></p>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
    <section class="home-section-5">
        <div class="container">
            <h2 class="fifth-section-title"><?php echo $fifth_section_title; ?></h2>
            <div class="buttons">
                <?php for($i=1; $i <= 6; $i++) : ?>
                    <a href="<?php echo $buttons['button_' . $i] ?>" class="button"><?php echo $button_text['text_' . $i]; ?></a>
                <?php endfor; ?>
            </div>
            <div class="tour-cards">
                <?php for($i=1; $i <= 3; $i++) : ?>
                    <div class="tour-card">
                        <img src="<?php echo $tour_card_images['image_' . $i]['url']; ?>" alt="<?php echo $tour_card_images['image_' . $i]['alt']; ?>">
                        <div class="tour-price">
                            <p class="day-night"><?php echo $day_night['text_' . $i]; ?></p>
                            <p class="price"><?php echo $price['text_' . $i]; ?></p>
                        </div>
                        <div class="tour-content">
                            <p class="tour-text"><?php echo $tour_text['text_' . $i]; ?></p>
                        </div>
                        <div class="location-flex">
                            <div class="tour-location">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/location-icon.png'; ?>" alt="tour-icon">
                                <p class="indonesia"><?php echo $tour_location['text_' . $i]; ?></p>
                            </div>
                            <div class="location-text">
                                <p class="know-more"><?php echo $location_text['text_' . $i]; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="for-tour-button">
                <a href="<?php echo $buttons['tour_button'] ?>" class="button-2"><?php echo $button_text['tour_button_text']; ?></a>
            </div>
        </div>
    </section>
    <section class="home-section-6">
            <div class="six-title-container">
                <h2 class="six-title"><?php echo $title; ?></h2>
                <p class="six-paragraph"><?php echo $paragraph; ?></p>
            </div>
            <div class="six-container">
                <div class="trip-cards">
                    <?php for($i=1; $i <= 3; $i++) : ?>
                        <div class="trip-card">
                            <img src="<?php echo $sixth_images['image_' . $i]['url']; ?>" alt="trip-image">
                            <div class="trip-content">
                                <h3 class="trip-title"><?php echo $trip_title['title_' . $i]; ?></h3>
                                <p class="trip-paragraph"><?php echo $trip_paragraph['text_' . $i]; ?></p>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
                <div class="girl-image">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/girl.png' ?>" alt="girl-image">
                </div>
            </div>
    </section>
    <section class="home-section-7">
        <div class="container">
            <div class="seven-title-div">
                <h2 class="seven-title"><?php echo $title_7; ?></h2>
            </div>
            <div class="about-image">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/boy.png' ?>" alt="about-image">
            </div>
        </div>
    </section>
    <section class="home-section-8">
        <div class="eight-container">
            <div class="eight-title-div">
                <h2 class="eight-title"><?php echo $title_8; ?></h2>
            </div>
            <div class="form">
                <form action="front-page.php" target="_blank" method="post">
                    <label for="inputText"></label>
                    <input type="text" id="inputText" name="inputText" placeholder="Your email" required>
                    <button class="form-button" type="submit">Subscribe</button>
                </form>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri() . '/assets/images/sent.png' ?>" alt="sent-button">
    </section>
</main>



<?php
get_footer();