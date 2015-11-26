<?php

/**
 * Description of eventos
 *
 * @author Miguel
 */
class eventos extends controller {

    static public function main() {

        view::definirVista('home', 'eventos', null, 'html');
    }

}
