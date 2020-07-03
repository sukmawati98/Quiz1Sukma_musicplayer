@extends('layouts.app')

@section('content')

<div class="container">
<center><h3>Daftar Artist</h3><center>

	<table class="table">
		<thead class="thead-dark">
		<tr>
			<th scope="col">NAMA</th>
			<th scope="col">EDIT</th>
			<th scope="col">HAPUS</th>
		</tr>

		@foreach($rows as $row);

		<tr>
			<td> {{ $row->artist_name }} </td>
			<td>
				<a href="{{url('artist/'.$row->artist_id.'/edit')}}" class="badge badge-dark"> EDIT </a>
				<td>
				<form action="{{url('artist/'.$row->artist_id)}}" method="POST" class="d-inline">
					<input name="_method" type="hidden" value="DELETE">
					@csrf
					<button class="badge badge-dark"> HAPUS </button>
				</form>
			</td>
		</td>
		</tr>
		@endforeach
	</table>
	<a href="{{ url('artist/create') }}">Tambah Data</a>
</div>

@endsection