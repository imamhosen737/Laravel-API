<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Edit Contact Informations</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
	<h2 class="text-center">Update Contact Information</h2>
	<div class="container mt-4">
		<form action="{{ route('contact.update',$data->id) }}" method="post">
			@csrf
		     @method('PUT')
			<div class="form-row">
			  <div class="col">
				  <label for="top_title">Contact Headline</label>
				<input type="text" class="form-control" name="contact_headline" id="contact_headline" value="@if (old($data->contact_headline)){{ old($data->contact_headline)}}@else{{ $data->contact_headline }}@endif" placeholder="Item Name">
				<span style="color: red">@error('contact_headline'){{ $message }}</span>@enderror
			  </div>

			  <div class="col">
				  <label for="contact_description">Contact Description</label>
				<input type="text" class="form-control" name="contact_description" value="@if (old($data->contact_description)){{ old($data->contact_description) }} @else{{ $data->contact_description }} @endif" placeholder="Sub Title">
				<span style="color: red">@error('contact_description'){{ $message }}@enderror</span>
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