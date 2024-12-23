<template>

<main>
    <div class="container auth-container">
        <h2>Вход</h2>
        <form class="auth-form">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Войти</button>
            <p>Нет аккаунта? <a class="btn"><router-link to="/register">Зарегистрироваться</router-link></a></p>
        </form>
    </div>
</main>

</template>
