<?php

namespace Drupal\socialproof\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'SocialProof' block.
 *
 * @Block(
 *  id = "socialproof_block",
 *  admin_label = @Translation("SocialProof block"),
 * )
 */
class SocialProof extends BlockBase {
  public function build() {
    $request = \Drupal::request()->getRequestUri();
  $build = [];
  $year = date('Y');
  //Incase need to change content as per route
  // if( $request == '/Portfolio/b'){
  //   $year = $year +1;
  // }
  // else if($request == '/Portfolio/a'){
  //   $year = date('Y');
  // }
  $block = [
    '#theme' => 'custom_blocks_socialproof',
    '#attributes' => [
        'class' => ['socialproof'],
        'id' => 'socialproof-block',
      ],
      '#attached' => array(
     'library' => array('socialproof/socialproof'),
     ),
      '#year'  => $year,
      '#cache' => [
        'max-age' => 0,
      ],
    ];

    $build['socialproof_block'] = $block;
    return $build;
  }
}
