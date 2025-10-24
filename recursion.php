
$library = [
    "Fiction" => [
        "Fantasy" => ["Harry Potter", "The Hobbit"],
        "Mystery" => ["Sherlock Holmes", "Gone Girl"]
    ],
    "Non-Fiction" => [
        "Science" => ["A Brief History of Time", "The Selfish Gene"],
        "Biography" => ["Steve Jobs", "Becoming"]
    ]
];

function displayLibrary($library, $indent = 0) {
    foreach ($library as $key => $value) {
        if (is_array($value)) {
            echo str_repeat("&nbsp;", $indent * 4) . "<strong>" . htmlspecialchars($key) . "</strong><br>";
            $isBooks = array_keys($value) === range(0, count($value) - 1);
            if ($isBooks) {
                foreach ($value as $book) {
                    echo str_repeat("&nbsp;", ($indent + 1) * 4) . htmlspecialchars($book) . "<br>";
                }
            } else {
                displayLibrary($value, $indent + 1);
            }
        } else {
            echo str_repeat("&nbsp;", $indent * 4) . htmlspecialchars($value) . "<br>";
        }
    }
}

if (php_sapi_name() !== 'cli') {
    echo "<div class='section'><h3>Library Structure (Recursive Display)</h3>";
}
displayLibrary($library);
echo "</div>";
