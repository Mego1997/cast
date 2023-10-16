<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Castmycrew</title>
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

 function submitForms() {
     var username = document.getElementById("username").value;
     var password = document.getElementById("password").value;

     if (username == "" || password == "") {
         alert("No Data");
     } else {
         if (username == "admin" && password == "123456") {
             window.location="{{url("/main")}}";
         } else {
             alert("Wrong Data");
         }
     }
 }

</script>

</body>
</html>
