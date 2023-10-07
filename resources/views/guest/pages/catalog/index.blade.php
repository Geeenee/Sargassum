@extends('guest.layout.base')

@section('title', 'Catalog')

@section('content')
<div class="w-full h-screen bg-slate-50">

    <div class="flex flex-col items-center divide-y-8 divide-black ">

        <div class="flex justify-around w-full p-5 mt-5 bg-white h-96">
            <img>

            <div>
                <header>Title</header>
                <p>Description</p>
            </div>

            <div class="flex flex-col gap-2 font-medium text-white">
                <div>
                    <img>
                    <button style="background-color:#f76502" class="rounded-full px-5 py-2.5">
                        Lazada
                    </button>
                </div>

                <div>
                    <img>
                    <button style="background-color:#010280"  class="rounded-full px-5 py-2.5">
                        Shopee
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>



@endsection
