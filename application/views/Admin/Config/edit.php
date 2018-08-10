<div class="cnt" style="padding: 15px">
<?php $menu_list = $listTable[0]?>
    <div class="row">
        <?php if($this->session->flashdata('message')):?>
           <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong> <?php echo  $this->session->flashdata('message');?> </strong>
           </div>
        <?php endif;?>
        <form role="form" action="<?php echo admin_url('Config')?>/edit/<?php echo $menu_list->id?>" method="post" enctype="multipart/form-data">
            <div class="col-xs-6">

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Cấu hình website</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                            <label for="exampleInputEmail1">Địa chỉ</label>
                            <?php echo form_error('name');  ?>
                            <input type="text" class="form-control " value="<?php echo $menu_list->address; ?>" name="address" id="exampleInputEmail1" placeholder="Tên món ăn">
                        </div>
                       <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                          <label for="exampleInputEmail1">Email</label>
                           <?php echo form_error('name');  ?>
                          <input type="text" class="form-control " value="<?php echo $menu_list->email; ?>" name="email" id="exampleInputEmail1" placeholder="Tên món ăn">
                       </div>
                       <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                          <label for="exampleInputEmail1">Facebook</label>
                           <?php echo form_error('name');  ?>
                          <input type="text" class="form-control " value="<?php echo $menu_list->facebook; ?>" name="facebook" id="exampleInputEmail1" placeholder="Tên món ăn">
                       </div>
                       <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                          <label for="exampleInputEmail1">Google +</label>
                           <?php echo form_error('name');  ?>
                          <input type="text" class="form-control " value="<?php echo $menu_list->gplus; ?>" name="gplus" id="exampleInputEmail1" placeholder="Tên món ăn">
                       </div>
                       <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                          <label for="exampleInputEmail1">Tiwter</label>
                           <?php echo form_error('name');  ?>
                          <input type="text" class="form-control " value="<?php echo $menu_list->tw; ?>" name="tw" id="exampleInputEmail1" placeholder="Tên món ăn">
                       </div>
                       <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                          <label for="exampleInputEmail1">Zalo</label>
                           <?php echo form_error('name');  ?>
                          <input type="text" class="form-control " value="<?php echo $menu_list->zala; ?>" name="zala" id="exampleInputEmail1" placeholder="Tên món ăn">
                       </div>
                       <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                          <label for="exampleInputEmail1">History Top</label>
                           <?php echo form_error('name');  ?>
                          <input type="text" class="form-control " value="<?php echo $menu_list->history_top; ?>" name="history_top" id="exampleInputEmail1" placeholder="Tên món ăn">
                       </div>
                       <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                          <label for="exampleInputEmail1">Left</label>
                           <?php echo form_error('name');  ?>
                          <textarea name="left" id="" cols="30" rows="10"><?php echo $menu_list->left; ?></textarea>

                       </div>
                       <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                          <label for="exampleInputEmail1">Right</label>
                           <?php echo form_error('name');  ?>
                          <textarea name="right" id="" cols="30" rows="10"><?php echo $menu_list->right; ?></textarea>

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

                       <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                          <label for="exampleInputEmail1">Điện thoại</label>
                           <?php echo form_error('name');  ?>
                          <input type="text" class="form-control " value="<?php echo $menu_list->phone; ?>" name="phone" id="exampleInputEmail1" placeholder="Tên món ăn">
                       </div>
                       <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                          <label for="exampleInputEmail1">Thời gian làm việc</label>
                           <?php echo form_error('name');  ?>
                          <input type="text" class="form-control " value="<?php echo $menu_list->time_work; ?>" name="time_work" id="exampleInputEmail1" placeholder="Tên món ăn">
                       </div>
                       <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                          <label for="exampleInputEmail1">Tên </label>
                           <?php echo form_error('name');  ?>
                          <input type="text" class="form-control " value="<?php echo $menu_list->name; ?>" name="name" id="exampleInputEmail1" placeholder="Tên món ăn">
                       </div>
                       <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                          <label for="exampleInputEmail1">Lịch sử</label>
                           <?php echo form_error('name');  ?>
                          <textarea name="history_bottom" id="" cols="30" rows="10"><?php echo $menu_list->history_bottom; ?></textarea>

                       </div>
                       <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                          <label for="exampleInputEmail1">Youtube</label>
                           <?php echo form_error('name');  ?>
                          <input type="text" class="form-control " value="<?php echo $menu_list->youtube; ?>" name="youtube" id="exampleInputEmail1" placeholder="Tên món ăn">
                       </div>
                       <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                          <label for="exampleInputEmail1">Địa chỉ IP</label>
                           <?php echo form_error('name');  ?>
                          <input type="text" class="form-control " value="<?php echo $menu_list->ip; ?>" name="ip" id="exampleInputEmail1" placeholder="Tên món ăn">
                       </div>

                       <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                          <label for="exampleInputEmail1">Thời gian cập nhật</label>
                           <?php echo form_error('name');  ?>
                          <input type="text" class="form-control " value="<?php echo $menu_list->updated_at; ?>" name="updated_at" id="exampleInputEmail1" placeholder="Tên món ăn">
                       </div>
                       <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                          <label for="exampleInputEmail1">Map</label>
                           <?php echo form_error('name');  ?>
                          <input type="text" class="form-control " value="<?php echo $menu_list->map; ?>" name="map" id="exampleInputEmail1" placeholder="Tên món ăn">
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