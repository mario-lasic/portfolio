<script setup>
import {Link} from "@inertiajs/vue3";
</script>
<template>
    <header>
        <nav class="site-container">
            <Link href="/" class="button">Mario Lasić</Link>
            <ul>
                <li>
                    <Link href="/" class="button" :class="{ 'nav-link--active': $page.url === '/' }">Home</Link>
                </li>
                <li>
                    <Link href="/projects" class="button"
                        :class="{ 'nav-link--active': $page.url.startsWith('/projects/') || $page.url === '/projects' }">Projects
                    </Link>
                </li>
            </ul>
        </nav>
    </header>
</template>
