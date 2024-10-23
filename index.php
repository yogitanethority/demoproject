<?php
    include "connection.php";
?>
<table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>                       
                        <th>Description</th>
                        <th>Price</th>
                        <th>Rent</th>
                        <th>Deposit</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
$ret=mysqli_query($conn,"select * from products");
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {
 
?>
<!--Fetch the Records -->
                    <tr>
                        <td><?php echo $cnt;?></td>
                        <td><?php  echo $row['name'];?></td>
                        <td><?php  echo $row['description'];?></td>                        
                        <td><?php  echo $row['price'];?></td>
                        <td> <?php  echo $row['rent'];?></td>
                        <td> <?php  echo $row['deposit'];?></td>
                        
                    </tr>
<?php 
$cnt=$cnt+1;
} } else {?>
<tr>
<th style="text-align:center; color:red;" colspan="6">No Record Found</th>
</tr>
<?php } ?>                 
              
</tbody>
 </table>