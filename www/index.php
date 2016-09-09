<?php
error_reporting(E_ALL);

    require("../util/databasefunctions.php");
require_once ("../util/schoolBean.php");
    $df=new Databasefuncions;
   if(isset($_POST["addschool"]))
   {
       $school=$_POST["school"];
       if($df->insertintoschool($school))
       {
       
           echo"Done";
       }
       
   }
    $list=$df->selectfromschool();
    foreach ($list as $item)
    {

    }
?>


<html>
   <head>
       <title>
            TheCYberSpace Message Gateway
        </title>
   </head>
   <body>
       <h1>
           Welcome to message gateway <hr/>
       </h1>
        <h3>Edit School</h3>
         <form>
         <select id="sbox" >
            <?php

                foreach ($list as $item)
                {

                }

           ?>
      </select>
           
           
           <input type="submit"  name="editschool" value="Edit"/>
                  </form>
       
       -------------------------------------------------
       
       
       <h3>Add new School</h3>
       <form action="" method="post">
       <table border="1">
           <tr>
               <th>
                   <label>School name</label>
          
            
               </th>
               <th>
                   <input type="text" required value="" name="sschoolname"/>
               </th>
           </tr>
           <tr>
               <th>
                   <label>Discription</label>
               </th>
               <th>
                   <input type="text"  value="" name="sdiscription"/>
               </th>
           </tr>
           <tr>
               <th>
                    <label>Owner name</label>
            
               </th>
               <th>
                   <input type="text"  value="" name="sowner"/>
               </th>
           </tr>
           <tr>
               <th>
                    <label>email</label>
              
               </th>
               <th>
                   <input type="email"  value="" name="semail"/>
               </th>
           </tr>
           <tr>
               <th>
                   <label>Mobile </label>
              
               </th>
               <th>
                   <input type="number"  value="" name="smobile"/>
               </th>
           </tr>
           <tr>
               <th>
                    <label>Subscription</label>
                
               </th>
               <th>
                   <select name="ssubscription"><option value="0">Year</option><option value"1">Month</option></select>
               </th>
           </tr>
           <tr>
               <th>
                   <label>Status</label>
                 
               </th>
               <th>
                   <input type="text"  value="" name="sstatus"/>
               </th>
           </tr>
           <tr>
               <th>
                   <label>Coments</label>
                  
                   
               </th>
               <th>
                   <input type="text"  value="" name="scoments"/>
               </th>
           </tr>
           <tr>
               <th>
                   <label>Username </label>
                  
               </th>
               <th>
                   <input type="text"  value="" name="susername"/>
               </th>
           </tr>
           <tr>
               <th>
                    <label>Password </label>
                   
               </th>
               <th>
                   <input type="text"  value="" name="spassword"/>
               </th>
           </tr>
           <tr>
               <th>
                   <label>Date</label>
               </th>
               <th>
                   <input type="date"  value="" name="sdate"/>
               </th>
           </tr>
           <tr>
              
               <th colspan="2">
                   <input type="submit" name="addschool" value="ADD"/>
               </th> 
           </tr>
           
           
       </table>
       
           
           
       </form>
       
       
        
    </body>
</html>
