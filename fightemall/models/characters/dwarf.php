<?php namespace Game\Models\Characters;
	use Game\Models\Characters\Character;
	
	
	class Dwarf extends Character{
		
		private $weapon;
		
		
		public static function createNewCharacter(){
			return new Dwarf(INIT_DWARF_STRENGTH, INIT_DWARF_AGILITY);
		}
		
		
		public function getWeapon(){
			return $this->weapon;
		}
		
		
		public function setWeapon($weapon){
			$this->weapon = $weapon;
		}
	}
?>