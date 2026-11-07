<script setup>
import {computed, ref} from "vue";

let props = defineProps({
    images: Array
});
let currentIndex = ref(0);
let currentImage = computed(() => {
    return props.images[currentIndex.value];
});

function nextImage() {
    if (currentIndex.value < props.images.length - 1) {
        currentIndex.value++;
    }
}

function previousImage() {
    if (currentIndex.value > 0) {
        currentIndex.value--;
    }
}

let previousDisabled = computed(() => {
    return currentIndex.value <= 0
});
let nextDisabled = computed(() => {
    return currentIndex.value >= props.images.length - 1
});

</script>

<template>
    <div class="project-gallery" v-if="images.length > 0">
        <figure>
            <div class="project-gallery__frame">
                <img :src="currentImage.src" :alt="currentImage.alt" class="project-gallery__image">
            </div>
            <figcaption class="project-gallery__caption" aria-live="polite" aria-atomic="true">{{ currentIndex + 1 }} of
                {{ images.length }} -
                {{ currentImage.caption }}
            </figcaption>
        </figure>
        <div class="project-gallery__buttons" v-if="images.length > 1">
            <button type="button" class="button button--secondary" v-on:click="previousImage()"
                :aria-disabled="previousDisabled">Previous
            </button>
            <button type="button" class="button button--secondary" v-on:click="nextImage()"
                :aria-disabled="nextDisabled">Next
            </button>
        </div>
    </div>
</template>
