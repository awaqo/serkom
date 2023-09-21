@extends('layouts.app')

@section('title', 'Hasil Pendaftaran')

@section('content')
    <section class="w-full h-screen bg-slate-100">
        <div class="w-full h-24 bg-white flex items-center px-8 mb-8 gap-8">
            <div class="w-24">
                <img src="https://i0.wp.com/ittelkom-pwt.ac.id/wp-content/uploads/2021/04/logo-landscape.png?fit=1746%2C501&ssl=1" alt="">
            </div>
            <div class="text-3xl font-bold text-center">Hasil Pendaftaran Beasiswa</div>
        </div>

        <div class="px-12">
            {{-- alert --}}
            @if ($message = Session::get('success'))
            <div class="mt-8">
                <div id="alert-success" class="flex p-4 mb-4 mx-3 bg-green-100 border border-green-400 rounded-lg" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-base text-green-700">
                        {{ $message }}
                    </div>
                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8" data-dismiss-target="#alert-success" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
            </div>
            @endif
            
            <a href="{{ route('home') }}" class="w-full px-5 py-3 bg-white rounded-lg border border-slate-100 hover:border-slate-400 duration-300">
                <i class="fa-solid fa-chevron-left mr-1"></i> Kembali
            </a>

            @if ($count < 1)
                <div class="w-full text-center py-6 font-bold text-md bg-white mt-6 rounded-md">
                    Belum ada data
                </div>
            @else
                <div class="w-full max-w-2xl py-6">
                    <table class="w-full text-sm text-left text-gray-500 shadow-lg shadow-blue-100">
                        <tbody>
                            <tr class="bg-white border-b">
                                <td class="pl-8 py-4 font-bold text-gray-900">
                                    Nama
                                </td>
                                <td>
                                    :
                                </td>
                                <td class="px-6 py-4">
                                    {{ $result->nama }}
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="pl-8 py-4 font-bold text-gray-900">
                                    Email
                                </td>
                                <td>
                                    :
                                </td>
                                <td class="px-6 py-4">
                                    {{ $result->email }}
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="pl-8 py-4 font-bold text-gray-900">
                                    Nomor HP
                                </td>
                                <td>
                                    :
                                </td>
                                <td class="px-6 py-4">
                                    {{ $result->no_hp }}
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="pl-8 py-4 font-bold text-gray-900">
                                    Semester
                                </td>
                                <td>
                                    :
                                </td>
                                <td class="px-6 py-4">
                                    {{ $result->semester }}
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="pl-8 py-4 font-bold text-gray-900">
                                    IPK Terakhir
                                </td>
                                <td>
                                    :
                                </td>
                                <td class="px-6 py-4">
                                    {{ $result->ipk }}
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="pl-8 py-4 font-bold text-gray-900">
                                    Pilihan Beasiswa
                                </td>
                                <td>
                                    :
                                </td>
                                <td class="px-6 py-4">
                                    {{ $result->pilihan_beasiswa }}
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="pl-8 py-4 font-bold text-gray-900">
                                    Berkas
                                </td>
                                <td>
                                    :
                                </td>
                                <td class="px-6 py-4">
                                    {{ isset($result->berkas) ? 'asd' : 'ddadasd' }}
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="pl-8 py-4 font-bold text-gray-900">
                                    Status Ajuan
                                </td>
                                <td>
                                    :
                                </td>
                                <td class="px-6 py-4">
                                    <span class="bg-yellow-100 text-yellow-800 text-sm font-bold mr-2 px-2.5 py-0.5 rounded">
                                        {{ $result->status_ajuan }}
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </section>    
@endsection