<template>
    <!-- <div>
        sidebar
        <NavLink :href="route('inicio')">Configurações</NavLink>
        <NavLink :href="route('inicio')">Anotações</NavLink>
    </div> -->
    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="https://cdn-images-1.medium.com/max/1200/1*TkXVfLTwsHdwpUEjGzdi9w.jpeg" alt="logo-codesup">
                </span>

                <div class="text header-text">
                    <span class="name">CodeSup</span>
                    <span class="profession">Supporting</span>
                </div>
            </div>
        </header>
    </nav>
</template>

<script>
    import NavLink from '@/Components/NavLink.vue';

    export default {
        name: 'Sidebar',
        components: {
            NavLink
        }
    };
</script>

<style>

</style>
