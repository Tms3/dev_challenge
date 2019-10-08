$array = ["foo", "baz", "bar"];

if (is_sequential($array, true)) {
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i], PHP_EOL;
    }
}

$array = ["foo", "baz" => "bar"];

if (is_sequential($array, true)) {
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i], PHP_EOL;
    }
}
