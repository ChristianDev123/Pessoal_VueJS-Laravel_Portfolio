<template>
    <div class="cards">
        <a :href="url">
            <img v-if="image.urlImage != undefined" :src="`https://portfolio-christian.herokuapp.com${image.urlImage}`" :alt="name" class="technologie-image">
        </a>
    </div>
</template>
<script>
export default {
    name:'CardStudy',
    props:{
        dataUrl:String,
        image:Object,
        name:String
    },
}
</script>
<style scoped>
    .cards{
        display:flex;
        justify-content: center;
    }
    .cards .technologie-image{
        width:5rem;        
        height:5rem;
        border-radius:1.2rem;
    }

    @media screen and (min-width:412px) {
        .cards .technologie-image{
            width:6rem;
            height:6rem;
        }
    }

    @media screen and (min-width:540px) {
        .cards .technologie-image{
            width:7.5rem;
            height:7.5rem;
        }
    }

    @media screen and (min-width:768px) {
        .cards .technologie-image{
            width:10.5rem;
            height:10.5rem;
        }
    }

    @media screen and (min-width:912px) {
        .cards .technologie-image{
            width:13rem;
            height:13rem;
        }
    }
</style>