<script setup>
import SiteHeader from "../Components/SiteHeader.vue";
import SiteFooter from "../Components/SiteFooter.vue";
</script>
<template>
    <SiteHeader></SiteHeader>
    <main class="site-container">
        <slot></slot>
    </main>
    <SiteFooter></SiteFooter>
</template>
