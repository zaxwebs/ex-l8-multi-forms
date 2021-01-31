@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-6 mb-3">
		<h1>Form A</h1>
		<x-origin name='form-a'>
			<x-alert />
		</x-origin>
		<x-form action="{{ route('processor') }}" name="form-a">
			<div class="mb-3">
				<label class="form-label">Email address</label>
				<input type="text" name="email"
					class="form-control <x-origin name='form-a'>@error('email') is-invalid @enderror</x-origin>"
					value="<x-origin name='form-a'>{{ old('email') }}</x-origin>" />
				<x-origin name='form-a'>
					<x-feedback name="email" />
				</x-origin>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</x-form>
	</div>
	<div class="col-md-6 mb-3">
		<h1>Form B</h1>
		<x-origin name='form-b'>
			<x-alert />
		</x-origin>
		<x-form action="{{ route('processor') }}" name="form-b">
			@csrf
			<input type="hidden" name="x_origin_name" value="form-b">
			<div class="mb-3">
				<label class="form-label">Email address</label>
				<input type="text" name="email"
					class="form-control <x-origin name='form-b'>@error('email') is-invalid @enderror</x-origin>"
					value="<x-origin name='form-b'>{{ old('email') }}</x-origin>" />
				<x-origin name='form-b'>
					<x-feedback name="email" />
				</x-origin>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</x-form>
	</div>
</div>
@endsection