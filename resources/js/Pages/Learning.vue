<script setup>
import {projects} from "../learning/project.js";
import {getProjectSummary} from "../learning/project.js";
import {ref, computed} from "vue";

let projectsList = ref(projects.slice());
const projectCount = computed(() => {
    return projectsList.value.length;
});

let note = ref("");

function removeLastProject() {
    projectsList.value.pop();
}
</script>
<template>
    <main>
        <h1>Frontend exercises</h1>
        <ul v-if="projectsList.length >= 1">
            <li v-for="project in projectsList" :key="project.id">
                {{ getProjectSummary(project) }}
            </li>
        </ul>
        <p v-else>No projects yet.</p>
        <button @click="removeLastProject">Remove last project</button>
        <p>Projects: {{ projectCount }}</p>
        <label for="note">Note: </label>
        <input v-model="note" placeholder="note..." id="note">
        <p>Note: {{ note }}</p>
    </main>
</template>
