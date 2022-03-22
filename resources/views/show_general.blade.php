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
					<th>Name</th>
					<th>Sub Title</th>
					<th>Title</th>
					<th>Email</th>
					<th>Phone</th>
					<th>FB Link</th>
					<th>Twitter Link</th>
					<th>Instagram Link</th>
					<th>Linkedin Link</th>
					<th>Action</th>
				</tr>    
			</thead>
			<tbody>
			   @foreach ($general_data as $d)
			   <tr>
				<td>{{ $d->name }}</td>
				<td>{{ $d->sub_title }}</td>
				<td>{{ $d->title }}</td>
				<td>{{ $d->email }}</td>
				<td>{{ $d->phone }}</td>
				<td>{{ $d->fb }}</td>
				<td>{{ $d->tw }}</td>
				<td>{{ $d->instagram }}</td>
				<td>{{ $d->linkedin }}</td>
				<td>
					<a href="{{ route('general.edit',$d->id) }}" class="btn btn-sm btn-success">Edit</a>
				</td>
			   </tr>
			   @endforeach
			</tbody>
		</table>
	</div>
</body>
</html>