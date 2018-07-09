<template>
    <div class="modal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Modal title</p>
                <button class="delete" aria-label="close" @click="close"></button>
            </header>
            <section class="modal-card-body">
               <li class="panel-block">
                   <label class="column is-2">Name</label> {{ list.name}}
               </li>

                <li class="panel-block">
                    <label class="column is-2">phone</label> {{ list.phone}}
                </li>

                <li class="panel-block">
                    <label class="column is-2">Email</label> {{ list.email}}
                </li>


                <div class="field">
                    <label class="label">Phone</label>
                    <div class="control">
                        {{ list.phone }}
                    </div>

                </div>

                <div class="field">
                    <label class="label">Email</label>
                    <div class="control">
                       {{ list.email }}
                    </div>
                </div>

            </section>
            <footer class="modal-card-foot">

                <button class="button" @click="close">Cancel</button>
            </footer>
        </div>
    </div>

</template>

<script>
    export default {
        props: ['openmodal'],
        date(){
            return{
                list: ''
            }
        },
        methods:{
            close(){
                this.$emit('closeRequest')
            },
        }
    }
</script>

<style scoped>

</style>