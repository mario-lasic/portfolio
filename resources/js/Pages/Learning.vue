<script setup>
import {projects} from "../learning/project.js";
import {ref, computed} from "vue";
import ProjectCard from "../Components/learning/ProjectCard.vue";
import {useForm} from "@inertiajs/vue3";

let projectsList = ref(projects.slice());
const projectCount = computed(() => {
    return projectsList.value.length;
});

function removeLastProject() {
    projectsList.value.pop();
}

function removeProject(id) {
    projectsList.value = projectsList.value.filter((project) => project.id !== id);
}

const form = useForm({
    note: ""
})

function submitNote() {
    form.post("/learning/note");
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
        <form @submit.prevent="submitNote">
            <label for="note">Note: </label>
            <input v-model="form.note" placeholder="note..." id="note">
            <p v-if="form.errors.note">{{ form.errors.note }}</p>
            <p v-if="form.recentlySuccessful">Note validated.</p>
            <p>Note: {{ form.note }}</p>
            <button type="submit" :disabled="form.processing">Validate note</button>
        </form>
    </main>
</template>
