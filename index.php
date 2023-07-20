
<?php

require('lib/service.php');
require('templates/header.php');

?>

    <div class="cover">
     
    <h1> <i> <B> Des professionnels au service de votre voiture </B></i>  </h1>

</div>
<div class="cover_container-images">
   <img src="voiture.jpg"/>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<p> <B> <h3> <i>NOS SERVICES</i></h3> </B> </p>

<a href="services.php" class="btn btn-danger"> <B>Voir nos services</B> </a>
<br>
<br>



    <div class="row">
<?php
foreach ($services as $key=> $service) {  
 
  include('templates/services1bis.php');
 
  } 
  ?>
 

</div>

<br>
<br>
<p> <B> <h4> <i>VOITURES D'OCCASION</i></h4> </B> </p>
</div>

<br>
<br>
<br>
<div class="bd-example m-0 border-0">
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="opel.png" width="470px" height="350px">
      <div class="card-body">
        <h5 class="card-title"> <B>VOLKSWAGEN</B></h5>
        <p class="card-text">
          <li> <B> VENDU </B></li>
        </p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary"> <B>Voiture 10 kilomètres</B> <br> Livrée</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src='rebault 2.jpg' width="470px" height="350px">
      <div class="card-body">
        <h5 class="card-title"><B> RENAULT TWINGO 2</B></h5>
        <p class="card-text">
          <li> Essences- Manuelle</li>
          <li><B> 3880 euros </B></li>
        </p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary"><B>Voiture 147000 kilomètres </B><br> Livraison sous 13 jours</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="renault 4.jpg"  width="500px" height="350px">
      <div class="card-body">
        <h5 class="card-title"><B>RENAULT CAPTUR 2</B></h5>
        <p class="card-text">
          
            <li> Diesel- Automatique </li>
            <li> <B>18500 euros </B> </li>
          
        </p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary"> <B> Voiture 1500 kilomètres </B><br>    livraison sous 10 jours</small>
      </div>
    </div>
  </div>
</div>
</div>

<?php
require('templates/footer.php'); 
?>   