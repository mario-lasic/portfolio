## About the project

GymLog is a workout tracking application built with PHP and MySQL. It brings workouts, exercises and recorded sets together, providing a structured way to keep a training log.

The main workflow starts with creating a workout and adding exercises to it. Exercises can be arranged in the desired order, and sets record the number of repetitions and the weight used. Existing workouts can be edited as needed or deleted.

## Key features

- Create, edit and delete workouts.
- Add exercises to a workout and change their order.
- Record repetitions and weights for individual sets.
- Browse the available exercises in an exercise catalog.

## Backend implementation

The backend uses PHP and PDO to communicate with a MySQL database. Prepared statements are used for database queries, while server-side validation checks submitted data.

CSRF protection helps protect actions that change application data. Database transactions keep related updates together, including changes to the order of exercises within a workout.

The interface is built with HTML and CSS, with screens for browsing workouts, viewing workout details and recording exercises and sets.
