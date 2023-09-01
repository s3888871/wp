<?php
  session_start();
list($dayTime, $rate) = explode(',', $_POST['day']);


if (isset($_GET['movie'])) {
    $movieCode = $_GET['movie'];
} elseif (isset($_POST['movie'])) {
    $movieCode = $_POST['movie'];
} else {
    die("No movie selected. tools");
}

function isValidMovie($movie) {
    $validMovies = ['RMC', 'ACT', 'ANM', 'DRM'];
    return in_array($movie, $validMovies);
}



$days = [
    'MON' => 'Monday',
    'TUE' => 'Tuesday',
    'WED' => 'Wednesday',
    'THU' => 'Thursday',
    'FRI' => 'Friday',
    'SAT' => 'Saturday',
    'SUN' => 'Sunday'
];


  $movies = [
    'ACT' => [
      'title' => 'Indiana Jones and the Dial of Destiny',
      'rating' => 'PG-13',
      'genre' => 'Action, Adventure',
      'summary' => 'Experience the return of legendary hero, Indiana Jones, in the fifth installment of this beloved swashbuckling series of films.',
      'plot' => 'Finding himself in a new era, approaching retirement, Indy wrestles with fitting into a world that seems to have outgrown him. But as the tentacles of an all-too-familiar evil return in the form of an old rival, Indy must don his hat and pick up his whip once more to make sure an ancient and powerful artifact doesn&apos;t fall into the wrong hands.',
      'imdb' => 'tt1462764',
      'starring' => 'Harrison Ford, Mads Mikkelsen',
      'screening-summary' => 'Monday - Tuesday: 9pm, Wednesday - Friday: 9pm, Saturday - Sunday: 6pm',
      'screenings' => [
        'MON' => [
          'time' => '9pm',
          'rate' => 'discount'
        ],
        'TUE' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'WED' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'THU' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'FRI' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'SAT' => [
          'time' => '6pm',
          'rate' => 'regular'
        ],
        'SUN' => [
          'time' => '6pm',
          'rate' => 'regular'
        ]
      ]
    ],
    'RMC' => [
      'title' => 'Barbie',
      'rating' => 'PG-13',
      'genre' => 'Romance',
      'summary' => 'Barbie suffers a crisis that leads her to question her world and her existence.',
      'plot' => 'Barbie suffers a crisis that leads her to question her world and her existence.',
      'imdb' => 'tt1462764',
      'screening-summary' => 'Monday - Tuesday: 9pm, Wednesday - Friday: 9pm, Saturday - Sunday: 6pm',
      'screenings' => [
        'MON' => [
          'time' => '9pm',
          'rate' => 'discount'
        ],
        'TUE' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'WED' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'THU' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'FRI' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'SAT' => [
          'time' => '6pm',
          'rate' => 'regular'
        ],
        'SUN' => [
          'time' => '6pm',
          'rate' => 'regular'
        ]
      ]
    ],
    'ANM' => [
      'title' => 'Teenage Mutant Ninja Turtles',
      'rating' => 'PG-13',
      'genre' => 'Action, Animation',
      'summary' => 'After years of being sheltered from the human world, the Turtle brothers set out to win the hearts of New Yorkers and be accepted as normal teenagers. Their new friend, April ONeil, helps them take on a mysterious crime syndicate, but they soon get in over their heads when an army of mutants is unleashed upon them.',
      'starring' => 'Jackie Chan, Nicolas Cantu, John Cena',
      'plot' => 'After years of being sheltered from the human world, the Turtle brothers set out to win the hearts of New Yorkers and be accepted as normal teenagers. Their new friend, April ONeil, helps them take on a mysterious crime syndicate, but they soon get in over their heads when an army of mutants is unleashed upon them.',
      'imdb' => 'tt1462764',
      'screening-summary' => 'Monday - Tuesday: 9pm, Wednesday - Friday: 9pm, Saturday - Sunday: 6pm',
      'screenings' => [
        'MON' => [
          'time' => '9pm',
          'rate' => 'discount'
        ],
        'TUE' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'WED' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'THU' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'FRI' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'SAT' => [
          'time' => '6pm',
          'rate' => 'regular'
        ],
        'SUN' => [
          'time' => '6pm',
          'rate' => 'regular'
        ]
      ]
    ],
    'DRM' => [
      'title' => 'Oppenheimer',
      'rating' => 'PG-13',
      'genre' => 'Action, Adventure',
      'summary' => 'Oppenheimer is an upcoming biographical thriller film written, produced, and directed by Christopher Nolan, based on the 2005 book American Prometheus by Kai Bird and Martin J. Sherwin, about J. Robert Oppenheimer, the theoretical physicist who helped develop the first nuclear weapons.',
      'plot' => 'Oppenheimer is an upcoming biographical thriller film written, produced, and directed by Christopher Nolan, based on the 2005 book American Prometheus by Kai Bird and Martin J. Sherwin, about J. Robert Oppenheimer, the theoretical physicist who helped develop the first nuclear weapons.',
      'imdb' => 'tt1462764',
      'screening-summary' => 'Monday - Tuesday: 9pm, Wednesday - Friday: 9pm, Saturday - Sunday: 6pm',
      'screenings' => [
        'MON' => [
          'time' => '9pm',
          'rate' => 'discount'
        ],
        'TUE' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'WED' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'THU' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'FRI' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'SAT' => [
          'time' => '6pm',
          'rate' => 'regular'
        ],
        'SUN' => [
          'time' => '6pm',
          'rate' => 'regular'
        ]
      ]
    ],
  ];

$selectedMovie = $movies[$movieCode];



function displayMoviePanel($movieCode) {
    global $movies;
    $movie = $movies[$movieCode];
    echo "<div class='movie-panel'>";
    echo "<h2>{$movie['title']}</h2>";
    echo "<p>{$movie['description']}</p>";
    echo "</div>";
}



?>