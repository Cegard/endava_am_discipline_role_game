<?php namespace Game\Models\Weapons;
	use Game\Models\Weapons\Weapon;
	
	
	class Axe extends Weapon{
		
		
		public static function createNewWeapon(){
			
			return new Axe(INIT_AXE_STRENGTH, INIT_AXE_AGILITY);
		}
	}
?>