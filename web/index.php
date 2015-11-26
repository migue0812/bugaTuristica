<?php

session_start();

include '../config/config.php';
include '../lib/buga/controller.class.php';
include '../lib/buga/model.class.php';
include '../lib/buga/view.class.php';

try {
  if (isset($_SERVER['PATH_INFO']) === true) {
    $data = explode('/', $_SERVER['PATH_INFO']);
    $modulo = $data[1];
    $accion = $data[2];
  } else {
    $modulo = MODULO_DEFAULT;
    $accion = ACCION_DEFAULT;
  }
  $file = DIR . 'controller/' . $modulo . '/' . $accion . '.class.php';
  if (is_file($file) === true) {
    include $file;
    $accion::main();
  } else {
    throw new PDOException('El módulo y acción solicitados no existen');
  }
} catch (PDOException $exc) {
  include DIR . 'web/index.php';
  sohoException::main($exc);
}
