<?php

return [
    [
        "slug" => "gymlog",
        "title" => "GymLog",
        "summary" => "A workout tracking application built with PHP and MySQL for recording workouts, exercises and sets.",
        "technologies" => ["PHP", "MySQL", "PDO", "HTML", "CSS"],
        "status" => "Local learning project",
        "cover_image" => "/images/gymlog/workout-details.png",
        "github_url" => "https://github.com/mario-lasic/gymlog",
        "demo_url" => null,
        "images" => [
            [
                "src" => "/images/gymlog/workout-details.png",
                "alt" => "GymLog workout details showing exercises, sets, repetitions and weights.",
                "caption" => "Workout details"
            ],
            [
                "src" => "/images/gymlog/workout-list.png",
                "alt" => "GymLog workout list showing dates and workout names.",
                "caption" => "Workout list"
            ],
            [
                "src" => "/images/gymlog/workout-details-more.png",
                "alt" => "Remaining exercises and sets in a GymLog workout, with workout editing controls.",
                "caption" => "Remaining exercises and sets"
            ],
            [
                "src" => "/images/gymlog/add-exercise.png",
                "alt" => "GymLog form for adding an exercise to a workout, with the exercise list expanded.",
                "caption" => "Form for adding an exercise"
            ],
            [
                "src" => "/images/gymlog/exercise-catalog.png",
                "alt" => "GymLog exercise catalog listing available exercises.",
                "caption" => "Exercise catalog"
            ],
        ],
        "content_file" => "content/projects/gymlog/details.md"
    ],
    [
        "slug" => "coming-soon",
        "title" => "Coming soon",
        "summary" => "More projects will be added here.",
        "technologies" => [],
        "status" => "Planned",
        "is_placeholder" => true,
        "cover_image" => "data:image/svg+xml," . rawurlencode(
                '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 675">
            <rect width="1200" height="675" fill="#392D36"/>
            <text x="600" y="350" text-anchor="middle"
                font-family="sans-serif" font-size="48" fill="#BCA9B7">
                Coming soon
            </text>
        </svg>'
            ),
        "github_url" => null,
        "demo_url" => null,
        "images" => [
            [
                "src" => null,
                "alt" => "Placeholder for an upcoming project.",
                "caption" => "Coming soon",
            ],
        ],
        "content_file" => null,
    ],
];
