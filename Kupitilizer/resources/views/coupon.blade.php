@extends('layouts.app')


@section('content')

<!-- Success Alert  -->
@if(session()->has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        {{session('success')}}
    </div>
@endif

<div class="relative overflow-x-auto shadow-md sm:rounded-lg sm:p-4 text-gray-700 border border-gray-200 bg-gray-50">
    <div class="grid grid-cols-2">
        <!-- Cari Coupon -->
        <div class="flex items-center justify-between py-4 px-4 sm:px-auto">
            <!--<label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" id="table-search-users" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari Nama Admin">
            </div>-->
        </div>

    </div>

    <!-- Menampilkan data -->
    
<div class="grid grid-cols-2 md:grid-cols-4 gap-4">


    @foreach($coupons as $item)
    <div class = "relative overflow-x-auto shadow-md sm:rounded-lg sm:p-4 text-gray-700 border border-gray-200 bg-gray-50">
        <!-- <img class="scale-75 h-auto max-w-6/12 justify-item-center rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">-->

        <h1 class = "text-center font-bold text-2xl">{{ $item-> nama_coupon }}</h1>
        <p class = "my-1 text-center relative overflow-x-auto sm:rounded-lg text-gray-700 border border-gray-200 bg-gray-50">{{ $item-> poin }} Poin</p> 
        <p class = "my-1 text-center relative overflow-x-auto sm:rounded-lg text-gray-700 border border-gray-200 bg-gray-50">{{ $item-> deskripsi }}</p> 
        
    </div>
    @endforeach
    
</div>
@endsection
