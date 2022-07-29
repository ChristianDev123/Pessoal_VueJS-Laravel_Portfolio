<template>
    <div class="cards">
        <a :href="url">
            <img v-if="image.urlImage != undefined" :src="`http://localhost:8000${image.urlImage}`" :alt="name" class="technologie-image">
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
        width:15.7rem;        
        height:15.7rem;
        border-radius:1.2rem;
    }
</style>