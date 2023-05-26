<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div v-for="(errorArray, idx) in notifmsg" :key="idx" class="alert alert-danger alert-dismissible fade show" role="alert">
                    <div v-for="(allErrors, idx) in errorArray" :key="idx">
                        <span class="text-danger">{{ allErrors}} </span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                
                <div  v-if="created" class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>New Contact added successfully!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card">
                    <div class="card-header">Add New RAC Contact</div>
                    <div class="card-body">
                        <form @submit.prevent="submitForm" method="post">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <select  v-model="contact.title" class="form-control" id="title" required>
                                    <option>Mr</option>
                                    <option>Ms</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="firstname">First name</label>
                                <input v-model="contact.name"
                                       type="text"
                                       class="form-control"
                                       id="firstname"
                                       placeholder="First name"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="lastname">Last name</label>
                                <input v-model="contact.lastName"
                                       type="text"
                                       class="form-control"
                                       id="lastname"
                                       placeholder="Last name"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input v-model="contact.email"
                                       type="email"
                                       class="form-control"
                                       id="email"
                                       placeholder="name@example.com"
                                       required>

                            </div>
                            <div class="form-group">
                                <label for="selectRegion">Region</label>
                                <select v-model="contact.region_id"
                                        class="form-control"
                                        id="selectRegion"
                                        required>
                                    <option disabled>Select a region</option>
                                    <option v-for="(region, index) in regions"
                                            :key="index"
                                            :value="region.id">{{region.name}}</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-dark mt-4" style="background:#b90f00">Add new contact</button>
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
        name: "CreateContactComponent",
        data(){
            return {
                regions: [],
                errors : [],
                notifmsg: '',
                contact: {
                    name: '',
                    lastName: '',
                    title : 'Mr',
                    email: '',
                    region_id: 1,
                },
                created: false,
            }
        },
        mounted() {
            this.getRegions();
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
            submitForm(){
                this.errors = [];
                console.log(this.contact);
                $('#loader').show();
                axios.post('api/contact-store', this.contact)
                .then(res => {
                    this.created = true;
                       $('#loader').hide();
                    this.clear();
                    console.log(res);

                }).catch(err => {
                    this.errors = err;
                    this.notifmsg = err.response.data;
                })
            },
            clear(){
                this.$contact.title = 'Mr';
                this.$contact.name = '';
                this.$contact.lastName = '';
                this.$contact.email = '';
                this.notifmsg = '';
            }
        }
    }
</script>

<style scoped>

</style>
