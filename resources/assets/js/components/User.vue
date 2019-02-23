<template>
    <div class="flex-center position-ref full-height">

        <div class="content">

            <b-card no-body>
                <h2 slot="header" class="mb-0">Users</h2>
                <b-tabs card v-model="tabIndex">

                    <!-- Render Tabs, supply a unique `key` to each tab -->
                    <b-tab v-for="type in types" :key="`dyntab-${type.id}`" :title="`${type.name}`">


                        <user-table :type="type" :tab="(tabIndex + 1)" :refreshCount="refreshCount"></user-table>

                    </b-tab>

                </b-tabs>
                <b-card-footer>
                    <a class="btn btn-info btn-sm pull-right" @click="refreshUsers()">Refresh Users</a>
                </b-card-footer>
            </b-card>


        </div>

    </div>
</template>

<script>

    export default {
        props : ['types'],
        methods:{
            activeTab(id){
                if((this.tabIndex + 1) == id){
                    this.active = true;
                    return true;
                }
                else{
                    this.active = false;
                    return false;
                }

            },
            refreshUsers(){
                console.log('refresh users');

                this.refreshCount = this.refreshCount + 1;
            }
        },
        data() {
            return {
                tabIndex: 0,
                refreshCount:0,

            }
        }
    }
</script>
<style scoped>
    html, body {
        background-color: #fff;
        color: #939b9f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }
    .title {
        font-size: 60px;
    }
    .subtitle {
        font-size: 20px;
    }
    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }
    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }
    .content {

    }
    .m-b-md {
        margin-bottom: 30px;
    }
</style>