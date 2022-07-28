<template>
    <Navbar page="home"/>
    <main>
        <section id='welcome-area'>
            <section class="picture">
                <img class='dev-image' src="./assets/MyImage.jpeg" alt="Developer Image">
                <div id="line"></div>
            </section>
            <section class="apresentation-area">
                <div class="welcome">
                    <h2>
                        Olá, <br/>
                        Eu sou o Christian! <br/>
                        Desenvolvedor
                    </h2>
                    <p>
                        Trabalho com desenvolvimento web front-end e <br/> 
                        back-end. As principais ferramentas que utilizo é <br/>
                        React.JS, Vue.JS, Node.JS e Laravel 8.
                    </p>
                </div>
            </section>
        </section>
        <section class="btn-area">
            <Link href="/contacts">
                <Button :empty="true" label="Contrate-me"/>
            </Link>
            <Link href="/projects">
                <Button :empty="false" label="Ver Projetos"/>
            </Link>
        </section>
    </main>
</template>

<style scoped>
    @import './styles/picture.css';
    @import './styles/apresentation.css';

    #welcome-area{
        width:100%;
        display:flex;
        justify-content: space-around;
    }

    .btn-area{
        margin:10%;
    }

</style>

<script>
import Navbar from '../../components/Navbar';
import Button from '../../components/Button';
import { Link } from '@inertiajs/inertia-vue3'
export default {
    components:{
        Navbar,
        Button,
        Link
    }
}
</script>