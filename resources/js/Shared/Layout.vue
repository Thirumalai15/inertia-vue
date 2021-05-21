<template>
  <div>
    <!--    Use interia link instead of <a></a> tags for routing-->
    <!--    <inertia-link :href="route('contact')">Contact</inertia-link>-->

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
                      <inertia-link class="active" aria-label="Toggle navigation" :href="route('index')">Home</inertia-link>
                    </li>
                    <li class="nav-item">
                      <a class=" dd-menu collapsed" href="#blog" data-bs-toggle="collapse"
                         data-bs-target="#submenu-1-1" aria-controls="navbarSupportedContent"
                         aria-expanded="false" aria-label="Toggle navigation">Services</a>
                      <ul class="sub-menu collapse" id="submenu-1-1">
                        <li class="nav-item"><a href="services.html">Services</a>
                        </li>
                        <li class="nav-item"><a href="service-details.html">Service Details</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class=" dd-menu collapsed" href="#blog" data-bs-toggle="collapse"
                         data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent"
                         aria-expanded="false" aria-label="Toggle navigation">Portfolio</a>
                      <ul class="sub-menu collapse" id="submenu-1-2">
                        <li class="nav-item"><a href="portfolio.html">Portfolio</a>
                        </li>
                        <li class="nav-item"><a href="portfolio-details.html">Portfolio Details</a>
                        </li>
                      </ul>
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
                      <a class=" dd-menu collapsed" href="#blog" data-bs-toggle="collapse"
                         data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent"
                         aria-expanded="false" aria-label="Toggle navigation">Blog</a>
                      <ul class="sub-menu collapse" id="submenu-1-4">
                        <li class="nav-item"><a href="blog-grid-sidebar.html">Blog Grid Sidebar</a>
                        </li>
                        <li class="nav-item"><a href="blog-single.html">Blog Single</a></li>
                        <li class="nav-item"><a href="blog-single-sidebar.html">Blog Single
                          Sibebar</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <inertia-link aria-label="Toggle navigation" :href="route('contact')">About Us</inertia-link>
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


    <div>
      <slot/>
    </div>

    <footer class="footer">
      <!-- Start Footer Top -->
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <!-- Single Widget -->
              <div class="single-footer f-about">
                <div class="logo">
                  <a href="index.html">
                    <img src="assets/images/logo/white-logo.svg" alt="#">
                  </a>
                </div>
                <p>Making the world a better place through constructing elegant hierarchies.</p>
                <ul class="social">
                  <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                </ul>
              </div>
              <!-- End Single Widget -->
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                  <!-- Single Widget -->
                  <div class="single-footer f-link">
                    <h3>Solutions</h3>
                    <ul>
                      <li><a href="javascript:void(0)">Marketing</a></li>
                      <li><a href="javascript:void(0)">Analytics</a></li>
                      <li><a href="javascript:void(0)">Commerce</a></li>
                      <li><a href="javascript:void(0)">Insights</a></li>
                      <li><a href="javascript:void(0)">Promotion</a></li>
                    </ul>
                  </div>
                  <!-- End Single Widget -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                  <!-- Single Widget -->
                  <div class="single-footer f-link">
                    <h3>Support</h3>
                    <ul>
                      <li><a href="javascript:void(0)">Pricing</a></li>
                      <li><a href="javascript:void(0)">Documentation</a></li>
                      <li><a href="javascript:void(0)">Guides</a></li>
                      <li><a href="javascript:void(0)">API Status</a></li>
                      <li><a href="javascript:void(0)">Live Support</a></li>
                    </ul>
                  </div>
                  <!-- End Single Widget -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                  <!-- Single Widget -->
                  <div class="single-footer f-link">
                    <h3>Company</h3>
                    <ul>
                      <li><a href="javascript:void(0)">About Us</a></li>
                      <li><a href="javascript:void(0)">Our Blog</a></li>
                      <li><a href="javascript:void(0)">Jobs</a></li>
                      <li><a href="javascript:void(0)">Press</a></li>
                      <li><a href="javascript:void(0)">Contact Us</a></li>
                    </ul>
                  </div>
                  <!-- End Single Widget -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                  <!-- Single Widget -->
                  <div class="single-footer f-link">
                    <h3>Legal</h3>
                    <ul>
                      <li><a href="javascript:void(0)">Terms & Conditions</a></li>
                      <li><a href="javascript:void(0)">Privacy Policy</a></li>
                      <li><a href="javascript:void(0)">Catering Services</a></li>
                      <li><a href="javascript:void(0)">Customer Relations</a></li>
                      <li><a href="javascript:void(0)">Innovation</a></li>
                    </ul>
                  </div>
                  <!-- End Single Widget -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ End Footer Top -->
      <div class="copyright-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p class="copyright-text">Designed and Developed by <a href="https://wpthemesgrid.com/"
                                                                     rel="nofollow" target="_blank">WpthemesGrid</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>

<script>
export default {
  name: "layout"
}
</script>
