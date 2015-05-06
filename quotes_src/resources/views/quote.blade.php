<!-- resources/views/quote.blade.php -->

<html>  
<head>  
    <title>Inspiring Quotes</title>
    <link href="/quotes/css/web.css" rel="stylesheet" type="text/css"/>
    <link href='//fonts.googleapis.com/css?family=Alegreya:400,700|Roboto+Condensed' rel='stylesheet' type='text/css'>
</head>  
<body style="background-image: url('/quotes/img/bg.jpg')">  
<div class="container">  
    <div class="quote-container">
        <p class="text">{{$quote->text}}</p>
        <p class="author">— {{$quote->author}}</p>
    </div>
</div>  
</body>  
</html>  