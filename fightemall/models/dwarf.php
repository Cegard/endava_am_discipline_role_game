<?php namespace Game\Models;
	use Game\Models\Character as Character;
	
	
	class Dwarf extends Character{
		
		
		private function __construct(){
			
		}
		
		
		public static function createNewCharacter(){
			return new Dwarf();
		}
	}
?>