<template>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            
                <div class="message-body">
                                   <router-link to="/home">
                                    <button type="button" class="btn btn-dark" style="background:#b90f00">Back</button>
                                </router-link>
                <h3>RAC Group Chat</h3>
                <!-- <h5>Welcome! you are chatting with <span class="chatwith mg-text"></span></h5> -->
                 <div style="text-align:center;"><img src="/sounds/chat.wav" id="loaderd" style="display:none; text-align:center;"/></div>
                    <div
                        class="border pl-2 pt-1 ml-2 message-text mb-2"
                        v-for="message in messages"
                 :key="message.id">
                        <p class="message pt-1"><br><span style='font-size: 12px; color:rgb(0, 195, 255);' class="message pt-1"><i>
                            <strong>{{message.user.name}}</strong>
                  	  <p>{{message.message}}<br><span style='font-size: 10px; color:rgb(0, 195, 255);' class="message pt-1"><i>{{message.created_at}}</i></span></p>
                      
                            
                            </i></span></p>
                    </div>
                    <input v-model="chat.user2"
                        type="hidden"
                        class="form-control"
                        id="user2">
                    <input v-model="newMessage"
                        @keyup.enter="sendMessage" type="text" id="message" class="mt-3 mr-2 pl-2 pr-2"/>
                    <button   @click="sendMessage" style="background:#b90f00" class="btn btn-primary" >Send</button>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
  name: "userChat",
  data() {
    return {
    messages: [],
    newMessage: '',
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
   // messages: [],
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
        created() {
        // this.fetchMessages();

        // Echo.private('chat')
        //     .listen('MessageSentEvent', (e) => {
        //         this.messages.push({
        //             message: e.message.message,
        //             user: e.user
        //         });
        //     });
    },

    fetchMessages() {
            axios.get('/messages').then(response => {
                this.messages = response.data;
              // console.log(this.users);
            });
        },

        addMessage(message) {
            axios.post('/messages', {
                message
            }).then(response => {
                this.messages.push({
                    message: response.data.message.message,
                    user: response.data.user
                });
            });
        },
        sendMessage() {
            
           this.addMessage(this.newMessage);
            this.newMessage = '';
        },
      getChats(){
          let obj = JSON.parse(this.isLoggedIn);
          let userid1 = obj.id;
         //this.chat.user2 = $("#user2").val();
         // let formData = new FormData();
          let id = this.chat.user1
          this.errors = [];
          axios.get('api/get-chats/'+ this.chat.user2,{
              params:{
                  user:userid1
              }
          })
              .then(res => {
                  this.chats = res.data;
              }).catch(err =>{
              this.errors = err;
          });

          return
      },

      test(){
          this.chat.message = $("#description").val();
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
          //    this.clearData();
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

           notifyUser(){

              swal({
                  //title: "Please Type your Mobile Number",
                 text: "You have a new group chat message !",
                  icon: "success",
                  buttons: true,
                  dangerMode: true,
              })
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
    updateUsername() {
      this.name = this.userName;
      console.log(this.userName);
      this.userName = "";
    },
    sendMessager() {
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
            //this.getChats()



        }

    },
    test(){
      //  this.prevent(e);
       // this.submitForm();
        alert('test');
    },
    //   getRegionName(region_id){
    //             let regionName = this.regions.filter(region => region.id == region_id)
    //                 .map(region => region.name).toString();
    //             return regionName;
    //         },
      submitForm(){
      alert('test');
      },
    getUserName(user_id){
                let userName = this.users.filter(user => user.id == user_id)
                    .map(user => user.name).toString();
                return userName;
            },

  mounted() {
       
    //  this.debouncedGetAnswer = _.debounce(this.getChats, 100);
    //   if(this.getChats() == true){
    //       this.pollData();
    //   }else{
    //       this.clearData();
    //   }
      //


     
     // this.refresh();
     //  setInterval(function(){  //test2();
     //     this.getChats();
     //  }, 3000);
  this.fetchMessages();
   this.getRegions();
   this.getUsers();
   // this.getUserName(4);
   //this.refresh();
 let executed = false;
    Echo.private('chat')
            .listen('MessageSentEvent', (e) => {
                this.messages.push({
                    message: e.message.message,
                    user: e.user
                });
                      
                       if(!executed){
                            executed = true;
                            this.notifyUser();

                       }
                       

                          var audio = new Audio('/sounds/chat.wav');
                            audio.play();


               //  $('#loaderd').show();
            });



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
    height: auto;
}
.login {
  background: #fff;
  width: 40%;
  height: 50vh;
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
  width: 40%;
  height: 80vh;
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


.card-body {
  min-height: 50vh;
  /*overflow-x: scroll;*/
  height: auto;
}
</style>
