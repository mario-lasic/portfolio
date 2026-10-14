<script setup>
import {projects} from "../learning/project.js";
import {ref, computed} from "vue";
import ProjectCard from "../Components/learning/ProjectCard.vue";

let projectsList = ref(projects.slice());
const projectCount = computed(() => {
    return projectsList.value.length;
});

let note = ref("");

function removeLastProject() {
    projectsList.value.pop();
}

function removeProject(id) {
    projectsList.value = projectsList.value.filter((project) => project.id !== id);
}
</script>
<template>
    <main>
        <h1>Frontend exercises</h1>
        <ul v-if="projectsList.length >= 1">
            <li v-for="project in projectsList" :key="project.id">
                <ProjectCard :project @remove="removeProject"></ProjectCard>
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
