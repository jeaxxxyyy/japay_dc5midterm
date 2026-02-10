<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
  <div class="min-h-screen flex items-center justify-center bg-blue-50">
    <div class="bg-white p-10 rounded-lg shadow-md text-center max-w-md w-full">

      <!-- Logo -->
      <img
        src="/images/logo.png"
        alt="Clinic Logo"
        class="h-20 mx-auto mb-6"
      />

      <h1 class="text-4xl font-bold text-blue-600 mb-4">
        Online Clinic Appointment System
      </h1>

      <p class="text-gray-600 mb-6">
        Book your clinic appointments easily and manage them online.
      </p>

      <div class="flex justify-center gap-4">
        <Link
          href="/login"
          class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition"
        >
          Login
        </Link>

        <Link
          href="/register"
          class="px-6 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 transition"
        >
          Register
        </Link>
      </div>

    </div>
  </div>
</template>
