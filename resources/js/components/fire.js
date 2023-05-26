import firebase from "firebase";
import "firebase/firestore";

var config = {
  ey: "AIzaSyBx4ihSCny2kqC-VJ6QVlSkDL-Va8793Jw",
  authDomain: "rac-portal-6c8c8.firebaseapp.com",
  databaseURL: "https://rac-portal-6c8c8.firebaseio.com",
  projectId: "rac-portal-6c8c8",
  storageBucket: "rac-portal-6c8c8.appspot.com",
  messagingSenderId: "229452306981"
};

var fire = firebase.initializeApp(config);
export default fire;
