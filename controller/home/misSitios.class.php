<?php

/**
 * Description of index
 *
 * @author miguel
 */
class misSitios extends controller {

    static public function main() {

        view::definirVista('home', 'misSitios', null, 'html');
        //include DIR . 'view/seguridad/indexView.html.php';
    }

}
