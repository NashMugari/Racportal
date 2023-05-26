<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div  v-if="updated" class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>RAC Meeting updated successfully!</strong>
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
                    <div class="card-header">Update RAC Meeting</div>
                    <div class="card-body">
 <div style="text-align:center;"><img src="/img/loader.gif" id="loaderd" style="display:none; text-align:center;"/></div>                   
                          <form @submit.prevent="submitForm" method="post">
                            <div class="form-group">
                                <label for="selectRegion">Region</label>
                                <select v-model="meeting.region_id"
                                        class="form-control"
                                        id="regionid"
                                        required>
                                    <option disabled>Select a region</option>
                                    <option v-for="(region, index) in regions"
                                            :key="index"
                                            :value="region.id">{{region.name}}</option>
                                </select>
                            </div>
                             <v-row>
                             <v-col cols="12" sm="6" md="4">
                             <div class="form-group">
                                <label for="selectRegion">Pick Meeting Date</label><br>
                                <input type='date' id='date' v-model="meeting.date"/>
                            </div>
                                </v-col>
                            </v-row>

                             <v-row>
                             <v-col cols="12" sm="6" md="4">
                             <div class="form-group">
                             <label for="selectRegion">Pick Meeting Time</label><br>

                            <input type='time' id='time' v-model="meeting.time"/>
                            </div>
                                </v-col>
                            </v-row>
							
							
							  <div class="form-group">
                                                                                                                          <label for="description"> Comment</label>
                                                                                                                          <textarea v-model="meeting.description"
                                                                                                                                    rows="5"
                                                                                                                                    class="form-control"
                                                                                                                                    id="description"
                                                                                                                                    placeholder="Enter Comment"
                                                                                                                                    required></textarea>
    </div>
                               
                            <router-link to="/manageMeetings">                                                                                           
                            <button type="button" class="btn btn-dark mt-4 mx-1" style="background:#b90f00">Back</button>
                             </router-link>
                            <button type="submit" class="btn btn-dark mt-4 mx-1" style="background:#b90f00">Update RAC Meeting</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "editMeeting",
        data(){
            return {
                updated: false,
                meeting : '',
                 errors : [],
                regions: [],
                  menu: false,
                dateMenu: false,
                timeMenu: false,
                meet:'',
            }
        },
        mounted() {
            this.getRegions();
            this.meeting = this.$route.params.meet;
        },

        methods: {
            handleFileUpload(){
                this.doc.file = this.$refs.file.files[0];
                console.log(this.doc.file);
            },
            updateRac(){
                let formData = new FormData();
                formData.append("_method", "put");
                const json = JSON.stringify({
                    region_id: this.meeting.regionid,
                    date: this.meeting.date,
                    time: this.meeting.time,
                    description: this.meeting.description,
                });
                // console.log(this.doc);
                formData.append('payload', json);

                  $('#loader').show();
                  
                   axios.post('api/meeting-update/'+this.meeting.id, formData,{
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
               submitForm(){
                this.errors = [];
                if(!this.meeting.date){
                    this.errors.push("The meeting date cannot be null");
                }else if(!this.meeting.time){
                    this.errors.push("The meeting time cannot be null");
                }else if(!this.meeting.description){
                                     this.errors.push("The meeting Comment cannot be null");
                                 } else{
                   $('#loaderd').show();


                   axios.put('api/meeting-update/'+this.meeting.id, this.meeting)
                    .then(res => {
                        console.log(res);
                        this.updated =true;
                          $('#loaderd').hide();
                    }).catch(err =>{
                        this.errors = err;
                   })
                }
            }
        },

    }
</script>

<style scoped>

</style>
