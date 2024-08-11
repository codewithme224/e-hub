import './bootstrap';
import '../css/app.css';

import 'primeicons/primeicons.css'
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import PrimeVue from 'primevue/config';
import Aura from '@primevue/themes/aura';
import 'primeicons/primeicons.css'
import Toast from 'primevue/toast';
import ToastService from 'primevue/toastservice';
import { createPinia } from 'pinia';


const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

const pinia = createPinia();
createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(PrimeVue, {
                theme: {
                    preset: Aura,
                    options: {
                        prefix: 'p',
                        darkModeSelector: 'false',
                        cssLayer: false
                    }

                }
            })
            .use(Toast)
            .use(ToastService)
            .use(pinia)
            .mount(el);
    },
    progress: {
        color: '#FFC961',
    },
    theme: {
        preset: Aura
    }
});

// app.use(PrimeVue, {
//     theme: {
//         preset: Aura
//     }
// });
