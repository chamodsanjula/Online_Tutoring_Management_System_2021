<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        .pdf{
            width:1000px;
            border: 4px solid rgb(4, 114, 62);
        }
          h2{
              background-color: rgb(4, 114, 62);
              height: 60px;
        }
        th{
              font-size:20px;
        }
        .df{
           border: 1px black;
        }
        .view{
              background-color: rgb(214, 49, 192);
              width:100px;
              height:25px;
              border-radius: 15px;
        }
        .view:hover{
            background-color: green;
        }
       .download{
            background-color: rgb(214, 49, 192);
            width:100px;
            height:25px;
            border-radius: 15px;
       }
       .download:hover{
            background-color: green;   
       }
       .back{
           padding:50px;
       }
       body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
    body {
      
      overflow-x: hidden; /* Hide horizontal scrollbar */
    }
    * {
      font-family: Roboto;
    }
    
    section {
      width: 100%;
      display: inline-block;
      background: #ccc;
      height: 60vh;
      text-align: center;
      font-size: 22px;
      font-weight: 700;
      text-decoration: underline;
    }
    
    .foot {
      background-color:#1d2227;
      box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
      box-sizing: border-box;
      width: 100%;
      text-align: left;
      font: normal 16px sans-serif;
      padding: 45px;
    }
    
    .footer-distributed .footer-left p {
      color: #ffffff;
      font-size: 20px;
      margin: 0;
    }
    /* Footer links */
    
    .footer-distributed p.footer-links {
      font-size: 18px;
      font-weight: bold;
      color: #ffffff;
      margin: 0 0 10px;
      padding: 0;
      transition: ease .25s;
    }
    
    .footer-distributed p.footer-links a {
      display: inline-block;
      line-height: 1.8;
      text-decoration: none;
      color: inherit;
      transition: ease .25s;
    }
    
    .footer-distributed .footer-links a:before {
      content: "·";
      font-size: 20px;
      left: 0;
      color: #fff;
      display: inline-block;
      padding-right: 5px;
    }
    
    .footer-distributed .footer-links .link-1:before {
      content: none;
    }
    
    .footer-distributed .footer-right {
      float: right;
      margin-top: 6px;
      max-width: 180px;
    }
    
    .footer-distributed .footer-right a {
      display: inline-block;
      width: 35px;
      height: 35px;
      background-color: #33383b;
      border-radius: 2px;
      font-size: 20px;
      color: #ffffff;
      text-align: center;
      line-height: 35px;
      margin-left: 3px;
      transition:all .25s;
    }
    
    .footer-distributed .footer-right a:hover{transform:scale(1.1); -webkit-transform:scale(1.1);}
    
    .footer-distributed p.footer-links a:hover{text-decoration:underline;}
    
    /* Media Queries */
    
    @media (max-width: 600px) {
      .footer-distributed .footer-left, .footer-distributed .footer-right {
        text-align: center;
      }
      .footer-distributed .footer-right {
        float: none;
        margin: 0 auto 20px;
      }
      .footer-distributed .footer-left p.footer-links {
        line-height: 1.8;
      }
    }

    </style>
  <script>
       function fun(){
	       swal("Download Success !", "Click the OK button", "success");
	   }
   </script>
</head>
<body>
<div class ="bgcolor">
<div class="row ">
<div class="col-2 col-xl-2 col-lg-2 mt-1 mb-1"> 
<img src="/image/lgo1.png" alt=""> 

</div>
</div>

<div class="col-2 col-xl-2 col-lg-2 mt-1 mb-1"> 

</div>

<div class="col-2 col-xl-2 col-lg-2 mt-1 mb-1"> 

</div>


<div class="col-2 col-xl-2 col-lg-2 mt-1 mb-1"> 

</div>

<div class="col-2 col-xl-2 col-lg-2 mt-1 mb-1"> 

</div>


</div>



<div class="topnav" id="myTopnav">
  <a href="#home">Home</a>
  <a href="#news">Classes</a>
   <a href="#about">Attendance</a>
  <a href="/rhome">Resourses</a>
  <a href="#about">Exams</a>
  <a href="#about">Payments</a>
  <a href="#about">Notices</a>
   <a href="#about">Timetable</a>
   <a href="#about">Feedback</a>
  <a href="#about">Sign up</a>
  <a href="#about">Log in</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</br>
</br>
</br>
</br>
<center>
    <div class="pdf">
  <table>
  
 @foreach($subjects as $task)
 <h2>grade {{$task->grade}}</h2>
      <tr>
           <th>subject :</th><th>{{$task->subject}}</th>
      </tr>
      <tr>
           <th>description :</th><th>{{$task->description}}</th>
      </tr>
      <tr>
           <th>PdF :</th><th>{{$task->file}}</th>
          
     </tr>
     <tr>
                  <th>
                  <a href="/view/{{$task->id}}">
                  <button class="btn btn-primary">View <ion-icon name="eye-outline"></ion-icon></button>
                  </a>
                  </th>
                  <th>
                  <a href="/download/{{$task->file}}">
                  <button class="btn btn-primary" onclick="fun()">Download <ion-icon name="cloud-download-outline"></ion-icon></button>
                  </a>
                  </th>
           </tr>
   
 @endforeach
    </br>
  </table>
    </br>
    </div>
</center>
</br>
</br>
</br>
<div class="foot">
<footer class="footer-distributed">

<div class="footer-right">

  <a href="#"><i class="fa fa-facebook"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-github"></i></a>

</div>

<div class="footer-left">

<p>Tutoring Tube &copy; 2021</p>
</div>

</footer>
</body>
</html>