<template>

<header class="header">
        <router-link to="/" class="logo">Ozon</router-link>

        <!-- Строка поиска -->
        <div class="search-bar">
            <input type="text" placeholder="Поиск товаров" />
            <button>Найти</button>
        </div>

        <!-- Навигация -->
        <nav class="navigation">
            <ul>
                <li class="active"><router-link to="/profile">Профиль</router-link></li>
                <li><router-link to="/basket">Корзина</router-link></li>
                <li class="btn"><router-link to="/login">Выйти</router-link></li>
            </ul>
        </nav>
    </header>

</template>