<?php

declare(strict_types=1);

namespace Drupal\vue_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Vue module routes.
 */
final class VueModuleController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function index(): array {
    return [
      '#type' => 'markup',
      '#markup' => '<div id="app"></div>',
      '#attached' => [
        'library' => [
          'vue_module/vue_app',
        ]
      ]
    ];
  }

}
