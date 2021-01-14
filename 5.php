<?php
/*
Написать программу для игры в слова. Программа должна спросить количество игроков и имя каждого игрока. Игроки по очереди говорят слова. Первая буква слова игрока должна совподать с последней буквой слова предыдущего игрока. Если слово заканчивается на "Ъ, ь, Ы" программа должна ориентироватся на предыдущую букву. После слова последнего игрока, ход переходит к первому. Слова не должны повторятся. Игра продолжается пока не сдадутся все игроки кроме одного.
*/

class Player{
	public $Number;
	public $Name;
	public $Status = 'Active';

	function __construct($Number){
		$this -> Number = $Number;
		$this -> Name = readline("Введите имя игрока № $this->Number : ");
		echo "Игрок № $this->Number с именем $this->Name\n";
	}
}
//$obj = new Player(1);
/*
Class Tour{

}

Class Winer{

}
*/
class Game{
	public $NumberOfPlayers;
	public $ArrObjPlayers = array();
	public $ArrWords = array();

	function __construct(){
		//Создаем массив игроков
		$this->NumberOfPlayers = readline("Введите количество играков: ");
		for ($i=1; $i <= $this->NumberOfPlayers; $i++) { 
			$this->ArrObjPlayers["Player$i"] = new Player($i);
		}
		/*
		//начинаем игру
		do {
			# Tour
		} while (нет победителя);
		*/
	}
}

$objGame = new Game();
print_r($objGame->ArrObjPlayers);

/*массив игроков
Array
(
    [Player1] => Player Object
        (
            [Number] => 1
            [Name] => Саша
            [Status] => Active
        )

    [Player2] => Player Object
        (
            [Number] => 2
            [Name] => Маша
            [Status] => Active
        )

    [Player3] => Player Object
        (
            [Number] => 3
            [Name] => Коля
            [Status] => Active
        )

)
*/
?>
