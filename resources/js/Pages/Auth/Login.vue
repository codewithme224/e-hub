<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <!-- <GuestLayout>
        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ms-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Forgot your password?
                </Link>

                <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout> -->


    <Link :href="route('welcome')" class="relative flex justify-end mr-5">
                        <img class="w-12 " src="assets/images/logo.png" alt="">
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-[#6640FF]">E-HUB</span>
                        
                    </Link>
    <div class="flex items-center justify-center ">
        <div class="hide-medium md:block lg:block absolute top-0 h-[800px] w-1/2 bg-[#5730F6] transform -translate-x-full rounded-[50px] rotate-45 ml-[100px]">
            <div class="absolute ml-[400px] w-[300px] h-auto flex items-center justify-center transform -rotate-45">
                <img
                    src="assets/images/step-img.png"
                    alt="Education Illustration"
                    class="max-w-sm mx-auto  lg:mx-30 w-[900px] h-[500px]"
                />
            </div>
        </div>
        <div class="w-full lg:w-1/2  lg:ml-[380px]">
            <div class="p-8">
                <div class="mb-4">
                    <div class="relative ml-[600px] h-8 w-8 rounded-full flex justify-start bg-[#F6AD2B66]"></div>
                    
                </div>

                <div class="min-h-screen flex items-center justify-center">
  <div class="bg-white rounded-lg shadow-lg p-8 max-w-md w-full">
    <h1 class="text-2xl font-bold text-purple-700 dark:text-purple-600 mb-2">Welcome to E-Hub</h1>
    <p class="text-sm text-zinc-600 dark:text-zinc-400 mb-6">Login the right Credentials</p>
    <form>
      <div class="mb-4">
        <label class="block text-zinc-700 dark:text-zinc-300 text-sm font-bold mb-2" for="email">
          Email Address
        </label>
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-zinc-700 dark:text-zinc-300 leading-tight focus:outline-none focus:shadow-outline"
          id="email"
          type="email"
          placeholder="Email Address"
        />
      </div>
      <div class="mb-4">
        <label
          class="block text-zinc-700 dark:text-zinc-300 text-sm font-bold mb-2"
          for="school-name"
        >
          School Name
        </label>
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-zinc-700 dark:text-zinc-300 leading-tight focus:outline-none focus:shadow-outline"
          id="school-name"
          type="text"
          placeholder="School Name"
        />
      </div>
      <div class="mb-4">
        <label class="block text-zinc-700 dark:text-zinc-300 text-sm font-bold mb-2" for="password">
          Password
        </label>
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-zinc-700 dark:text-zinc-300 mb-3 leading-tight focus:outline-none focus:shadow-outline"
          id="password"
          type="password"
          placeholder="Password"
        />
      </div>
      <div class="flex items-center justify-between mb-6">
        <label class="inline-flex items-center text-sm text-zinc-600 dark:text-zinc-400">
          <input type="checkbox" class="form-checkbox text-purple-600 dark:text-purple-400" />
          <span class="ml-2">Remember Me</span>
        </label>
        <Link
          class="inline-block align-baseline font-bold text-sm text-purple-600 dark:text-purple-400 hover:text-purple-800 dark:hover:text-purple-600"
          :href="route('password.request')"
        >
          Forgot Password?
    </Link>
      </div>
      <div class="mb-4">
        <button
          class="bg-purple-700 dark:bg-purple-500 hover:bg-purple-800 dark:hover:bg-purple-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full"
          type="button"
        >
          LOGIN
        </button>
      </div>
      <div class="flex items-center justify-center mb-4">
        <hr class="w-full border-zinc-300 dark:border-zinc-600" />
        <span class="absolute bg-white  px-4 text-zinc-600 dark:text-zinc-400"
          >Or Login with</span
        >
      </div>
      <div class="flex justify-center mb-4">
        <button
          class="bg-white"
          type="button"
        >
          <img src="assets/images/google.png" alt="Google" class="inline-block mr-2 h-8 w-8" /> 
        </button>
        <button
          class="bg-white"
          type="button"
        >
          <img src="assets/images/facebook.png" alt="Facebook" class="inline-block mr-2 h-8 w-8" /> 
        </button>
      </div>
      <div class="text-center text-zinc-600 dark:text-zinc-400">
        <span>Don't have an account? </span>
        <Link
          class="font-bold text-purple-600 dark:text-purple-400 hover:text-purple-800 dark:hover:text-purple-600"
          :href="route('register')"
        >
          Register Now
      </Link>
      </div>
    </form>
  </div>
</div>

            </div>
        </div>
    </div>
</template>
