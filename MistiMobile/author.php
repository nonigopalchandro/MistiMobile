<?php get_header(); ?>

<!– This sets the $curauth variable –>
<?php
if(isset($_GET['author_name'])) :
$curauth = get_userdatabylogin($author_name);
else :
$curauth = get_userdata(intval($author));
endif; ?>

<section class="page-wrapper">
<div id="main-wrapper" class="clearfix">
<div class="center-frame centered clearfix">
</div>
</div>

<div id="content" class="center-frame">
<div id="content-container" class="reversed">
<div class="right-col content-mask">
<div class="masked-content at-20 article-id-175348" data-article-id="175348">
<div class="article-box article-root" itemscope itemtype="http://schema.org/Article">
<article class="article-container clearfix centered-article-content" itemprop="articleBody">
<header class="article-headline ">
<h1 itemprop="name headline">
<span class="series-tab"><span class="series"><?php the_author(); ?></span></span><span class="hide">:</span>
</h1>
<figure class="cover-image">
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

<?php if ( is_user_logged_in() ) {

    $current_user = wp_get_current_user();
	echo '<a href="/wp-admin/profile.php">Edit My Profile</a>';} ?>
<section>
<div class="post">
Name: <?php echo $curauth->display_name; ?><p>
Website: <?php echo $curauth->user_url; ?>


<center><font size="10px"><font color="green"><b>About <?php the_author();?></b></font></font></center>
<p><?php echo $curauth->user_description; ?></p>
</div>
</section>
<footer class="clearfix mgb"></footer>
</div>

<div class="left-col">
<h2 class="subsections-heading">Related By <?php the_author(); ?></h2>
        
<div class="article-list article-list-mode1"  data-filter-sort="13" data-display-mode="1" data-prevpagekey="" data-activepagekey="QXJ0aWNsZUxpc3RLZXl8MTN8MTMwfDB8MTQ3MHx8MXwwfDB8MHwxfDF8" data-nextpagekey="QXJ0aWNsZUxpc3RLZXl8MTN8MTMwfDB8MTQ3MHx8MnwwfDB8MHwxfDF8" data-prevpagepath="" data-activepagepath="http://www.howtrick.com/page/" data-nextpagepath="http://www.howtrick.com/page/2/" data-title-base="Hot Posts" data-page-number="1">

<ul>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<li class="article-item item snappable img-crop-zoom-rotate " data-article-id="175348">
<h3 class="article-headline">
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

<span class="text ">
<span class="series"><?php echo getPostViews(get_the_ID()); ?></span><span class="hide">:</span>
<?php the_title();?>
</span>
</a>
</h3>
</li>
<?php endwhile; else: ?>
<p><?php _e('No posts by this author.'); ?></p>
<?php endif; ?>             
</div>
<h2 class="subsections-heading"><font color="white"><b><?php pagination_nav(); ?></b></font></h2> 
</div>
</section>
<?php get_footer();?>