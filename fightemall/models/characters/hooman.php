<?php namespace Game\Models\Characters;
	use Game\Models\Characters\Character;
	
	
	class Hooman extends Character{
		
		private $weapon;
		
		
		public static function createNewCharacter(){
			return new Hooman(INIT_HOOMAN_STRENGTH, INIT_HOOMAN_AGILITY);
		}
		
		
		public function getWeapon(){
			return $this->weapon;
		}
		
		
		public function setWeapon($weapon){
			$this->weapon = $weapon;
		}
	}
?>