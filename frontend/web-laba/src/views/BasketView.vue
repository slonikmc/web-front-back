<template>
    <div class="container basket-container">
        <h2>Моя корзина</h2>
        <div class="basket-items">
            <BasketItem
                v-for="item in basketItems"
                :key="item.id"
                :item="item"
            />
        </div>

        <!-- Итог корзины -->
        <div class="basket-summary">
            <h3>Итоговая сумма: {{ totalPrice }} руб.</h3>
            <button class="checkout">Оформить заказ</button>
        </div>
    </div>
</template>

<script setup>
import BasketItem from "@/components/Products/BasketItem.vue"; // Импорт компонента

// Данные корзины
const basketItems = [
    {
        id: 1,
        name: "Туканчик",
        price: 1000,
        quantity: 1,
        image: "src/assets/img/tukan.jpg",
    },
    {
        id: 2,
        name: "Слоныня",
        price: 1500,
        quantity: 1,
        image: "/src/assets/img/hmstr.jpg",
    },
];

// Расчет общей суммы корзины
const totalPrice = basketItems.reduce(
    (sum, item) => sum + item.price * item.quantity,
    0
);
</script>
