<template>
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2">
            <Sidebar />
        </div>

        <!-- Conteúdo principal -->
        <div class="sidebar-aberta col-md-9">
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <slot />
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import Sidebar from '@/Layouts/Sidebar.vue';

</script>

<style>
.sidebar-aberta{
    margin-left: 22%;
}

</style>
