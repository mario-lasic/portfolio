<script setup>
defineProps({
    images: Array
});
</script>

<template>
    <figure class="project-gallery" v-if="images.length > 0">
        <div class="project-gallery__frame">
            <img :src="images[0].src" :alt="images[0].alt" class="project-gallery__image">
        </div>
        <figcaption class="project-gallery__caption">{{ images[0].caption }}</figcaption>
    </figure>
</template>
