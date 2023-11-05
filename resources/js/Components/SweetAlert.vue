<template>
</template>

<script>
import Swal from "sweetalert2";

export default {
    name: "SweetAlert",
    props: {
        mensagem: {
            type: Array,
            default: ["", ""],
        },
    },
    data() {
        return {
            tipo: "",
            textoMensagem: "",
        };
    },
    watch: {
        mensagem() {
            this.formataMensagem();
        },
    },
    methods: {
        formataMensagem() {
            this.tipo = this.mensagem[0];
            this.textoMensagem = this.mensagem[1];

            this.showToast({ type: this.tipo, text: this.textoMensagem });
        },
        showToast(message) {
            const Toast = Swal.mixin({
                toast: true,
                position: "bottom-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener("mouseenter", Swal.stopTimer);
                    toast.addEventListener("mouseleave", Swal.resumeTimer);
                },
            });

            Toast.fire({
                icon: message.type, // Pega o tipo de mensagem (success, error, etc.)
                title: message.text, // Pega o texto da mensagem
            });
        },
    },
    mounted() {
        console.log(this.mensagem)
    }
};
</script>
