<template>
    <div class="basket-item">
        <img :src="item.image" :alt="item.name" />
        <div class="basket-info">
            <h3>{{ item.name }}</h3>
            <p>Цена: {{ item.price }} руб.</p>
            <p>Количество: <input type="number" v-model="item.quantity" min="1" /></p>
        </div>
        <button class="remove-item" @click="removeItem">Удалить</button>
    </div>
</template>

<script setup>

defineProps({
    item: {
        type: Object,
        required: true,
    },
});

const removeItem = () => {};
</script>
