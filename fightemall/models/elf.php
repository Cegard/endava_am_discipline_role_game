<?php namespace Game\Models;
	include_once ("fightemall/utils/constants.php");
	use Game\Models\Character;
	
	
	class Elf extends Character{
		
		
		public static function createNewCharacter(){
			return new Elf(INIT_ELF_STRENGTH, INIT_ELF_AGILITY);
		}
	}
?>