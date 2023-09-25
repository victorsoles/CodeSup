<template>
    <div class="card shadow">
        <div class="d-flex justify-content-between border-0 mt-2 mb-1 mx-3">
            <h5 class="mb-0" v-if="titulo">{{ titulo }}</h5>
            <div class="">
                <a v-if="fechavel" href="#" @click.prevent="dadosVisiveis = !dadosVisiveis"
                class="d-flex justify-content-center border p-1 rounded">
                    <box-icon v-if="!dadosVisiveis" name='show' ></box-icon>
                    <box-icon v-if="dadosVisiveis" name='low-vision' ></box-icon>
                </a>
            </div>
        </div>

        <div class="card-body" v-show="dadosVisiveis">
            <!-- Conteúdo do card -->
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Card',
        data() {
            return {
                dadosVisiveis: this.visivel,
            }
        },
        props: {
            titulo: String,
            fechavel: {
                type: Boolean,
                default: false
            },
            visivel: {
                type: Boolean,
                default: true
            },
        }
    }
</script>

<style>
.card {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    border: none;
}
</style>
