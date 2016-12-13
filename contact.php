<html>
   
   <head>
      <title>Contact Form</title>
      
      <script type="text/javascript">
        
      function validate() {
         if(document.myForm.Name.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.Name.focus() ;
            return false;
         }
         
         if(document.myForm.EMail.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.EMail.focus() ;
            return false;
         }
         
         if(document.myForm.Phone.value == "" ) {
            alert( "Please provide your Phone Number!" );
            document.myForm.Phone.focus() ;
            return false;
         }
         return( true );
      }

      function validateEmail() {
         var emailID = document.myForm.EMail.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email address")
            document.myForm.EMail.focus() ;
            return false;
         }
         return( true );
      }

      </script>
      
   </head>
   
   <body>
      <form action="/cgi-bin/test.cgi" name="myForm" onsubmit="return(validate(), validateEmail());">
         
         <table cellspacing="2" cellpadding="2" border="1">
            <tr>
               <td align="right">Name</td>
               <td><input type="text" name="Name" /></td>
            </tr>
            
            <tr>
               <td align="right">EMail</td>
               <td><input type="text" name="EMail" /></td>
            </tr>
            
            <tr>
               <td align="right">Phone Number</td>
               <td><input type="text" name="Phone" /></td>
            </tr>
            
            <tr>
               <td align="right"></td>
               <td><input type="submit" value="Submit"/></td>
            </tr>
            
         </table>
      </form>

      <textarea rows="4" cols="50" name="comment" form="myForm"> Enter message here...</textarea>
      
   </body>
</html>