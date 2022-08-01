<template>
    <Navbar page="about-me"/>
    <main>
    <section>
        <section class='formation content-area'>
            <div class="inlustration-image">
                <img :src="defaultFormation.image" :alt="defaultFormation.alt">
            </div>
            <div class="content-list">
                <h2>Formação acadêmica</h2>
                <ul>
                    <li 
                        v-for="formation, index in formations "
                        :key="index">
                        <Card :Content="formation"/>
                    </li>
                </ul>
            </div>
        </section>
        <section class="extra-courses content-area">
            <div class="content-list">
                <h2>Cursos extracurriculares</h2>
                <ul>
                    <li
                        v-for="course,index in extraCourses"
                        :key="index">
                        <Card :Content="course"/>
                    </li>
                </ul>
            </div>
            <div class="inlustration-image">
                <img :src="defaultCourses.image" :alt="defaultCourses.alt">
            </div>
        </section>
    </section>
    </main>
</template>

<style scoped>
    @import './styles/content.css';
</style>

<script>
import Navbar from '../../components/Navbar';
import Card from '../../components/card/index.vue';
import HighSchoolIcon from './assets/highschool.svg';
import TechnicalIcon from './assets/technicalschool.svg';
import JS from './assets/javascript.svg';
import React from './assets/react.svg';
import Java from './assets/java.svg';
import Spring from './assets/spring.svg';
import SenaiImage from './assets/SenaiImage.jpeg';
import CoursesImage from './assets/CoursesImage.jpg';

export default {
    data:()=>({
        defaultFormation:{image:SenaiImage, alt:'SENAI Suíço-Brasileira - Paulo Ernesto Tolle'},
        defaultCourses:{image:CoursesImage ,alt:'Cursos Extracurriculares'},
        formations:[
            {title:'Ensino Médio', icon:HighSchoolIcon, data:'Ensino Médio - completo'},
            {title:'Ensino Técnico', icon:TechnicalIcon, data:'Ensino Técnico - SENAI Suíço-Brasileira - 3º semestre'}
        ],
        extraCourses:[
            {title:'JavaScript course', icon:JS, data:'Imersão Dev Alura - 2021'},
            {title:'React course', icon:React, data:'Imersão React Alura - 2022'},
            {title:'Spring course', icon:Spring, data:'SpringBoot-React DevSuperior - 2022'},
            {title:'Java course', icon:Java, data:'Imersão Java Alura - 2022'},
        ]
    }),
    components:{
        Navbar,
        Card
    }
}
</script>