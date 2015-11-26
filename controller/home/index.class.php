<?php

/**
 * Description of index
 *
 * @author miguel
 */
class index extends controller {

    static public function main() {

        view::definirVista('home', 'index', null, 'html');
        //include DIR . 'view/seguridad/indexView.html.php';
    }

}
