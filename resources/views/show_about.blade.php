<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<a href="{{ route('home') }}" class="btn btn-sm btn-success mb-2">Back</a>
		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>Top Title</th>
					<th>Top Description</th>
					<th>Sub Title</th>
					<th>Sub Description</th>
					<th>DOB</th>
					<th>Address</th>
					<th>Action</th>
				</tr>    
			</thead>
			<tbody>
			   @foreach ($about_data as $data)
			   <tr>
				<td>{{ $data->top_title }}</td>
				<td>{{ $data->top_description }}</td>
				<td>{{ $data->sub_title }}</td>
				<td>{{ $data->sub_description }}</td>
				<td>{{ $data->dob }}</td>
				<td>{{ $data->address }}</td>
				<td>
					<a href="{{ route('about.edit',$data->id) }}" class="btn btn-sm btn-success">Edit</a>
				</td>
			   </tr>
			   @endforeach
			</tbody>
		</table>
	</div>
</body>
</html>