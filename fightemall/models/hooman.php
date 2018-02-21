<?php namespace Game\Models;
	include_once ("fightemall/utils/constants.php");
	use Game\Models\Character;
	
	
	class Hooman extends Character{
		
		
		public static function createNewCharacter(){
			return new Hooman(INIT_HOOMAN_STRENGTH, INIT_HOOMAN_AGILITY);
		}
	}
?>