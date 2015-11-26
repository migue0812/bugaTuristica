<?php

/**
 * Description of view
 *
 * @author miguel
 */
class view {

  /**
   * Define la vista para el controlador en ejecución
   * @param string $modulo
   * @param string $vista
   * @param array $variables
   * @param string $formato
   * @throws PDOException
   */
  static public function definirVista($modulo, $vista, $variables, $formato) {
    $view = DIR . 'view/' . $modulo . '/' . $vista . 'View.' . $formato . '.php';
    if (is_file($view) === false) {
      throw new PDOException('La vista solicitada no existe');
    }
    if (is_array($variables) === true) {
      extract($variables);
    }
    include $view;
  }

}
