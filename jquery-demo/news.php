<!DOCTYPE html>
<html>

<head>
    <title>Google News Apis</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="my-news.js"></script>
</head>

<body>
    <div id="news"> </div>
</body>
<script>
    $(document).ready(function() {
        $.ajax({
            url: "https://newsapi.org/v2/top-headlines?country=us&amp;apiKey=e03753c9126b408d870a44318813ac3d"
        }).then(function(data) {

            for (i = 0; i < data.articles.length; i++) {
                $('#news').append("<ul><li>" + data.articles[i].title + "</li></ul>");
            }

        });
    });
</script>

</html>