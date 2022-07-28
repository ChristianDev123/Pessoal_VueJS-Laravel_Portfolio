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
            <div v-for="technologie, index in filterData" :key="index">
                <CardStudy :name="technologie.nameProject" :image="technologie.image"/>
            </div>
        </section>
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
import CardStudy from './components/languagecards'
export default {
    data(){
        const app = this;
        return{ 
            btns:[
                {label:'Repositórios de Estudos', active:true, method:app.setStudy},
                {label:'Projetos prontos', active:false, method:app.setReadyProjets}
            ],
            filterData:[],
            btnDefault:'study'
    }},
    components:{
        Navbar,
        SelectionBtn,
        CardStudy
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
        filterList(valueType){
            this.filterData = this.$props.data.map((tech)=>{
                if(tech.type == valueType) return tech;
            });
        },
    },
    mounted(){
        this.filterList(this.btnDefault);
        console.log(this.filterData)
    },
    props:{
        data:Array
    },
}
</script>