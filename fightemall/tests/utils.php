<?php namespace Game\Tests;
	include_once ("fightemall/utils/constants.php");
	use GAME\Controllers\Game;
	
	define('OPTION_FOR_HOOMAN_SELECTION', 0);
	define('OPTION_FOR_DWARF_SELECTION', 1);
	define('OPTION_FOR_ELF_SELECTION', 2);
	define ('DEFAULT_CHARACTER_STATS', array(
		OPTION_FOR_HOOMAN_SELECTION => generateStatsArray(INIT_HOOMAN_STRENGTH, INIT_HOOMAN_AGILITY),
		OPTION_FOR_DWARF_SELECTION => generateStatsArray(INIT_DWARF_STRENGTH, INIT_DWARF_AGILITY),
		OPTION_FOR_ELF_SELECTION => generateStatsArray(INIT_ELF_STRENGTH, INIT_ELF_AGILITY),
	));
	
	
	function generateStatsArray($strength, $agility){
		
		return array(
			"strength" => $strength,
			"agility" => $agility
		);
	}
	
	
	function checkCharacterStats($characterCreationOption){
		$character = Game::createCharacter($characterCreationOption);
		$hasCharacterDefaultStrength = $character->getStrength() ==
				DEFAULT_CHARACTER_STATS[$characterCreationOption]["strength"];
		$hasCharacterDefaultAgility = $character->getAgility() == 
				DEFAULT_CHARACTER_STATS[$characterCreationOption]["agility"];
		
		return $hasCharacterDefaultStrength && $hasCharacterDefaultAgility;
	}
?>