<?php
require_once "../../../vendor/autoload.php";
use Src\Behavioral\Observer\AddedComment;
use Src\Behavioral\Observer\EmailAuthor;
use Src\Behavioral\Observer\EmailOtherCommentators;
use Src\Behavioral\Observer\IncrementCommentCount;

$new_comment = 'This is a new comment';
$blog_post_id = 564;


echo "Adding observers to subject\n";
$addedComment = new AddedComment($new_comment, $blog_post_id);
$addedComment->attach(new IncrementCommentCount())->attach(new EmailOtherCommentators())->attach(new EmailAuthor());


echo "Now going to notify() them...\n";
$addedComment->notify();


echo "Done\n";