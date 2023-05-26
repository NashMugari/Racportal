<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div  v-if="deleted" class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Meeting Deleted successfully!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card">
                    <div class="card-header">Manage RAC Meetings</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <select v-model="selected"
                                        class="custom-select custom-select-lg mb-3"
                                        @change="handleChange()">

                                    <option v-for="(region, index) in regions" :key="index" :value="region.id">{{region.name}}</option>
                                </select>
                            </div>
                            <div class="col-md-8">
                                <router-link to="/createRacMeeting">
                                    <button type="button" class="btn btn-dark" style="background:#b90f00">Add New RAC Meeting</button>
                                </router-link>
                                <router-link to="/admin">
                                    <button type="button" class="btn btn-dark" style="background:#b90f00">Back</button>
                                </router-link>
                            </div>
                        </div>

                        <table class="table table-hover">
                            <thead>
                            <tr colspan="4">
                                <th scope="col">#</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                  <th scope="col">Comment</th>
                                <th scope="col">Region</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                                <template v-for="(meeting, index) in meetings">
                                    <tr>
                                        <th scope="row">{{index}}</th>
                                        <td>{{meeting.date}}</td>
                                        <td>{{meeting.time}}</td>
                                         <td>{{meeting.description}}</td>
                                        <td>{{getRegionName(meeting.region_id)}}</td>
                                        <td>
                                            <v-btn text @click="editMeeting(meeting)"><v-icon color="dark">mdi-pencil</v-icon></v-btn>
                                            <v-btn text @click="deleteMeeting(meeting.id)"><v-icon color="#b90f00">mdi-delete</v-icon></v-btn>
                                        </td>
                                    </tr>
                                </template>
                                <tr v-if="meetings.length == 0">
                                    <td colspan="4" class="mt-auto text-center" >
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
        name: "ManagerRacMeetings",
        data(){
            return {
                selected: 0,
                regions: [],
                errors: [],
                meetings:[],
                deleted: false,
                  meet: {
                    id: '',
                    date: '',
                    time: '',
                    description: '',
                    region_id: '',
                }
            }
            },

        mounted() {
            this.getRegions();
            this.getMeetings();
        },
        methods:{
            getRegions(){
                this.errors = [];
                axios.get('api/region-index')
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
            getMeetings(){
                this.errors = [];
                axios.get('api/meeting-index')
                    .then(res => {
                        this.meetings = res.data;
                    }).catch(err =>{
                    this.errors = err;
                })
            },
            deleteMeeting(id){
                this.errors = [];
                 axios.post('/api/meeting-delete/'+id)
                .then(res => {
                    this.deleted = true;
                    this.getMeetings();
                    console.log(res);
                }).catch(err => {
                    this.errors = err;
                });
            },
             editMeeting(meeting){
                           this.$router.push({name: 'editMeeting', params: {meet: meeting}});
                       },
            handleChange(){
                console.log("handleChange running");
                this.errors = [];
                if(this.selected == 10){
                    this.getMeetings();
                }else{
                    axios.get('api/region-getMeetings/'+this.selected)
                        .then(res => {
                            this.meetings = res.data;
                        }).catch(err =>{
                        this.errors = err;
                    })
                }
            },
        }
    }
</script>

<style scoped>

</style>
