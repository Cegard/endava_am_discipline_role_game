<?php namespace Game\Controllers;
	use Game\Models\Weapons\{Sword, Axe, Bow};
	
	
	class WeaponController{
		
		private static $weaponClasses = array(
			Sword::class,
			Axe::class,
			Bow::class
		);
		
		
		public static function createWeapon($option){
			return self::$weaponClasses[$option]::createNewWeapon();
		}
	}
?>