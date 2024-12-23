<template>

<div class="container auth-container">
        <h2>Регистрация</h2>
        <form class="auth-form">
            <div class="form-group">
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="confirm-password">Подтвердите пароль:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>

            <button type="submit">Зарегистрироваться</button>
            <p>Уже есть аккаунт? <a><router-link to="/login">Войти</router-link></a></p>
        </form>
    </div>

</template>