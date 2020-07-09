@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link href="https://fonts.googleapis.com/css2?family=Acme&family=Galada&display=swap" rel="stylesheet">
	<style type="text/css">
		h2	{
			margin-bottom: 20px;
			margin-top: 15px;
			color: black;
			font-family: 'Acme';
			font-size: 35px;
			
		}

		table th {
			color: black;
			font-family: georgia;
		}

		table {
			margin-top: 10px;
			text-align: center;
		}
	</style>
</head>

<body>
	<div class="container">
	<h2><center>Data Artist</center></h2>


	
	<table class="table">
		<thead class="bg-light">
		<tr style="background-color:#00CED1">
			<th scope="col">NO</th>
			<th scope="col">NAMA ARTIST</th>
			<th scope="col">EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr style="background-color: #FFF8DC; color: darkgreen">
			<td>{{ $row->id }}</td>
			<td>{{ $row->artist_name }}</td>
			<td>
				<a href="{{ url('artist/' . $row->id . '/edit')}}" class="btn btn-success">EDIT</a>
				
				<form action="{{ url('artist/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="btn btn-danger">DELETE</button>
					
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	
	<center><a  href="{{ url('artist/create') }}" class="btn btn-warning bg-succes">(+) Tambah Data</a></center>

</div>
</body>
</html>


@endsection