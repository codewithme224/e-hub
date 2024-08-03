<template>
    <div class="min-h-screen text-white bg-gradient-to-br from-gray-900 via-[#4E3D5F] to-gray-900">
      <div class="container p-6 mx-auto">
        <div class="flex items-center justify-between mb-8">
          <div class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">E-HUB</div>
          <div class="flex items-center p-4 bg-purple-900 bg-opacity-50 rounded-lg shadow-lg backdrop-filter backdrop-blur-lg animate-fadeIn">
            <img src="/assets/images/module/student.png" alt="Avatar" class="w-12 h-12 mr-4 border-2 border-pink-500 rounded-full" />
            <div>
              <p class="text-lg font-semibold">Welcome back, John!</p>
              <p class="text-sm text-gray-300">Always stay updated in your student portal</p>
            </div>
          </div>
        </div>
        <div class="mb-12 text-center animate-slideUp">
          <h1 class="mb-4 text-5xl font-bold">
            Select <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-500">a module</span> and <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">make an impact</span>.
          </h1>
          <!-- <p class="max-w-2xl mx-auto mt-4 text-gray-300">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus in libero risus semper habitant arcu eget. Et integer facilisi eget.
          </p> -->
        </div>
        <div v-if="!currentModule" class="animate-fadeIn">
            <!-- Dashboard content remains unchanged -->
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
              <div v-for="module in modules" :key="module.id"
                   @click="selectModule(module)"
                   class="p-6 text-center transition-all duration-300 transform rounded-lg shadow-lg cursor-pointer bg-gradient-to-br from-gray-800 to-gray-900 hover:scale-105 hover:shadow-2xl group animate-fadeIn">
                <div class="relative p-1 mx-auto mb-4 overflow-hidden h-30 w-30 bg-gradient-to-r from-[#BEA7A7] to-#4E3D5F">
                  <img :src="module.icon" alt="Module Icon" class="h-full transition-transform duration-300 transform w-[300px] group-hover:scale-110" />
                </div>
                <h2 class="mb-2 text-xl font-bold transition-all duration-300 bg- group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-purple-400 group-hover:to-pink-600">{{ module.title }}</h2>
              </div>
            </div>
          </div>

          <!-- Module View -->
      <div v-else class="animate-fadeIn">
        <button @click="backToDashboard" class="mb-4 text-purple-400 hover:text-purple-300">
          &larr; Back to Dashboard
        </button>
        <h2 class="mb-4 text-3xl font-bold">{{ currentModule.title }}</h2>
        <div v-if="currentModule.externalUrl">
          <p>You are being redirected to the external LMS. If you are not redirected, please click the button below:</p>
          <a :href="currentModule.externalUrl" target="_blank" class="inline-block px-6 py-3 mt-4 text-lg font-semibold text-white transition-all duration-300 transform rounded-full shadow-lg bg-gradient-to-r from-purple-500 to-pink-500 hover:from-pink-500 hover:to-purple-500 hover:scale-105 hover:shadow-xl">
            Go to LMS
          </a>
        </div>
        <p v-else>This is the {{ currentModule.title }} module. Add your module-specific content here.</p>
      </div>
        <div class="mt-12 text-center animate-fadeIn">
          <button class="px-6 py-3 text-lg font-semibold text-white transition-all duration-300 transform rounded-full shadow-lg bg-gradient-to-r from-purple-500 to-pink-500 hover:from-pink-500 hover:to-purple-500 hover:scale-105 hover:shadow-xl">
            Explore more
          </button>
        </div>
      </div>
    </div>
  </template>

  <script>
import { ref, onMounted, watch } from 'vue';

export default {
  setup() {
    const currentModule = ref(null);

    const selectModule = (module) => {
      currentModule.value = module;
      if (module.externalUrl) {
        window.open(module.externalUrl, '_blank');
      }
    };

    const backToDashboard = () => {
      currentModule.value = null;
    };

    return { currentModule, selectModule, backToDashboard };
  },
  data() {
    return {
      modules: [
        { id: 1, title: "School Management System", icon: "/assets/images/module/sms.png" , externalUrl: "https://innovatechsolutn.com/"},
        { id: 2, title: "Learning Management System", icon: "/assets/images/module/lms.png" },
        { id: 3, title: "Super Admin Dashboard", icon: "/assets/images/module/admin.png" , externalUrl: "https://ges.ehubs.io/"},
        { id: 4, title: "E Hub Community", icon: "/assets/images/module/sms.png" },
        { id: 5, title: "Teachers Portal", icon: "/assets/images/module/pt.png" },
        { id: 6, title: "Student Dashboard (PIM)", icon: "/assets/images/module/sd.png" },
        { id: 7, title: "PIM", icon: "/assets/images/module/pim.png" },
        { id: 8, title: "Inventory Module", icon: "/assets/images/module/pt.png" },
        { id: 9, title: "Procurement Module", icon: "/assets/images/module/pm.png" },
        { id: 10, title: "Project Tracker", icon: "/assets/images/module/pt.png" },
        { id: 11, title: "Finance Module", icon: "/assets/images/module/finance.png" },
        { id: 12, title: "HR Module", icon: "/assets/images/module/hr.png" },
        { id: 13, title: "Hostel Management", icon: "/assets/images/module/hostel.png" },
        { id: 14, title: "AVA AI", icon: "/assets/images/module/ai.png" },
        { id: 15, title: "Store", icon: "/assets/images/module/store.png" },
        { id: 16, title: "Staff Management", icon: "/assets/images/module/staff.png" },
      ],
    };
  },
};
</script>
  <style scoped>
  @keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
  }

  @keyframes slideUp {
    from { transform: translateY(20px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
  }

  .animate-fadeIn {
    animation: fadeIn 0.5s ease-out;
  }

  .animate-slideUp {
    animation: slideUp 0.5s ease-out;
  }
  </style>
