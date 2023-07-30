<template>
    <div class="d-flex">
        <Sidebar />

    <div class="d-flex flex-column">
        <slot />
    </div>

    </div>
</template>

<script setup>
import Sidebar from '@/Layouts/Sidebar.vue';

</script>

<style lang="scss" scoped>

</style>
