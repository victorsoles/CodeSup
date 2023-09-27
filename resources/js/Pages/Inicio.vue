<template>
    <Layout>
        <Card class="mt-4 col-md-12">
            <h2 class="text-muted d-flex justify-content-center">Conteudo</h2>
        </Card>
    </Layout>
</template>

<script>
    import Card from '@/Components/Card.vue';
    import Layout from '@/Layouts/AdminLayout.vue';

    export default {
        name: 'Navbar',
        components: {
            Card,
            Layout
        }
    }

</script>

