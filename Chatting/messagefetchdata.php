<?php
include'messagefetch.php';

?>


<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
      <script src="https://kit.fontawesome.com/0acf56a1e1.js" crossorigin="anonymous"></script>
      link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>      <script src="https://kit.fontawesome.com/0acf56a1e1.js" crossorigin="anonymous"></script>
    
  </head>
  <body>
  <table id="example" class="display" style="width:100%">
  <thead>
  <tr>
            <th>S.N.</th>
            <th>From User</th>
            <th>TO User</th>
            <th>Date</th>
        </tr>

  </thead>
      <tbody>
      <?php foreach($usermessage as $index =>$msg){ ?>   
        <tr>
            <td><?=$index + 1?></td>
            <td><?=$userinfo1[$index][0]?></td>
            <td><?=$userinfo[$index][0]?></td>
            <td><?=$msg['date']?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </body>
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js">
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
  <style type="text/css">
      #example
      {
          margin-left:77px;
          background-color:black;
      }
     #example,
 tr,
 td,
 th {
     border: 2px solid gray;
     padding: 10px 20px;
     font-family: sans-serif;
     
 }
 
 #example {
     border-collapse: collapse;
 }
 
 td a {
     color: black;
    
 }
 
 th {
     height: 25px;
     background-color: black;
     color: white;
 }
 
 td {
     text-align: center;
 }
 
 #example_wrapper {
     width: 70%;
     margin-left: auto;
     margin-right: auto;
     margin-top: 10%;
     font-size:20px;
     padding:10px 15px;
     
 }
 
 img {
     height: 90px;
 }
 
 tr:nth-child(even) {
     background-color: #f5f5f5;
 }
 
 tr:hover {
     background-color: #7f8c8d;
 }
 #example_length
{
    color:black;
    margin-bottom:10px;
    margin-left:77px;
    font-family: sans-serif;
}
#example_info
{
    color:black;
    margin-left:77px;
    font-family: sans-serif;
}
#example_paginate
{
    color:black;
    margin-left:77px;
    font-family: sans-serif;
}
input
{
    border:1px solid black;
}
  </style>
</html>
