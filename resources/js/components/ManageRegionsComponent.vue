<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div  v-if="created" class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>New Region added successfully!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div  v-if="deleted" class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>New Region deleted successfully!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div  v-if="updated" class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Region have been updated successfully!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div v-if="errors.length > 0">
                    <div  v-for="(error, index) in errors"
                          :key="index"
                          class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{error}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Manage RAC Region</div>
                    <div class="card-body">
                        <button type="button"
                                class="btn btn-dark"
                                style="background:#b90f00"
                                data-toggle="modal"
                                data-target="#addRegionModal">
                            Add New RAC Region
                        </button>
                        <router-link to="/manageDocuments">
                            <button type="button"
                                    class="btn btn-dark"
                                    style="background:#b90f00">Manage Documents</button>
                        </router-link>

                        <router-link to="/manageNewsletters">
                        <button type="button"
                         class="btn btn-dark"
                         style="background:#b90f00">Manage Newsletters</button>
                           </router-link>

                        <!-- Add Region Modal -->
                        <div class="modal fade"
                             id="addRegionModal"
                             tabindex="-1"
                             role="dialog"
                             aria-labelledby="regionModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-light" style="background:#b90f00">
                                        <h5 class="modal-title" id="regionModalLabel">Add New RAC Region</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form @submit.prevent="submitForm" method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="region">Region Name</label>
                                                <input v-model="region.name"
                                                       type="text"
                                                       class="form-control"
                                                       id="region"
                                                       placeholder="Region Name"
                                                       required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark" style="background:#b90f00" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-dark" style="background:#b90f00">Add Region</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <router-link to="/admin">
                             <button type="button" class="btn btn-dark mx-1" style="background:#b90f00">Back</button>
                        </router-link>

                        <table class="table table-hover mt-5">
                            <thead>
                            <tr>
                              
                                <th scope="col">Name</th>
                                <th scope="col"></th>

                            </tr>
                            </thead>
                            <tbody>

                            <template v-for="(region, index) in regions">
                                <tr >
                                 
                                    <td>{{region.name}}</td>
                                    <td>
                                        <v-btn text
                                               @click="editRegion(region)"
                                               data-toggle="modal"
                                               data-target="#updateRegionModal"><v-icon color="dark">mdi-pencil</v-icon></v-btn>
                                        <v-btn text @click="deleteRegion(region.id)"><v-icon color="#b90f00">mdi-delete</v-icon></v-btn>
                                    </td>
                                </tr>
                            </template>
                            <tr v-if="regions.length == 0">
                                <td colspan="6" class="mt-auto text-center" >
                                    <strong>No data available for this region</strong>
                                </td>
                            </tr>
                            <div v-if="errors.length > 0" class="alert-danger">
                                {{errors[0]}}
                            </div>
                            </tbody>
                        </table>

                        <!-- Update Region Modal -->
                        <div class="modal fade"
                             id="updateRegionModal"
                             tabindex="-1"
                             role="dialog"
                             aria-labelledby="updateRegionModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-light" style="background:#b90f00">
                                        <h5 class="modal-title" id="updateRegionModalLabel">Update RAC Region</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form @submit.prevent="updateRegion" method="put">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="updateRegion">Region Name</label>
                                                <input v-model="region.name"
                                                       type="text"
                                                       class="form-control"
                                                       id="updateRegion"
                                                       placeholder="Region Name"
                                                       required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark" style="background:#b90f00" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-dark" style="background:#b90f00">Update Region</button>
                                        </div>
                                    </form>
                                </div>
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
        name: "addRegionComponent",
        data(){
            return {
                region: {
                    id: '',
                    name: '',
                },
                reg_id: 1,
                regions: [],
                errors: [],
                created: false,
                deleted: false,
                updated: false,
            }
        },

        mounted() {
            this.getRegions();
        },
        methods: {
            submitForm(){
                axios.post('api/region-store', this.region)
                .then(res => {
                    this.created = true;

                    setInterval(function(){  $('#addRegionModal').modal('hide'); }, 3000);


                    this.getRegions();
                }).catch(err => {
                    this.errors = err;
                })
            },

            updateRegion(){
              this.errors = [];
              const id = this.region.id;
              axios.put('/api/region-update/'+id, this.region)
                .then(res =>{
                    this.updated = true;

                    this.getRegions();
                }).catch(err =>{
                    this.errors = err;
              })
            },
            getRegions(){
                this.errors = [];
                axios.get('api/region-index')
                    .then(res => {
                        this.regions = res.data;
                    }).catch(err =>{
                    this.errors = err;
                })
            },
            editRegion(region){
                this.region = region;
            },
            deleteRegion(id){
                 axios.post('/api/region-delete/'+id)
                .then(res => {
                    this.deleted = true;
                   this.getRegions();
                }).catch(err => {
                    this.errors = err;
                })
            }
        },
        clear(){

        }
    }
</script>

<style scoped>

</style>
