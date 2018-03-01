<table class="table table-bordered table-stripped">
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Address</th>
    <th>Hoby</th>
    <th>Action <button type="button" class="btn btn-primary btn-small input" style="float: right;" data-toggle="modal" data-target="#modalinput" >Input data</button></th>
  </tr>
  <?php 
    include_once "include/konek.php";
    $sql = sqlsrv_query($konek, "select * from data order by id ASC");
    while($row = sqlsrv_fetch_array($sql)){
    echo "
    <tr>     
      <td>".$row['id']."</td>
      <td>".$row['name']."</td>
      <td>".$row['address']."</td>
      <td>".$row['hoby']."</td>
      <td style='text-align : center'><a href='#' class='btn btn-default btn-small edit' data-target='#myModal' data-toggle='modal' onclick='edit(".$row['id'].")'>Edit</a>
          <a href='#' class='btn btn-danger btn-small' onclick='del(".$row['id'].")'>Delete</a>
      </td>
    </tr>";
    }
  ?>
</table>