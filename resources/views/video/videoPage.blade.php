<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Video</title>
</head>
<body style="background-color:black;">
	<div>
		<center>
		<div style="padding: 20px; color: white;">
			<p>{{$video->videoName}}</p>
		</div>
 		<video width="700" height="400" controls>
  			<source src="{{ url('Videos/'.$video->videoName.'.mp4') }}" type="video/mp4">
		</video>
		</center>
		<center>
		<div>
			<div style="color: white;">
				<form action="{{ route('likeOrDislike') }}" method="POST">
					@csrf
					<button>Like</button>
				</form>
			</div>
			<div>
				<form action="{{ route('likeOrDislike') }}" method="POST">
					@csrf
					<button>Dislike</button>
				</form>
			</div>
		</div>
		</center>
	</div> 
</body>
</html>