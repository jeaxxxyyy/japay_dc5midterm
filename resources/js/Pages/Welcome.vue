<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});
</script>

<template>
    <Head title="Welcome" />

    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100 px-4">
        <!-- Logo -->
        <img
            src="/images/logo.png"
            alt="App Logo"
            class="h-20 mb-6"
        />

        <!-- Title -->
        <h1 class="text-3xl font-bold text-gray-800 mb-4 text-center">
            Welcome to My Application
        </h1>

        <!-- Subtitle -->
        <p class="text-gray-600 mb-8 text-center max-w-md">
            This page is public and does not require login.
        </p>

        <!-- Buttons -->
        <div class="flex gap-4">
            <Link
                v-if="canLogin && !$page.props.auth.user"
                :href="route('login')"
                class="px-5 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-700 transition"
            >
                Login
            </Link>

            <Link
                v-if="canRegister && !$page.props.auth.user"
                :href="route('register')"
                class="px-5 py-2 rounded-md bg-gray-200 text-gray-800 hover:bg-gray-300 transition"
            >
                Register
            </Link>

            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="px-5 py-2 rounded-md bg-green-600 text-white hover:bg-green-700 transition"
            >
                Go to Dashboard
            </Link>
        </div>
    </div>
</template>

<style scoped>
</style>
