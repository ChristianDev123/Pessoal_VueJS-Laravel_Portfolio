<template>
    <div
    class='modal-background'
    :style="`
        display:${Enable?'block':'none'};
        left:${Enable?'0':'-100%'};
    `"
    @click="$emit('setFalse')">
        <div class="modal-screen">
            <section class='content'>
                <div class="image-area">
                    <img :src="Data.image.urlImage" :alt="Data.nameProject">
                </div>
                <div class="data-area">
                    <div class="name-project">
                        <h2>{{Data.nameProject}}</h2>
                    </div>
                    <div class="description">
                        <h3>Descrição do projeto</h3>
                        <p>{{Data.description}}</p>
                    </div>
                    <div class="used-tecnologies">
                        <h3>Tecnologias utilizadas</h3>
                        <ul>
                            <li 
                                v-for="tecnologie,index in Data.namesTechnologies"
                                :key="index">
                                <p>{{tecnologie}}</p>
                            </li>
                        </ul>
                    </div>
                    <div class="topics">
                        <h3>Tópicos:</h3>
                        <ul>
                            <li 
                                v-for="topic,index in Data.topics"
                                :key="index">
                                <p>{{topic}}</p>
                            </li>
                        </ul>
                    </div>
                    <div class="create-date">
                        <p>{{new Date(Data.createDate).toLocaleDateString()}}</p>
                    </div>
                    <div class="btns">
                        <a :href="'https://github.com/ChristianDev123/' + Data.nameProject"
                            target="_blank">
                            <Button label="Repositório do projeto"/>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>
<script>
import Button from '../Button';
export default {
    name:'ModalProject',
    props:{
        Enable:Boolean,
        Data:Object
    },
    components:{
        Button
    },
    emits:['setFalse'],
}
</script>
<style scoped>
    @import './styles/modal.css';
</style>