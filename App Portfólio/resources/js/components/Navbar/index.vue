<template>
    <header>
        <section>
            <div v-for="button,index in buttons" :key="index">
                <Link :href="button.link">
                    <Home v-if="button.title == 'Home'" :active="button.activate"/>
                    <AboutMe v-else-if="button.title == 'Sobre mim'" :active="button.activate"/>
                    <Contacts v-else-if="button.title == 'Contatos'" :active="button.activate"/>
                    <Curriculum v-else-if="button.title == 'Currículo'" :active="button.activate"/>
                    <Projects v-else :active="button.activate"/>
                    <p :class="button.activate && 'active'">{{button.title}}</p>
                </Link>
            </div>
        </section>
    </header>
</template>

<style scoped>
    
    section{
        display:flex;
        justify-content: flex-end;
        align-items: center;
        gap:1.2rem;
    }

    section div a {
        color:inherit;
        text-decoration: none;
    }

    section div p{
        text-align:center;
    }

    section div img{
        height:60px;
        width:60px;
    }

    p.active, img.active {
        color:var(--main-color-red);
    }

</style>

<script>
    import AboutMe from './assets/about-me.vue';
    import Home from './assets/home.vue';
    import Projects from './assets/project.vue';
    import Curriculum from './assets/curriculum.vue';
    import Contacts from './assets/contacts.vue';
    import { Link } from '@inertiajs/inertia-vue3'
    
    export default {
        name:"navbar",
        data(){
            return{
                buttons:[
                    { title:"Home", activate:false, link:'/' },
                    { title:"Projetos", activate:false, link:'/projects' },
                    { title:"Contatos", activate:false, link:'/contacts' },
                    { title:"Sobre mim", activate:false, link:'/about-me' },
                    { title:"Currículo", activate:false, link:'/curriculum' }
                ]
            }
        },
        components:{
            Link,
            Home,
            AboutMe,
            Projects,
            Contacts,
            Curriculum
        },
        props:{
            page:String
        },
        created(){
            const arrBtns = this.buttons;
            switch(this.$props.page){
                case 'home':
                    arrBtns[0].activate = true;
                    break;
                case 'projects':
                    arrBtns[1].activate = true;
                    break;
                case 'contacts':
                    arrBtns[2].activate = true;
                    break;
                case 'about-me':
                    arrBtns[3].activate = true;
                    break;
                case 'curriculum':
                    arrBtns[4].activate = true;
                    break;
            }
            this.buttons = arrBtns;
        }
    }
</script>