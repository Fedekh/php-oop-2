<div class="main">
  <div class="card-container row row-cols-lg-5 row-cols-md-4 row-cols-sm-3 ">
    <?php foreach ($products as $product) { ?>
      <div class="card m-3">
        <div class="images">
          <img class="card-img-top" src="<?php echo $product->img; ?>" alt="Card image cap">
        </div>
        <div class="card-body">
          <h4 class="card-title"><?php echo $product->name; ?></h4>
          <p class="card-text"><span>Prezzo : </span> <span class="caract"><?php echo $product->price; ?>€</span></p>
          <p class="card-text"><span>Caratteristiche : </span><span class="caract"> <?php echo $product->caracteristics; ?></span></p>
          <p class="card-text"><span>Materiale : </span> <span class="caract"><?php echo $product->material; ?></span></p>
          <p class="card-text"><span>Dimensione : </span> <span class="caract"><?php echo $product->size; ?></span></p>
          <p class="card-text"><span>Categoria : </span> <span class="caract"><?php echo $product->category->category; ?></span>
            <span><?php echo $product->category->icon; ?> </span>
          </p>

          <?php if (get_class($product) === "Food") { ?>
            <span>Scadenza :</span> <span class="caract"> <?php echo $product->getExpirationDate(); ?></p></span>
          <?php } ?>
          <?php
          try {
            if ($product->getDiscount() > 0  && is_numeric($product->getDiscount())) {
                echo '<p class="card-text"><h5 class="discount">Sconto: ' . $product->getDiscount() . '%</h5></p>';
            } else {
                throw new Exception("Valore sconto non valido.");
            }
        } catch (Exception $e) {
            echo '<p class="card-text"><h5 class="error">Errore nello sconto: ' . $e->getMessage() . '</h5></p>';
        }
        
          ?>


          <button class="btn btn-primary my-3 px-3">ADD TO<i class="fa-solid fa-cart-shopping mx-2"></i></button>
        </div>
      </div>
    <?php }; ?>
  </div>

</div>