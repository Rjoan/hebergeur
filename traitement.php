<?php

if(isset($_FILES['test-image']) && $_FILES['test-image']['error'] == 0) {
    
    if($_FILES['test-image']['size'] <= 3000000) {
        
        $informationsImage = pathinfo($_FILES['test-image']['name']);
        $extensionImage = $informationsImage['extension'];
        $extensionArray = ['png', 'gif', 'jpg', 'jpeg'];

        if(in_array($extensionImage, $extensionArray)) {

            $adress = './uploads/'.time().rand();

            move_uploaded_file($_FILES['test-image']['tmp_name'], $adress .'.'.$extensionImage);

            require './index.php'; 

            echo '<div>
                    <img id="img" src="' .  $adress . '.' . $extensionImage . '"
                </div>';
            
            echo '<p><a target="_blank" href="'. $adress . '.'. $extensionImage . '">Taille réelle</a></p>';

            require 'footer.php';  
            
        }
    }
} else {

    header('Location: ./index.php');

}