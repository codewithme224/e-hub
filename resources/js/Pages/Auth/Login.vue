<script setup>
import { ref } from 'vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { useAuthStore } from '@/Stores/Auth';
import { useToast } from 'primevue/usetoast';
import Toast from 'primevue/toast';

const props = defineProps({
    canResetPassword: Boolean,
    status: String,
});

const authStore = useAuthStore();
const toast = useToast();

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const isSubmitting = ref(false);

const submit = async () => {
  console.log('Submitting form:', form);
  if (isSubmitting.value) return;

  isSubmitting.value = true;
  try {
    console.log('Calling authStore.login');
    const { user, token } = await authStore.login({
      email: form.email,
      password: form.password,
    });
    console.log('Login successful:', { user, token });
    toast.add({ severity: 'success', summary: 'Success', detail: 'Logged in successfully', life: 3000 });
    window.location = route('module');
  } catch (error) {
    console.error('Login error:', error);
    console.error('Error response:', error.response);
    const { message, errors } = error.response.data;
    toast.add({ severity: 'error', summary: 'Error', detail: message || 'Login failed', life: 3000 });
  } finally {
    isSubmitting.value = false;
  }
};
</script>

<template>
    <div>

        <Head title="Log in" />
        <Link :href="route('welcome')" class="relative flex justify-end mr-5">
        <img class="w-12 " src="assets/images/logo.png" alt="">
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-[#6640FF]">E-HUB</span>

        </Link>
        <div class="flex items-center justify-center ">
            <div
                class="hide-medium md:block lg:block absolute top-0 h-[800px] w-1/2 bg-[#5730F6] transform -translate-x-full rounded-[50px] rotate-45 ml-[100px]">
                <div class="absolute ml-[400px] w-[300px] h-auto flex items-center justify-center transform -rotate-45">
                    <img src="assets/images/step-img.png" alt="Education Illustration"
                        class="max-w-sm mx-auto  lg:mx-30 w-[900px] h-[500px]" />
                </div>
            </div>
            <div class="w-full lg:w-1/2  lg:ml-[380px]">
                <div class="p-8">
                    <div class="mb-4">
                        <div class="relative ml-[600px] h-8 w-8 rounded-full flex justify-start bg-[#F6AD2B66]"></div>

                    </div>

                    <div class="flex items-center justify-center min-h-screen">
                        <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-lg">
                            <h1 class="mb-2 text-2xl font-bold text-purple-700 dark:text-purple-600">Welcome to E-Hub
                            </h1>
                            <p class="mb-6 text-sm text-zinc-600 dark:text-zinc-400">Login the right Credentials</p>
                            <form @submit.prevent="submit">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-zinc-700 dark:text-zinc-300"
                                        for="email">
                                        Email Address
                                    </label>
                                    <input v-model="form.email"
                                        class="w-full px-3 py-2 leading-tight border rounded shadow appearance-none text-zinc-700 dark:text-zinc-300 focus:outline-none focus:shadow-outline"
                                        id="email" type="email" placeholder="Email Address" required />
                                </div>
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-zinc-700 dark:text-zinc-300"
                                        for="password">
                                        Password
                                    </label>
                                    <input v-model="form.password"
                                        class="w-full px-3 py-2 mb-3 leading-tight border rounded shadow appearance-none text-zinc-700 dark:text-zinc-300 focus:outline-none focus:shadow-outline"
                                        id="password" type="password" placeholder="Password" required />
                                </div>
                                <div class="flex items-center justify-between mb-6">
                                    <label class="inline-flex items-center text-sm text-zinc-600 dark:text-zinc-400">
                                        <input v-model="form.remember" type="checkbox"
                                            class="text-purple-600 form-checkbox dark:text-purple-400" />
                                        <span class="ml-2">Remember Me</span>
                                    </label>
                                    <Link v-if="canResetPassword"
                                        class="inline-block text-sm font-bold text-purple-600 align-baseline dark:text-purple-400 hover:text-purple-800 dark:hover:text-purple-600"
                                        :href="route('password.request')">
                                    Forgot Password?
                                    </Link>
                                </div>
                                <div class="mb-4">
                                    <button
                                        class="w-full px-4 py-2 font-bold text-white bg-purple-700 rounded dark:bg-purple-500 hover:bg-purple-800 dark:hover:bg-purple-600 focus:outline-none focus:shadow-outline"
                                        type="submit" :disabled="isSubmitting">
                                        {{ isSubmitting ? 'Logging in...' : 'LOGIN' }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <Toast />
    </div>


</template>
