<?php

namespace PJM\Leu\Instalador\Paso;

use SIU\Instalador\Toba\Paso\CorregirPermisosToba;

/**
 * {@inheritdoc}
 */
class CorregirPermisosLeu extends CorregirPermisosToba
{

    protected function getArchivosEjecutables()
    {
        $archivos = parent::getArchivosEjecutables();
//HABILITAR LAS EJECUCIONES NECESARIAS
        //$archivos[] = $this->base_dir.'/bin/mover_archivos_toba.sh';
        //$archivos[] = $this->base_dir.'/bin/verificar_firma.sh';

        return $archivos;
    }
}
