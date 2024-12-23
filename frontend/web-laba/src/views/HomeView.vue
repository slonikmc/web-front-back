<script setup>

import ProductItem from "@/components/Products/ProductItem.vue";

const products = [
    {
    name: 'слонильон',
    price: 2400
    },
    {
    name: 'слонильончик',
    price: 4400
    },
    {
    name: 'слонильоныш',
    price: 24400
    },
]

</script>

<template>
<main>
  <div class="container">
        <div class="category">
            <h2>Категория товаров</h2>
            <p>Описание категории товаров</p>

            <!-- Сетка товаров -->
            <div class="product-grid">
                <ProductItem
                    v-for="product in products"
                    :product="product"
                />
            </div>
            
        </div>
  </div>
  </main>

  
</template>
