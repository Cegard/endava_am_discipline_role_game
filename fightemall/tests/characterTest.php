<?php
	include_once ("fightemall/utils/constants.php");
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
		
		
		public function testNewDwarfHasDwarfStats(){
			$optionForNewCharacter = 1;
			$dwarf = Game::createCharacter($optionForNewCharacter);
			$hasDwarfDefaultStrength = $dwarf->getStrength() == INIT_DWARF_STRENGTH;
			$hasDwarfDefaultAgility = $dwarf->getAgility() == INIT_DWARF_AGILITY;
			$hasDwarfDefaultStats = $hasDwarfDefaultStrength && $hasDwarfDefaultAgility;
			
			$this->assertTrue($hasDwarfDefaultStats);
		}
		
		
		public function testNewElfHasElfStats(){
			$optionForNewCharacter = 2;
			$elf = Game::createCharacter($optionForNewCharacter);
			$hasElfDefaultElfStrength = $elf->getStrength() == INIT_ELF_STRENGTH;
			$hasElfDefaultElfAgility = $elf->getAgility() == INIT_ELF_AGILITY;
			$hasElfDefaultStats = $hasElfDefaultElfStrength && $hasElfDefaultElfAgility;
			
			$this->assertTrue($hasElfDefaultStats);
		}
		
		
		public function testHoomanCanHit(){
			$hoomanOption = 0;
			$attacker = Game::createCharacter($hoomanOption);
			$defender = Game::createCharacter($hoomanOption);
			$previousLifePoints = $defender->getLifePoints();
			CharacterController.attack($attacker, $defender);
			$laterLifePoints = $defender->getLifePoints();
			$wasDefenderHit = $previousLifePoints > $laterLifePoints;
			
			$this->assertTrue($wasDefenderHit);
		}
	}
?>