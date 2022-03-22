<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Edit About Informations</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
	<h2 class="text-center">Update About Information</h2>
	<div class="container mt-4">
		<form action="{{ route('about.update',$data->id) }}" method="post">
			@csrf
		     @method('PUT')
			<div class="form-row">
			  <div class="col">
				  <label for="top_title">Top Title</label>
				<input type="text" class="form-control" name="top_title" id="top_title" value="@if (old($data->top_title)){{ old($data->top_title)}}@else{{ $data->top_title }}@endif" placeholder="Item Name">
				<span style="color: red">@error('top_title'){{ $message }}</span>@enderror
			  </div>

			  <div class="col">
				  <label for="top_description">Top Description</label>
				<input type="text" class="form-control" name="top_description" value="@if (old($data->top_description)){{ old($data->top_description) }} @else{{ $data->top_description }} @endif" placeholder="Sub Title">
				<span style="color: red">@error('top_description'){{ $message }}@enderror</span>
			  </div>
			</div>

			<div class="form-row">
				<div class="col">
					<label for="sub_title">Sub Title</label>
				  <input type="text" class="form-control" name="sub_title" id="title" value="@if (old($data->title)){{ old($data->sub_title)}}@else{{ $data->sub_title }}@endif">
				  <span style="color: red">@error('sub_title'){{ $message }}</span>@enderror
				</div>
  
				<div class="col">
					<label for="sub_description">Sub Description</label>
				  <input type="text" class="form-control" name="sub_description" value="@if (old($data->sub_description)){{ old($data->sub_description) }} @else{{ $data->sub_description }} @endif" placeholder="Sub Title">
				  <span style="color: red">@error('sub_description'){{ $message }}@enderror</span>
				</div>
			  </div>

			  <div class="form-row">
				<div class="col">
					<label for="dob">DOB</label>
				  <input type="text" class="form-control" name="dob" id="dob" value="@if (old($data->dob)){{ old($data->dob)}}@else{{ $data->dob }}@endif">
				  <span style="color: red">@error('dob'){{ $message }}</span>@enderror
				</div>
  
				<div class="col">
					<label for="address">Address</label>
				  <input type="text" class="form-control" name="address" value="@if (old($data->address)){{ old($data->address) }} @else{{ $data->address }} @endif" placeholder="Sub Title">
				  <span style="color: red">@error('address'){{ $message }}@enderror</span>
				</div>
			  </div>

			  <div class="form-row">
				  <div class="col">
					  <label for="instagram">&nbsp;</label>
					  <input type="submit" value="Save" class="btn btn-primary btn-block">
				  </div>
			  </div>
		  </form>
	</div>
</body>
</html>