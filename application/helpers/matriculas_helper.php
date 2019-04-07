<?php 
/**
 * Function Matriculas
 *
 * Crea las matriculas para los nuevos estudiantes

 *
 * @access	public
 * @param	type	name
 * @return	type	
 */
 
if (! function_exists('matriculas'))
{
	function matriculas($matricula = ''){
		$year = date('y');
		return $year.''.rand(0,999);
	}
}