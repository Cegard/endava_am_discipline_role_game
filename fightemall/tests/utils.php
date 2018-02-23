<?php namespace Game\Tests;
	include_once ("fightemall/utils/constants.php");
	use GAME\Controllers\{CharacterController, WeaponController};
	
	define('OPTION_FOR_HOOMAN_SELECTION', 0);
	define('OPTION_FOR_DWARF_SELECTION', 1);
	define('OPTION_FOR_ELF_SELECTION', 2);
	define('OPTION_FOR_SWORD_SELECTION',  0);
	define('OPTION_FOR_AXE_SELECTION',  1);
	define('OPTION_FOR_BOW_SELECTION',  2);
	define('DEFAULT_CHARACTER_STATS', array(
		OPTION_FOR_HOOMAN_SELECTION => generateStatsArray(INIT_HOOMAN_STRENGTH, INIT_HOOMAN_AGILITY),
		OPTION_FOR_DWARF_SELECTION => generateStatsArray(INIT_DWARF_STRENGTH, INIT_DWARF_AGILITY),
		OPTION_FOR_ELF_SELECTION => generateStatsArray(INIT_ELF_STRENGTH, INIT_ELF_AGILITY),
	));
	define('DEFAULT_WEAPON_STATS', array(
		OPTION_FOR_SWORD_SELECTION => generateStatsArray(INIT_SWORD_STRENGTH, INIT_SWORD_AGILITY),
		OPTION_FOR_AXE_SELECTION => generateStatsArray(INIT_AXE_STRENGTH, INIT_AXE_AGILITY),
		OPTION_FOR_BOW_SELECTION => generateStatsArray(INIT_BOW_STRENGTH, INIT_BOW_AGILITY),
	));
	define();
	
	
	function generateStatsArray($strength, $agility){
		
		return array(
			"strength" => $strength,
			"agility" => $agility
		);
	}
	
	
	function checkStats($defaultStats){
		$model = CharacterController::createCharacter($modelCreationOption);
		$hasModelDefaultStrength = $model->getStrength() ==
				DEFAULT_CHARACTER_STATS[$modelCreationOption]["strength"];
		$hasModelDefaultAgility = $model->getAgility() == 
				DEFAULT_CHARACTER_STATS[$modelCreationOption]["agility"];
		
		return $hasModelDefaultStrength && $hasModelDefaultAgility;
	}
	
	
	function checkCharacterStats($characterCreationOption){
		$character = CharacterController::createCharacter($characterCreationOption);
		$hasCharacterDefaultStrength = $character->getStrength() ==
				DEFAULT_CHARACTER_STATS[$characterCreationOption]["strength"];
		$hasCharacterDefaultAgility = $character->getAgility() == 
				DEFAULT_CHARACTER_STATS[$characterCreationOption]["agility"];
		
		return $hasCharacterDefaultStrength && $hasCharacterDefaultAgility;
	}
	
	
	function checkWeaponStats($weaponCreationOption){
		$weapon = WeaponController::createWeapon($weaponCreationOption);
		$hasWeaponDefaultStrength = $weapon->getStrength() ==
				DEFAULT_WEAPON_STATS[$weaponCreationOption]["strength"];
		$hasWeaponDefaultAgility = $weapon->getAgility() == 
				DEFAULT_WEAPON_STATS[$weaponCreationOption]["agility"];
		
		return $hasWeaponDefaultStrength && $hasWeaponDefaultAgility;
	}
?>