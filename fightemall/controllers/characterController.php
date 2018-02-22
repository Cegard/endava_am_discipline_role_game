<?php namespace Game\Controllers;
	use Game\Models\{Hooman, Dwarf, Elf};
	
	
	class CharacterController{
		
		private static $options = array(
			Hooman::class,
			Dwarf::class,
			Elf::class
		);
		
		
		public static function createCharacter($option){
			return self::$options[$option]::createNewCharacter();
		}
		
		
		public static function attack($attacker, $defender){
			
		}
	}
?>