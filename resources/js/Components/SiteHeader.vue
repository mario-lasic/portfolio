<script setup>
import {Link} from "@inertiajs/vue3";
import {ref, useTemplateRef} from "vue";

let isMenuOpen = ref(false);
let toggle_nav_btn = useTemplateRef('nav-toggle-btn')

function toggleMenu() {
    isMenuOpen.value = !isMenuOpen.value;
}

function closeMenu() {
    isMenuOpen.value = false;
}

function handleEscape() {
    if (isMenuOpen.value) {
        closeMenu();
        toggle_nav_btn.value.focus();
    }
}
</script>
<template>
    <header>
        <nav class="site-container" @keydown.esc="handleEscape()">
            <Link href="/" class="button" @click="closeMenu()">Mario Lasić</Link>
            <button @click="toggleMenu()" type="button" :aria-expanded="isMenuOpen.toString()"
                aria-controls="primary-navigation" class="button nav-toggle" ref="nav-toggle-btn">
                {{ isMenuOpen ? "Close" : "Open" }}
            </button>
            <ul id="primary-navigation" class="nav-links" :class="{ 'nav-links--open': isMenuOpen }">
                <li>
                    <Link @click="closeMenu()" href="/" class="button"
                        :class="{ 'nav-link--active': $page.url === '/' }">Home
                    </Link>
                </li>
                <li>
                    <Link @click="closeMenu()" href="/projects" class="button"
                        :class="{ 'nav-link--active': $page.url.startsWith('/projects/') || $page.url === '/projects' }">
                        Projects
                    </Link>
                </li>
            </ul>
        </nav>
    </header>
</template>
