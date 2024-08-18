<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_sort</title>
</head>

<body>
    <p>
        <?php
            // ソートする配列を宣言
            $nums = [15, 4, 18, 23, 10 ];

            function sort_2way($array, $order) {
                
                    if ($order) {
                        echo '昇順にソートします。' . '<br>';
                        sort($array);
                        foreach ($array as $num) {
                            echo $num . '<br>';
                        }
                    } else {
                        echo '降順にソートします。' . '<br>';
                        rsort($order);
                        echo $num . '<br>';
                        foreach ($array as $num) {
                            echo $num . '<br>';
                        }
                    }
            }

            //ソート対象の配列
            $array = $nums;

            //ソート方向（TRUE：昇順／FALSE：降順）
            $order = sort($num, true);

            sort_2way($nums,true);
            sort_2way($nums,false);
        ?>
    </p>
</body>

</html>