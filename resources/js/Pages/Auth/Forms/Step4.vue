<template>
    <div class="max-w-md mx-auto  rounded-xl shadow-md overflow-hidden md:max-w-2xl gradient-animation bg-gradient-to-l from-teal-400 to-gray-800">
  <div class="md:flex">
    <div class="md:flex-shrink-0">
      <img class="h-48 w-full object-cover md:w-48" src="assets/images/congrats.png" alt="Congratulations Image">
    </div>
    <div class="p-8">
      <div class="uppercase tracking-wide text-xl lg:text-3xl text-white font-semibold">Congratulations</div>
      <p class="mt-2 text-orange-500 text-lg">You have completed the sign up process.</p>
    </div>
  </div>
</div>

  </template>

  <script>
  export default {
    name: 'Step4'
  };
  </script>

<style>


.gradient-animation {
            background-size: 200% 200%;
            animation: gradientBG 4s ease infinite;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

</style>
