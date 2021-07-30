$(document).ready(function() {
    // var url = 'https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=fef0b770bced4f398d5830aae28578ba';
    var url1 = 'http://localhost:3000/blogs';
    $.get(url1, function(data) {
        $('#blogList').html('');
        let blogData = '';
        $.each(data, function(ind, item) {
            // console.log(item);
            const blogItem = `
                <div>
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">${item.title}</h2>
                            <h3 class="post-subtitle">${item.subTitle}</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">${item.author}</a>
                            on ${item.publishDate}
                        </p>
                    </div>
                    <hr class="my-4" />
                </div>
            `;
            blogData = blogData + blogItem;
        });
        $('#blogList').html(blogData);
    });
});