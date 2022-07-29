<template>
    <div class="cards">
        <a :href="url">
            <div class="image">
                <img v-if="image.urlImage != undefined" :src="`http://localhost:8000${image.urlImage}`" :alt="name" class="technologie-image">
            </div>
            <div class="description">
                <p>{{name}}</p>
            </div>
        </a>
    </div>
</template>
<script>
export default {
    name:'CardReady',
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
        justify-content:center;
    }

    .cards a:first-of-type{
        width:15.7rem;
        height:18.1rem;
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
    }
</style>