<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> News</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .news-card {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .news-card img {
            border-radius: 5px 5px 0 0;
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Latest News</h1>

        @if(!empty($news))
            @foreach($news as $article)
                <div class="card news-card">
                    @if(!empty($article['urlToImage']))
                        <img src="{{ $article['urlToImage'] }}" alt="News Image" class="card-img-top">
                    @endif
                    <div class="card-body">
                        <h2 class="card-title">{{ $article['title'] }}</h2>
                        <p class="card-text">{{ $article['description'] }}</p>
                        <a href="{{ $article['url'] }}" target="_blank" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            @endforeach
        @else
            <div class="alert alert-warning" role="alert">
                No news available.
            </div>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
