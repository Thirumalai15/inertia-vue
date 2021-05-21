# This readme guide is for fresh laravel installation only. 
### If you are cloning an existing repo means do the following 
```
composer install 
```
```
npm install && npm run dev
```

```
cp .env.example .env
```
Othewise read the below guide 

# Inertia Js setup for Fresh laravel application
After installing a new laravel project you need to do a some extra setup for client side and server side. And we will be using an wordpress 
theme called appmeet 
Dowload the free version 

[AppMeet Theme](https://wpthemesgrid.com/downloads/appmeet-startup-app-saas-html-template/)

Before doing that install laravel/ui package 
```
composer require laravel/ui
```
next install bootstrap scaffolding since most of the wpthemes or html templates uses bootstrap
```
php artisan ui bootstrap
```

Now the interia js setup 

## Client Side setup 
Install vue js 
```
npm install vue
```
Now install inertia js

```
npm install @inertiajs/inertia @inertiajs/inertia-vue
```

after doing these we need to initialize the  app. Now open resources/js/app.js 
remove the existing code and paste this new code 

```
import { App, plugin } from '@inertiajs/inertia-vue'
import Vue from 'vue'
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
```
after that create new folder in resources/js/Pages inside this folder you can create you vue templates

Now install Progress Indicators 
```
npm install @inertiajs/progress
```

Once it's been installed, initialize it in your app.
```
import { InertiaProgress } from '@inertiajs/progress'

InertiaProgress.init()
```
Code splitting (google about this what is code splitting)
```
npm install @babel/plugin-syntax-dynamic-import

```
Next, create a .babelrc file in your project with the following:
```
{
  "plugins": ["@babel/plugin-syntax-dynamic-import"]
}
```

add this in you webpack.mix.js
```
const mix = require('laravel-mix');
const path = require('path')

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .webpackConfig({
        output: { chunkFilename: 'js/[name].js?id=[chunkhash]' },
        resolve: {
            alias: {
                vue$: 'vue/dist/vue.runtime.js',
                '@': path.resolve('resources/js'),
            },
        },
    });
```

At last run these commands 
```
npm install 
```
```
npm run dev
```
That's it client side setup is done. Now server side setup 

## Sever Side Setup
```
composer require inertiajs/inertia-laravel
```

Now need to install ziggy package for vue js routing
```
composer require tightenco/ziggy
```

Now set root view 
create an app.blade.php in resources/views/ add this code. This will be used to load your site assets (CSS and JavaScript).
Check the app.blade.php for futher information
```
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
  </head>
  <body>
    @inertia
  </body>
</html>
```
Now run this command to generate a middleware to handleInertiareqeust 
```
php artisan inertia:middleware
```
Once generated, register the HandleInertiaRequests middleware in your App\Http\Kernel, as the last item in your web middleware group.
```
'web' => [
    // ...
    \App\Http\Middleware\HandleInertiaRequests::class,
]
```
That's it server side setup is done. Now let's see how to create responses. To do this create a controller and route for this 
```
php artisan make:controller <'Your controller name'>

```
Web.php
Allways use named routes. And it is also easy to link urls vue components 
```
Route::get('/',[TestViewController::class,'index'])->name('index');

```

Controller File 
```
use Inertia\Inertia;

class TestViewController extends Controller
{
    public function index() {
        return Inertia render('Index');
    }
}
```
Now create a vuejs template in resources/js/Pages/Index.vue 
```
<template>
    <div> 
     <h1> Hello world! </h1>
    </div>
</template>
```
For futher more info check resources/js/pages/test.vue and resources/js/Pages/About.vue

And if you want to make shared layouts for your vue templates. For that check resources/js/Shared/Layout.vue and check resources/js/Pages/test.vue

That's is you have successfully intergrated a Wordpress theme with Vue js and Inertia js
Happy Coding!!
