<?php

echo $this->extend("layout/template");
echo $this->section("content"); 
;?>
<h1>Druhy Komponentů</h1>
<?php foreach ($komponenty as $komp) : ?>

<div class="container-fluid">
    <div class ="row">
<div class="card">
  <div class="card-body">
  <h4 class="card-title"><?= anchor("ComponentyTypy/".$komp->typKomponent_id, $komp->nazev) ?></h4>

    
  
  
   
  </div>
</div>
</div>
</div>
<?php endforeach ; ?>
<div style="width:300px; margin:auto"><?php echo $pager->links(); ?></div>

<?php $this->endSection(); ?>