<?php

declare(strict_types=1);

namespace Drupal\to_do_list\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for To do list routes.
 */
final class ToDoListController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function index(): array {
    return [
      '#type' => 'markup',
      '#markup' => '<div id="app"></div>',
      '#attached' => [
        'library' => 'to_do_list/list_app',
      ]
    ];
  }

}
