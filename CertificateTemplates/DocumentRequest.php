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
    </style>
</head>
<body>
    <div class="container-fluid print">
        <div class="flex-parent">
            
                    
                        <div class="flex1 text-left">
                            <div class="img">
                                <img src="image/logo_1.png">
                            </div>
                        </div>
                        <div class="flex1 text-center">
                            <h5>Republic of the Philippines </h5>
                            <h5>Province of Cebu </h5>
                            <h5>Municipality of Talisay </h5>
                            <h5>Barangay Tabunok </h5>
                        </div>
                    
            <div class="flex1">
                <div class="text-right">
                

                                <td><img class="image" src="image/logo_2.png"></td>
                                
                          
                             
                </div>
            </div>
        </div>
        <div class="text-center">
            <h3 style="text-decoration: underline;">Authorization Letter</h3>
        </div>
        <div class="content margin-top-50">
            <h4>SUBJECT: <b style="text-decoration: underline;">Document Request</b></h4>
        </div>
        <div class="content margin-top-50">
            <h4>TO WHOM IT MAY CONCERN:</h4>
        </div>
                <div class="content margin-top-50" style='text-indent: 50px;'>
                    <h4>This is to authorize <input type="text" name="name" value="FULLNAME">
                        to request reprinting of the latest Barangay<input type="text" name="name" value="CLEARANCE/PERMIT/RESIDENCY"> with Barangay Tabunok Talisay Cebu City. </h4>
                </div>
                <div class="content margin-top-50" style='text-indent: 50px;'>
                    <h4>In view thereof, <input type="text" name="name" value="FULLNAME"> is authorized to submit and sign the necessary documents to accomplish the aforesaid purposes.</h4>
                </div>
                <div class="content margin-top-50" style='text-indent: 50px;'>
                    <h4>Thank you for your kind assistance on the bearer of this letter.</h4>
                </div>
                <div class="content margin-top-50" style='text-indent: 50px;'>
                    <h4>
                        GIVEN this <b><span id='date'></span></b> day of <b><span id='month'></span> <span id='year'></span></b> at Barangay Tabunok Talisay Cebu City Philippines.
                    </h4>
                </div>
        
            
        <div class=" margin-top-50">
            <div class="margin-top-50">
                    <div class="flex-parent">
                        <div class="flex1"></div>
                        
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
            <h4>Issued at <span  style="margin-left: 43px;"></span>: Barangay Tabunok Talisay Cebu City </h4>
        </div>
        
    </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
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

    function ordinal(i){
        var a = i % 10,
            b = i % 100;

        if (a == 1 && b != 11) {
            return i + "st";
        }
        if (a == 2 && b != 12) {
            return i + "nd";
        }
        if (a == 3 && b != 13) {
            return i + "rd";
        }
        return i + "th";
    }
    
</script>
<script>
    function myFunction() {
        window.print();
    }
    myFunction();
</script>
</body>
</html>