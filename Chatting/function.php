<?php



function findUser($id)
{
    for($i=0;$i<count($_SESSION['userlist']);$i++)
    {
        if($_SESSION['userlist'][$i]["user_id"]==$id)
        {
            return true;

        }
    }
return false;
}

function findUserDetail($id)
{
    for($i=0;$i<count($_SESSION['userlist']);$i++)
    {
        if($_SESSION['userlist'][$i]["user_id"]==$id)
        {
            return $_SESSION['userlist'][$i];
        }
    }
return false;

}
function appendUserId($id1,$id2)
{
    $id1.=$id2;

    return $id1;
}
// function fetchMessage($fromuser_id,$touser_id,$conn)
// {
//     $sql="Select * from tbl_message WHERE (fromuser_id=$fromuser_id && touser_id=$touser_id) 
//     OR (fromuser_id=$touser_id && touser_id=$fromuser_id) ORDER BY msg_id ASC";
    
//     $result=mysqli_query($conn,$sql);

//     if(mysqli_num_rows($result)>0)
//     {
//         while($row=mysqli_fetch_array($result))
//         { 
//            if($row['fromuser_id']==$fromuser_id)
//            {
//                $output .= '<div class="message my_msg">
//                                 <div class="delete_icon" id="'.$row['msg_id'].'">
//                                     <h4><ion-icon name="trash-outline"></ion-icon></h4>
//                                 </div>
//                                 <p>'.decrypthis($row['messages'],$key,appendUserId($row['fromuser_id'],$row['touser_id'])).'<br><span>'.$row['date'].'</span></p>
                            
//                                </div>';
           
//            }
//           else{
//               $output .= '<div class="message friend_msg">
//                                 <p>'.decrypthis($row['messages'],$key,appendUserId($row['fromuser_id'],$row['touser_id'])).'<br><span>'.$row['date'].'</span></p>
//                                 <div class="delete_icon" id="'.$row['msg_id'].'">
//                                     <h4><ion-icon name="trash-outline"></ion-icon></h4>
//                                 </div>
//                             </div>';
            
//              } 
             
               
//         }
           
        
//     }
//    echo $output;
// }



// function onScanSuccess(decodedText, decodedResult) {
//     // Handle on success condition with the decoded text or result.
//     console.log(Scan result: ${decodedText}, decodedResult);
//     var hash = decodedResult.decodedText;


//     var found = getValueByKey(books['datas'], "hash", hash);

//     if (found.id == null) {
//         $.ajax({
//             type: "GET",
//             url: "<%=application.getContextPath()%>/Forms/PatronSearch?hash=" + hash,
//             data: "user",
//             success: function (response) {
//                 patron = $.parseJSON(response);
//                 console.log(patron['user']);
//                 if (patron['user'].id == null) {
//                     alert("NO Such Book or User Exists!");
//                 } else {
//                     $('#alertModal').modal('show');


//                 }
//             },
//             dataType: "html"
//         });


//     } else {
//         t.row.add([
//             found.id,
//             found.name,
//             found.isbn,
//             found.publisher,
//             found.available
//         ]).draw(false);
//         counter++;
//     }


// }
?>
