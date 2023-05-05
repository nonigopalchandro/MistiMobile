<?php get_header();?>
<section class="page-wrapper">
<div id="main-wrapper" class="clearfix">
<div id="content" class="center-frame">
<div id="content-container" class="reversed">
<div class="right-col content-mask">
<div class="masked-content at-20 article-id-175348" data-article-id="175348">
<div class="article-box article-root" itemscope itemtype="http://schema.org/Article">
<article class="article-container clearfix centered-article-content" itemprop="articleBody">
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<header class="article-headline ">
<h1 itemprop="name headline">
<span class="series-tab"><span class="series"><?php the_category( ' › ' ) ?></span></span><span class="hide">:</span>
<a href="<?php the_permalink() ?>" title="<?php echo esc_attr(get_the_title() ? get_the_title() : get_the_ID()); ?>"><?php if ( get_the_title() ) the_title(); else the_ID(); echo $count; ?></a>
</h1>
<figure class="cover-image">
<?php
// Feature post thumbnail.

if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'thumbnail' );
}
else {
	echo '<img width="100%" height="100%" src="/wp-content/themes/HowTrick_PC_V2.0/images/noimage.png" alt="No image" />';
} ?>
</figure>
</header>
<aside class="author-hero">
<div class="centered-article-content toolbox-anchor clearfix">
                        <span class="toolbox-share lockable-toolbox" data-toolbox-priority="1">
                            <span class="btn-share fa fa-facebook" data-action="share-facebook"></span>
                            <span class="btn-share fa fa-twitter" data-action="share-twitter"></span>
                            <span class="btn-share fa fa-google-plus" data-action="share-gplus"></span>
                            <span class="btn-share fa fa-reddit-alien" data-action="share-reddit"></span>
                            <span class="btn-share fa fa-pinterest" data-action="share-pinterest"></span>
                        </span>
<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author">
<?php echo get_avatar( get_the_author_meta('ID'), 60); ?></a>
</div>
</aside>

<section>
<div class="imaged">
<p><?php the_content(); ?></p>
<?php if (get_the_tags()) :?>
<p>Tag: <?php the_tags('',' ',' '); ?></p>
<?php endif;?>
</div>
<?php endwhile; ?>
<?php endif; ?>
</section>
<footer class="clearfix mgb"></footer>
</div>

<?php comments_template( '', true ); ?>
<?php get_template_part( 'includes/post-related' ); ?>

<?php get_footer();?>