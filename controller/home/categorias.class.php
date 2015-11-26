<?php

/**
 * Description of categorias
 *
 * @author Miguel
 */
class categorias extends controller {

    static public function main() {

        view::definirVista('home', 'categorias', null, 'html');
    }

}
