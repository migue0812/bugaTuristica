<?php

/**
 * Description of model
 *
 * @author julianlasso
 */
class model {

  static private $instancia = null;

  /**
   * Obtiene la instancia de la conexión a la base de datos
   * @return PDO
   */
  static protected function getConexion() {
    if (self::$instancia === null) {

      // para usar conexiones persistentes
      $opciones = array(
          PDO::ATTR_PERSISTENT => true
      );

      // crea la instancia de la conexión
      self::$instancia = new PDO(DSN, DB_USUARIO, DB_PASSWORD, $opciones);

      // asignación de atributos para el manejo de errores
      self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    return self::$instancia;
  }

}
