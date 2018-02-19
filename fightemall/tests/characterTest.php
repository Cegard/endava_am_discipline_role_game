<?php
	include("./fightemall/controllers/game.php");
	use PHPUnit\Framework\TestCase;
	
	
	final class CharacterTest extends TestCase{
		
		
		public function testCreateHoomanFromSelection(){
			$this->assertInstanceOf(Hooman::class, Game::createCharacter(0));
		}
	}
?>