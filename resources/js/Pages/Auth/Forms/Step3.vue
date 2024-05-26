<template>
  <div class="bg-gray-100 flex items-center justify-center min-h-screen p-4">
    <div class="w-full max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
      <h2 class="text-2xl font-bold text-gray-700 text-center">Payment Methods</h2>
      <div class="flex justify-center mt-6 mb-4 space-x-4">
        <button
          type="button"
          v-for="method in methods"
          :key="method.name"
          :class="[
            'flex flex-col items-center p-4 border rounded-lg cursor-pointer',
            selectedMethod === method.name ? 'border-indigo-500' : 'border-gray-300'
          ]"
          @click="selectMethod(method.name)"
        >
          <img :src="method.icon" :alt="method.name" class="h-8 mb-2">
          <span>{{ method.label }}</span>
        </button>
      </div>
      
      <form @submit.prevent="submitForm">
        <div v-if="selectedMethod === 'card'" class="space-y-4">
          <div>
            <input type="text" placeholder="First Name" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
          <div>
            <input type="text" placeholder="Last Name" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
          <div>
            <input type="text" placeholder="Card Number" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
          <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4">
              <input type="text" placeholder="Expiry" class="mt-1 p-2 flex-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              <input type="text" placeholder="CVC" class="mt-1 p-2 flex-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>

          <div>
            <label class="inline-flex items-center">
              <input type="checkbox" class="form-checkbox h-5 w-5 text-indigo-600">
              <span class="ml-2 text-gray-700">Terms and conditions</span>
            </label>
          </div>
        </div>
        <div v-else class="space-y-4">
          <div>
            <input type="text" placeholder="Name" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
          <div>
            <input type="text" placeholder="Phone" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
          <div>
            <select class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              <option disabled selected>Select Carrier</option>
              <option value="MTN">MTN</option>
              <option value="Telecel">Telecel</option>
              <option value="AirtelTigo">AirtelTigo</option>
            </select>
          </div>
          <div>
            <input type="email" placeholder="Email" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
        </div>
        <div class="flex justify-center mt-6">
          <button type="submit" class="bg-custom-gradient text-white py-2 px-6 rounded-lg hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            CONFIRM PAYMENT
          </button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  
  data() {
    return {
      selectedMethod: 'card',
      methods: [
        { name: 'card', label: 'Card', icon: 'assets/images/credit-card.png' },
        { name: 'mobileMoney', label: 'Mobile Money', icon: 'assets/images/momo.png' },
        { name: 'paypal', label: 'Paypal', icon: 'assets/images/paypal.png' }
      ]
    };
  },
  name: 'Step3',
  methods: {
    selectMethod(method) {
      this.selectedMethod = method;
    },
    submitForm() {
      alert('Payment confirmed!');
    }
  }
};
</script>

