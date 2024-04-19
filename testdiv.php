<!DOCTYPE HTML> 
<html> 
  
<head> 
    <title> 
        How to hide div element by default 
        and show it on click using  
        JavaScript and Bootstrap ? 
    </title> 
      
    <style> 
        #div { 
            display: none; 
            background: green; 
            height: 100px; 
            width: 200px; 
            margin: 0 auto; 
            color: white; 
        } 
    </style> 
      
    <link rel="stylesheet" href= 
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
      
    <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"> 
    </script> 
</head> 
  
<body style="text-align:center;"> 
      
    <h1 style="color:green;">  
        GeeksForGeeks  
    </h1> 
      
    <p id="GFG_UP"></p> 
      
    <div id="div"> 
        This is Div box. 
    </div> 
    <br> 
      
    <button onClick="GFG_Fun()"> 
        click here 
    </button> 
    <br> 
      
    <p id="GFG_DOWN" style="color: green;"></p> 
      
    <script> 
        $('#GFG_UP').text( 
        "Click on button to toggle the DIV Box using Bootstrap."); 
  
        function show(divId) { 
            $("#" + divId).show(); 
        } 
  
        function GFG_Fun() { 
            show('div'); 
            $('#GFG_DOWN').text("DIV Box is visible."); 
        } 
    </script> 
</body> 
  
</html> 





