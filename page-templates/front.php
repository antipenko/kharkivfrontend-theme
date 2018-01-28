<?php
/*
Template Name: Front
*/
get_header(); ?>

<?php get_template_part('template-parts/featured-image'); ?>

<main class="ba-main-content">

    <?php $argMeetup = array(
        'post_type' => 'meetup', /*<-- Enter name of Custom Post Type here*/
        'order' => 'ASC',
        'orderby' => 'date',
        'posts_per_page' => 1
    );
    $the_query = new WP_Query($argMeetup);
    if ($the_query->have_posts()) : ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?><!-- BEGIN of Post -->

            <!--            --><?php //the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
            <!--        -->
            <!--            <h3>-->
            <!--                --><?php //the_title(); ?>
            <!--            -->
            <!--            </h3>-->
            <!--            --><?php //the_content(); ?>

            <section class="intro scroll-spy" id="intro">
                <img class="intro-logo wow fadeInUp" alt="Kharkiv front-eng logo"
                     src="/wordpress/wp-content/uploads/2018/01/logo.png"/>
                <h1 class=" fadeInUp intro-event_name" data-wow-delay=".2s">
                    <?php the_field('number'); ?>
                </h1>
                <div class="intro-info wow fadeInUp">
                    <p class="intro-time" data-wow-delay=".3s">
                        <img class="intro-time-icon" alt="time:"
                             src=" <?php bloginfo('template_url'); ?>/assets/img/clock-ico.png"/>
                        <span>
                            <?php the_field('date'); ?>
                            <br>
                            <?php the_field('time'); ?>
                        </span>
                    </p><a class="scroll-link intro-location" href="#map" data-wow-delay=".3s">
                        <img class="intro-location-icon" alt="location"
                             src="<?php bloginfo('template_url'); ?>/assets/img/map-mark.svg"/>
                        <address class="intro-location-data">
                            <?php the_field('address'); ?>
                        </address>
                    </a>
                </div>
            </section>

            <section class="speakers scroll-spy" id="speakers">
                <h1 class="section_header wow fadeInUp">speakers</h1>
                <div class="speakers-list">

                    <?php if (have_rows('speaker')): ?>
                        <?php while (have_rows('speaker')): the_row();
                            // Declare variables below
                            $speakerPhoto = get_sub_field('speaker-photo');
                            $speakerName = get_sub_field('speaker-name');
                            $speakerDeac = get_sub_field('speaker-desc');
                            $lectureTitle = get_sub_field('lecture-title');
                            $lectureDesc = get_sub_field('lecture-desc');
                            // Use variables below ?>
                            <div class="speakers-person wow fadeInUp" data-wow-duration="1s">
                                <div class="speakers-person-image-wrap">
                                    <img src="<?php echo $speakerPhoto; ?>" class='speakers-person-image'/>
                                </div>
                                <h2 class="speakers-person-name">
                                    <?php echo $speakerName; ?>
                                </h2>
                                <p class="speakers-person-info">
                                    <?php echo $speakerDeac; ?>
                                </p>
                                <h2 class="speakers-talk-name">
                                    <?php echo $lectureTitle; ?>
                                </h2>
                                <p class="speakers-talk-info">
                                    <?php echo $lectureDesc; ?>
                                </p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </section>

            <section class="agenda scroll-spy" id="agenda">
                <h1 class="section_header wow fadeInUp">agenda</h1>
                <table class="agenda-table wow fadeInUp">
                    <thead class="agenda-table-head">
                    <tr>
                        <th>Time</th>
                        <th>Speaker</th>
                        <th>Topic</th>
                    </tr>
                    </thead>
                    <tbody class="agenda-table-body">
                    <?php if (have_rows('speaker')): ?>
                        <?php while (have_rows('speaker')): the_row();
                            // Declare variables below
                            $speakerName = get_sub_field('speaker-name');
                            $lectureTitle = get_sub_field('lecture-title');
                            $lectureTime = get_sub_field('lecture-time');
                            // Use variables below ?>
                            <tr>
                                <td class="agenda-table-time">
                                    <?php echo $lectureTime; ?>
                                </td>
                                <td class="agenda-table-speaker">
                                    <?php echo $speakerName; ?>
                                </td>
                                <td class="agenda-table-talk">
                                    <?php echo $lectureTitle; ?>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </tbody>
                </table>
            </section>

            <?php if (have_rows('sponsors')): ?>
                <section class="sponsors scroll-spy" id="agenda">
                    <h1 class="section_header wow fadeInUp">sponsors</h1>
                    <div class="sponsors-list">

                        <?php while (have_rows('sponsors')): the_row();
                            // Declare variables below
                            $sponsorLogo = get_sub_field('sponsor-logo');
                            $sponsorUrl = get_sub_field('sponsor-link');
                            $sponsorName = get_sub_field('sponsor-name');
                            $sponsorDesc = get_sub_field('sponsor-desc');
                            // Use variables below ?>
                            <div class="sponsor wow fadeInUp" data-wow-duration="1s">
                                <div class="sponsor-image-wrap">
                                    <a href=" <?php echo $sponsorUrl; ?> ">
                                        <img src="<?php echo $sponsorLogo; ?>" class='sponsor-image'/>
                                    </a>
                                </div>
                                <!--<h2 class="sponsor-name">
                                    <?php /*echo $sponsorName; */?>
                                </h2>-->
                                <p class="sponsor-info">
                                    <?php echo $sponsorDesc; ?>
                                </p>

                            </div>
                        <?php endwhile; ?>

                    </div>
                </section>
            <?php endif; ?>

            <section class="map scroll-spy" id="map">

                <h1 class="section_header wow fadeInUp">location</h1>
                <?php if ($location = get_field('location')): ?>
                    <div class="acf-map">
                        <?php echo get_field('location'); ?>
                    </div>
                <?php endif; ?>
            </section>

        <?php endwhile; ?><!-- END of Post -->

    <?php endif;
    wp_reset_query(); ?>

</main>

<?php get_footer(); ?>
