<?php theme_include('header'); ?>
    <?php if(has_posts()) : while(posts()) : ?>
        <article class="posts">           
            <header>
                <h1>
                    <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
                </h1>
            <small>written <?php echo article_date(); ?></small>
            </header>
        </article>
    <?php endwhile; endif; ?>

    <?php if(has_pagination()) : ?>
       <hr>
        <nav class="pagination group">
            <?php echo posts_next(); ?>
            <?php echo posts_prev(); ?>
        </nav>
    <?php endif; ?>
<?php theme_include('footer'); ?>