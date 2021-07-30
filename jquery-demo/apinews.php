<?php
$apinews = json_decode(file_get_contents("https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=fef0b770bced4f398d5830aae28578ba"), true);
// print_r($apinews['data']['entries']);
$js = $apinews['articles'];

print_r($js);

// foreach ($js as $key => $value) {
//     echo $value['author'];
//     echo $value['title'];
//     echo $value['description'].'<br>';
//     echo '<br>';
// }
?>