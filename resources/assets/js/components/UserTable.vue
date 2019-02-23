<template>

    <div>

        <b-table striped hover :items="users"/>
        <div v-if="loadingUsers" class="text-center">
            <b-spinner variant="primary" label="Spinning" />


        </div>
        <div v-if="refreshUsers" class="card-text alert alert-warning" refreshUsers>Refreshed: {{refreshCount}}</div>
        {{activeTab}}

    </div>

</template>

<script>

    function User({id, name, email}){
        this.id = id;
        this.name = name;
        this.email = email;
    }


    export default {
        props : ['type', 'tab','refreshCount'],
        computed:{
            activeTab: function () {

                if(this.type.id == this.tab && this.users.length == 0){
                    this.active = true;
                    this.read(this.type.id)
                }
            },
            refreshUsers: function (){


                if(this.refreshCount !=  this.childRefreshCount && this.usersLoaded){
                    console.log('refreshing....');
                    this.clearCache = true;
                    this.users = [];
                    return true;
                }
                else{
                    return false;
                }
            },
            loadingUsers: function(){
                return !this.usersLoaded;
            },
            userLength: function(){
                return this.users.length;
            }

        },
        methods:{

            read(type) {

                var clear = '';
                if(this.clearCache){
                    clear = '&clearCache=true';
                }






                window.axios.get('/api/users?type='+type+clear).then(({ data }) => {
                    data.forEach(crud => {
                        this.users.push(new User(crud));
                    });
                this.clearCache = false;
                this.usersLoaded = true;
                return this.users

                });

            },


        },
        data() {
            return {

                users:[],
                userList:this.activeTab,
                usersLoaded:false,
                active:false,
                refreshedUser:false,
                childRefreshCount:0,
                clearCache:false,
                totalUser:parseInt(this.type.users_count)

            }
        }
    }
</script>

<style scoped>

</style>