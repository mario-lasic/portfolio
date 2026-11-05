<script setup>
import {Link} from '@inertiajs/vue3';
import SiteLayout from "../Layouts/SiteLayout.vue";

defineProps({
    projects: Array
});

</script>
<template>
    <SiteLayout>
        <h1>Projects</h1>
        <div class="project-container">
            <ul>
                <li v-for="project in projects" :key="project.slug">
                    <h2>{{ project.title }}</h2>
                    <p>{{ project.summary }}</p>
                </li>
            </ul>
        </div>
        <Link href="/">Home</Link>
    </SiteLayout>
</template>
