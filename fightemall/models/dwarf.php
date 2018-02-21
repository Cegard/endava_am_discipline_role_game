<?php namespace Game\Models;
	include_once ("fightemall/utils/constants.php");
	use Game\Models\Character;
	
	
	class Dwarf extends Character{
		
		
		public static function createNewCharacter(){
			return new Dwarf(INIT_DWARF_STRENGTH, INIT_DWARF_AGILITY);
		}
	}
?>