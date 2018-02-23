<?php namespace Game\Models\Characters;
	use Game\Models\Characters\Character;
	
	
	class Elf extends Character{
		
		
		public static function createNewCharacter(){
			return new Elf(INIT_ELF_STRENGTH, INIT_ELF_AGILITY);
		}
	}
?>