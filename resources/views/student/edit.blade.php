@extends('layout.app')
@section('title','Student')
@section('content')
	<form method="post" action="/students/update/{{ $student->id}} ">
		@csrf
		@method('PUT')

		<lable>
			guardian id
			<input type="text" name="guardian_id" value=" {{ $student->guardian_id }}">
		
		<br>

		<lable>
			name
			<input type="text" name="name" value=" {{ $student->name }}">
		
		<br>

		 <lable>
		 	nis
		 	<input type="text" name="nis" value=" {{ $student->nis }}">
		 
		 <br>

		 <lable>
		 	gender
		 	<label>
		 		<input type="radio" name="gender" {{ $student->gender == 'l' ? 'checked' : null }} value="l">
		 		laki_laki
		 	</label>
		 	<label>
		 		<input type="radio" name="gender" {{ $student->gender == 'p' ? 'checked' : null }} value="p">
		 		perempuan
		 	</label>
		 
		 <br>

		 <lable>
		 	birth date
		 	<input type="date" name="birth_date" value="{{ $student->birth_date }}">
		 
		 <br>

		<lable>
			address
			<textarea type="text" name="address">
				{{ $student->address }}
			</textarea> 
		
		<br>

		<lable>
			class
			<select  name="class" value=" {{ $student->class }}">
			<option value="10">10 {{ $student->class == '10' ? 'selected' : null  }} </option>
			<option value="11">11 {{ $student->class == '11' ? 'selected' : null  }} </option>
			<option value="12">12 {{ $student->class == '12' ? 'selected' : null  }} </option>
		</select>
		<br>

		<lable>
			jurusan
			<select  name="majors">
				<option value="i" {{ $student->majors == 'i' ? 'selected' : null}}>IPA</option>
				<option value="s" {{ $student->majors == 's' ? 'selected' : null}}>IPS</option>
				<option value="a" {{ $student->majors == 'a' ? 'selected' : null}}>BAHASA</option>
				<option value="b" {{ $student->majors == 'b' ? 'selected' : null}}>AGAMA</option>
				</select>
		
		<br>

		<lable>
			tinggi
			<input type="number" name="height" value="{{ $student->height }}">
		
		<br>

		<lable>
			berat
			<input type="number" name="weight" value="{{ $student->weight }}">
		
		<br>

		<button>Submit</button>
	</form>

@endsection