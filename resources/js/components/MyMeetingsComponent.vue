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
                    <div class="card-header">My Meetings</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <router-link to="/home">
                                    <button type="button" class="btn btn-dark" style="background:#b90f00">Back</button>
                                </router-link>
                            </div>
                            <div class="col-md-8">

                            </div>
                        </div>

                                            <table class="table table-hover">
                                                <thead>

                                                <tr>

                                                    <th scope="col">Meeting Date</th>
                                                    <th scope="col">Meeting Time</th>
                                                      <th scope="col">Meeting Comment</th>
                                                    <th scope="col">Meeting Region</th>
                                                    <th scope="col">Date Created</th>
                                                    <th scope="col"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <template v-for="(meeting, index) in meetings">
                                                <tr>

                                                    <td>{{meeting.date}}</td>
                                                    <td>{{meeting.time}}</td>
                                                      <td>{{meeting.description}}</td>
                                                    <td>{{meeting.regionName}}</td>
                                                    <td>{{meeting.created_at}}</td>

                                                </tr>
                                                </template>
                                                <tr v-if="meetings.length == 0">
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
                let obj = JSON.parse(this.isLoggedIn);
                this.regionid = obj.region_id;
                //alert(this.regionid);
                var region = parseInt(this.regionid, 10)

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


                axios.get('/api/my-document/3')
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
