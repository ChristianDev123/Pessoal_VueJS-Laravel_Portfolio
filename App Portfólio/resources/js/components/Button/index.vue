<template>
    <div class="btn-wrapper">
        <input :class="empty?'empty-btn':'full-btn'" type="button" :value="label">
    </div>
</template>
<style scoped>
    .btn-wrapper input{
        font-size:1.2rem;
        border-radius:5px;
        font-weight:600;
        text-align:center;
        transition: .7s;
        width: 15rem;
        height:5rem;
    }

    .btn-wrapper input:hover{
        background:var(--second-color-red);
        color:#fff;
        border:none;
    }

    .btn-wrapper .empty-btn{
        border:1px solid black;
    }

    .btn-wrapper .full-btn{
        background:var(--main-color-red);
        color:#fff;
        border:none;
    }

</style>
<script>
export default {
    props:{
        label:String,
        empty:Boolean
    }
}
</script>