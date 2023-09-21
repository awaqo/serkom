@extends('layouts.app')

@section('title', 'Pendaftaran')

@section('content')
    <section class="w-full min-h-full h-full bg-slate-100">
        <div class="w-full h-24 bg-white flex justify-center items-center gap-6">
            <div class="w-24">
                <img src="https://i0.wp.com/ittelkom-pwt.ac.id/wp-content/uploads/2021/04/logo-landscape.png?fit=1746%2C501&ssl=1" alt="">
            </div>
            <div class="text-3xl font-bold">Formulir Pendaftaran Beasiswa</div>
        </div>

        <div class="pt-10 pb-24 flex justify-center">
            <div class="w-full max-w-2xl p-8 bg-white border border-slate-200 rounded-xl shadow-lg shadow-blue-100">
                {{-- form --}}            
                <form action="{{ route('submit.daftar-beasiswa') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Masukkan Nama</label>
                        <input type="text" name="nama" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div> 

                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Masukkan Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>

                    <div class="mb-6">
                        <label for="no_hp" class="block mb-2 text-sm font-medium text-gray-900">Nomor HP</label>
                        <input type="number" name="no_hp" id="no_hp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    
                    <div class="mb-6">
                        <label for="semester" class="block mb-2 text-sm font-medium text-gray-900">Semester saat ini</label>
                        <select name="semester" id="semester" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                            <option disabled selected>Pilih semester</option>
                            <option value="1">Semester 1</option>
                            <option value="2">Semester 2</option>
                            <option value="3">Semester 3</option>
                            <option value="4">Semester 4</option>
                            <option value="5">Semester 5</option>
                            <option value="6">Semester 6</option>
                            <option value="7">Semester 7</option>
                            <option value="8">Semester 8</option>
                        </select>
                    </div>

                    <div class="mb-6">
                        <label for="ipk" class="block mb-2 text-sm font-medium text-gray-900">IPK Terakhir</label>
                        <input type="number" step="0.01" name="ipk" id="ipk" class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg block w-full p-2.5" value="{{ $ipk }}" readonly required>
                    </div>

                    <div class="mb-6">
                        <label for="beasiswa" class="block mb-2 text-sm font-medium text-gray-900">Pilihan Beasiswa</label>
                        
                        @if ($ipk<3.0)
                            <div class="bg-red-50 border border-red-300 text-red-500 text-sm rounded-lg block w-full p-2.5">
                                Tidak tersedia karena IPK < 3
                            </div>
                        @else
                            <select name="pilihan_beasiswa" id="beasiswa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                <option disabled selected>Pilih beasiswa</option>
                                <option value="OPES">Beasiswa OPES</option>
                                <option value="FULL ITTP">Beasiswa Full ITTP</option>
                                <option value="ADIK">Beasiswa ADIK</option>
                                <option value="KIP-K">Beasiswa KIP-K</option>
                            </select>
                        @endif
                    </div>

                    <div class="mb-10">
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="berkas">Upload Berkas Syarat</label>
                        <input id="berkas" name="berkas" type="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg @if($ipk<3.0) cursor-not-allowed @else cursor-pointer @endif bg-gray-50" @if($ipk<3.0) disabled @endif>
                    </div>

                    <input type="hidden" name="status_ajuan" value="Belum diverifikasi">
                    
                    <div class="w-full flex justify-center gap-2">
                        <div class="w-full text-slate-500 font-medium rounded-lg text-sm text-center bg-white border border-slate-200 duration-300 hover:bg-slate-100">
                            <a href="{{ route('home') }}" class="block w-full px-5 py-3">
                                <i class="fa-solid fa-chevron-left mr-1"></i> Kembali
                            </a>
                        </div>
                        @if ($ipk<3.0)
                            <div class="w-full text-white font-medium rounded-lg text-sm text-center bg-slate-300">
                                <div class="block w-full px-5 py-3 cursor-not-allowed">Daftar</div>
                            </div>
                        @else
                            <div class="w-full text-white font-medium rounded-lg text-sm text-center bg-blue-500 hover:opacity-80 duration-300">
                                <button type="submit" class="block w-full px-5 py-3">Daftar</button>
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection