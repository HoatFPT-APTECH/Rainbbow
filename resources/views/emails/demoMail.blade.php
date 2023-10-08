<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Webappfix</title>
</head>
<body>
	<h1>{{ $mailData['title'] }}</h1>

	<p>{{ $mailData['body'] }}</p>

	<p>You have code to  down value 20% : {{$mailData['promotionCode']}} </p>

	
	<p>Thank You.</p>

</body>
</html>