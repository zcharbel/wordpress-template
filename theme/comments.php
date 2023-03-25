<?php
/**
 * The template file for displaying the comments and comment form for the
 * Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
*/
if ( post_password_required() ) {
	return;
}

if ( $comments ) {
	?>
		<?php
		$comments_number = absint( get_comments_number() );
		?>

			<h3 id="comments" class="title">
				<?php
				if ( ! have_comments() ) {
					_e( 'Leave a Reply', 'twentytwenty' );
				} elseif ( 1 === $comments_number ) {
					/* translators: %s: Post title. */
					printf( '<span>Comments</span> (1)' );
				} else {
					printf(
						'<span>Comments</span> ('.$comments_number.')'
					);
				}

				?>
			</h3><!-- .comments-title -->

			<?php
			wp_list_comments(
				array(
					'style'       => 'div',
				)
			);

			$comment_pagination = paginate_comments_links(
				array(
					'echo'      => false,
					'end_size'  => 0,
					'mid_size'  => 2,
					'next_text' => '<span aria-hidden="true">&raquo;</span>',
					'prev_text' => '<span aria-hidden="true">&laquo;</span>',
				)
			);

			if ( $comment_pagination ) {
				$pagination_classes = '';

				// If we're only showing the "Next" link, add a class indicating so.
				if ( false === strpos( $comment_pagination, 'prev page-numbers' ) ) {
					$pagination_classes = ' only-next';
				}
				?>

				<nav class="comments-pagination pagination<?php echo $pagination_classes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>" aria-label="<?php esc_attr_e( 'Comments', 'twentytwenty' ); ?>">
					<?php echo wp_kses_post( $comment_pagination ); ?>
				</nav>

				<?php
			}
			?>


	<?php
}

if ( comments_open() || pings_open() ) {

	if ( $comments ) {
		echo '<hr class="styled-separator is-style-wide" aria-hidden="true" />';
	}

	comment_form(
		array(
			'class_form'         => 'section-inner thin max-percentage',
			'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h2>',
		)
	);

} elseif ( is_single() ) {

	if ( $comments ) {
		echo '<hr class="styled-separator is-style-wide" aria-hidden="true" />';
	}

	?>

	<div class="comment-respond" id="respond">

		<p class="comments-closed"><?php _e( 'Comments are closed.', 'twentytwenty' ); ?></p>

	</div><!-- #respond -->

	<?php
}
