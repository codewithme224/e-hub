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
    <!-- <GuestLayout>
        <Head title="Register" />

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="name" value="Name" />

                <TextInput
                    id="name"
                    type="text"
                    class="block w-full mt-1"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="block w-full mt-1"
                    v-model="form.email"
                    required
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
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel for="password_confirmation" value="Confirm Password" />

                <TextInput
                    id="password_confirmation"
                    type="password"
                    class="block w-full mt-1"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    :href="route('login')"
                    class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Already registered?
                </Link>

                <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout> -->

    <div class="flex items-center justify-end h-screen bg-gray-100">
        <div class="absolute h-screen w-1/2 bg-[#5730F6] transform -translate-x-full rotate-45 origin-bottom-left"></div>
        <div class="w-1/2">
            <div class="p-8 bg-white rounded-lg shadow-md">
                <div class="mb-4">
                    <div class="relative pt-1">
                        <div class="flex items-center justify-between mb-2">
                            <template v-for="(step, index) in steps" :key="index">
                                <div
                                    :class="[
                                        'w-8 h-8 flex items-center justify-center rounded-full',
                                        index <= currentStep
                                            ? 'bg-blue-500 text-white'
                                            : 'bg-gray-200 text-gray-500',
                                    ]"
                                >
                                    {{ index + 1 }}
                                </div>
                                <div
                                    v-if="index < steps.length - 1"
                                    class="flex-1 h-2.5 mx-1"
                                    :class="
                                        index < currentStep
                                            ? 'bg-blue-500'
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
                            class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700"
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
        };
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
</style>
