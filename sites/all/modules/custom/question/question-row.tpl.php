<?php
/**
 * @file
 * Default theme implementation for displaying a user and their profile data
 * for member listing pages.
 *
 * @see profile-wrapper.tpl.php
 *      where all the data is collected and printed out.
 *
 * Available variables:
 * - $fields: User's account name linking to the users page.
 * - $questions: Keyed array of all profile fields that are set as visible
 *   in member list pages (configured by site administrators). It also needs
 *   to have a value in order to be present.
 *
 * Each $field in $question contains:
 * - $field->title: Title of the profile field.
 * - $field->value: Value of the profile field.
 * - $field->type: Type of the profile field, i.e., checkbox, textfield,
 *   textarea, selection, list, url or date.
 *
 * Since $profile is keyed, a direct print of the field is possible. Not
 * all accounts may have a value for a profile so do a check first. 
 *
 * @see template_preprocess_question_list()
 */
?>
<div id="question">
  <?php if(isset($fields)): ?>
    <?php foreach ($fields as $key=>$value): ?>
      <div class='even'>
        <?php print $value['votes']." - ".$value['answers']." - ".$value['views']." - ".$value['qns_desc']; ?>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>