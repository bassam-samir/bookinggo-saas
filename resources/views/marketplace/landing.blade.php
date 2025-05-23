@extends('marketplace.marketplace')
@section('page-title')
    {{ __('BookinGo') }}
@endsection
@section('content')
    <!-- wrapper start -->
    <div class="home-wrapper">
        <section class="main-home-first-section">
            <div class="offset-container offset-left">
                <div class="row row-gap align-items-center">
                    <div class="col-md-6 col-12">
                        <div class="banner-content">
                            <h1>{{ __('Empowering Businesses with Seamless Booking Management Solutions and Enhanced Customer Experiences.') }}
                            </h1>
                            <p>{{ __('Simplify your booking processes with BookingGo SaaS, the ultimate solution for efficient and hassle-free booking management.') }}
                            </p>
                            <div class="btn-group">
                                <a href="{{ route('apps.pricing') }}" class="btn">{{ __('Get the Package') }} <svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <g clip-path="url(#clip0_14_726)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.88967 10.9856C6.96087 11.2611 7.75238 12.233 7.75238 13.3897C7.75238 14.7607 6.64043 15.8721 5.26877 15.8721C3.89711 15.8721 2.78516 14.7607 2.78516 13.3897C2.78516 12.233 3.57667 11.2611 4.64787 10.9856V10.5959C4.64787 8.7099 6.1768 7.18097 8.06283 7.18097C9.26304 7.18097 10.236 6.20801 10.236 5.00781V3.09158L8.81233 4.51524C8.56985 4.75772 8.17672 4.75772 7.93424 4.51524C7.69176 4.27276 7.69176 3.87963 7.93424 3.63715L10.4179 1.15354C10.6603 0.91106 11.0535 0.91106 11.2959 1.15354L13.7796 3.63715C14.022 3.87962 14.022 4.27276 13.7796 4.51524C13.5371 4.75771 13.1439 4.75772 12.9015 4.51524L11.4778 3.09158V5.00781C11.4778 6.89384 9.94887 8.42278 8.06283 8.42278C6.86263 8.42278 5.88967 9.39573 5.88967 10.5959V10.9856ZM6.51058 13.3897C6.51058 14.0743 5.95517 14.6303 5.26877 14.6303C4.58237 14.6303 4.02696 14.0743 4.02696 13.3897C4.02696 12.7052 4.58237 12.1492 5.26877 12.1492C5.95517 12.1492 6.51058 12.7052 6.51058 13.3897Z"
                                                fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_14_726">
                                                <rect width="14.9017" height="14.9017" fill="white"
                                                    transform="translate(0.921875 0.97168)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a href="#" class="link-btn">{{ __('View Live Demo') }} <svg
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                        fill="none">
                                        <g clip-path="url(#clip0_7_820)">
                                            <path
                                                d="M9.33984 1.18359L9.33985 18.519L4.612 18.519C2.87125 18.519 1.4601 17.1079 1.4601 15.3671L1.4601 4.33549C1.4601 2.59475 2.87125 1.18359 4.612 1.18359L9.33984 1.18359Z"
                                                fill="#002332" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M17.222 19.3066C18.5276 19.3066 19.5859 18.2483 19.5859 16.9427L19.5859 15.6294L19.5859 2.75918C19.5859 1.45362 18.5276 0.39526 17.222 0.39526L10.1302 0.39526L9.77566 0.39526C9.34047 0.39526 8.98768 0.748047 8.98768 1.18324C8.98768 1.61842 9.34047 1.97121 9.77566 1.97121L10.1302 1.97121L17.222 1.97121C17.6572 1.97121 18.01 2.324 18.01 2.75918L18.01 15.6294L18.01 16.9427C18.01 17.3779 17.6572 17.7307 17.222 17.7307L10.1302 17.7307L9.77566 17.7307C9.34047 17.7307 8.98769 18.0835 8.98769 18.5187C8.98769 18.9539 9.34047 19.3066 9.77566 19.3066L10.1302 19.3066L17.222 19.3066ZM7.72693 18.5187C7.72693 18.0835 7.37414 17.7307 6.93895 17.7307L6.22977 17.7307C5.79459 17.7307 5.4418 18.0835 5.4418 18.5187C5.4418 18.9539 5.79459 19.3066 6.22977 19.3066L6.93895 19.3066C7.37414 19.3066 7.72693 18.9539 7.72693 18.5187ZM7.72693 1.18324C7.72693 0.748047 7.37414 0.39526 6.93895 0.39526L6.22977 0.39526C5.79459 0.39526 5.4418 0.748047 5.4418 1.18324C5.4418 1.61842 5.79459 1.97121 6.22977 1.97121L6.93895 1.97121C7.37414 1.97121 7.72693 1.61842 7.72693 1.18324ZM4.18104 18.5187C4.18104 18.0835 3.82825 17.7307 3.39307 17.7307L3.03848 17.7307C2.99569 17.7307 2.95423 17.7274 2.9142 17.7211C2.48429 17.6535 2.08101 17.9472 2.01344 18.3772C1.94588 18.8071 2.23962 19.2103 2.66953 19.2779C2.79021 19.2969 2.91347 19.3066 3.03848 19.3066L3.39307 19.3066C3.82825 19.3066 4.18104 18.9539 4.18104 18.5187ZM4.18104 1.18324C4.18104 0.748048 3.82825 0.395261 3.39307 0.395261L3.03848 0.395261C2.91347 0.395261 2.7902 0.405034 2.66953 0.423997C2.23962 0.491559 1.94588 0.894841 2.01344 1.32475C2.08101 1.75466 2.48429 2.0484 2.9142 1.98084C2.95423 1.97455 2.99569 1.97121 3.03848 1.97121L3.39307 1.97121C3.82825 1.97121 4.18104 1.61842 4.18104 1.18324ZM1.60405 17.9678C2.03396 17.9002 2.3277 17.4969 2.26014 17.067C2.25384 17.027 2.25051 16.9855 2.25051 16.9427L2.25051 16.5881C2.25051 16.1529 1.89772 15.8002 1.46253 15.8002C1.02735 15.8002 0.674557 16.1529 0.674557 16.5881L0.674557 16.9427C0.674557 17.0677 0.68433 17.191 0.703293 17.3117C0.770857 17.7416 1.17414 18.0353 1.60405 17.9678ZM1.60405 1.73415C1.17414 1.66659 0.770856 1.96033 0.703292 2.39024C0.684329 2.51091 0.674556 2.63417 0.674556 2.75918L0.674556 3.11377C0.674556 3.54896 1.02734 3.90175 1.46253 3.90175C1.89772 3.90175 2.2505 3.54896 2.2505 3.11377L2.2505 2.75918C2.2505 2.7164 2.25384 2.67493 2.26013 2.6349C2.3277 2.20499 2.03396 1.80171 1.60405 1.73415ZM1.46253 14.5394C1.89772 14.5394 2.25051 14.1866 2.25051 13.7514L2.25051 13.0422C2.25051 12.6071 1.89772 12.2543 1.46253 12.2543C1.02735 12.2543 0.674556 12.6071 0.674556 13.0422L0.674556 13.7514C0.674557 14.1866 1.02735 14.5394 1.46253 14.5394ZM1.46253 10.9935C1.89772 10.9935 2.25051 10.6407 2.25051 10.2055L2.25051 9.49636C2.2505 9.06118 1.89772 8.70839 1.46253 8.70839C1.02735 8.70839 0.674556 9.06118 0.674556 9.49636L0.674556 10.2055C0.674556 10.6407 1.02735 10.9935 1.46253 10.9935ZM1.46253 7.44763C1.89772 7.44763 2.2505 7.09484 2.2505 6.65966L2.2505 5.95048C2.2505 5.51529 1.89772 5.16251 1.46253 5.16251C1.02735 5.16251 0.674556 5.51529 0.674556 5.95048L0.674556 6.65966C0.674556 7.09484 1.02735 7.44763 1.46253 7.44763ZM6.97806 9.06298C6.54288 9.06298 6.19009 9.41577 6.19009 9.85095C6.19009 10.2861 6.54288 10.6389 6.97806 10.6389L11.3798 10.6389L10.3611 11.6577C10.0534 11.9654 10.0534 12.4643 10.3611 12.7721C10.6688 13.0798 11.1677 13.0798 11.4754 12.7721L13.8394 10.4081C13.9871 10.2604 14.0702 10.0599 14.0702 9.85095C14.0702 9.64197 13.9871 9.44154 13.8394 9.29377L11.4754 6.92985C11.1677 6.62213 10.6688 6.62213 10.3611 6.92985C10.0534 7.23757 10.0534 7.73649 10.3611 8.04421L11.3798 9.06298L6.97806 9.06298Z"
                                                fill=href="#""white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_7_820">
                                                <rect width="18.9114" height="18.9114" fill="white"
                                                    transform="translate(0.675781 0.395508)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="banner-image-wrapper">
                            <div class="ripple-icon position-top">
                                <div class="pulse0"></div>
                                <div class="pulse1"></div>
                                <div class="pulse2"></div>
                                <div class="pulse3"></div>
                            </div>
                            <div class="ripple-icon position-left">
                                <div class="pulse0"></div>
                                <div class="pulse1"></div>
                                <div class="pulse2"></div>
                                <div class="pulse3"></div>
                            </div>
                            <div class="banner-img-wrapper">
                                <img src="{{ asset('market_assets/images/banner-image.png') }}" alt=""
                                    class="main-banner">
                                <img src="{{ asset('market_assets/images/banner-image-rtl.png') }}" alt=""
                                    class="rtl-banner">
                                <img src="{{ asset('market_assets/images/images1.png') }}" alt=""
                                    class="inner-frame-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="exclusive-partners">
                <div class="container">
                    <div class="section-title">
                        <p>{{ __('Our best partners and +11,000 customers worldwide satisfied with our services.') }}</p>
                    </div>
                    <div class="partners-logo-slider">
                        @for ($i = 1; $i < 15; $i++)
                            <div class="logo-item">
                                <a href="#">
                                    <img src="{{ asset('market_assets/images/logo-dark.png') }}" alt="exclusive partner">
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>
        <section class="support-section  padding-bottom">
            <div class="container">
                <div class="row align-items-start justify-content-center ">
                    <div class="col-lg-4 col-md-6 col-12 support-card">
                        <div class="support-card-inner">
                            <div class="support-card-media">
                                <div class="card-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="82" height="82"
                                        viewBox="0 0 82 82" fill="none">
                                        <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M20.5 58.0833H61.5C68.3333 58.0833 71.75 54.6667 71.75 47.8333V20.5C71.75 13.6667 68.3333 10.25 61.5 10.25H20.5C13.6667 10.25 10.25 13.6667 10.25 20.5V47.8333C10.25 54.6667 13.6667 58.0833 20.5 58.0833Z"
                                            fill="white" />
                                        <path
                                            d="M56.375 69.1872H47.8333V58.083H34.1667V69.1872H25.625C24.2105 69.1872 23.0625 70.3352 23.0625 71.7497C23.0625 73.1642 24.2105 74.3122 25.625 74.3122H56.375C57.7895 74.3122 58.9375 73.1642 58.9375 71.7497C58.9375 70.3352 57.7895 69.1872 56.375 69.1872Z"
                                            fill="white" />
                                        <path
                                            d="M34.1646 43.5618C33.5086 43.5618 32.8525 43.3125 32.3537 42.8103L25.5203 35.9769C24.5193 34.9758 24.5193 33.3528 25.5203 32.3517L32.3537 25.5184C33.3548 24.5173 34.9778 24.5173 35.9789 25.5184C36.98 26.5195 36.98 28.1425 35.9789 29.1436L30.9565 34.166L35.9789 39.1884C36.98 40.1895 36.98 41.8125 35.9789 42.8136C35.4766 43.3124 34.8206 43.5618 34.1646 43.5618ZM49.6422 42.8103L56.4755 35.9769C57.4766 34.9758 57.4766 33.3528 56.4755 32.3517L49.6422 25.5184C48.6411 24.5173 47.0181 24.5173 46.017 25.5184C45.0159 26.5195 45.0159 28.1425 46.017 29.1436L51.0394 34.166L46.017 39.1884C45.0159 40.1895 45.0159 41.8125 46.017 42.8136C46.5158 43.3124 47.1719 43.5652 47.8279 43.5652C48.4839 43.5652 49.1434 43.3125 49.6422 42.8103Z"
                                            fill="white" />
                                    </svg>
                                </div>
                            </div>
                            <div class="support-content">
                                <h3>{{ __('Streamlined ') }} <br> {{ __('Booking Management') }}</h3>
                                <p>{{ __('BookingGo SaaS simplifies the booking process, allowing businesses to efficiently manage appointments, reservations, and schedules through intuitive tools, ultimately saving time and resources.') }}
                                </p>
                            </div>
                            <div class="support-content-bottom">
                                <a href="#" class="btn">{{ __('Find Out More') }} <svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <g clip-path="url(#clip0_14_726)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.88967 10.9856C6.96087 11.2611 7.75238 12.233 7.75238 13.3897C7.75238 14.7607 6.64043 15.8721 5.26877 15.8721C3.89711 15.8721 2.78516 14.7607 2.78516 13.3897C2.78516 12.233 3.57667 11.2611 4.64787 10.9856V10.5959C4.64787 8.7099 6.1768 7.18097 8.06283 7.18097C9.26304 7.18097 10.236 6.20801 10.236 5.00781V3.09158L8.81233 4.51524C8.56985 4.75772 8.17672 4.75772 7.93424 4.51524C7.69176 4.27276 7.69176 3.87963 7.93424 3.63715L10.4179 1.15354C10.6603 0.91106 11.0535 0.91106 11.2959 1.15354L13.7796 3.63715C14.022 3.87962 14.022 4.27276 13.7796 4.51524C13.5371 4.75771 13.1439 4.75772 12.9015 4.51524L11.4778 3.09158V5.00781C11.4778 6.89384 9.94887 8.42278 8.06283 8.42278C6.86263 8.42278 5.88967 9.39573 5.88967 10.5959V10.9856ZM6.51058 13.3897C6.51058 14.0743 5.95517 14.6303 5.26877 14.6303C4.58237 14.6303 4.02696 14.0743 4.02696 13.3897C4.02696 12.7052 4.58237 12.1492 5.26877 12.1492C5.95517 12.1492 6.51058 12.7052 6.51058 13.3897Z"
                                                fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_14_726">
                                                <rect width="14.9017" height="14.9017" fill="white"
                                                    transform="translate(0.921875 0.97168)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 support-card">
                        <div class="support-card-inner">
                            <div class="support-card-media">
                                <div class="card-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="82" height="82"
                                        viewBox="0 0 82 82" fill="none">
                                        <path opacity="0.4"
                                            d="M19.9752 17.083H53.9607C55.3205 17.083 56.6223 17.6227 57.5858 18.5828L67.337 28.334C68.6729 29.6665 68.6729 31.8329 67.337 33.1654L57.5858 42.9165C56.6257 43.8766 55.3205 44.4163 53.9607 44.4163H19.9752C15.7692 44.4163 13.668 42.3153 13.668 38.1094V23.39C13.668 19.1841 15.7692 17.083 19.9752 17.083Z"
                                            fill="white" />
                                        <path
                                            d="M50.3945 71.75C50.3945 73.1645 49.2465 74.3125 47.832 74.3125H27.332C25.9175 74.3125 24.7695 73.1645 24.7695 71.75C24.7695 70.3355 25.9175 69.1875 27.332 69.1875H35.0195V49.5417H40.1445V69.1875H47.832C49.2465 69.1875 50.3945 70.3355 50.3945 71.75ZM37.582 7.6875C36.1812 7.6875 35.0195 8.84917 35.0195 10.25V17.0833H40.1445V10.25C40.1445 8.84917 38.9829 7.6875 37.582 7.6875Z"
                                            fill="white" />
                                    </svg>
                                </div>
                            </div>
                            <div class="support-content">
                                <h3>{{ __('Enhanced Customer Experience') }}</h3>
                                <p>{{ __('With BookingGo SaaS, businesses can provide customers with a seamless booking experience, including easy online reservations, real-time availability updates, and personalized communication, leading to increased satisfaction and loyalty.
                                                                ') }}
                                </p>
                            </div>
                            <div class="support-content-bottom">
                                <a href="#" class="btn">{{ __('Find Out More') }} <svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_14_726)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.88967 10.9856C6.96087 11.2611 7.75238 12.233 7.75238 13.3897C7.75238 14.7607 6.64043 15.8721 5.26877 15.8721C3.89711 15.8721 2.78516 14.7607 2.78516 13.3897C2.78516 12.233 3.57667 11.2611 4.64787 10.9856V10.5959C4.64787 8.7099 6.1768 7.18097 8.06283 7.18097C9.26304 7.18097 10.236 6.20801 10.236 5.00781V3.09158L8.81233 4.51524C8.56985 4.75772 8.17672 4.75772 7.93424 4.51524C7.69176 4.27276 7.69176 3.87963 7.93424 3.63715L10.4179 1.15354C10.6603 0.91106 11.0535 0.91106 11.2959 1.15354L13.7796 3.63715C14.022 3.87962 14.022 4.27276 13.7796 4.51524C13.5371 4.75771 13.1439 4.75772 12.9015 4.51524L11.4778 3.09158V5.00781C11.4778 6.89384 9.94887 8.42278 8.06283 8.42278C6.86263 8.42278 5.88967 9.39573 5.88967 10.5959V10.9856ZM6.51058 13.3897C6.51058 14.0743 5.95517 14.6303 5.26877 14.6303C4.58237 14.6303 4.02696 14.0743 4.02696 13.3897C4.02696 12.7052 4.58237 12.1492 5.26877 12.1492C5.95517 12.1492 6.51058 12.7052 6.51058 13.3897Z"
                                                fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_14_726">
                                                <rect width="14.9017" height="14.9017" fill="white"
                                                    transform="translate(0.921875 0.97168)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 support-card">
                        <div class="support-card-inner">
                            <div class="support-card-media">
                                <div class="card-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="82" height="82"
                                        viewBox="0 0 82 82" fill="none">
                                        <path opacity="0.4"
                                            d="M66.8971 18.7229C65.7696 17.4246 64.5738 16.1946 63.2754 15.1013C57.3304 9.94212 49.5404 6.83301 40.9987 6.83301C32.4912 6.83301 24.7353 9.94212 18.7562 15.1013C17.4578 16.1946 16.2278 17.4246 15.1345 18.7229C9.94117 24.7021 6.83203 32.4922 6.83203 40.9997C6.83203 49.5072 9.94117 57.2972 15.1345 63.2764C16.2278 64.5747 17.4578 65.8047 18.7562 66.8981C24.7353 72.0572 32.4912 75.1663 40.9987 75.1663C49.5404 75.1663 57.3304 72.0572 63.2754 66.8981C64.5738 65.8047 65.7696 64.5747 66.8971 63.2764C72.0563 57.2972 75.1654 49.5072 75.1654 40.9997C75.1654 32.4922 72.0563 24.7021 66.8971 18.7229ZM40.9987 56.1697C37.7187 56.1697 34.6778 55.1105 32.2178 53.3338C30.817 52.3771 29.6212 51.1814 28.6304 49.7805C26.8879 47.3205 25.8287 44.2455 25.8287 40.9997C25.8287 37.7538 26.8879 34.6788 28.6304 32.2188C29.6212 30.818 30.817 29.6222 32.2178 28.6656C34.6778 26.8889 37.7187 25.8297 40.9987 25.8297C44.2787 25.8297 47.3196 26.8889 49.8138 28.6314C51.2146 29.6222 52.4104 30.818 53.4012 32.2188C55.1437 34.6788 56.2029 37.7538 56.2029 40.9997C56.2029 44.2455 55.1437 47.3205 53.4012 49.7805C52.4104 51.1814 51.2146 52.3772 49.8138 53.368C47.3196 55.1105 44.2787 56.1697 40.9987 56.1697Z"
                                            fill="white" />
                                        <path
                                            d="M66.8997 18.7232L53.5747 32.0825C53.5063 32.1167 53.4722 32.1849 53.4039 32.2191C52.413 30.8183 51.2172 29.6225 49.8164 28.6316C49.8506 28.5633 49.8847 28.5292 49.953 28.4608L63.2781 15.1016C64.5764 16.1949 65.7722 17.4249 66.8997 18.7232Z"
                                            fill="white" />
                                        <path
                                            d="M32.2201 53.3345C32.1859 53.4028 32.1518 53.4712 32.0835 53.5395L18.7584 66.8988C17.46 65.8054 16.2301 64.5755 15.1367 63.2771L28.4618 49.9178C28.496 49.8495 28.5643 49.8154 28.6326 49.7812C29.6234 51.1821 30.8192 52.3778 32.2201 53.3345Z"
                                            fill="white" />
                                        <path
                                            d="M32.2201 28.6658C30.8192 29.6225 29.6234 30.8183 28.6326 32.2191C28.5643 32.1849 28.5301 32.1167 28.4618 32.0825L15.1367 18.7232C16.2301 17.4249 17.46 16.1949 18.7584 15.1016L32.0835 28.4608C32.1518 28.5292 32.1859 28.5975 32.2201 28.6658Z"
                                            fill="white" />
                                        <path
                                            d="M66.8997 63.2771C65.7722 64.5755 64.5764 65.8054 63.2781 66.8988L49.953 53.5395C49.8847 53.4712 49.8506 53.437 49.8164 53.3687C51.2172 52.3779 52.413 51.1821 53.4039 49.7812C53.4722 49.8154 53.5063 49.8495 53.5747 49.9178L66.8997 63.2771Z"
                                            fill="white" />
                                    </svg>
                                </div>
                            </div>
                            <div class="support-content">
                                <h3>{{ __('Comprehensive') }} <br>{{ __('Business Insights') }}</h3>
                                <p>{{ __('BookingGo SaaS offers advanced analytics and reporting features, providing businesses with valuable insights into booking trends, customer preferences, and performance metrics, enabling data-driven decision-making and strategic planning.') }}
                                </p>
                            </div>
                            <div class="support-content-bottom">
                                <a href="#" class="btn">{{ __('Find Out More') }} <svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_14_726)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.88967 10.9856C6.96087 11.2611 7.75238 12.233 7.75238 13.3897C7.75238 14.7607 6.64043 15.8721 5.26877 15.8721C3.89711 15.8721 2.78516 14.7607 2.78516 13.3897C2.78516 12.233 3.57667 11.2611 4.64787 10.9856V10.5959C4.64787 8.7099 6.1768 7.18097 8.06283 7.18097C9.26304 7.18097 10.236 6.20801 10.236 5.00781V3.09158L8.81233 4.51524C8.56985 4.75772 8.17672 4.75772 7.93424 4.51524C7.69176 4.27276 7.69176 3.87963 7.93424 3.63715L10.4179 1.15354C10.6603 0.91106 11.0535 0.91106 11.2959 1.15354L13.7796 3.63715C14.022 3.87962 14.022 4.27276 13.7796 4.51524C13.5371 4.75771 13.1439 4.75772 12.9015 4.51524L11.4778 3.09158V5.00781C11.4778 6.89384 9.94887 8.42278 8.06283 8.42278C6.86263 8.42278 5.88967 9.39573 5.88967 10.5959V10.9856ZM6.51058 13.3897C6.51058 14.0743 5.95517 14.6303 5.26877 14.6303C4.58237 14.6303 4.02696 14.0743 4.02696 13.3897C4.02696 12.7052 4.58237 12.1492 5.26877 12.1492C5.95517 12.1492 6.51058 12.7052 6.51058 13.3897Z"
                                                fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_14_726">
                                                <rect width="14.9017" height="14.9017" fill="white"
                                                    transform="translate(0.921875 0.97168)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="dedicated-themes-section">
            <div class="container">
                <div class="section-title text-center">
                    <h2> {{ __('Why choose dedicated modules') }} <b> {{ __('for Your Business?') }} </b></h2>
                    <p> {{ __('With BookingGo Saas, you can conveniently manage all your business functions from a single location.') }}
                    </p>
                </div>
            </div>
            <div class="bg-light padding-bottom padding-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-12">
                            <div class="abt-theme">
                                <div class="section-title">
                                    <div class="subtitle">
                                        {{ __('SALES') }}
                                    </div>
                                    <h2>{{ __('Photography Studio Business Theme
                                                                        ') }}
                                    </h2>
                                </div>
                                <p>{{ __('The Photography Studio Business Theme is a customizable template designed to simplify the booking process for photography studios. It offers personalized session details collection, package selection options, customizable add-ons for extra services, integrated payment processing, and automated appointment confirmations.
                                                                ') }}
                                </p>
                                <div class="theme-acnav">
                                    <div class="set has-children">
                                        <a href="javascript:;" class="acnav-label">
                                            <span class="acnav-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="33"
                                                    viewBox="0 0 30 33" fill="none">
                                                    <path
                                                        d="M15 2C9.48 2 5 6.48 5 12C5 17.52 9.48 22 15 22C20.52 22 25 17.52 25 12C25 6.48 20.52 2 15 2ZM19.03 10.2L14.36 14.86C14.22 15.01 14.03 15.08 13.83 15.08C13.64 15.08 13.45 15.01 13.3 14.86L10.97 12.53C10.68 12.24 10.68 11.76 10.97 11.47C11.26 11.18 11.74 11.18 12.03 11.47L13.83 13.27L17.97 9.14001C18.26 8.84001 18.74 8.84001 19.03 9.14001C19.32 9.43001 19.32 9.90001 19.03 10.2Z"
                                                        fill="#002332" />
                                                    <g filter="url(#filter0_d_14_1908)">
                                                        <circle cx="15" cy="12.5596" r="11" fill="#6FD943" />
                                                    </g>
                                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M19.668 8.91699C19.668 8.91699 19.668 10.7131 19.668 10.7819C19.668 10.8508 19.6143 10.9587 19.4929 10.9587C19.3372 10.9587 16.7104 10.9587 16.7104 10.9587C15.4738 10.9587 14.7096 11.7286 14.7096 12.9653V13.0003H9.16797V8.91699C9.16797 7.75033 9.7513 7.16699 10.918 7.16699H17.918C19.0846 7.16699 19.668 7.75033 19.668 8.91699Z"
                                                        fill="white" />
                                                    <path
                                                        d="M14.7096 17.7017C14.7096 17.8417 14.7213 17.9758 14.7388 18.1042H11.793C11.5538 18.1042 11.3555 17.9058 11.3555 17.6667C11.3555 17.4275 11.5538 17.2292 11.793 17.2292H13.2513V15.3333H10.918C9.7513 15.3333 9.16797 14.75 9.16797 13.5833V13H14.7096V17.7017Z"
                                                        fill="white" />
                                                    <path opacity="0.4"
                                                        d="M16.7067 18.8336H19.7068C20.457 18.8336 20.8315 18.4562 20.8315 17.7008V12.9658C20.8315 12.2109 20.4564 11.833 19.7068 11.833H16.7067C15.9565 11.833 15.582 12.2104 15.582 12.9658V17.7008C15.582 18.4562 15.9571 18.8336 16.7067 18.8336Z"
                                                        fill="white" />
                                                    <path
                                                        d="M18.2083 17.9587C18.5305 17.9587 18.7917 17.6975 18.7917 17.3753C18.7917 17.0532 18.5305 16.792 18.2083 16.792C17.8862 16.792 17.625 17.0532 17.625 17.3753C17.625 17.6975 17.8862 17.9587 18.2083 17.9587Z"
                                                        fill="white" />
                                                    <defs>
                                                        <filter id="filter0_d_14_1908" x="0" y="1.55957" width="30"
                                                            height="31" filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                result="hardAlpha" />
                                                            <feOffset dy="5" />
                                                            <feGaussianBlur stdDeviation="2" />
                                                            <feComposite in2="hardAlpha" operator="out" />
                                                            <feColorMatrix type="matrix"
                                                                values="0 0 0 0 0.435294 0 0 0 0 0.85098 0 0 0 0 0.262745 0 0 0 0.31 0" />
                                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                                result="effect1_dropShadow_14_1908" />
                                                            <feBlend mode="normal" in="SourceGraphic"
                                                                in2="effect1_dropShadow_14_1908" result="shape" />
                                                        </filter>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span>{{ __('Streamlined Booking Process
                                                                                        ') }}</span>
                                        </a>
                                        <div class="acnav-list">
                                            <p>{{ __('Clients can easily select session details, packages, and additional services, streamlining the booking process and reducing friction.
                                                                                        ') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="set has-children">
                                        <a href="javascript:;" class="acnav-label">
                                            <span class="acnav-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="33"
                                                    viewBox="0 0 30 33" fill="none">
                                                    <path
                                                        d="M15 2C9.48 2 5 6.48 5 12C5 17.52 9.48 22 15 22C20.52 22 25 17.52 25 12C25 6.48 20.52 2 15 2ZM19.03 10.2L14.36 14.86C14.22 15.01 14.03 15.08 13.83 15.08C13.64 15.08 13.45 15.01 13.3 14.86L10.97 12.53C10.68 12.24 10.68 11.76 10.97 11.47C11.26 11.18 11.74 11.18 12.03 11.47L13.83 13.27L17.97 9.14001C18.26 8.84001 18.74 8.84001 19.03 9.14001C19.32 9.43001 19.32 9.90001 19.03 10.2Z"
                                                        fill="#002332" />
                                                    <g filter="url(#filter0_d_14_1917)">
                                                        <circle cx="15" cy="12.5596" r="11" fill="#F388A8" />
                                                    </g>
                                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M19.668 8.91699C19.668 8.91699 19.668 10.7131 19.668 10.7819C19.668 10.8508 19.6143 10.9587 19.4929 10.9587C19.3372 10.9587 16.7104 10.9587 16.7104 10.9587C15.4738 10.9587 14.7096 11.7286 14.7096 12.9653V13.0003H9.16797V8.91699C9.16797 7.75033 9.7513 7.16699 10.918 7.16699H17.918C19.0846 7.16699 19.668 7.75033 19.668 8.91699Z"
                                                        fill="white" />
                                                    <path
                                                        d="M14.7096 17.7017C14.7096 17.8417 14.7213 17.9758 14.7388 18.1042H11.793C11.5538 18.1042 11.3555 17.9058 11.3555 17.6667C11.3555 17.4275 11.5538 17.2292 11.793 17.2292H13.2513V15.3333H10.918C9.7513 15.3333 9.16797 14.75 9.16797 13.5833V13H14.7096V17.7017Z"
                                                        fill="white" />
                                                    <path opacity="0.4"
                                                        d="M16.7067 18.8336H19.7068C20.457 18.8336 20.8315 18.4562 20.8315 17.7008V12.9658C20.8315 12.2109 20.4564 11.833 19.7068 11.833H16.7067C15.9565 11.833 15.582 12.2104 15.582 12.9658V17.7008C15.582 18.4562 15.9571 18.8336 16.7067 18.8336Z"
                                                        fill="white" />
                                                    <path
                                                        d="M18.2083 17.9587C18.5305 17.9587 18.7917 17.6975 18.7917 17.3753C18.7917 17.0532 18.5305 16.792 18.2083 16.792C17.8862 16.792 17.625 17.0532 17.625 17.3753C17.625 17.6975 17.8862 17.9587 18.2083 17.9587Z"
                                                        fill="white" />
                                                    <defs>
                                                        <filter id="filter0_d_14_1917" x="0" y="1.55957" width="30"
                                                            height="31" filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                result="hardAlpha" />
                                                            <feOffset dy="5" />
                                                            <feGaussianBlur stdDeviation="2" />
                                                            <feComposite in2="hardAlpha" operator="out" />
                                                            <feColorMatrix type="matrix"
                                                                values="0 0 0 0 0.952941 0 0 0 0 0.533333 0 0 0 0 0.658824 0 0 0 0.31 0" />
                                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                                result="effect1_dropShadow_14_1917" />
                                                            <feBlend mode="normal" in="SourceGraphic"
                                                                in2="effect1_dropShadow_14_1917" result="shape" />
                                                        </filter>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span>{{ __('Enhanced Customer Satisfaction
                                                                                        ') }}</span>
                                        </a>
                                        <div class="acnav-list">
                                            <p>{{ __('Automated appointment confirmations and integrated payment processing enhance customer satisfaction by providing a seamless booking experience.
                                                                                        ') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="set has-children">
                                        <a href="javascript:;" class="acnav-label">
                                            <span class="acnav-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="33"
                                                    viewBox="0 0 30 33" fill="none">
                                                    <path
                                                        d="M15 2C9.48 2 5 6.48 5 12C5 17.52 9.48 22 15 22C20.52 22 25 17.52 25 12C25 6.48 20.52 2 15 2ZM19.03 10.2L14.36 14.86C14.22 15.01 14.03 15.08 13.83 15.08C13.64 15.08 13.45 15.01 13.3 14.86L10.97 12.53C10.68 12.24 10.68 11.76 10.97 11.47C11.26 11.18 11.74 11.18 12.03 11.47L13.83 13.27L17.97 9.14001C18.26 8.84001 18.74 8.84001 19.03 9.14001C19.32 9.43001 19.32 9.90001 19.03 10.2Z"
                                                        fill="#002332" />
                                                    <g filter="url(#filter0_d_14_1929)">
                                                        <circle cx="15" cy="12.5596" r="11" fill="#FFAF75" />
                                                    </g>
                                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M19.668 8.91699C19.668 8.91699 19.668 10.7131 19.668 10.7819C19.668 10.8508 19.6143 10.9587 19.4929 10.9587C19.3372 10.9587 16.7104 10.9587 16.7104 10.9587C15.4738 10.9587 14.7096 11.7286 14.7096 12.9653V13.0003H9.16797V8.91699C9.16797 7.75033 9.7513 7.16699 10.918 7.16699H17.918C19.0846 7.16699 19.668 7.75033 19.668 8.91699Z"
                                                        fill="white" />
                                                    <path
                                                        d="M14.7096 17.7017C14.7096 17.8417 14.7213 17.9758 14.7388 18.1042H11.793C11.5538 18.1042 11.3555 17.9058 11.3555 17.6667C11.3555 17.4275 11.5538 17.2292 11.793 17.2292H13.2513V15.3333H10.918C9.7513 15.3333 9.16797 14.75 9.16797 13.5833V13H14.7096V17.7017Z"
                                                        fill="white" />
                                                    <path opacity="0.4"
                                                        d="M16.7067 18.8336H19.7068C20.457 18.8336 20.8315 18.4562 20.8315 17.7008V12.9658C20.8315 12.2109 20.4564 11.833 19.7068 11.833H16.7067C15.9565 11.833 15.582 12.2104 15.582 12.9658V17.7008C15.582 18.4562 15.9571 18.8336 16.7067 18.8336Z"
                                                        fill="white" />
                                                    <path
                                                        d="M18.2083 17.9587C18.5305 17.9587 18.7917 17.6975 18.7917 17.3753C18.7917 17.0532 18.5305 16.792 18.2083 16.792C17.8862 16.792 17.625 17.0532 17.625 17.3753C17.625 17.6975 17.8862 17.9587 18.2083 17.9587Z"
                                                        fill="white" />
                                                    <defs>
                                                        <filter id="filter0_d_14_1929" x="0" y="1.55957" width="30"
                                                            height="31" filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                result="hardAlpha" />
                                                            <feOffset dy="5" />
                                                            <feGaussianBlur stdDeviation="2" />
                                                            <feComposite in2="hardAlpha" operator="out" />
                                                            <feColorMatrix type="matrix"
                                                                values="0 0 0 0 1 0 0 0 0 0.686275 0 0 0 0 0.458824 0 0 0 0.31 0" />
                                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                                result="effect1_dropShadow_14_1929" />
                                                            <feBlend mode="normal" in="SourceGraphic"
                                                                in2="effect1_dropShadow_14_1929" result="shape" />
                                                        </filter>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span>{{ __('Increased Revenue Opportunities
                                                                                        ') }}</span>
                                        </a>
                                        <div class="acnav-list">
                                            <p>{{ __('Customizable add-ons for extra services enable photography studios to upsell and increase revenue per booking.
                                                                                        ') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-12">
                            <div class="dash-theme-preview">
                                <img src="{{ asset('market_assets/images/feature-image-2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white padding-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7  col-md-6 col-12">
                            <div class="dash-theme-preview">
                                <img src="{{ asset('market_assets/images/feature-image-3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-12">
                            <div class="abt-theme">
                                <div class="section-title">
                                    <div class="subtitle">
                                        {{ __('SALES') }}
                                    </div>
                                    <h2>{{ __('Car Services Business Theme') }}</h2>
                                </div>
                                <p>{{ __('The Car Services Business Theme is tailored to meet the needs of auto service providers. It offers streamlined service selection, appointment scheduling, vehicle details collection, service add-on options, price estimation, and automated appointment reminders.
                                
                                                                ') }}
                                </p>
                                <div class="theme-acnav">
                                    <div class="set has-children">
                                        <a href="javascript:;" class="acnav-label">
                                            <span class="acnav-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="33"
                                                    viewBox="0 0 30 33" fill="none">
                                                    <path
                                                        d="M15 2C9.48 2 5 6.48 5 12C5 17.52 9.48 22 15 22C20.52 22 25 17.52 25 12C25 6.48 20.52 2 15 2ZM19.03 10.2L14.36 14.86C14.22 15.01 14.03 15.08 13.83 15.08C13.64 15.08 13.45 15.01 13.3 14.86L10.97 12.53C10.68 12.24 10.68 11.76 10.97 11.47C11.26 11.18 11.74 11.18 12.03 11.47L13.83 13.27L17.97 9.14001C18.26 8.84001 18.74 8.84001 19.03 9.14001C19.32 9.43001 19.32 9.90001 19.03 10.2Z"
                                                        fill="#002332" />
                                                    <g filter="url(#filter0_d_14_1908)">
                                                        <circle cx="15" cy="12.5596" r="11" fill="#6FD943" />
                                                    </g>
                                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M19.668 8.91699C19.668 8.91699 19.668 10.7131 19.668 10.7819C19.668 10.8508 19.6143 10.9587 19.4929 10.9587C19.3372 10.9587 16.7104 10.9587 16.7104 10.9587C15.4738 10.9587 14.7096 11.7286 14.7096 12.9653V13.0003H9.16797V8.91699C9.16797 7.75033 9.7513 7.16699 10.918 7.16699H17.918C19.0846 7.16699 19.668 7.75033 19.668 8.91699Z"
                                                        fill="white" />
                                                    <path
                                                        d="M14.7096 17.7017C14.7096 17.8417 14.7213 17.9758 14.7388 18.1042H11.793C11.5538 18.1042 11.3555 17.9058 11.3555 17.6667C11.3555 17.4275 11.5538 17.2292 11.793 17.2292H13.2513V15.3333H10.918C9.7513 15.3333 9.16797 14.75 9.16797 13.5833V13H14.7096V17.7017Z"
                                                        fill="white" />
                                                    <path opacity="0.4"
                                                        d="M16.7067 18.8336H19.7068C20.457 18.8336 20.8315 18.4562 20.8315 17.7008V12.9658C20.8315 12.2109 20.4564 11.833 19.7068 11.833H16.7067C15.9565 11.833 15.582 12.2104 15.582 12.9658V17.7008C15.582 18.4562 15.9571 18.8336 16.7067 18.8336Z"
                                                        fill="white" />
                                                    <path
                                                        d="M18.2083 17.9587C18.5305 17.9587 18.7917 17.6975 18.7917 17.3753C18.7917 17.0532 18.5305 16.792 18.2083 16.792C17.8862 16.792 17.625 17.0532 17.625 17.3753C17.625 17.6975 17.8862 17.9587 18.2083 17.9587Z"
                                                        fill="white" />
                                                    <defs>
                                                        <filter id="filter0_d_14_1908" x="0" y="1.55957" width="30"
                                                            height="31" filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                result="hardAlpha" />
                                                            <feOffset dy="5" />
                                                            <feGaussianBlur stdDeviation="2" />
                                                            <feComposite in2="hardAlpha" operator="out" />
                                                            <feColorMatrix type="matrix"
                                                                values="0 0 0 0 0.435294 0 0 0 0 0.85098 0 0 0 0 0.262745 0 0 0 0.31 0" />
                                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                                result="effect1_dropShadow_14_1908" />
                                                            <feBlend mode="normal" in="SourceGraphic"
                                                                in2="effect1_dropShadow_14_1908" result="shape" />
                                                        </filter>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span>{{ __('Improved Efficiency
                                                                                        ') }}</span>
                                        </a>
                                        <div class="acnav-list">
                                            <p>{{ __('Streamlined service selection and appointment scheduling save time for both service providers and clients, improving overall efficiency.
                                                                                        ') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="set has-children">
                                        <a href="javascript:;" class="acnav-label">
                                            <span class="acnav-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="33"
                                                    viewBox="0 0 30 33" fill="none">
                                                    <path
                                                        d="M15 2C9.48 2 5 6.48 5 12C5 17.52 9.48 22 15 22C20.52 22 25 17.52 25 12C25 6.48 20.52 2 15 2ZM19.03 10.2L14.36 14.86C14.22 15.01 14.03 15.08 13.83 15.08C13.64 15.08 13.45 15.01 13.3 14.86L10.97 12.53C10.68 12.24 10.68 11.76 10.97 11.47C11.26 11.18 11.74 11.18 12.03 11.47L13.83 13.27L17.97 9.14001C18.26 8.84001 18.74 8.84001 19.03 9.14001C19.32 9.43001 19.32 9.90001 19.03 10.2Z"
                                                        fill="#002332" />
                                                    <g filter="url(#filter0_d_14_1917)">
                                                        <circle cx="15" cy="12.5596" r="11" fill="#F388A8" />
                                                    </g>
                                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M19.668 8.91699C19.668 8.91699 19.668 10.7131 19.668 10.7819C19.668 10.8508 19.6143 10.9587 19.4929 10.9587C19.3372 10.9587 16.7104 10.9587 16.7104 10.9587C15.4738 10.9587 14.7096 11.7286 14.7096 12.9653V13.0003H9.16797V8.91699C9.16797 7.75033 9.7513 7.16699 10.918 7.16699H17.918C19.0846 7.16699 19.668 7.75033 19.668 8.91699Z"
                                                        fill="white" />
                                                    <path
                                                        d="M14.7096 17.7017C14.7096 17.8417 14.7213 17.9758 14.7388 18.1042H11.793C11.5538 18.1042 11.3555 17.9058 11.3555 17.6667C11.3555 17.4275 11.5538 17.2292 11.793 17.2292H13.2513V15.3333H10.918C9.7513 15.3333 9.16797 14.75 9.16797 13.5833V13H14.7096V17.7017Z"
                                                        fill="white" />
                                                    <path opacity="0.4"
                                                        d="M16.7067 18.8336H19.7068C20.457 18.8336 20.8315 18.4562 20.8315 17.7008V12.9658C20.8315 12.2109 20.4564 11.833 19.7068 11.833H16.7067C15.9565 11.833 15.582 12.2104 15.582 12.9658V17.7008C15.582 18.4562 15.9571 18.8336 16.7067 18.8336Z"
                                                        fill="white" />
                                                    <path
                                                        d="M18.2083 17.9587C18.5305 17.9587 18.7917 17.6975 18.7917 17.3753C18.7917 17.0532 18.5305 16.792 18.2083 16.792C17.8862 16.792 17.625 17.0532 17.625 17.3753C17.625 17.6975 17.8862 17.9587 18.2083 17.9587Z"
                                                        fill="white" />
                                                    <defs>
                                                        <filter id="filter0_d_14_1917" x="0" y="1.55957" width="30"
                                                            height="31" filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                result="hardAlpha" />
                                                            <feOffset dy="5" />
                                                            <feGaussianBlur stdDeviation="2" />
                                                            <feComposite in2="hardAlpha" operator="out" />
                                                            <feColorMatrix type="matrix"
                                                                values="0 0 0 0 0.952941 0 0 0 0 0.533333 0 0 0 0 0.658824 0 0 0 0.31 0" />
                                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                                result="effect1_dropShadow_14_1917" />
                                                            <feBlend mode="normal" in="SourceGraphic"
                                                                in2="effect1_dropShadow_14_1917" result="shape" />
                                                        </filter>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span>{{ __('Enhanced Communication
                                                                                        ') }}</span>
                                        </a>
                                        <div class="acnav-list">
                                            <p>{{ __('Automated appointment reminders keep clients informed and reduce no-shows, improving communication and appointment adherence.
                                                                                        ') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="set has-children">
                                        <a href="javascript:;" class="acnav-label">
                                            <span class="acnav-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="33"
                                                    viewBox="0 0 30 33" fill="none">
                                                    <path
                                                        d="M15 2C9.48 2 5 6.48 5 12C5 17.52 9.48 22 15 22C20.52 22 25 17.52 25 12C25 6.48 20.52 2 15 2ZM19.03 10.2L14.36 14.86C14.22 15.01 14.03 15.08 13.83 15.08C13.64 15.08 13.45 15.01 13.3 14.86L10.97 12.53C10.68 12.24 10.68 11.76 10.97 11.47C11.26 11.18 11.74 11.18 12.03 11.47L13.83 13.27L17.97 9.14001C18.26 8.84001 18.74 8.84001 19.03 9.14001C19.32 9.43001 19.32 9.90001 19.03 10.2Z"
                                                        fill="#002332" />
                                                    <g filter="url(#filter0_d_14_1929)">
                                                        <circle cx="15" cy="12.5596" r="11" fill="#FFAF75" />
                                                    </g>
                                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M19.668 8.91699C19.668 8.91699 19.668 10.7131 19.668 10.7819C19.668 10.8508 19.6143 10.9587 19.4929 10.9587C19.3372 10.9587 16.7104 10.9587 16.7104 10.9587C15.4738 10.9587 14.7096 11.7286 14.7096 12.9653V13.0003H9.16797V8.91699C9.16797 7.75033 9.7513 7.16699 10.918 7.16699H17.918C19.0846 7.16699 19.668 7.75033 19.668 8.91699Z"
                                                        fill="white" />
                                                    <path
                                                        d="M14.7096 17.7017C14.7096 17.8417 14.7213 17.9758 14.7388 18.1042H11.793C11.5538 18.1042 11.3555 17.9058 11.3555 17.6667C11.3555 17.4275 11.5538 17.2292 11.793 17.2292H13.2513V15.3333H10.918C9.7513 15.3333 9.16797 14.75 9.16797 13.5833V13H14.7096V17.7017Z"
                                                        fill="white" />
                                                    <path opacity="0.4"
                                                        d="M16.7067 18.8336H19.7068C20.457 18.8336 20.8315 18.4562 20.8315 17.7008V12.9658C20.8315 12.2109 20.4564 11.833 19.7068 11.833H16.7067C15.9565 11.833 15.582 12.2104 15.582 12.9658V17.7008C15.582 18.4562 15.9571 18.8336 16.7067 18.8336Z"
                                                        fill="white" />
                                                    <path
                                                        d="M18.2083 17.9587C18.5305 17.9587 18.7917 17.6975 18.7917 17.3753C18.7917 17.0532 18.5305 16.792 18.2083 16.792C17.8862 16.792 17.625 17.0532 17.625 17.3753C17.625 17.6975 17.8862 17.9587 18.2083 17.9587Z"
                                                        fill="white" />
                                                    <defs>
                                                        <filter id="filter0_d_14_1929" x="0" y="1.55957" width="30"
                                                            height="31" filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                result="hardAlpha" />
                                                            <feOffset dy="5" />
                                                            <feGaussianBlur stdDeviation="2" />
                                                            <feComposite in2="hardAlpha" operator="out" />
                                                            <feColorMatrix type="matrix"
                                                                values="0 0 0 0 1 0 0 0 0 0.686275 0 0 0 0 0.458824 0 0 0 0.31 0" />
                                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                                result="effect1_dropShadow_14_1929" />
                                                            <feBlend mode="normal" in="SourceGraphic"
                                                                in2="effect1_dropShadow_14_1929" result="shape" />
                                                        </filter>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span>{{ __('Personalized Service Options
                                                                                        ') }}</span>
                                        </a>
                                        <div class="acnav-list">
                                            <p>{{ __('Service add-on options allow clients to customize their service packages, enhancing satisfaction and loyalty.') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-light padding-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-12">
                            <div class="abt-theme">
                                <div class="section-title">
                                    <div class="subtitle">
                                        {{ __('SALES') }}
                                    </div>
                                    <h2>{{ __('Custom Status Module in BookingGo SaaS
                                                                        ') }}
                                    </h2>
                                </div>
                                <p>{{ __('The Custom Status module within BookingGo SaaS offers administrators the ability to tailor appointment statuses to suit unique business workflows and requirements, providing enhanced clarity and efficiency in appointment management.
                                                                ') }}
                                </p>
                                <div class="theme-acnav">
                                    <div class="set has-children">
                                        <a href="javascript:;" class="acnav-label">
                                            <span class="acnav-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="33"
                                                    viewBox="0 0 30 33" fill="none">
                                                    <path
                                                        d="M15 2C9.48 2 5 6.48 5 12C5 17.52 9.48 22 15 22C20.52 22 25 17.52 25 12C25 6.48 20.52 2 15 2ZM19.03 10.2L14.36 14.86C14.22 15.01 14.03 15.08 13.83 15.08C13.64 15.08 13.45 15.01 13.3 14.86L10.97 12.53C10.68 12.24 10.68 11.76 10.97 11.47C11.26 11.18 11.74 11.18 12.03 11.47L13.83 13.27L17.97 9.14001C18.26 8.84001 18.74 8.84001 19.03 9.14001C19.32 9.43001 19.32 9.90001 19.03 10.2Z"
                                                        fill="#002332" />
                                                    <g filter="url(#filter0_d_14_1908)">
                                                        <circle cx="15" cy="12.5596" r="11" fill="#6FD943" />
                                                    </g>
                                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M19.668 8.91699C19.668 8.91699 19.668 10.7131 19.668 10.7819C19.668 10.8508 19.6143 10.9587 19.4929 10.9587C19.3372 10.9587 16.7104 10.9587 16.7104 10.9587C15.4738 10.9587 14.7096 11.7286 14.7096 12.9653V13.0003H9.16797V8.91699C9.16797 7.75033 9.7513 7.16699 10.918 7.16699H17.918C19.0846 7.16699 19.668 7.75033 19.668 8.91699Z"
                                                        fill="white" />
                                                    <path
                                                        d="M14.7096 17.7017C14.7096 17.8417 14.7213 17.9758 14.7388 18.1042H11.793C11.5538 18.1042 11.3555 17.9058 11.3555 17.6667C11.3555 17.4275 11.5538 17.2292 11.793 17.2292H13.2513V15.3333H10.918C9.7513 15.3333 9.16797 14.75 9.16797 13.5833V13H14.7096V17.7017Z"
                                                        fill="white" />
                                                    <path opacity="0.4"
                                                        d="M16.7067 18.8336H19.7068C20.457 18.8336 20.8315 18.4562 20.8315 17.7008V12.9658C20.8315 12.2109 20.4564 11.833 19.7068 11.833H16.7067C15.9565 11.833 15.582 12.2104 15.582 12.9658V17.7008C15.582 18.4562 15.9571 18.8336 16.7067 18.8336Z"
                                                        fill="white" />
                                                    <path
                                                        d="M18.2083 17.9587C18.5305 17.9587 18.7917 17.6975 18.7917 17.3753C18.7917 17.0532 18.5305 16.792 18.2083 16.792C17.8862 16.792 17.625 17.0532 17.625 17.3753C17.625 17.6975 17.8862 17.9587 18.2083 17.9587Z"
                                                        fill="white" />
                                                    <defs>
                                                        <filter id="filter0_d_14_1908" x="0" y="1.55957" width="30"
                                                            height="31" filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                result="hardAlpha" />
                                                            <feOffset dy="5" />
                                                            <feGaussianBlur stdDeviation="2" />
                                                            <feComposite in2="hardAlpha" operator="out" />
                                                            <feColorMatrix type="matrix"
                                                                values="0 0 0 0 0.435294 0 0 0 0 0.85098 0 0 0 0 0.262745 0 0 0 0.31 0" />
                                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                                result="effect1_dropShadow_14_1908" />
                                                            <feBlend mode="normal" in="SourceGraphic"
                                                                in2="effect1_dropShadow_14_1908" result="shape" />
                                                        </filter>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span>{{ __('Flexibility
                                                                                        ') }}</span>
                                        </a>
                                        <div class="acnav-list">
                                            <p>{{ __('Administrators can define custom appointment statuses, aligning them with specific business processes and requirements.
                                                                                        ') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="set has-children">
                                        <a href="javascript:;" class="acnav-label">
                                            <span class="acnav-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="33"
                                                    viewBox="0 0 30 33" fill="none">
                                                    <path
                                                        d="M15 2C9.48 2 5 6.48 5 12C5 17.52 9.48 22 15 22C20.52 22 25 17.52 25 12C25 6.48 20.52 2 15 2ZM19.03 10.2L14.36 14.86C14.22 15.01 14.03 15.08 13.83 15.08C13.64 15.08 13.45 15.01 13.3 14.86L10.97 12.53C10.68 12.24 10.68 11.76 10.97 11.47C11.26 11.18 11.74 11.18 12.03 11.47L13.83 13.27L17.97 9.14001C18.26 8.84001 18.74 8.84001 19.03 9.14001C19.32 9.43001 19.32 9.90001 19.03 10.2Z"
                                                        fill="#002332" />
                                                    <g filter="url(#filter0_d_14_1917)">
                                                        <circle cx="15" cy="12.5596" r="11" fill="#F388A8" />
                                                    </g>
                                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M19.668 8.91699C19.668 8.91699 19.668 10.7131 19.668 10.7819C19.668 10.8508 19.6143 10.9587 19.4929 10.9587C19.3372 10.9587 16.7104 10.9587 16.7104 10.9587C15.4738 10.9587 14.7096 11.7286 14.7096 12.9653V13.0003H9.16797V8.91699C9.16797 7.75033 9.7513 7.16699 10.918 7.16699H17.918C19.0846 7.16699 19.668 7.75033 19.668 8.91699Z"
                                                        fill="white" />
                                                    <path
                                                        d="M14.7096 17.7017C14.7096 17.8417 14.7213 17.9758 14.7388 18.1042H11.793C11.5538 18.1042 11.3555 17.9058 11.3555 17.6667C11.3555 17.4275 11.5538 17.2292 11.793 17.2292H13.2513V15.3333H10.918C9.7513 15.3333 9.16797 14.75 9.16797 13.5833V13H14.7096V17.7017Z"
                                                        fill="white" />
                                                    <path opacity="0.4"
                                                        d="M16.7067 18.8336H19.7068C20.457 18.8336 20.8315 18.4562 20.8315 17.7008V12.9658C20.8315 12.2109 20.4564 11.833 19.7068 11.833H16.7067C15.9565 11.833 15.582 12.2104 15.582 12.9658V17.7008C15.582 18.4562 15.9571 18.8336 16.7067 18.8336Z"
                                                        fill="white" />
                                                    <path
                                                        d="M18.2083 17.9587C18.5305 17.9587 18.7917 17.6975 18.7917 17.3753C18.7917 17.0532 18.5305 16.792 18.2083 16.792C17.8862 16.792 17.625 17.0532 17.625 17.3753C17.625 17.6975 17.8862 17.9587 18.2083 17.9587Z"
                                                        fill="white" />
                                                    <defs>
                                                        <filter id="filter0_d_14_1917" x="0" y="1.55957" width="30"
                                                            height="31" filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                result="hardAlpha" />
                                                            <feOffset dy="5" />
                                                            <feGaussianBlur stdDeviation="2" />
                                                            <feComposite in2="hardAlpha" operator="out" />
                                                            <feColorMatrix type="matrix"
                                                                values="0 0 0 0 0.952941 0 0 0 0 0.533333 0 0 0 0 0.658824 0 0 0 0.31 0" />
                                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                                result="effect1_dropShadow_14_1917" />
                                                            <feBlend mode="normal" in="SourceGraphic"
                                                                in2="effect1_dropShadow_14_1917" result="shape" />
                                                        </filter>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span>{{ __('Improved Workflow') }}</span>
                                        </a>
                                        <div class="acnav-list">
                                            <p>{{ __('Tailoring appointment statuses enhances clarity in the booking process, streamlining appointment management.
                                                                                        ') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="set has-children">
                                        <a href="javascript:;" class="acnav-label">
                                            <span class="acnav-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="33"
                                                    viewBox="0 0 30 33" fill="none">
                                                    <path
                                                        d="M15 2C9.48 2 5 6.48 5 12C5 17.52 9.48 22 15 22C20.52 22 25 17.52 25 12C25 6.48 20.52 2 15 2ZM19.03 10.2L14.36 14.86C14.22 15.01 14.03 15.08 13.83 15.08C13.64 15.08 13.45 15.01 13.3 14.86L10.97 12.53C10.68 12.24 10.68 11.76 10.97 11.47C11.26 11.18 11.74 11.18 12.03 11.47L13.83 13.27L17.97 9.14001C18.26 8.84001 18.74 8.84001 19.03 9.14001C19.32 9.43001 19.32 9.90001 19.03 10.2Z"
                                                        fill="#002332" />
                                                    <g filter="url(#filter0_d_14_1929)">
                                                        <circle cx="15" cy="12.5596" r="11" fill="#FFAF75" />
                                                    </g>
                                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M19.668 8.91699C19.668 8.91699 19.668 10.7131 19.668 10.7819C19.668 10.8508 19.6143 10.9587 19.4929 10.9587C19.3372 10.9587 16.7104 10.9587 16.7104 10.9587C15.4738 10.9587 14.7096 11.7286 14.7096 12.9653V13.0003H9.16797V8.91699C9.16797 7.75033 9.7513 7.16699 10.918 7.16699H17.918C19.0846 7.16699 19.668 7.75033 19.668 8.91699Z"
                                                        fill="white" />
                                                    <path
                                                        d="M14.7096 17.7017C14.7096 17.8417 14.7213 17.9758 14.7388 18.1042H11.793C11.5538 18.1042 11.3555 17.9058 11.3555 17.6667C11.3555 17.4275 11.5538 17.2292 11.793 17.2292H13.2513V15.3333H10.918C9.7513 15.3333 9.16797 14.75 9.16797 13.5833V13H14.7096V17.7017Z"
                                                        fill="white" />
                                                    <path opacity="0.4"
                                                        d="M16.7067 18.8336H19.7068C20.457 18.8336 20.8315 18.4562 20.8315 17.7008V12.9658C20.8315 12.2109 20.4564 11.833 19.7068 11.833H16.7067C15.9565 11.833 15.582 12.2104 15.582 12.9658V17.7008C15.582 18.4562 15.9571 18.8336 16.7067 18.8336Z"
                                                        fill="white" />
                                                    <path
                                                        d="M18.2083 17.9587C18.5305 17.9587 18.7917 17.6975 18.7917 17.3753C18.7917 17.0532 18.5305 16.792 18.2083 16.792C17.8862 16.792 17.625 17.0532 17.625 17.3753C17.625 17.6975 17.8862 17.9587 18.2083 17.9587Z"
                                                        fill="white" />
                                                    <defs>
                                                        <filter id="filter0_d_14_1929" x="0" y="1.55957" width="30"
                                                            height="31" filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                result="hardAlpha" />
                                                            <feOffset dy="5" />
                                                            <feGaussianBlur stdDeviation="2" />
                                                            <feComposite in2="hardAlpha" operator="out" />
                                                            <feColorMatrix type="matrix"
                                                                values="0 0 0 0 1 0 0 0 0 0.686275 0 0 0 0 0.458824 0 0 0 0.31 0" />
                                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                                result="effect1_dropShadow_14_1929" />
                                                            <feBlend mode="normal" in="SourceGraphic"
                                                                in2="effect1_dropShadow_14_1929" result="shape" />
                                                        </filter>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span>{{ __('Enhanced Efficiency
                                                                                        ') }}</span>
                                        </a>
                                        <div class="acnav-list">
                                            <p>{{ __('
                                                                                        Customized statuses ensure that appointments are accurately tracked and managed, optimizing overall efficiency in scheduling and organization.
                                                                                        ') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-12">
                            <div class="dash-theme-preview">
                                <img src="{{ asset('market_assets/images/feature-image-4.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white padding-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 col-12">
                            <div class="dash-theme-preview">
                                <img src="{{ asset('market_assets/images/feature-image-5.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-12">
                            <div class="abt-theme">
                                <div class="section-title">
                                    <div class="subtitle">
                                        {{ __('SALES') }}
                                    </div>
                                    <h2>{{ __('Optimizing Appointment Scheduling
                                        ') }}</h2>
                                </div>
                                <p>{{ __('Appointment Slot Capacity Setting – designed to revolutionize appointment scheduling for businesses. This innovative setting allows administrators to define the maximum number of appointments that can be scheduled within specific time slots, enhancing resource utilization and service levels.
                                    ') }}
                                </p>
                                <div class="theme-acnav">
                                    <div class="set has-children">
                                        <a href="javascript:;" class="acnav-label">
                                            <span class="acnav-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="33"
                                                    viewBox="0 0 30 33" fill="none">
                                                    <path
                                                        d="M15 2C9.48 2 5 6.48 5 12C5 17.52 9.48 22 15 22C20.52 22 25 17.52 25 12C25 6.48 20.52 2 15 2ZM19.03 10.2L14.36 14.86C14.22 15.01 14.03 15.08 13.83 15.08C13.64 15.08 13.45 15.01 13.3 14.86L10.97 12.53C10.68 12.24 10.68 11.76 10.97 11.47C11.26 11.18 11.74 11.18 12.03 11.47L13.83 13.27L17.97 9.14001C18.26 8.84001 18.74 8.84001 19.03 9.14001C19.32 9.43001 19.32 9.90001 19.03 10.2Z"
                                                        fill="#002332" />
                                                    <g filter="url(#filter0_d_14_1908)">
                                                        <circle cx="15" cy="12.5596" r="11" fill="#6FD943" />
                                                    </g>
                                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M19.668 8.91699C19.668 8.91699 19.668 10.7131 19.668 10.7819C19.668 10.8508 19.6143 10.9587 19.4929 10.9587C19.3372 10.9587 16.7104 10.9587 16.7104 10.9587C15.4738 10.9587 14.7096 11.7286 14.7096 12.9653V13.0003H9.16797V8.91699C9.16797 7.75033 9.7513 7.16699 10.918 7.16699H17.918C19.0846 7.16699 19.668 7.75033 19.668 8.91699Z"
                                                        fill="white" />
                                                    <path
                                                        d="M14.7096 17.7017C14.7096 17.8417 14.7213 17.9758 14.7388 18.1042H11.793C11.5538 18.1042 11.3555 17.9058 11.3555 17.6667C11.3555 17.4275 11.5538 17.2292 11.793 17.2292H13.2513V15.3333H10.918C9.7513 15.3333 9.16797 14.75 9.16797 13.5833V13H14.7096V17.7017Z"
                                                        fill="white" />
                                                    <path opacity="0.4"
                                                        d="M16.7067 18.8336H19.7068C20.457 18.8336 20.8315 18.4562 20.8315 17.7008V12.9658C20.8315 12.2109 20.4564 11.833 19.7068 11.833H16.7067C15.9565 11.833 15.582 12.2104 15.582 12.9658V17.7008C15.582 18.4562 15.9571 18.8336 16.7067 18.8336Z"
                                                        fill="white" />
                                                    <path
                                                        d="M18.2083 17.9587C18.5305 17.9587 18.7917 17.6975 18.7917 17.3753C18.7917 17.0532 18.5305 16.792 18.2083 16.792C17.8862 16.792 17.625 17.0532 17.625 17.3753C17.625 17.6975 17.8862 17.9587 18.2083 17.9587Z"
                                                        fill="white" />
                                                    <defs>
                                                        <filter id="filter0_d_14_1908" x="0" y="1.55957" width="30"
                                                            height="31" filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                result="hardAlpha" />
                                                            <feOffset dy="5" />
                                                            <feGaussianBlur stdDeviation="2" />
                                                            <feComposite in2="hardAlpha" operator="out" />
                                                            <feColorMatrix type="matrix"
                                                                values="0 0 0 0 0.435294 0 0 0 0 0.85098 0 0 0 0 0.262745 0 0 0 0.31 0" />
                                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                                result="effect1_dropShadow_14_1908" />
                                                            <feBlend mode="normal" in="SourceGraphic"
                                                                in2="effect1_dropShadow_14_1908" result="shape" />
                                                        </filter>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span>{{ __('Enhanced Efficiency
                                                ') }}</span>
                                        </a>
                                        <div class="acnav-list">
                                            <p>{{ __('Define maximum appointment capacities within time slots to optimize resource utilization and streamline scheduling.') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="set has-children">
                                        <a href="javascript:;" class="acnav-label">
                                            <span class="acnav-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="33"
                                                    viewBox="0 0 30 33" fill="none">
                                                    <path
                                                        d="M15 2C9.48 2 5 6.48 5 12C5 17.52 9.48 22 15 22C20.52 22 25 17.52 25 12C25 6.48 20.52 2 15 2ZM19.03 10.2L14.36 14.86C14.22 15.01 14.03 15.08 13.83 15.08C13.64 15.08 13.45 15.01 13.3 14.86L10.97 12.53C10.68 12.24 10.68 11.76 10.97 11.47C11.26 11.18 11.74 11.18 12.03 11.47L13.83 13.27L17.97 9.14001C18.26 8.84001 18.74 8.84001 19.03 9.14001C19.32 9.43001 19.32 9.90001 19.03 10.2Z"
                                                        fill="#002332" />
                                                    <g filter="url(#filter0_d_14_1917)">
                                                        <circle cx="15" cy="12.5596" r="11" fill="#F388A8" />
                                                    </g>
                                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M19.668 8.91699C19.668 8.91699 19.668 10.7131 19.668 10.7819C19.668 10.8508 19.6143 10.9587 19.4929 10.9587C19.3372 10.9587 16.7104 10.9587 16.7104 10.9587C15.4738 10.9587 14.7096 11.7286 14.7096 12.9653V13.0003H9.16797V8.91699C9.16797 7.75033 9.7513 7.16699 10.918 7.16699H17.918C19.0846 7.16699 19.668 7.75033 19.668 8.91699Z"
                                                        fill="white" />
                                                    <path
                                                        d="M14.7096 17.7017C14.7096 17.8417 14.7213 17.9758 14.7388 18.1042H11.793C11.5538 18.1042 11.3555 17.9058 11.3555 17.6667C11.3555 17.4275 11.5538 17.2292 11.793 17.2292H13.2513V15.3333H10.918C9.7513 15.3333 9.16797 14.75 9.16797 13.5833V13H14.7096V17.7017Z"
                                                        fill="white" />
                                                    <path opacity="0.4"
                                                        d="M16.7067 18.8336H19.7068C20.457 18.8336 20.8315 18.4562 20.8315 17.7008V12.9658C20.8315 12.2109 20.4564 11.833 19.7068 11.833H16.7067C15.9565 11.833 15.582 12.2104 15.582 12.9658V17.7008C15.582 18.4562 15.9571 18.8336 16.7067 18.8336Z"
                                                        fill="white" />
                                                    <path
                                                        d="M18.2083 17.9587C18.5305 17.9587 18.7917 17.6975 18.7917 17.3753C18.7917 17.0532 18.5305 16.792 18.2083 16.792C17.8862 16.792 17.625 17.0532 17.625 17.3753C17.625 17.6975 17.8862 17.9587 18.2083 17.9587Z"
                                                        fill="white" />
                                                    <defs>
                                                        <filter id="filter0_d_14_1917" x="0" y="1.55957" width="30"
                                                            height="31" filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                result="hardAlpha" />
                                                            <feOffset dy="5" />
                                                            <feGaussianBlur stdDeviation="2" />
                                                            <feComposite in2="hardAlpha" operator="out" />
                                                            <feColorMatrix type="matrix"
                                                                values="0 0 0 0 0.952941 0 0 0 0 0.533333 0 0 0 0 0.658824 0 0 0 0.31 0" />
                                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                                result="effect1_dropShadow_14_1917" />
                                                            <feBlend mode="normal" in="SourceGraphic"
                                                                in2="effect1_dropShadow_14_1917" result="shape" />
                                                        </filter>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span>{{ __('Customizable Settings
                                                ') }}</span>
                                        </a>
                                        <div class="acnav-list">
                                            <p>{{ __('Administrators can tailor appointment slots to match operational capacity, ensuring appointments are efficiently managed.
                                                ') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="set has-children">
                                        <a href="javascript:;" class="acnav-label">
                                            <span class="acnav-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="33"
                                                    viewBox="0 0 30 33" fill="none">
                                                    <path
                                                        d="M15 2C9.48 2 5 6.48 5 12C5 17.52 9.48 22 15 22C20.52 22 25 17.52 25 12C25 6.48 20.52 2 15 2ZM19.03 10.2L14.36 14.86C14.22 15.01 14.03 15.08 13.83 15.08C13.64 15.08 13.45 15.01 13.3 14.86L10.97 12.53C10.68 12.24 10.68 11.76 10.97 11.47C11.26 11.18 11.74 11.18 12.03 11.47L13.83 13.27L17.97 9.14001C18.26 8.84001 18.74 8.84001 19.03 9.14001C19.32 9.43001 19.32 9.90001 19.03 10.2Z"
                                                        fill="#002332" />
                                                    <g filter="url(#filter0_d_14_1929)">
                                                        <circle cx="15" cy="12.5596" r="11" fill="#FFAF75" />
                                                    </g>
                                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M19.668 8.91699C19.668 8.91699 19.668 10.7131 19.668 10.7819C19.668 10.8508 19.6143 10.9587 19.4929 10.9587C19.3372 10.9587 16.7104 10.9587 16.7104 10.9587C15.4738 10.9587 14.7096 11.7286 14.7096 12.9653V13.0003H9.16797V8.91699C9.16797 7.75033 9.7513 7.16699 10.918 7.16699H17.918C19.0846 7.16699 19.668 7.75033 19.668 8.91699Z"
                                                        fill="white" />
                                                    <path
                                                        d="M14.7096 17.7017C14.7096 17.8417 14.7213 17.9758 14.7388 18.1042H11.793C11.5538 18.1042 11.3555 17.9058 11.3555 17.6667C11.3555 17.4275 11.5538 17.2292 11.793 17.2292H13.2513V15.3333H10.918C9.7513 15.3333 9.16797 14.75 9.16797 13.5833V13H14.7096V17.7017Z"
                                                        fill="white" />
                                                    <path opacity="0.4"
                                                        d="M16.7067 18.8336H19.7068C20.457 18.8336 20.8315 18.4562 20.8315 17.7008V12.9658C20.8315 12.2109 20.4564 11.833 19.7068 11.833H16.7067C15.9565 11.833 15.582 12.2104 15.582 12.9658V17.7008C15.582 18.4562 15.9571 18.8336 16.7067 18.8336Z"
                                                        fill="white" />
                                                    <path
                                                        d="M18.2083 17.9587C18.5305 17.9587 18.7917 17.6975 18.7917 17.3753C18.7917 17.0532 18.5305 16.792 18.2083 16.792C17.8862 16.792 17.625 17.0532 17.625 17.3753C17.625 17.6975 17.8862 17.9587 18.2083 17.9587Z"
                                                        fill="white" />
                                                    <defs>
                                                        <filter id="filter0_d_14_1929" x="0" y="1.55957" width="30"
                                                            height="31" filterUnits="userSpaceOnUse"
                                                            color-interpolation-filters="sRGB">
                                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                result="hardAlpha" />
                                                            <feOffset dy="5" />
                                                            <feGaussianBlur stdDeviation="2" />
                                                            <feComposite in2="hardAlpha" operator="out" />
                                                            <feColorMatrix type="matrix"
                                                                values="0 0 0 0 1 0 0 0 0 0.686275 0 0 0 0 0.458824 0 0 0 0.31 0" />
                                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                                result="effect1_dropShadow_14_1929" />
                                                            <feBlend mode="normal" in="SourceGraphic"
                                                                in2="effect1_dropShadow_14_1929" result="shape" />
                                                        </filter>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span>{{ __('Improved Customer Service') }}</span>
                                        </a>
                                        <div class="acnav-list">
                                            <p>{{ __('By maintaining optimal appointment levels, businesses can deliver exceptional customer service and minimize scheduling conflicts.
                                                ') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="review-section padding-bottom padding-top">
            <div class="container">
                <div class="review-slider">
                    <div class="review-content-itm">
                        <div class="review-content">
                            <div class="section-title">
                                <div class="quats">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="83" height="59"
                                        viewBox="0 0 83 59" fill="none">
                                        <path
                                            d="M17.4193 58.9563C12.8711 58.9563 8.86601 57.2932 5.40398 53.9669C1.94195 50.5727 0.210938 45.8209 0.210938 39.7115C0.210938 34.2809 1.33101 29.0878 3.57114 24.1324C5.81128 19.109 8.76418 14.5609 12.4299 10.4879C16.1634 6.34704 20.2364 2.85108 24.6488 0L35.1367 7.73865C33.9827 8.689 32.5232 10.2503 30.7582 12.4226C28.9933 14.5948 27.2962 16.9707 25.667 19.5503C24.0378 22.1298 22.9178 24.5397 22.3068 26.7798C25.701 27.8659 28.4842 29.7327 30.6564 32.3801C32.8965 34.9597 34.0166 38.3199 34.0166 42.4607C34.0166 47.4841 32.3195 51.4892 28.9254 54.476C25.5991 57.4629 21.7638 58.9563 17.4193 58.9563ZM65.073 58.9563C60.457 58.9563 56.4519 57.2932 53.0578 53.9669C49.6636 50.5727 47.9666 45.8209 47.9666 39.7115C47.9666 34.3487 49.0866 29.1896 51.3268 24.2342C53.6348 19.2108 56.6216 14.6288 60.2873 10.4879C64.0209 6.27917 68.0259 2.7832 72.3026 0L82.8923 7.73865C81.6704 8.82478 80.177 10.42 78.412 12.5244C76.6471 14.6288 74.9839 16.9707 73.4226 19.5503C71.8613 22.0619 70.7413 24.4718 70.0624 26.7798C73.3887 27.8659 76.1719 29.7327 78.412 32.3801C80.6522 34.9597 81.7722 38.3199 81.7722 42.4607C81.7722 47.4841 80.0752 51.4892 76.681 54.476C73.3548 57.4629 69.4854 58.9563 65.073 58.9563Z"
                                            fill="#002332" />
                                    </svg>
                                </div>
                                <div class="subtitle">
                                    {{ __('SOLID FOUNDATION') }}
                                </div>
                                <h2> {{ __('A style theme, together with a dedicated Laravel backend ') }} <b>
                                        {{ __('and an intuitive mobile app') }} </b></h2>
                            </div>
                            <p> {{ __('gives your business an unfair advantage. The package doesn’t just provide you with everything you need to start selling online. It gives you a solid foundation for an eCommerce business for years to come.”') }}
                            </p>
                            <div class="btn-group">
                                <a href="{{ route('apps.pricing') }}" class="btn btn-white">{{ __('Get the Package') }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_14_726)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.88967 10.9856C6.96087 11.2611 7.75238 12.233 7.75238 13.3897C7.75238 14.7607 6.64043 15.8721 5.26877 15.8721C3.89711 15.8721 2.78516 14.7607 2.78516 13.3897C2.78516 12.233 3.57667 11.2611 4.64787 10.9856V10.5959C4.64787 8.7099 6.1768 7.18097 8.06283 7.18097C9.26304 7.18097 10.236 6.20801 10.236 5.00781V3.09158L8.81233 4.51524C8.56985 4.75772 8.17672 4.75772 7.93424 4.51524C7.69176 4.27276 7.69176 3.87963 7.93424 3.63715L10.4179 1.15354C10.6603 0.91106 11.0535 0.91106 11.2959 1.15354L13.7796 3.63715C14.022 3.87962 14.022 4.27276 13.7796 4.51524C13.5371 4.75771 13.1439 4.75772 12.9015 4.51524L11.4778 3.09158V5.00781C11.4778 6.89384 9.94887 8.42278 8.06283 8.42278C6.86263 8.42278 5.88967 9.39573 5.88967 10.5959V10.9856ZM6.51058 13.3897C6.51058 14.0743 5.95517 14.6303 5.26877 14.6303C4.58237 14.6303 4.02696 14.0743 4.02696 13.3897C4.02696 12.7052 4.58237 12.1492 5.26877 12.1492C5.95517 12.1492 6.51058 12.7052 6.51058 13.3897Z"
                                                fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_14_726">
                                                <rect width="14.9017" height="14.9017" fill="white"
                                                    transform="translate(0.921875 0.97168)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg></a>
                                <a href="#" class="link-btn">{{ __('View Live Demo') }} <svg
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none">
                                        <g clip-path="url(#clip0_7_820)">
                                            <path
                                                d="M9.33984 1.18359L9.33985 18.519L4.612 18.519C2.87125 18.519 1.4601 17.1079 1.4601 15.3671L1.4601 4.33549C1.4601 2.59475 2.87125 1.18359 4.612 1.18359L9.33984 1.18359Z"
                                                fill="#002332"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M17.222 19.3066C18.5276 19.3066 19.5859 18.2483 19.5859 16.9427L19.5859 15.6294L19.5859 2.75918C19.5859 1.45362 18.5276 0.39526 17.222 0.39526L10.1302 0.39526L9.77566 0.39526C9.34047 0.39526 8.98768 0.748047 8.98768 1.18324C8.98768 1.61842 9.34047 1.97121 9.77566 1.97121L10.1302 1.97121L17.222 1.97121C17.6572 1.97121 18.01 2.324 18.01 2.75918L18.01 15.6294L18.01 16.9427C18.01 17.3779 17.6572 17.7307 17.222 17.7307L10.1302 17.7307L9.77566 17.7307C9.34047 17.7307 8.98769 18.0835 8.98769 18.5187C8.98769 18.9539 9.34047 19.3066 9.77566 19.3066L10.1302 19.3066L17.222 19.3066ZM7.72693 18.5187C7.72693 18.0835 7.37414 17.7307 6.93895 17.7307L6.22977 17.7307C5.79459 17.7307 5.4418 18.0835 5.4418 18.5187C5.4418 18.9539 5.79459 19.3066 6.22977 19.3066L6.93895 19.3066C7.37414 19.3066 7.72693 18.9539 7.72693 18.5187ZM7.72693 1.18324C7.72693 0.748047 7.37414 0.39526 6.93895 0.39526L6.22977 0.39526C5.79459 0.39526 5.4418 0.748047 5.4418 1.18324C5.4418 1.61842 5.79459 1.97121 6.22977 1.97121L6.93895 1.97121C7.37414 1.97121 7.72693 1.61842 7.72693 1.18324ZM4.18104 18.5187C4.18104 18.0835 3.82825 17.7307 3.39307 17.7307L3.03848 17.7307C2.99569 17.7307 2.95423 17.7274 2.9142 17.7211C2.48429 17.6535 2.08101 17.9472 2.01344 18.3772C1.94588 18.8071 2.23962 19.2103 2.66953 19.2779C2.79021 19.2969 2.91347 19.3066 3.03848 19.3066L3.39307 19.3066C3.82825 19.3066 4.18104 18.9539 4.18104 18.5187ZM4.18104 1.18324C4.18104 0.748048 3.82825 0.395261 3.39307 0.395261L3.03848 0.395261C2.91347 0.395261 2.7902 0.405034 2.66953 0.423997C2.23962 0.491559 1.94588 0.894841 2.01344 1.32475C2.08101 1.75466 2.48429 2.0484 2.9142 1.98084C2.95423 1.97455 2.99569 1.97121 3.03848 1.97121L3.39307 1.97121C3.82825 1.97121 4.18104 1.61842 4.18104 1.18324ZM1.60405 17.9678C2.03396 17.9002 2.3277 17.4969 2.26014 17.067C2.25384 17.027 2.25051 16.9855 2.25051 16.9427L2.25051 16.5881C2.25051 16.1529 1.89772 15.8002 1.46253 15.8002C1.02735 15.8002 0.674557 16.1529 0.674557 16.5881L0.674557 16.9427C0.674557 17.0677 0.68433 17.191 0.703293 17.3117C0.770857 17.7416 1.17414 18.0353 1.60405 17.9678ZM1.60405 1.73415C1.17414 1.66659 0.770856 1.96033 0.703292 2.39024C0.684329 2.51091 0.674556 2.63417 0.674556 2.75918L0.674556 3.11377C0.674556 3.54896 1.02734 3.90175 1.46253 3.90175C1.89772 3.90175 2.2505 3.54896 2.2505 3.11377L2.2505 2.75918C2.2505 2.7164 2.25384 2.67493 2.26013 2.6349C2.3277 2.20499 2.03396 1.80171 1.60405 1.73415ZM1.46253 14.5394C1.89772 14.5394 2.25051 14.1866 2.25051 13.7514L2.25051 13.0422C2.25051 12.6071 1.89772 12.2543 1.46253 12.2543C1.02735 12.2543 0.674556 12.6071 0.674556 13.0422L0.674556 13.7514C0.674557 14.1866 1.02735 14.5394 1.46253 14.5394ZM1.46253 10.9935C1.89772 10.9935 2.25051 10.6407 2.25051 10.2055L2.25051 9.49636C2.2505 9.06118 1.89772 8.70839 1.46253 8.70839C1.02735 8.70839 0.674556 9.06118 0.674556 9.49636L0.674556 10.2055C0.674556 10.6407 1.02735 10.9935 1.46253 10.9935ZM1.46253 7.44763C1.89772 7.44763 2.2505 7.09484 2.2505 6.65966L2.2505 5.95048C2.2505 5.51529 1.89772 5.16251 1.46253 5.16251C1.02735 5.16251 0.674556 5.51529 0.674556 5.95048L0.674556 6.65966C0.674556 7.09484 1.02735 7.44763 1.46253 7.44763ZM6.97806 9.06298C6.54288 9.06298 6.19009 9.41577 6.19009 9.85095C6.19009 10.2861 6.54288 10.6389 6.97806 10.6389L11.3798 10.6389L10.3611 11.6577C10.0534 11.9654 10.0534 12.4643 10.3611 12.7721C10.6688 13.0798 11.1677 13.0798 11.4754 12.7721L13.8394 10.4081C13.9871 10.2604 14.0702 10.0599 14.0702 9.85095C14.0702 9.64197 13.9871 9.44154 13.8394 9.29377L11.4754 6.92985C11.1677 6.62213 10.6688 6.62213 10.3611 6.92985C10.0534 7.23757 10.0534 7.73649 10.3611 8.04421L11.3798 9.06298L6.97806 9.06298Z"
                                                fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_7_820">
                                                <rect width="18.9114" height="18.9114" fill="white"
                                                    transform="translate(0.675781 0.395508)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="review-content-itm">
                        <div class="review-content">
                            <div class="section-title">
                                <div class="quats">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="83" height="59"
                                        viewBox="0 0 83 59" fill="none">
                                        <path
                                            d="M17.4193 58.9563C12.8711 58.9563 8.86601 57.2932 5.40398 53.9669C1.94195 50.5727 0.210938 45.8209 0.210938 39.7115C0.210938 34.2809 1.33101 29.0878 3.57114 24.1324C5.81128 19.109 8.76418 14.5609 12.4299 10.4879C16.1634 6.34704 20.2364 2.85108 24.6488 0L35.1367 7.73865C33.9827 8.689 32.5232 10.2503 30.7582 12.4226C28.9933 14.5948 27.2962 16.9707 25.667 19.5503C24.0378 22.1298 22.9178 24.5397 22.3068 26.7798C25.701 27.8659 28.4842 29.7327 30.6564 32.3801C32.8965 34.9597 34.0166 38.3199 34.0166 42.4607C34.0166 47.4841 32.3195 51.4892 28.9254 54.476C25.5991 57.4629 21.7638 58.9563 17.4193 58.9563ZM65.073 58.9563C60.457 58.9563 56.4519 57.2932 53.0578 53.9669C49.6636 50.5727 47.9666 45.8209 47.9666 39.7115C47.9666 34.3487 49.0866 29.1896 51.3268 24.2342C53.6348 19.2108 56.6216 14.6288 60.2873 10.4879C64.0209 6.27917 68.0259 2.7832 72.3026 0L82.8923 7.73865C81.6704 8.82478 80.177 10.42 78.412 12.5244C76.6471 14.6288 74.9839 16.9707 73.4226 19.5503C71.8613 22.0619 70.7413 24.4718 70.0624 26.7798C73.3887 27.8659 76.1719 29.7327 78.412 32.3801C80.6522 34.9597 81.7722 38.3199 81.7722 42.4607C81.7722 47.4841 80.0752 51.4892 76.681 54.476C73.3548 57.4629 69.4854 58.9563 65.073 58.9563Z"
                                            fill="#002332" />
                                    </svg>
                                </div>
                                <div class="subtitle">
                                    {{ __('SOLID FOUNDATION') }}
                                </div>
                                <h2> {{ __('A style theme, together with a dedicated Laravel backend ') }} <b>
                                        {{ __('and an intuitive mobile app') }} </b></h2>
                            </div>
                            <p> {{ __('gives your business an unfair advantage. The package doesn’t just provide you with everything you need to start selling online. It gives you a solid foundation for an eCommerce business for years to come.”') }}
                            </p>
                            <div class="btn-group">
                                <a href="{{ route('apps.pricing') }}" class="btn btn-white">{{ __('Get the Package') }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_14_726)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.88967 10.9856C6.96087 11.2611 7.75238 12.233 7.75238 13.3897C7.75238 14.7607 6.64043 15.8721 5.26877 15.8721C3.89711 15.8721 2.78516 14.7607 2.78516 13.3897C2.78516 12.233 3.57667 11.2611 4.64787 10.9856V10.5959C4.64787 8.7099 6.1768 7.18097 8.06283 7.18097C9.26304 7.18097 10.236 6.20801 10.236 5.00781V3.09158L8.81233 4.51524C8.56985 4.75772 8.17672 4.75772 7.93424 4.51524C7.69176 4.27276 7.69176 3.87963 7.93424 3.63715L10.4179 1.15354C10.6603 0.91106 11.0535 0.91106 11.2959 1.15354L13.7796 3.63715C14.022 3.87962 14.022 4.27276 13.7796 4.51524C13.5371 4.75771 13.1439 4.75772 12.9015 4.51524L11.4778 3.09158V5.00781C11.4778 6.89384 9.94887 8.42278 8.06283 8.42278C6.86263 8.42278 5.88967 9.39573 5.88967 10.5959V10.9856ZM6.51058 13.3897C6.51058 14.0743 5.95517 14.6303 5.26877 14.6303C4.58237 14.6303 4.02696 14.0743 4.02696 13.3897C4.02696 12.7052 4.58237 12.1492 5.26877 12.1492C5.95517 12.1492 6.51058 12.7052 6.51058 13.3897Z"
                                                fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_14_726">
                                                <rect width="14.9017" height="14.9017" fill="white"
                                                    transform="translate(0.921875 0.97168)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg></a>
                                <a href="#" class="link-btn">{{ __('View Live Demo') }} <svg
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none">
                                        <g clip-path="url(#clip0_7_820)">
                                            <path
                                                d="M9.33984 1.18359L9.33985 18.519L4.612 18.519C2.87125 18.519 1.4601 17.1079 1.4601 15.3671L1.4601 4.33549C1.4601 2.59475 2.87125 1.18359 4.612 1.18359L9.33984 1.18359Z"
                                                fill="#002332"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M17.222 19.3066C18.5276 19.3066 19.5859 18.2483 19.5859 16.9427L19.5859 15.6294L19.5859 2.75918C19.5859 1.45362 18.5276 0.39526 17.222 0.39526L10.1302 0.39526L9.77566 0.39526C9.34047 0.39526 8.98768 0.748047 8.98768 1.18324C8.98768 1.61842 9.34047 1.97121 9.77566 1.97121L10.1302 1.97121L17.222 1.97121C17.6572 1.97121 18.01 2.324 18.01 2.75918L18.01 15.6294L18.01 16.9427C18.01 17.3779 17.6572 17.7307 17.222 17.7307L10.1302 17.7307L9.77566 17.7307C9.34047 17.7307 8.98769 18.0835 8.98769 18.5187C8.98769 18.9539 9.34047 19.3066 9.77566 19.3066L10.1302 19.3066L17.222 19.3066ZM7.72693 18.5187C7.72693 18.0835 7.37414 17.7307 6.93895 17.7307L6.22977 17.7307C5.79459 17.7307 5.4418 18.0835 5.4418 18.5187C5.4418 18.9539 5.79459 19.3066 6.22977 19.3066L6.93895 19.3066C7.37414 19.3066 7.72693 18.9539 7.72693 18.5187ZM7.72693 1.18324C7.72693 0.748047 7.37414 0.39526 6.93895 0.39526L6.22977 0.39526C5.79459 0.39526 5.4418 0.748047 5.4418 1.18324C5.4418 1.61842 5.79459 1.97121 6.22977 1.97121L6.93895 1.97121C7.37414 1.97121 7.72693 1.61842 7.72693 1.18324ZM4.18104 18.5187C4.18104 18.0835 3.82825 17.7307 3.39307 17.7307L3.03848 17.7307C2.99569 17.7307 2.95423 17.7274 2.9142 17.7211C2.48429 17.6535 2.08101 17.9472 2.01344 18.3772C1.94588 18.8071 2.23962 19.2103 2.66953 19.2779C2.79021 19.2969 2.91347 19.3066 3.03848 19.3066L3.39307 19.3066C3.82825 19.3066 4.18104 18.9539 4.18104 18.5187ZM4.18104 1.18324C4.18104 0.748048 3.82825 0.395261 3.39307 0.395261L3.03848 0.395261C2.91347 0.395261 2.7902 0.405034 2.66953 0.423997C2.23962 0.491559 1.94588 0.894841 2.01344 1.32475C2.08101 1.75466 2.48429 2.0484 2.9142 1.98084C2.95423 1.97455 2.99569 1.97121 3.03848 1.97121L3.39307 1.97121C3.82825 1.97121 4.18104 1.61842 4.18104 1.18324ZM1.60405 17.9678C2.03396 17.9002 2.3277 17.4969 2.26014 17.067C2.25384 17.027 2.25051 16.9855 2.25051 16.9427L2.25051 16.5881C2.25051 16.1529 1.89772 15.8002 1.46253 15.8002C1.02735 15.8002 0.674557 16.1529 0.674557 16.5881L0.674557 16.9427C0.674557 17.0677 0.68433 17.191 0.703293 17.3117C0.770857 17.7416 1.17414 18.0353 1.60405 17.9678ZM1.60405 1.73415C1.17414 1.66659 0.770856 1.96033 0.703292 2.39024C0.684329 2.51091 0.674556 2.63417 0.674556 2.75918L0.674556 3.11377C0.674556 3.54896 1.02734 3.90175 1.46253 3.90175C1.89772 3.90175 2.2505 3.54896 2.2505 3.11377L2.2505 2.75918C2.2505 2.7164 2.25384 2.67493 2.26013 2.6349C2.3277 2.20499 2.03396 1.80171 1.60405 1.73415ZM1.46253 14.5394C1.89772 14.5394 2.25051 14.1866 2.25051 13.7514L2.25051 13.0422C2.25051 12.6071 1.89772 12.2543 1.46253 12.2543C1.02735 12.2543 0.674556 12.6071 0.674556 13.0422L0.674556 13.7514C0.674557 14.1866 1.02735 14.5394 1.46253 14.5394ZM1.46253 10.9935C1.89772 10.9935 2.25051 10.6407 2.25051 10.2055L2.25051 9.49636C2.2505 9.06118 1.89772 8.70839 1.46253 8.70839C1.02735 8.70839 0.674556 9.06118 0.674556 9.49636L0.674556 10.2055C0.674556 10.6407 1.02735 10.9935 1.46253 10.9935ZM1.46253 7.44763C1.89772 7.44763 2.2505 7.09484 2.2505 6.65966L2.2505 5.95048C2.2505 5.51529 1.89772 5.16251 1.46253 5.16251C1.02735 5.16251 0.674556 5.51529 0.674556 5.95048L0.674556 6.65966C0.674556 7.09484 1.02735 7.44763 1.46253 7.44763ZM6.97806 9.06298C6.54288 9.06298 6.19009 9.41577 6.19009 9.85095C6.19009 10.2861 6.54288 10.6389 6.97806 10.6389L11.3798 10.6389L10.3611 11.6577C10.0534 11.9654 10.0534 12.4643 10.3611 12.7721C10.6688 13.0798 11.1677 13.0798 11.4754 12.7721L13.8394 10.4081C13.9871 10.2604 14.0702 10.0599 14.0702 9.85095C14.0702 9.64197 13.9871 9.44154 13.8394 9.29377L11.4754 6.92985C11.1677 6.62213 10.6688 6.62213 10.3611 6.92985C10.0534 7.23757 10.0534 7.73649 10.3611 8.04421L11.3798 9.06298L6.97806 9.06298Z"
                                                fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_7_820">
                                                <rect width="18.9114" height="18.9114" fill="white"
                                                    transform="translate(0.675781 0.395508)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="review-content-itm">
                        <div class="review-content">
                            <div class="section-title">
                                <div class="quats">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="83" height="59"
                                        viewBox="0 0 83 59" fill="none">
                                        <path
                                            d="M17.4193 58.9563C12.8711 58.9563 8.86601 57.2932 5.40398 53.9669C1.94195 50.5727 0.210938 45.8209 0.210938 39.7115C0.210938 34.2809 1.33101 29.0878 3.57114 24.1324C5.81128 19.109 8.76418 14.5609 12.4299 10.4879C16.1634 6.34704 20.2364 2.85108 24.6488 0L35.1367 7.73865C33.9827 8.689 32.5232 10.2503 30.7582 12.4226C28.9933 14.5948 27.2962 16.9707 25.667 19.5503C24.0378 22.1298 22.9178 24.5397 22.3068 26.7798C25.701 27.8659 28.4842 29.7327 30.6564 32.3801C32.8965 34.9597 34.0166 38.3199 34.0166 42.4607C34.0166 47.4841 32.3195 51.4892 28.9254 54.476C25.5991 57.4629 21.7638 58.9563 17.4193 58.9563ZM65.073 58.9563C60.457 58.9563 56.4519 57.2932 53.0578 53.9669C49.6636 50.5727 47.9666 45.8209 47.9666 39.7115C47.9666 34.3487 49.0866 29.1896 51.3268 24.2342C53.6348 19.2108 56.6216 14.6288 60.2873 10.4879C64.0209 6.27917 68.0259 2.7832 72.3026 0L82.8923 7.73865C81.6704 8.82478 80.177 10.42 78.412 12.5244C76.6471 14.6288 74.9839 16.9707 73.4226 19.5503C71.8613 22.0619 70.7413 24.4718 70.0624 26.7798C73.3887 27.8659 76.1719 29.7327 78.412 32.3801C80.6522 34.9597 81.7722 38.3199 81.7722 42.4607C81.7722 47.4841 80.0752 51.4892 76.681 54.476C73.3548 57.4629 69.4854 58.9563 65.073 58.9563Z"
                                            fill="#002332" />
                                    </svg>
                                </div>
                                <div class="subtitle">
                                    {{ __('SOLID FOUNDATION') }}
                                </div>
                                <h2> {{ __('A style theme, together with a dedicated Laravel backend ') }} <b>
                                        {{ __('and an intuitive mobile app') }} </b></h2>
                            </div>
                            <p> {{ __('gives your business an unfair advantage. The package doesn’t just provide you with everything you need to start selling online. It gives you a solid foundation for an eCommerce business for years to come.”') }}
                            </p>
                            <div class="btn-group">
                                <a href="{{ route('apps.pricing') }}"
                                    class="btn btn-white">{{ __('Get the Package') }} <svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_14_726)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.88967 10.9856C6.96087 11.2611 7.75238 12.233 7.75238 13.3897C7.75238 14.7607 6.64043 15.8721 5.26877 15.8721C3.89711 15.8721 2.78516 14.7607 2.78516 13.3897C2.78516 12.233 3.57667 11.2611 4.64787 10.9856V10.5959C4.64787 8.7099 6.1768 7.18097 8.06283 7.18097C9.26304 7.18097 10.236 6.20801 10.236 5.00781V3.09158L8.81233 4.51524C8.56985 4.75772 8.17672 4.75772 7.93424 4.51524C7.69176 4.27276 7.69176 3.87963 7.93424 3.63715L10.4179 1.15354C10.6603 0.91106 11.0535 0.91106 11.2959 1.15354L13.7796 3.63715C14.022 3.87962 14.022 4.27276 13.7796 4.51524C13.5371 4.75771 13.1439 4.75772 12.9015 4.51524L11.4778 3.09158V5.00781C11.4778 6.89384 9.94887 8.42278 8.06283 8.42278C6.86263 8.42278 5.88967 9.39573 5.88967 10.5959V10.9856ZM6.51058 13.3897C6.51058 14.0743 5.95517 14.6303 5.26877 14.6303C4.58237 14.6303 4.02696 14.0743 4.02696 13.3897C4.02696 12.7052 4.58237 12.1492 5.26877 12.1492C5.95517 12.1492 6.51058 12.7052 6.51058 13.3897Z"
                                                fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_14_726">
                                                <rect width="14.9017" height="14.9017" fill="white"
                                                    transform="translate(0.921875 0.97168)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg></a>
                                <a href="#" class="link-btn">{{ __('View Live Demo') }} <svg
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none">
                                        <g clip-path="url(#clip0_7_820)">
                                            <path
                                                d="M9.33984 1.18359L9.33985 18.519L4.612 18.519C2.87125 18.519 1.4601 17.1079 1.4601 15.3671L1.4601 4.33549C1.4601 2.59475 2.87125 1.18359 4.612 1.18359L9.33984 1.18359Z"
                                                fill="#002332"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M17.222 19.3066C18.5276 19.3066 19.5859 18.2483 19.5859 16.9427L19.5859 15.6294L19.5859 2.75918C19.5859 1.45362 18.5276 0.39526 17.222 0.39526L10.1302 0.39526L9.77566 0.39526C9.34047 0.39526 8.98768 0.748047 8.98768 1.18324C8.98768 1.61842 9.34047 1.97121 9.77566 1.97121L10.1302 1.97121L17.222 1.97121C17.6572 1.97121 18.01 2.324 18.01 2.75918L18.01 15.6294L18.01 16.9427C18.01 17.3779 17.6572 17.7307 17.222 17.7307L10.1302 17.7307L9.77566 17.7307C9.34047 17.7307 8.98769 18.0835 8.98769 18.5187C8.98769 18.9539 9.34047 19.3066 9.77566 19.3066L10.1302 19.3066L17.222 19.3066ZM7.72693 18.5187C7.72693 18.0835 7.37414 17.7307 6.93895 17.7307L6.22977 17.7307C5.79459 17.7307 5.4418 18.0835 5.4418 18.5187C5.4418 18.9539 5.79459 19.3066 6.22977 19.3066L6.93895 19.3066C7.37414 19.3066 7.72693 18.9539 7.72693 18.5187ZM7.72693 1.18324C7.72693 0.748047 7.37414 0.39526 6.93895 0.39526L6.22977 0.39526C5.79459 0.39526 5.4418 0.748047 5.4418 1.18324C5.4418 1.61842 5.79459 1.97121 6.22977 1.97121L6.93895 1.97121C7.37414 1.97121 7.72693 1.61842 7.72693 1.18324ZM4.18104 18.5187C4.18104 18.0835 3.82825 17.7307 3.39307 17.7307L3.03848 17.7307C2.99569 17.7307 2.95423 17.7274 2.9142 17.7211C2.48429 17.6535 2.08101 17.9472 2.01344 18.3772C1.94588 18.8071 2.23962 19.2103 2.66953 19.2779C2.79021 19.2969 2.91347 19.3066 3.03848 19.3066L3.39307 19.3066C3.82825 19.3066 4.18104 18.9539 4.18104 18.5187ZM4.18104 1.18324C4.18104 0.748048 3.82825 0.395261 3.39307 0.395261L3.03848 0.395261C2.91347 0.395261 2.7902 0.405034 2.66953 0.423997C2.23962 0.491559 1.94588 0.894841 2.01344 1.32475C2.08101 1.75466 2.48429 2.0484 2.9142 1.98084C2.95423 1.97455 2.99569 1.97121 3.03848 1.97121L3.39307 1.97121C3.82825 1.97121 4.18104 1.61842 4.18104 1.18324ZM1.60405 17.9678C2.03396 17.9002 2.3277 17.4969 2.26014 17.067C2.25384 17.027 2.25051 16.9855 2.25051 16.9427L2.25051 16.5881C2.25051 16.1529 1.89772 15.8002 1.46253 15.8002C1.02735 15.8002 0.674557 16.1529 0.674557 16.5881L0.674557 16.9427C0.674557 17.0677 0.68433 17.191 0.703293 17.3117C0.770857 17.7416 1.17414 18.0353 1.60405 17.9678ZM1.60405 1.73415C1.17414 1.66659 0.770856 1.96033 0.703292 2.39024C0.684329 2.51091 0.674556 2.63417 0.674556 2.75918L0.674556 3.11377C0.674556 3.54896 1.02734 3.90175 1.46253 3.90175C1.89772 3.90175 2.2505 3.54896 2.2505 3.11377L2.2505 2.75918C2.2505 2.7164 2.25384 2.67493 2.26013 2.6349C2.3277 2.20499 2.03396 1.80171 1.60405 1.73415ZM1.46253 14.5394C1.89772 14.5394 2.25051 14.1866 2.25051 13.7514L2.25051 13.0422C2.25051 12.6071 1.89772 12.2543 1.46253 12.2543C1.02735 12.2543 0.674556 12.6071 0.674556 13.0422L0.674556 13.7514C0.674557 14.1866 1.02735 14.5394 1.46253 14.5394ZM1.46253 10.9935C1.89772 10.9935 2.25051 10.6407 2.25051 10.2055L2.25051 9.49636C2.2505 9.06118 1.89772 8.70839 1.46253 8.70839C1.02735 8.70839 0.674556 9.06118 0.674556 9.49636L0.674556 10.2055C0.674556 10.6407 1.02735 10.9935 1.46253 10.9935ZM1.46253 7.44763C1.89772 7.44763 2.2505 7.09484 2.2505 6.65966L2.2505 5.95048C2.2505 5.51529 1.89772 5.16251 1.46253 5.16251C1.02735 5.16251 0.674556 5.51529 0.674556 5.95048L0.674556 6.65966C0.674556 7.09484 1.02735 7.44763 1.46253 7.44763ZM6.97806 9.06298C6.54288 9.06298 6.19009 9.41577 6.19009 9.85095C6.19009 10.2861 6.54288 10.6389 6.97806 10.6389L11.3798 10.6389L10.3611 11.6577C10.0534 11.9654 10.0534 12.4643 10.3611 12.7721C10.6688 13.0798 11.1677 13.0798 11.4754 12.7721L13.8394 10.4081C13.9871 10.2604 14.0702 10.0599 14.0702 9.85095C14.0702 9.64197 13.9871 9.44154 13.8394 9.29377L11.4754 6.92985C11.1677 6.62213 10.6688 6.62213 10.3611 6.92985C10.0534 7.23757 10.0534 7.73649 10.3611 8.04421L11.3798 9.06298L6.97806 9.06298Z"
                                                fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_7_820">
                                                <rect width="18.9114" height="18.9114" fill="white"
                                                    transform="translate(0.675781 0.395508)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="review-content-itm">
                        <div class="review-content">
                            <div class="section-title">
                                <div class="quats">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="83" height="59"
                                        viewBox="0 0 83 59" fill="none">
                                        <path
                                            d="M17.4193 58.9563C12.8711 58.9563 8.86601 57.2932 5.40398 53.9669C1.94195 50.5727 0.210938 45.8209 0.210938 39.7115C0.210938 34.2809 1.33101 29.0878 3.57114 24.1324C5.81128 19.109 8.76418 14.5609 12.4299 10.4879C16.1634 6.34704 20.2364 2.85108 24.6488 0L35.1367 7.73865C33.9827 8.689 32.5232 10.2503 30.7582 12.4226C28.9933 14.5948 27.2962 16.9707 25.667 19.5503C24.0378 22.1298 22.9178 24.5397 22.3068 26.7798C25.701 27.8659 28.4842 29.7327 30.6564 32.3801C32.8965 34.9597 34.0166 38.3199 34.0166 42.4607C34.0166 47.4841 32.3195 51.4892 28.9254 54.476C25.5991 57.4629 21.7638 58.9563 17.4193 58.9563ZM65.073 58.9563C60.457 58.9563 56.4519 57.2932 53.0578 53.9669C49.6636 50.5727 47.9666 45.8209 47.9666 39.7115C47.9666 34.3487 49.0866 29.1896 51.3268 24.2342C53.6348 19.2108 56.6216 14.6288 60.2873 10.4879C64.0209 6.27917 68.0259 2.7832 72.3026 0L82.8923 7.73865C81.6704 8.82478 80.177 10.42 78.412 12.5244C76.6471 14.6288 74.9839 16.9707 73.4226 19.5503C71.8613 22.0619 70.7413 24.4718 70.0624 26.7798C73.3887 27.8659 76.1719 29.7327 78.412 32.3801C80.6522 34.9597 81.7722 38.3199 81.7722 42.4607C81.7722 47.4841 80.0752 51.4892 76.681 54.476C73.3548 57.4629 69.4854 58.9563 65.073 58.9563Z"
                                            fill="#002332" />
                                    </svg>
                                </div>
                                <div class="subtitle">
                                    {{ __('SOLID FOUNDATION') }}
                                </div>
                                <h2> {{ __('A style theme, together with a dedicated Laravel backend ') }} <b>
                                        {{ __('and an intuitive mobile app') }} </b></h2>
                            </div>
                            <p> {{ __('gives your business an unfair advantage. The package doesn’t just provide you with everything you need to start selling online. It gives you a solid foundation for an eCommerce business for years to come.”') }}
                            </p>
                            <div class="btn-group">
                                <a href="{{ route('apps.pricing') }}"
                                    class="btn btn-white">{{ __('Get the Package') }}<svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_14_726)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.88967 10.9856C6.96087 11.2611 7.75238 12.233 7.75238 13.3897C7.75238 14.7607 6.64043 15.8721 5.26877 15.8721C3.89711 15.8721 2.78516 14.7607 2.78516 13.3897C2.78516 12.233 3.57667 11.2611 4.64787 10.9856V10.5959C4.64787 8.7099 6.1768 7.18097 8.06283 7.18097C9.26304 7.18097 10.236 6.20801 10.236 5.00781V3.09158L8.81233 4.51524C8.56985 4.75772 8.17672 4.75772 7.93424 4.51524C7.69176 4.27276 7.69176 3.87963 7.93424 3.63715L10.4179 1.15354C10.6603 0.91106 11.0535 0.91106 11.2959 1.15354L13.7796 3.63715C14.022 3.87962 14.022 4.27276 13.7796 4.51524C13.5371 4.75771 13.1439 4.75772 12.9015 4.51524L11.4778 3.09158V5.00781C11.4778 6.89384 9.94887 8.42278 8.06283 8.42278C6.86263 8.42278 5.88967 9.39573 5.88967 10.5959V10.9856ZM6.51058 13.3897C6.51058 14.0743 5.95517 14.6303 5.26877 14.6303C4.58237 14.6303 4.02696 14.0743 4.02696 13.3897C4.02696 12.7052 4.58237 12.1492 5.26877 12.1492C5.95517 12.1492 6.51058 12.7052 6.51058 13.3897Z"
                                                fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_14_726">
                                                <rect width="14.9017" height="14.9017" fill="white"
                                                    transform="translate(0.921875 0.97168)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg></a>
                                <a href="#" class="link-btn">{{ __('View Live Demo') }}<svg
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none">
                                        <g clip-path="url(#clip0_7_820)">
                                            <path
                                                d="M9.33984 1.18359L9.33985 18.519L4.612 18.519C2.87125 18.519 1.4601 17.1079 1.4601 15.3671L1.4601 4.33549C1.4601 2.59475 2.87125 1.18359 4.612 1.18359L9.33984 1.18359Z"
                                                fill="#002332"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M17.222 19.3066C18.5276 19.3066 19.5859 18.2483 19.5859 16.9427L19.5859 15.6294L19.5859 2.75918C19.5859 1.45362 18.5276 0.39526 17.222 0.39526L10.1302 0.39526L9.77566 0.39526C9.34047 0.39526 8.98768 0.748047 8.98768 1.18324C8.98768 1.61842 9.34047 1.97121 9.77566 1.97121L10.1302 1.97121L17.222 1.97121C17.6572 1.97121 18.01 2.324 18.01 2.75918L18.01 15.6294L18.01 16.9427C18.01 17.3779 17.6572 17.7307 17.222 17.7307L10.1302 17.7307L9.77566 17.7307C9.34047 17.7307 8.98769 18.0835 8.98769 18.5187C8.98769 18.9539 9.34047 19.3066 9.77566 19.3066L10.1302 19.3066L17.222 19.3066ZM7.72693 18.5187C7.72693 18.0835 7.37414 17.7307 6.93895 17.7307L6.22977 17.7307C5.79459 17.7307 5.4418 18.0835 5.4418 18.5187C5.4418 18.9539 5.79459 19.3066 6.22977 19.3066L6.93895 19.3066C7.37414 19.3066 7.72693 18.9539 7.72693 18.5187ZM7.72693 1.18324C7.72693 0.748047 7.37414 0.39526 6.93895 0.39526L6.22977 0.39526C5.79459 0.39526 5.4418 0.748047 5.4418 1.18324C5.4418 1.61842 5.79459 1.97121 6.22977 1.97121L6.93895 1.97121C7.37414 1.97121 7.72693 1.61842 7.72693 1.18324ZM4.18104 18.5187C4.18104 18.0835 3.82825 17.7307 3.39307 17.7307L3.03848 17.7307C2.99569 17.7307 2.95423 17.7274 2.9142 17.7211C2.48429 17.6535 2.08101 17.9472 2.01344 18.3772C1.94588 18.8071 2.23962 19.2103 2.66953 19.2779C2.79021 19.2969 2.91347 19.3066 3.03848 19.3066L3.39307 19.3066C3.82825 19.3066 4.18104 18.9539 4.18104 18.5187ZM4.18104 1.18324C4.18104 0.748048 3.82825 0.395261 3.39307 0.395261L3.03848 0.395261C2.91347 0.395261 2.7902 0.405034 2.66953 0.423997C2.23962 0.491559 1.94588 0.894841 2.01344 1.32475C2.08101 1.75466 2.48429 2.0484 2.9142 1.98084C2.95423 1.97455 2.99569 1.97121 3.03848 1.97121L3.39307 1.97121C3.82825 1.97121 4.18104 1.61842 4.18104 1.18324ZM1.60405 17.9678C2.03396 17.9002 2.3277 17.4969 2.26014 17.067C2.25384 17.027 2.25051 16.9855 2.25051 16.9427L2.25051 16.5881C2.25051 16.1529 1.89772 15.8002 1.46253 15.8002C1.02735 15.8002 0.674557 16.1529 0.674557 16.5881L0.674557 16.9427C0.674557 17.0677 0.68433 17.191 0.703293 17.3117C0.770857 17.7416 1.17414 18.0353 1.60405 17.9678ZM1.60405 1.73415C1.17414 1.66659 0.770856 1.96033 0.703292 2.39024C0.684329 2.51091 0.674556 2.63417 0.674556 2.75918L0.674556 3.11377C0.674556 3.54896 1.02734 3.90175 1.46253 3.90175C1.89772 3.90175 2.2505 3.54896 2.2505 3.11377L2.2505 2.75918C2.2505 2.7164 2.25384 2.67493 2.26013 2.6349C2.3277 2.20499 2.03396 1.80171 1.60405 1.73415ZM1.46253 14.5394C1.89772 14.5394 2.25051 14.1866 2.25051 13.7514L2.25051 13.0422C2.25051 12.6071 1.89772 12.2543 1.46253 12.2543C1.02735 12.2543 0.674556 12.6071 0.674556 13.0422L0.674556 13.7514C0.674557 14.1866 1.02735 14.5394 1.46253 14.5394ZM1.46253 10.9935C1.89772 10.9935 2.25051 10.6407 2.25051 10.2055L2.25051 9.49636C2.2505 9.06118 1.89772 8.70839 1.46253 8.70839C1.02735 8.70839 0.674556 9.06118 0.674556 9.49636L0.674556 10.2055C0.674556 10.6407 1.02735 10.9935 1.46253 10.9935ZM1.46253 7.44763C1.89772 7.44763 2.2505 7.09484 2.2505 6.65966L2.2505 5.95048C2.2505 5.51529 1.89772 5.16251 1.46253 5.16251C1.02735 5.16251 0.674556 5.51529 0.674556 5.95048L0.674556 6.65966C0.674556 7.09484 1.02735 7.44763 1.46253 7.44763ZM6.97806 9.06298C6.54288 9.06298 6.19009 9.41577 6.19009 9.85095C6.19009 10.2861 6.54288 10.6389 6.97806 10.6389L11.3798 10.6389L10.3611 11.6577C10.0534 11.9654 10.0534 12.4643 10.3611 12.7721C10.6688 13.0798 11.1677 13.0798 11.4754 12.7721L13.8394 10.4081C13.9871 10.2604 14.0702 10.0599 14.0702 9.85095C14.0702 9.64197 13.9871 9.44154 13.8394 9.29377L11.4754 6.92985C11.1677 6.62213 10.6688 6.62213 10.3611 6.92985C10.0534 7.23757 10.0534 7.73649 10.3611 8.04421L11.3798 9.06298L6.97806 9.06298Z"
                                                fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_7_820">
                                                <rect width="18.9114" height="18.9114" fill="white"
                                                    transform="translate(0.675781 0.395508)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="review-content-itm">
                        <div class="review-content">
                            <div class="section-title">
                                <div class="quats">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="83" height="59"
                                        viewBox="0 0 83 59" fill="none">
                                        <path
                                            d="M17.4193 58.9563C12.8711 58.9563 8.86601 57.2932 5.40398 53.9669C1.94195 50.5727 0.210938 45.8209 0.210938 39.7115C0.210938 34.2809 1.33101 29.0878 3.57114 24.1324C5.81128 19.109 8.76418 14.5609 12.4299 10.4879C16.1634 6.34704 20.2364 2.85108 24.6488 0L35.1367 7.73865C33.9827 8.689 32.5232 10.2503 30.7582 12.4226C28.9933 14.5948 27.2962 16.9707 25.667 19.5503C24.0378 22.1298 22.9178 24.5397 22.3068 26.7798C25.701 27.8659 28.4842 29.7327 30.6564 32.3801C32.8965 34.9597 34.0166 38.3199 34.0166 42.4607C34.0166 47.4841 32.3195 51.4892 28.9254 54.476C25.5991 57.4629 21.7638 58.9563 17.4193 58.9563ZM65.073 58.9563C60.457 58.9563 56.4519 57.2932 53.0578 53.9669C49.6636 50.5727 47.9666 45.8209 47.9666 39.7115C47.9666 34.3487 49.0866 29.1896 51.3268 24.2342C53.6348 19.2108 56.6216 14.6288 60.2873 10.4879C64.0209 6.27917 68.0259 2.7832 72.3026 0L82.8923 7.73865C81.6704 8.82478 80.177 10.42 78.412 12.5244C76.6471 14.6288 74.9839 16.9707 73.4226 19.5503C71.8613 22.0619 70.7413 24.4718 70.0624 26.7798C73.3887 27.8659 76.1719 29.7327 78.412 32.3801C80.6522 34.9597 81.7722 38.3199 81.7722 42.4607C81.7722 47.4841 80.0752 51.4892 76.681 54.476C73.3548 57.4629 69.4854 58.9563 65.073 58.9563Z"
                                            fill="#002332" />
                                    </svg>
                                </div>
                                <div class="subtitle">
                                    {{ __('SOLID FOUNDATION') }}
                                </div>
                                <h2> {{ __('A style theme, together with a dedicated Laravel backend ') }} <b>
                                        {{ __('and an intuitive mobile app') }} </b></h2>
                            </div>
                            <p> {{ __('gives your business an unfair advantage. The package doesn’t just provide you with everything you need to start selling online. It gives you a solid foundation for an eCommerce business for years to come.”') }}
                            </p>
                            <div class="btn-group">
                                <a href="{{ route('apps.pricing') }}"
                                    class="btn btn-white">{{ __('Get the Package') }}<svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_14_726)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.88967 10.9856C6.96087 11.2611 7.75238 12.233 7.75238 13.3897C7.75238 14.7607 6.64043 15.8721 5.26877 15.8721C3.89711 15.8721 2.78516 14.7607 2.78516 13.3897C2.78516 12.233 3.57667 11.2611 4.64787 10.9856V10.5959C4.64787 8.7099 6.1768 7.18097 8.06283 7.18097C9.26304 7.18097 10.236 6.20801 10.236 5.00781V3.09158L8.81233 4.51524C8.56985 4.75772 8.17672 4.75772 7.93424 4.51524C7.69176 4.27276 7.69176 3.87963 7.93424 3.63715L10.4179 1.15354C10.6603 0.91106 11.0535 0.91106 11.2959 1.15354L13.7796 3.63715C14.022 3.87962 14.022 4.27276 13.7796 4.51524C13.5371 4.75771 13.1439 4.75772 12.9015 4.51524L11.4778 3.09158V5.00781C11.4778 6.89384 9.94887 8.42278 8.06283 8.42278C6.86263 8.42278 5.88967 9.39573 5.88967 10.5959V10.9856ZM6.51058 13.3897C6.51058 14.0743 5.95517 14.6303 5.26877 14.6303C4.58237 14.6303 4.02696 14.0743 4.02696 13.3897C4.02696 12.7052 4.58237 12.1492 5.26877 12.1492C5.95517 12.1492 6.51058 12.7052 6.51058 13.3897Z"
                                                fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_14_726">
                                                <rect width="14.9017" height="14.9017" fill="white"
                                                    transform="translate(0.921875 0.97168)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg></a>
                                <a href="#" class="link-btn">{{ __('View Live Demo') }}<svg
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none">
                                        <g clip-path="url(#clip0_7_820)">
                                            <path
                                                d="M9.33984 1.18359L9.33985 18.519L4.612 18.519C2.87125 18.519 1.4601 17.1079 1.4601 15.3671L1.4601 4.33549C1.4601 2.59475 2.87125 1.18359 4.612 1.18359L9.33984 1.18359Z"
                                                fill="#002332"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M17.222 19.3066C18.5276 19.3066 19.5859 18.2483 19.5859 16.9427L19.5859 15.6294L19.5859 2.75918C19.5859 1.45362 18.5276 0.39526 17.222 0.39526L10.1302 0.39526L9.77566 0.39526C9.34047 0.39526 8.98768 0.748047 8.98768 1.18324C8.98768 1.61842 9.34047 1.97121 9.77566 1.97121L10.1302 1.97121L17.222 1.97121C17.6572 1.97121 18.01 2.324 18.01 2.75918L18.01 15.6294L18.01 16.9427C18.01 17.3779 17.6572 17.7307 17.222 17.7307L10.1302 17.7307L9.77566 17.7307C9.34047 17.7307 8.98769 18.0835 8.98769 18.5187C8.98769 18.9539 9.34047 19.3066 9.77566 19.3066L10.1302 19.3066L17.222 19.3066ZM7.72693 18.5187C7.72693 18.0835 7.37414 17.7307 6.93895 17.7307L6.22977 17.7307C5.79459 17.7307 5.4418 18.0835 5.4418 18.5187C5.4418 18.9539 5.79459 19.3066 6.22977 19.3066L6.93895 19.3066C7.37414 19.3066 7.72693 18.9539 7.72693 18.5187ZM7.72693 1.18324C7.72693 0.748047 7.37414 0.39526 6.93895 0.39526L6.22977 0.39526C5.79459 0.39526 5.4418 0.748047 5.4418 1.18324C5.4418 1.61842 5.79459 1.97121 6.22977 1.97121L6.93895 1.97121C7.37414 1.97121 7.72693 1.61842 7.72693 1.18324ZM4.18104 18.5187C4.18104 18.0835 3.82825 17.7307 3.39307 17.7307L3.03848 17.7307C2.99569 17.7307 2.95423 17.7274 2.9142 17.7211C2.48429 17.6535 2.08101 17.9472 2.01344 18.3772C1.94588 18.8071 2.23962 19.2103 2.66953 19.2779C2.79021 19.2969 2.91347 19.3066 3.03848 19.3066L3.39307 19.3066C3.82825 19.3066 4.18104 18.9539 4.18104 18.5187ZM4.18104 1.18324C4.18104 0.748048 3.82825 0.395261 3.39307 0.395261L3.03848 0.395261C2.91347 0.395261 2.7902 0.405034 2.66953 0.423997C2.23962 0.491559 1.94588 0.894841 2.01344 1.32475C2.08101 1.75466 2.48429 2.0484 2.9142 1.98084C2.95423 1.97455 2.99569 1.97121 3.03848 1.97121L3.39307 1.97121C3.82825 1.97121 4.18104 1.61842 4.18104 1.18324ZM1.60405 17.9678C2.03396 17.9002 2.3277 17.4969 2.26014 17.067C2.25384 17.027 2.25051 16.9855 2.25051 16.9427L2.25051 16.5881C2.25051 16.1529 1.89772 15.8002 1.46253 15.8002C1.02735 15.8002 0.674557 16.1529 0.674557 16.5881L0.674557 16.9427C0.674557 17.0677 0.68433 17.191 0.703293 17.3117C0.770857 17.7416 1.17414 18.0353 1.60405 17.9678ZM1.60405 1.73415C1.17414 1.66659 0.770856 1.96033 0.703292 2.39024C0.684329 2.51091 0.674556 2.63417 0.674556 2.75918L0.674556 3.11377C0.674556 3.54896 1.02734 3.90175 1.46253 3.90175C1.89772 3.90175 2.2505 3.54896 2.2505 3.11377L2.2505 2.75918C2.2505 2.7164 2.25384 2.67493 2.26013 2.6349C2.3277 2.20499 2.03396 1.80171 1.60405 1.73415ZM1.46253 14.5394C1.89772 14.5394 2.25051 14.1866 2.25051 13.7514L2.25051 13.0422C2.25051 12.6071 1.89772 12.2543 1.46253 12.2543C1.02735 12.2543 0.674556 12.6071 0.674556 13.0422L0.674556 13.7514C0.674557 14.1866 1.02735 14.5394 1.46253 14.5394ZM1.46253 10.9935C1.89772 10.9935 2.25051 10.6407 2.25051 10.2055L2.25051 9.49636C2.2505 9.06118 1.89772 8.70839 1.46253 8.70839C1.02735 8.70839 0.674556 9.06118 0.674556 9.49636L0.674556 10.2055C0.674556 10.6407 1.02735 10.9935 1.46253 10.9935ZM1.46253 7.44763C1.89772 7.44763 2.2505 7.09484 2.2505 6.65966L2.2505 5.95048C2.2505 5.51529 1.89772 5.16251 1.46253 5.16251C1.02735 5.16251 0.674556 5.51529 0.674556 5.95048L0.674556 6.65966C0.674556 7.09484 1.02735 7.44763 1.46253 7.44763ZM6.97806 9.06298C6.54288 9.06298 6.19009 9.41577 6.19009 9.85095C6.19009 10.2861 6.54288 10.6389 6.97806 10.6389L11.3798 10.6389L10.3611 11.6577C10.0534 11.9654 10.0534 12.4643 10.3611 12.7721C10.6688 13.0798 11.1677 13.0798 11.4754 12.7721L13.8394 10.4081C13.9871 10.2604 14.0702 10.0599 14.0702 9.85095C14.0702 9.64197 13.9871 9.44154 13.8394 9.29377L11.4754 6.92985C11.1677 6.62213 10.6688 6.62213 10.3611 6.92985C10.0534 7.23757 10.0534 7.73649 10.3611 8.04421L11.3798 9.06298L6.97806 9.06298Z"
                                                fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_7_820">
                                                <rect width="18.9114" height="18.9114" fill="white"
                                                    transform="translate(0.675781 0.395508)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <span class="slider__label sr-only">
                </div>
            </div>
        </section>
        <section class="theme-preview-section">
            <div class="container">
                <div class="theme-preview-slider">
                    <div class="theme-preview-itm">
                        <div class="preview-itm">
                            <img src="{{ asset('market_assets/images/screenshot-1.png') }}" alt="">
                        </div>
                    </div>
                    <div class="theme-preview-itm">
                        <div class="preview-itm">
                            <img src="{{ asset('market_assets/images/screenshot-2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="theme-preview-itm">
                        <div class="preview-itm">
                            <img src="{{ asset('market_assets/images/screenshot-3.png') }}" alt="">
                        </div>
                    </div>
                    <div class="theme-preview-itm">
                        <div class="preview-itm">
                            <img src="{{ asset('market_assets/images/screenshot-4.png') }}" alt="">
                        </div>
                    </div>
                    <div class="theme-preview-itm">
                        <div class="preview-itm">
                            <img src="{{ asset('market_assets/images/screenshot-5.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="dedicated-section padding-top  padding-bottom">
            <div class="container">
                <div class="section-title text-center">
                    <h2>{{ __('Why Choose a Dedicated Fashion Theme') }} <b>{{ __('for Your Business?') }}</b></h2>
                    <p>{{ __('With Alligō, you can take care of the entire partner lifecycle - from onboarding through nurturing, cooperating, and rewarding. Find top performers and let go of those who aren’t a good fit.') }}
                    </p>
                    <div class="btn-group">
                        <a href="{{ route('apps.pricing') }}" class="btn-secondary">{{ __('Get the Package') }} <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                fill="none">
                                <g clip-path="url(#clip0_14_726)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.88967 10.9856C6.96087 11.2611 7.75238 12.233 7.75238 13.3897C7.75238 14.7607 6.64043 15.8721 5.26877 15.8721C3.89711 15.8721 2.78516 14.7607 2.78516 13.3897C2.78516 12.233 3.57667 11.2611 4.64787 10.9856V10.5959C4.64787 8.7099 6.1768 7.18097 8.06283 7.18097C9.26304 7.18097 10.236 6.20801 10.236 5.00781V3.09158L8.81233 4.51524C8.56985 4.75772 8.17672 4.75772 7.93424 4.51524C7.69176 4.27276 7.69176 3.87963 7.93424 3.63715L10.4179 1.15354C10.6603 0.91106 11.0535 0.91106 11.2959 1.15354L13.7796 3.63715C14.022 3.87962 14.022 4.27276 13.7796 4.51524C13.5371 4.75771 13.1439 4.75772 12.9015 4.51524L11.4778 3.09158V5.00781C11.4778 6.89384 9.94887 8.42278 8.06283 8.42278C6.86263 8.42278 5.88967 9.39573 5.88967 10.5959V10.9856ZM6.51058 13.3897C6.51058 14.0743 5.95517 14.6303 5.26877 14.6303C4.58237 14.6303 4.02696 14.0743 4.02696 13.3897C4.02696 12.7052 4.58237 12.1492 5.26877 12.1492C5.95517 12.1492 6.51058 12.7052 6.51058 13.3897Z"
                                        fill="white"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_14_726">
                                        <rect width="14.9017" height="14.9017" fill="white"
                                            transform="translate(0.921875 0.97168)"></rect>
                                    </clipPath>
                                </defs>
                            </svg></a>
                        <a href="#" class="link-btn">{{ __('View Live Demo') }} <svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <g clip-path="url(#clip0_23_832)">
                                    <path
                                        d="M9.62891 1.18359L9.62891 18.519L4.90106 18.519C3.16032 18.519 1.74917 17.1079 1.74917 15.3671L1.74916 4.33549C1.74916 2.59475 3.16032 1.18359 4.90106 1.18359L9.62891 1.18359Z"
                                        fill="#6FD943" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M17.5111 19.3071C18.8166 19.3071 19.875 18.2488 19.875 16.9432L19.875 15.6299L19.875 2.75967C19.875 1.45411 18.8166 0.395748 17.5111 0.395748L10.4193 0.395749L10.0647 0.395749C9.62953 0.395749 9.27675 0.748536 9.27675 1.18372C9.27675 1.61891 9.62953 1.9717 10.0647 1.9717L10.4193 1.9717L17.5111 1.9717C17.9463 1.9717 18.2991 2.32449 18.2991 2.75967L18.2991 15.6299L18.2991 16.9432C18.2991 17.3784 17.9463 17.7312 17.5111 17.7312L10.4193 17.7312L10.0647 17.7312C9.62953 17.7312 9.27675 18.084 9.27675 18.5192C9.27675 18.9543 9.62953 19.3071 10.0647 19.3071L10.4193 19.3071L17.5111 19.3071ZM8.01599 18.5192C8.01599 18.084 7.6632 17.7312 7.22801 17.7312L6.51884 17.7312C6.08365 17.7312 5.73086 18.084 5.73086 18.5192C5.73086 18.9543 6.08365 19.3071 6.51884 19.3071L7.22801 19.3071C7.6632 19.3071 8.01599 18.9543 8.01599 18.5192ZM8.01599 1.18372C8.01599 0.748536 7.6632 0.395749 7.22801 0.395749L6.51884 0.395749C6.08365 0.395749 5.73086 0.748536 5.73086 1.18372C5.73086 1.61891 6.08365 1.9717 6.51884 1.9717L7.22801 1.9717C7.6632 1.9717 8.01599 1.61891 8.01599 1.18372ZM4.47011 18.5192C4.47011 18.084 4.11732 17.7312 3.68213 17.7312L3.32754 17.7312C3.28476 17.7312 3.24329 17.7278 3.20326 17.7216C2.77335 17.654 2.37007 17.9477 2.30251 18.3776C2.23495 18.8075 2.52869 19.2108 2.9586 19.2784C3.07927 19.2974 3.20253 19.3071 3.32754 19.3071L3.68213 19.3071C4.11732 19.3071 4.47011 18.9543 4.47011 18.5192ZM4.4701 1.18372C4.4701 0.748536 4.11732 0.395749 3.68213 0.395749L3.32754 0.395749C3.20253 0.395749 3.07927 0.405522 2.9586 0.424485C2.52869 0.492047 2.23494 0.895329 2.30251 1.32524C2.37007 1.75515 2.77335 2.04889 3.20326 1.98133C3.24329 1.97504 3.28475 1.9717 3.32754 1.9717L3.68213 1.9717C4.11732 1.9717 4.4701 1.61891 4.4701 1.18372ZM1.89311 17.9682C2.32302 17.9007 2.61676 17.4974 2.5492 17.0675C2.54291 17.0275 2.53957 16.986 2.53957 16.9432L2.53957 16.5886C2.53957 16.1534 2.18678 15.8006 1.75159 15.8006C1.31641 15.8006 0.963619 16.1534 0.963619 16.5886L0.963619 16.9432C0.963619 17.0682 0.973392 17.1915 0.992355 17.3122C1.05992 17.7421 1.4632 18.0358 1.89311 17.9682ZM1.89311 1.73464C1.4632 1.66708 1.05992 1.96081 0.992355 2.39073C0.973392 2.5114 0.963619 2.63466 0.963619 2.75967L0.963619 3.11426C0.963619 3.54945 1.31641 3.90223 1.75159 3.90223C2.18678 3.90223 2.53957 3.54945 2.53957 3.11426L2.53957 2.75967C2.53957 2.71689 2.54291 2.67542 2.5492 2.63539C2.61676 2.20548 2.32302 1.8022 1.89311 1.73464ZM1.75159 14.5399C2.18678 14.5399 2.53957 14.1871 2.53957 13.7519L2.53957 13.0427C2.53957 12.6075 2.18678 12.2548 1.75159 12.2548C1.31641 12.2548 0.963619 12.6075 0.963619 13.0427L0.963619 13.7519C0.963619 14.1871 1.31641 14.5399 1.75159 14.5399ZM1.75159 10.994C2.18678 10.994 2.53957 10.6412 2.53957 10.206L2.53957 9.49685C2.53957 9.06167 2.18678 8.70888 1.75159 8.70888C1.31641 8.70888 0.963619 9.06167 0.963619 9.49685L0.963619 10.206C0.963619 10.6412 1.31641 10.994 1.75159 10.994ZM1.75159 7.44812C2.18678 7.44812 2.53957 7.09533 2.53957 6.66014L2.53957 5.95097C2.53957 5.51578 2.18678 5.16299 1.75159 5.16299C1.31641 5.16299 0.963619 5.51578 0.963619 5.95097L0.963619 6.66014C0.963619 7.09533 1.31641 7.44812 1.75159 7.44812ZM7.26712 9.06346C6.83194 9.06346 6.47915 9.41625 6.47915 9.85144C6.47915 10.2866 6.83194 10.6394 7.26712 10.6394L11.6689 10.6394L10.6501 11.6582C10.3424 11.9659 10.3424 12.4648 10.6501 12.7725C10.9579 13.0803 11.4568 13.0803 11.7645 12.7725L14.1284 10.4086C14.2762 10.2608 14.3592 10.0604 14.3592 9.85144C14.3592 9.64246 14.2762 9.44203 14.1284 9.29426L11.7645 6.93034C11.4568 6.62261 10.9579 6.62261 10.6501 6.93034C10.3424 7.23806 10.3424 7.73698 10.6501 8.0447L11.6689 9.06347L7.26712 9.06346Z"
                                        fill="#002332" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_23_832">
                                        <rect width="18.9114" height="18.9114" fill="white"
                                            transform="translate(0.964844 0.395508)" />
                                    </clipPath>
                                </defs>
                            </svg></a>
                    </div>
                </div>
                <div class="row row-gap justify-content-center ">
                    <div class="col-lg-4 col-md-6 col-12 information-card">
                        <div class="information-card-inner">
                            <div class="card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                    viewBox="0 0 60 60" fill="none">
                                    <path opacity="0.4"
                                        d="M50 40V17.5C50 12.5 47.5 10 42.5 10H17.5C12.5 10 10 12.5 10 17.5V40"
                                        fill="white" />
                                    <path
                                        d="M12.5 47.5H47.5C50.8325 47.5 52.5 45.8325 52.5 42.5V40H7.5V42.5C7.5 45.8325 9.1675 47.5 12.5 47.5Z"
                                        fill="white" />
                                    <path
                                        d="M24.9994 33.1249C24.5194 33.1249 24.0394 32.9425 23.6744 32.575L18.6744 27.575C17.9419 26.8425 17.9419 25.6549 18.6744 24.9224L23.6744 19.9224C24.4069 19.1899 25.5945 19.1899 26.327 19.9224C27.0595 20.6549 27.0595 21.8425 26.327 22.575L22.652 26.2499L26.327 29.9249C27.0595 30.6574 27.0595 31.845 26.327 32.5775C25.9595 32.9425 25.4794 33.1249 24.9994 33.1249ZM36.3245 32.575L41.3245 27.575C42.057 26.8425 42.057 25.6549 41.3245 24.9224L36.3245 19.9224C35.592 19.1899 34.4044 19.1899 33.6719 19.9224C32.9394 20.6549 32.9394 21.8425 33.6719 22.575L37.3469 26.2499L33.6719 29.9249C32.9394 30.6574 32.9394 31.845 33.6719 32.5775C34.0369 32.9425 34.517 33.1274 34.997 33.1274C35.477 33.1274 35.9595 32.9425 36.3245 32.575Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <div class="information-content">
                                <h5>{{ __('High-Performing,') }}<br>{{ __('Secure PHP Framework') }}</h5>
                                <p>{{ __('Unlike many frameworks that come and go, the framework stood the test of time. Over the years, it grew to become one of the fastest and most secure frameworks in the market.') }}
                                </p>
                                <a href="#" class="btn btn-white" tabindex="0">{{ __('Find Out More') }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_14_726)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.88967 10.9856C6.96087 11.2611 7.75238 12.233 7.75238 13.3897C7.75238 14.7607 6.64043 15.8721 5.26877 15.8721C3.89711 15.8721 2.78516 14.7607 2.78516 13.3897C2.78516 12.233 3.57667 11.2611 4.64787 10.9856V10.5959C4.64787 8.7099 6.1768 7.18097 8.06283 7.18097C9.26304 7.18097 10.236 6.20801 10.236 5.00781V3.09158L8.81233 4.51524C8.56985 4.75772 8.17672 4.75772 7.93424 4.51524C7.69176 4.27276 7.69176 3.87963 7.93424 3.63715L10.4179 1.15354C10.6603 0.91106 11.0535 0.91106 11.2959 1.15354L13.7796 3.63715C14.022 3.87962 14.022 4.27276 13.7796 4.51524C13.5371 4.75771 13.1439 4.75772 12.9015 4.51524L11.4778 3.09158V5.00781C11.4778 6.89384 9.94887 8.42278 8.06283 8.42278C6.86263 8.42278 5.88967 9.39573 5.88967 10.5959V10.9856ZM6.51058 13.3897C6.51058 14.0743 5.95517 14.6303 5.26877 14.6303C4.58237 14.6303 4.02696 14.0743 4.02696 13.3897C4.02696 12.7052 4.58237 12.1492 5.26877 12.1492C5.95517 12.1492 6.51058 12.7052 6.51058 13.3897Z"
                                                fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_14_726">
                                                <rect width="14.9017" height="14.9017" fill="white"
                                                    transform="translate(0.921875 0.97168)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 information-card">
                        <div class="information-card-inner">
                            <div class="card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                    viewBox="0 0 60 60" fill="none">
                                    <path opacity="0.4"
                                        d="M50 25.125V29.9999C50 35.5249 41.05 39.9999 30 39.9999C18.95 39.9999 10 35.5249 10 29.9999V25.125C14.15 28.875 21.4 31.2499 30 31.2499C38.6 31.2499 45.875 28.875 50 25.125ZM30 43.7499C21.4 43.7499 14.15 41.375 10 37.625V42.4999C10 48.0249 18.95 52.4999 30 52.4999C41.05 52.4999 50 48.0249 50 42.4999V37.625C45.875 41.375 38.6 43.7499 30 43.7499Z"
                                        fill="white" />
                                    <path
                                        d="M30 27.5C41.0457 27.5 50 23.0228 50 17.5C50 11.9772 41.0457 7.5 30 7.5C18.9543 7.5 10 11.9772 10 17.5C10 23.0228 18.9543 27.5 30 27.5Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <div class="information-content">
                                <h5>{{ __('Stable Codebase') }}</h5>
                                <p> {{ __("Some frameworks come and go - but Laravel is here to stay. Laravel's active developer community helps keep its codebase up-to-date and stable. This, in turn, helps ensure the stability of your eCommerce website.") }}
                                </p>
                                <a href="#" class="btn btn-white" tabindex="0">{{ __('Find Out More') }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_14_726)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.88967 10.9856C6.96087 11.2611 7.75238 12.233 7.75238 13.3897C7.75238 14.7607 6.64043 15.8721 5.26877 15.8721C3.89711 15.8721 2.78516 14.7607 2.78516 13.3897C2.78516 12.233 3.57667 11.2611 4.64787 10.9856V10.5959C4.64787 8.7099 6.1768 7.18097 8.06283 7.18097C9.26304 7.18097 10.236 6.20801 10.236 5.00781V3.09158L8.81233 4.51524C8.56985 4.75772 8.17672 4.75772 7.93424 4.51524C7.69176 4.27276 7.69176 3.87963 7.93424 3.63715L10.4179 1.15354C10.6603 0.91106 11.0535 0.91106 11.2959 1.15354L13.7796 3.63715C14.022 3.87962 14.022 4.27276 13.7796 4.51524C13.5371 4.75771 13.1439 4.75772 12.9015 4.51524L11.4778 3.09158V5.00781C11.4778 6.89384 9.94887 8.42278 8.06283 8.42278C6.86263 8.42278 5.88967 9.39573 5.88967 10.5959V10.9856ZM6.51058 13.3897C6.51058 14.0743 5.95517 14.6303 5.26877 14.6303C4.58237 14.6303 4.02696 14.0743 4.02696 13.3897C4.02696 12.7052 4.58237 12.1492 5.26877 12.1492C5.95517 12.1492 6.51058 12.7052 6.51058 13.3897Z"
                                                fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_14_726">
                                                <rect width="14.9017" height="14.9017" fill="white"
                                                    transform="translate(0.921875 0.97168)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 information-card">
                        <div class="information-card-inner">
                            <div class="card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                    viewBox="0 0 60 60" fill="none">
                                    <path opacity="0.4"
                                        d="M20 47.5H40C45 47.5 47.5 45 47.5 40V20C47.5 15 45 12.5 40 12.5H20C15 12.5 12.5 15 12.5 20V40C12.5 45 15 47.5 20 47.5Z"
                                        fill="white" />
                                    <path
                                        d="M25 38.75H35C37.5 38.75 38.75 37.5 38.75 35V25C38.75 22.5 37.5 21.25 35 21.25H25C22.5 21.25 21.25 22.5 21.25 25V35C21.25 37.5 22.5 38.75 25 38.75Z"
                                        fill="white" />
                                    <path
                                        d="M54.375 22.5C54.375 23.525 53.55 24.375 52.5 24.375H47.5V20.625H52.5C53.55 20.625 54.375 21.475 54.375 22.5ZM52.5 35.625H47.5V39.375H52.5C53.55 39.375 54.375 38.525 54.375 37.5C54.375 36.475 53.55 35.625 52.5 35.625ZM7.5 20.625C6.475 20.625 5.625 21.475 5.625 22.5C5.625 23.525 6.475 24.375 7.5 24.375H12.5V20.625H7.5ZM7.5 35.625C6.475 35.625 5.625 36.475 5.625 37.5C5.625 38.525 6.475 39.375 7.5 39.375H12.5V35.625H7.5ZM37.5 5.625C36.475 5.625 35.625 6.475 35.625 7.5V12.5H39.375V7.5C39.375 6.475 38.55 5.625 37.5 5.625ZM22.5 5.625C21.475 5.625 20.625 6.475 20.625 7.5V12.5H24.375V7.5C24.375 6.475 23.55 5.625 22.5 5.625ZM35.625 47.5V52.5C35.625 53.525 36.475 54.375 37.5 54.375C38.55 54.375 39.375 53.525 39.375 52.5V47.5H35.625ZM20.625 47.5V52.5C20.625 53.525 21.475 54.375 22.5 54.375C23.55 54.375 24.375 53.525 24.375 52.5V47.5H20.625Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <div class="information-content">
                                <h5>{{ __('Secure Integrations') }}</h5>
                                <p>{{ __("As you grow, you may want to expand your store with new functionalities or payment methods. Thanks to Laravel's flexibility, it’s easy to add new integrations and customize the store even once it's already developed.") }}
                                </p>
                                <a href="#" class="btn btn-white" tabindex="0">{{ __('Find Out More') }}<svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_14_726)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.88967 10.9856C6.96087 11.2611 7.75238 12.233 7.75238 13.3897C7.75238 14.7607 6.64043 15.8721 5.26877 15.8721C3.89711 15.8721 2.78516 14.7607 2.78516 13.3897C2.78516 12.233 3.57667 11.2611 4.64787 10.9856V10.5959C4.64787 8.7099 6.1768 7.18097 8.06283 7.18097C9.26304 7.18097 10.236 6.20801 10.236 5.00781V3.09158L8.81233 4.51524C8.56985 4.75772 8.17672 4.75772 7.93424 4.51524C7.69176 4.27276 7.69176 3.87963 7.93424 3.63715L10.4179 1.15354C10.6603 0.91106 11.0535 0.91106 11.2959 1.15354L13.7796 3.63715C14.022 3.87962 14.022 4.27276 13.7796 4.51524C13.5371 4.75771 13.1439 4.75772 12.9015 4.51524L11.4778 3.09158V5.00781C11.4778 6.89384 9.94887 8.42278 8.06283 8.42278C6.86263 8.42278 5.88967 9.39573 5.88967 10.5959V10.9856ZM6.51058 13.3897C6.51058 14.0743 5.95517 14.6303 5.26877 14.6303C4.58237 14.6303 4.02696 14.0743 4.02696 13.3897C4.02696 12.7052 4.58237 12.1492 5.26877 12.1492C5.95517 12.1492 6.51058 12.7052 6.51058 13.3897Z"
                                                fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_14_726">
                                                <rect width="14.9017" height="14.9017" fill="white"
                                                    transform="translate(0.921875 0.97168)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="built-technology">
            <div class="container">
                <div class="section-title text-center">
                    <h2>{{ __('Built with Technology') }} <br><b>{{ __('You Can Trust') }}</b></h2>
                    <p>{{ __('Our backend is built with Laravel - one of the most popular and highest-rated web development frameworks. Find out why we chose it - and how it benefits your business.') }}
                    </p>
                </div>
                <div class="row row-gap justify-content-center">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 information-card">
                        <div class="information-card-inner">
                            <div class="card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                    viewBox="0 0 60 60" fill="none">
                                    <path opacity="0.4"
                                        d="M50 9.375V32.5C50 38.225 46.975 41.25 41.25 41.25H18.75C13.025 41.25 10 38.225 10 32.5V9.375H50Z"
                                        fill="white" />
                                    <path
                                        d="M52.5 9.375H7.5C6.465 9.375 5.625 8.535 5.625 7.5C5.625 6.465 6.465 5.625 7.5 5.625H52.5C53.535 5.625 54.375 6.465 54.375 7.5C54.375 8.535 53.535 9.375 52.5 9.375Z"
                                        fill="white" />
                                    <path
                                        d="M39.0514 53.5501C38.7014 54.0751 38.1014 54.375 37.5014 54.375C37.1514 54.375 36.7764 54.275 36.4514 54.05L30.0014 49.7501L23.5514 54.05C22.6764 54.625 21.5264 54.4001 20.9514 53.5501C20.3764 52.6751 20.6014 51.525 21.4514 50.95L28.1264 46.4999V41.25H31.8764V46.4999L38.5514 50.95C39.4014 51.525 39.6264 52.6751 39.0514 53.5501Z"
                                        fill="white" />
                                    <path
                                        d="M41.7294 18.4251C41.5394 17.9676 41.1744 17.6026 40.7169 17.4101C40.4869 17.3151 40.2444 17.2651 39.9994 17.2651H33.7494C32.7144 17.2651 31.8744 18.1051 31.8744 19.1401C31.8744 20.1751 32.7144 21.0151 33.7494 21.0151H35.5669L31.7844 24.9101L28.8369 21.9627C27.4319 20.5577 25.1444 20.5577 23.7419 21.9627L18.6744 27.0302C17.9419 27.7627 17.9419 28.9502 18.6744 29.6827C19.0394 30.0477 19.5194 30.2327 19.9994 30.2327C20.4794 30.2327 20.9594 30.0502 21.3244 29.6827L26.1844 24.615L29.1319 27.5627C30.5369 28.9677 32.8244 28.9677 34.2269 27.5627L38.1219 23.6677V25.3901C38.1219 26.4251 38.9619 27.2651 39.9969 27.2651C41.0319 27.2651 41.8719 26.4251 41.8719 25.3901V19.1401C41.8744 18.8976 41.8244 18.6551 41.7294 18.4251Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <div class="information-content">
                                <h5>{{ __('Sell More Than Your Competitors') }}</h5>
                                <p> {{ __('Your online store has one goal - to sell your products. Thanks to years of experience in the industry, we know the ins and outs of online sales. And we put that knowledge into every package that we offer. With the Style eCommerce package, you get a store that’s optimized for helping you sell more in the fashion niche.') }}
                                </p>
                                <a href="#" class="btn btn-white" tabindex="0">{{ __('Find Out More') }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_14_726)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.88967 10.9856C6.96087 11.2611 7.75238 12.233 7.75238 13.3897C7.75238 14.7607 6.64043 15.8721 5.26877 15.8721C3.89711 15.8721 2.78516 14.7607 2.78516 13.3897C2.78516 12.233 3.57667 11.2611 4.64787 10.9856V10.5959C4.64787 8.7099 6.1768 7.18097 8.06283 7.18097C9.26304 7.18097 10.236 6.20801 10.236 5.00781V3.09158L8.81233 4.51524C8.56985 4.75772 8.17672 4.75772 7.93424 4.51524C7.69176 4.27276 7.69176 3.87963 7.93424 3.63715L10.4179 1.15354C10.6603 0.91106 11.0535 0.91106 11.2959 1.15354L13.7796 3.63715C14.022 3.87962 14.022 4.27276 13.7796 4.51524C13.5371 4.75771 13.1439 4.75772 12.9015 4.51524L11.4778 3.09158V5.00781C11.4778 6.89384 9.94887 8.42278 8.06283 8.42278C6.86263 8.42278 5.88967 9.39573 5.88967 10.5959V10.9856ZM6.51058 13.3897C6.51058 14.0743 5.95517 14.6303 5.26877 14.6303C4.58237 14.6303 4.02696 14.0743 4.02696 13.3897C4.02696 12.7052 4.58237 12.1492 5.26877 12.1492C5.95517 12.1492 6.51058 12.7052 6.51058 13.3897Z"
                                                fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_14_726">
                                                <rect width="14.9017" height="14.9017" fill="white"
                                                    transform="translate(0.921875 0.97168)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 information-card">
                        <div class="information-card-inner">
                            <div class="card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                    viewBox="0 0 60 60" fill="none">
                                    <path
                                        d="M31.8475 45.1375C31.85 45.09 31.875 45.0475 31.875 45V37.5C31.875 37.45 31.875 37.425 31.85 37.375C31.25 37.45 30.625 37.5 30 37.5C29.375 37.5 28.75 37.45 28.15 37.375C28.125 37.425 28.125 37.45 28.125 37.5V45C28.125 45.05 28.15 45.09 28.1525 45.1375C24.3875 45.71 22.5 48.16 22.5 52.5H37.5C37.5 48.1625 35.6125 45.7125 31.8475 45.1375Z"
                                        fill="white" />
                                    <path opacity="0.4"
                                        d="M30 37.5C38.285 37.5 45 30.785 45 22.5V11.25C45 9.18 43.32 7.5 41.25 7.5H18.75C16.68 7.5 15 9.18 15 11.25V22.5C15 30.785 21.715 37.5 30 37.5Z"
                                        fill="white" />
                                    <path
                                        d="M54.3743 15V19.1251C54.3743 26.2001 48.3744 29.375 44.1244 29.375H43.3242C43.9492 28.2 44.3993 26.925 44.6743 25.575C46.9243 25.35 50.6243 23.6251 50.6243 19.1251V15C50.6243 14.65 50.3493 14.375 49.9993 14.375H44.9993V11.25C44.9993 11.025 44.9743 10.825 44.9493 10.625H49.9993C52.3993 10.625 54.3743 12.6 54.3743 15Z"
                                        fill="white" />
                                    <path
                                        d="M16.6751 29.375H15.8749C11.6249 29.375 5.625 26.2001 5.625 19.1251V15C5.625 12.6 7.6 10.625 10 10.625H15.0751C15.0251 10.825 15 11.025 15 11.25V14.375H10C9.65 14.375 9.375 14.65 9.375 15V19.1251C9.375 23.6251 13.075 25.35 15.325 25.575C15.6 26.925 16.0501 28.2 16.6751 29.375Z"
                                        fill="white" />
                                    <path
                                        d="M30.8044 14.6622L32.4218 17.9273C32.5443 18.1723 32.7792 18.3423 33.0492 18.3823L36.7843 18.9222C37.4693 19.0222 37.7416 19.8623 37.2466 20.3423L34.5467 22.9623C34.3492 23.1548 34.2594 23.4297 34.3069 23.6997L34.9242 27.2872C35.0492 28.0147 34.2844 28.5698 33.6294 28.2273L30.3893 26.5322C30.1468 26.4047 29.8567 26.4047 29.6142 26.5322L26.3769 28.2273C25.7219 28.5698 24.9543 28.0147 25.0793 27.2872L25.6966 23.7048C25.7441 23.4348 25.6543 23.1573 25.4568 22.9673L22.7569 20.3472C22.2619 19.8647 22.5342 19.0247 23.2192 18.9272L26.9543 18.3872C27.2268 18.3472 27.4617 18.1772 27.5817 17.9322L29.1991 14.6673C29.5291 13.9998 30.4744 13.9997 30.8044 14.6622Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <div class="information-content">
                                <h5>{{ __('Get a Headstart over Your Competitors') }}</h5>
                                <p>
                                    {{ __('In business, you have to act fast. By choosing our Style theme package, you can get everything you need to start selling right away. Hit the market with your product sooner, attract early sales, and build an audience from day one.') }}
                                </p>
                                <a href="#" class="btn btn-white" tabindex="0">Find Out More <svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_14_726)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.88967 10.9856C6.96087 11.2611 7.75238 12.233 7.75238 13.3897C7.75238 14.7607 6.64043 15.8721 5.26877 15.8721C3.89711 15.8721 2.78516 14.7607 2.78516 13.3897C2.78516 12.233 3.57667 11.2611 4.64787 10.9856V10.5959C4.64787 8.7099 6.1768 7.18097 8.06283 7.18097C9.26304 7.18097 10.236 6.20801 10.236 5.00781V3.09158L8.81233 4.51524C8.56985 4.75772 8.17672 4.75772 7.93424 4.51524C7.69176 4.27276 7.69176 3.87963 7.93424 3.63715L10.4179 1.15354C10.6603 0.91106 11.0535 0.91106 11.2959 1.15354L13.7796 3.63715C14.022 3.87962 14.022 4.27276 13.7796 4.51524C13.5371 4.75771 13.1439 4.75772 12.9015 4.51524L11.4778 3.09158V5.00781C11.4778 6.89384 9.94887 8.42278 8.06283 8.42278C6.86263 8.42278 5.88967 9.39573 5.88967 10.5959V10.9856ZM6.51058 13.3897C6.51058 14.0743 5.95517 14.6303 5.26877 14.6303C4.58237 14.6303 4.02696 14.0743 4.02696 13.3897C4.02696 12.7052 4.58237 12.1492 5.26877 12.1492C5.95517 12.1492 6.51058 12.7052 6.51058 13.3897Z"
                                                fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_14_726">
                                                <rect width="14.9017" height="14.9017" fill="white"
                                                    transform="translate(0.921875 0.97168)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 information-card">
                        <div class="information-card-inner">
                            <div class="card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                    viewBox="0 0 60 60" fill="none">
                                    <path opacity="0.4"
                                        d="M52.5 52.5H37.5V43.75C37.5 41.25 38.75 40 41.25 40H48.75C51.25 40 52.5 41.25 52.5 43.75V52.5Z"
                                        fill="white" />
                                    <path opacity="0.4"
                                        d="M22.5 52.5H7.5V38.75C7.5 36.25 8.75 35 11.25 35H18.75C21.25 35 22.5 36.25 22.5 38.75V52.5Z"
                                        fill="white" />
                                    <path
                                        d="M37.5 52.5H22.5V31.25C22.5 28.75 23.75 27.5 26.25 27.5H33.75C36.25 27.5 37.5 28.75 37.5 31.25V52.5Z"
                                        fill="white" />
                                    <path
                                        d="M30.9337 6.89989L32.8212 10.7073C32.9637 10.9948 33.2387 11.1923 33.5537 11.2398L37.9112 11.87C38.7112 11.985 39.0287 12.9649 38.4512 13.5274L35.3013 16.585C35.0713 16.8075 34.9663 17.1299 35.0213 17.4474L35.7412 21.6323C35.8862 22.4798 34.9962 23.13 34.2312 22.73L30.4512 20.75C30.1687 20.6025 29.8287 20.6025 29.5462 20.75L25.7687 22.7272C25.0037 23.1272 24.1088 22.4798 24.2563 21.6298L24.9762 17.4498C25.0312 17.1348 24.9262 16.8124 24.6962 16.5874L21.5463 13.5298C20.9663 12.9673 21.2863 11.9874 22.0863 11.8724L26.4438 11.2422C26.7613 11.1972 27.0363 10.9975 27.1763 10.71L29.0638 6.90233C29.4463 6.12733 30.5512 6.12739 30.9337 6.89989Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <div class="information-content">
                                <h5>{{ __('Avoid Design Mistakes') }}</h5>
                                <p>
                                    {{ __('When you get a ready-made package, you avoid common design mistakes that could cost your business a fortune. Not only that. Thanks to a higher conversion rate, you can achieve better ROI on your marketing expenses.') }}
                                </p>
                                <a href="#" class="btn btn-white" tabindex="0">{{ __('Find Out More') }}<svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_14_726)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.88967 10.9856C6.96087 11.2611 7.75238 12.233 7.75238 13.3897C7.75238 14.7607 6.64043 15.8721 5.26877 15.8721C3.89711 15.8721 2.78516 14.7607 2.78516 13.3897C2.78516 12.233 3.57667 11.2611 4.64787 10.9856V10.5959C4.64787 8.7099 6.1768 7.18097 8.06283 7.18097C9.26304 7.18097 10.236 6.20801 10.236 5.00781V3.09158L8.81233 4.51524C8.56985 4.75772 8.17672 4.75772 7.93424 4.51524C7.69176 4.27276 7.69176 3.87963 7.93424 3.63715L10.4179 1.15354C10.6603 0.91106 11.0535 0.91106 11.2959 1.15354L13.7796 3.63715C14.022 3.87962 14.022 4.27276 13.7796 4.51524C13.5371 4.75771 13.1439 4.75772 12.9015 4.51524L11.4778 3.09158V5.00781C11.4778 6.89384 9.94887 8.42278 8.06283 8.42278C6.86263 8.42278 5.88967 9.39573 5.88967 10.5959V10.9856ZM6.51058 13.3897C6.51058 14.0743 5.95517 14.6303 5.26877 14.6303C4.58237 14.6303 4.02696 14.0743 4.02696 13.3897C4.02696 12.7052 4.58237 12.1492 5.26877 12.1492C5.95517 12.1492 6.51058 12.7052 6.51058 13.3897Z"
                                                fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_14_726">
                                                <rect width="14.9017" height="14.9017" fill="white"
                                                    transform="translate(0.921875 0.97168)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 information-card">
                        <div class="information-card-inner">
                            <div class="card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                    viewBox="0 0 60 60" fill="none">
                                    <path
                                        d="M35 37.5C34.36 37.5 33.7199 37.2551 33.2324 36.7676L28.2324 31.7676C27.7624 31.2976 27.5 30.6625 27.5 30V20C27.5 18.62 28.6175 17.5 30 17.5C31.3825 17.5 32.5 18.62 32.5 20V28.9648L36.7676 33.2324C37.7451 34.2099 37.7451 35.7901 36.7676 36.7676C36.2801 37.2551 35.64 37.5 35 37.5Z"
                                        fill="white" />
                                    <path opacity="0.4"
                                        d="M37.5 17.5C37.5 18.88 38.6175 20 40 20H50C51.3825 20 52.5 18.88 52.5 17.5V7.5C52.5 6.12 51.3825 5 50 5C48.6175 5 47.5 6.12 47.5 7.5V12.3248C42.875 7.69483 36.6103 5 29.9353 5C16.1878 5 5 16.215 5 30C5 43.785 16.1878 55 29.9353 55C39.4928 55 48.0424 49.6749 52.2449 41.0999C52.8524 39.8599 52.3423 38.3626 51.1023 37.7551C49.8623 37.1476 48.3626 37.6601 47.7576 38.9001C44.4001 45.7476 37.5728 50 29.9353 50C18.9453 50 10 41.0275 10 30C10 18.9725 18.9428 10 29.9353 10C34.8528 10 39.505 11.8175 43.0975 15H40C38.6175 15 37.5 16.12 37.5 17.5Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <div class="information-content">
                                <h5>{{ __('Build a Long-Term Asset') }}</h5>
                                <p>
                                    {{ __('The key to success in eCommerce is to scale your store and build an audience of loyal, recurring customers. With our package, you get more than just a store. You get an asset that’s ready for you to take care of it and grow it for years to come.') }}
                                </p>
                                <a href="#" class="btn btn-white" tabindex="0">{{ __('Find Out More') }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_14_726)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.88967 10.9856C6.96087 11.2611 7.75238 12.233 7.75238 13.3897C7.75238 14.7607 6.64043 15.8721 5.26877 15.8721C3.89711 15.8721 2.78516 14.7607 2.78516 13.3897C2.78516 12.233 3.57667 11.2611 4.64787 10.9856V10.5959C4.64787 8.7099 6.1768 7.18097 8.06283 7.18097C9.26304 7.18097 10.236 6.20801 10.236 5.00781V3.09158L8.81233 4.51524C8.56985 4.75772 8.17672 4.75772 7.93424 4.51524C7.69176 4.27276 7.69176 3.87963 7.93424 3.63715L10.4179 1.15354C10.6603 0.91106 11.0535 0.91106 11.2959 1.15354L13.7796 3.63715C14.022 3.87962 14.022 4.27276 13.7796 4.51524C13.5371 4.75771 13.1439 4.75772 12.9015 4.51524L11.4778 3.09158V5.00781C11.4778 6.89384 9.94887 8.42278 8.06283 8.42278C6.86263 8.42278 5.88967 9.39573 5.88967 10.5959V10.9856ZM6.51058 13.3897C6.51058 14.0743 5.95517 14.6303 5.26877 14.6303C4.58237 14.6303 4.02696 14.0743 4.02696 13.3897C4.02696 12.7052 4.58237 12.1492 5.26877 12.1492C5.95517 12.1492 6.51058 12.7052 6.51058 13.3897Z"
                                                fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_14_726">
                                                <rect width="14.9017" height="14.9017" fill="white"
                                                    transform="translate(0.921875 0.97168)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="package-detail-section padding-top">
            <div class="container">
                <div class="section-title text-center">
                    <h2>{{ __('Start an Online Fashion Business') }} <b> {{ __('with a Complete eCommerce Package') }}
                        </b></h2>
                    <p>{{ __('Get a fashion-themed eCommerce store with a secure backend and convenient mobile app. Build a brand, manage your store wherever you are, and grow an online business.') }}
                    </p>
                    <div class="btn-group">
                        <a href="{{ route('apps.pricing') }}" class="btn-secondary">{{ __('Get the Package') }} <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                fill="none">
                                <g clip-path="url(#clip0_14_726)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.88967 10.9856C6.96087 11.2611 7.75238 12.233 7.75238 13.3897C7.75238 14.7607 6.64043 15.8721 5.26877 15.8721C3.89711 15.8721 2.78516 14.7607 2.78516 13.3897C2.78516 12.233 3.57667 11.2611 4.64787 10.9856V10.5959C4.64787 8.7099 6.1768 7.18097 8.06283 7.18097C9.26304 7.18097 10.236 6.20801 10.236 5.00781V3.09158L8.81233 4.51524C8.56985 4.75772 8.17672 4.75772 7.93424 4.51524C7.69176 4.27276 7.69176 3.87963 7.93424 3.63715L10.4179 1.15354C10.6603 0.91106 11.0535 0.91106 11.2959 1.15354L13.7796 3.63715C14.022 3.87962 14.022 4.27276 13.7796 4.51524C13.5371 4.75771 13.1439 4.75772 12.9015 4.51524L11.4778 3.09158V5.00781C11.4778 6.89384 9.94887 8.42278 8.06283 8.42278C6.86263 8.42278 5.88967 9.39573 5.88967 10.5959V10.9856ZM6.51058 13.3897C6.51058 14.0743 5.95517 14.6303 5.26877 14.6303C4.58237 14.6303 4.02696 14.0743 4.02696 13.3897C4.02696 12.7052 4.58237 12.1492 5.26877 12.1492C5.95517 12.1492 6.51058 12.7052 6.51058 13.3897Z"
                                        fill="white"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_14_726">
                                        <rect width="14.9017" height="14.9017" fill="white"
                                            transform="translate(0.921875 0.97168)"></rect>
                                    </clipPath>
                                </defs>
                            </svg></a>
                    </div>
                </div>
                <div class="description">
                    <p> {{ __('An effective fashion theme should be visually appealing and easy to navigate. A good theme makes it easy for customers to find and buy the items they’re interested in. The theme should also be responsive so that it looks good on all devices.') }}
                    </p>
                    <p> {{ __('With the Style theme, you get all of the above - and more. The theme gives you everything you need to sell your products and keep your audience coming back for more. Easily customize the theme and adjust its design to your branding needs. Add products, polish product pages, and start growing your online business.') }}
                    </p>
                </div>
            </div>
        </section>
    </div>
    <!-- wrapper end -->
@endsection
