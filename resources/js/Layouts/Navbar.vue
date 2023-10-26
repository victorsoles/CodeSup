<template>
    <Card class="mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-xl-none hamburger-button" @click="abreSidebar">
                <box-icon name="menu"></box-icon>
            </div>
            <h2 class="text-muted text-center flex-grow-1">Bem vindo!</h2>
        </div>
    </Card>
</template>

<script>
    import Card from '@/Components/Card.vue';

    export default {
        name: 'Navbar',
        components: {
            Card,
        },
        methods: {
            abreSidebar() {
                this.$emit('toggleSidebar'); // Emitir um evento para abrir/fechar a Sidebar
            },
        },
    }
</script>

