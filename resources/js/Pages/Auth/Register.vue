<template>
    <div>
        <Link :href="route('welcome')" class="relative flex justify-end mr-5">
            <input type="hidden" :value="$page.props.csrf_token" name="_token">
        <img class="w-12" src="assets/images/logo.png" alt="E-HUB Logo">
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-[#6640FF]">E-HUB</span>
        </Link>
        <div class="flex items-center justify-center">
            <div
                class="hide-medium md:block lg:block absolute top-0 h-[800px] w-1/2 bg-[#5730F6] transform -translate-x-full rounded-[50px] rotate-45 ml-[100px]">
                <div class="absolute ml-[400px] w-[300px] h-auto flex items-center justify-center transform -rotate-45">
                    <img src="assets/images/step-img.png" alt="Education Illustration"
                        class="max-w-sm mx-auto lg:mx-30 w-[900px] h-[500px]" />
                </div>
            </div>
            <div class="w-full lg:w-1/2 lg:ml-[350px]">
                <div class="p-8">
                    <div class="w-full max-w-lg p-4 mx-auto bg-white rounded-lg shadow-lg sm:p-8">
                        <h2 class="text-2xl font-bold text-center text-gray-700">Registration Form</h2>
                        <p class="mt-2 text-center text-gray-500">
                            Already have an account?
                            <Link :href="route('login')" class="text-orange-500">Login</Link>
                        </p>

                        <form @submit.prevent="onSubmit" class="mt-8 space-y-4">
                            <div class="flex flex-col sm:flex-row sm:space-x-4">
                                <div class="flex-1">
                                    <label for="name" class="block text-sm font-medium text-gray-700">School
                                        name <span class="text-red-700">*</span></label>
                                    <InputText id="name" v-model="form.name" :class="{ 'p-invalid': errors.name }"
                                        class="w-full" />
                                    <small class="text-red-500">{{ errors.name }}</small>
                                </div>
                                <div class="flex-1 mt-4 sm:mt-0">
                                    <label for="address" class="block text-sm font-medium text-gray-700">Address <span class="text-red-700">*</span></label>
                                    <div class="relative">
                                        <InputText id="address" v-model="form.address"
                                            :class="{ 'p-invalid': errors.address }" class="w-full" />
                                        <div
                                            class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                    </div>
                                    <small class="text-red-500">{{ errors.address }}</small>
                                </div>
                            </div>
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700">Enter Password
                                    <span class="text-red-700">*</span></label>
                                <Password v-model="form.password" toggleMask :class="{ 'p-invalid': errors.password }"
                                    class="w-full" />
                                <small class="text-red-500">{{ errors.password }}</small>
                            </div>
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700">Confirm Password
                                    <span class="text-red-700">*</span></label>
                                <Password v-model="form.password_confirmation" toggleMask
                                    :class="{ 'p-invalid': errors.password_confirmation }" class="w-full" />
                                <small class="text-red-500">{{ errors.password_confirmation }}</small>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Enter Email <span class="text-red-700">*</span></label>
                                <InputText id="email" v-model="form.email" :class="{ 'p-invalid': errors.email }"
                                    class="w-full" />
                                <small class="text-red-500">{{ errors.email }}</small>
                            </div>
                            <div>
                                <label for="confirmEmail" class="block text-sm font-medium text-gray-700">Confirm Email
                                    <span class="text-red-700">*</span></label>
                                <InputText id="confirmEmail" v-model="form.confirmEmail"
                                    :class="{ 'p-invalid': errors.confirmEmail }" class="w-full" />
                                <small class="text-red-500">{{ errors.confirmEmail }}</small>
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number
                                    <span class="text-red-700">*</span></label>
                                <InputText id="phone" v-model="form.phone" :class="{ 'p-invalid': errors.phone }"
                                    class="w-full" />
                                <small class="text-red-500">{{ errors.phone }}</small>
                            </div>
                            <!-- <div class="flex flex-col items-center sm:flex-row sm:space-x-4">
                  <div class="flex-1 w-full mt-4 sm:mt-0">
                    <label class="block text-sm font-medium text-gray-700">Upload School Logo</label>
                    <div class="flex justify-center px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md">
                      <div class="space-y-1 text-center">
                        <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                          <path d="M28 8H20a4 4 0 00-4 4v1H8v26h32V13h-8V8a4 4 0 00-4-4zm-4 0a2 2 0 012 2v1H18V10a2 2 0 012-2zm12 11H12v1h24v-1zm0 2H12v10h24V21zm0 12H12v2h24v-2zm0-24v2h6V9h-6z" fill="none" stroke-width="2"/>
                        </svg>
                        <div class="flex text-sm text-gray-600">
                          <label for="logo" class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <span>Upload a file</span>
                            <input @change="handleFileUpload" id="logo" name="logo" type="file" class="sr-only" accept="image/*">
                          </label>
                          <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                      </div>
                    </div>
                  </div>
                </div> -->
                            <div class="flex justify-end">
                                <Button type="submit" :label="isSubmitting ? 'Submitting...' : 'Submit'"
                                    :icon="isSubmitting ? 'pi pi-spin pi-spinner' : 'pi pi-check'"
                                    :loading="isSubmitting" class="p-button-primary" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <Toast />
    </div>
</template>

<script setup>
import { ref, reactive } from 'vue';
import { Link, useForm } from "@inertiajs/vue3";
import Button from 'primevue/button';
import InputText from 'primevue/inputtext';
import Toast from 'primevue/toast';
import { useToast } from 'primevue/usetoast';
import Password from 'primevue/password';
import { useAuthStore } from '@/Stores/Auth';



const toast = useToast();
const authStore = useAuthStore();

const form = reactive({
    name: '',
    address: '',
    password: '',
    password_confirmation: '',
    email: '',
    confirmEmail: '',
    phone: '',
});

const errors = reactive({
    name: '',
    address: '',
    password: '',
    password_confirmation: '',
    email: '',
    confirmEmail: '',
    phone: '',
});

const logo = ref(null);
const isSubmitting = ref(false);

const handleFileUpload = (event) => {
    logo.value = event.target.files[0];
};

const validateForm = () => {
    let isValid = true;

    if (!form.name) {
        errors.name = 'School name is required';
        isValid = false;
    } else {
        errors.name = '';
    }


    if (!form.password) {
        errors.password = 'Password is required';
        isValid = false;
    } else {
        errors.password = '';
    }

    if (!form.address) {
        errors.address = 'Address is required';
        isValid = false;
    } else {
        errors.address = '';
    }

    if (!form.email) {
        errors.email = 'Email is required';
        isValid = false;
    } else if (!/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(form.email)) {
        errors.email = 'Invalid email format';
        isValid = false;
    } else {
        errors.email = '';
    }

    if (!form.confirmEmail) {
        errors.confirmEmail = 'Confirm email is required';
        isValid = false;
    } else if (form.confirmEmail !== form.email) {
        errors.confirmEmail = 'Emails do not match';
        isValid = false;
    } else {
        errors.confirmEmail = '';
    }


    if (!form.password_confirmation) {
        errors.password_confirmation = 'Confirm password is required';
        isValid = false;
    } else if (form.password_confirmation !== form.password) {
        errors.password_confirmation = 'Password do not match';
        isValid = false;
    } else {
        errors.password_confirmation = '';
    }

    if (!form.phone) {
        errors.phone = 'Phone number is required';
        isValid = false;
    } else {
        errors.phone = '';
    }

    return isValid;
};

const onSubmit = async () => {
    if (!validateForm()) {
        return;
    }

    isSubmitting.value = true;

    try {
        await authStore.register(form);
        toast.add({ severity: 'success', summary: 'Success', detail: 'Registration successful', life: 3000 });
        // Redirect to dashboard or desired page
        window.location = route('login')
    } catch (error) {
        console.error('Registration error:', error);
        const { message, errors } = error.response.data;
        toast.add({ severity: 'error', summary: 'Error', detail: message || 'An error occurred during registration', life: 3000 });
    } finally {
        isSubmitting.value = false;
    }
};
</script>

<style scoped>
.custom-gradient {
    background: linear-gradient(180deg, #F5AD54, #6466F1);
}

@media (max-width: 768px) {
    .hide-medium {
        display: none;
    }
}

/* Override PrimeVue styles to match the original design */
:deep(.p-inputtext) {
    width: 100%;
    padding: 0.5rem 0.75rem;
    border-radius: 0.375rem;
    border-color: #d1d5db;
}

:deep(.p-button) {
    padding: 0.5rem 1rem;
    font-size: 0.875rem;
    line-height: 1.25rem;
    border-radius: 0.375rem;
}

:deep(.p-button-label) {
    font-weight: 500;
}
</style>
