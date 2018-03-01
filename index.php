<?php
  include "include/konek.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Crud without refresh with php and sqlserver">
    <meta name="keywords" content="crud" />
    <meta name="author" content="Kelvin Frasetia">
    <title>Crud without refresh</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
 
  <body>
    <div class="container">
      <div class="row" id="see"><?php include "see.php"; ?></div>
    </div>
 
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
          <form class="edit">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">My data</h4>
                </div>
                <div class="modal-body">
                  <div class="fetched-data"></div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" data-dismiss="modal" onclick="save2()">Save changes</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
                </div>
            </div>
          </form>
        </div>
    </div>
    <div class="modal fade" id="modalinput" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">My data</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched">
                      <div class="row">  
                        <form class="input" action="" method="post">
                        <table class="table table-stripped">
                          <tr>
                            <td>id</td>
                            <td>:</td>
                            <td><input type="text" class="form-control" placeholder="Your id" name="dataid" required></td>
                          </tr>
                          <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><input type="text" class="form-control" name="nam" placeholder="Your name" required style="text-transform:capitalize;"></td>
                          </tr>
                          <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td><textarea id="alamat" class="form-control" name="address" placeholder="Your address" style="text-transform:capitalize;" required=""></textarea></td>
                          </tr>
                          <tr>
                            <td>Hoby</td>
                            <td>:</td>
                            <td><input type="text" class="form-control" name="hoby" placeholder="Your hoby" required style="text-transform:capitalize;"></td>
                          </tr>
                        </table>
                        </form>
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="reset" class="btn btn-primary" data-dismiss="modal" name="save" onclick="save()">Save</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script>
      function save(){
        var data = $('.input').serialize();
        $.ajax({
          type: 'POST',
          url: "save.php",
          data: data,
          success: function() {
            $('#see').load("see.php");
          }
        });
      }

      function edit(id) {
        var id = id
        $.ajax({
          type: 'POST',
          url: "edit.php",
          data: "id="+id,
          success: function(data) {
            $('.fetched-data').html(data);
          }
        });
      };

      function del(id){
        var id = id
        $.ajax({
          type: 'POST',
          url: "delete.php",
          data: "id="+id,
          success: function(data) {
            $('#see').load('see.php');
          }
        });
      }

      function save2(){
        var data = $('.edit').serialize();
        $.ajax({
          type: 'POST',
          url: "save2.php",
          data: data,
          success: function() {
            $('#see').load("see.php");
          }
        });
      }
    </script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>