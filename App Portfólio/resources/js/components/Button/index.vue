<template>
    <div class="btn-wrapper">
        <input
            :class="empty?'empty-btn':'full-btn'"
            type="button"
            :value="label">
    </div>
</template>
<style scoped>
    @import './styles/btn.css';
</style>
<script>
export default {
    props:{
        func:Boolean,
        label:String,
        empty:Boolean
    },
    emits:['function']
}
</script>