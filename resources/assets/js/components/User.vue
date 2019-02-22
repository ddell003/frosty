<template>
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">Users </div>

            <b-card no-body>
                <b-tabs card>
                    <!-- Render Tabs, supply a unique `key` to each tab -->
                    <b-tab v-for="type in types" :key="`dyntab-${type.id}`" :title="`${type.name}`">
                        Tab Contents {{ type.name }}

                        <div>
                            <b-table striped hover :items="items" />
                        </div>

                    </b-tab>

                </b-tabs>
            </b-card>
        </div>

    </div>
</template>

<script>

    export default {
        props : ['title', 'author', 'types'],
        data() {
            return {
                items: [
                    { isActive: true, age: 40, first_name: 'Dickerson', last_name: 'Macdonald' },
                    { isActive: false, age: 21, first_name: 'Larsen', last_name: 'Shaw' },
                    { isActive: false, age: 89, first_name: 'Geneva', last_name: 'Wilson' },
                    { isActive: true, age: 38, first_name: 'Jami', last_name: 'Carney' }
                ],
                tabs: [
                    1,2,3
                ],
                types2:[
                    {id: 1, name:'Website Administrator'},
                    {id: 2, name:'Clients'},
                    {id: 3, name:'Customers'},
                    {id: 4, name:'Employees'},

                ],

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
        text-align: center;
    }
    .m-b-md {
        margin-bottom: 30px;
    }
</style>