<template>
    <Head title="Nova Anotação" />

    <form @submit.prevent="formSubmit">
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input v-model="form.titulo" type="text" ref="titulo" class="form-control" id="titulo" placeholder="Digite o título aqui">
            <MensagemErro :mensagem="form.errors.titulo"/>
        </div>

        <div class="mb-3">
            <label class="form-label">Descrição</label>
            <textarea class="form-control" v-model="form.descricao" placeholder="Descreva sobre a anotação"></textarea>
            <MensagemErro :mensagem="form.errors.descricao"/>
        </div>

        <div class="d-flex justify-content-end align-items-end">
            <button type="submit" class="btn btn-salvar">Salvar</button>
        </div>
    </form>
</template>

<script>
import { useForm } from '@inertiajs/vue3';
import MensagemErro from '@/Components/Forms/MensagemErro.vue';

export default {
    name: 'FormAnotacoes',
    components: {
        MensagemErro
    },
    props: {
        dados: {
            type: Object,
            default: () => ({})
        },
        rota: String,
        metodo: String,
    },
    setup(props) {
        const form = useForm({
            id: null,
            titulo: '',
            descricao: '',
        });

        form.id = props.dados.id ?? null;
        form.titulo = props.dados.titulo ?? '';
        form.descricao = props.dados.descricao ?? '';

        return { form };
    },
    methods: {
        formSubmit(){
            this.form.submit(this.metodo, this.rota, {
                onSuccess: () => {
                    this.$emit('close');
                }
            })
        }
    },
    mounted() {
        this.$refs.titulo.focus();
    }
}

</script>

<style>
.btn-salvar {
    background-color: #695cfed8;
    color: white;
}

.btn-salvar:hover {
    background-color: #695CFE;
    color: white;
}

</style>
