<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref } from 'vue';
    defineProps({
        canLogin: {
            type: Boolean,
        },
        canRegister: {
            type: Boolean,
        },
        laravelVersion: {
            type: String,
            required: true,
        },
        phpVersion: {
            type: String,
            required: true,
        },
    });

    function handleImageError() {
        document.getElementById('screenshot-container')?.classList.add('!hidden');
        document.getElementById('docs-card')?.classList.add('!row-span-1');
        document.getElementById('docs-card-content')?.classList.add('!flex-row');
        document.getElementById('background')?.classList.add('!hidden');
    }
</script>



<template>

    <header >

        <nav class="mt-5">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <Link :href="route('welcome')" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img class="w-12 " src="assets/images/logo.png" alt="">
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-[#6640FF]">E-HUB</span>
                    </Link>
                    <button @click="toggleMenu" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-100 dark:hover:text-blue-700 dark:focus:ring-blue-600" aria-controls="navbar-default" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                    <div v-show="!showMenu" class=" w-full md:block md:w-auto" id="navbar-default">
                    <ul class="font-medium flex  flex-col p-4 md:p-0 mt-4 border  md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                        <li>
                        <a href="#" class="block text-[20px] py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Home</a>
                        </li>
                        <li>
                        <a href="#" class="block py-2 px-3 text-[20px] text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                        </li>
                        <li>
                        <a href="#" class="block py-2 px-3 text-[20px] text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                        </li>
                        <li>
                        <a href="#" class="block py-2 px-3 text-[20px] text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                        </li>
                        <li>
                        <a href="#" class="block py-2 px-3 text-[20px] text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Features</a>
                        </li>
                        <li>
                            <Link
                                    :href="route('login')"
                                    class=" py-2 text-black w-[130px] ring-1 ring-transparent transition hover:text-black/70 bg-white rounded-3xl focus:outline-none px-[30px] focus-visible:ring-[#FF2D20] dark:text-[#6640FF] dark:hover:text-[#6640FF] dark:focus-visible:ring-white"
                                >
                                    Sign in
                                </Link>
                        </li>
                    </ul>
                    </div>
                </div>
        </nav>
    </header>
</template>

<script>
    export default {
    data() {
        return {
            isOpen: false,
            showMenu: false,
        };
    },
    methods: {
        toggleMenu() {
            this.showMenu = !this.showMenu;
        },
    },
};
</script>