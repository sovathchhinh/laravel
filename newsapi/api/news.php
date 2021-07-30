<?php
$apinews = json_decode(file_get_contents("https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=fef0b770bced4f398d5830aae28578ba"), true);
echo json_encode($apinews)."\n";
?>