<?php

namespace Drupal\socialproof\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'SocialProof' block.
 *
 * @Block(
 *  id = "socialproof_block",
 *  admin_label = @Translation("SocialProof block"),
 *  category = @Translation("Social Proof Blocks")
 * )
 */
class SocialProof extends BlockBase {

/**
* {@inheritdoc}
*/
public function blockForm($form,FormStateInterface $form_state){
  $config = $this->getConfiguration();
  $form['socialproof_msg1'] = [
    '#type' => 'textfield',
    '#title' => $this->t('Enter your first message.'),
    '#maxlength' => 1000,
    '#size' => 100,
    '#required' => TRUE,
    '#description' => $this->t('What is your social proof message? '),
    '#default_value' => isset($config['socialproof_msg1']) ? $config['socialproof_msg1'] : '',
  ];
  $form['socialproof_msg1_img'] = [
    '#type' => 'textfield',
    '#title' => $this->t('Add your image for first message'),
    '#maxlength' => 1000,
    '#size' => 100,
    '#required' => TRUE,
    '#description' => $this->t('Add image name in same path OR Add your complete path. '),
    '#default_value' => isset($config['socialproof_msg1_img']) ? $config['socialproof_msg1_img'] : '/download/download/web/sites/default/images/{your_image.png|jpg|jpeg}',
  ];
  $form['socialproof_msg2'] = [
    '#type' => 'textfield',
    '#title' => $this->t('Enter your second message.'),
    '#maxlength' => 1000,
    '#size' => 100,
    '#required' => TRUE,
    '#description' => $this->t('What is your social proof message? '),
    '#default_value' => isset($config['socialproof_msg2']) ? $config['socialproof_msg2'] : '',
  ];
  $form['socialproof_msg2_img'] = [
    '#type' => 'textfield',
    '#title' => $this->t('Add your image for second message'),
    '#maxlength' => 1000,
    '#size' => 100,
    '#required' => TRUE,
    '#description' => $this->t('Add image name in same path OR Add your complete path. '),
    '#default_value' => isset($config['socialproof_msg2_img']) ? $config['socialproof_msg2_img'] : '/download/download/web/sites/default/images/{your_image.png|jpg|jpeg}',
  ];
  $form['socialproof_msg3'] = [
    '#type' => 'textfield',
    '#title' => $this->t('Enter your third message.'),
    '#maxlength' => 1000,
    '#size' => 100,
    '#required' => TRUE,
    '#description' => $this->t('What is your social proof message? '),
    '#default_value' => isset($config['socialproof_msg3']) ? $config['socialproof_msg3'] : '',
  ];
  $form['socialproof_msg3_img'] = [
    '#type' => 'textfield',
    '#title' => $this->t('Add your image for third message'),
    '#maxlength' => 1000,
    '#size' => 100,
    '#required' => TRUE,
    '#description' => $this->t('Add image name in same path OR Add your complete path. '),
    '#default_value' => isset($config['socialproof_msg3_img']) ? $config['socialproof_msg3_img'] : '/download/download/web/sites/default/images/{your_image.png|jpg|jpeg}',
  ];
  $form['socialproof_msg4'] = [
    '#type' => 'textfield',
    '#title' => $this->t('Enter your fourth message.'),
    '#maxlength' => 1000,
    '#size' => 100,
    '#required' => TRUE,
    '#description' => $this->t('What is your social proof message? '),
    '#default_value' => isset($config['socialproof_msg4']) ? $config['socialproof_msg4'] : '',
  ];
  $form['socialproof_msg4_img'] = [
    '#type' => 'textfield',
    '#title' => $this->t('Add your images for fourth message'),
    '#maxlength' => 1000,
    '#size' => 100,
    '#required' => TRUE,
    '#description' => $this->t('Add image name in same path OR Add your complete path. '),
    '#default_value' => isset($config['socialproof_msg4_img']) ? $config['socialproof_msg4_img'] : '/download/download/web/sites/default/images/{your_image.png|jpg|jpeg}',
  ];
  return $form;
}

/**
* {@inheritdoc}
*/
public function blockSubmit($form,FormStateInterface $form_state){

    $this->configuration['socialproof_msg1'] = $form_state->getValue('socialproof_msg1');
      $this->configuration['socialproof_msg2'] = $form_state->getValue('socialproof_msg2');
        $this->configuration['socialproof_msg3'] = $form_state->getValue('socialproof_msg3');
          $this->configuration['socialproof_msg4'] = $form_state->getValue('socialproof_msg4');
            $this->configuration['socialproof_msg1_img'] = $form_state->getValue('socialproof_msg1_img');
            $this->configuration['socialproof_msg2_img'] = $form_state->getValue('socialproof_msg2_img');
              $this->configuration['socialproof_msg3_img'] = $form_state->getValue('socialproof_msg3_img');
                $this->configuration['socialproof_msg4_img'] = $form_state->getValue('socialproof_msg4_img');

}

 /**
 * On block call and Build
 *
 * @return array
 */
  public function build() {
  $build = [];
  $spmessage =
                 array(
                 $this->configuration['socialproof_msg1'],
                 $this->configuration['socialproof_msg2'],
                 $this->configuration['socialproof_msg3'],
                 $this->configuration['socialproof_msg4']
               );


  $spmessageimg =
                 array( $this->configuration['socialproof_msg1_img'],
                        $this->configuration['socialproof_msg2_img'],
                        $this->configuration['socialproof_msg3_img'],
                        $this->configuration['socialproof_msg4_img']
                      );

$count = sizeof($spmessage);

  $block = [
    '#theme' => 'custom_blocks_socialproof',
    '#attributes' => [
        'class' => ['socialproof'],

      ],
      '#attached' => array(
     'library' => array('socialproof/socialproof'),

     ),
     '#spmessage'=>  $spmessage,
     '#spmessageimg' => $spmessageimg,
     '#count' => $count,

      '#cache' => [
        'max-age' => 0,
      ],
    ];

    $build['socialproof_block'] = $block;
    return $build;
  }
}
