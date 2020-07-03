@extends('layouts.app')

@section('content')

<div class="container">
	<center><h3>Daftar Track</h3><center>

		<table class="table">
		<thead class="thead-dark">
		<tr>
			<th scope="col">NAMA TRACK</th>
			<th scope="col">ARTIS ID</th>
			<th scope="col">ALBUM ID</th>
			<th scope="col">TIME</th>
			<th scope="col">EDIT</th>
			<th scope="col">HAPUS</th>
		</tr>

		@foreach($rows as $row);

		<tr>
			<td> {{ $row->track_name }} </td>
			<td> {{ $row->artist_id }} </td>
			<td> {{ $row->album_id }} </td>
			<td> {{ $row->time }} </td>
			<td>
				<a href="{{url('track/'.$row->track_id.'/edit')}}" class="badge badge-dark"> EDIT </a>
				<td>
				<form action="{{url('track/'.$row->track_id)}}" method="POST" class="d-inline">
					<input name="_method" type="hidden" value="DELETE">
					@csrf
					<button class="badge badge-dark"> HAPUS </button>
				</form>
			</td>
		</td>
		</tr>
		@endforeach
	</table>
	<a href="{{ url('track/create') }}">Tambah Data</a>
</div>

@endsection