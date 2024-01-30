@extends('user.layouts.main')
@section('content')
<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Selamat Datang di<strong> Dashboard</strong></h1>
		@foreach ($dashboard as $d)
		{!! $d->article !!}
			
		@endforeach


	</div>
</main>
@endsection