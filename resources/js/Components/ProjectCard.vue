<script setup>
import {Link} from "@inertiajs/vue3";

defineProps({project: Object});
</script>
<template>
    <article class="project-card">
        <div class="project-card__inner">
            <div class="project-card__front">
                <img :src="project.cover_image" :alt="project.images[0].alt" class="project-card__image">
                <h2>{{ project.title }}</h2>
            </div>
            <div class="project-card__back">
                <p>{{ project.summary }}</p>
                <Link :href="'/projects/' + project.slug" class="button button--secondary" v-if="!project.is_placeholder">View project</Link>
            </div>
        </div>
    </article>
</template>
