<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Modern Flat Design Login Form Example</title>
  <link rel="stylesheet" href="{{asset('assets/css/stylelogin.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-page">
  <div class="form">
    <form class="login-form">
      <input id="username" type="text" placeholder="username"/>
      <input id="password" type="password" placeholder="password"/>
      <button onclick="submitForms()" >login</button>
    </form>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script>

 function submitForms(){
var username = document.getElementById("form1").value();
var password = document.getElementById("form1").value();

if(username==""||password==""){
alert("No Data");
}
else{
if(username=="admin"&&password=="123456"){
window.location("/main");
}else{
alert("Wrong Data");
}
}

</script>

</body>
</html>
