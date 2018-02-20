<?php namespace Game\Models;
	use Game\Models\Character as Character;
	
	
	class Hooman extends Character{
		
		private $strength = 5;
		private $agility = 5;
		
		
		private function __construct(){
			
		}
		
		
		public static function createNewCharacter(){
			return new Hooman();
		}
		
		
		public function getStrength(){
			return $this->strength;
		}
		
		
		public function getAgility(){
			return $this->agility;
		}
	}
?>