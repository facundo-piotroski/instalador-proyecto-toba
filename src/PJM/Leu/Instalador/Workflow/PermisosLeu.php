<?php

namespace PJM\Leu\Instalador\Workflow;

use SIU\Instalador\Toba\Workflow\Permisos;

/**
 * {@inheritdoc}
 */
class PermisosLeu extends Permisos
{

    /**
     * {@inheritdoc}
     */
    public function inicializarPasos()
    {
        return [
            //new \SIU\Instalador\Toba\Paso\ParametrizarToba(),
            new \PJM\Leu\Instalador\Paso\CorregirPermisosLeu(),
        ];
    }
}
