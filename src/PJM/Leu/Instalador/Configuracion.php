<?php

namespace PJM\Leu\Instalador;

use SIU\Instalador\Toba\Configuracion as TobaConfiguracion;

class Configuracion extends TobaConfiguracion
{
    public function getProyectoLogo()
    {
       $logo = <<<'LOGO'
	 _      _____  _   _ 
	| |    | ____|| | | |
	| |    |  _|  | | | |
	| |___ | |___ | |_| |
	|_____||_____| \___/ 

               
LOGO;

        return $logo;
    }

    /**
     * {@inheritdoc}
     */
    public function getRequerimientosInstalador()
    {
        $controles = [
            'php_version' => 'error|7.3.0',
            'php_extension_pdo_pgsql' => 'error|',
            'postgres_version' => 'error|11.0.0',
        ];

        return $controles;
    }
}
