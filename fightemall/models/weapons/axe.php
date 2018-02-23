<?php namespace Game\Models\Weapons;
	use Game\Models\Weapons\Weapon;
	
	
	class Axe extends Weapon{
		
		
		public static function createNewWeapon(){
			return new Axe(0, 0);
		}
	}
?>