<template>
    <div class="modal" :class="openmodal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Add New Entry</p>
                <button class="delete" aria-label="close" @click="close"></button>
            </header>
            <section class="modal-card-body">
                <!-- Content ... -->
                <div class="field">
                    <label class="label">{{ list.name }}'s Details</label>
                    <div class="control">
                        <input class="input" :class="{'is-danger':errors.name}" type="text" placeholder="Name" v-model="list.name">
                    </div>
                    <small v-if="errors.name" class="has-text-danger">{{ errors.name[0] }}</small>
                </div>

                <div class="field">
                    <label class="label">Phone</label>
                    <div class="control">
                        <input class="input" :class="{'is-danger':errors.phone}" type="number" placeholder="phone" v-model="list.phone">
                    </div>
                    <small v-if="errors.phone" class="has-text-danger">{{ errors.phone[0] }}</small>
                </div>

                <div class="field">
                    <label class="label">Email</label>
                    <div class="control">
                        <input class="input" :class="{'is-danger':errors.email}" type="email" placeholder="Email" v-model="list.email">
                    </div>
                    <small v-if="errors.email" class="has-text-danger">{{ errors.email[0] }}</small>
                </div>

            </section>
            <footer class="modal-card-foot">
                <button class="button is-success" @click='save'>Save</button>
                <button class="button" @click="close">Cancel</button>
            </footer>
        </div>
    </div>
</template>

<script>
    export default {
       props:['openmodal'],
        data(){
           return{
               list:{
                   name:'',
                   phone:'',
                   email:''
               },
               errors:{}
           }
        },
        methods:{
            close(){
                this.$emit('closeRequest')
            },
            save(){

            }
        }
    }
</script>
