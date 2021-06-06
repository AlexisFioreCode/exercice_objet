<?php

class chatManager {
    private PDO $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=poo_chat', 'root', '');
    }
    public function getChats() {
        $response= $this->db->query("SELECT * FROM chat");
        $result = $response->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $key => $chat){
            $result[$key] = new Chat($chat);
        }
        return $result;      
    }
    
    public function addChat(Chat $chat) {        
        $query = $this->db->prepare("INSERT INTO chat(nom, age , sex , color) VALUES(:nom, :age, :sex, :color)");   
        $query->execute([   
            "nom" => $chat->getNom(),
            "age" => $chat->getAge(),   
            "sex" => $chat->getSex(),
            "color" => $chat->getColor()                  
        ]);   
    }
}