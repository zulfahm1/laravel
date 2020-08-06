@extends('layout.app')
@section('title','Guardian')
@section('content')

@if($errors ->any())
	<hr>
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
	<hr>
	@endif
 	<form action='/guardians/store' method="post">
 		@csrf
 	<table border="5" style="width:100%;">

  		<label for="fname">Nama :</label> <input type="text" id="fname" name="name" value="{{ old('name') }}"><br>
 		 <label for="lname">Nik :</label> <input type="text" id="lname" name="nik" value="{{ old('nik') }}"><br>
 		 <label for="lname">Nomor Hp :</label> <input type="text" id="lname" name="phone" value="{{ old('phone') }}"><br>
 		 <label for="lname">Gender :</label> <input type="radio" id="lname" name="gender" value="l" {{ old('gender') == 'l' ? 'checked' : null}}>laki-laki | <input type="radio" name="gender" value="p"  {{ old('gender') == 'p' ? 'checked' : null}}>perempuan  <br>
 		 <label for="lname">Tanggal Lahir :</label> <input type="text" id="lname" name="birth_date" value="{{ old('birth_date')}}"><br>
 		 <label for="lname">Alamat :</label> <input type="text" id="lname" name="address">{{ old('address')}}<br>
 		 <label for="lname">Orang Tua Kandung :</label> <input type="radio" id="lname" name="is_parent" value="1" {{ old('is_parent') === '1' ? 'checked' : null}}> 											 kandung | <input type="radio" name="is_parent" value="0"  {{ old('is_parent') === '0'? 'checked' : null}}> tiri<br>

 		  <input type="submit"> 

 	</table>
@endsection