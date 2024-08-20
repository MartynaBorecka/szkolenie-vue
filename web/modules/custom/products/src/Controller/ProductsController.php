<?php

declare(strict_types=1);

namespace Drupal\products\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Products routes.
 */
final class ProductsController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function index(): array {
    return [
      '#type' => 'markup',
      '#markup' => '<div id="app"></div>',
      '#attached' => [
        'library' => 'products/products_library',
      ],
    ];
  }

}
