<?php get_header(); ?>

<div class="container">
    <div id="listefavoris">
    </div>
    <div id="dernierespagesvisitees">
    </div>
    <div class="contenuprincipal">
        <hr class="divider">
        <h1 id="titreh1" class="text-center">Formation PUB020: WordPress, 2023</h1>
        <hr class="divider bas">
        <div class="contenu">
            <?php
            $posts = new WP_Query(array(
                     'post_type' => 'post',
                     'post_status' => 'publish',
                 ));

            if ($posts->have_posts()) {
                while ($posts->have_posts()) {
                    $posts->the_post();
                    $post_id = get_the_ID();
                    $post_title = get_the_title();
                    $post_content = get_the_content();
                    $comments = get_comments(array(
                        'post_id' => $post_id,
                        'status' => 'approve',
                    ));
                    ?>
                    <div class="card border-bottom-0" id="post-<?= $post_id; ?>">
                        <div class="card-header">
                            <a data-toggle="collapse" href="#comments-<?= $post_id; ?>">
                                <span class="titrealigneboutons"><?= $post_title; ?></span>
                            </a>
                            <div class="float-right boutonsalignes">
                            </div>
                        </div>
                        <div class="collapse" aria-expanded="false" id="comments-<?= $post_id; ?>">
                            <div class="card-body aucune-marge-haut-bas listefichesajax" data-id="<?= $post_id; ?>">
                                <h3>Comments</h3>
                                <ul>
                                    <?php
                                    foreach ($comments as $comment) {
                                        echo '<li>' . apply_filters('comment_text', $comment->comment_content) . '</li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
