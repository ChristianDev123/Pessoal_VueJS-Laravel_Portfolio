<template>
    <div class="cards">
        <div class="image">
            <img v-if="image.urlImage != undefined" :src="`https://portfolio-christian.herokuapp.com${image.urlImage}`" :alt="name" class="technologie-image">
        </div>
        <div class="description">
            <p>{{nameProject}}</p>
        </div>
    </div>
</template>
<script>
export default {
    name:'CardReady',
    data:()=>({
        nameProject:''
    }),
    created(){
        let arrName = this.$props.name;
        arrName = String(arrName).split('_');
        arrName = arrName[arrName.length-1];
        this.nameProject = arrName;
    },
    props:{
        image:Object,
        name:String
    },
}
</script>
<style scoped>
    .cards{
        width:5rem;
        height: 100%;
        margin:auto;
        border:1px solid rgba(0,0,0,0.3);
        border-radius:.7rem;
        display:flex;
        flex-direction:column;
    }

    .cards .image .technologie-image{
        border-top-left-radius:.7rem;
        border-top-right-radius:.7rem;
        width:100%;        
    }

    .cards .description{
        background:whitesmoke;
        display:flex;
        align-items:center;
        height:100%;
        border-bottom-left-radius:.7rem;
        border-bottom-right-radius:.7rem;
    }

    .cards .description p{
        width:100%;
        text-align:center;
        font-size: .6rem;
    }

    @media screen and (min-width:412px){
        .cards{
            width:6rem;
        }
    }

    @media screen and (min-width:540px){
        .cards{
            width:8rem;
        }
        .cards .description p{
            font-size: .8rem;
        }
    }

    @media screen and (min-width:768px) {
        .cards{
            width:11rem;
        }

        .cards .description p{
            font-size:1.2rem;
        }
    }

    @media screen and (min-width:912px){
        .cards{
            width:12rem;
        }
        .cards .description p {
            font-size:1.2rem;
        }
    }

    @media screen and (min-width:1024px){
        .cards{
            width:14rem;
        }
        
        .cards .description p {
            font-size: 1.4rem;
        }
    }

</style>