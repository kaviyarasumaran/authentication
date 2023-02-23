<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Videos</title>
</head>
<body>
	<div style="align-items: center;">
		<div>
			@foreach($video as $video)
				<p>{{ $video->id }}</p>
				<a href="/video/{{$video->id}}">
					{{ $video->videoName }}
				</a>	
			@endforeach
		</div>
	</div>
</body>
</html>