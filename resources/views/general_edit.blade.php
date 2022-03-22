<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Edit General Informations</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
	<h2 class="text-center">Update General Information</h2>
	<div class="container mt-4">
		<form action="{{ route('general.update',$data->id) }}" method="post">
			@csrf
		     @method('PUT')
			<div class="form-row">
			  <div class="col">
				  <label for="name">Name</label>
				<input type="text" class="form-control" name="name" id="name" value="@if (old($data->name)){{ old($data->name)}}@else{{ $data->name }}@endif" placeholder="Item Name">
				<span style="color: red">@error('name'){{ $message }}</span>@enderror
			  </div>

			  <div class="col">
				  <label for="sub_title">Sub Title</label>
				<input type="text" class="form-control" name="sub_title" value="@if (old($data->sub_title)){{ old($data->sub_title) }} @else{{ $data->sub_title }} @endif" placeholder="Sub Title">
				<span style="color: red">@error('sub_title'){{ $message }}@enderror</span>
			  </div>
			</div>

			<div class="form-row">
				<div class="col">
					<label for="title">Title</label>
				  <input type="text" class="form-control" name="title" id="title" value="@if (old($data->title)){{ old($data->title)}}@else{{ $data->title }}@endif">
				  <span style="color: red">@error('title'){{ $message }}</span>@enderror
				</div>
  
				<div class="col">
					<label for="email">Email</label>
				  <input type="email" class="form-control" name="email" value="@if (old($data->email)){{ old($data->email) }} @else{{ $data->email }} @endif" placeholder="Sub Title">
				  <span style="color: red">@error('email'){{ $message }}@enderror</span>
				</div>
			  </div>

			  <div class="form-row">
				<div class="col">
					<label for="phone">Phone</label>
				  <input type="text" class="form-control" name="phone" id="phone" value="@if (old($data->phone)){{ old($data->phone)}}@else{{ $data->phone }}@endif">
				  <span style="color: red">@error('phone'){{ $message }}</span>@enderror
				</div>
  
				<div class="col">
					<label for="fb">Facebook Link</label>
				  <input type="text" class="form-control" name="fb" value="@if (old($data->fb)){{ old($data->fb) }} @else{{ $data->fb }} @endif" placeholder="Sub Title">
				  <span style="color: red">@error('fb'){{ $message }}@enderror</span>
				</div>
			  </div>

			  <div class="form-row">
				  <div class="col">
					  <label for="tw">Twitter Link</label>
					  <input type="text" class="form-control" name="tw" value="@if (old($data->tw)){{ old($data->tw) }}@else{{ $data->tw }} @endif">
					  <span style="color: red">@error('tw'){{ $message }} @enderror</span>
				  </div>
				  <div class="col">
					  <label for="instagram">Instagram Link</label>
					  <input type="text" class="form-control" name="instagram" value="@if (old($data->instagram)){{ old($data->instagram) }}@else{{ $data->instagram }} @endif">
					  <span style="color: red">@error('instagram'){{ $message }} @enderror</span>
				  </div>
			  </div>

			  <div class="form-row">
				  <div class="col">
					  <label for="linkedin">Linkedin Link</label>
					  <input type="text" class="form-control" name="linkedin" value="@if (old($data->linkedin)){{ old($data->linkedin) }}@else{{ $data->linkedin }} @endif">
					  <span style="color: red">@error('linkedin'){{ $message }} @enderror</span>
				  </div>
				  <div class="col">
					  <label for="instagram">&nbsp;</label>
					  <input type="submit" value="Save" class="btn btn-primary btn-block">
				  </div>
			  </div>
		  </form>
	</div>
</body>
</html>