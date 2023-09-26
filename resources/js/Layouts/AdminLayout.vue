<template>
    <div class="row">
        <!-- Sidebar -->
        <div :class="{ 'col-md-3 transition-side': sidebarAberta, 'col-md-1 transition-side': !sidebarAberta }">
            <Sidebar @estadoSidebar="atualizarSidebar" />
        </div>

        <!-- Conteúdo principal -->
        <div :class="{ 'col-md-9 transition-side': sidebarAberta, 'col-md-11 transition-side': !sidebarAberta }">
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
    import { ref } from 'vue';

    const sidebarAberta = ref(false); // Inicialmente, a sidebar está fechada

    const atualizarSidebar = (estado) => {
    sidebarAberta.value = estado;
    };

</script>

<style>
.sidebar-aberta{
    margin-left: 22%;
}

</style>
