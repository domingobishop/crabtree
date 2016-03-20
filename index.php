<?php get_header(); ?>

<main id="main" class="bc-main" role="main">
<div id="content" class="bc-content">
    <section id="post-loop" class="bc-post-loop">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="bc-post-loop-wrap">
                        <?php if (have_posts()) : ?>
                            <?php /* The loop */ ?>
                            <?php query_posts('showposts=1'); ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <article id="post-<?php the_ID(); ?>">
                                    <?php if (has_post_thumbnail() && !post_password_required() && !is_attachment()) : ?>
                                        <div class="entry-thumbnail">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <h3 class="entry-title">
                                        <a href="<?php the_permalink(); ?>" rel="bookmark">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                    <div class="entry-summary">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <h1>No content</h1>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- #content -->
</main>

<?php get_footer(); ?>
