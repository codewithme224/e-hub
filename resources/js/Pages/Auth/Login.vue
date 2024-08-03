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

        <div v-if="status" class="mb-4 text-sm font-medium text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="block w-full mt-1"
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
                    class="block w-full mt-1"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="text-sm text-gray-600 ms-2">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
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

                <div class="flex items-center justify-center min-h-screen">
  <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-lg">
    <h1 class="mb-2 text-2xl font-bold text-purple-700 dark:text-purple-600">Welcome to E-Hub</h1>
    <p class="mb-6 text-sm text-zinc-600 dark:text-zinc-400">Login the right Credentials</p>
    <form>
      <div class="mb-4">
        <label class="block mb-2 text-sm font-bold text-zinc-700 dark:text-zinc-300" for="email">
          Email Address
        </label>
        <input
          class="w-full px-3 py-2 leading-tight border rounded shadow appearance-none text-zinc-700 dark:text-zinc-300 focus:outline-none focus:shadow-outline"
          id="email"
          type="email"
          placeholder="Email Address"
        />
      </div>
      <div class="mb-4">
        <label
          class="block mb-2 text-sm font-bold text-zinc-700 dark:text-zinc-300"
          for="school-name"
        >
          School Name
        </label>
        <input
          class="w-full px-3 py-2 leading-tight border rounded shadow appearance-none text-zinc-700 dark:text-zinc-300 focus:outline-none focus:shadow-outline"
          id="school-name"
          type="text"
          placeholder="School Name"
        />
      </div>
      <div class="mb-4">
        <label class="block mb-2 text-sm font-bold text-zinc-700 dark:text-zinc-300" for="password">
          Password
        </label>
        <input
          class="w-full px-3 py-2 mb-3 leading-tight border rounded shadow appearance-none text-zinc-700 dark:text-zinc-300 focus:outline-none focus:shadow-outline"
          id="password"
          type="password"
          placeholder="Password"
        />
      </div>
      <div class="flex items-center justify-between mb-6">
        <label class="inline-flex items-center text-sm text-zinc-600 dark:text-zinc-400">
          <input type="checkbox" class="text-purple-600 form-checkbox dark:text-purple-400" />
          <span class="ml-2">Remember Me</span>
        </label>
        <Link
          class="inline-block text-sm font-bold text-purple-600 align-baseline dark:text-purple-400 hover:text-purple-800 dark:hover:text-purple-600"
          :href="route('password.request')"
        >
          Forgot Password?
    </Link>
      </div>
      <div class="mb-4">
        <button
          class="w-full px-4 py-2 font-bold text-white bg-purple-700 rounded dark:bg-purple-500 hover:bg-purple-800 dark:hover:bg-purple-600 focus:outline-none focus:shadow-outline"
          type="button"
        >
        <Link :href="route('module')">
            LOGIN
        </Link>
        </button>
      </div>
      <div class="flex items-center justify-center mb-4">
        <hr class="w-full border-zinc-300 dark:border-zinc-600" />
        <span class="absolute px-4 bg-white text-zinc-600 dark:text-zinc-400"
          >Or Login with</span
        >
      </div>
      <div class="flex justify-center mb-4">
        <button
          class="bg-white"
          type="button"
        >
          <img src="assets/images/google.png" alt="Google" class="inline-block w-8 h-8 mr-2" />
        </button>
        <button
          class="bg-white"
          type="button"
        >
          <img src="assets/images/facebook.png" alt="Facebook" class="inline-block w-8 h-8 mr-2" />
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
