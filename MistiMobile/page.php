<?php get_header();?>   
<?php
		if ( isset( $_GET['postcomment'] ) ) :
			if ( have_posts() ) : while ( have_posts() ): the_post();
				comments_template( '/postcomment.php' );
			endwhile; endif;

		else :
	?>
<div class="home-section">
<div class="left-col">
<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
<h2 class="subsections-heading"><?php the_title(); ?></h2>
<div class="article-list article-list-mode1"  data-filter-sort="13" data-display-mode="1" data-prevpagekey="" data-activepagekey="QXJ0aWNsZUxpc3RLZXl8MTN8MTMwfDB8MTQ3MHx8MXwwfDB8MHwxfDF8" data-nextpagekey="QXJ0aWNsZUxpc3RLZXl8MTN8MTMwfDB8MTQ3MHx8MnwwfDB8MHwxfDF8" data-prevpagepath="" data-activepagepath="http://www.howtrick.com/" data-nextpagepath="http://www.howtrick.com/page/2/" data-title-base="Hot Posts" data-page-number="1">

<div id="content-container" class="reversed">
<div class="right-col content-mask">
<div class="masked-content at-20 article-id-175348" data-article-id="175348">
<div class="article-box article-root" itemscope itemtype="http://schema.org/Article">
<article class="article-container clearfix centered-article-content" itemprop="articleBody">
<p><?php the_content(); ?></p>
<?php endwhile; ?>
<?php endif;?>
<?php endif; ?>
<footer class="clearfix mgb"></footer>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php get_footer();?>