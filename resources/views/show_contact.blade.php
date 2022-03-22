<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Contact Information</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<a href="{{ route('home') }}" class="btn btn-sm btn-success mb-2">Back</a>
		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>Contact Headline</th>
					<th>Contact Description</th>
					<th>Action</th>
				</tr>    
			</thead>
			<tbody>
			   @foreach ($contact_data as $data)
			   <tr>
				<td>{{ $data->contact_headline }}</td>
				<td>{{ $data->contact_description }}</td>
				<td>
					<a href="{{ route('contact.edit',$data->id) }}" class="btn btn-sm btn-success">Edit</a>
				</td>
			   </tr>
			   @endforeach
			</tbody>
		</table>
	</div>
</body>
</html>