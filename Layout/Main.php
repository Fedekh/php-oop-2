<div class="">
  <div class="card-container d-flex flex-wrap gap-4">
    <?php foreach ($products as $product) { ?>
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
          <p class="card-text"><span>Categoria : </span> <span class="caract"><?php echo $product->category->category; ?></span>
            <span><?php echo $product->category->icon; ?> </span>
          </p>

          <!-- !questo if serve per stampare la data di scadenza solo se il prodotto è un cibo tramite la funzione definita solo nella classe figlia food-->

          <?php if (get_class($product) === "Food") { ?>
            <span>Scadenza :</span> <span class="caract"> <?php echo $product->getExpirationDate(); ?></p></span>
          <?php } ?>
            <!-- questo blocco try catch serve per stampare l'errore se lo sconto non è valido, in pratica nel blocco try si prova a settare lo sconto e se non è valido si va nel blocco catch che stampa l'errore -->
          <?php try { ?>
            <?php $product->setDiscount(110); ?>
            <p class="card-text"><span>Sconto : </span> <span class="caract"><?php echo $product->getDiscount(); ?>%</span></p>
          <?php } catch (Exception $e) { ?>
            <p class="card-text">Errore nello sconto: <?php echo $e->getMessage(); ?></p>
          <?php } ?>
        </div>
      </div>
    <?php }; ?>
  </div>
</div>