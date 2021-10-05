#!/bin/bash
dir=$(pwd)

cp "$dir"/archivos_a_mover_toba_2_7/www/js/efs/ef_combo_editable.js vendor/siu-toba/framework/www/js/efs/
cp "$dir"/archivos_a_mover_toba_2_7/php/nucleo/componentes/interface/efs/toba_ef_varios.php vendor/siu-toba/framework/php/nucleo/componentes/interface/efs/

cp "$dir"/archivos_a_mover_toba_2_7/www/img/colapsado.gif vendor/siu-toba/framework/www/img/
cp "$dir"/archivos_a_mover_toba_2_7/www/img/wait.gif vendor/siu-toba/framework/www/img/

cp "$dir"/archivos_a_mover_toba_2_7/www/js/ckeditor/plugins/* vendor/siu-toba/framework/www/js/packages/ckeditor/plugins/ -R
cp "$dir"/archivos_a_mover_toba_2_7/www/js/ckeditor/skins/* vendor/siu-toba/framework/www/js/packages/ckeditor/skins/ -R

sudo chown :www-data vendor/siu-toba/framework/www/js/packages/ -R
