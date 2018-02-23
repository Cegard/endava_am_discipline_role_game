<?php namespace Game\Models\Weapons;
	use Game\Models\Weapons\Weapon;
	
	
	class Bow extends Weapon{
		
		
		public static function createNewWeapon(){
			
			return new Bow(INIT_BOW_STRENGTH, INIT_BOW_AGILITY);
		}
	}
?>