<template>
    <Head title="Inicio" />

    <Layout>
        <Card class="mt-4">
            <h2 class="text-muted">Bem vindo!</h2>
        </Card>
    </Layout>
</template>

<script>
    import Card from '@/Components/Card.vue';
    import Layout from '@/Layouts/AdminLayout.vue';

    export default {
        name: 'inicio',
        components: {
            Card,
            Layout
        }
    }

</script>

