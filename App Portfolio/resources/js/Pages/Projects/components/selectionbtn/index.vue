<template>
    <div class="selection-btn">
        <p :class="active && 'activated'" @click="$emit('method')">{{label}}</p>
    </div>
</template>
<script>
export default {
    name:'SelectionBtn',
    props:{
        label:String,
        active:Boolean
    },
    emits:['method']
}
</script>
<style scoped>
    .selection-btn{
        width:15ch;
        cursor:default;
    }

    .selection-btn p{
        border-bottom:1px solid black;
        font-size:1.2rem;
        transition:.3s;
    }

    .selection-btn p.activated{
        font-weight:bold;
    }

    .selection-btn p:hover{
        font-weight: 700;
    }

    @media screen and (min-width:768px){
        .selection-btn{
            width:20ch;
        }

        .selection-btn p{
            font-size: 1.4rem;
        }
    }

    @media screen and (min-width:900px){
        .selection-btn{
            width:24ch;
        }
        
        .selection-btn p{
            font-size:1.7rem;
        }
    }

    @media screen and (min-width:1024px){
        .selection-btn{
            width:30ch;
        }

        .selection-btn p{
            font-size: 2rem;
        }
    }
</style>