<template>
    <Head title="Inicio" />

    <Layout>
        <div class="row mt-4 g-3 justify-content-center">
            <div class="col-6 col-sm-6 col-md-6">
                <Card>
                    <h2 class="text-muted d-flex justify-content-center">Conteudo</h2>
                </Card>
            </div>

            <div class="col-6 col-sm-6 col-md-6">
                <Card>
                    <h2 class="text-muted d-flex justify-content-center">Conteudo</h2>
                </Card>
            </div>
        </div>
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

