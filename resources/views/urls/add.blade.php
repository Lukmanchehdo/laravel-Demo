@extends('app')

@section('content')
	<section class="text-gray-600 body-font relative">
		<div class="container px-5 py-24 mx-auto">
			<div class="text-center text-2xl font-bold text-green-600">
				THE LINK KNOWS ALL. SO CAN YOU.
			</div>
			<div class="w-1/2 mx-auto mt-10">
				@if ($errors->any())
					<ul class="text-red-500">
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				@endif
				
				@if(Session::has('success'))
					<p class="text-green-500">
						{{ Session::get('success') }}
					</p>
					<p>
						URL: <a target="_blank" href="{{ session('shorturl') }}">{{ session('shorturl') }}</a>
					</p>
				@endif
			</div>
			
			<form action="{{ route('url.store') }}"
			      method="POST">
				@csrf
				<div class="w-1/2 mx-auto mt-10">
					<input type="text"
					       id="url"
					       placeholder="กรุณาใส่ URL นาจา"
					       name="url"
					       value="{{ old('url') }}"
					       class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
					<button class="inline-flex items-center bg-green-500 text-white border-0 py-1 px-3 focus:outline-none hover:bg-green-700 rounded text-base mt-4"
					        type="submit">
						สร้าง URL
					</button>
				</div>
			</form>
		</div>
	</section>
@endsection