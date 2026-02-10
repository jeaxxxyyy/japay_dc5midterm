<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, usePage } from '@inertiajs/vue3';

// Safely access auth user
const page = usePage();
const user = page.props.auth?.user || { name: 'Guest', email: 'N/A' };
</script>

<template>
  <Head title="Dashboard" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="text-xl font-semibold leading-tight text-gray-800">Dashboard</h2>
    </template>

    <div class="min-h-screen flex items-center justify-center bg-blue-50">
      <div class="bg-white p-10 rounded-lg shadow-md text-center max-w-md w-full">

        <!-- Logo -->
        <img src="/images/logo.png" alt="Clinic Logo" class="h-64 w-auto mb-6 mx-auto" />

        <!-- Welcome Message -->
        <h1 class="text-2xl font-semibold mb-4 text-gray-900">Welcome To My Online Clinic</h1>
        <p class="text-gray-600 mb-6">Manage your appointments easily and efficiently.</p>

        <!-- Authenticated User Info -->
        <div class="text-gray-800">
          <p><span class="font-medium">Name:</span> {{ user.name }}</p>
          <p><span class="font-medium">Email:</span> {{ user.email }}</p>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
