<?php
namespace app;

class FileModel{
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

        public function addParams2Query($params = []) {
            if (isset($params['sort'])) {

            }
        }
}