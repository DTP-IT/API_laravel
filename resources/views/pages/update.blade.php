@extends('layouts.app')
@section('title', 'Cập nhật thông tin')
@section('content')
<div class="container">
<!-- form update student start -->
    <h1 align="center">Chỉnh sửa sinh viên</h1>
<form action="{{route('student.update',[$data->id])}}" method="POST" role="form" enctype="multipart/form-data">
	@method('PUT')
	@csrf
	<legend>Chỉnh sửa thông tin</legend>
	<div class="form-group">
		<label for="idStudent">ID</label>
		<input type="text" class="form-control" id="idStudent" name="id" value="{{$data->id}}" readonly="">
		<label for="name">Họ tên</label>
		<input type="text" class="form-control" id="updateName" name="hoTen" value="{{$data->hoTen}}" placeholder="Họ và tên...">
		<label for="address">Địa chỉ</label>
		<input type="text" class="form-control" id="updateAddress" name="diaChi" value="{{$data->diaChi}}" placeholder="Địa chỉ...">
		<label for="classS">Lớp</label>
		<input type="text" class="form-control" id="updateClassS" name="lop" value="{{$data->lop}}" placeholder="Lớp học...">
		<label for="img">Ảnh</label>
		<input type="file" class="form-control" id="img" name="anh" placeholder="Lớp học...">
	</div>
	<button type="submit" class="btn btn-primary btnDisable" id="btnUpdateStudent">Submit</button>
	<a class="btn btn-success" href="http://127.0.0.1:8000" role="button">Back</a>
</form>

<!-- form update student end -->
</div>
@endsection
@section('script')
<script type="text/javascript">
	$(document).ready(function() {

		// $('#btnUpdateStudent').on('click', function() {
		// var info = {
		// 	id: $('#idStudent').val(),
		// 	hoTen : $('#updateName').val(),
		// 	diaChi : $('#updateAddress').val(),
		// 	lop : $('#updateClassS').val()
	 // 	}

		// $.ajax({
		// 	url: 'api/student/'+info['id'],
		// 	type: 'PUT',
		// 	data: info,
		// 	success: function(data) {
		// 		window.location.href = '../';
		// 		//alert(info['classS']);
		// 	},
		// 	error : function(){
		// 		console.log('error');
		// 	},
		// 	always : function(){
		// 		console.log('complete');
		// 	}
		// 	});
		// });
	});
	
	
</script>
@endsection