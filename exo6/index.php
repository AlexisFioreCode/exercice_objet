<?php 
require "Chat.php";
require "chatManager.php";

$chatManager = new chatManager();
if(!empty($_POST)&& isset($_POST["addChat"])) {
   $chat = new Chat($_POST);
   $chatManager->addChat($chat);
}

$chats = $chatManager->getChats();
require "indexView.php";
?>