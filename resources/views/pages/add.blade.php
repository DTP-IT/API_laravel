@extends('layouts.app')
@section('title', 'Thêm thông tin sinh viên')
@section('content')
<div class="container">
<h1 align="center">Thêm sinh viên</h1>
<form action="{{route('student.store')}}" method="POST" role="form" enctype="multipart/form-data">
	<legend>Vui lòng nhập thông tin</legend>

	<div class="form-group">
		<label for="name">Họ tên</label>
		<input type="text" class="form-control" id="name" name="hoTen" placeholder="Họ và tên...">
		<label for="address">Địa chỉ</label>
		<input type="text" class="form-control" id="address" name="diaChi" placeholder="Địa chỉ...">
		<label for="classS">Lớp</label>
		<input type="text" class="form-control" id="classS" name="lop" placeholder="Lớp học...">
		<label for="img">Ảnh</label>
		<input type="file" class="form-control" id="img" name="anh" placeholder="Lớp học...">
	</div>
	<button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
	<a class="btn btn-success" href="http://127.0.0.1:8000" role="button">Back</a>
</form>
</div>
 <script type="text/javascript">
	$(document).ready(function(){
		// $('#btnSubmit').on('click', function() {
		// 	var info = {
		// 		hoTen : $('#name').val(),
		// 		diaChi : $('#address').val(),
		// 		lop : $('#classS').val()
		//  	}
		// 	$.ajax({
		// 		url: "api/student",
		// 		type : 'POST',
		// 		dataType : 'json',
		// 		data: info,
		// 		success : function(data){
		// 			// window.location.href ="http://127.0.0.1:8000/dashboard";

		// 		},
		// 		error : function(){
		// 			console.log('Lỗi rồi');
		// 		},
		// 		always : function(){
		// 			console.log('complete');
		// 		}
		// 	});
		// });
	});
		
	
</script>
@endsection