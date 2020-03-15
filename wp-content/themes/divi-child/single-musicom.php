<?php
get_header();
?>
<div id="main-content" class="section-musicom-list">
    <div class="container">
        <div id="content-area" class="clearfix">
            <?php
            while (have_posts()) : the_post();
                $audio = get_field("upload_audio");
                $singerName = get_field("singer_name");
                $singerBio = get_field("singer_bio");
                $singerpic = get_field("profile_image");
            ?>

                <article id="post-<?php the_ID(); ?>">
                    <h2 class="title">
                        <?php the_title(); ?>
                    </h2>
                    <div class="entry-content">
                        <?php
                        the_content();
                        ?>
                        <audio controls>
                            <source src="<?php echo $audio ?>">
                        </audio>
                    </div> <!-- .entry-content -->
                    <div class="singer-details">
                        <img src="<?php echo $singerpic; ?>" alt="Singer Profile Image">
                        <h3 class="singer-name">
                            <?php echo $singerName; ?>
                        </h3>
                        <p class="singer-bio">
                            <?php echo $singerBio; ?>
                        </p>
                    </div>
                </article> <!-- .et_pb_post -->

            <?php endwhile; ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>