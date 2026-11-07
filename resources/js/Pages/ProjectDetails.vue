<script setup>
import SiteLayout from "../Layouts/SiteLayout.vue";
import {Link} from "@inertiajs/vue3";
import ProjectGallery from "../Components/ProjectGallery.vue";

defineProps({
    project: Object,
    contentHtml: String
})

const technologyIcons = {
    "PHP": "/icons/skills/php.svg",
    "MySQL": "/icons/skills/mysql.svg",
    "PDO": "/icons/skills/php.svg",
    "HTML": "/icons/skills/html5.svg",
    "CSS": "/icons/skills/css.svg",
}
</script>

<template>
    <SiteLayout>
        <Link href="/projects">Back to projects</Link>
        <div class="project-intro">
            <h1>{{ project.title }}</h1>
            <p>{{ project.summary }}</p>
            <span>{{ project.status }}</span>
            <ul>
                <li v-for="tech in project.technologies" :key="tech">
                    <span class="technology-icon" aria-hidden="true" v-if="technologyIcons[tech]"
                        :style="{ maskImage: 'url(' + technologyIcons[tech] + ')'}"></span>
                    {{ tech }}
                </li>
            </ul>
            <a :href="project.github_url" v-if="project.github_url" class="button button--secondary">View source
                code</a>
        </div>
        <ProjectGallery :images="project.images"></ProjectGallery>
        <article class="project-content" v-html="contentHtml"></article>
        <Link href="/projects">Back to projects</Link>
    </SiteLayout>
</template>
