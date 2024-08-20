<?php

declare(strict_types=1);

namespace Drupal\vue_form\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Vue form routes.
 */
final class VueFormController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function index(): array {
    return [
      '#type' => 'markup',
      '#markup' => '<div id="app"></div>',
      '#attached' => [
        'library' => 'vue_form/form',
      ],
    ];
  }

}
