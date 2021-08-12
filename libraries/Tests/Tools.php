<?php
namespace BSchool\Tests;

/**
 * The class with different tools
 *
 * @author Andrii Biriev <a@konservs.com>
 * @copyright © Andrii Biriev, a@konservs.com, www.konservs.com
 */
class Tools{
	static $chars = 'KoziEQjq06erVAapnNcTR71LthYMWw3vHSGPXDmIdBuCk4FxUy2s5ZO8gb_lJ9f';
	static $charToNum = array('K' => 0,'o' => 1,'z' => 2,'i' => 3,'E' => 4,
		'Q' => 5,'j' => 6,'q' => 7,'0' => 8,'6' => 9,'e' => 10,
		'r' => 11,'V' => 12,'A' => 13,'a' => 14,'p' => 15,'n' => 16,
		'N' => 17,'c' => 18,'T' => 19,'R' => 20,'7' => 21,'1' => 22,
		'L' => 23,'t' => 24,'h' => 25,'Y' => 26,'M' => 27,'W' => 28,
		'w' => 29,'3' => 30,'v' => 31,'H' => 32,'S' => 33,'G' => 34,
		'P' => 35,'X' => 36,'D' => 37,'m' => 38,'I' => 39,'d' => 40,
		'B' => 41,'u' => 42,'C' => 43,'k' => 44,'4' => 45,'F' => 46,
		'x' => 47,'U' => 48,'y' => 49,'2' => 50,'s' => 51,'5' => 52,
		'Z' => 53,'O' => 54,'8' => 55,'g' => 56,'b' => 57,'_' => 58,
		'l' => 59,'J' => 60,'9' => 61,'f' => 62);
	static $base = 63;

	/**
	 * Convert Id (like Youtoube ID) to integer ID
	 */
	public static function IdToInt($id) {
		$n = strlen($id);
		if(($n > 10)||($n <= 0)){
			return;
		}
		$value=0;
		for ($i=0; $i<$n; $i++){
			$lastchar = $id[$i];
			if(!self::$charToNum[$lastchar]){
				return;
			}
			$value*=self::$base;
			$value+=self::$charToNum[$lastchar];
		}
		// ...
		return $value;
	}
	/**
	 * Convert integer ID to 
	 */
	public static function IntToId($num) {
		$result = '';
		while($num > 0){
			$digit = $num % self::$base;
			$num = (int)$num / self::$base;
			$result = self::$chars[$digit].$result;
			}
	}
}
