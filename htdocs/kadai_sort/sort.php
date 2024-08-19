<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_sort</title>
</head>

<body>
    <p>
        <?php
            
            function sort_2way($array, $order) {
                    if ($order) {
                        echo '昇順にソートします。' . '<br>';
                        sort($array);
                    } else {
                        echo '降順にソートします。' . '<br>';
                        rsort($array);
                    }

                    foreach ($array as $num) {
                        echo $num . '<br>';
                    }
            }

            // ソートする配列を宣言
            $nums = [15, 4, 18, 23, 10 ];

            //ソート方向（TRUE：昇順／FALSE：降順）
            //昇順
            sort_2way($nums,true);
            //降順
            sort_2way($nums,false);
        ?>
    </p>
</body>

</html>