<?php

/**
 * Description of busqueda
 *
 * @author Miguel
 */
class busquedaRegistrado extends controller {

    static public function main() {
        view::definirVista('home', 'busquedaRegistrado', null, 'html');
    }

}
