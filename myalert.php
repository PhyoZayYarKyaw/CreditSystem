<!DOCTYPE html>
<html>
   <head>
      <script src="js/jquery.min.js"></script>
      <script>
         function functionAlert(msg, myYes) {
            var confirmBox = $("#confirm");
            confirmBox.find(".message").text(msg);
            confirmBox.find(".yes").unbind().click(function() {
               confirmBox.hide();
            });
            confirmBox.find(".yes").click(myYes);
            confirmBox.show();
         }
      </script>
      <style>
         #confirm {
            display: none;
            background-color: #F3F5F6;
            color: #000000;
            border-radius: 25px;
            border: 3px solid #aaa;
            padding : 0 px;
            position: fixed;
            width: 300px;
            height: 150spx;
            left: 40%;
            top: 40%;
            box-sizing: border-box;
            text-align: center;
         }
         #confirm button {
            background-color: #FFFFFF;
            display: inline-block;
            border-radius: 12px;
            border: 4px solid #aaa;
            padding: 5px;
            text-align: center;
            width: 60px;
            cursor: pointer;
         }
         #confirm .message {
            text-align: center;
         }
      </style>
   </head>
   <body>
      <div id="confirm">
         <div class="message"><br>Hello User. Welcome to My Website. Click OK.</div><br>
         <button class="yes">OK</button>
      </div>
      <input type="button" value="Click Me" onclick="functionAlert();" />
   </body>
 </html>





  