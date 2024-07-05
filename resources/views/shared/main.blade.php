    <div class="row">
      <!-- larghezza massima 1200px -->
      <div class="container">
        <!-- imposta la larghezza del contenuto a 1/3 della larghezza del container  -->

        <div class="content col-33" v-for="product in productlist">
          <!-- immagine prodotto -->

          <img class="view" :src="product.img" alt="" />
          <!-- immagine da visualizzare al passare del mouse -->
          <img class="hover" :src="product.imgHover" alt="" />
          <!-- contenitore cuori per aggiungere ai preferiti  -->
          <div class="heart-contain">
            <!-- cuore diventa rosso al passare del mouse -->
            <span class="heart-view">&hearts;</span>
            <span class="heart-hover">&hearts;</span>
          </div>
          <!-- marca prodotto -->
          <span class="mark">{{ product.brand }}</span>
          <!-- nome del prodotto  -->
          <h2 class="name">{{ product.name }}</h2>
          <!-- prezzo del prodotto  -->
          <span class="price">{{ product.price }}</span>
          <!-- vecchio prezzo del prodotto  -->
          <span class="ex-price">{{ product.exPrice }}</span>
          <div class="info-img">
            <!-- sconto  -->
            <span class="bg-red info" v-if="product.discount">{{
              product.discount
            }}</span>
            <!-- sostenibilita -->
            <span class="bg-green info" v-show="product.eGreen"
              >sostenible</span
            >
          </div>
        </div>
      </div>
    </div>
  </main>