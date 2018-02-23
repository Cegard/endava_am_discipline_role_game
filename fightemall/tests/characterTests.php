<?php
	namespace Game\Tests;
	include_once ("fightemall/tests/utils.php");
	use PHPUnit\Framework\TestCase;
	use Game\Controllers\{CharacterController, WeaponController};
	use	Game\Models\Characters\{Hooman, Dwarf, Elf};
	use	Game\Models\Weapons\Sword;
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
		
		
		public function testAHoomanCanEquipASword(){
			$this->assertTrue(checkTypeOfCharacterWeapon(OPTION_FOR_HOOMAN_SELECTION,
														 OPTION_FOR_SWORD_SELECTION));
		}
		
		
		public function testADwarfCanEquipASword(){
			$this->assertTrue(checkTypeOfCharacterWeapon(OPTION_FOR_DWARF_SELECTION,
														 OPTION_FOR_SWORD_SELECTION));
		}
	}
?>