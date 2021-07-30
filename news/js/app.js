var url = "http://laravel.instint/news/api/news.php";
    // you only need this function
    function show(result) {
        if (result.status == 'ok') {
            let html = [];
            $.each(result.articles, function(_, article) {
                html.push(`<div class="card" style="width: 50rem;">
                            <img src="${article.urlToImage}" class="card-img-top" alt="${article.title}">
                            <div class="card-body">
                                <h5 class="card-title">${article.title}</h5>
                                <p class="card-text">${article.description}</p>
                                <p class="author">${article.author}</p>
                                <p class="author">${article.publishedAt}</p>
                            </div></div><br>`);
            });
            $("#articles").html(html)
        }
    }
    $(function() {
        $.getJSON(url, show);
    });