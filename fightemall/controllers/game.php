<?php namespace Game\Controllers;
	use Game\Models\Hooman as Hooman;
	use Game\Models\Dwarf as Dwarf;
	use Game\Models\Elf as Elf;
	
	
	class Game{
		
		private static $options = array(
			Hooman::class,
			Dwarf::class,
			Elf::class
		);
		
		
		public static function createCharacter($option){
			return self::$options[$option]::createNewCharacter();
		}
	}
?>