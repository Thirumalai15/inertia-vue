import { App, plugin } from '@inertiajs/inertia-vue'
import Vue from 'vue'
import VueMeta from 'vue-meta'
import { InertiaProgress } from '@inertiajs/progress'
Vue.use(plugin)

Vue.config.productionTip = false
Vue.mixin({ methods: { route: window.route } })

InertiaProgress.init();

const el = document.getElementById('app');

new Vue({
    render: h =>
        h(App, {
            props: {
                initialPage: JSON.parse(el.dataset.page),
                resolveComponent: name => import(`@/Pages/${name}`).then(module => module.default),
            },
        }),
}).$mount(el)