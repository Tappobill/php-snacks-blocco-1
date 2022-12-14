<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php
$testo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eius, quod ducimus quam unde provident quae quos, laudantium eum cum sequi molestiae obcaecati, molestias id ut tempore earum veniam dignissimos.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae nisi dolore nam aperiam, pariatur excepturi corrupti facilis sit distinctio qui optio maiores repellendus neque doloremque laborum. Dicta sint rerum laboriosam.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eius, quod ducimus quam unde provident quae quos, laudantium eum cum sequi molestiae obcaecati, molestias id ut tempore earum veniam dignissimos.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae nisi dolore nam aperiam, pariatur excepturi corrupti facilis sit distinctio qui optio maiores repellendus neque doloremque laborum. Dicta sint rerum laboriosam.";

$arrayTesto = explode('.', $testo);

for ($i = 0; $i < count($arrayTesto); $i++) {
    if ($arrayTesto[$i] !== '') {
        echo "<p>";
        echo $arrayTesto[$i];
        echo "</p>";
    }
}

?>