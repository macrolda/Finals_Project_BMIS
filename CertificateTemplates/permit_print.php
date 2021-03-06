<html>
<head>
  <title>BARANGAY CLEARANCE SYSTEM</title>
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initialscale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
  
  <style>
    .print{
      text-align: justify;
    }
    .flex-parent{
      display: flex;
    }
    .flex1{
      flex: 1;
    }
    img{
      width: 130px;
      height: 130px;
    }
    .margin-top-50{
      margin-top: 50px;
    }
    .uppercase{
      text-transform: uppercase;
    }
    .undeline{
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container-fluid print">
    <div class="flex-parent">
      
            <div class="flex1 text-left">
              <div class="img">
                <td><img class="image" src="image/logo_2.png"></td>
              </div>
            </div>

            <div class="flex1 text-center">
              <h5>Republic of the Philippines</h5>
              <h5>Province of Cebu</h5>
              <h5>Municipality of Talisay </h5>
              <h5>Barangay Tabunok</h5>
            </div>
          
      <div class="flex1">
        <div class="text-right">
         
                <td><img class="image" src="image/logo_1.png"></td>

        </div>
      </div>
    </div>
    <div class="text-center">
      <h4><b>OFFICE OF THE PUNONG BARANGAY</b></h4>
    </div>
    <div class="text-center content margin-top-50">
      <h3><b>BARANGAY BUSINESS PERMIT</b></h3>
    </div>
    <div class="content margin-top-50">
      <h4 class='underline'><b>TO WHOM IT MAY CONCERN:</b></h4>
    </div>
   
        <div class="content margin-top-50" style='text-indent: 50px;'>
          <h4>THIS IS TO CERTIFY that <input type="text" name="name" value="FULLNAME">

            Filipino, single  and a bona fide resident of Brgy.Tabunok Talisay Cebu City is personally known to me to be a person of good moral character and law- abiding citizen of this community.</h4>
        </div>
        <div class="content margin-top-45" style='text-indent: 50px;'>
          <h4>That <input type="text" name="name" value="FULLNAME">  has not been convicted of any crime whatever neither is there any pending complaint against her before the Barangay Court of Justice of said barangay.</h4>
        </div>
        <div class="content margin-top-45" style='text-indent: 50px;'>
          <h4>That <input type="text" name="name" value="FULLNAME"> has engaged a business of <input type="text" name="name" value="BUSINESS NAME">and granted a permit to operate the same as mentioned.</h4>
        </div>
        <div class="content margin-top-45" style='text-indent: 50px;'>
          <h4>This permit is issued upon the request of the interested party for whatever legal purpose this may serve him  most.</h4>
        </div>
        <div class="content margin-top-45" style='text-indent: 50px;'>
          <h4>
            ISSUED this <b><span id='date'></span> day of <span id='month'></span> <span id='year'></span></b> at Barangay Tabunok Talisay Cebu City Philippines.
          </h4>
        </div>
    
    <div class=" margin-top-50">
      <div class="margin-top-50">
          <div class="flex-parent">
            <div class="flex1"></div>
            
            <div class="flex1">
              <div class="flex1">
      <h4 class="text-center"><input type="text" name="name" value="BRGY. CAPTAIN NAME"> </h4>
              <h4 class="text-center">Punong Barangay</h4>
            </div>
          </div>
        
      </div>
    </div>
    <div class=" margin-top-50">
      <h4 style="width: 100xp;">Paid OR No <span style="margin-left: 20px;">: <input type="text" name="name" value="OR NUMBER"> </span></h4>
      <h4>Issued on <span style="margin-left: 38px;"></span>: <span id="month2"></span> <span id="date2"></span> <span id="year2"></span><h4>
      <h4>Issued at <span  style="margin-left: 43px;"></span>: Barangay Tabunok Talisay Cebu City</h4>
    </div>
    
  </div>
<script>
  var y = new Date();
  var m = new Date();
  var d = new Date();
 
  var month = ["January","February","March","April","May","June","July","August","September","October","November","December"];
  var day = d.getDate("1-31");

  if (day == 1 && day != 11) {
    document.getElementById("date").innerHTML = d.getDate("1-31") + "st";
  }else if(day == 2 && day != 12){
    document.getElementById("date").innerHTML = d.getDate("1-31") + "nd";
  }else if(day == 3 && day != 13){
    document.getElementById("date").innerHTML = d.getDate("1-31") + "rd";
  }else{
    document.getElementById("date").innerHTML = d.getDate("1-31") + "th";
  }
  document.getElementById("year").innerHTML = y.getFullYear("yyyyy");
  document.getElementById("month").innerHTML = month[m.getMonth("0-11")];

    document.getElementById("date2").innerHTML = d.getDate("1-31") + ",";
  document.getElementById("year2").innerHTML = y.getFullYear("yyyyy");
  document.getElementById("month2").innerHTML = month[m.getMonth("0-11")];
</script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<script>
  function myFunction() {
      window.print();
   }
   myFunction();
</script>
</body>
</html>