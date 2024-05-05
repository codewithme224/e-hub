<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import Header from '@/Layouts/Header.vue';



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
    <Head title="Welcome" />
    <div class="bg-gray-50 text-black/50 dark:bg-white dark:text-white/50 h-[850px]">
        <div class="absolute transform -rotate-45  top-[-600px] rounded-l-[130px] rounded-br-md  right-[-770px] bg-[#FFC961]  w-[1400px] h-[1150px]">
        </div>

        <div
            class="relative  flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white"
        >
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <Header />

                <main class="mt-6">              
                    <div class="relative overflow-hidden">
                        <div class="container mx-auto px-6 py-12">
                            <div class="flex flex-wrap lg:flex-nowrap items-center">
                                <div class="w-full lg:w-1/2">
                                <h1 class="text-4xl font-bold text-zinc-800 dark:text-black mb-2">
                                    Empowering Education, One Click At A Time!
                                </h1>
                                <p class="text-black dark:text-black  mb-6 ">
                                    E-Hub Is A Hub That Bring Schools Closer To Achieving Maximum Productivity
                                </p>
                                <Link
                                    :href="route('register')"
                                    class="bg-gradient-to-r from-[#FFC961] to-[#3D2699] text-white px-6 py-3 rounded-full shadow-lg md:shadow-2xl hover:bg-purple-700 transition-colors"
                                >
                                    SIGN UP NOW
                                </Link>
                                <div class="mt-4">
                                    <Link :href="route('login')" class="text-gray-600 hover:underline">Already Using E-HUB? <span class="text-purple-600">Sign In</span></Link>
                                </div>
                                <div class="flex items-center space-x-4 mt-6">
                                    <div class="flex -space-x-4 rtl:space-x-reverse justify-center">
                                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://images.unsplash.com/photo-1531727991582-cfd25ce79613?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGJsYWNrJTIwZ2lybCUyMHByb2Zlc3Npb25hbHxlbnwwfHwwfHx8MA%3D%3D" alt="">
                                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://images.unsplash.com/photo-1522512115668-c09775d6f424?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGJsYWNrJTIwZ2lybCUyMHByb2Zlc3Npb25hbHxlbnwwfHwwfHx8MA%3D%3D" alt="">
                                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://media.istockphoto.com/id/1785050262/photo/young-african-schoolgirl-working-on-digital-tablet-and-smiling.webp?b=1&s=170667a&w=0&k=20&c=MztI3eUy1iGxANgnRhmQLYb_L-5_ElFcGjlXfzx19Z4=" alt="">
                                        <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+99</a>
                                    </div>
                                    <div class="">
                                        <p class="text-black text-xl font-bold ">2,291</p>
                                        <span class=" text-zinc-500 text-sm">Happy Customers</span> 
                                    </div>
                                    <div >
                                        <p class="font-bold text-black text-lg">4.8/5</p>
                                        <span class="text-purple-600">★★★★☆</span> 
                                    </div>
                                </div>
                                </div>
                                <div class="w-full h-full  mt-32 lg:mt-0">
                                    <img
                                        src="assets/images/hero-img.png"
                                        alt="Education Illustration"
                                        class="max-w-sm mx-auto lg:mx-30 w-[1200px] h-[500px] lg:ml-auto"
                                    />
                               
                            </div>
                        </div>
                        </div>
                    </div>
                </main>
    
            </div>
        </div>
 
    </div>
    <div class=" flex items-center justify-center mt-[350px]">
        <div class="max-w-6xl mx-auto px-4   py-8">
            <h1 class="text-4xl font-bold text-center mb-12">One Platform For Any School</h1>
            <div class="grid grid-cols-1 text-center md:grid-cols-3 gap-6">
                <div class="space-y-6">
                    <div class="p-4 bg-white shadow rounded-lg">
                    <h2 class="text-lg font-semibold flex items-center">
                        <span class="text-white  mr-2"><i class="bg-[#f68d8b] rounded-full p-2 fa-solid fa-briefcase"></i></span> Appointments
                    </h2>
                    <p>Many desktop publishing packages and web page editors now use for them.</p>
                    </div>
                    <div class="p-4 bg-white shadow rounded-lg">
                    <h2 class="text-lg font-semibold flex items-center">
                        <span class="text-white mr-2"><i class="bg-[#00e676] rounded-full p-2 fa-solid fa-book"></i></span> Class Bookings
                    </h2>
                    <p>Many desktop publishing packages and web page editors now use for them.</p>
                    </div>
                    <div class="p-4 bg-white shadow rounded-lg">
                    <h2 class="text-lg font-semibold flex items-center">
                        <span class="text-white mr-2"><i class="bg-[#6640FF] rounded-full p-2 fa-solid fa-chart-line"></i></span> Ai And Analytics
                    </h2>
                    <p>Harness the power of data with eHUB's AI and Analytics feature.</p>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-2">
                    <div class="p-4 bg-white shadow rounded-lg mb-6">
                        <h2 class="text-lg font-semibold mb-4">Users Activity</h2>
                        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                    
                    </div>
                    
                </div>
            </div>

            <div class="grid grid-cols-1 bg-[#6640FF] md:grid-cols-3 gap-6 mt-12 rounded-lg">
                <div class="p-4  shadow rounded-lg text-center">
                    <h3 class="text-3xl font-bold text-white">110+</h3>
                    <p class="text-white">Automation Templates For Creating Your Campaigns Quickly</p>
                </div>
                <div class="p-4  shadow rounded-lg text-center">
                    <h3 class="text-3xl font-bold text-white">4M</h3>
                    <p class="text-white">Automation Templates For Creating Your Campaigns Quickly</p>
                </div>
                <div class="p-4  shadow rounded-lg text-center">
                    <h3 class="text-3xl font-bold text-white">99.99%</h3>
                    <p class="text-white">Automation Templates For Creating Your Campaigns Quickly</p>
                </div>
            </div>


            <div class="grid grid-cols-1 mt-[200px] text-center items-center md:grid-cols-2 gap-6">
                <div class="space-y-8 m-5">
                    <div class="p-4 bg-white shadow rounded-lg">
                    <h2 class="text-lg font-semibold flex items-center">
                        <span class="text-white  mr-2"><i class="bg-[#f68d8b] rounded-full p-2 fa-solid fa-briefcase"></i></span> Learning Management System (LMS)
                    </h2>
                    <p>Revolutionize learning with eHUB’s robust Learning Management System. Our LMS provides an interactive platform for teachers and students, facilitating seamless course management, content delivery, and progress tracking. Experience the future of education, personalized and at your fingertips, with eHUB’s LMS.”</p>
                    </div>
                    
                    
                </div>

                <div class="col-span-1 md:col-span-1">
                    
                        <div class="flex justify-center items-center ">
                            <div class="w-[350px] h-[350px] bg-[#6FFFB1] rounded-full mix-blend-multiply"></div>
                            <div class="w-[350px] h-[350px] bg-[#FEEE61] rounded-full mix-blend-multiply -ml-[150px]"></div>
                            <div class=" p-6  absolute z-10">
                                <img src="assets/images/llms.png" alt="LMS" class="rounded-lg w-[450px] h-[350px]">
                            </div>
                        </div>

                    
                </div>
            </div>


            <div class="grid grid-cols-1 mt-[200px] text-center items-center md:grid-cols-2 gap-6">
                
                    <div class="col-span-1 md:col-span-1">
                        
                        <div class="flex justify-center items-center ">
                            <div class="w-[350px] h-[350px] bg-[#FEEE61] rounded-full mix-blend-multiply"></div>
                            <div class="w-[350px] h-[350px] bg-[#FF77D9]  rounded-full mix-blend-multiply -ml-[150px]"></div>
                            <div class=" p-6  absolute z-10">
                                <img src="assets/images/sms.png" alt="LMS" class="rounded-2xl w-[450px] h-[350px]">
                            </div>
                        </div>

                    
                    </div>
                    <div class="space-y-8 m-5">
                        <div class="p-4 bg-white shadow rounded-lg">
                        <h2 class="text-lg font-semibold flex items-center">
                            <span class="text-white  mr-2"><i class="bg-[#f68d8b] rounded-full p-2 fa-solid fa-briefcase"></i></span> School Management Sytem
                        </h2>
                        <p>Pellentesque blandit augue facilisis malesuada interdum eleifend risus, commodo. Egestas senectus vehicula vel consectetur eu. Sit pulvinar urna diam lacus fringilla eu cursus.</p>
                        </div>
                        
                        
                    </div>

                
            </div>

            <div class="grid grid-cols-1 mt-[200px] text-center items-center md:grid-cols-2 gap-6">
                <div class="space-y-8 m-5">
                    <div class="p-4 bg-white shadow rounded-lg">
                    <h2 class="text-lg font-semibold flex items-center">
                        <span class="text-white  mr-2"><i class="bg-[#f68d8b] rounded-full p-2 fa-solid fa-briefcase"></i></span> Personal Information Management System
                    </h2>
                    <p>Pellentesque blandit augue facilisis malesuada interdum eleifend risus, commodo. Egestas senectus vehicula vel consectetur eu. Sit pulvinar urna diam lacus fringilla eu cursus.</p>
                    <button class="bg-[#6640FF] text-white mt-2 flex justify-start p-2 rounded-full px-6">Get Started</button>
                    </div>
                    
                </div>

                <div class="col-span-1 md:col-span-1">
                    
                        <div class="flex justify-center items-center ">
                            <div class="w-[350px] h-[350px] bg-[#6640FF] rounded-full mix-blend-multiply"></div>
                            <div class="w-[350px] h-[350px] bg-[#FF77D9] rounded-full mix-blend-multiply -ml-[150px]"></div>
                            <div class=" p-6  absolute z-10">
                                <img src="assets/images/pim.png" alt="LMS" class="rounded-lg w-[300px] h-[300px]">
                            </div>
                        </div>

                    
                </div>
            </div>

            
            <div class="bg-white p-6 md:p-12 relative bg-map-image" >
                <div style="background-image: url('assets/images/map.png'); opacity: 0.3;"></div>
               <div class="flex justify-center flex-col items-center">
                <p class="text-xs uppercase text-zinc-500 font-semibold tracking-wider mb-1">Trusted By 20,000+ Clients✨✨</p>
            
                <h2 class="text-3xl md:text-4xl font-bold text-zinc-800 mb-6">What Our Client Think About Us?</h2>
               </div>
                <div class="flex justify-center mt-[200px] items-center relative">
                    <div class="relative z-10">
                        <div class="absolute top-0 left-0 w-full h-full flex justify-center items-center">
                            <div
                            class="relative w-64 h-64 rounded-full border-4 border-purple-500 flex justify-center items-center"
                            >
                            <img
                                src="https://placehold.co/100x100"
                                alt="Main testimonial"
                                class="w-24 h-24 rounded-full border-4 border-white shadow-lg"
                            />
                            </div>
                        </div>
                        <div class="flex justify-between items-center w-72 mx-auto">
                            <img
                            src="https://placehold.co/50x50"
                            alt="Client 1"
                            class="w-12 h-12 rounded-full border-2 border-purple-500 shadow"
                            />
                            <img
                            src="https://placehold.co/50x50"
                            alt="Client 2"
                            class="w-12 h-12 rounded-full border-2 border-purple-500 shadow"
                            />
                            <img
                            src="https://placehold.co/50x50"
                            alt="Client 3"
                            class="w-12 h-12 rounded-full border-2 border-purple-500 shadow"
                            />
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center relative mt-[90px]">
                    <div class="text-center flex justify-center flex-col items-center w-[400px] rounded-lg shadow-lg mt-8">
                    <p class="text-sm text-zinc-600">
                    Build your financial literacy within a transparent community. Follow other investors, share
                    insights with people from different professional backgrounds, and never be alone.
                    </p>
                    <p class="text-lg text-zinc-800 font-semibold mt-2">Jony Scotty</p>
                    <p class="text-zinc-500 text-sm">UI Designer</p>
                </div>
                </div>
            </div>

        </div>
    </div>

    

</template>


<script>
    export default {
        mounted() {
            var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
    var yValues = [55, 49, 44, 24, 15];
    var barColors = ["red", "green","blue","orange","brown"];

    new Chart("myChart", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
        backgroundColor: barColors,
        data: yValues,
        barThickness: 10,

        }]
    },
    options: {
                
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                
                cornerRadius: 15 
            }
    });
        }
    }
</script>

<style scoped>
.bg-map-image {
    position: relative;
}

.bg-map-image::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url('assets/images/map.png');
    opacity: 0.5; 
    z-index: -1;
}
</style>