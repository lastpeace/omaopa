@extends('layouts.app')

@section('content')
    <div class="flex flex-col px-14 pb-16 w-full bg-stone-50 max-md:px-5 max-md:max-w-full">
        <div class="self-center mt-24 w-full max-w-[1206px] max-md:mt-10 max-md:max-w-full">
            <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                <div class="flex flex-col w-6/12 max-md:ml-0 max-md:w-full">
                    <div class="flex z-10 flex-col mt-14 text-xl max-md:mt-10 max-md:max-w-full">
                        <div class="text-5xl font-bold text-yellow-700 max-md:max-w-full max-md:text-4xl">
                            Kelezatan Pilihan di <br>
                            <span class="text-yellow-300">Oma Opa</span>
                        </div>
                        <div class="mt-10 text-black max-md:max-w-full">
                            Nikmati Bolu Super Lembut Andalan Kami dengan Pilihan Rasa Mulai dari
                            Bolu Keju, Hingga Bolu Rasa Coklat. Pesan dan Rasakan Sensasi Bolu Super
                            Lembut hanya di Oma Opa!
                        </div>
                        <div
                            class="justify-center self-start px-7 py-6 mt-10 font-semibold text-white bg-yellow-300 rounded-[50px] max-md:px-5">
                            <a href="{{ route('orders.create') }}" class="text-yellow-700">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col ml-5 w-6/12 max-md:ml-0 max-md:w-full">
                    <img loading="lazy" srcset="{{ asset('images/group.png') }}"
                        class="grow w-full aspect-[1.15] max-md:max-w-full" />
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col justify-center items-center p-20 w-full bg-slate-500 max-md:px-5 max-md:max-w-full">
        <div class="mt-5 text-5xl font-semibold text-stone-200 max-md:max-w-full max-md:text-4xl">
            Menu Terpopuler !!
        </div>
        <div class="mt-7 text-lg text-center text-stone-200 w-[592px] max-md:max-w-full">
            Rasakan kelezatan terpopuler dari OmaOpa dengan sensasi tak
            tertandingkan.
        </div>
        <div class="mt-16 mb-2.5 w-full max-w-[1253px] max-md:mt-10 max-md:max-w-full">
            <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                <div class="flex flex-col w-[33%] max-md:ml-0 max-md:w-full">
                    <div class="flex flex-col grow p-7 w-full text-black bg-white rounded-3xl max-md:px-5 max-md:mt-10">
                        <img loading="lazy" srcset="{{ asset('images/menu1.png') }}" class="w-full aspect-[1.05]" />
                        <div class="mt-6 text-2xl font-medium">Ogura Chese Topping <br> Half Mx</div>
                        <div class="mt-5 text-lg font-light text-justify">
                            Kelembutan roti lembut dengan taburan keju parut dan cokelat
                        </div>
                    </div>
                </div>
                <div class="flex flex-col ml-5 w-[33%] max-md:ml-0 max-md:w-full">
                    <div
                        class="flex flex-col grow px-7 py-10 w-full text-black bg-white rounded-3xl max-md:px-5 max-md:mt-10">
                        <img loading="lazy" srcset="{{ asset('images/menu2.png') }}" class="w-full aspect-[1.05]" />
                        <div class="mt-6 text-2xl font-medium">Malmil Coklat Keju</div>
                        <div class="mt-5 text-lg font-light text-justify max-md:mr-1.5">
                            Kelembutan bolu lembut dengan taburan keju parut dan cokelat
                        </div>
                    </div>
                </div>
                <div class="flex flex-col ml-5 w-[33%] max-md:ml-0 max-md:w-full">
                    <div
                        class="flex flex-col grow px-7 py-7 w-full text-black bg-white rounded-3xl max-md:px-5 max-md:mt-10">
                        <img loading="lazy" srcset="{{ asset('images/menu3.png') }}" class="w-full aspect-[1.04]" />
                        <div class="mt-6 text-2xl font-medium">Malmil Coklat Matcha</div>
                        <div class="mt-6 text-lg font-light text-justify">
                            Kelembutan bolu lembut dengan lapisan cokelat dan matcha
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col pb-12 w-full bg-stone-50 max-md:max-w-full">
        <div class="w-full bg-white max-md:max-w-full">
            <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                <div class="flex flex-col w-6/12 max-md:ml-0 max-md:w-full">
                    <div class="grow max-md:mt-10 max-md:max-w-full">
                        <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                            <div class="flex flex-col w-[34%] max-md:ml-0 max-md:w-full">
                                <img loading="lazy" srcset="{{ asset('images/panelkiri.png') }}"
                                    class="grow w-full aspect-[0.86]" />
                            </div>
                            <div class="flex flex-col ml-5 w-[66%] max-md:ml-0 max-md:w-full">
                                <div class="flex flex-col px-5 mt-9 max-md:max-w-full">
                                    <div class="text-4xl font-semibold text-black max-md:max-w-full">

                                    </div>
                                    <div class="self-end mt-16 max-w-full w-[444px] max-md:mt-10">
                                        <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                                            <div class="flex flex-col w-[38%] max-md:ml-0 max-md:w-full">
                                                <div
                                                    class="text-xl font-light leading-10 text-justify text-black max-md:mt-10">

                                                </div>
                                            </div>
                                            <div class="flex flex-col ml-5 w-[62%] max-md:ml-0 max-md:w-full">
                                                <div
                                                    class="text-xl font-light leading-10 text-justify text-black max-md:mt-10">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col ml-5 w-6/12 max-md:ml-0 max-md:w-full">
                    <div class="grow px-5 mt-14 max-md:mt-10 max-md:max-w-full">
                        <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                            <div class="flex flex-col w-[57%] max-md:ml-0 max-md:w-full">
                                <div
                                    class="self-stretch my-auto text-xl font-light leading-10 text-justify text-black max-md:mt-10">

                                </div>
                            </div>
                            <div class="flex flex-col ml-5 w-[43%] max-md:ml-0 max-md:w-full">
                                <img loading="lazy" srcset="{{ asset('images/panelkiri.png') }}"
                                    class="grow w-full aspect-[0.98] max-md:mt-10" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="self-center px-5 mt-14 w-full max-w-[1250px] max-md:mt-10 max-md:max-w-full">
            <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                <div class="flex flex-col w-[37%] max-md:ml-0 max-md:w-full">
                    <img loading="lazy" srcset="{{ asset('images/toko.png') }}"
                        class="grow w-full aspect-[0.99] max-md:mt-10 max-md:max-w-full" />
                </div>
                <div class="flex flex-col ml-5 w-[63%] max-md:ml-0 max-md:w-full" id="tentangkami">
                    <div
                        class="self-stretch my-auto text-lg font-light text-justify text-black max-md:mt-10 max-md:max-w-full">
                        <span class="font-medium">Selamat datang di Oma Opa!</span>
                        <br />
                        <br />
                        Kami adalah outlet yang menjual bolu Ogura dan Malmil. Kami menawarkan berbagai macam menu pilihan
                        bolu
                        lembut dengan topping sesuai selera anda dan tentunya dengan harga yang terjangkau.
                        <br />
                        <br />

                        Nikmati berbagai pilihan menu bolu lembutnya, mulai dari malmil cheese hingga berbagai variasi
                        topping malmil dan ogura lainnya.
                        Kami juga menyediakan minuman dingin menemani anda ketika sedang antri menunggu pesanan.
                        <br />
                        <br />
                        Staf kami yang ramah dan penuh perhatian siap memberikan layanan terbaik, sehingga setiap kunjungan
                        ke Oma Opa menjadi pengalaman kuliner yang istimewa dan tak terlupakan.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col pt-16 w-full bg-stone-50 max-md:max-w-full">
        <div class="self-center w-full max-w-[1274px] max-md:max-w-full">
            <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                <div class="flex flex-col w-[45%] max-md:ml-0 max-md:w-full">
                    <div
                        class="flex flex-col px-5 mt-1.5 text-xl font-light text-right text-black max-md:mt-10 max-md:max-w-full">
                        <div class="flex flex-col items-end self-end max-w-full w-[397px]">
                            <div class="text-3xl font-semibold">Temukan Kami Di Sini</div>
                            <div class="self-stretch mt-11 max-md:mt-10">
                                Alamat: Jalan Mr. Koesbiyono Tjondrowibowo No 3, Sekaran, Kec. Gunung Pati, Kota Semarang,
                                Jawa Tengah 50228
                            </div>
                            <div class="mt-12 font-medium max-md:mt-10">
                                Jam Operasional Oma Opa
                            </div>
                            <div class="mt-6">
                                Senin - Minggu: 08.00 - 21.00 WIB
                            </div>
                        </div>
                        <div class="mt-16 max-md:mt-10 max-md:max-w-full">
                            Kami dengan senang hati menantikan kunjungan Anda untuk merasakan
                            pengalaman menyantap sajian luar biasa di Oma Opa
                        </div>
                    </div>
                </div>
                <div class="flex flex-col ml-5 w-[55%] max-md:ml-0 max-md:w-full">
                    <img loading="lazy" srcset="{{ asset('images/maps.png') }}"
                        class="grow w-full aspect-[1.72] max-md:mt-10 max-md:max-w-full" />
                </div>
            </div>
        </div>
        <div class="px-16 pb-6 mt-12 w-full bg-yellow-300 max-md:px-5 max-md:mt-10 max-md:max-w-full" id="kontak">
            <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                <div class="flex flex-col w-2/5 max-md:ml-0 max-md:w-full">
                    <img loading="lazy" srcset="{{ asset('favicon.png') }}"
                        class="shrink-0 max-w-full aspect-square w-[300px] max-md:mt-10" />
                </div>
                <div class="flex flex-col ml-5 w-[16%] max-md:ml-0 max-md:w-full">
                    <div
                        class="flex flex-col justify-center self-stretch my-auto text-lg text-justify text-white max-md:mt-10">
                        <div><a href="#">Beranda</a></div>
                        <div class="mt-7"><a href="{{ route('products.index') }}">Menu</a></div>
                        <div class="mt-7"><a href="{{ route('orders.create') }}">Pesanan</a></div>
                        <div class="mt-7"><a href="#tentangkami">Tentang Kami</a></div>
                        <div class="mt-6"><a href="#kontak">Kontak</a></div>
                    </div>
                </div>
                <div class="flex flex-col ml-5 w-[44%] max-md:ml-0 max-md:w-full">
                    <div
                        class="flex flex-col self-stretch my-auto text-lg text-justify text-white whitespace-nowrap max-md:mt-10">
                        <div class="flex gap-5">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/5faa00b15529ff7f47a0ff71af668698792e4e091ea851fb69f5b3a21680fecc?apiKey=bb6773fa61624e21adc05bfe1a2741a5&"
                                class="shrink-0 w-6 aspect-square" />
                            <div class="flex-auto my-auto">hc.omaopa@gmail.com</div>
                        </div>
                        <div class="flex gap-5 mt-6">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/3e4c1f0ccb3b9a5d13a18a37cfba335a970ddd6c019a76d8655f5e83f6dcfe14?apiKey=bb6773fa61624e21adc05bfe1a2741a5&"
                                class="shrink-0 w-6 aspect-square" />
                            <div class="flex-auto">@omaopacakery_jateng</div>
                        </div>
                        <div class="flex gap-5 mt-6">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/b6a0e3a150d0e3140972e37e5f4c237c55e6acf39ed9366c0656156c764bcc66?apiKey=bb6773fa61624e21adc05bfe1a2741a5&"
                                class="shrink-0 w-6 aspect-square" />
                            <div class="flex-auto my-auto">085315004300</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="text-center py-6 pr-16 pl-32 w-full text-lg font-light text-white bg-black max-md:px-5 max-md:max-w-full">
        © 2024 Oma Opa. Hak Cipta Dilindungi Undang-Undang.
    </div>
@endsection
