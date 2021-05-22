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


## Sever Side Setup
First is the server side setup
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
That's it server side setup is done. Next is the client side setup  
<!-- Now let's see how to create responses. To do this create a controller and route for this  -->

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

Vue.use(plugin)

Vue.config.productionTip = false;

Vue.mixin({ methods: { route: window.route } });

const el = document.getElementById('app');

new Vue({
  render: h => h(App, {
    props: {
      initialPage: JSON.parse(el.dataset.page),
      resolveComponent: name => import(`./Pages/${name}`).then(module => module.default),
    },
  }),
}).$mount(el);
```
after that create new folder in resources/js/Pages inside this folder you can create you vue templates

<!-- install Progress Indicators 
```
npm install @inertiajs/progress
```

Once it's been installed, initialize it in your app.
```
import { InertiaProgress } from '@inertiajs/progress'

InertiaProgress.init()
``` -->

Code splitting (google about this what is code splitting)
```
npm install @babel/plugin-syntax-dynamic-import

```
Next, create a .babelrc file in your project folder with the following:
```
{
  "plugins": ["@babel/plugin-syntax-dynamic-import"]
}
```

add this in you webpack.mix.js
```
const mix = require('laravel-mix');
const path = require('path');

mix.js('resources/js/app.js', 'public/js').vue()
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]).webpackConfig({
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
That's it client side setup is also done.


## Now let's make a simple layout with vue js and inertia. We will be using Appmeet theme css and js files 
So let's get started!!!
First create a controller
```
php artisan make:controller <'Your controller name'>
```
Then make a named route in web.php file 
```
Route::get('/home',[HomeController::class,'index'])->name('index');
```

Controller File 
```
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index() {
        return Inertia::render('Index');
    }
}
```
Now backend part is done,next the frontend.

Go to your resources/views/app.blade.php. As I said ealier we will be using App meet theme, so we will be using their css and js files for this tutorial
add the css in the head section and js in the body section
```
<html>
    <head> 
        <link rel="stylesheet" href="{{ asset('theme/appmeet/assets/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('theme/appmeet/assets/css/LineIcons.2.0.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/appmeet/assets/css/animate.css') }} "/>
        <link rel="stylesheet" href="{{ asset('theme/appmeet/assets/css/tiny-slider.css') }} "/>
        <link rel="stylesheet" href="{{ asset('theme/appmeet/assets/css/glightbox.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('theme/appmeet/assets/css/main.css') }}" />
    </head>
<body> 
@inertia

<!-- @routes is a directive for the ziggy package we installed so add this then only the ziggy package will work -->
@routes 

<script src="{{ asset('theme/appmeet/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('theme/appmeet/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('theme/appmeet/assets/js/tiny-slider.js') }}"></script>
<script src="{{ asset('theme/appmeet/assets/js/glightbox.min.js') }}"></script>
<script src="{{ asset('theme/appmeet/assets/js/count-up.min.js') }}"></script>
<script src="{{ asset('theme/appmeet/assets/js/imagesloaded.min.js') }}"></script>
<script src="{{ asset('theme/appmeet/assets/js/isotope.min.js' )}}"></script>
<script src="{{ asset('theme/appmeet/assets/js/main.js') }}"></script>
<script src="{{ asset('/js/app.js') }}" defer></script>
</body>
</html>
```
Next we will start making vue templates. So go to your resources/js/Pages and create a vue file named Index.vue.
This is the default boilerplate of a vue js file.
```
<template>
  
</template>

<script>
export default {
    name: "index"
}
</script>
```
 Now let's add a navbar and  hero section from the app meet theme
```
<template>
  <div>
    <header class="header navbar-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="nav-inner">
              <!-- Start Navbar -->
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand style3" href="index.html">
                  <img src="https://wpthemesgrid.com/themes/appmeet/assets/images/logo/logo.svg" alt="Logo">
                </a>
                <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                  <ul id="nav" class="navbar-nav ms-auto">
                    <li class="nav-item">
<!--                      <a href="index.html" class="active" aria-label="Toggle navigation">Home</a>-->
                      <inertia-link class="active" aria-label="Toggle navigation" :href="route('index')">Home </inertia-link>
                    </li>

                    <li class="nav-item">
                      <a class=" dd-menu collapsed" href="#blog" data-bs-toggle="collapse"
                         data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent"
                         aria-expanded="false" aria-label="Toggle navigation">Pages</a>
                      <ul class="sub-menu collapse" id="submenu-1-3">
                        <li class="nav-item"><a href="about.html">About Us</a>
                        </li>
                        <li class="nav-item"><a href="pricing.html">Pricing</a></li>
                        <li class="nav-item"><a href="faq.html">Faq</a></li>
                        <li class="nav-item"><a href="login.html">Login</a></li>
                        <li class="nav-item"><a href="registration.html">Registration</a></li>
                        <li class="nav-item"><a href="404.html">404 Error</a></li>
                        <li class="nav-item"><a href="mail-success.html">Mail Success</a></li>
                      </ul>
                    </li>
                    
                    <li class="nav-item">
                      <!-- <inertia-link aria-label="Toggle navigation" :href="route('contact')">About Us</inertia-link> -->
                    </li>
                  </ul>
                </div> <!-- n
                avbar collapse -->
                <div class="button add-list-button">
                  <a href="https://graygrids.com/templates/appmeet-startup-app-saas-html-template/"
                     target="_blank" class="btn">Buy Appmeet Now!</a>
                </div>
              </nav>
              <!-- End Navbar -->
            </div>
          </div>
        </div> <!-- row -->
      </div> <!-- container -->
    </header>
    <!-- End Header Area -->
 <!-- Start Hero Area -->
    <section id="home" class="hero-area style1">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-12 col-12">
            <div class="hero-content wow fadeInLeft" data-wow-delay=".3s">
              <h1>Get things done by great remote team</h1>
              <p>We share common trends and strategies for
                improving your rental income and making sure you stay in high demand.</p>
              <form action="#" method="get" target="_blank" class="trial-form">
                <input name="email" type="email" placeholder="Your email address">
                <div class="button">
                  <button type="submit" class="btn">Get Started</button>
                </div>
              </form>
              <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM"
                 class="glightbox video-button"><i class="lni lni-play"></i><span class="text">Watch our
                                intro video.</span></a>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-12">
            <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
              <img src="theme/appmeet/assets/images/hero/hero-image.png" alt="#">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero Area -->
   </div>
</template>
```
Now run   
``` 
npm run watch 
```
This will compile the assets and vue js files. Now vist the /home url. You will be able to see a nav bar and hero section. Don't stop with this try creating more pages and try with a different themes. And if you want to make shared layouts like putting the header and footer in one file and extending them. For that check this repo how i have done that.

That's it you have successfully intergrated a Wordpress theme with Vue js and Inertia js
Happy Coding!!
