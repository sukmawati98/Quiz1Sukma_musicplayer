@extends('layouts.app')

@section('content')

<div class="container">

<h3>Tambah Data Album</h3>
<a href="{{ url('album') }}">Data Album</a>
<form action="{{ url('/album') }}" method="POST">
@csrf
<table width="300px" border="2" cellpadding="10" cellspacing="10" bgcolor="#8FBC8F" align="center">
	<tr>
		<td>ARTIST</td>
		<td><input type="text" name="artist_id"></td>
	</tr>
	<tr>
		<td>NAMA</td>
		<td><input type="text" name="album_name"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="SIMPAN"></td>
	</tr>
</table>
</form>
</div>

@endsection