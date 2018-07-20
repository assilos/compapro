
 document.getElementById('contactsform').addEventListener('submit', submitForm);

function getInputVal(id){
  return document.getElementById(id).value;
}
function submitForm(e){
  e.preventDefault();
  var name= getInputVal('name');
  var email= getInputVal('email');
  var message=getInputVal('message')
  document.getElementById('contactsform').reset();
  saveMessage(name,email,message);
}
 

 // Initialize Firebase
  var config = {
    apiKey: "AIzaSyDAS0F8AkJ9cC7_BpfBJtJYa9VO9_Rpa90",
    authDomain: "assil-b9f38.firebaseapp.com",
    databaseURL: "https://assil-b9f38.firebaseio.com",
    projectId: "assil-b9f38",
    storageBucket: "assil-b9f38.appspot.com",
    messagingSenderId: "351806912303"
  };
  firebase.initializeApp(config);
  var messagesRef = firebase.database().ref('messages');
// Save message to firebase
function saveMessage(name,email,message){
  var newMessageRef = messagesRef.push();
  newMessageRef.set({
    name: name,
    email:email,
    message:message
  });
}
