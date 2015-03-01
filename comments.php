<div id="comment-area">
<?php
  if (have_comments()):
?>
    <h3 id="comments">コメント</h3>
    <ol class="comments-list">
        <?php wp_list_comments( 'avatar_size=55'); ?>
    </ol>
<?php
  endif;

  $args = array( 'title_reply' => 'コメントを残す',
                 'label_submit' => ( 'コメントを送信' )
  );
  comment_form($args);
?>

</div>
