<template>
    <Navbar page="curriculum"/>
    <main>
    <section>
        <section class='content-area'>
            <div class="inlustration-image">
                <img :src="defaultFormation.image" :alt="defaultFormation.alt">
            </div>
            <div class="content-list">
                <h2>Main Hard Skils</h2>
                <ul>
                    <li 
                        v-for="skill, index in hardSkills "
                        :key="index">
                        <Card :Content="skill"/>
                    </li>
                </ul>
            </div>
        </section>
        <section class="content-area">
            <div class="content-list">
                <h2>Main Soft Skills</h2>
                <ul>
                    <li
                        v-for="skill,index in softSkills"
                        :key="index">
                        <Card :Content="skill"/>
                    </li>
                </ul>
            </div>
            <div class="inlustration-image">
                <img :src="defaultCourses.image" :alt="defaultCourses.alt">
            </div>
        </section>
        <section class="content-area">
            <div class="inlustration-image">
                <img :src="defaultExperiences.image" :alt="defaultExperiences.alt">
            </div>
            <div class="content-list">
                <h2>Main Soft Skills</h2>
                <ul>
                    <li
                        v-for="work,index in works"
                        :key="index">
                        <Card :Content="work"/>
                    </li>
                </ul>
            </div>
        </section>
        <section class="btn-area">
        <a href="/download-curriculum">
            <Button label="Download"/>
        </a>
        </section>
    </section>
    </main>
</template>

<style scoped>
    @import './styles/content.css';
    @import './styles/btn.css';
</style>

<script>
import Button from '../../components/Button';
import Card from '../../components/card';
import Navbar from '../../components/Navbar';
import JS from './assets/javascript.svg';
import Kanban from './assets/kanban.jpg';
import NodeJS from './assets/nodejs-original.svg';
import Programming from './assets/programming.jpg';
import ReactJS from './assets/react.svg';
import SabespLogo from './assets/sabesp-logo.png';
import Windows from './assets/windows8-original.svg';
export default {
    data:()=>({
        defaultFormation:{image:Programming, alt:'Ferramentas de Programação'},
        defaultCourses:{image:Kanban,alt:'Soft Skills'},
        defaultExperiences:{image:SabespLogo, alt:'Sabesp (Companhia de Saneamento Básico do Estado de São Paulo)'},
        hardSkills:[
            {title:'Main Language JavaScript', icon:JS, data:'Principal Linguagem: JavaScript'},
            {title:'Main Framework ReactJS', icon:ReactJS, data:'Principal Framework Front-End: React.JS'},
            {title:'Main Tool Back-End', icon:NodeJS, data:'Principal Ferramenta Backend: Node.JS'},
            {title:'Main OS', icon:Windows, data:'Principal OS: Windows 10/11'},
        ],
        softSkills:[
            {title:'Proativity', icon:null, data:'Proatividade'},
            {title:'Good Relationship', icon:null, data:'Bom Relacionamento'},
            {title:'SCRUM', icon:null, data:'Conhecimento básico em SCRUM'},
        ],
        works:[
            {title:'Sabesp',icon:SabespLogo,data:'Sabesp - Assistente administrativo 2019 - 2021'},
        ]
    }),
    components:{
        Navbar,
        Card,
        Button,
    }
}
</script>