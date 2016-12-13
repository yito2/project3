<?php
   $pageTitle = "Contact"; 
   include "inc/top-part.inc";
?>
   
   <div class="border" style="height: 400px; margin-bottom: 100px;">
         <h2>Contact Me!</h2>
         <p>If you have questions, comments, or concerns, please don't hesitate to reach out to me.</p>

   <form method="post" action="database-write.php">
         <div>
            <label for="name">Name: </label>
            <input type="text" name="name" id="name">
         </div>

         <div>
            <label for="email">Email: </label>
            <input type="text" name="email" id="email">
         </div>

         <div>
            <label for="phone">Phone Number: </label>
            <input type="text" name="phone" id="phone">
         </div>

         <div>
            <textarea id="message" rows="4" cols="50" name="message"> Enter message here...</textarea>
         </div>

         <div>
            <input type="submit" value="Submit">
         </div>
      </form>

   </div>
      
<?php include "inc/footer.inc" ?>