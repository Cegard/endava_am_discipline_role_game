<?php namespace Game\Models;
	
	
	abstract class Character{
		
		protected $strength;
		protected $agility;
		
		
		protected function __construct($strength, $agility){
			$this->agility = $agility;
			$this->strength = $strength;
		}
		
		
		abstract public static function createNewCharacter();
		
		
		public function getStrength(){
			return $this->strength;
		}
		
		
		public function getAgility(){
			return $this->agility;
		}
	}