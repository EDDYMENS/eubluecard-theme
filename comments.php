<?php 
$fields =  array(
 
  'author' =>
    '<p class="comment-form-author"><div class="form-group"><label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' .
    ( $req ? '<span class="required">*</span>' : '' ) .
    '<input id="author" class="form-control" required="" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
    '"/></div></p>',
 
  'email' =>
    '<p class="comment-form-email"><div class="form-group"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
    ( $req ? '<span class="required">*</span>' : '' ) .
    '<input id="email" name="email" required="" class="form-control" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
    '"/></div></p>',
);
    $comments_args = array(
 
        // change "Leave a Reply" to "Comment"
        'title_reply'=>'Share your thoughts',
        'fields' => apply_filters( 'comment_form_default_fields', $fields ),
        'comment_field' =>  '<p class="comment-form-comment"><div class="form-group"><label for="comment">' . _x( 'Comment', 'noun' ) .
            '</label><textarea id="comment" name="comment" class="form-control"  rows="8" required="" aria-required="true">' .
            '</textarea></div></p>',
             'comment_notes_after' => ' '
        );
        comment_form($comments_args);

        $comments = get_comments([ 
            'post_id' => get_the_ID(),
            'orderby' =>'comment_parent',
            ]);
        $comments = wp_list_filter ($comments, array ('comment_parent' => 0)); 
        if($comments) {?>
        <h3>Comments</h3>
        
        <?php
        }
        foreach ($comments as $comment) {
            $comment_id =get_comment_ID(); ?>
        <hr>
        <p class="font-weight-bold"><?= $comment->comment_author ?> <sm class="comment-time">(<?= human_time_diff(strtotime($comment->comment_date), current_time('timestamp', 1)) ?> ago)</sm>:<p>
        <?=  ($comment->comment_content).'<br>'; ?>
        <?php
                    $commentChildren = get_comments(array(
                        'parent'   => $comment->ID,
                        // 'status'    => 'approve',
                        'order'     => 'DESC',
                        'parent'    => $comment->comment_ID,
                    )); ?>
                    <div class="collapse" id="collapseComments.<?= $comment_id ?>">
                    <?php foreach ($commentChildren as $commentChild) {?>
                        <div class="child-comment">
                            <li>
                                <?= $commentChild->comment_content ?>
                                <span class="font-italic font-weight-bold">(<?= $commentChild->comment_author ?>)</span>
                            </li>
                        </div>
                    <?php } ?>
                    </div>
        <?php
        $post_id = get_the_ID();
            //get the setting configured in the admin panel under settings discussions "Enable threaded (nested) comments  levels deep"
            $max_depth = get_option('thread_comments_depth');
            //add max_depth to the array and give it the value from above and set the depth to 1
            $default = array(
            'add_below'  => 'comment',
            'respond_id' => 'respond',
            'reply_text' => __('Reply'),
            'login_text' => __('Log in to Reply'),
            'depth'      => 1,
            'before'     => '',
            'after'      => '',
            'max_depth'  => $max_depth
            ); ?>
         <?php if($commentChildren) {?>
             <a data-toggle="collapse" href="#collapseComments.<?= $comment_id ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
            Toggle replies
        </a> |<?php
        } ?>
        <?php
                comment_reply_link($default,$comment_id,$post_id); 
         ?>
        <br>
        <br>
        <?php }
        ?>