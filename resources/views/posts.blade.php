<!DOCTYPE html>
<html>
<head>
    <title>Список страниц</title>
</head>
<body>
<header>
    <h1>Список страниц</h1>
</header>
<main>
    @foreach($posts as $id => $post)
        <div class="post">
            <h2>{{ $post['title'] }}</h2>
            <div class="info">
                <span class="date">{{ $post['date'] }}</span>
                <span class="author">{{ $post['author'] }}</span>
            </div>
            <div class="text">
                {{ $post['teaser'] }}
            </div>
            <div class="more">
                <a href="/posts/{{ $id }}">подробнее...</a>
            </div>
        </div>
    @endforeach
</main>
</body>
</html>