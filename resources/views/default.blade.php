<!DOCTYPE html>
<html>
@include('includes.head');
<body>
<div class="row">
<div class="col-md-3" style="width: 18%;min-height: 300px;">
	<div id="profile" style="margin-top: 20px;">
		<p align="center" style="color: blue;font-weight: bold; font-size: 40px;">DTP-IT</p>
		<p align="center" style="color: greenyellow;font-style: italic; font-size: 30px;">Administrator</p>
	</div>
</div>
<div class="col-md-9">
	@yield('content')
</div>
</div>
@yield('script')
</body>
</html>