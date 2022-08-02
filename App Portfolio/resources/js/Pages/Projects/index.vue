<template>
    <Navbar page="projects"/>
    <main>
        <section class="title-area">
            <div class="title-page">
                <h2>TECNOLOGIAS UTILIZADAS</h2>
            </div>
        </section>
        <section class="selector-area">
            <div v-for="btn, index in btns" :key="index">
                <SelectionBtn v-if="btn.active" :label='btn.label' active @method="btn.method"/>
                <SelectionBtn v-else :label="btn.label" @method="btn.method"/>
            </div>
        </section>
        <section class="cards-area">
            <div v-if="btnDefault === 'study'">
                <CardStudy
                    v-for="technologie, index in studyProjects" 
                    :key="index"
                    :name="technologie.nameProject"
                    :image="technologie.image"
                    @click="setModal(technologie)"
                    />
            </div>
             <div v-if="btnDefault === 'ready'">
                <CardReady
                    v-for="technologie, index in readyProjects" 
                    :key="index"
                    :name="technologie.nameProject"
                    :image="technologie.image"
                    @click="setModal(technologie)"/>
            </div>
        </section>
        <ModalProject 
            :Enable="modalOpen"
            :Data="modalData"
            @setFalse="setModal"/>
    </main>
</template>
<style scoped>
    @import './styles/title.css';
    @import './styles/selector.css';
    @import './styles/cards.css';
</style>
<script>
import Navbar from '../../components/Navbar';
import SelectionBtn from './components/selectionbtn';
import CardStudy from './components/studycard';
import CardReady from './components/readycard';
import ModalProject from '../../components/ModalProject';
export default {
    data(){
        const app = this;
        return{ 
            btns:[
                {label:'Repositórios de Estudos', active:true, method:app.setStudy},
                {label:'Projetos prontos', active:false, method:app.setReadyProjets}
            ],
            studyProjects:[],
            readyProjects:[],
            btnDefault:'study',
            modalOpen:false,
            modalData:''
    }},
    components:{
        Navbar,
        SelectionBtn,
        CardStudy,
        CardReady,
        ModalProject
    },
    methods:{
        setStudy(){
            const arr = this.btns;
            for(let i in arr){
                arr[i].active = false;
            }
            arr[0].active = true;
            this.btns = arr;
            this.btnDefault = 'study';
        },
        setReadyProjets(){
            const arr = this.btns;
            for(let i in arr){
                arr[i].active = false;
            }
            arr[1].active = true;
            this.btns = arr;
            this.btnDefault = 'ready';
        },
        setModal(data){
            if(data){
                this.modalData = data;
            }
            this.modalOpen = !this.modalOpen;
            document.getElementsByTagName('html')[0].style.overflowY = this.modalOpen?'hidden':'auto';  
        },
        filterList(){
            const arrStudy = [];
            const arrReady = [];
            this.$props.data.map((tech)=>{
                if(tech.type == 'ready') arrReady.push(tech);
                else arrStudy.push(tech);
            });
            this.studyProjects = arrStudy;
            this.readyProjects = arrReady;
        },
    },
    created(){
        this.filterList();
        this.modalData = this.studyProjects[0];
    },
    props:{
        data:Array
    },
}
</script>