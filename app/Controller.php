<?php
/**
 * Created by PhpStorm.
 * User: biv
 * Date: 02.04.2019
 * Time: 10:26
 */

namespace app;


abstract class Controller
{
    /**
     *
     * @param string $file - current view
     * @param bool $getLayout - need to load the head & foot of app
     * @return string
     */
    public function render($file, $getLayout = false) {

        ob_start();
        if ($getLayout) {
            $bodyStr = file_get_contents(LAYOUT_FILE);
            $bodyArr = explode('|||', $bodyStr);
            echo ($bodyArr[0]);
            include($file);
            echo ($bodyArr[1]);
        } else {
            include($file);
        }
        return ob_get_clean();
    }
}