# instalador-proyecto-toba


composer.json  <br />  Contiene los repositorios, requerimientos y acciones a realizar para la instalacion de toba

----------------------------------------------------------------------------------------

instalador.env   <br />  Configuracion de la instalacion del proyecto

----------------------------------------------------------------------------------------

/bin/instalador  <br /> Lee la configuracion de "Leu\Instalador\Configuracion" y de "PJM\Leu\Instalador\Workflow\PermisosLeu.php" <br /> Setea las configuraciones y ejecuta la app de la instalacion por consola

----------------------------------------------------------------------------------------

/bin/mover_archivos_toba.sh <br /> Se copian los archivos de toba 2.7 externos al proyecto, como ser ef_combo_editable.js, las imagenes. Se ejecuta en el composer luego de la instalacion del framework

----------------------------------------------------------------------------------------

/bin/toba <br />   Ruta a la consola del toba (../vendor/siu-toba/framework/bin/toba)

----------------------------------------------------------------------------------------

/src/PJM/Leu/Instalador/Paso/CorregirPermisosLeu.php  <br />  Llama a "/bin/mover_archivos_toba.sh"

----------------------------------------------------------------------------------------
/src/PJM/Leu/Instalador/Workflow/PermisosLeu.php  <br />    Inicializa "PJM\Leu\Instalador\Paso\CorregirPermisosLeu"

----------------------------------------------------------------------------------------

/src/PJM/Leu/Instalador/Configuracion.php  <br />   Contiene el logo t los requerimientos del instalador (php_version', 'postgres_version')

----------------------------------------------------------------------------------------
 
/src/PJM/Leu/Factory.php  <br />   Realiza el log de la instalacion mediante Monolog

----------------------------------------------------------------------------------------
