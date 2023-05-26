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
                    <div class="card-header">Admin</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <select v-model="selected"
                                        class="custom-select custom-select-lg mb-3"
                                        @change="handleChange()">
                                       <option selected>Select a Region</option>
                                    <option v-for="(region, index) in regions" :key="index" :value="region.id">{{region.name}}</option>
                                </select>
                            </div>
                            <div class="col-md-8">
                                <router-link to="/addContact">
                                    <button type="button" class="btn btn-dark" style="background:#b90f00">Add New Contact</button>
                                </router-link>
                                <router-link to="/manageRegions">
                                    <button type="button" class="btn btn-dark" style="background:#b90f00">Manage Regions</button>
                                </router-link>

                                <router-link to="/manageMeetings">
                                    <button type="button" class="btn btn-dark" style="background:#b90f00">Manage Meetings</button>
                                </router-link>
                                 <router-link to="/admin-group-chat">
                                    <button type="button" class="btn btn-dark" style="background:#b90f00">Group Chat</button>
                                </router-link>
                                <router-link to="/admin-chat">
                                    <button type="button" class="btn btn-dark" style="background:#b90f00">Private Chat</button>
                                </router-link>

                            </div>
                        </div>

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
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
                                    <th scope="row">{{index}}</th>
                                    <td>{{contact.title}}</td>
                                    <td>{{contact.name}}</td>
                                    <td>{{contact.lastName}}</td>
                                    <td>{{contact.email}}</td>
                                    <td>{{getRegionName(contact.region_id)}}</td>
                                    <td>{{contact.status}}</td>
                                    <td>
                                        <v-btn text @click="updateContact(contact.id)"><v-icon color="dark">mdi-pencil</v-icon></v-btn>
                                        <v-btn v-if="isUser(contact)" text @click="deleteContact(contact.id)"><v-icon color="#b90f00">mdi-delete</v-icon></v-btn>
                                    </td>
                                </tr>
                            </template>
                            <tr v-if="contacts.length == 0">
                                <td colspan="6" class="mt-auto text-center" >
                                    <strong>No data available for this region</strong>
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
</template>

<script>
    export default {
        name: "AdminController",
        data(){
            return{
                contacts: [],
                errors : [],
                regions: [],
                selected: 0,
                deleted : false,
            }
        },
        mounted(){
            this.getRegions();
            this.getContacts();

            axios.interceptors.response.use(null, (error) => {
    if(error.response && error.response.status == 419) {
        // session timed out | not authenticated
        window.location.href = '/login';
    }
    return Promise.reject(error);
});

            
        },
        methods: {
            getContacts(){
                this.errors = [];
                axios.get('api/contact-index')
                    .then(res => {
                        this.contacts = res.data;
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
            getRegionName(region_id){
                let regionName = this.regions.filter(region => region.id == region_id)
                    .map(region => region.name).toString();
                return regionName;
            },
            handleChange(){
                this.errors = [];
                if(this.selected == 10){
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
