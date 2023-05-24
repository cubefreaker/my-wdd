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
        <div class="mb-[10px] text-[#C75C89]"data-aos="fade-down">Minggu, 04 Juni 2023</div>
        <div class="text-[50px] text-black font-[400] font-[Alkatra]"data-aos="fade-down">{{ $detailUndangan->groom_short_name }} & {{ $detailUndangan->bride_short_name }}</div>
        <div class="mb-[20px] text-black italic"data-aos="fade-down">Hello, We are getting married</div>
        <div class="italic text-black"data-aos="fade-down">Dear</div>
        <div class="text-[#C75C89]"data-aos="fade-left">Ayana</div>
        <div class="italic text-black"data-aos="fade-down">Jakarta</div>
    </section>
    <section id="profile" class="h-screen flex flex-col place-items-center justify-center">
        <div class="font-bold text-[20px]"data-aos="fade-down">NOTES</div>
        <div class="italic underline underline-offset-4"data-aos="fade-down">Protocol covid-19</div>
        <div class="w-[50%] text-center"data-aos="fade-down">Dalam upaya mengurangi penyebaran Covid 19 pada masa pandemi,
        kami harapkan kedatangan para tamu undangan agar menjalankan protokol yang berlaku.</div>
        <div class="w-[50%] flex flex-col">
            <div class="flex text-center">
                <div class="m-6 w-[50%] flex flex-col place-items-center"data-aos="fade-right">
                    <img class="w-[80px]" src="{{ asset('tio/images/mask.svg') }}" alt=""">
                    Wajib Menggunakan Masker
                </div>
                <div class="m-6 w-[50%] flex flex-col place-items-center"data-aos="fade-left">
                    <img class="w-[80px]" src="{{ asset('tio/images/distance.svg') }}" alt="">
                    Saling Menjaga Jarak di Dalam Acara
                </div>
            </div>
            <div class="flex text-center">
                <div class="m-6 w-[50%] flex flex-col place-items-center"data-aos="fade-right">
                    <img class="w-[80px]" src="{{ asset('tio/images/greeting.svg') }}" alt="">
                    Menggunakan salam namastee sebagai ganti berjabat tangan
                </div>
                <div class="m-6 w-[50%] flex flex-col place-items-center"data-aos="fade-left">
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
                <div class="flex justify-center">
                    <img class="w-[250px] h-[250px] object-fit rounded-full" src="{{ asset($detailUndangan->getFirstMediaUrl('fotoPengantinPria', 'thumb')) }}" alt="">
                </div>
                <div class="text-[50px] text-black font-[400] font-[Alkatra]">
                    {{ $detailUndangan->groom_short_name }}
                </div>
                <div>{{ $detailUndangan->groom_name }}</div>
                <div>{{ $detailUndangan->groom_parent_text }}</div>
                <div>Yogyakarta</div>
            </div>
            <div class="text-center m-6">
                <div class="flex justify-center">
                    <img class="w-[250px] h-[250px] object-fit rounded-full" src="{{ asset($detailUndangan->getFirstMediaUrl('fotoPengantinWanita', 'thumb')) }}" alt="">
                </div>
                <div class="text-[50px] text-black font-[400] font-[Alkatra]">
                    {{ $detailUndangan->bride_short_name }}
                </div>
                <div>{{ $detailUndangan->bride_name }}</div>
                <div>{{ $detailUndangan->bride_parent_text }}</div>
                <div>Surakarta</div>
            </div>
        </div>
    </section>
    <section id ="akad" class="h-screen flex flex-col justify-center place-items-center">
        <div class=" flex">
            <div class="w-[100%] text-center m-3">
                <div class="font-bold">Akad Nikah</div>
                <div class="font-semibold">{{$detailUndangan->date_akad}}</div>
                <div>{{$detailUndangan->time_akad_start}} - {{$detailUndangan->time_akad_end}}</div>
                <div>Masjid Kampus UGM</div>
                <div>{{$detailUndangan->address_akad}}</div>
                <a href="{{ $detailUndangan->gmap_akad_url}}" class="text-xs mx-10 w-[150px] font-semibold text-black bg-slate mt-7 py-1 px-8 ease-in-out rounded-full hover:shadow-lg hover:opacity-80 transition duration-300">Google Maps</a>
            </div>
            <div class="w-[100%] text-center m-3">
                <div class="font-bold">Resepsi</div>
                <div class="font-semibold">{{$detailUndangan->date_resepsi}}</div>
                <div>{{$detailUndangan->time_resepsi_start}} - {{$detailUndangan->time_resepsi_end}}</div>
                <div>Jogja Expo Center</div>
                <div>{{$detailUndangan->address_resepsi}}</div>
                <a href="{{ $detailUndangan->gmap_resepsi_url}}" class="text-xs mx-10 w-[150px] font-semibold text-black bg-slate mt-7 py-1 px-8 ease-in-out rounded-full hover:shadow-lg hover:opacity-80 transition duration-300">Google Maps</a>
            </div>
            <div class="w-[100%] text-center m-3">
                <div class="font-bold">Unduh Mantu</div>
                <div>{{$detailUndangan->date_unduhmantu}}</div>
                <div>{{$detailUndangan->time_unduhmantu_start}} - {{$detailUndangan->time_unduhmantu_end}}</div>
                <div>Rumah Mempelai Wanita</div>
                <div>{{$detailUndangan->address_unduhmantu}}</div>
                <a href="{{ $detailUndangan->gmap_unduhmantu_url}}" class="text-xs mx-10 w-[150px] font-semibold text-black bg-slate mt-7 py-1 px-8 ease-in-out rounded-full hover:shadow-lg hover:opacity-80 transition duration-300">Google Maps</a>
            </div>
        </div>
    </section>
    <section id="galeri" class="h-screen flex flex-col justify-center place-items-center">
        <div class="text-[40px] text-black font-[400] font-[Alkatra]">Our gallery</div>
        <div class="grid grid-cols-4 gap-2">
            @foreach($detailUndangan->getMedia('fotoGaleriUndangan') as $foto)
                <div class="flex justify-center">  
                    <img class="w-[250px] h-[250px] object-contain" src="{{ asset($foto->getUrl()) }}" alt="">
                </div>
            @endforeach        
        </div>
    </section>
    <section id="video" class="h-screen flex flex-col justify-center place-items-center mt-8">
        <div class="text-[40px] text-black font-[400] font-[Alkatra]">Our Video</div>
    </section>
    <section id="pensil" class="h-screen flex flex-col justify-start place-items-center">
        <div class="text-[40px] text-black font-[400] font-[Alkatra]">Our Story</div>
        <div class="flex w-[80%] m-2">
            <div class="mr-3">
                <img  class="w-[250px] h-" src="{{ asset('tio/images/1.jpg') }}" alt="">
            </div>
            <div>
                <div class="font-bold">Pertama Kenal</div>
                <div>Gramedia |  01 Januari 2020</div>
                <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
            </div>
        </div>
        <div class="flex w-[80%] m-2">
            <div class="mr-3">
                <img  class="w-[250px]" src="{{ asset('tio/images/2.jpg') }}" alt="">
            </div>
            <div>
                <div class="font-bold">Menyatakan Cinta</div>
                <div>Pantai Parangtritis |  10 Januari 2020</div>
                <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
            </div>
        </div>
        <div class="flex w-[80%] m-2">
            <div class="mr-3">
                <img class="w-[250px]" src="{{ asset('tio/images/3.jpg') }}" alt="">
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
        <div class="flex justify-center">
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
