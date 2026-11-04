<script setup>
import {Link} from "@inertiajs/vue3";
import SiteLayout from "../Layouts/SiteLayout.vue";

</script>
<template>
    <SiteLayout>
        <section class="hero">
            <div class="hero__content">
                <h1>Junior Backend Developer · PHP & Laravel</h1>
                <p>I build web applications with PHP and Laravel and am looking for my first backend development role. I
                    enjoy investigating why something doesn't work, understanding the cause, and finding a solution.</p>
            </div>
            <div class="hero__actions">
                <Link href="/projects" class="button button--primary">View projects</Link>
            </div>
        </section>
    </SiteLayout>
</template>
