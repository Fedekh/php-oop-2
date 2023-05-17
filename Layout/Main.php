<div class="">
  <div class="card-container d-flex flex-wrap gap-4">
    <?php foreach ($products as $product){?>
      <div class="card">
        <div class="images">
          <img class="card-img-top" src="<?php echo $product->img; ?>" alt="Card image cap">
        </div>
        <div class="card-body">
          <h5 class="card-title"><?php echo $product->name; ?></h5>
          <p class="card-text"><span>Prezzo : </span> <span class="caract"><?php echo $product->price; ?>€</span></p>
          <p class="card-text"><span>Caratteristiche : </span><span class="caract"> <?php echo $product->caracteristics; ?></span></p>
          <p class="card-text"><span>Materiale : </span> <span class="caract"><?php echo $product->material; ?></span></p>
          <p class="card-text"><span>Dimensione : </span> <span class="caract"><?php echo $product->size; ?></span></p>
          <p class="card-text"><span>Categoria : </span> <span class="caract"><?php echo $product->category->category; ?></span></p>
        </div>
      </div>
    <?php }; ?>
  </div>
</div>