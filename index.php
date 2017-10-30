<?php
/**
 * Created by PhpStorm.
 * User: Galbanie
 * Date: 2017-10-25
 * Time: 19:27
 */

/*
 * If the public directory is not the root directoy and the user tries to access
 * the project folder, redirect to the public directory.
 */
header('Location: public/');
die();