<?php theme_include('header'); ?>
<article class="single-article">
    <header>
        <h1>404'd</h1>
        <small><?php echo article_date(); ?></small>
    </header>
    <p style="text-align:center">Sadly, the url <em><code>/<?php echo current_url(); ?></code></em> doesn't exist. Who knows, maybe I lost it somewhere.<br> But don't worry — I'll help you find your way back. Here's <a href="<?php echo base_url(); ?>">an easy way out.</a></p>
</article>
<?php theme_include('footer'); ?>