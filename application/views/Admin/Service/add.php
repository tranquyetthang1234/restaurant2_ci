<div class="cnt" style="padding: 15px">

  <div class="row">
      <form role="form" action="<?php echo admin_url('service')?>/add" method="post" enctype="multipart/form-data">
      <div class="col-xs-6">
          <div class="panel panel-primary">
              <div class="panel-heading">
                  <h3 class="panel-title">Thêm mới các dịch vụ của cửa hàng</h3>
              </div>
              <div class="panel-body">
                      <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                          <label for="exampleInputEmail1">Tiêu đề</label>
                          <?php echo form_error('name');  ?>
                          <input type="text" class="form-control " value="<?php echo set_value('name'); ?>" name="title" id="exampleInputEmail1" placeholder="Tên món ăn">
                      </div>
                      <div class="form-group <?php  echo form_error('description') ? 'has-error' : ''; ?>">
                          <label for="exampleInputPassword1">Nội dung</label>
                          <?php echo form_error('description');  ?>
                          <textarea name="content" id=""  rows="10" cols="70" "></textarea>
                      </div>

              </div>
          </div>
      </div>
      <div class="col-xs-6">
              <div class="panel panel-primary">
                  <div class="panel-heading">
                      <h3 class="panel-title">.</h3>
                  </div>
                  <div class="panel-body">

                      <div class="form-group">
                          <label for="exampleInputEmail1">Hình ảnh</label>
                          <input type="file" class="form-control"name="imgs" placeholder="Enter email">
                      </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Vị trí hiện thị : </label>
                        <label for="exampleInputEmail1">Top</label>
                        <input type="radio"  name="s" placeholder="Enter email" checked>
                        <label for="exampleInputEmail1">Bottom</label>
                        <input type="radio" name="s" placeholder="Enter email">
                     </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Trạng thái (Hiện thị / Ẩn)</label>
                          <input type="checkbox" checked class="form-control" name="status" placeholder="Password">
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