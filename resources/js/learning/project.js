export const project = {
    title: "Gym Log",
    description: "This project saves your workouts.",
    year: 2026,
}
export function getProjectSummary(project) {
    const {title, year} = project;
    return title + " (" + year + ")"
}
