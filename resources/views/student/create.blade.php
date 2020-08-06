@extends('layout.app')
@section('title','Student')
@section('content')
	<form method="post" action="/students/store">
		@csrf

		<lable>
			guardian
			<select name="guardian_id">
				@foreach($guardians as $guardian)
				<option value="{{ $guardian->id}}">
					{{ $guardian->name }}
				</option>
				@endforeach
			</select>
		
		<br>

		<lable>
			name
			<input type="text" name="name">
		
		<br>

		 <lable>
		 	nis
		 	<input type="text" name="nis">
		 
		 <br>

		 <lable>
		 	gender
		 	<label>
		 		<input type="radio" name="gender" value="l">
		 		laki_laki
		 	</label>
		 	<label>
		 		<input type="radio" name="gender" value="p">
		 		perempuan
		 	</label>
		 
		 <br>

		 <lable>
		 	birth date
		 	<input type="date" name="birth_date">
		 
		 <br>

		<lable>
			address
			<textarea type="text" name="address"></textarea> 
		
		<br>

		<lable>
			kelas
			<select  name="class">
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
		</select>
		<br>

		<lable>
			jurusan
			<select  name="majors">
				<option value="i">IPA</option>
				<option value="s">IPS</option>
				<option value="a">BAHASA</option>
				<option value="b">AGAMA</option>
				</select>
		
		<br>

		<lable>
			tinggi
			<input type="number" name="height">
		
		<br>

		<lable>
			berat
			<input type="number" name="weight">
		
		<br>

		<button>Submit</button>
	</form>

@endsection