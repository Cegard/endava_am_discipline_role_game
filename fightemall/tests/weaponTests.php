<?php
	namespace Game\Tests;
	include_once ("fightemall/tests/utils.php");
	use PHPUnit\Framework\TestCase,
		Game\Controllers\WeaponController;
	use	Game\Models\Weapons\{Sword, Axe, Bow};
	
	
	final class WeaponTests extends TestCase{
		
		
		public function testASwordCanBeCreated(){
			$this->assertInstanceOf(Sword::class, weaponController::
										createWeapon(OPTION_FOR_SWORD_SELECTION));
		}
		
		
		public function testAnAxeCanBeCreated(){
			$this->assertInstanceOf(Axe::class, weaponController::
										createWeapon(OPTION_FOR_AXE_SELECTION));
		}
		
		
		public function testABowCanBeCreated(){
			$this->assertInstanceOf(Bow::class, weaponController::
										createWeapon(OPTION_FOR_BOW_SELECTION));
		}
		
		
		public function testNewSwordHasDefaultStats(){
			$hasSwordDefaultStats = checkWeaponStats(OPTION_FOR_SWORD_SELECTION);
			
			$this->assertTrue($hasSwordDefaultStats);
		}
	}
?>