<script setup>
import {Link} from "@inertiajs/vue3";

const props = defineProps(['message'])
</script>
<template>
    <main>
        <h1>Portfolio setup works.</h1>
        <p>{{ props.message }}</p>
        <Link href="/projects">Projects</Link>
    </main>
</template>
