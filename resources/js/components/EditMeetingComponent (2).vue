<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div  v-if="updated" class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Contact have been updated successfully!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card">
                    <div class="card-header">Update RAC Contact</div>
                    <div class="card-body">
                        <form @submit.prevent="submitForm" method="put">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <select  v-model="contact.title"
                                         class="form-control"
                                         id="title" required>
                                    <option>Mr</option>
                                    <option>Ms</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input v-model="contact.name"
                                       type="text"
                                       class="form-control"
                                       id="firstname"
                                       placeholder="First name"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input v-model="contact.lastName"
                                       type="text"
                                       class="form-control"
                                       id="lastname"
                                       placeholder="Last name"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input v-model="contact.email"
                                       type="email"
                                       class="form-control"
                                       id="email"
                                       placeholder="name@example.com"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="selectStatus">Status</label>
                                <select v-model="contact.status"
                                        class="form-control"
                                        id="selectStatus"
                                        required>
                                    <option disabled>Select a Status</option>
                                    <option v-for="(status, index) in statuses"
                                            :key="index"
                                            >{{status}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="selectRegion">Region</label>
                                <select v-model="contact.region_id"
                                        class="form-control"
                                        id="selectRegion"
                                        required>
                                    <option disabled>Select a Region</option>
                                    <option v-for="(region, index) in regions"
                                            :key="index"
                                            :value="region.id">{{region.name}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="selectRole">Role</label>
                                <select v-model="contact.role"
                                        class="form-control"
                                        id="selectRole"
                                        required>
                                    <option disabled>Select a Role</option>
                                    <option v-for="(role, index) in roles"
                                            :key="index"
                                    >{{role}}</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-dark mt-4" style="background:#b90f00">Update contact</button>
                            <router-link to="/admin">
                                <button type="button" class="btn btn-dark mt-4 mx-1" style="background:#b90f00">Back</button>
                            </router-link>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "EditContactComponent",
        data(){
            return {
                regions: [],
                errors : [],
                contact: {
                    id: '',
                    name: '',
                    lastName: '',
                    title : '',
                    email: '',
                    status: '',
                    region_id: '',
                    role: '',
                },
                statuses: ['active', 'inactive'],
                roles: ['admin', 'user'],
                updated: false,
            }
        },
        mounted() {
            this.getRegions();
            this.getContact(this.$route.params.contact_id);
        },
        methods: {

            getRegions(){
                axios.get('/api/region-index')
                    .then(res =>{
                        this.regions = res.data;
                    }).catch(err => {
                    this.errors = err;
                })
            },

            getContact(id){
              this.errors = [];
              axios.get('api/contact-show/'+id)
                .then(res => {
                    this.contact = res.data;
                    console.log(this.contact);
                }).catch(err => {
                    this.errors = err;
              })
            },
            submitForm(){
                this.errors = [];
                const id = this.contact.id;
                console.log('Updating: '+this.contact);
                axios.put('api/contact-update/'+id, this.contact)
                    .then(res => {
                        this.updated = true;
                    }).catch(err => {
                    this.errors = err;
                })
            }
        }
    }
</script>

<style scoped>

</style>
