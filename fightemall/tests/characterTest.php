<?php
	include ("fightemall/utils/constants.php");
	use PHPUnit\Framework\TestCase,
		Game\Controllers\Game;
	use	Game\Models\{Hooman, Dwarf, Elf};
	#use Game\Utils; #\{INIT_HOOMAN_STRENGTH, INIT_HOOMAN_AGILITY};
	
	
	final class CharacterTest extends TestCase{
		
		
		public function testCreateHoomanFromSelection(){
			$selection = 0;
			
			$this->assertInstanceOf(Hooman::class, Game::createCharacter($selection));
		}
		
		
		public function testCreateDwarfFromSelection(){
			$selection = 1;
			
			$this->assertInstanceOf(Dwarf::class, Game::createCharacter($selection));
		}
		
		
		public function testCreateElfFromSelection(){
			$selection = 2;
			
			$this->assertInstanceOf(Elf::class, Game::createCharacter($selection));
		}
		
		
		public function testNewHoomanHasHoomanStats(){
			$optionForNewCharacter = 0;
			$hooman = Game::createCharacter($optionForNewCharacter);
			$hasHoomanDefaultStrength = $hooman->getStrength() == INIT_HOOMAN_STRENGTH;
			$hasHoomanDefaultAgility = $hooman->getAgility() == INIT_HOOMAN_AGILITY;
			$hasHoomanDefaultStats = $hasHoomanDefaultStrength && $hasHoomanDefaultAgility;
			
			$this->assertTrue($hasHoomanDefaultStats);
		}
	}
?>