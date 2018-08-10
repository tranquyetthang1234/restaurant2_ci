<div class="cnt" style="padding: 15px">

   <div class="row">
      <form role="form" action="<?php echo admin_url('Contact')?>/edit/<?=$service->id?>" method="post" enctype="multipart/form-data">
         <div class="col-xs-6 col-sm-offset-3">
            <div class="panel panel-primary">
               <div class="panel-heading">
                  <h3 class="panel-title">Sửa thông tin đặt bàn</h3>
               </div>
               <div class="panel-body">
                  <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                     <label for="exampleInputEmail1">Tên</label>
                      <?php echo form_error('name');  ?>
                     <input type="text" class="form-control " value="<?php echo $service->name; ?>" name="name" id="exampleInputEmail1" placeholder="Tên món ăn">
                  </div>

                  <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                     <label for="exampleInputEmail1">	Chủ đề</label>
                      <?php echo form_error('name');  ?>
                     <input type="text" class="form-control " value="<?php echo $service->subject; ?>" name="subject" id="exampleInputEmail1" placeholder="Tên món ăn">
                  </div>
                  <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                     <label for="exampleInputEmail1">Email</label>
                      <?php echo form_error('name');  ?>
                     <input type="text" class="form-control " value="<?php echo $service->email; ?>" name="email" id="exampleInputEmail1" placeholder="Tên món ăn">
                  </div>
                  <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                     <label for="exampleInputEmail1">Số điện thoại</label>
                      <?php echo form_error('name');  ?>
                     <input type="text" class="form-control " value="<?php echo $service->phone; ?>" name="phone" id="exampleInputEmail1" placeholder="Tên món ăn">
                  </div>
                  <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                     <label for="exampleInputEmail1">Nội dung</label>
                      <?php echo form_error('name');  ?>
                     <textarea name="content" id="" cols="30" rows="10" ><?= $service->content?></textarea>
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