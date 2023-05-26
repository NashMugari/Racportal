<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div  v-if="uploaded" class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Document uploaded successfully!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div  v-if="deleted" class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Document deleted successfully!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div  v-if="submitted" class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Comment submitted successfully!</strong>
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
                    <div class="card-header">Upload Documents</div>
                    <div class="card-body">
                        <button type="button"
                                class="btn btn-dark"
                                style="background:#b90f00"
                                data-toggle="modal"
                                data-target="#uploadDocumentModal">
                            Upload New Document
                        </button>
                        <router-link to="/manageRegions">
                            <button type="button" class="btn btn-dark mx-1" style="background:#b90f00">Back</button>
                        </router-link>

                        <!-- Upload Document Modal -->
                        <div class="modal fade"
                             id="uploadDocumentModal"
                             tabindex="-1"
                             role="dialog"
                             aria-labelledby="documentModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                 <div style="text-align:center;"><img src="/img/loader.gif" id="loaderd" style="display:none; text-align:center;"/></div>
                                    <div class="modal-header text-light" style="background:#b90f00">
                                        <h5 class="modal-title" id="documentModalLabel">Upload Document</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form @submit.prevent="uploadDocument" method="post" enctype="multipart/form-data">
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
                                                <label for="name">Document Name</label>
                                                <input v-model="doc.name"
                                                       type="text"
                                                       class="form-control"
                                                       id="name"
                                                       placeholder="Document Name"
                                                       required>
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Document Description</label>
                                                <textarea v-model="doc.description"
                                                          rows="5"
                                                          class="form-control"
                                                          id="description"
                                                          placeholder="Enter Description"
                                                          required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="file">Upload Document</label>
                                                <input type="file"
                                                       class="form-control"
                                                       id="file"
                                                       ref="file"
                                                       @change="handleFileUpload()"
                                                       placeholder="Choose a file document"
                                                       required>
                                            </div>
                                            <div class="form-group">
                                                <label for="selectRegion">Region</label>
                                                <select v-model="doc.region_id"
                                                        id="selectRegion"
                                                        class="custom-select custom-select-lg mb-3"
                                                        required>
                                                    <option v-for="(region, index) in regions" :key="index" :value="region.id">{{region.name}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark" style="background:#b90f00" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-dark" style="background:#b90f00">Upload</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <table class="table table-hover mt-5">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">refNo</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">File</th>
                                    <th scope="col">description</th>
                                    <th scope="col">region</th>
                                    <th scope="col"></th>

                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="(document, index) in documents">
                                    <tr >
                                        <th scope="row">{{index}}</th>
                                        <td>{{document.refNo}}</td>
                                        <td>{{document.name}}</td>
                                        <td><a href="#" v-on:click="openFile(document.file)">{{document.file}}</a></td>
                                        <td>{{document.description}}</td>
                                        <td>{{getRegionName(document.region_id)}}</td>
                                        <td>
                                            <v-btn text @click="editDocuments(document)"><v-icon color="dark">mdi-pencil</v-icon></v-btn>
                                            <v-btn text @click="addComment(document)">
                                                    <v-icon color="dark">mdi-comment</v-icon></v-btn>
                                            <v-btn text @click="deleteDocuments(document.id)"><v-icon color="#b90f00">mdi-delete</v-icon></v-btn>
                                        </td>
                                    </tr>

                                </template>
                                <tr v-if="documents.length == 0">
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
        name: "ManageDocument",
        data(){
            return {
                documents: [],
                regions:[],
                errors:[],
                doc: {
                    id: '',
                    refNo: '',
                    name: '',
                    file: '',
                    description: '',
                    region_id: '',
                },

                uploaded: false,
                deleted: false,
                submitted: '',
                showComment: false,
            }
        },
        mounted() {
            this.getRegions();
            this.getDocuments();
        },
        methods: {
            openFile(test){  
                // alert(test);
                //  location.replace(window.location.href = 'storage/uploads/'+test);
                // window.location.href = 'storage/'+test;

                let route = this.$router.resolve({path: 'storage/'+test});
                // let route = this.$router.resolve('/link/to/page'); // This also works.
                window.open(route.href, '_blank');

            },
            handleFileUpload(){
                this.doc.file = this.$refs.file.files[0];

 
                if(this.doc.file.size > 50000000){
                alert('Sorry the file size is over 50MB');

                this.doc.file = '';
                }


                // const fi = document.getElementById('file'); 
        // Check if any file is selected. 
         


            },
            addComment(document){
                this.$router.push({name: 'CommentsComponent', params: {document: document}});
                // this.doc = this.documents.filter(document => document.id == id).pop();
                // this.newComment.document_id = this.doc.id;
                // console.log("Adding comment to "+id)
            },
            uploadDocument(){
                $('#loaderd').show();
                axios.post('api/document-store', this.setFormData(),{
                    headers: {
                        'Content-Type':'multipart/form-data'
                    }
                }).then(res =>{
                    this.uploaded = true;
                     $('#loaderd').hide();
                     //   setInterval(function(){  $('#uploadDocumentModal').modal('hide'); }, 3000);
                    this.getDocuments();
                    console.log(res);
                }).catch(err => {
                    this.errors = err;
                    console.log(err);
                });
            },
            setFormData(){
                let formData = new FormData();
                formData.append('file', this.doc.file);
                const json = JSON.stringify({
                    refNo: this.doc.refNo,
                    name: this.doc.name,
                    description: this.doc.description,
                    region_id: this.doc.region_id,
                });
                formData.append('payload', json);
                return formData;
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
            getDocuments(){
                this.errors = [];
                axios.get('api/document-index')
                    .then(res => {
                        this.documents = res.data;
                    }).catch(err =>{
                    this.errors = err;
                });
            },
            getRegionName(region_id){
                let regionName = this.regions.filter(region => region.id == region_id)
                    .map(region => region.name).toString();
                return regionName;
            },
            editDocuments(document){
                this.$router.push({name: 'UpdateDocumentComponent', params: {doc: document}});
            },

           Filevalidation (){ 
        const fi = document.getElementById('file'); 
        // Check if any file is selected. 
        if (fi.files.length > 0) { 
            for (const i = 0; i <= fi.files.length - 1; i++) { 
  
                const fsize = fi.files.item(i).size; 
                const file = Math.round((fsize / 1024)); 
                // The size of the file. 
                if (file >= 4096) { 
                    alert( 
                      "File too Big, please select a file less than 4mb"); 
                } else if (file < 2048) { 
                    alert( 
                      "File too small, please select a file greater than 2mb"); 
                } else { 
                    document.getElementById('size').innerHTML = '<b>'
                    + file + '</b> KB'; 
                } 
            } 
        } 
    } ,     




            deleteDocuments(id){
                 axios.post('api/document-delete/'+id)
                .then(res => {
                    this.deleted = true;
                    this.getDocuments();
                    console.log(res);
                }).catch(err => {
                    this. errors = err;
                });
            }
        }
    }
</script>

<style scoped>

</style>
