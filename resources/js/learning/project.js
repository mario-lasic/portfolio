export const projects = [
    {
        id: 1,
        title: "Gym Log",
        description: "This project saves your workouts.",
        year: 2026,
    },
    {
        id: 2,
        title: "Test 2",
        description: "This project Test 2.",
        year: 2022,
    },
    {
        id: 3,
        title: "Test 3",
        description: "This project tests 3.",
        year: 1995,
    },
];

export function getProjectSummary(project) {
    const {title, year} = project;
    return title + " (" + year + ")"
}
