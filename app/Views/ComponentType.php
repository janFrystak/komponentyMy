<?php
echo $this->extend("layout/template");
echo $this->section("content"); ?>
<h1>Druhy Komponentů</h1>
<?php foreach ($types as $komp) : ?>

<div class="container-fluid">
    <div class ="row">
<div class="card">
  <div class="card-body">
  <h4 class="card-title"><?=anchor("ComponentExamples/".$komp->idKomponent, $komp->typKomponent) ?></h4>
  

    
  
  
   
  </div>
</div>
</div>
</div>
<?php endforeach ;

 $this->endSection(); ?>