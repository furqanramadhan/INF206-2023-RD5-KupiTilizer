@extends('layouts.app')

@section('content')
    <div class="w-full text-center my-5 font-bold text-xl">
        <p>Setting</p>
    </div>

    <div class="m-10 py-5 shadow-2xl border-2 border-gray rounded-xl p-5">
        <div>
            <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">Nama</div>
                <div class="px-4 py-2">
        <input type="text" class="px-4 py-2 border border-gray-300 rounded-md" value="{{Auth::user()->name}}" disabled>
    </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">Jenis Kelamin</div>
                <div class="px-4 py-2">
        <input type="text" class="px-4 py-2 border border-gray-300 rounded-md" value="" disabled>
    </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">Nomor HP</div>
                <div class="px-4 py-2">
        <input type="text" class="px-4 py-2 border border-gray-300 rounded-md" value="" disabled>
    </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">Alamat</div>
                <div class="px-4 py-2">
        <input type="text" class="px-4 py-2 border border-gray-300 rounded-md" value="" disabled>
    </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">Email</div>
                <div class="px-4 py-2">
        <input type="text" class="px-4 py-2 border border-gray-300 rounded-md" value="{{Auth::user()->email}}" disabled>
    </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">Birthday</div>
                <div class="px-4 py-2">
        <input type="text" class="px-4 py-2 border border-gray-300 rounded-md" value="" disabled>
    </div>
            </div>
        </div>
        <div>
        
        <form class='px-4'>                
            <div class="flex justify-end">
                <button type="submit" class="text-white bg-leaf font-medium rounded-lg text-sm px-5 py-2.5 text-center">Edit</button>
            </div>
        </form>
        </div>
    </div>

</div>
@endsection
