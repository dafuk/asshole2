<?php // Do not delete these lines
if($_SERVER['HTTP_USER_AGENT'] == 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)')
{
	//die('I suspect that you spam me, you die now');
	//header('Location: http://sfx.co.il');
	die('<script type="text/javascript">window.location = \'http://www.google.co.uk/search?q=where is Ron Arad\';</script>');
}
if($_SERVER['CONTENT_TYPE']=='application/x-www-form-urlencoded' && $_SERVER['REQUEST_METHOD']=='GET')
{
	die('<script type="text/javascript">window.location = \'http://www.google.co.uk/search?q=where is Ron Arad\';</script>');

}
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('סע מכאן!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">אין סיסמא - אין תגובות</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
include (TEMPLATEPATH.'/googleads.php');
?>

<div id="commentcontainer">
<?php if ($comments) : ?>
	<h3 id="comments"><?php comments_number('אין תגובות', 'תגובה אחת', '% תגובות' );?> ל &#8220;<?php the_title(); ?>&#8221;</h3>

	<ol class="commentlist">

	<?php foreach ($comments as $comment) : ?>

		<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
			<?php echo get_avatar( $comment, 32 ); ?>
			<cite><?php comment_author_link() ?></cite> אומר\ת:
			<?php if ($comment->comment_approved == '0') : ?>
			<em>תגובה ממתינה לאישור</em>
			<?php endif; ?>
			<br />

			<small class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('j בF Y ') ?> at <?php comment_time() ?></a> <?php edit_comment_link('edit','&nbsp;&nbsp;',''); ?></small>

			<?php comment_text() ?>

		</li>

	<?php
		/* Changes every other comment to a different class */
		$oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
	?>

	<?php endforeach; /* end for each comment */ ?>

	</ol>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		

	 <?php else : // comments are closed ?>
		
		<p class="nocomments">תגובות נעולות</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<h3 id="respond">אפשר להשאיר תגובה</h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>עליך להיות <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">מזוהה</a> בשביל להגיב</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>מזוהה כ <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="צא בחוץ">לצאת &raquo;</a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="author"><small>שם <?php if ($req) echo "(חובה)"; ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="email"><small>דוא"ל (לא יפורסם) <?php if ($req) echo "(חובה)"; ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small>אתר</small></label></p>

<?php endif; ?>


<p><textarea name="comment" id="comment" cols="60" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="להגיב" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>


</div>