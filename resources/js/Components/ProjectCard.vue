<script setup>
import {Link} from "@inertiajs/vue3";

defineProps({project: Object});
</script>
<template>
    <article class="project-card">
        <img :src="project.cover_image" :alt="project.images[0].alt" class="project-card__image">
        <h2>{{ project.title }}</h2>
        <p>{{ project.summary }}</p>
        <Link :href="'/projects/' + project.slug" class="button button--secondary">View project</Link>
    </article>
</template>
