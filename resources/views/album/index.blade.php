@extends('layouts.app')

@section('content')

<div class="container">
<center><h3>Daftar Album</h3></center>

	<table class="table">
		<thead class="thead-dark">
		<tr>
			<th scope="col">ID ARTIST</th>
			<th scope="col">NAMA ALBUM</th>
			<th scope="col">EDIT</th>
			<th scope="col">HAPUS</th>
		</tr>

		@foreach($rows as $row);

		<tr>
			<td>{{ $row->artist_id }}</td>
			<td>{{ $row->album_name }}</td>
			<td>
				<a href="{{ url('album/'.$row->album_id.'/edit')}}" class="badge badge-dark"> EDIT </a>
				<td>
				<form action="{{ url('album/' . $row->album_id)}}" method="POST" class="d-inline">
					<input name="_method" type="hidden" value="DELETE">
					@csrf
					<button class="badge badge-dark"> HAPUS </button>
				</form>
			</td>
		</td>
		</tr>
		@endforeach
	</table>
	<a href="{{ url('album/create') }}">Tambah Data</a>
</div>

@endsection