<script setup>
 import { Link } from "@inertiajs/vue3";
</script>

<template>
   <div class="w-full max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-gray-700 text-center">Registration Form</h2>
        <p class="text-center text-gray-500 mt-2">Already have an account? <Link :href="route('login')" class="text-orange-500">Login</Link></p>
        
        <form class="mt-8 space-y-4">
            <div class="flex flex-col md:flex-row md:space-x-4">
                <div class="flex-1">
                    <label for="schoolName" class="block text-sm font-medium text-gray-700">School name</label>
                    <input type="text" id="schoolName" name="schoolName" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="flex-1 mt-4 md:mt-0">
                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                    <div class="relative mt-1">
                        <input type="text" id="address" name="address" class="p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                          <i class="fa-solid fa-location-dot"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Enter Email *</label>
                <input type="email" id="email" name="email" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="confirmEmail" class="block text-sm font-medium text-gray-700">Confirm Email *</label>
                <input type="email" id="confirmEmail" name="confirmEmail" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number *</label>
                <input type="tel" id="phone" name="phone" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="flex flex-col md:flex-row md:space-x-4 items-center">
                <div class="flex-1 mt-4 md:mt-0">
                    <label class="block text-sm font-medium text-gray-700">Upload School Logo</label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M28 8H20a4 4 0 00-4 4v1H8v26h32V13h-8V8a4 4 0 00-4-4zm-4 0a2 2 0 012 2v1H18V10a2 2 0 012-2zm12 11H12v1h24v-1zm0 2H12v10h24V21zm0 12H12v2h24v-2zm0-24v2h6V9h-6z" fill="none" stroke-width="2"/>
                            </svg>
                            <div class="flex text-sm text-gray-600">
                                <label for="logo" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                    <span>Upload a file</span>
                                    <input id="logo" name="logo" type="file" class="sr-only">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </form>
      </div>
  </template>

  <script>
  export default {
    name: 'Step2'
  };
  </script>

<style>
.custom-gradient {
    background: linear-gradient(180deg, #F5AD54, #6466F1);
}
</style>
