<template>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Messages</h2>

                <div
                    class="clearfix"
                    v-for="message in messages"
                >
                  
                </div>

                <div class="input-group">
                    <input
                        type="text"
                        name="message"
                        class="form-control"
                        placeholder="Type your message here..."
                        v-model="newMessage"
                        @keyup.enter="sendMessage"
                    >

                    <button
                        class="btn btn-primary"
                        @click="sendMessage"
                    >
                        Send
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import fire from "./fire";
export default {
  name: "chat2",
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
        created() {
        this.fetchMessages();

        Echo.private('chat')
            .listen('MessageSentEvent', (e) => {
                this.messages.push({
                    message: e.message.message,
                    user: e.user
                });
            });
    },

    fetchMessages() {
            axios.get('/messages').then(response => {
                this.messages = response.data;
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
      refresh(){
         let _this = this;
          setTimeout(function(){  //test2();
              return getChats();
          }, 1000);
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
            //this.getChats()



        }

    },
    test2(){
      //  this.prevent(e);
       // this.submitForm();
        alert('test');
    },
      submitForm(){
      alert('test');
      },

  mounted() {
    //  this.debouncedGetAnswer = _.debounce(this.getChats, 100);
    //   if(this.getChats() == true){
    //       this.pollData();
    //   }else{
    //       this.clearData();
    //   }
      //


      if(this.pollData() === false){
          this.clearData();
      };
     // this.refresh();
     //  setInterval(function(){  //test2();
     //     this.getChats();
     //  }, 3000);
   this.getRegions();
   this.getUsers();
   //this.refresh();

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
