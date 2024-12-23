<template>
    <div class="product-card">
        <img src="@/assets/img/hmstr.jpg" alt="Товар">
        <h3>{{ product.name }}</h3>
        <p>Цена: {{ product.price }} руб.</p>
        <button class="buy-button">Купить</button>
    </div>
</template>

<script setup>
defineProps({
    product: {
        type: Object,
        required: true
    }
});
</script>
