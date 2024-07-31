<style>
    .icon a img {
        transition: transform .2s;
    }
    .icon a img:hover {
        -ms-transform: scale(1.25);
        /* IE 9 */
        -webkit-transform: scale(1.25);
        /* Safari 3-8 */
        transform: scale(1.25);
    }
</style>
<footer class="main-footer text-start position-absolute bottom-auto w-100 px-5 pt-5 pb-3"
    style="background-color: #0a4569">
    {{-- <strong>{{ session()->get('copy_right_text') }}</strong> --}}
    <div class="col-12">
        <div class="row  justify-content-center">
            <div class="col-3 logo-circle">
                <div class="logo-container">
                    {{-- <img src="\website\upload\image 307.png" alt="not found" class="logo-footer"> --}}
                    <img src="@if (session()->has('app_icon') && file_exists('uploads/business_settings/' . session()->get('app_icon'))) {{ asset('uploads/business_settings/' . session()->get('app_icon')) }} @else {{ asset('uploads/image/default.png') }} @endif"
                        alt="" width="60%" class="logo-footer image-logo">
                </div>
                {{-- <strong>NETTECH SOLUTION STORE</strong> --}}
                <strong>{{ session()->get('app_name') }}</strong>
            </div>
            <div class="col-2">
                <strong class="footer-title">{{ __('Contact Us') }}</strong>
                <div class="icon d-flex gap-2">
                    <a href="http://">
                        <img src="\website\upload\telegram.png" alt="not found">
                    </a>
                    <a href="http://">
                        <img src="\website\upload\facebook.png" alt="not found">
                    </a>
                    <a href="http://">
                        <img src="\website\upload\call.png" alt="not found">
                    </a>
                </div>
                <div class="conversation">
                    <span>{{ __('Start Conversation') }}</span>
                    <p>
                        <i class="fa fa-phone" style="color: #FFFFFF"></i>
                        <strong>+{{ session()->get('phone') }}</strong>
                        {{-- +85592290584 --}}
                    </p>
                </div>
            </div>
            <div class="col-4 text-center">
                <strong class="footer-title">{{ __('SPECIAL') }}</strong>
                <div class="col-3 px-1 text-special text-start mt-2 mx-auto">
                    <a href="#latest-product">{{ __('Latest Product') }}</a><br>
                    <a href="#best-selling">{{ __('Best selling') }}</a>
                </div>
                <div class="email">
                    <hr style="border: 1.2px solid;">
                    <span>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <strong>{{ session()->get('email') }}</strong>
                        {{-- {{ __('phoeunchantha@gmail.com') }} --}}
                    </span>
                </div>
            </div>

            <div class="col-3 text-center">
                <strong class="footer-title">{{ __('Categories') }}</strong>
                <div class="col-3 px-1 text-category text-uppercase text-start  mt-2 mx-auto">
                    <a href="#nike">{{ __('Nike') }}</a><br>
                    <a href="#adidas">{{ __('Adidas') }}</a><br>
                    <a href="#puma">{{ __('Puma') }}</a><br>
                    <a href="#vans">{{ __('Vans') }}</a><br>
                    <a href="#converse">{{ __('Converse') }}</a><br>
                    <a href="#new-balance">{{ __('New Balance') }}</a>
                </div>
                <div class="address">
                    <div class="flex-row">
                        <span>{{ __('Address') }}</span>
                        <hr class="styled-hr">
                    </div>
                    <i class="fas fa-location    "></i>
                    <strong>{{ session()->get('company_address') }}</strong>
                    {{-- <span>Phum Prey Pring Khang Tboung 2, Sangkat Chom Chao 3, Khan, Pou Senchey, Phnom Penh</span> --}}
                </div>
            </div>
        </div>
        <hr style="border: 1.2px solid;">
        <div class="col-12 copy_right_text text-center">
            <strong>{{ session()->get('copy_right_text') }}</strong>
            {{-- <strong style="font-weight: 400">Copyright 2024 by NETTECH SOLUTION STORE.</strong> --}}
        </div>
    </div>
</footer>
<script>
    document.querySelector('a[href="#latest-product"]').addEventListener('click', function(event) {
        event.preventDefault();
        document.querySelector('#latest-product').scrollIntoView({
            behavior: 'smooth'
        });
    });

    document.querySelector('a[href="#best-selling"]').addEventListener('click', function(event) {
        event.preventDefault();
        document.querySelector('#best-selling').scrollIntoView({
            behavior: 'smooth'
        });
    });

    document.querySelector('a[href="#nike"]').addEventListener('click', function(event) {
        event.preventDefault();
        document.querySelector('#nike').scrollIntoView({
            behavior: 'smooth'
        });
    });

    document.querySelector('a[href="#adidas"]').addEventListener('click', function(event) {
        event.preventDefault();
        document.querySelector('#adidas').scrollIntoView({
            behavior: 'smooth'
        });
    });

    document.querySelector('a[href="#puma"]').addEventListener('click', function(event) {
        event.preventDefault();
        document.querySelector('#puma').scrollIntoView({
            behavior: 'smooth'
        });
    });

    document.querySelector('a[href="#vans"]').addEventListener('click', function(event) {
        event.preventDefault();
        document.querySelector('#vans').scrollIntoView({
            behavior: 'smooth'
        });
    });

    document.querySelector('a[href="#converse"]').addEventListener('click', function(event) {
        event.preventDefault();
        document.querySelector('#converse').scrollIntoView({
            behavior: 'smooth'
        });
    });

    document.querySelector('a[href="#new-balance"]').addEventListener('click', function(event) {
        event.preventDefault();
        document.querySelector('#new-balance').scrollIntoView({
            behavior: 'smooth'
        });
    });
</script>
