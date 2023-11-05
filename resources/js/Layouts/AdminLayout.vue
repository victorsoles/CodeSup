<template>
    <div class="row no-gutter">
        <!-- Sidebar -->
        <div class="d-none d-xl-block col-xl-3 transition-side">
            <Sidebar @estadoSidebar="atualizarSidebar" @toggle-sidebar="toggleSidebar" />
        </div>

        <!-- Conteúdo principal -->
        <div :class="contentClass">
            <Navbar @toggleSidebar="toggleSidebar" />
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 p-0">
                    <slot />
                </div>
            </div>
        </div>

        <!-- Componente SweetAlert para exibir mensagens -->
        <SweetAlert :mensagem="mensagem" />
    </div>
</template>


<script setup>
    import Sidebar from "@/Layouts/Sidebar.vue";
    import Navbar from "@/Layouts/Navbar.vue";
    import { ref, computed, watch, onMounted } from "vue";
    import SweetAlert from '@/Components/SweetAlert.vue';
    import { usePage } from '@inertiajs/vue3';

    const sidebarAberta = ref(false); // Inicialmente, a sidebar está fechada

    const atualizarSidebar = (estado) => {
        sidebarAberta.value = estado;
    };

    // const sidebarClass = computed(() => {
    //     return {
    //         "col-xl-3 transition-side": sidebarAberta.value,
    //     };
    // });

    const mensagem = ref(null);

    const contentClass = computed(() => {
        return {
            "col-xl-9 col-md-12 transition-side custom-col-9": sidebarAberta.value,
            "col-xl-11 col-md-12 transition-side custom-col-11": !sidebarAberta.value,
        };
    });

    const toggleSidebar = () => {
        sidebarAberta.value = !sidebarAberta.value;
    };

    onMounted(() => {
    mensagem.value = usePage().props.flash.mensagem ?? [];
    });

    watch(() => usePage().props.flash.mensagem, (newMensagem) => {
    mensagem.value = newMensagem;
    });
</script>


  <style scoped>
  /* Estilo personalizado pode ser adicionado aqui, se necessário */
  </style>
