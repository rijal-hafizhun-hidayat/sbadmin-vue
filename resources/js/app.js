require('./bootstrap');

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import NProgress from 'nprogress'
import { Inertia } from '@inertiajs/inertia'
import swal from 'sweetalert';

createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
        .use(plugin)
        .mount(el)
    },
})

InertiaProgress.init()
Inertia.on('start', () => NProgress.start())
Inertia.on('finish', () => NProgress.done())