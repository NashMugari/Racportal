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
<div class="row">
                                  <div class="col-md-6">

                   <table class="table table-hover">

                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Users</th>
                                  <th scope="col">Region</th>

                                                    </tr>
                            </thead>
                            <tbody>

                                   <template v-for="(user, index) in users">

                                    <tr >

                                        <td><span class="dot"></span> </td><td ><a href='#' v-on:click = "startChat(user.id, user.name, getRegionName(user.region_id))"> {{user.name}}  </a></td>
                                        <td>{{getRegionName(user.region_id)}}</td>

                                    </tr>

                                </template>
                                <tr v-if="users.length == 0">
                                    <td colspan="6" class="mt-auto text-center" >
                                        <strong>No users online at the moment</strong>
                                    </td>
                                </tr>
                                <div v-if="errors.length > 0" class="alert-danger">
                                    {{errors[0]}}
                                </div>


                            </tbody>
                        </table>
                  </div>

<div class="col-md-6">

                    <div class="card-header">You are chatting with : <span class='chatwith'></span></div>
                    <div class="card-body">
 <div style="text-align:center;"><img src="/img/loader.gif" id="loaderd" style="display:none; text-align:center;"/></div>

						   <template v-for="(chat, index) in chats">

						   <div class="container" style="  border: 2px solid #dedede;
										  background-color: #f1f1f1;
										  border-radius: 5px;
										  padding: 10px;
										  margin: 10px 0;">
						  {{chat.username}}
						  <p>{{chat.message}}</p>
						  <span class="time-right">{{chat.startdate}}</span>
						</div>





						   </template>






						<form @submit.prevent="submitForm" method="post">

						<div class="form-group">
						<input v-model="chat.user2"
                                       type="hidden"
                                       class="form-control"
                                       id="user2">
						</div>
						<div class="form-group">

                           <label for="description"> Message</label>

                           <textarea v-model='chat.description'
                            rows="5"
                            class="form-control"
                            id="description"
                            placeholder="Type Your Message"
                            ></textarea>
                        </div>

                            <router-link to="/admin">
                            <button type="button" class="btn btn-dark mt-4 mx-1" style="background:#b90f00">Back</button>
                            </router-link>
                        <button type="submit" class="btn btn-dark mt-4 mx-1" style="background:#b90f00">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</template>

<script>
import fire from "./fire";
    export default {
        name: "editMeeting",
        data(){
            return {
                updated: false,
                meeting : '',
				chats:[],
				chat:{
				'description':'',
				'user1':'',
				'user2': '',
				},
                errors : [],
                regions: [],
                users:[],
                menu: false,
                dateMenu: false,
                timeMenu: false,
				isLoggedIn:$("meta[name=login-data]").attr('content'), // for the meta field
                meet:'',
            }
        },
        mounted() {
            this.getRegions();
                this.getUsers();


           // this.meeting = this.$route.params.meet;
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
            getChats123(){
                this.errors = [];
                axios.get('api/region-index')
                    .then(res => {
                        this.regions = res.data;
                    }).catch(err =>{
                    this.errors = err;
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
             startChat(id, name, region){
                this.errors = [];
                $('.chatwith').html(name);
                this.chat.user2 = id;
				let obj = JSON.parse(this.isLoggedIn);
                this.userid1 = obj.id;
				this.getChats();
			//	alert(this.userid1)
               // $('.chatwith').empty();
                  //  alert(this.chat.user2);
            },
               getRegionName(region_id){
                let regionName = this.regions.filter(region => region.id == region_id)
                                            .map(region => region.name).toString();
                return regionName;
            },
                getUsers(){
                this.errors = [];
                axios.get('api/get-users')
                    .then(res => {
                        this.users = res.data;
                    }).catch(err =>{
                    this.errors = err;
                });
            },

			 getChats(){

			 let obj = JSON.parse(this.isLoggedIn);
                this.userid1 = obj.id;

			    let formData = new FormData();
				formData.append("userid1", this.userid1);
				formData.append("userid2", this.chat.user2);
				let id = this.chat.user2


                this.errors = [];
                axios.get('api/get-chats/' + id )
                    .then(res => {
                        this.chats = res.data;
                    }).catch(err =>{
                    this.errors = err;
                });
            },
               submitForm(){

			    let obj = JSON.parse(this.isLoggedIn);
                this.userid1 = obj.id;

			    let formData = new FormData();
                formData.append("_method", "post");
				formData.append("userid1", this.userid1);
				formData.append("userid2", this.chat.user2);
				formData.append("message", this.chat.description);


				 if(!this.chat.user2){
				 //alert('Please select the user to start the chat');

				 	swal({
				//title: "Please Type your Mobile Number",
				text: "Please select the user to start the chat !",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})

				 } else if(!this.chat.description){
				 //alert('Please type your message');

				 	swal({
				//title: "Please Type your Mobile Number",
				text: "Please type your message !",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})

				 }

				 else{

				//alert(this.userid1);

                   axios.post('api/chat-store', formData)
                    .then(res => {
                        console.log(res);
			

                      //  this.updated =true;
                        //  $('#loaderd').hide();
                    }).catch(err =>{
                        this.errors = err;
                   })

                }

            }
        },

    }


</script>

<style scoped>



