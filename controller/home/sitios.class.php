<?php

/**
 * Description of sitios
 *
 * @author Miguel
 */
class sitios extends controller {

    static public function main() {

        view::definirVista('home', 'sitios', null, 'html');
    }

}
