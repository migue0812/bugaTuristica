<?php

/**
 * Description of indexRegistrado
 *
 * @author Miguel
 */
class indexRegistrado extends controller {

    static public function main() {

        view::definirVista('home', 'indexRegistrado', null, 'html');
    }

}
