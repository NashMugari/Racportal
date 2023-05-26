<template>
    <v-app class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div  v-if="created" class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>New Rac Meeting created successfully!</strong>
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
                    <div class="card-header">Create a new RAC Meeting</div>
                    <div class="card-body">
                        <div style="text-align:center;"><img src="/img/loader.gif" id="loaderd" style="display:none; text-align:center;"/></div>
                        <form @submit.prevent="submitForm" method="post">
                            <div class="form-group">
                                <label for="selectRegion">Region</label>
                                <select v-model="meeting.region_id"
                                        class="form-control"
                                        id="selectRegion"
                                        required>
                                    <option disabled>Select a region</option>
                                    <option v-for="(region, index) in regions"
                                            :key="index"
                                            :value="region.id">{{region.name}}</option>
                                </select>
                            </div>
                            <v-row>
                                <v-col cols="12" sm="6" md="4">
                                    <v-menu
                                        ref="dateMenu"
                                        v-model="dateMenu"
                                        :close-on-content-click="false"
                                        :return-value.sync="meeting.date"
                                        transition="scale-transition"
                                        offset-y
                                        min-width="290px"
                                    >
                                        <template v-slot:activator="{ on }">
                                            <v-text-field
                                                v-model="meeting.date"
                                                label="Pick Meeting Date"
                                                prepend-icon="mdi-calendar"
                                                readonly
                                                v-on="on"
                                            ></v-text-field>
                                        </template>
                                        <v-date-picker v-model="meeting.date"
                                                       color="#b90f00"
                                                       header-color="#b90f00"
                                                       scrollable>
                                            <v-spacer></v-spacer>
                                            <v-btn text color="primary" @click="dateMenu = false">Cancel</v-btn>
                                            <v-btn text color="primary" @click="$refs.dateMenu.save(meeting.date)">OK</v-btn>
                                        </v-date-picker>
                                    </v-menu>
                                </v-col>
                            </v-row>

                            <v-row>
                                <v-col cols="12" sm="6" md="4">
                                    <v-menu
                                        ref="menu"
                                        v-model="timeMenu"
                                        :close-on-content-click="false"
                                        :nudge-right="40"
                                        :return-value.sync="meeting.time"
                                        transition="scale-transition"
                                        offset-y
                                        min-width="290px"
                                        full-with
                                    >
                                        <template v-slot:activator="{ on }">
                                            <v-text-field
                                                v-model="meeting.time"
                                                label="Pick Meeting Time"
                                                prepend-icon="mdi-timetable"
                                                readonly
                                                v-on="on"
                                            ></v-text-field>
                                        </template>
                                        <v-time-picker
                                            v-if="timeMenu"
                                            v-model="meeting.time"
                                            color="#b90f00"
                                            full-width
                                            @click:minute="$refs.menu.save(meeting.time)"
                                        ></v-time-picker>
                                    </v-menu>
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


                            <button type="submit" class="btn btn-dark mt-4 mx-1" style="background:#b90f00">Create RAC Meeting</button>
                            <router-link to="/manageMeetings">
                                <button type="button" class="btn btn-dark mt-4 mx-1" style="background:#b90f00">Back</button>
                            </router-link>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </v-app>
</template>

<script>
    export default {
        name: "CreateRacMeeting",
        data(){
            return {
                errors: [],
                created: false,
                regions: [],
                menu: false,
                dateMenu: false,
                timeMenu: false,
                meeting: {
                    date: null,
                    time: null,
                    description:'',
                    region_id: '',
                }

            }
        },
        mounted(){
            this.getRegion();
        },
        methods: {
            getRegion(){
                this.errors = [];
                axios.get('api/region-index')
                    .then(res => {
                        this.regions = res.data;
                    }).catch(err =>{
                    this.errors = err;
                })
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
                   axios.post('api/meeting-store', this.meeting)
                    .then(res => {
                        console.log(res);
                        this.created =true;
                          $('#loaderd').hide();
                    }).catch(err =>{
                        this.errors = err;
                   })
                }
            }
        }
    }
</script>

<style scoped>

</style>
