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
      <h2 class="text-xl font-serif font-semibold leading-tight text-pink-500">Dashboard</h2>
    </template>

    <div class="min-h-screen flex items-center justify-center bg-rose-50">
      <div class="bg-white p-10 rounded-3xl shadow-xl shadow-pink-100 border-t-4 border-pink-300 text-center max-w-md w-full">

        <div class="inline-block p-2 bg-pink-50 rounded-full mb-6 shadow-inner">
           <img src="/images/download.jpeg" alt="Clinic Logo" class="h-48 w-48 object-cover rounded-full mx-auto" />
        </div>

        <h1 class="text-2xl font-serif font-bold mb-4 text-pink-600 italic">Welcome To My Online Clinic</h1>
        <p class="text-gray-500 mb-6 italic font-light">Making your wellness journey beautiful and easy.</p>

        <div class="bg-pink-50 p-4 rounded-2xl text-gray-700">
          <p class="mb-2"><span class="font-semibold text-pink-400">Name:</span> {{ user.name }}</p>
          <p><span class="font-semibold text-pink-400">Email:</span> {{ user.email }}</p>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
