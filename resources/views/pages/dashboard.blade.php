@extends('layouts.app')
@section('title','Trang chủ')
@section('content')
<div class="container">
  
<h1 align="center">Danh sách sinh viên</h1>
<!-- search start -->

<!-- search end -->
<!-- Button add -->
<button type="button" class="btn btn-primary btnDisable" id="btnAdd">ADD</button>

 <div class="row justify-content-center">
<!-- table data start -->
<table id="example" class="table table-striped table-hover" style="width:100%">
	<thead>
		<th>ID</th>
		<th>Tên</th>
		<th>Địa chỉ</th>
		<th>Lớp</th>
		<th>Ảnh</th>
		<th colspan="2" style="padding-left: 13%;">Action</th>
	</thead>
	<tbody id="data-students"></tbody>
</table>

<!-- table data end -->

</div>
</div>
<!-- script start -->
<script type="text/javascript">
	$(function() {
	// Read data start
	$.ajax({
		url: 'api/student',
		type : 'GET',
		dataType : 'json',

		success : function(datas){
			var data = "";
			var pageNumber = "";
			$.each(datas['data'], function(key, val) {
				data += `<tr><td>${val['id']}</td><td>${val['hoTen']}</td><td>${val['diaChi']}</td><td>${val['lop']}</td><td><img style="max-width: 80px;" src="{{asset('upload/')}}/${val['anh']}" class="img-responsive" alt="Image"></td><td style="padding-left: 5%;"><a href="api/student/${val['id']}/edit" class="btn btn-success">EDIT</a></td><td><form action="api/student/${val['id']}" method="POST">@method('DELETE') @csrf <button type="submit" class="btn btn-warning" name="" id="">DELETE</button></form></td></tr>`;	
			});
			$('#data-students').append(data);
		},
		error : function(){
			console.log('error');
		},
		always : function(){
			console.log('complete');
		}
	});
	// Read data end
	$('#btnAdd').on('click', function(){
		window.location.href="{{route('student.create')}}";
	});
});
$(document).ready(function() {
    $('#example').DataTable();
});
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap.min.js"></script>
<!-- script end -->
@endsection
@section('script')

@endsection