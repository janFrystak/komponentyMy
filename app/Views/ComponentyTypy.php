<?php

use App\Models\Vyrobce;

echo $this->extend("layout/template");
echo $this->section("content"); 
$imgRoute = "extraAssets/komponenty/";


?>

<h1>Druhy Komponentů</h1>
<?php //foreach ($info as $komp) : 

  

?>
<?php 
$url = $info->odkaz;
$kompImg = [
    "src" => $imgRoute.$info->pic,
    "class" => "img-responsive card-img-top",
    "alt" =>"pic",
    "width" => "100%"

];

?>

<div class="container-fluid">
    <div class ="row">
<div class="card">
  <div class="card-body">
  <h4 class="card-title"><?= /*anchor("ComponentExamples/")*/$info->nazev ?></h4>
  <p class="card-text"><?php $info->vyrobce; ?></p>
  
  <p class="card-text"><?php echo img ($kompImg); ?></p>
  
   <?php echo anchor($url, "Link"); ?>
  

  


    
  
  
   
  </div>
</div>
</div>
</div>
<?php

 $this->endSection(); ?>