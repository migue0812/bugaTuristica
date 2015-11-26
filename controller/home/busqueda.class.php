<?php

/**
 * Description of busqueda
 *
 * @author Miguel
 */
class busqueda extends controller {

    static public function main() {
        view::definirVista('home', 'busqueda', null, 'html');
    }

}
