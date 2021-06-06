<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les chats et la bdd</title>
</head>
<body>
    <h1>Les chats présents dans le centre</h1>
        <ul>
        <?php foreach ($chats as $chat): ?>
           <p><?php echo $chat->Miaou(); ?> </p> 
       <?php endforeach?>
        </ul>
    
    <h2>Par ici pour Enregistrer ton chat chez nous ♡ </h2>
    <form action="" method="post">
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom">
        </div>
        <div>
            <label for="age">Age</label>
            <input type="number" name="age">
        </div>
        <!-- <label for="sex">Sexe</label>
        <input type="text" name="sex"> -->
        <label for="sex">Sexe</label>
        <select name="sex" id="sex">
            <option value="female">Female</option>
            <option value="male">Male</option>       
        </select>
        <!-- <label for="color">Couleur</label>
        <input type="text" name="color"> -->
        <label for="color">Couleur</label>
        <select name="color" id="color">
            <option value="white">Blanc</option>
            <option value="grey">Gris</option>
            <option value="black">Noir</option>
            <option value="beige">Beige</option>       
        </select>
            <input type="submit" name="addChat" value="Enregistrer">
        </div>
    </form>
</body>
</html>