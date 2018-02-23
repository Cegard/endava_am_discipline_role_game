<?php namespace Game\Tests;
	use Game\Controllers\{CharacterController, WeaponController};
	use Game\Models\Weapons\{Sword, Axe, Bow};
	include_once ("fightemall/utils/constants.php");
	
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
	
	
	function generateStatsArray($strength, $agility){
		
		return array(
			"strength" => $strength,
			"agility" => $agility
		);
	}
	
	
	function compareModelStatAgainstDefault($modelStat, $defaultModelStats,
											$modelCreationOption, $stat){
		
		return $modelStat == $defaultModelStats[$modelCreationOption][$stat];
	}
	
	
	function checkStats($model, $defaultModelStats, $modelCreationOption){
		
		return compareModelStatAgainstDefault($model->getStrength(), $defaultModelStats,
											  $modelCreationOption, "strength") &&
			   compareModelStatAgainstDefault($model->getAgility(), $defaultModelStats,
										      $modelCreationOption, "agility");
	}
	
	
	function checkCharacterStats($characterCreationOption){
		
		return checkStats(CharacterController::createCharacter($characterCreationOption),
						  DEFAULT_CHARACTER_STATS, $characterCreationOption);
	}
	
	
	function checkWeaponStats($weaponCreationOption){
		
		return checkStats(WeaponController::createWeapon($weaponCreationOption),
						  DEFAULT_WEAPON_STATS, $weaponCreationOption);
	}
	
	
	function equipWeaponOnCharacter($weaponSelection, $characterSelection){
		$character = CharacterController::createCharacter($characterSelection);
		CharacterController::equipWeapon($character,
										 WeaponController::createWeapon($weaponSelection));
		
		return $character->getWeapon();
	}
	
	
	function checkTypeOfCharacterWeapon($characterSelection, $weaponSelection){
		$weaponsClasses = array(
			OPTION_FOR_SWORD_SELECTION => Sword::class,
			OPTION_FOR_AXE_SELECTION => Axe::class,
			OPTION_FOR_BOW_SELECTION => Bow::class,
		);
		
		return equipWeaponOnCharacter($weaponSelection, $characterSelection) instanceof
				$weaponsClasses[$weaponSelection];
	}
?>