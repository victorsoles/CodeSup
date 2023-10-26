<template>
    <Head title="Nova Anotação" />

    <layout>
        <div class="d-flex align-items-center my-5 mb-0">
            <h4 class="py-3 mb-1 color">
                Nova Anotação
            </h4>
        </div>

        <Card>
            <FormAnotacoes metodo="post" :rota="rota" :dados="anotacao"/>
        </Card>
    </layout>
</template>

<script>
import Layout from "@/Layouts/AdminLayout.vue";
import Card from "@/Components/Card.vue";
import FormAnotacoes from "./shared/FormAnotacoes.vue";

export default {
    name: 'Create',
    components: {
        Layout,
        Card,
        FormAnotacoes
    },
    data() {
        return {
            anotacao: {
                id: null,
                titulo: '',
                descricao: '',
            },
            rota: route('anotacoes.store')
        }
    }
}

</script>

<style>
.color{
    color: #2f2a5e;
}
</style>
