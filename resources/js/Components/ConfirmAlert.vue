<template>
    <button :class="classe" @click.prevent="showConfirm">
        <slot />
    </button>
</template>

<script>
import Swal from "sweetalert2";

export default {
    name: "ConfirmAlert",
    props: {
        titulo: {
            type: String,
            default: "Você tem certeza?"
        },
        texto: {
            type: String,
            default: "Essa ação não poderá ser revertida"
        },
        classe: {
            type: String,
            default: "btn-primary"
        },
        parametros: {
            type: Object,
            default: () => ({})
        },
        rota: {
            type: String,
            required: true
        },
        metodo: {
            type: String,
            default: 'post'
        },
    },
    data() {
        return {
            tipo: "",
            textoMensagem: "",
        };
    },
    methods: {
        showConfirm() {
            Swal.fire({
                title: this.titulo,
                text: this.texto,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirmar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    if(this.metodo == 'delete'){
                        this.$inertia[this.metodo](this.rota);
                    }else{
                        this.$inertia[this.metodo](this.rota, this.parametros);
                    }
                }

            })
        },
    },
};
</script>
