<?php
/**
 * Product:       Pb_Pbgsp (1.3.5)
 * Packaged:      2016-04-06T13:00:10+00:00
 * Last Modified: 2016-03-17T11:08:10+00:00
 * File:          app/code/local/Pb/Pbgsp/Model/Helper.php
 * Copyright:     Copyright (c) 2016 Pitney Bowes <info@pb.com> / All rights reserved.
 */
class Pb_Pbgsp_Model_Helper {
	public static function displayInfo($var) {
		echo "<hr/>Class type: ".get_class($var)."<br/>Methods:<br/>";
		$methods = get_class_methods($var);
		foreach ($methods as $method) {
			echo $method."<br/>";
		}
	}
}
?>