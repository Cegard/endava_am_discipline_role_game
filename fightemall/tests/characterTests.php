<?php
	namespace Game\Tests;
	include_once ("fightemall/tests/utils.php");
	use PHPUnit\Framework\TestCase,
		Game\Controllers\CharacterController;
	use	Game\Models\Characters\{Hooman, Dwarf, Elf};
	#use const Game\Tests\OPTION_FOR_HOOMAN_SELECTION;
	#use Game\Utils; #\{INIT_HOOMAN_STRENGTH, INIT_HOOMAN_AGILITY};
	
	
	final class CharacterTests extends TestCase{
		
		
		public function testCreateHoomanFromSelection(){
			$this->assertInstanceOf(Hooman::class, CharacterController::
										createCharacter(OPTION_FOR_HOOMAN_SELECTION));
		}
		
		
		public function testCreateDwarfFromSelection(){
			$this->assertInstanceOf(Dwarf::class, CharacterController::
										createCharacter(OPTION_FOR_DWARF_SELECTION));
		}
		
		
		public function testCreateElfFromSelection(){
			$this->assertInstanceOf(Elf::class, CharacterController::
										createCharacter(OPTION_FOR_ELF_SELECTION));
		}
		
		
		public function testNewHoomanHasHoomanStats(){
			$this->assertTrue(checkCharacterStats(OPTION_FOR_HOOMAN_SELECTION));
		}
		
		
		public function testNewDwarfHasDwarfStats(){
			$this->assertTrue(checkCharacterStats(OPTION_FOR_DWARF_SELECTION));
		}
		
		
		public function testNewElfHasElfStats(){
			$this->assertTrue(checkCharacterStats(OPTION_FOR_ELF_SELECTION));
		}
		
		/*
		public function testAHoomanCanEquipAWeapon(){
			$hooman = CharacterController::createCharacter(OPTION_FOR_HOOMAN_SELECTION);
			$weapon = WeaponController::createWeapon();
			CharacterController::equipWeapon($hooman, $weapon);
			
			$this->isInstanceOf($hooman->getWeapon(), Weapon::class);
		}
		*/
	}
?>