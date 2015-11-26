<?php

/**
 * Description of exception
 *
 * @author julianlasso
 */
class bugaException extends controller {

  static public function main(PDOException $exc) {
    $variables = array(
        'exc' => $exc
    );
    view::definirVista('seguridad', 'exception', $variables, 'html');
  }

}
