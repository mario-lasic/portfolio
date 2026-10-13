<script setup>
    import {projects} from "../learning/project.js";
    import {getProjectSummary} from "../learning/project.js";
</script>
<template>
    <main>
        <h1>Frontend exercises</h1>
        <ul v-if="projects.length >= 1">
            <li v-for="project in projects" :key="project.id">
                {{ getProjectSummary(project) }}
            </li>
        </ul>
        <p v-else>No projects yet.</p>
    </main>
</template>
