@extends('app')

@section('content')
    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto">
            <div class="text-center text-2xl font-bold text-green-600">
                THE LINK KNOWS ALL. SO CAN YOU.
            </div>
            <div class="w-1/2 mx-auto mt-10">
                <input type="text"
                       id="url"
                       placeholder="กรุณาใส่ URL นาจา"
                       name="url"
                       class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
        </div>
    </section>
@endsection