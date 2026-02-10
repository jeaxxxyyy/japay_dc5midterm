<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';

const form = useForm({
  patient_name: '',
  doctor_name: '',
  appointment_date: '',
  appointment_time: '',
});

const submit = () => {
  form.post(route('appointments.store'), {
    onSuccess: () => form.reset(),
  });
};
</script>

<template>
  <Head title="Appointments" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Clinic Appointments
      </h2>
    </template>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white p-6 rounded shadow">

        <!-- Create Appointment -->
        <h3 class="text-lg font-bold mb-4">Create Appointment</h3>

        <form @submit.prevent="submit" class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
          <input
            v-model="form.patient_name"
            type="text"
            placeholder="Patient Name"
            class="border p-2 rounded"
          />

          <input
            v-model="form.doctor_name"
            type="text"
            placeholder="Doctor Name"
            class="border p-2 rounded"
          />

          <input
            v-model="form.appointment_date"
            type="date"
            class="border p-2 rounded"
          />

          <input
            v-model="form.appointment_time"
            type="time"
            class="border p-2 rounded"
          />

          <button
            class="md:col-span-2 bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition"
          >
            Save Appointment
          </button>
        </form>

        <!-- Display Appointments -->
        <h3 class="text-lg font-bold mb-4">My Appointments</h3>

        <table class="w-full border-collapse border">
          <thead class="bg-gray-100">
            <tr>
              <th class="border p-2">Patient</th>
              <th class="border p-2">Doctor</th>
              <th class="border p-2">Date</th>
              <th class="border p-2">Time</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="appointment in $page.props.appointments" :key="appointment.id">
              <td class="border p-2">{{ appointment.patient_name }}</td>
              <td class="border p-2">{{ appointment.doctor_name }}</td>
              <td class="border p-2">{{ appointment.appointment_date }}</td>
              <td class="border p-2">{{ appointment.appointment_time }}</td>
            </tr>

            <tr v-if="$page.props.appointments.length === 0">
              <td colspan="4" class="text-center p-4 text-gray-500">
                No appointments found.
              </td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
  </AuthenticatedLayout>
</template>
