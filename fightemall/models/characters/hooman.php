<?php namespace Game\Models\Characters;
	use Game\Models\Characters\Character;
	
	
	class Hooman extends Character{
		
		
		public static function createNewCharacter(){
			return new Hooman(INIT_HOOMAN_STRENGTH, INIT_HOOMAN_AGILITY);
		}
	}
?>