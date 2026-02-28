<footer id="newsletter">
    <div class="container">
        <div class="row">
            <!-- Column 1: Brand & Socials -->
            <div class="col-lg-3">
                <div class="footer-widget">
                    <div class="logo">
                        <img src="{{ asset('assets/images/logo-white.png') }}" alt="Elips Academy">
                    </div>
                    <p>Elips Academy - Kursus Komputer & Desain Profesional.</p>
                    <ul class="social-icons">
                        <li><a href="#"><i class="ph ph-instagram-logo"></i></a></li>
                        <li><a href="#"><i class="ph ph-tiktok-logo"></i></a></li>
                        <li><a href="#"><i class="ph ph-envelope"></i></a></li>
                    </ul>
                </div>
            </div>

            <!-- Column 2: Location Names -->
            <div class="col-lg-3">
                <div class="footer-widget">
                    <h4>Lokasi Kantor</h4>
                    <ul>
                        <li><a class="text-white fw-bold mb-1" href="https://maps.app.goo.gl/zmL3R9JQE43v7RF56" target="_blank">Elips Academy Candi</a>
                            <p class="text-white small mb-3">Ruko Taman Anggun Sejahtera 4, Blk. E - F No.2 no 17, Kabupaten Sidoarjo</p>
                        </li>
                        <li><a class="text-white fw-bold mb-1" href="https://maps.app.goo.gl/qQJvEtfsoTaQXkZ1A" target="_blank">Elips Academy Surabaya</a>
                            <p class="text-white small mb-3">Jl. Gubeng Kertajaya VI No.5B, Kertajaya, Kec. Gubeng, Surabaya</p>
                        </li>
                        <li><a class="text-white fw-bold mb-1" href="https://maps.app.goo.gl/PyXaoo36kc637vGh9" target="_blank">Elips Academy</a>
                            <p class="text-white small mb-0">Perumahan Park Royal Regency Blok K1 No. 24, Sono, Sidokerto, Buduran</p>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Column 3: Maps Embeds -->
            <div class="col-lg-3">
                <div class="footer-widget">
                    <h4>Peta Lokasi</h4>
                    <div class="maps-container" style="display: flex; flex-direction: column; gap: 15px;">
                        <!-- Candi -->
                        <div>
                            <p class="text-white fw-bold mb-1" style="font-size: 14px;">Elips Academy Candi</p>
                            <div class="map-frame" style="height: 100px; width: 100%; border-radius: 8px; overflow: hidden; position: relative;">
                                <iframe 
                                    width="100%" 
                                    height="100%" 
                                    frameborder="0" 
                                    scrolling="no" 
                                    marginheight="0" 
                                    marginwidth="0" 
                                    src="https://maps.google.com/maps?q=Elips%20Academy%20Candi%20Sidoarjo&t=&z=13&ie=UTF8&iwloc=&output=embed">
                                </iframe>
                                <a href="https://maps.app.goo.gl/zmL3R9JQE43v7RF56" target="_blank" style="position:absolute; top:0; left:0; width:100%; height:100%; z-index:10;"></a>
                            </div>
                        </div>
                        <!-- Surabaya -->
                        <div>
                            <p class="text-white fw-bold mb-1" style="font-size: 14px;">Elips Academy Surabaya</p>
                            <div class="map-frame" style="height: 100px; width: 100%; border-radius: 8px; overflow: hidden; position: relative;">
                                <iframe 
                                    width="100%" 
                                    height="100%" 
                                    frameborder="0" 
                                    scrolling="no" 
                                    marginheight="0" 
                                    marginwidth="0" 
                                    src="https://maps.google.com/maps?q=Elips%20Academy%20Surabaya&t=&z=13&ie=UTF8&iwloc=&output=embed">
                                </iframe>
                                <a href="https://maps.app.goo.gl/qQJvEtfsoTaQXkZ1A" target="_blank" style="position:absolute; top:0; left:0; width:100%; height:100%; z-index:10;"></a>
                            </div>
                        </div>
                        <!-- Pusat -->
                        <div>
                            <p class="text-white fw-bold mb-1" style="font-size: 14px;">Elips Academy</p>
                            <div class="map-frame" style="height: 100px; width: 100%; border-radius: 8px; overflow: hidden; position: relative;">
                                <iframe 
                                    width="100%" 
                                    height="100%" 
                                    frameborder="0" 
                                    scrolling="no" 
                                    marginheight="0" 
                                    marginwidth="0" 
                                    src="https://maps.google.com/maps?q=Elips%20Academy%20Pusat%20Sidoarjo&t=&z=13&ie=UTF8&iwloc=&output=embed">
                                </iframe>
                                <a href="https://maps.app.goo.gl/PyXaoo36kc637vGh9" target="_blank" style="position:absolute; top:0; left:0; width:100%; height:100%; z-index:10;"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Column 4: Contact Info (Moved) -->
            <div class="col-lg-3">
                <div class="footer-widget">
                    <h4>Hubungi Kami</h4>
                    <ul class="mb-3">
                        <li>Admin Candi: <a href="https://wa.me/6282337876034">0823-3787-6034</a></li>
                        <li>Admin Buduran: <a href="https://wa.me/6281217137823">0812-1713-7823</a></li>
                        <li>Admin Surabaya: <a href="https://wa.me/6282139257206">0821-3925-7206</a></li>
                        <li>Email: <a href="mailto:elipsacademy@gmail.com">elipsacademy@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright-text">
                    <p>Copyright © {{ date('Y') }} Elips Academy. All Rights Reserved. 
                    {{-- <br>Design: <a href="https://templatemo.com" target="_blank" title="css templates">TemplateMo</a></p> --}}
                </div>
            </div>
        </div>
    </div>
</footer>