<?php

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>

<p class="nocomments">Password protected.</p>
<?php
		return;
	}
?>

<div class="block_comment">
<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
<h2 class="subsections-heading">Thought</h2>

<ol class="commentlist">
<?php wp_list_comments('avatar_size=32'); ?>
</ol>
 <div class="navigation"> <div class="alignleft"></div> <div class="alignright"></div> </div>  <div class="navigation"> <div class="previous"> <?php previous_comments_link() ?> </div> <div class="next">  <?php next_comments_link() ?> </div> </div>
<div class="navigation">
<div class="previous">
<?php previous_comments_link() ?>
</div>
<div class="previous">
<?php next_comments_link() ?>
</div>
</div>

<?php else : // this is displayed if there are no comments so far ?>
<?php if ('open' == $post->comment_status) : ?>
<!-- If comments are open, but there are no comments. -->
<?php else : // comments are closed ?>
<!-- If comments are closed. -->
<p>comment closed</p>
<?php endif; ?>
<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>

<div class="navigation">
<div class="alignleft"></div>
<div class="alignright"></div>
</div>

<div id="respond">

<div class="home-section">
<div class="left-col">
<h2 class="subsections-heading">Share Your Thought</h2>
<aside class="author-hero">
<div class="cancel-comment-reply"><small>
<?php cancel_comment_reply_link(); ?>
</small></div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php print 'Click'; ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php print '<font color="red">Logged in</font>'; ?></a> <?php print 'to Share Your Thought'; ?>.</p>
<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
      <?php if ( $user_ID ) : ?>
      <p>
<?php print 'Logged in as'; ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account"><?php print 'Log out'; ?> »</a>
</p>
<?php else : ?>
   <p>
        <input class="author" type="text" value="Enter your name..." onclick="this.value='';" name="author" id="author" size="22" tabindex="1"/><label for="author"><small><?php if ($req) echo "(Required)"; ?></small></label>
      </p>
      <p>
        <input class="email" type="text" value="Enter your email..." onclick="this.value='';" name="email" id="email" size="22" tabindex="2"/><label for="email"><small>(Will not be published)<?php if ($req) echo " (Required)"; ?></small></label>
      </p>
      <p>
        <input class="url" type="text" value="Enter your website..." onclick="this.value='';" name="url" id="url" size="22" tabindex="3"/><label for="email"><small>(Optional)</small></label>
      </p>
      <?php endif; ?>
      <!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
      <p>
        <textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea>
      </p>
      <p>
        <input class="submit" name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
        <?php comment_id_fields(); ?>
      </p>
      <?php do_action('comment_form', $post->ID); ?>
    </form>
</aside>
    <?php endif; // If registration required and not logged in ?>
</div>
<?php endif; // if you delete this the sky will fall on your head ?>
</div>