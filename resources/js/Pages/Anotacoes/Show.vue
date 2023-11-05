<template>
    <Head :title="'Anotação#' + anotacao.id + ' - ' + anotacao.titulo" />

    <layout>
        <div class="row d-flex justify-content-center align-items-center my-5">
            <div class="col-md-9">
                <Card class="anotacao-card">
                    <Link
                        as="button"
                        :href="route('anotacoes.index')"
                        class="d-flex justify-content-center align-items-center gap-2 bg-transparent border-0"
                    >
                        <box-icon type='solid' name='left-arrow-circle'></box-icon>
                    </Link>

                    <div class="anotacao-info">
                        <h3 class="text-center">{{ anotacao.titulo }}</h3>
                        <div class="anotacao-content text-center mb-2">{{ anotacao.descricao }}</div>
                    </div>
                </Card>
            </div>

            <!-- Ações -->
            <div class="col-md-3">
                <Card titulo="Ações" class="acoes-card">
                    <hr class="text-dark mb-3 mt-0 w-100 mb-4">
                    <div class="text-center d-flex flex-column gap-2">
                        <Link
                            as="button"
                            :href="route('anotacoes.edit', anotacao.id)"
                            class="btn btn-warning me-2 w-100 d-flex justify-content-center align-items-center gap-2 text-white shadow"
                        >
                            Editar
                        </Link>

                        <ConfirmAlert
                            titulo="Você tem certeza?"
                            texto="Você não poderá reverter isso"
                            metodo="delete"
                            :rota="route('anotacoes.destroy', anotacao.id)"
                            classe="btn btn-danger w-100 d-flex justify-content-center align-items-center gap-2 shadow"
                        >
                            Excluir
                        </ConfirmAlert>
                    </div>
                </Card>
            </div>
        </div>
    </layout>
</template>

<script>
import Layout from "@/Layouts/AdminLayout.vue";
import Card from "@/Components/Card.vue";
import ConfirmAlert from "@/Components/ConfirmAlert.vue";

export default {
    name: 'Create',
    components: {
        Layout,
        Card,
        ConfirmAlert,
    },
    props: {
        anotacao: Object,
        titulo: String,
    },
}
</script>

<style>
.paginate {
    cursor: pointer;
}
</style>
