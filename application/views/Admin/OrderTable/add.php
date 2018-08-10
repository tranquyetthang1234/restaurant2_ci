<div class="cnt" style="padding: 15px">

  <div class="row">
      <form role="form" action="<?php echo admin_url('OrderTable')?>/add" method="post" enctype="multipart/form-data">
      <div class="col-xs-6 col-sm-offset-3">
          <div class="panel panel-primary">
              <div class="panel-heading">
                  <h3 class="panel-title">Thêm mới các ý kiến từ khách hàng</h3>
              </div>
              <div class="panel-body">
                      <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                          <label for="exampleInputEmail1">Tên</label>
                          <?php echo form_error('name');  ?>
                          <input type="text" class="form-control " value="<?php echo set_value('name'); ?>" name="name" id="exampleInputEmail1" placeholder="Tên món ăn">
                      </div>
                       <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                          <label for="exampleInputEmail1">Nghề nghiêp</label>
                           <?php echo form_error('name');  ?>
                          <input type="text" class="form-control " value="<?php echo set_value('name'); ?>" name="job" id="exampleInputEmail1" placeholder="Tên món ăn">
                       </div>
                      <div class="form-group <?php  echo form_error('description') ? 'has-error' : ''; ?>">
                          <label for="exampleInputPassword1">Nội dung</label>
                          <?php echo form_error('name');  ?>
                          <textarea name="content" id=""  rows="10" cols="70" "></textarea>
                      </div>
                 <div class="form-group <?php  echo form_error('description') ? 'has-error' : ''; ?>">
                    <label for="exampleInputPassword1">Trạng thái</label>
                    <input type="checkbox" name="status">
                 </div>

              </div>
          </div>
      </div>

          <div class="clearfix"></div>

          <div class="" style="float: right;margin-right: 50px">
              <input type="submit" class=" btn btn-info " value="Thêm" id="exampleInputPassword1" placeholder="Password">
          </div>
      </form>

</div>