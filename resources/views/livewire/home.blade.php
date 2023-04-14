<x-slot name="title">Digital Wedding</x-slot>

<x-page-layout>
    <x-slot name="header">
        <a class="logo primary" href="#home">Wedding</a>
        <div class="toggle primary" onclick="toggleMenu()">
            <i id="menuOpen" class="fas fa-bars"></i>
            <i id="menuClose" class="fas fa-times"></i>
        </div>
        <ul class="menu">
            <li><a href="#home" class="primary">Home</a></li>
            <li><a href="#about" class="primary">About</a></li>
            <li><a href="#services" class="primary">Services</a></li>
            <li><a href="#work" class="primary">Products</a></li>
            <li><a href="#testimonial" class="primary">Testimonial</a></li>
            <li><a href="#contact" class="primary">Contact</a></li>
        </ul>
    </x-slot>
    
    <div>
        <section class="banner" id="home">
            <div class="textBx primary">
                <h2>Digital <br><span>Wedding Invitation</span></h2>
                <h3>Online Digital Wedding Invitation</h3>
                <a class="btn bg-tertiary secondary" href="#work">Try Now</a>
            </div>
        </section>
        
        <section class="about" id="about">
            <div class="heading">
                <h2>About Us</h2>
            </div>
            <div class="content">
                <div class="contentBx w50">
                    <h3>Digital Wedding Invitation</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eros risus, commodo at nunc et, hendrerit pharetra velit. Donec dapibus cursus ante, vitae porttitor augue rutrum et. Proin aliquam volutpat venenatis. Aliquam ut purus fermentum, aliquam urna ac, condimentum nulla. Fusce laoreet laoreet pharetra. In condimentum ipsum sit amet sem ullamcorper congue. Proin sed leo ac tortor viverra ullamcorper quis sit amet felis.</p>
                    <br>
                    <p>Sed congue erat in neque blandit, non accumsan ex ultricies. Nunc eget tristique arcu, et bibendum augue. Aenean lacinia blandit ante, vitae imperdiet augue sodales non. Nam at varius libero. Integer sodales velit sapien, ut aliquet tortor placerat sed. Curabitur placerat lectus nulla, eget egestas odio venenatis vitae. In massa lacus, bibendum quis ipsum eget, ornare pulvinar magna. Nullam vitae ullamcorper odio. Nulla tincidunt fringilla eros dictum vestibulum. Nulla facilisi. Pellentesque sit amet consequat velit, at luctus massa. Proin at rutrum purus. Nam sit amet luctus turpis.</p>
                </div>
                <div class="w50">
                    <img src="{{ asset('images/img1.jpg') }}" alt="img1.jpg">
                </div>
            </div>
        </section>
        
        <section class="services bg-primary" id="services">
            <div class="heading secondary">
                <h2>Our Services</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="content">
                <div class="servicesBx">
                    <img src={{ asset('images/icon1.png') }} alt="">
                    <h2>Web Design</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eros risus, commodo at nunc et, hendrerit pharetra velit.</p>
                </div>
                <div class="servicesBx">
                    <img src={{ asset('images/icon2.png') }} alt="">
                    <h2>Web Development</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eros risus, commodo at nunc et, hendrerit pharetra velit.</p>
                </div>
                <div class="servicesBx">
                    <img src={{ asset('images/icon3.png') }} alt="">
                    <h2>Android App</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eros risus, commodo at nunc et, hendrerit pharetra velit.</p>
                </div>
                <div class="servicesBx">
                    <img src={{ asset('images/icon4.png') }} alt="">
                    <h2>Photography</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eros risus, commodo at nunc et, hendrerit pharetra velit.</p>
                </div>
                <div class="servicesBx">
                    <img src={{ asset('images/icon5.png') }} alt="">
                    <h2>Content Writing</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eros risus, commodo at nunc et, hendrerit pharetra velit.</p>
                </div>
                <div class="servicesBx">
                    <img src={{ asset('images/icon6.png') }} alt="">
                    <h2>Video Editing</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eros risus, commodo at nunc et, hendrerit pharetra velit.</p>
                </div>
            </div>
        </section>
        
        <section class="work" id="work">
            <div class="heading">
                <h2>Our Latest Products</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="content">
                <div class="workBx">
                    <img src={{ asset('images/product1.jpg') }} alt="">
                </div>
                <div class="workBx">
                    <img src={{ asset('images/product2.jpg') }} alt="">
                </div>
                <div class="workBx">
                    <img src={{ asset('images/product3.jpg') }} alt="">
                </div>
                <div class="workBx">
                    <img src={{ asset('images/product4.jpg') }} alt="">
                </div>
            </div>
            <div class="load-more">
                <a class="btn bg-tertiary secondary" href="#">Load More</a>
            </div>
        </section>
        
        <section class="testimonial bg-quinary" id="testimonial">
            <div class="heading">
                <h2>Testimonial</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="content">
                <div class="testiBx">
                    <p>
                        <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eros risus, commodo at nunc et, hendrerit pharetra velit.</p>
                    </q>
                    <h3>
                        Someone
                        <br>
                        <span>Creative Designer</span>
                    </h3>
                </div>
                <div class="testiBx">
                    <p>
                        <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eros risus, commodo at nunc et, hendrerit pharetra velit.</q>
                    </p>
                    <h3>
                        Someone
                        <br>
                        <span>Creative Designer</span>
                    </h3>
                </div>
            </div>
        </section>
        
        <section class="contact bg-primary" id="contact">
            <div class="heading secondary">
                <h2>Contact Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="content secondary">
                <div class="contactInfo">
                    <h3>Contact Info</h3>
                    <div class="contactInfoBx">
                        <div class="box">
                            <div class="icon">
                                <i class="fa fa-location-dot"></i>
                            </div>
                            <div class="text">
                                <h3>Address</h3>
                                <p>
                                Jl. Pahlawan,
                                <br>
                                Madiun, Jawatimur
                                <br>
                                12345
                                </p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="text">
                                <h3>Phone</h3>
                                <p>+62884390343</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="text">
                                <h3>Email</h3>
                                <p>hamzah.habibi@mail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="formBx">
                    <form action="javascript:void(0)">
                        <h3>Message Me</h3>
                        <input type="text" id="fullname" placeholder="Full Name">
                        <input type="email" id="email" placeholder="Email">
                        <textarea rows="6" id="message" placeholder="Message..."></textarea>
                        <input type="submit" value="Send" onclick="sendEmail()">
                    </form>
                </div>
            </div>
        </section>
    </div>
</x-layouts-app>