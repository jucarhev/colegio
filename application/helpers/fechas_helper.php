<?php 
/**
 * Function Name
 *
 * Function Description
 *
 * @access	public
 * @param	type	name
 * @return	type	
 */
 
if (! function_exists('fechas')){
	function fechas($fecha_actual)	{
		$dia = date("d");
		$mes = date("m");
		$anio = date("Y");
	}
}

/**
# Día del mes con 2 dígitos, y con ceros iniciales, de 01 a 31
date("d");
# Día del mes, sin ceros iniciales, de 1 a 31
date("j");
# Día de la semana en inglés, con 3 letras, de Mon a Sun
date("D");
# Día de la semana en inglés, de Sunday a Saturday
date("l");
# del día de la semana, desde 1 (lunes) hasta 7 (domingo)
date("N");
# Sufijo del día del mes con 2 caracteres --> st, nd, rd o th
date("S");
# Número entero que representa el día de la semana, de 0 (dom) a 6 (sab)
date("w");
# Día del año, de 0 a 365
date("z");

OBTENER EL NÚMERO DE LA SEMANA
date("W");

OBTENER EL MES ACTUAL

# Mes actual en inglés
date("F");
# Mes actual en 2 dígitos y con 0 en caso del 1 al 9, de 1 a 12
date("m");
# Mes actual en texto en 3 dígitos en inglés, de Jan a Dec
date("M");
# Mes actual en dígitos sin 0 inicial, de 1 a 12
date("n");
# Número de días del mes actual, de 28 a 31
date("t");

OBTENER AÑO ACTUAL
# Año actual con 4 dígitos, Ejp: 2013
date("Y");
# Año actual con 2 dígitos, Ejp: 13
date("y");

OB TENER HORA, MINUTOS, SEGUNDOS

# Antes del mediodía, después del mediodía, am o pm en minúsculas
date("a");
# Antes del mediodía, después del mediodía, AM o PM en mayúsculas
date("A");
# Horario de 12 horas sin ceros, de 1 a 12
date("g");
# Horario de 12 horas con ceros, de 01 a 12
date("h");
# Horario de 24 horas sin ceros, de 0 a 23
date("G");
# Horario de 24 horas con ceros, de 01 a 23
date("H");
# minutos con ceros iniciales
date("i");
# segundos con ceros iniciales
date("s");

Para imprimir utilizamos:

echo = date('d - m - Y h:i:s').'<br>';


Espero les sirva de ayuda, cuando recién empecé a manejar fechas con CodeIgniter y Mysql tuve varios dolores de cabeza. 

Aclaro que la función date() es nativa de php pero CI la incorpora en su helper
**/