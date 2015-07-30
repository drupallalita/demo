<?php
/**
 * @file
 * Custom theme implementation for displaying questions listing pages.
 *
 * @see question-row.tpl.php
 *      where all the data is collected and printed out.
 *
 * Available variables:
 * - $fields: All nodes related to 'Question' Content type iterated through question-row.tpl.php.
 * - $questions: Each nodes related to 'Question' Content type
 *
 * Since $fields is keyed, a direct print of the field is not possible. 
 * So each $value in $fields contains: Count of Votes, Answers and Views and Question Summary
 *
 * @see template_preprocess_question_row()
 */
?>
  
<?php if(isset($fields)): ?>
  <?php foreach ($fields as $key=>$value): ?>
    <div class="question-summary narrow">
      <div class="cp">
        <div class="votes">
          <!-- Question : No. of Votes  -->
          <div class="mini-counts"><span><?php print $value['votes']; ?></span></div>
          <div>votes</div>
        </div>
        <div class="answers">
          <!-- Question : No. of Answers  -->
          <div class="mini-counts"><span><?php print $value['answers']; ?></span></div>
          <div>answers</div>
        </div>
        <div class="views">
          <!-- Question : No. of Views  -->
          <div class="mini-counts"><span><?php print $value['views']; ?></span></div>
          <div>views</div>
        </div>
      </div>
      <div class="summary">
        <!-- Question Description / Summary -->
        <h3><a href="#" class="question-hyperlink" title="sample title"><?php print $value['qns_desc']; ?></a></h3>
      </div>
    </div>
  <?php endforeach; ?>
<?php endif; ?>
  