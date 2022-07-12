<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,500&display=swap');
    </style>
    <title>Manage Question</title>

    <style>
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

        .footer-distributed {
            background-color: #292c2f;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: normal 16px sans-serif;
            padding: 45px 50px;
        }

        .footer-distributed .footer-left p {
            color: #8f9296;
            font-size: 14px;
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
</head>
<body>

    <header class="header">

        <div class="text-center">
            <img src="{{URL('/image/lgo1.png')}}" alt="">
        </div>
        <div class="topnav" id="myTopnav">
            <a href="#home">Home</a>
            <a href="/admincmanage">Classes</a>
            <a href="#about">Attendance</a>
            <a href="/rhome">Resourses</a>
            <a href="/examHome" class="active">Exams</a>
            <a href="/cartview">Payments</a>
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

    </header>

 
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="p-3 mb-2 bg-dark text-white"  style="height: 100%;">
                    <div class="text-center"> <br><br>
                    <img src="https://img.icons8.com/external-vitaliy-gorbachev-blue-vitaly-gorbachev/60/000000/external-exam-online-learning-vitaliy-gorbachev-blue-vitaly-gorbachev-1.png"/>
                    <br><br><br>
                    <p style="font-family: 'Poppins', sans-serif; font-size: 28px; margin: 0px;"> Exam Name - {{$examQuestions->exam}} </p>
                    <hr style="border: 1px solid rgb(216, 216, 216);">

                    <p style="font-family: 'Poppins', sans-serif; font-size: 20px; text-align: left; margin: 20px;"> Exam Class - {{$examQuestions->class}} </p>
                    <p style="font-family: 'Poppins', sans-serif; font-size: 20px; text-align: left; margin: 20px;"> Exam Type  - {{$examQuestions->examType}} </p>
                    <p style="font-family: 'Poppins', sans-serif; font-size: 20px; text-align: left; margin: 20px;"> Start Time - {{$examQuestions->startTime}} </p>
                    <p style="font-family: 'Poppins', sans-serif; font-size: 20px; text-align: left; margin: 20px;"> End Time   - {{$examQuestions->endTime}} </p>
                    <p style="font-family: 'Poppins', sans-serif; font-size: 20px; text-align: left; margin: 20px;"> Duration   - {{$examQuestions->duration}} </p>

                    <hr style="border: 1px solid rgb(216, 216, 216);">

                    <br>
                    <a href="/addQusetion" class="btn btn-primary" style="width: 80%; height: 50px; padding: 10px; font-family: 'Poppins', sans-serif; font-size: 20px;"> Add New Question </a>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="text-center">
                    
                    <h1 class="display-6"> Question Management </h1>
                    <br>

                    <div class="row">
                        <div class="col">
                            <div class="p-3 mb-2 bg-primary text-white" style="height: 100px;">
                                <p style="font-family: 'Poppins', sans-serif; font-size: 18px; margin: 0px;"> No of Questions </p>
                                <p style="font-family: 'Raleway', sans-serif; font-size: 34px;"> {{$examQuestions->noOfQues}} </p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-3 mb-2 bg-success text-white" style="height: 100px;">
                                <p style="font-family: 'Poppins', sans-serif; font-size: 18px; margin: 0px;"> Added Questions </p>
                                <p style="font-family: 'Raleway', sans-serif; font-size: 34px;"> 10 </p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-3 mb-2 bg-danger text-white" style="height: 100px;">
                                <p style="font-family: 'Poppins', sans-serif; font-size: 18px; margin: 0px;"> Total Marks </p>
                                <p style="font-family: 'Raleway', sans-serif; font-size: 34px;"> {{$examQuestions->totMarks}} </p>
                            </div>
                        </div>
                    </div>

                </div>

                <br>

                <div class="p-3 mb-2 bg-light text-dark">
            
                        @foreach($questions as $getQuestion)
                            <div class="row">
                                
                                <div class="col-9">
                                    <div class="p-3 mb-2 bg-light text-dark border border-secondary border-4 rounded">
                                        <p style="font-family: 'Poppins', sans-serif; font-size: 24px; text-align: center;" class="p-3 mb-2 bg-dark text-white"> Question {{ $getQuestion->questionNo }} </p>
                                        <p style="font-family: 'Poppins', sans-serif; font-size: 24px;"> {{ $getQuestion->questionNo }}. {{ $getQuestion->question }} </p>
                                        <div class="row">
                                            <div class="col">
                                                <p style="font-family: 'Poppins', sans-serif; font-size: 18px;"> 01. {{ $getQuestion->answer01 }} </p>
                                                <p style="font-family: 'Poppins', sans-serif; font-size: 18px;"> 02. {{ $getQuestion->answer02 }} </p>
                                            </div>
                                            <div class="col">
                                                <p style="font-family: 'Poppins', sans-serif; font-size: 18px;"> 03. {{ $getQuestion->answer03 }} </p>
                                                <p style="font-family: 'Poppins', sans-serif; font-size: 18px;"> 04. {{ $getQuestion->answer04 }} </p>
                                            </div>
                                        </div>    
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="p-3 mb-2 bg-dark text-white" style="height: 250px;">
                                        <p style="font-family: 'Poppins', sans-serif; font-size: 18px; margin: 0px;"> Correct Answer - {{$getQuestion->correctAnswer}} </p> <br>
                                        <p style="font-family: 'Poppins', sans-serif; font-size: 18px; margin: 0px;"> Allocate Marks - {{$getQuestion->allocateMark}} </p> <br>

                                        <div class="text-center">
                                            <a href="/" class="btn btn-success" style="width: 50%; margin: 10px;"> Update </a>
                                            <a href="/" class="btn btn-danger" style="width: 50%;"> Delete </a>
                                        </div>
                                    </div>

                                    
                                
                                </div>

                            </div>
                            <br><br>
                        @endforeach
                        
                        
                    
                </div>
            </div>

        </div>
    </div>


    <br>
    <footer class="footer-distributed">

        <div class="container-lg">

            <div class="footer-right">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>

            </div>

            <div class="footer-left">
                <p>Tutoring Tube &copy; 2021</p>
            </div>
        
        </div>
                
    </footer>
            
    

    
</body>
</html>