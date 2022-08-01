<template>
    <div class='contact-method'>
        <div class='image-wrapper'>
            <img :src="Contact.icon" :alt="Contact.midia">
        </div>
        <div class='content'>
            <p>{{Contact.content}}</p>
        </div>
    </div>
</template>
<script>
export default {
    name:'ContactMethod',
    props:{
        Contact:Object
    }
}
</script>
<style scoped>
    @import '../../styles/contact-method.css';
</style>