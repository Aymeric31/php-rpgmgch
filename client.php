<?php
require "user.php";
class Client extends User{
	public function buy(){
		return;
	}
}
$client1 = new Client(1, "bonjour@hotmail.fr", "1982");
$client2 = new Client(2, "bonsoir@hotmail.fr", "1928");

$clients = [$client1,$client2];
?>