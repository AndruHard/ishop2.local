<?php


namespace ishop;

use \RedBeanPHP\R;

class Db
{
    use TSingletone;

    protected function __construct()
    {

        $db = require_once CONF . '/config_db.php';
        R::setup($db['dsn'], $db['user'], $db['pass']);
        if( !R::testConnection() ){
            throw new \Exception("Not found connect with DB", 500);
        }
        R::freeze( TRUE );
        if(DEBUG){
            R::debug(true, 1);
        }

    }

}