<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      form{
              border:2px solid black;
              padding : 20px 60px 20px 60px;
              margin:20px 260px 20px 260px;
             border-radius:10px;
        }
        input[type="text"]{
            width:370px;
            border: 2px solid blue;
            height:39px;
            border-radius: 8px;
   }
   
   .dk{
       border: 2px solid blue;
       width:370px;
       height:39px;
       border-radius: 8px;
   }
   p{
       font-size: 45px;
       
   }
   label{
       font-size: 20px;
       
       
   }
   .back{
     
      align:center;
    }
   
    </style>
   
</head>
<body>
 
<center>


<form action="/update" method="POST" >
<table>
      <tr>
        <th>
{{csrf_field()}}
  <p>Update Tutes Details</p>
  <input type="hidden"  name="id" value="{{$taskdata->id}}"   class="dk">
  <label>Enter Subject code :</label></br>
  <input type="text"  name="code" value="{{$taskdata->code}}"  required class="dk"><br><br>
  
  <label>Enter Subject name :</label></br>
  <select name="subject" value="{{$taskdata->subject}}" class="dk">
       <option value="maths" >Maths </option>
	     <option value="science" >Science </option>
	     <option value="sinhala" >Sinhala </option>
       <option value="English" >English </option>
  </select>
  </br>
  </br>

  <label>Enter Grade  :</label></br>
  <select name="grade" value="{{$taskdata->grade}}" class="dk" >
       <option value="6" >6 </option>
	     <option value="7" >7 </option>
	     <option value="8" >8 </option>
	     <option value="9" >9 </option>
  </select>

  </br>
  </br>
   <label >Enter Quentity of tute :</label><br>
   <input type="Number"  name="quentity"  value="{{$taskdata->quentity}}" required class="dk"><br><br>
   
           <button  class="btn btn-primary"> Update</button>
         
  </br>
  </th>
   <th>
      
       <a href="/grade6">
       <img src="/image/back.jpg" width="60px" height="60px" class="back"  align="right">
        </a>   
         <center>
        <img src="/image/up.jpg" width="530px" height="400px">
        </center>
      
  </th>
  </tr>
  </table>
  </form> 
</div>
</center>
</body>
</html>