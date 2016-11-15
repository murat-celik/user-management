<?php

namespace app\modules\user\components;

use Yii;

class Route {
    
    /* 
     * Return Modules Controller Public actions name
     */
    public static function getRoutes() {
        $modules = Yii::$app->getModules();
        $controllerPaths['app'] = 'controllers';
        foreach ($modules as $key => $value) {
            $controllerPaths[$key] = 'modules' . DIRECTORY_SEPARATOR . $key . DIRECTORY_SEPARATOR . 'controllers';
        }
        $controllerPaths = Yii::$app->params['controllerPaths'];

        $fulllist = [];
        foreach ($controllerPaths as $key => $value) {
            $controllerlist = [];
            if ($handle = opendir('../' . $value)) {
                while (false !== ($file = readdir($handle))) {
                    if ($file != "." && $file != ".." && substr($file, strrpos($file, '.') - 10) == 'Controller.php') {
                        $controllerlist[] = $file;
                    }
                }
                closedir($handle);
            }
            asort($controllerlist);

            foreach ($controllerlist as $controller):
                $handle = fopen('../' . $value . '/' . $controller, "r");
                if ($handle) {
                    while (($line = fgets($handle)) !== false) {
                        if (preg_match('/public function action(.*?)\(/', $line, $display)):
                            if (strlen($display[1]) > 2):
                                $fulllist[$key][substr(strtolower(str_replace('Controller', "", $controller)), 0, -4)][] = strtolower($display[1]);
                            endif;
                        endif;
                    }
                }
                fclose($handle);
            endforeach;
        }

        return $fulllist;
    }

}
