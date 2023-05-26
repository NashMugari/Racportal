<template>
    <div class="container" id="chat2">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">

				  <router-link to="/home">
                            <button type="button" class="btn btn-dark mt-4 mx-1" style="background:#b90f00">Back</button>
                            </router-link>

<div class="row">
                                  <div class="col-md-4">

                   <table class="table table-hover">

                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Online RAC Admin</th>


                                                    </tr>
                            </thead>
                            <tbody>

                                   <template v-for="(user, index) in users">

                                    <tr >

                                        <td><span class="dot"></span> </td><td ><a href='#' v-on:click = "startChat(user.id, user.name, getRegionName(user.region_id))"> {{user.name}}  </a></td>



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
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
                  </div>

					<div class="col-md-8">
<div id="chat2">
    <!-- Login section -->
    <div class="login" v-if="!name">
      <h3 class="mt-3">Join RAC Chat</h3>
      <label for="username">Username</label>
      <br />
      <input class="mb-3"  type="text" v-model="userName" />
      <br />
      <button style="background:#b90f00" class="btn btn-primary" @click="updateUsername">Join Chat</button>
    </div>
    <!-- Chat section -->
    <div class="message-body mt-6" v-else>

      <h3>RAC Chat</h3>
      <h5>Welcome {{ name }}! you are chatting with <span class="chatwith mg-text"></span></h5>
        <div
            class="border pl-2 pt-1 ml-2 message-text mb-2"
            v-for="chat in chats"
            :key="chat">
            <span class="mg-text">{{chat.username}}</span>
            <p class="message pt-1">{{chat.message}}<br><span style='font-size: 10px; color:rgb(0, 195, 255);' class="message pt-1"><i>{{chat.startdate}}</i></span></p>
        </div>
        <input v-model="chat.user2"
               type="hidden"
               class="form-control"
               id="user2">
        <input v-model="chat.description" type="text" id="description" class="mt-3 mr-2 pl-2 pr-2"/>
        <button  @click.prevent="test" style="background:#b90f00" class="btn btn-primary" >Send</button>
	    <br><br>
    </div>
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
import fire from "./fire";
export default {
    name: "chat",
    data() {
        return {
            userName: "",
            meeting : '',
            chats:[],
            chat: {
                'description': '',
                'user1': '',
                'user2': '',
            },
            name: null,
            showMessage: "",
            messages: [],
            polling: null,
            stopping:null,
            user:'',
            regions: [],
            errors : [],
            users:[],
            isLoggedIn:$("meta[name=login-data]").attr('content'), // for the meta field
        };
    },
  methods: {

      clearData () {
          this.stopping =   clearInterval(this.polling);
      },

      pollData () {


          this.polling = setInterval(() => {
              // this.$store.dispatch('RETRIEVE_DATA_FROM_BACKEND')
              // alert('poll');
              this.getChats();
          }, 2000)
      },
      getChats(){

          let obj = JSON.parse(this.isLoggedIn);
          let userid1 = obj.id;
          //this.chat.user2 = $("#user2").val();
          // let formData = new FormData();

          let id = this.chat.user1
          this.errors = [];
          axios.get('api/get-chats/'+ userid1,{
             params:{
                 user:this.chat.user2
             }
          }
          )
              .then(res => {
                  this.chats = res.data;
              }).catch(err =>{
              this.errors = err;
          });
      },
      refresh(){
          setInterval(function(){ alert("Hello world"); }, 3000);
      },
      test(){
          this.chat.message = $("#message").val();
          let obj = JSON.parse(this.isLoggedIn);
          this.chat.user1 = obj.id;
          this.chat.user2 = $("#user2").val();


          if(!this.chat.user2){
              //alert('Please select the user to start the chat');

              swal({
                  //title: "Please Type your Mobile Number",
                  text: "Please select the user to start the chat !",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
              })

          } else if(!this.chat.message){
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

              axios.post('api/chat-store', {userid1: this.chat.user1, userid2: this.chat.user2, message:this.chat.description})
                  .then(res => {
                      console.log(res);
                      var v = this;
                      // setInterval(function() {
                      //     v = this.getChats();
                      //     //alert('chat');
                      // }, 1000);

                      //  this.updated =true;
                      //  $('#loaderd').hide();
                      this.getChats();

                      this.chat.description = null;
                  }).catch(err =>{
                  this.errors = err;
              })
            //  this.clearData();
          }
          //return false;
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

          //	alert(this.userid1);

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
          axios.get('api/get-admin')
              .then(res => {
                  this.users = res.data;
              }).catch(err =>{
              this.errors = err;
          });
      },
      updateUsername() {
          this.name = this.userName;
          console.log(this.userName);
          this.userName = "";
      },
      sendMessage() {
          var today = new Date();
          var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
          var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
          var dateTime = date+' '+time;

          const message = {
              text: this.showMessage,
              username: this.name,
              createdAt:dateTime
          };


          //   if(message3.text){
          //     fire
          //       .database()
          //       .ref("messages")
          //       .push(message)
          //       this.showMessage = "";
          //   }else{
          //    swal("Please Type Your Message", {
          // dangerMode: true,
          // buttons: true,
          // });
          //   }
      }
  },
    watch: {
        handler() {
            this.getChats()
        }

    },
    mounted() {
       // this.debouncedGetAnswer = _.debounce(this.getChats, 500);

      // if(this.getChats() == true){
        if(this.pollData() === false){
            this.clearData();
        };
      // }else{
      //     this.clearData();
      // }

        // this.refresh();
       // this.pollData();
        this.getRegions();
        this.getUsers();

        let obj = JSON.parse(this.isLoggedIn);
        this.user = obj.name;
        this.userName = obj.name;
        // let viewMessage = this;
        // const itemsRef = fire.database().ref("messages");
        // itemsRef.on("value", snapshot => {
        //   let data = snapshot.val();
        //   let messages = [];
        //   Object.keys(data).forEach(key => {
        //     messages.push({
        //       id: key,
        //       username: data[key].username,
        //       text: data[key].text,
        // 	  createdAt: data[key].createdAt
        //     });
        //   });
        //   viewMessage.messages = messages;
        // });

    }
};
</script>

<style>
@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic|Material+Icons");
#app {
  font-family: "Roboto", sans-serif;
  font-size: 18px;
  height:"80%";
}
.login {
  background: #fff;
  width: 80%;
  height: 30vh;
  margin: auto;
  padding-left: 20px;
  padding-right: 20px;
}
h3 {
  font-size: 30px;
  text-align: center;
}
input {
  width: 100%;
  border-radius: 4px;
  border: 1px solid rgb(156, 156, 156);
  padding-left: 2px;
  padding-right: 2px;
}
.message-body {
  width: 80%;
  height: auto;
  margin: auto;
}
.message-text {
  min-width: 10%;
  border-radius: 4px;
}
.message {
  font-size: 14px;
}
.mg-text {
  color: rgb(0, 195, 255);
  font-weight: bolder;
}
.message-body input {
  width: 80%;
  border-radius: 4px;
  border: 1px solid rgb(156, 156, 156);
  height: 6vh;
  padding-left: 2px;
  padding-right: 2px;
}
.card {
  width: 100%;
  height: 50vh;
  margin: auto;
}
.card-body {
  min-height: auto;
}
</style>
