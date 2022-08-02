<template>
    <Navbar page="contacts"/>
    <main>
        <section class="contacts">
            <div class="contact"
                v-for="contact,index in contacts"
                :key="index">
                <a :href="'https://' + contact.content"
                    target="_blank"
                    v-if="contact.link">
                    <ContactMethod :Contact="contact"/>
                </a>
                <div v-else>
                    <ContactMethod :Contact="contact"/>
                </div>
            </div>
        </section>
    </main>
</template>

<style scoped>
    @import './styles/contacts.css';
</style>

<script>
import GithubIcon from './assets/github.svg';
import GmailIcon from './assets/gmail.svg';
import LinkedInIcon from './assets/linkedin.svg';
import PhoneIcon from './assets/phone.svg';
import Navbar from '../../components/Navbar';
import ContactMethod from './components/contact-method/index';
export default {
    data:()=>({
        contacts:[
            {midia:'Phone', content:'011 948423153', icon:PhoneIcon, link:false},
            {midia:'Email', content:'christian.lima999@gmail.com', icon:GmailIcon, link:false},
            {midia:'LinkedIn', content:'linkedin.com/in/christian-santana-developer', icon:LinkedInIcon, link:true},
            {midia:'GitHub', content:'github.com/ChristianDev123', icon:GithubIcon, link:true}
        ]
    }),
    components:{
        Navbar,
        ContactMethod
    }
}
</script>