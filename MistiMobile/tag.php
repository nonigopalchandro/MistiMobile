<?php get_header(); ?>
<div class="home-section">
<div class="left-col">
<h2 class="subsections-heading">Tag '<?php single_tag_title(); ?>'</h2>
<div class="article-list article-list-mode1"  data-filter-sort="13" data-display-mode="1" data-prevpagekey="" data-activepagekey="QXJ0aWNsZUxpc3RLZXl8MTN8MTMwfDB8MTQ3MHx8MXwwfDB8MHwxfDF8" data-nextpagekey="QXJ0aWNsZUxpc3RLZXl8MTN8MTMwfDB8MTQ3MHx8MnwwfDB8MHwxfDF8" data-prevpagepath="" data-activepagepath="http://www.howtrick.com/" data-nextpagepath="http://www.howtrick.com/page/2/" data-title-base="Hot Posts" data-page-number="1">
<ul>
<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
<li class="article-item item snappable img-crop-zoom-rotate " data-article-id="175348">   
<h3 class="article-headline">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Approved -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4489213123493800"
     data-ad-slot="1159369173"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<a href="<?php the_permalink(); ?>"</a>
<span class="img-crop">
<?php
// Recent post thumbnail.

if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'thumbnail' );
}
else {
	echo '<img width="300" height="140" src="' . get_bloginfo( 'template_url' ) . '/images/noimage.png" class="attachment-thumbnail wp-post-image" alt="No image" />';
} ?>
</span>

<span class="text">
<span class="series"><?php echo getPostViews(get_the_ID()); ?></span><span class="hide">:</span>
<?php the_title();?>
</span>
</a>
</h3>
</li>
<?php endwhile; else: ?>
<?php endif; ?>            
</div>
<?php get_footer();?>
