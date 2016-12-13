<?php
   $pageTitle = "Contact"; 
   include "inc/top-part.inc";
?>
   
   <div class="border" style="height: 400px; margin-bottom: 100px;">
         <h2>Contact Me!</h2>
         <p>If you have questions, comments, or concerns, please don't hesitate to reach out to me.</p>

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

      <textarea id="messageBox" rows="4" cols="50" name="message" form="myForm"> Enter message here...</textarea>
   </div>
      
<?php include "inc/footer.inc" ?>