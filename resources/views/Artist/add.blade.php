@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html>
<head>
	<title></title>
			<link href="https://fonts.googleapis.com/css2?family=Acme&family=Galada&display=swap" rel="stylesheet">

	<style type="text/css">
		h2 {
			margin-bottom: 20px;
			margin-top: 15px;
			color: black;
			font-family: 'Acme';
			font-size: 35px;
		}
		
		.btn {
			color: black;
		}

		label {
			font-family: 'Acme'; 
			color: black;
		}

		
	</style>
	</style>
</head>
<body>
	<div class="container">
	<div class="col-md-10">
	<h2>Tambah Data Artist</h2>
			<form method="post" action="{{url('/artist')}}">
			@csrf
				<table>					
					<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size: 20px">Nama Artist</label>:
					<div class="col-sm-5">
							<input type="text" name="artist_name" class=" form-control" id="inputEmail3"style="color: white;
			background-color: deepskyblue">
					</div>
					</div>
				</table>

				<div class="form-group row">
					<div>
						<div class="col-sm-10">
						<button type="submit" class="btn" style="background-color: sandybrown" >SIMPAN </button></div>
					</div>
			</form>

	</div>
</div>
</body>
</html>


@endsection