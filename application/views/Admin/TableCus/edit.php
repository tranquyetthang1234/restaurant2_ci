<div class="cnt" style="padding: 15px">

   <div class="row">
      <form role="form" action="<?php echo admin_url('TableCus')?>/edit/<?=$service->id?>" method="post" enctype="multipart/form-data">
         <div class="col-xs-6 col-sm-offset-3">
            <div class="panel panel-primary">
               <div class="panel-heading">
                  <h3 class="panel-title">Sửa thông tin đặt bàn</h3>
               </div>
               <div class="panel-body">
                  <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                     <label for="exampleInputEmail1">Giờ</label>
                      <?php echo form_error('name');  ?>
                     <input type="text" class="form-control " value="<?php echo $service->time; ?>" name="time" id="exampleInputEmail1" placeholder="Tên món ăn">
                  </div>

                  <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                     <label for="exampleInputEmail1">Số điện thoại</label>
                      <?php echo form_error('name');  ?>
                     <input type="text" class="form-control " value="<?php echo $service->phone; ?>" name="phone" id="exampleInputEmail1" placeholder="Tên món ăn">
                  </div>
                  <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                     <label for="exampleInputEmail1">Số điện thoại</label>
                      <?php echo form_error('name');  ?>
                     <input type="text" class="form-control " value="<?php echo $service->calendar; ?>" name="calendar" id="exampleInputEmail1" placeholder="Tên món ăn">
                  </div>
                  <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                     <label for="exampleInputEmail1">Số người</label>
                      <?php echo form_error('name');  ?>
                     <input type="text" class="form-control " value="<?php echo $service->people; ?>" name="people" id="exampleInputEmail1" placeholder="Tên món ăn">
                  </div>

               </div>
            </div>
         </div>

         <div class="clearfix"></div>

         <div class="" style="float: right;margin-right: 50px">
            <input type="submit" class=" btn btn-info " value="Sửa" id="exampleInputPassword1" placeholder="Password">
         </div>
      </form>

   </div>