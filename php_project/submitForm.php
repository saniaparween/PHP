<html>
    <head>
    <style>
        table {
    font-family: arial;
    border-collapse: collapse;
    width: 50%;
            margin-top: 10px;
    }

td, th {
    border: 2px solid grey;
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
        a{
            display: block;
            background-color: black;
            color: antiquewhite;
            width: 50px;
        }
        a:hover{
            color: green;
            background-color: lightgreen;
            padding: 8px 16px;
    text-decoration: none;

        }    
      
            h1{
                
    display: block;
    text-align: center;
    color: antiquewhite;
    padding: 8px 6px;
    text-decoration: overline;
    border: 5px solid grey;
        background-color: black;
            }  
        
        
        body{
            
            background-color: cornsilk;
            
        }
</style>
    
      
    </head>
    <h1>e-library</h1>

    <h3 style="color:green;">
    Registration Successfull</h3>
    <caption>Submitted Information</caption>
   
<body>  
    

<a href="welcome.php">home</a>
 

<?php
    echo "<table>";
    
        echo "<tr>";  
    echo"<th>";echo"Name";echo"</th>";
    echo "<td>"; echo $_POST["name"]; echo "</td>";
      echo "</tr>";
    
        echo "<tr>"; 
    echo"<th>";echo"Age";echo"</th>";
    echo "<td>"; echo $_POST["age"]; echo "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo"<th>";echo"email";echo"</th>";
    echo "<td>"; echo $_POST["email"]; echo "</td>";
    echo "</tr>";
       
        
    echo "</table>";
    
    
    
?>
   
</body>
</html>