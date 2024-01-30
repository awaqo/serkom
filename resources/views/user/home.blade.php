@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    
    <section class="bg-center bg-no-repeat bg-[url('https://mediacdn.quipper.com/media/W1siZiIsIjIwMjAvMTIvMDIvMDYvMjkvMzUvZDRkNmU4NTMtMjA0ZC00NDgwLWI2MzItZTFhMzIwOGVhMTAzLyJdLFsicCIsInRodW1iIiwiMTIwMHhcdTAwM2UiLHt9XSxbInAiLCJjb252ZXJ0IiwiLWNvbG9yc3BhY2Ugc1JHQiAtc3RyaXAiLHsiZm9ybWF0IjoianBnIn1dXQ.jpg?sha=65106b093788eded')] bg-gray-700 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Beasiswa Unggulan 2023</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Pintu menuju pendidikan berkualitas dan peluang mewujudkan impian pendidikan Anda dengan ikut mendaftar beasiswa.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="{{ route('daftar-beasiswa') }}" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300">
                    Daftar Sekarang
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class="bg-slate-100 px-20 py-20">
        <div class="w-full flex justify-center gap-4">
            <div class="bg-white p-8 w-full max-w-2xl shadow-md rounded-md">
                <div class="text-center text-3xl font-bold">Beasiswa Akademik</div>
                <hr class="mt-3">
                <div class="text-xl font-bold mt-10">Syarat & Ketentuan</div>
                <div>
                    <ol class="pl-5 mt-2 space-y-3 list-decimal list-inside">
                        <li>Siswa lulusan SMA/MA/SMK 4 tahun terakhir (2019, 2020, 2021 dan 2022)</li>
                        <li>Biaya pembelian token pendaftaran sebesar 250.000 untuk 1 akun dan pendaftar dapat mengambil 3 pilihan program studi</li>
                        <li>Tidak buta warna (Khusus pendaftar prodi D3 Teknik Telekomunikasi, S1 Teknik Telekomunikasi, S1 Teknik Elektro, S1 Desain Komunikasi Visual, dan S1 Desain Produk)</li>
                    </ol>
                </div>
            </div>
            <div class="bg-white p-8 w-full max-w-2xl shadow-md rounded-md">
                <div class="text-center text-3xl font-bold">Beasiswa Non-Akademik</div>
                <hr class="mt-3">
                <div class="text-xl font-bold mt-10">Syarat & Ketentuan</div>
                <div>
                    <ol class="pl-5 mt-2 space-y-3 list-decimal list-inside">
                        <li>Siswa/Siswi SMA/SMK/MA lulusan tahun 2023</li>
                        <li>Memiliki nilai rapor Kelas X (semester 1 dan 2), Kelas XI (semester 1 dan 2), dan Kelas XII (semester 1 saja), dengan nilai rata-rata minimal 8</li>
                        <li>Sertifikat dan atau surat keterangan dari sekolah Pernah atau sedang menjabat sebagai ketua organisasi kesiswaan, seperti OSIS, PMR, KIR, Pramuka, dan organisasi kesiswaan lainnya yang ada di masing-masing sekolah</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection