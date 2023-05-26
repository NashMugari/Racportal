<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div  v-if="updated" class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Document updated successfully!</strong>
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
                    <div class="card-header">Update Document</div>
                    <div class="card-body">

                        <form @submit.prevent="updateDocument()" method="put" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="refNo">Reference Number</label>
                                    <input v-model="doc.refNo"
                                           type="text"
                                           class="form-control"
                                           id="refNo"
                                           placeholder="Reference Number"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="newName">Document Name</label>
                                    <input v-model="doc.name"
                                           type="text"
                                           class="form-control"
                                           id="newName"
                                           placeholder="Document Name"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="newDescription">Document Description</label>
                                    <textarea v-model="doc.description"
                                              rows="5"
                                              class="form-control"
                                              id="newDescription"
                                              placeholder="Enter Description"
                                              required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="file">Update Document</label>
                                    <input type="file"
                                           class="form-control"
                                           id="file"
                                           ref="file"
                                           @change="handleFileUpload()"
                                           placeholder="Choose a file document"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="newSelectRegion">Region</label>
                                    <select v-model="doc.region_id"
                                            id="newSelectRegion"
                                            class="custom-select custom-select-lg mb-3"
                                            required>
                                        <option v-for="(region, index) in regions" :key="index" :value="region.id">{{region.name}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <router-link to="/manageDocuments">
                                    <button type="button" class="btn btn-dark" style="background:#b90f00" >Back</button>
                                </router-link>
                                <button type="submit" class="btn btn-dark" style="background:#b90f00">Update</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "UpdateDocument",
        data(){
            return {
                updated: false,
                doc : '',
                errors: [],
                regions: [],
            }
        },
        mounted() {
            this.getRegions();
            this.doc = this.$route.params.doc;
        },

        methods: {
            handleFileUpload(){
                this.doc.file = this.$refs.file.files[0];
                console.log(this.doc.file);
            },
            updateDocument(){
                let formData = new FormData();
                formData.append('file', this.doc.file);
                 formData.append("_method", "put");
                const json = JSON.stringify({
                    refNo: this.doc.refNo,
                    name: this.doc.name,
                    description: this.doc.description,
                    region_id: this.doc.region_id,
                });
                // console.log(this.doc);
               

                /*axios({
                    method: 'put',
                    url: 'api/document-update/'+this.doc.id,
                    data: formData,
                    contentType: false,
                    processData: false,
                    })*/
                    formData.append('payload', json);
                axios.post('api/document-update/'+this.doc.id, formData,{
                    headers: {
                         'Content-Type':'multipart/form-data',
                         // 'method' : 'put',
                    }
                }).then(res =>{
                    this.updated = true;
                    console.log(res);
                }).catch(err => {
                    this.errors = err;
                    console.log(err);
                });
            },
            getRegions(){
                this.errors = [];
                axios.get('api/region-index')
                    .then(res => {
                        this.regions = res.data;
                    }).catch(err =>{
                    this.errors = err;
                });
            },
        },

    }
</script>

<style scoped>

</style>
