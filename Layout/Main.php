<div class="">
  <div class="card-container d-flex flex-wrap gap-4">
    <?php foreach ($products as $product){?>
      <div class="card">
        <div class="images">
          <img class="card-img-top" src="<?php echo $product->img; ?>" alt="Card image cap">
        </div>
        <div class="card-body">
          <h5 class="card-title"><?php echo $product->name; ?></h5>
          <p class="card-text"><span>Prezzo : </span> <?php echo $product->price; ?>€</p>
          <p class="card-text"><span>Caratteristiche : </span> <?php echo $product->caracteristics; ?></p>
          <p class="card-text"><span>Categoria : </span> <?php echo $product->category->category; ?></p>
        </div>
      </div>
    <?php }; ?>
  </div>
</div>
