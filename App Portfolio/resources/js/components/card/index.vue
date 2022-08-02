<template>
    <div class="card-wrapper">
        <div v-if="Content.icon != null" class="icon-wrapper">
            <img :src="Content.icon" :alt="Content.title">
        </div>
        <div class="content-wrapper">
            <p>{{Content.data}}</p>
        </div>
    </div>
</template>
<script>
export default {
    name:'Card',
    props:{
        Content:Object
    }
}
</script>
<style scoped>
    .card-wrapper{
        display:flex;
        align-items:center;
        gap:0.5rem;
    }
    
    .icon-wrapper img{
        width:3.5rem;
        height:3.5rem;
        margin-right: 2rem;
    }
    
    .content-wrapper p{
        text-align: justify;
        font-size: .9rem;
    }

    @media screen and (min-width:412px) {
        .content-wrapper p{
            font-size:1rem;
        }
    }

    @media screen and (min-width:912px){
        .icon-wrapper img{
            width:3.75rem;
            height:3.75rem;    
        }

        .content-wrapper p{
            font-size:1.3rem;
        }
    }
</style>