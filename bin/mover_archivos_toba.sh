#!/bin/bash
dir=$(pwd)

cp "$dir"/www/toba_2_7/www/js/efs/ef_combo_editable.js vendor/siu-toba/framework/www/js/efs/
cp "$dir"/www/toba_2_7/toba_ef_varios.php vendor/siu-toba/framework/php/nucleo/componentes/interface/efs/
cp "$dir"/www/firmador/toba_ei_firma.php vendor/siu-toba/framework/php/nucleo/componentes/interface/
cp "$dir"/www/firmador/firmador.jar vendor/siu-toba/framework/www/firmador_pdf

cp "$dir"/www/img/colapsado.gif vendor/siu-toba/framework/www/img/
cp "$dir"/www/img/wait.gif vendor/siu-toba/framework/www/img/

cp "$dir"/www/js/ckeditor/plugins/* vendor/siu-toba/framework/www/js/packages/ckeditor/plugins/ -R
cp "$dir"/www/js/ckeditor/skins/* vendor/siu-toba/framework/www/js/packages/ckeditor/skins/ -R

sudo chown :www-data vendor/siu-toba/framework/www/js/packages/ -R

sed -i -e 's/no_autentificado/servicio_externo/g' vendor/siu-toba/framework/php/nucleo/lib/toba_usuario_no_autenticado.php