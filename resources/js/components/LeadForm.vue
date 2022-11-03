<template>
    <div class="container mx-auto my-4">
        <div v-if="success" class="bg-green-200 rounded-lg border border-green-400 px-6 py-4">
            Il messaggio è stato inviato con successo. Ti abbiamo mandato una mail di conferma.
        </div>
        <form v-else @submit.prevent="send" action="" class="grid lg:grid-cols-2 gap-8">
            <p>
                <input :class="[ errors.name ? 'border-red-400' : 'border-stone-200' , 'px-2 rounded-lg border border-stone-200']"
                type="text" 
                name="name" 
                v-model="name" 
                placeholder="Il tuo nome">
                <small v-if="errors.name" class="flex gap-3 text-red-400 text-sm">
                    <span v-for="(error, i) in errors.name" :key="i">{{ error }}</span>
                </small>
            </p> 
            <p>
                <input :class="[ errors.email ? 'border-red-400' : 'border-stone-200' , 'px-2 rounded-lg border border-stone-200']"
                type="email" 
                name="email" 
                v-model="email" 
                placeholder="Il tuo nome">
                <small v-if="errors.email" class="flex gap-3 text-red-400 text-sm">
                    <span v-for="(error, i) in errors.email" :key="i">{{ error }}</span>
                </small>
            </p> 
            <p class="col-span-2">
                <textarea :class="[ errors.message ? 'border-red-400' : 'border-stone-200' , 'px-2 rounded-lg border border-stone-200']"
                name="message" 
                v-model="message" 
                id=""
                cols="30"
                rows="3"
                placeholder="Il tuo nome"></textarea>
                <small v-if="errors.messsage" class="flex gap-3 text-red-400 text-sm">
                    <span v-for="(error, i) in errors.messsage" :key="i">{{ error }}</span>
                </small>
            </p> 

            <input :class="{
            'col-span-2 cursor-pointer w-full bg-indigo-400 hover:bg-indigo-600 px-4 py-2 uppercase rounded-lg text-[#FFF] font-semibold': true,
            'opacity-30 pointer-events-none': !isValid,
            'animate-pulse': sending
            }" type="submit" :value="sending? 'waiting' : 'invia'">

            
        </form>
    </div>
 </template>
 
 <script>
 export default {
    data(){
        return {
            name: '',
            email: '',
            message: '',
            errors: {},
            success: null,
            sending: false
        }
    },
    computed: {
        isValid(){
            return this.name && this.message && this.email
        }
    },
    methods: {
        send() {

            if(!this.isValid) {
                return
            }
            this.sending = true

            const data ={
                name: this.name,
                email: this.email,
                message: this.message
            }
            axios.post('/api/leads', data).then(res => {
                this.name = this.emal = this.message = ''
                this.errors = {}
                this.success = true
            }).catch(err => {
                console.log(err.response)
                this.errors = err.response.data.errors
            }).finally(() => {
                this.sending = false
            })
        }
    }
 };
 </script>
 
 <style lang="scss">
 </style>