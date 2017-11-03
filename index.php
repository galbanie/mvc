<?php
/**
 * Created by PhpStorm.
 * User: Galbanie
 * Date: 2017-10-27
 * Time: 10:28
 */
/*if (in_array('mod_rewrite', apache_get_modules())) {
    echo "Yes, Apache supports mod_rewrite.";
}

else {
    echo "Apache is not loading mod_rewrite.";
}*/
require_once 'app/start.php';
$app = new App();