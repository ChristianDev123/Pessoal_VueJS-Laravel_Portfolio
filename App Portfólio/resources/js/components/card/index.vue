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
        width:3.75rem;
        height:3.75rem;
        margin-right: 2.2rem;
    }
    
    .content-wrapper p{
        text-align: justify;
        font-size: 1.5rem;
    }
</style>