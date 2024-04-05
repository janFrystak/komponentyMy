<?php
echo $this->extend("layout/template");
echo $this->section("content"); 
$imgRoute = "extraAssets/komponenty";


?>

<h1>Druhy Komponentů</h1>
<?php foreach ($types as $komp) : ?>


<?php $kompImg = [
    "src" => $imgRoute.$komp->pic,
    "class" => "img-responsive card-img-top",
    "alt" =>"pic"
];
?>

<div class="container-fluid">
    <div class ="row">
<div class="card">
  <div class="card-body">
  <h4 class="card-title"><?= $komp->nazev ?></h4>
  <p class="card-text"><?php echo img ($kompImg); ?></p>
  
  <p class="card-text">Koupit: <a href=<? $komp->pic ?>></a></p>
  


    
  
  
   
  </div>
</div>
</div>
</div>
<?php endforeach ;

 $this->endSection(); ?>