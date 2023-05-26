<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div  v-if="deleted" class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Contact deleted successfully!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="card">
                    <div class="card-header">Welcome to RAC Portal</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <router-link to="/mymeetings">
                                    <button type="button" class="btn btn-dark" style="background:#b90f00">View My Meetings</button>
                                </router-link>
                                <router-link to="/mydocuments">
                                    <button type="button" class="btn btn-dark" style="background:#b90f00">View My Documents</button>
                                </router-link>
                                 <router-link to="/mynewsletters">
                                 <button type="button" class="btn btn-dark" style="background:#b90f00">View My Newsletters</button>
                                 </router-link>
								  <router-link to="/group-chat">
                                 <button type="button" class="btn btn-dark" style="background:#b90f00">Group Chat</button>
                                 </router-link>
                                   <router-link to="/my-chat">
                                 <button type="button" class="btn btn-dark" style="background:#b90f00">Private Chat</button>
                                 </router-link>
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>

                        <table class="table table-hover">
                            <thead>
                            <tr>
<!--                                <th scope="col">#</th>-->
                                <th scope="col">Title</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Region</th>
                                <th scope="col">status</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>

                            <template v-for="(contact, index) in contacts">
                                <tr>
<!--                                    <th scope="row">{{index}}</th>-->
                                    <td>{{contact.title}}</td>
                                    <td>{{contact.name}}</td>
                                    <td>{{contact.lastName}}</td>
                                    <td>{{contact.email}}</td>
                                    <td>{{contact.regioName}}</td>
                                    <td>{{contact.status}}</td>
                                    <td>
<!--                                        <v-btn text @click="updateContact(contact.id)"><v-icon color="dark">mdi-pencil</v-icon></v-btn>-->
<!--                                        <v-btn v-if="isUser(contact)" text @click="deleteContact(contact.id)"><v-icon color="#b90f00">mdi-delete</v-icon></v-btn>-->
                                    </td>
                                </tr>
                            </template>
                            <tr v-if="contacts.length == 0">
                                <td colspan="6" class="mt-auto text-center" >
                                    <strong>No data available</strong>
                                </td>
                            </tr>
                            <div v-if="errors.length > 0" class="alert-danger">
                                {{errors[0]}}
                            </div>
                            </tbody>
                        </table>


                    </div>


                </div>


                    </div>
                </div>
            </div>
        </div>
    </div>






</template>




<script>
    export default {
        name: "HomeController",
        data(){
            return{
                myRegion:[],
                doc: {
                    id: '',
                    refNo: '',
                    name: '',
                    file: '',
                    description: '',
                    region_id: ''},
                contacts: [],
                meetings: [],
                mydocuments: [],
                documents: [],
                errors : [],
                regions: [],
                selected: 0,
                deleted : false,
                isLoggedIn:$("meta[name=login-data]").attr('content'), // for the meta field method, or:,
                isAdmin : false,
                role: 'user',
                userId: '',
        }
        },
        mounted(){
            this.getRegions();
            this.getContacts();
            this.getmyMeeting();
            this.getMyDocuments();
            this.doc = this.getContacts;
            //this.getMyRegion();
            this.getVars();

        },
        methods: {
            getContacts(){
                this.errors = [];
                // axios.get('api/contact-index')
                // .then(res => {
                //    this.contacts = res.data;
                // }).catch(err =>{
                //     this.errors = err;
                // })
                let obj = JSON.parse(this.isLoggedIn);
                this.userId = obj.id;
                var region = parseInt(this.userId, 10);
               // alert(this.userId);
                axios.get('/api/my-region/' + region)
                    .then(res => {
                        this.contacts = res.data;

                    }).catch(err =>{
                    this.errors = err;
                })
            },

            getmyMeeting(){
                this.errors = [];
                // axios.get('api/contact-index')
                // .then(res => {
                //    this.contacts = res.data;
                // }).catch(err =>{
                //     this.errors = err;
                // })
                let obj = JSON.parse(this.isLoggedIn);
                this.userId = obj.id;
                var region = parseInt(this.userId, 10);
              //  alert(this.userId);
                axios.get('/api/my-meeting/' + region)
                    .then(res => {
                        this.meetings = res.data;

                    }).catch(err =>{
                    this.errors = err;
                })
            },

            getRegions(){
                this.errors = [];
                axios.get('/api/region-index')
                    .then(res => {
                        this.regions = res.data;
                    }).catch(err =>{
                    this.errors = err;
                })
            },
            getVars(){
                this.errors = [];
                let user = this.isLoggedIn;
                let obj = JSON.parse(this.isLoggedIn);
                this.userId = obj.id;
                console.log(this.userId);


                let role = obj.role;
               // console.log(obj.role);
               // console.log(JSON.parse(user));
                // Object {name:"Skip",age:2,favoriteFood:"Steak"}



            },

            getMyRegion(){
                this.errors = [];
                axios.get('/api/my-region/' + this.userId)
                    .then(res => {
                        this.myRegion = res.data;
                    }).catch(err =>{
                    this.errors = err;
                })
            },

            getMyDocuments(){

             var region = parseInt(this.userId, 10);
                axios.get('/api/my-document/ + region')
                    .then(res => {
                        this.documents = res.data;
                    }).catch(err =>{
                    this.errors = err;
                })
            },

            getMyMeetings(){
                this.errors = [];

                axios.get('/api/my-region/' +this.userId)
                    .then(res => {
                        this.myRegion = res.data;
                    }).catch(err =>{
                    this.errors = err;
                })
            },

            getRegionName(region_id){
                let regionName = this.regions.filter(region => region.id == region_id)
                                            .map(region => region.name).toString();
                return regionName;
            },
            handleChange(){
                this.errors = [];
                if(this.selected == 0){
                    this.getContacts();
                }else{
                    axios.get('api/region-getContactsByRegion/'+this.selected)
                        .then(res => {
                            this.contacts = res.data;
                        }).catch(err =>{
                        this.errors = err;
                    })
                }
            },
            updateContact(id){
                this.$router.push({name: 'EditContactComponent', params: {contact_id: id}});
            },
            deleteContact(id){
                this.errors = [];
                 axios.post('api/contact-delete/'+id)
                .then(res => {
                    this.deleted = true;
                    this.getContacts();
                }).catch(err => {
                    this.errors = err;
                })
            },

            isUser(contact){
                return contact.role == 'user';
            },
            clear(){

            }
        }
    }
</script>
