<?php namespace Game\Models\Characters;
	use Game\Models\Characters\Character;
	
	
	class Dwarf extends Character{
		
		
		public static function createNewCharacter(){
			return new Dwarf(INIT_DWARF_STRENGTH, INIT_DWARF_AGILITY);
		}
	}
?>