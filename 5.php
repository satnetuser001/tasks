<?php
/*
Написать программу для игры в слова. Программа должна спросить количество игроков и имя каждого игрока. Игроки по очереди говорят слова. Первая буква слова игрока должна совподать с последней буквой слова предыдущего игрока. Если слово заканчивается на "Ъ, ь, Ы" программа должна ориентироватся на предыдущую букву. После слова последнего игрока, ход переходит к первому. Слова не должны повторятся. Игра продолжается пока не сдадутся все игроки кроме одного.
*/

class Player{
	public $Number;
	public $Name;

	public function __construct($Number){
		$this -> Number = $Number;
		$this -> Name = readline("Введите имя игрока № $this->Number : ");
		echo "Игрок № $this->Number с именем $this->Name\n";
	}
}
//$obj = new Player(1);

class Game{
	public $NumberOfPlayers;
	public $ArrObj = Array();

	public function __construct(){
		$this->NumberOfPlayers = readline("Введите количество играков: ");
		for ($i=1; $i <= $this->NumberOfPlayers; $i++) { 
			$this->ArrObj["Player № $i"] = new Player($i);
		}
	}
}

$objGame = new Game();
print_r($objGame->ArrObj);
?>