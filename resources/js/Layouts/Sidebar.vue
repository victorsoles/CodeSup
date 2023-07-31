<template>
    <!-- <div>
        sidebar
        <NavLink :href="route('inicio')">Configurações</NavLink>
        <NavLink :href="route('inicio')">Anotações</NavLink>
    </div> -->
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
                        <a href="#">
                            <box-icon name='home-alt' class="icon"></box-icon>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <box-icon name='note' class="icon"></box-icon>
                            <span class="text nav-text">Anotações</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <box-icon name='star' class="icon"></box-icon>
                            <span class="text nav-text">Acesso Rápido</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <box-icon name='cog' class="icon"></box-icon>
                            <span class="text nav-text">Configurações</span>
                        </a>
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

    export default {
        name: 'Sidebar',
        components: {
            NavLink
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
