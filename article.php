<?php theme_include('header'); ?>
<article class="single-article">
    <header>
        <h1><?php echo article_title(); ?></h1>
        <small><?php echo article_date(); ?></small>
    </header>
    <?php echo article_markdown(); ?>
</article>
    
<h1 class="ampersand" style="margin-bottom:0.5em">&amp;</h1>

<footer class="post-footer">

<p>If you liked what you just read, I'd gladly welcome you into my litte <em>following.</em></p>
<p>No hussle: e-mail me at <a href="mailto:words@nanopassio.es">words@nanopassio.es</a> and I'll add your name to the list.</p>
<p>Alternatively, If you <em>really</em> like what I do, you're very welcome to tip me a coffee.</p>
<a href='https://ko-fi.com/A4005S2' target='_blank'><img height='34' style='border:0px;height:34px;margin: 1em auto 1em auto' src='https://az743702.vo.msecnd.net/cdn/kofi3.png?v=b' border='0' alt='Buy Me a Coffee at ko-fi.com' /></a>
    
</footer>

<hr>

<?php if(comments_open()): ?>
<div id="disqus_thread"></div>
<script>
    var disqus_shortname='nanopassio',
        disqus_identifier='<?php echo article_id(); ?>',
        disqus_title='<?php echo page_title(); ?>',
        disqus_url='<?php echo full_url().current_url(); ?>';
    !function(){var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src="//"+disqus_shortname+".disqus.com/embed.js",(document.getElementsByTagName("head")[0]||document.getElementsByTagName("body")[0]).appendChild(e)}();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<?php endif; ?>

<?php theme_include('footer'); ?>