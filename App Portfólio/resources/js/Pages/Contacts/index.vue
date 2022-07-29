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
                    <div class='contact-method'>
                        <div class="image-wrapper">
                            <img :src="contact.icon" :alt="contact.midia">
                        </div>
                        <div class='content'>
                            <p>{{contact.content}}</p>
                        </div>
                    </div>
                </a>
                <div class='contact-method' v-else>
                    <div class='image-wrapper'>
                        <img :src="contact.icon" :alt="contact.midia">
                    </div>
                    <div class='content'>
                        <p>{{contact.content}}</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</template>

<style scoped>
    .contacts{
        display:grid;
        grid-template-columns: repeat(2,50%);
        grid-row-gap: 50%;
        padding:4.3rem;
    }

    .contacts .contact .contact-method{
        display:flex;
        align-items:center;

    }

    .contacts .contact .contact-method .content{
        padding: 0 1.5rem;
    }

    .contacts .contact .contact-method .content p{
        font-size:1.5rem;
        color:#000;
    }

</style>

<script>
import GithubIcon from './assets/github.svg';
import GmailIcon from './assets/gmail.svg';
import LinkedInIcon from './assets/linkedin.svg';
import PhoneIcon from './assets/phone.svg';
import Navbar from '../../components/Navbar'
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
        Navbar
    }
}
</script>