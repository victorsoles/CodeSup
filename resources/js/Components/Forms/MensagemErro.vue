<template>
    <div class="badge bg-label-danger mt-1 p-2 mx-auto" v-if="mensagem">
        {{ mensagem }}
    </div>
</template>

<script>
    export default {
        name: "MensagemErro",
        props: {
            mensagem: String,
        },
    };
</script>

<style lang="scss" scoped>
    .bg-label-danger {
        background-color: #ffe0db !important;
        color: #ff3e1d !important;
    }
</style>
