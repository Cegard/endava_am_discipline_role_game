<?php
	include("./fightemall/models/hooman.php");
	
	
	class Game{
	
	
		public static function createCharacter($option){
			return new Hooman();
		}
	}
?>