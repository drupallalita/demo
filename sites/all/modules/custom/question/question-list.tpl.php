<?php

/**
 * @file
 * Default theme implementation for wrapping question listings and their
 * counts.
 *
 * This template is used when viewing a list of questions with count of Votes, Answers and Views. It can be a general
 * list for viewing all questions with the URL of "example.com/question" or in Home Page.
 *
 * Available variables:
 * - $content: All nodes related to 'Question' Content type iterated through question-list.tpl.php.
 *
 * @see template_preprocess_question_list()
 */
?>
<?php print $content; ?>