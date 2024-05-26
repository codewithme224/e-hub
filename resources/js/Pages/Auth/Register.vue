<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const form = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});

const submit = () => {
    form.post(route("register"), {
        onFinish: () => form.reset("password", "password_confirmation"),
    });
};
</script>

<template>
    
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
        <div class="w-full lg:w-1/2  lg:ml-[350px]">
            <div class="p-8">
                <div class="mb-4">
                    <div class="relative ml-[600px] h-8 w-8 rounded-full flex justify-start bg-[#F6AD2B66]"></div>
                    <h1 class="text-bold text-4xl mb-1 text-[#5730F6]">{{ currentStepTitle }}</h1>
                    <p class="mb-5 text-[#5730F6]">{{ currentStepSubTitle }}</p>
                    <div class="relative pt-1">
                        <div class="flex items-center justify-between mb-2">
                            <template v-for="(step, index) in steps" :key="index">
                                <div
                                    :class="[
                                        'w-8 h-8 flex items-center justify-center rounded-lg',
                                        index <= currentStep
                                            ? 'bg-[#5730F6] text-white'
                                            : 'bg-gray-200 text-gray-500',
                                    ]"
                                >
                                    {{ index + 1 }}
                                </div>
                                <div
                                    v-if="index < steps.length - 1"
                                    class="flex-1 h-2.5 "
                                    :class="
                                        index < currentStep
                                            ? 'bg-[#5730F6]'
                                            : 'bg-gray-200'
                                    "
                                ></div>
                            </template>
                        </div>
                    </div>
                </div>

                <form @submit.prevent="submitForm">
                    <div
                        v-for="(step, index) in steps"
                        :key="index"
                        v-show="index === currentStep"
                    >
                        <component :is="step"></component>
                    </div>

                    <div class="flex justify-between mt-4">
                        <button
                            type="button"
                            @click="prevStep"
                            class="px-4 py-2 text-white bg-gray-500 rounded hover:bg-gray-700"
                            :class="{ hidden: currentStep === 0 }"
                        >
                            Previous
                        </button>
                        <button
                            type="button"
                            @click="nextStep"
                            class="bg-custom-gradient px-4 py-2 text-white  rounded hover:bg-blue-700"
                            :class="{
                                hidden: currentStep === steps.length - 1,
                            }"
                        >
                            Next
                        </button>
                        <button
                            type="submit"
                            class="px-4 py-2 text-white bg-green-500 rounded hover:bg-green-700"
                            :class="{
                                hidden: currentStep !== steps.length - 1,
                            }"
                        >
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import Step1 from "./Forms/Step1.vue";
import Step2 from "./Forms/Step2.vue";
import Step3 from "./Forms/Step3.vue";
import Step4 from "./Forms/Step4.vue";


export default {
    components: {
        Step1,
        Step2,
        Step3,
        Step4,
    },
    data() {
        return {
            currentStep: 0,
            steps: ["Step1", "Step2", "Step3", "Step4"],
            stepTitles: ["Our packages", "Let’s get started", "We are almost there", "Signup Completed"],
            stepSubTitles: ["Look through our packages and select the one within your scope", "School Details", "Payment Details", "Congrats"],
        };
    },
    computed: {
        currentStepTitle() {
            return this.stepTitles[this.currentStep];
        },
        currentStepSubTitle() {
            return this.stepSubTitles[this.currentStep];
        }
    },
    methods: {
        nextStep() {
            if (this.currentStep < this.steps.length - 1) {
                this.currentStep++;
            }
        },
        prevStep() {
            if (this.currentStep > 0) {
                this.currentStep--;
            }
        },
        submitForm() {
            alert("Form submitted!");
        },
    },
};
</script>

<style>
.hidden {
    display: none;
}
.block {
    display: block;
}

@media (max-width: 768px) {
  .hide-medium {
    display: none;
  }
}

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
