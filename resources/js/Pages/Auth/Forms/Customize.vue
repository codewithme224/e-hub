<template>
    <div>
      
      
      <transition name="fade">
        <div v-if="showModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
          <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-2/3 lg:w-1/2">
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
              <button @click="proceed" class="mt-4 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Proceed</button>
            </div>
          </div>
        </div>
      </transition>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        showModal: false,
        cards: [
          { image: "path/to/image1.jpg", text: "Card 1 text" },
          { image: "path/to/image2.jpg", text: "Card 2 text" },
          { image: "path/to/image3.jpg", text: "Card 3 text" }
        ],
        studentCount: ""
      };
    },
    name: "Customize",
    methods: {
      toggleModal() {
        this.showModal = !this.showModal;
      },
      proceed() {
        // Handle the proceed button click
      }
    }
  };
  </script>
  
  <style>
  .fade-enter-active, .fade-leave-active {
    transition: opacity 0.5s;
  }
  .fade-enter, .fade-leave-to {
    opacity: 0;
  }
  </style>
  