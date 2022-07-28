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
        width:27ch;
        cursor:default;
    }

    .selection-btn p{
        border-bottom:1px solid black;
        font-size:1.8rem;
        transition:.3s;
    }

    .selection-btn p.activated{
        font-weight:bold;
    }

    .selection-btn p:hover{
        font-weight: 700;
    }
</style>