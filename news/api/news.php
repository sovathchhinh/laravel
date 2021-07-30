<?php
// $apinews = json_decode(file_get_contents("https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=fef0b770bced4f398d5830aae28578ba"), true);
// $apinews = json_decode(file_get_contents("https://newsapi.org/v2/everything?q=tesla&from=2021-06-30&sortBy=publishedAt&apiKey=fef0b770bced4f398d5830aae28578ba"), true);
$apinews = json_decode(file_get_contents("https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=fef0b770bced4f398d5830aae28578ba"), true);
echo json_encode($apinews)."\n";
?>