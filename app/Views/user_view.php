<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add New User</title>

   </head>
   <body>
       <table border=1>
         <thread>
           <tr>
               <th>User Id</th>
               <th>Nama</th>
               <th>E-mail</th>
               <th>Aksi</th>
           </tr>
         </thread>
         <tbody>
             <?php foreach($user as $row);?>
             <tr>
                  <td><?= $row['user_id'];?></td>
                  <td><?= $row['user_nama'];?></td>
                  <td><?= $row['user_email'];?></td>
                  <td> <a href="/user/edit/<?= $row['user_id'];?>">Edit</a></td>
                       <a href="/user/delete/<?= $row['user_id'];?>)">Delete</a>
                  </td>
               </tr>
            <?php endforeach;?>
         </tbody>
      </table>
      </body>
      </html>

      
   