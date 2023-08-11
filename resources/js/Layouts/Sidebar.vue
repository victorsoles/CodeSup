<template>
    <nav class="sidebar close">
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

            <box-icon name='chevron-right' class="toggle"></box-icon>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">

                    <li class="nav-link">
                        <NavLink :href="route('inicio')">
                            <box-icon name='home-alt' class="icon"></box-icon>
                            <span class="text nav-text">Dashboard</span>
                        </NavLink>
                    </li>

                    <li class="nav-link">
                        <a @click.prevent="abreMenu">
                            <box-icon name='note' class="icon"></box-icon>
                            <span class="text nav-text">Anotações</span>
                            <box-icon name='chevron-right' class="dropdown" :class="{ rotated: menuAberto }"></box-icon>
                        </a>
                    </li>

                    <ul class="sub-link" :class="{ open: menuAberto }">
                        <li class="nav-link sub-menu">
                            <NavLink :href="route('inicio')">
                                <box-icon name='plus-circle' class="icon"></box-icon>
                                <span class="text nav-text">Nova</span>
                            </NavLink>
                        </li>
                        <li class="nav-link sub-menu">
                            <NavLink :href="route('inicio')">
                                <box-icon name='list-ul' class="icon"></box-icon>
                                <span class="text nav-text">Listar</span>
                            </NavLink>
                        </li>
                    </ul>


                    <li class="nav-link">
                        <NavLink :href="route('inicio')">
                            <box-icon name='star' class="icon"></box-icon>
                            <span class="text nav-text">Acesso Rápido</span>
                        </NavLink>
                    </li>

                    <li class="nav-link">
                        <NavLink :href="route('inicio')">
                            <box-icon name='cog' class="icon"></box-icon>
                            <span class="text nav-text">Configurações</span>
                        </NavLink>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <box-icon name='log-out' class="icon"></box-icon>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                <li class="mode">
                    <div class="moon-sun">
                        <box-icon name='moon' class="icon i moon"></box-icon>
                        <box-icon name='sun' class="icon i sun"></box-icon>
                    </div>

                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>
</template>

<script>
    import NavLink from '@/Components/NavLink.vue';
    import NavLi from '@/Components/NavLi.vue';

    export default {
        name: 'Sidebar',
        components: {
            NavLink,
            NavLi
        },
        data() {
            return {
                menuAberto: false
            }
        },
        methods: {
            abreMenu() {
                this.menuAberto = !this.menuAberto;
            }
        },
        mounted(){
            const body = document.querySelector("body"),
                sidebar = document.querySelector(".sidebar"),
                toggle = body.querySelector(".toggle"),
                modeSwitch = body.querySelector(".toggle-switch"),
                modeText = body.querySelector(".mode-text");

            toggle.addEventListener("click", () =>{
                sidebar.classList.toggle("close");
            });

            modeSwitch.addEventListener("click", () =>{
                body.classList.toggle("dark");

                if(body.classList.contains("dark")){
                    modeText.innerText = "Ligth Mode"
                }else{
                    modeText.innerText = "Dark Mode"
                }
            });

        }
    };
</script>

<style>

</style>
