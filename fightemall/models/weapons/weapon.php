<?php namespace Game\Models\Weapons;
	include_once ("fightemall/utils/constants.php");
	
	
	abstract class Weapon{
		
		private $strength;
		private $agility;
		
		
		protected function __construct($strength, $agility){
			$this->agility = $agility;
			$this->strength = $strength;
		}
		
		
		abstract public static function createNewWeapon();
		
		
		public function getStrength(){
			return $this->strength;
		}
		
		
		public function getAgility(){
			return $this->agility;
		}
	}
?>