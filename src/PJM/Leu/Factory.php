<?php

namespace PJM\Leu;

use Monolog\Formatter\LineFormatter;
use Monolog\Handler\ErrorLogHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Pimple\Container;

class Factory
{

    /**
     * @var Container
     */
    protected static $container;

    /**
     * @return Container
     */
    public static function getContainer()
    {
        if (isset(static::$container)) {
            return static::$container;
        }

        $container = new Container();

        $container['base-dir'] = realpath(__DIR__ . '/../../../');
        $container['env-instalacion'] = 'instalador.env';

        $container['general-log-file'] = function ($c) {
            $dir = $c['base-dir'] . '/logs/siged.log';
            // if(!is_dir($dir)){
            //     mkdir($dir);
            // }
            // $dir . 'siged.log';
            return $dir;
        };

        $container['temp-dir'] = function ($c) {
            $dir = $c['base-dir'] . '/temp';
            return $dir;
        };

        $container['logger-handler'] = function ($c) {
            $handler = new StreamHandler($c['general-log-file'], null, null, 0666);
            $handler->setFormatter(new LineFormatter(null, null, true));
            //$handler->setLevel($logLevel);
            return $handler;
        };

        /**
         * @return Logger
         */
        $container['main-logger'] = function ($c) {
            $logger = new Logger('MAIN');
            $handler = $c['logger-handler'];
            $logger->pushHandler($handler);
            return $logger;
        };

        /**
         * @return Logger
         */
        $container['sorteo-logger'] = function ($c) {
            $logger = new Logger('SORTEO');
            $handler = $c['logger-handler'];
            $logger->pushHandler($handler);
            return $logger;
        };

        /**
         * @return Logger
         */
        $container['rest-logger'] = function ($c) {
            $logger = new Logger('REST-API');
            $handler = $c['logger-handler'];
            $logger->pushHandler($handler);
            return $logger;
        };

        /**
         * @return Logger
         */
        $container['db-logger'] = function ($c) {
            $logger = new Logger('DB');
            $handler = $c['logger-handler'];
            $logger->pushHandler($handler);
            return $logger;
        };


        static::$container = $container;
        return static::$container;
    }

}
