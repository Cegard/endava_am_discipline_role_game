<?php namespace Game\Models\Weapons;
	use Game\Models\Weapons\Weapon;
	
	
	class Bow extends Weapon{
		
		
		public static function createNewWeapon(){
			return new Bow(0, 0);
		}
	}
?>