@extends('layouts.app')


@section('content')
    <div class="flex gap-5 max-md:flex-col max-md:gap-0">
        <div class="flex flex-col w-[55%] max-md:ml-0 max-md:w-full">
            <div class="flex flex-col grow max-md:mt-10 max-md:max-w-full">
                <div class="flex gap-5 text-lg text-black max-md:flex-wrap">
                    <div class="flex flex-wrap grow w-fit max-md:max-w-full px-5">
                        <div class="flex items-center justify-between text-2xl font-semibold max-md:max-w-full">
                            <div class=" p-2 max-width">
                                <button onclick="window.location.href = '{{ route('dashboard') }}';"
                                    class="flex border-none outline-none focus:outline-none">
                                    <svg class="w-6 h-6 text-gray-800 mb-10" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13"></path>
                                    </svg>
                                    <div class=" text-2xl font-semibold px-4">Rincian Pesanan</div>
                                </button>
                            </div>
                        </div>
                        @if ($errors->any())
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                                <strong class="font-bold">Whoops!</strong>
                                <span class="block sm:inline">There were some problems with your input.</span>
                                <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('success'))
                            <div
                                class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('reservations.store') }}" class="mt-6 max-md:max-w-full">
                            @csrf
                            <div class="flex flex-wrap max-md:max-w-full relative px-10">
                                <div class="w-full p-2">
                                    <div class="">
                                        <span class="text-yellow-700">Nama <span class="text-red-600">*</span></span>
                                        <br>
                                        <input type="text" name="name"
                                            class="px-4 py-5 mt-1.5 rounded-lg border border-black border-solid w-full"
                                            rows="7" cols="200" value="{{ auth()->user()->name }}" readonly />
                                    </div>
                                </div>
                                <div class="w-full p-2" hidden>
                                    <div class="">
                                        <span class="text-yellow-700">User Id *</span>
                                        <br>
                                        <input type="text" name="user_id" id="user_id"
                                            class="px-4 py-5 mt-1.5 rounded-lg border border-black border-solid w-full"
                                            rows="7" cols="200" value="{{ auth()->user()->id }}" readonly />
                                    </div>
                                </div>
                                <div class="w-full p-2">
                                    <span class="text-yellow-700">No Telpon <span class="text-red-600">*</span></span>
                                    <br>
                                    <input type="text" name="phone_number" id="phone_number"
                                        class="px-4 py-5 mt-1.5 rounded-lg border border-black border-solid w-full"
                                        rows="7" cols="200" />

                                </div>
                            </div>
                            <div class="flex flex-wrap px-10">
                                <div class="w-1/2 p-2 max-width">
                                    <span class="text-yellow-700">Tanggal <span class="text-red-600">*</span></span>
                                    <br>
                                    <input type="date" name="date" id="date"
                                        class="px-4 py-5 mt-1.5 rounded-lg border border-black border-solid w-full" />
                                </div>
                                <div class="w-1/2 p-2">
                                    <span class="text-yellow-700">Jam <span class="text-red-600">*</span></span>
                                    <br>
                                    <input name="time" id="time" type="time"
                                        class="px-4 py-2 mt-1.5 rounded-lg border border-black border-solid w-full">

                                    </input>
                                </div>
                                <div class="w-1/2 p-2" hidden>
                                    <span class="text-yellow-700">Jumlah Orang *</span>
                                    <br>
                                    <input type="number" name="number_of_people" id="number_of_people" min="0"
                                        value="1" max="11"
                                        class="px-4 py-5 mt-1.5 rounded-lg border border-black border-solid w-full" />
                                </div>
                                <div class="w-1/2 p-2" hidden>
                                    <span class="text-yellow-700">Meja *</span>
                                    <br>
                                    <input name="table_number" id="table_number" value="1"
                                        class="px-4 py-5 mt-1.5 rounded-lg border border-black border-solid w-full">
                                    </input>
                                    <span class="text-yellow-700">Harap memilih sesuai kapasitas meja yang tertera di
                                        gambar</span>
                                </div>
                                <div class="w-1/2 p-2">
                                    <span class="">Catatan</span>
                                </div>
                                <div class="w-full p-2">
                                    <textarea name="notes" id="notes" rows="3"
                                        class="items-start px-3 pt-4 pb-16 mt-2 text-lg text-black bg-white rounded-lg border border-black border-solid w-full"
                                        placeholder="Tidak Ada"></textarea>
                                </div>

                                <div class="w-full">
                                    <span class="text-black"><span class="text-red-600">*</span>(wajib diisi)</span>
                                    <br>
                                </div>

                            </div>
                            <div class="bg-yellow-300 rounded-[50px] w-[504px] w-full">
                                <button type="submit"
                                    class="flex justify-center items-center self-center px-16 py-5  font-medium text-black text-center  w-full">
                                    Lanjut Pembayaran
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        // Event listener untuk memantau perubahan pada elemen select meja
        document.getElementById('table_number').addEventListener('change', function() {
            // Dapatkan nilai kapasitas meja yang dipilih
            var selectedCapacity = parseInt(this.value);
            // Perbarui atribut max dari input number_of_people
            document.getElementById('number_of_people').setAttribute('max', selectedCapacity);
        });
    </script>
@endsection
