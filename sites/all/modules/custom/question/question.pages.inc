<?php
/**
 * @file
 * Questions page callbacks for the question module.
 */

/**
 * Menu callback; display a list of questions information.
 */
function get_question_list() {
  $nids = db_select('node', 'n')
        ->fields('n', array('nid'))
        ->orderBy('created', 'DESC')
        ->condition('n.type', 'question')
        ->condition('n.status', 1)
        ->execute()
        ->fetchCol(); // returns an indexed array

  // Now return the node objects.
  $nodes = node_load_multiple($nids);

  $question = array();
  $content = '';
  foreach ($nodes as $key => $value) { 
    $question[$key]['votes'] = $value->field_q_votes['und'][0]['value']; // No. of votes
    $question[$key]['answers'] = $value->field_q_answers['und'][0]['value']; // No. of answers
    $question[$key]['views'] = $value->field_q_views['und'][0]['value']; // No. of views
    $question[$key]['qns_desc'] = $value->field_question_description['und'][0]['value']; // Question Description 
  }
  // To Theme each row of the Question listing
  $content = theme('question_row', array('fields' => $question));
  // To Theme all Questions - Question listing page
  $output = theme('question_list', array('content' => $content));
  return $output;
}