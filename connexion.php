
<?php
require('templates/header.php'); 
$users=[
    ['email'=>'no@gmail.com', 'password'=>'nono']
];

if(isset($_POST['email'])){
    foreach($users as $user){
        if($user['email']===$_POST['email']){

    }
       
    }
}
if(isset($_POST['email'])&& isset($_POST['mdp']))

  
   
?>




<section>
<h2> connexion</h2>


<form method="POST" action="">
        <label> Adresse Mail</label>
        
        <input type="text" name="Email" id="email">
        <label> Mot de Passe</label>
        <input type="password" name="mdp" id="mdp">
   <input type="submit" value="valider" name="valider" >
    </form>
    </div>
</section>






    
    <?php
require('templates/footer.php'); 
?>   


