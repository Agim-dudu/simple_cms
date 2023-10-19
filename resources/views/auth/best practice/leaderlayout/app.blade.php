<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- CSS -->
	<link rel="stylesheet" href="{{ asset('/') }}assets/dasboard/ha.css" />

	<title>Data Pengguna</title>
</head>
<body>
	@include('layouts.leader.navigation')

	<!-- Page Content -->
	<main>
		{{ $content }}
	</main>

	<script src="{{ asset('/') }}assets/dasboard/ha.js"></script>
</body>

</html>

