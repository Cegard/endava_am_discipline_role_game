<?php namespace Game\Models;
	use Game\Models\Character as Character;
	
	
	class Elf extends Character{
		
		
		private function __construct(){
			
		}
		
		
		public static function createNewCharacter(){
			return new Elf();
		}
	}
?>