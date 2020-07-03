@extends('layouts.app')

@section('content')

<div class="container">
<center><h3>Daftar Played</h3></center>

<table class="table">
		<thead class="thead-dark">
		<tr>
			<th scope="col">ARTIS ID</th>
			<th scope="col">ALBUM ID</th>
			<th scope="col">TRACK ID</th>
			<th scope="col">PLAYED</th>
			<th scope="col">EDIT</th>
			<th scope="col">HAPUS</th>
		</tr>

		@foreach($rows as $row);

		<tr>
			<td> {{ $row->artist_id }} </td>
			<td> {{ $row->album_id }} </td>
			<td> {{ $row->track_id }} </td>
			<td> {{ $row->played }} </td>
			<td>
				<a href="{{url('played/'.$row->played_id.'/edit')}}" class="badge badge-dark"> EDIT </a>
			<td>
				<form action="{{url('played/'.$row->played_id)}}"  method="POST" class="d-inline">
					<input name="_method" type="hidden" value="DELETE">
					@csrf
					<button class="badge badge-dark"> HAPUS </button>
				</form>
			</td>
		</td>
		</tr>
		@endforeach
	</table>
	<a href="{{ url('played/create') }}">Tambah Data</a>
</div>

@endsection