<script setup>
import {Link} from '@inertiajs/vue3';
import SiteLayout from "../Layouts/SiteLayout.vue";
import ProjectCard from "../Components/ProjectCard.vue";

defineProps({
    projects: Array
});

</script>
<template>
    <SiteLayout>
        <h1>Projects</h1>
        <div class="projects-container">
            <ul class="projects-grid">
                <li v-for="project in projects" :key="project.slug">
                    <ProjectCard :project="project"></ProjectCard>
                </li>
            </ul>
        </div>
        <Link href="/">Home</Link>
    </SiteLayout>
</template>
