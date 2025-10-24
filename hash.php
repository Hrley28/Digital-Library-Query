$bookInfo = [
    "Harry Potter" => [
        "author" => "J.K. Rowling",
        "year" => 1997,
        "genre" => "Fantasy"
    ],
    "The Hobbit" => [
        "author" => "J.R.R. Tolkien",
        "year" => 1937,
        "genre" => "Fantasy"
    ],
    "Sherlock Holmes" => [
        "author" => "Arthur Conan Doyle",
        "year" => 1892,
        "genre" => "Mystery"
    ],
    "Gone Girl" => [
        "author" => "Gillian Flynn",
        "year" => 2012,
        "genre" => "Mystery"
    ],
    "A Brief History of Time" => [
        "author" => "Stephen Hawking",
        "year" => 1988,
        "genre" => "Science"
    ],
    "The Selfish Gene" => [
        "author" => "Richard Dawkins",
        "year" => 1976,
        "genre" => "Science"
    ],
    "Steve Jobs" => [
        "author" => "Walter Isaacson",
        "year" => 2011,
        "genre" => "Biography"
    ],
    "Becoming" => [
        "author" => "Michelle Obama",
        "year" => 2018,
        "genre" => "Biography"
    ]
];

function getBookInfo($title, $bookInfo) {
    if (isset($bookInfo[$title])) {
        $info = $bookInfo[$title];
        $output = "Title: " . htmlspecialchars($title) . "\n";
        $output .= "Author: " . htmlspecialchars($info['author']) . "\n";
        $output .= "Year: " . htmlspecialchars($info['year']) . "\n";
        $output .= "Genre: " . htmlspecialchars($info['genre']) . "\n";
        return $output;
    }
    return false;
}

if (php_sapi_name() === 'cli') {
    echo getBookInfo("Harry Potter", $bookInfo) ?: "Book not found\n";
} else {
    echo "<div class='section'><h3>Lookup Example (Hash Table)</h3>";
    $info = getBookInfo("Harry Potter", $bookInfo);
    if ($info) {
        echo "<pre>" . htmlspecialchars($info) . "</pre>";
    } else {
        echo "<strong>Book not found</strong>";
    }
    echo "</div>";
}

