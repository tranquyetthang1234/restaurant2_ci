<div class="cnt" style="padding: 15px">

    <div class="row">
        <form role="form" action="<?php echo admin_url('menu')?>/edit/<?php echo $service->id?>" method="post" enctype="multipart/form-data">
            <div class="col-xs-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sửa món ăn</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                            <label for="exampleInputEmail1">Tên món ăn</label>
                            <?php echo form_error('name');  ?>
                            <input type="text" class="form-control " value="<?php echo $service->title; ?>" name="name" id="exampleInputEmail1" placeholder="Tên món ăn">
                        </div>
                        <div class="form-group <?php  echo form_error('description') ? 'has-error' : ''; ?>">
                            <label for="exampleInputPassword1">Mô tả</label>
                            <?php echo form_error('description');  ?>
                            <textarea name="description" id=""  rows="10" cols="70" "><?php echo $service->content; ?> </textarea>
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
                       <input type="radio" <?php echo  ($service->special ==1) ? 'checked' :'';?>  name="s" placeholder="Enter email" >
                       <label for="exampleInputEmail1">Bottom</label>
                       <input type="radio" <?php echo  ($service->special ==0) ? 'checked' :'';?>   name="s" placeholder="Enter email">
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
                <input type="submit" class=" btn btn-info " value="Cập nhật" id="exampleInputPassword1" placeholder="Password">
            </div>
        </form>

    </div>