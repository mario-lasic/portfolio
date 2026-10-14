<script setup>
const props = defineProps({project: Object});
const emit = defineEmits(['remove']);
function requestRemoval (){
    emit('remove', props.project.id);
}
</script>
<template>
    <article>
        <h2>{{ props.project.title }}</h2>
        <p>{{ props.project.description }}</p>
        <p>{{ props.project.year }}</p>
        <button @click="requestRemoval">Remove project</button>
    </article>
</template>
