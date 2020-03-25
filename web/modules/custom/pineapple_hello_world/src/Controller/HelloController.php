<?php

namespace Drupal\pineapple_hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines HelloController class.
 */
class HelloController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   *   Return markup array.
   */
  public function build() {
    return [
      '#theme' => 'hello_world',
    ];
  }

}
