<template>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mr-[-200px]">
        <!-- Card 1 -->
        <div class="bg-gradient-custom p-6 rounded-lg shadow-lg text-white">
            <h3 class="text-2xl font-bold">GH₵ 310<span class="text-lg">/MONTH</span></h3>
            <p class="mt-2 text-sm">FOR SCHOOLS WITH 2000-5000 STUDENTS</p>
            <ul class="mt-4 space-y-2">
                <li class="flex items-center">
                    <div class="bg-green-500 rounded-full">
                      <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    </div>
                    <span class="ml-2">Learning Management System</span>
                </li>
                <li class="flex items-center">
                  <div class="bg-green-500 rounded-full">
                      <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    </div>
                    <span class="ml-2">School Management System</span>
                </li>
                <li class="flex items-center">
                  <div class="bg-green-500 rounded-full">
                      <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    </div>
                    <span class="ml-2">Information Management System</span>
                </li>
            </ul>
            <button class="mt-6 bg-black text-white py-2 px-4 rounded-lg">Choose plan</button>
        </div>
        
        <!-- Card 2 -->
        <div class="bg-gradient-custom p-6 rounded-lg shadow-lg text-white">
            <h3 class="text-2xl font-bold">GH₵ 600<span class="text-lg">/MONTH</span></h3>
            <p class="mt-2 text-sm">FOR SCHOOLS WITH 5000-8000 STUDENTS</p>
            <ul class="mt-4 space-y-2">
                <li class="flex items-center">
                    <div class="bg-green-500 rounded-full">
                      <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    </div>
                    <span class="ml-2">Learning Management System</span>
                </li>
                <li class="flex items-center">
                    <div class="bg-green-500 rounded-full">
                      <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    </div>
                    <span class="ml-2">School Management System</span>
                </li>
                <li class="flex items-center">
                    <div class="bg-green-500 rounded-full">
                      <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    </div>
                    <span class="ml-2">Information Management System</span>
                </li>
            </ul>
            <button class="mt-6 bg-black text-white py-2 px-4 rounded-lg">Choose plan</button>
        </div>
        
        <!-- Card 3 -->
        <div class="bg-gradient-custom p-6 rounded-lg shadow-lg text-white">
            <h3 class="text-2xl font-bold">GH₵ 800<span class="text-lg">/MONTH</span></h3>
            <p class="mt-2 text-sm">FOR SCHOOLS WITH 8000+ STUDENTS</p>
            <ul class="mt-4 space-y-2">
                <li class="flex items-center">
                    <div class="bg-green-500 rounded-full">
                      <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    </div>
                    <span class="ml-2">Learning Management System</span>
                </li>
                <li class="flex items-center">
                    <div class="bg-green-500 rounded-full">
                      <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    </div>
                    <span class="ml-2">School Management System</span>
                </li>
                <li class="flex items-center">
                    <div class="bg-green-500 rounded-full">
                      <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    </div>
                    <span class="ml-2">Information Management System</span>
                </li>
            </ul>
            <button class="mt-6 bg-black text-white py-2 px-4 rounded-lg">Choose plan</button>
        </div>
    </div>

    <div class="flex justify-center mt-10">
        <button @click="toggleModal" type="button" class="bg-[#5730F6] text-white py-2 px-6 rounded-lg hover:bg-[#4428d6]">Customize package</button>
    </div>

<!-- Modal -->
<div>
    <transition name="fade">
      <div v-if="showModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white p-8 rounded-lg shadow-md relative w-full md:w-2/3 lg:w-1/2">
          

          <!-- Three cards -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div v-for="(card, index) in cards" :key="index" class="relative border border-gray-200 rounded-lg overflow-hidden">
              <img :src="card.image" alt="Card Image" class="w-full h-40 object-cover" />
              <input type="checkbox" class="absolute top-2 right-2" />
              <p class="p-4 text-sm">{{ card.text }}</p>
            </div>
          </div>

          <!-- Input field and button -->
          <div class="mt-6">
            <label for="student-count" class="block text-sm font-medium text-gray-700">How many students do you have?</label>
            <input type="number" id="student-count" v-model="studentCount" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            <div class="flex justify-end">
              <button @click="proceed" class="mt-4 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Proceed</button>
            <button type="button" @click="toggleModal" class="mt-4 bg-red-500 hover:bg-red-600 text-white py-2 px-4 ml-5 rounded-md items-end">Close</button>
            </div>
          </div>
        </div>
      </div>
    </transition>
  </div>
  </template>

<script>
import Customize from "./Customize.vue";

export default {
  components: {
    Customize
  },
  data() {
      return {
        showModal: false,
        cards: [
          { image: "assets/images/cus1.png", text: "Learning management system " },
          { image: "assets/images/cus2.png", text: "School management system " },
          { image: "assets/images/cus3.png", text: "Information management system " }
        ],
        studentCount: ""
      };
    },
    methods: {
    toggleModal() {
      this.showModal = !this.showModal;
    },
    proceed() {
      // Handle the proceed button click
    }
  },
  name: 'Step1'
};
</script>

<style>
.bg-gradient-custom {
    background: linear-gradient(180deg, #6466F1, #F5AD54);
}
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter, .fade-leave-to {
  opacity: 0;
}
</style>
