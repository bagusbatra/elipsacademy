<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Elips Academy">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        {{-- Home --}}
                        <li class="scroll">
                            <a href="{{ route('home') }}#home"
                            class="{{ Route::is('home') ? 'active' : '' }}">
                            Home
                            </a>
                        </li>

                        {{-- Program Belajar --}}
                        <li class="scroll">
                           <a href="{{ route('program') }}"
                            class="{{ Route::is('program') ? 'active' : '' }}">
                            Program Belajar
                            </a>
                        </li>

                        {{-- Tentang Kami --}}
                        <li class="scroll">
                            <a href="{{ route('home') }}#about"
                            class="{{ Route::is('about') ? 'active' : '' }}">
                            Tentang Kami
                            </a>
                        </li>

                        {{-- Halaman terpisah --}}
                        <li class="scroll">
                            <a href="{{ route('home') }}"
                            class="{{ Route::is('daftarkurusus') ? 'active' : '' }}">
                            Daftar Kursus
                            </a>
                        </li>

                        <li class="scroll">
                            <a href="{{ route('artikel') }}"
                            class="{{ Route::is('artikel') ? 'active' : '' }}">
                            Artikel
                            </a>
                        </li>

                        <li class="scroll">
                            <a href="{{ route('portofolio') }}"
                            class="{{ Route::is('portofolio') ? 'active' : '' }}">
                            Portofolio
                            </a>
                        </li>
                        {{-- LOGIN REGISTER --}}
                        <li>
                            <div class="gradient-button">
                                {{-- <a id="modal_trigger" href="#login"> --}}
                                <a id="modal_trigger" href="{{ url('login') }}">
                                    <i class="fa fa-sign-in-alt"></i> Daftar/Masuk
                                </a>
                            </div>
                        </li>
                    </ul>

                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->