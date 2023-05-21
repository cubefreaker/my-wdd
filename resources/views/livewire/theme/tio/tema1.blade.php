<x-slot name="title">{{ $title }}</x-slot>
@vite(['resources/js/theme-general.js'])

<div>
    <section class="fixed flex justify-center w-screen bottom-2">
        <ul class="flex justify-around place-items-center bg-white h-[45px] w-[80%] rounded-lg shadow"> 
            <li>
                <a href="#home">
                    <img class="w-[20px]" src="{{ asset('tio/images/home.svg') }}" alt="">
                </a>
            </li>
            <li>
                <a href="#kalender">
                    <img class="w-[20px]" src="{{ asset('tio/images/profile.svg') }}" alt="">
                </a>
            </li>
            <li>
                <a href="#akad">
                    <img class="w-[20px]" src="{{ asset('tio/images/kalender.svg') }}" alt="">
                </a>
            </li><li>
                <a href="#galeri">
                    <img class="w-[20px]" src="{{ asset('tio/images/galeri.svg') }}" alt="">
                </a>
            </li><li>
                <a href="#video">
                    <img class="w-[20px]" src="{{ asset('tio/images/hadiah.svg') }}" alt="">
                </a>
            </li>
            </li><li>
                <a href="#pensil">
                    <img class="w-[20px]" src="{{ asset('tio/images/pensil.svg') }}" alt="">
                </a>
            </li><li>
                <a href="#hadiah">
                    <img class="w-[20px]" src="{{ asset('tio/images/chat.svg') }}" alt="">
                </a>
            </li>
        </ul>
    </section>
    <section id="home" class="h-screen flex flex-col justify-center place-items-center bg-[url(/public/tio/images/tes.jpg)] text-[white]">
        <div class="mb-[10px] text-[#C75C89]">Minggu, 04 Juni 2023</div>
        <div class="text-[50px] text-black font-[400] font-[Alkatra]">Romeo & Juliet</div>
        <div class="mb-[20px] text-black italic">Hello, We are getting married</div>
        <div class="italic text-black">Dear</div>
        <div class="text-[#C75C89]">Ayana</div>
        <div class="italic text-black">Jakarta</div>
    </section>
    <section id="profile" class="h-screen flex flex-col place-items-center justify-center">
        <div class="font-bold text-[20px]">NOTES</div>
        <div class="italic underline underline-offset-4">Protocol covid-19</div>
        <div class="w-[50%] text-center">Dalam upaya mengurangi penyebaran Covid 19 pada masa pandemi,
        kami harapkan kedatangan para tamu undangan agar menjalankan protokol yang berlaku.</div>
        <div class="w-[50%] flex flex-col">
            <div class="flex text-center">
                <div class="m-6 w-[50%] flex flex-col place-items-center">
                    <img class="w-[80px]" src="{{ asset('tio/images/mask.svg') }}" alt="">
                    Wajib Menggunakan Masker
                </div>
                <div class="m-6 w-[50%] flex flex-col place-items-center">
                    <img class="w-[80px]" src="{{ asset('tio/images/distance.svg') }}" alt="">
                    Saling Menjaga Jarak di Dalam Acara
                </div>
            </div>
            <div class="flex text-center">
                <div class="m-6 w-[50%] flex flex-col place-items-center">
                    <img class="w-[80px]" src="{{ asset('tio/images/greeting.svg') }}" alt="">
                    Menggunakan salam namastee sebagai ganti berjabat tangan
                </div>
                <div class="m-6 w-[50%] flex flex-col place-items-center">
                    <img class="w-[80px]" src="{{ asset('tio/images/wash.svg') }}" alt="">
                    Jaga Kebersihan dengan Mencuci Tangan atau Handsanitizer</div>
            </div>
        </div>
    </section>
    <section id="kalender" class="h-screen flex flex-col justify-center place-items-center">
        <div class="font-serif text-[20px] mb-[10px] ">Bride & Groom</div>
        <div class="italic mb-[10px]">Assalamu’alaikum Warahmatullahi Wabarakatuh</div>
        <div class="w-[80%] text-center mb-3">Maha suci Allah SWT yang telah menciptakan makhluk-Nya berpasang-pasangan.
            Ya Allah, perkenankanlah kami merangkai kasih sayang yang Kau ciptakan di antara putra-putri kami:</div>
        <div class="w-[80%] flex justify-around">        
            <div class="text-center m-6">
            <div class="text-[50px] text-black font-[400] font-[Alkatra]">
                <img class="w-[200px] rounded-full" src="{{ asset('tio/images/pp.jpg') }}" alt="">
                Romeo
             </div>
            <div>Romeo Montaque</div>
            <div>Putra Pertama dari Pasangan</div>
            <div class="text-[#C75C8A]">Bambang & Mulyani</div>
            <div>Yogyakarta</div>
            </div>
            <div class="text-center m-6">
            <div class="text-[50px] text-black font-[400] font-[Alkatra]">
                <img class="w-[200px] rounded-full" src="{{ asset('tio/images/pp.jpg') }}" alt="">
                Juliet
            </div>
            <div>Juliet Capulet</div>
            <div>Putri Kedua dari Pasangan</div>
            <div class="text-[#C75C8A]">Joko & Siti</div>
            <div>Surakarta</div>
            </div>
        </div>
    </section>
    <section id ="akad" class="h-screen flex flex-col justify-center place-items-center">
        <div class=" flex">
            <div class="w-[100%] text-center m-3">
                <div class="font-bold">Akad Nikah</div>
                <div>Minggu, 4 Juni 2023</div>
                <div>08:00 - 09:00 WIB</div>
                <div>Masjid Kampus UGM</div>
                <div>Jl. Prof. DR. Drs Notonagoro, Karang Malang,<br> Caturtunggal, Kec. Depok, Kabupaten Sleman,<br> Yogyakarta</div>
                <div class="mt-2 font-semibold">Google Map</div>
            </div>
            <div class="w-[100%] text-center m-3">
                <div class="font-bold">Resepsi</div>
                <div>Minggu, 4 Juni 2023</div>
                <div>09:00 - Selesai WIB</div>
                <div>Jogja Expo Center</div>
                <div>Jl. Wonocatur, Banguntapan, Bantul,<br> Yogyakarta</div>
                <div class="mt-2 font-semibold">Google Map</div>
            </div>
            <div class="w-[100%] text-center m-3">
                <div class="font-bold">Unduh Mantu</div>
                <div>Sabtu, 10 Juni 2023</div>
                <div>09:00 - Selesai WIB</div>
                <div>Rumah Mempelai Wanita</div>
                <div>Jl. Surya, Jebres,<br> Kota Surakarta</div>
                <div class="mt-2 font-semibold">Google Map</div>
            </div>
        </div>
    </section>
    <section id="galeri" class="h-screen flex flex-col justify-center place-items-center">
        <div class="text-[40px] text-black font-[400] font-[Alkatra]">Our gallery</div>
        <div class="grid grid-cols-4 gap-2">
            <img src="{{ asset('tio/images/pp.jpg') }}" alt="">
            <img src="{{ asset('tio/images/pp.jpg') }}" alt="">
            <img src="{{ asset('tio/images/pp.jpg') }}" alt="">
            <img src="{{ asset('tio/images/pp.jpg') }}" alt="">
            <img src="{{ asset('tio/images/pp.jpg') }}" alt="">
            <img src="{{ asset('tio/images/pp.jpg') }}" alt="">
            <img src="{{ asset('tio/images/pp.jpg') }}" alt="">
            <img src="{{ asset('tio/images/pp.jpg') }}" alt="">
            <img src="{{ asset('tio/images/pp.jpg') }}" alt="">
            <img src="{{ asset('tio/images/pp.jpg') }}" alt="">
            <img src="{{ asset('tio/images/pp.jpg') }}" alt="">
            <img src="{{ asset('tio/images/pp.jpg') }}" alt="">
        </div>
    </section>
    <section id="video" class="h-screen flex flex-col justify-center place-items-center mt-8">
        <div class="text-[40px] text-black font-[400] font-[Alkatra]">Our Video</div>
    </section>
    <section id="pensil" class="h-screen flex flex-col justify-start place-items-center">
        <div class="text-[40px] text-black font-[400] font-[Alkatra]">Our Story</div>
        <div class="flex w-[80%] m-2">
            <div class="mr-3">
                <img src="{{ asset('tio/images/pp.jpg') }}" alt="">
            </div>
            <div>
                <div class="font-bold">Pertama Kenal</div>
                <div>Gramedia |  01 Januari 2020</div>
                <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
            </div>
        </div>
        <div class="flex w-[80%] m-2">
            <div class="mr-3">
                <img src="{{ asset('tio/images/pp.jpg') }}" alt="">
            </div>
            <div>
                <div class="font-bold">Menyatakan Cinta</div>
                <div>Pantai Parangtritis |  10 Januari 2020</div>
                <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
            </div>
        </div>
        <div class="flex w-[80%] m-2">
            <div class="mr-3">
                <img src="{{ asset('tio/images/pp.jpg') }}" alt="">
            </div>
            <div>
                <div class="font-bold">Tunangan</div>
                <div>Rumah Juliet |  19 Januari 2020</div>
                <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
            </div>
        </div>
    </section>
    <section id="hadiah">
        <div class="font-semibold text-[25px] italic mb-9 font-[Playfair-Display] text-center">Gift</div>
        <div class="flex flex-row mt-5 justify-center w-full">
            <div class="flex flex-row p-6 mx-6 rounded-md border-2 shadow-md place-items-center">
                <div class="flex flex-col w-[50%]">
                    <h1>BCA</h1>
                    <h1>Romeo</h1>
                    <h2>0123294357236</h2>
                </div>
                <div class="w-[50%]">
                    <img class="w-[150px] h-[40px]" src="{{ asset('tio/images/bca.png') }}" alt="" srcset="">
                </div>
            </div>
            <div class="flex flex-row p-6 mx-6 rounded-md border-2 shadow-md place-items-center">
                <div class="flex flex-col w-[50%]">
                    <h1>BCA</h1>
                    <h1>Romeo</h1>
                    <h2>0123294357236</h2>
                </div>
                <div class="w-[50%]">
                    <img class="w-[150px] h-[40px]" src="{{ asset('tio/images/bca.png') }}" alt="" srcset="">
                </div>
            </div>
        </div>
        <div class="flex flex-row w-[30%] p-6 mt-9 rounded-md border-2 shadow-md place-items-center">
            <div class="flex flex-col w-[60%] ">
                <h1>QR CODE/QRIS</h1>
                <h1>Romeo</h1>
                <h2>0123294357236</h2>
            </div>
            <div class="w-[40%]">
                <img class="w-[90px] h-[90px]" src="{{ asset('tio/images/barcode.png') }}" alt="" srcset="">
            </div>
        </div>
    </section>
</div>
