<script setup>
import SiteLayout from "../Layouts/SiteLayout.vue";
import {Link} from "@inertiajs/vue3";

defineProps({project: Object})
</script>

<template>
    <SiteLayout>
        <h1>{{ project.title }}</h1>
        <p>{{ project.summary }}</p>

        <Link href="/projects">Back to projects</Link>
    </SiteLayout>
</template>
