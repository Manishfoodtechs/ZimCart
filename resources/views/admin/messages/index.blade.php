@extends('layouts.app')

@section('content')
<!-- breadcrumb -->
<nav area-label="breadcrumb">

	<ol class="breadcrumb">
		<a href="{{ route('home') }}" class="text-decoration-none mr-3">
			<li class="breadcrumb-item">Home</li>
		</a>
		<li class="breadcrumb-item active">Messages</li>
	</ol>
	
</nav>

<!-- Dispaly all products from DB -->
<div class="card">
	<div class="card-header d-flex justify-content-between">
		<span>Messages</span>
	</div>
	<div class="card-body">
		<table class="table table-dark table-bordered">
			<thead>
				<th>Name</th>
				<th>Email</th>
				<th>Subject</th>
				<th>Message</th>
				<th>Delete</th>
			</thead>
			<tbody>
				@foreach($messages as $index => $message)
				<tr>
					<td>{{ $message->name }}</td>
					<td>{{ $message->email }}</td>
					<td>{{ $message->subject }}</td>
					<td>{{ $message->message }}</td>
					<td>
						{{-- <form action="{{ route('contact.destroy', $message->id) }}" method="post"> --}}
							@csrf
							@method('DELETE')
							<button class="btn btn-danger btn-sm">Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>


@endsection