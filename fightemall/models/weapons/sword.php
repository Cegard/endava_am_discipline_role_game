<?php namespace Game\Models\Weapons;
	use Game\Models\Weapons\Weapon;
	
	
	class Sword extends Weapon{
		
		
		public static function createNewWeapon(){
			
			return new Sword(INIT_SWORD_STRENGTH, INIT_SWORD_AGILITY);
		}
	}
?>