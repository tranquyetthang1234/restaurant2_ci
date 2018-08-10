<div class="cnt" style="padding: 15px">

    <div class="row">
        <form role="form" action="<?php echo admin_url('menu')?>/edit/<?php echo $menu_list->id?>" method="post" enctype="multipart/form-data">
            <div class="col-xs-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sửa món ăn</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group <?php  echo form_error('name') ? 'has-error' : ''; ?>" >
                            <label for="exampleInputEmail1">Tên món ăn</label>
                            <?php echo form_error('name');  ?>
                            <input type="text" class="form-control " value="<?php echo $menu_list->name; ?>" name="name" id="exampleInputEmail1" placeholder="Tên món ăn">
                        </div>
                        <div class="form-group <?php  echo form_error('description') ? 'has-error' : ''; ?>">
                            <label for="exampleInputPassword1">Mô tả</label>
                            <?php echo form_error('description');  ?>
                            <textarea name="description" id=""  rows="10" cols="70" "><?php echo $menu_list->description; ?> </textarea>
                        </div>
                        <div class="form-group <?php  echo form_error('price') ? 'has-error' : ''; ?>">
                            <?php echo form_error('price');  ?>
                            <label for="exampleInputPassword1">Giá</label>
                            <input type="number" class="form-control" name="price" value="<?php echo $menu_list->price; ?>" id="exampleInputPassword1" placeholder="Giá">
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
                            <img src="<?php echo  public_url('frontend')?>/images/<?php echo $menu_list->img?>" width="120px" alt="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Thuộc loại</label>
                            <select name="smenu" id="" class="form-control">
                                <option value="0">--Thuộc loại --</option>
                                <option value="1" <?php echo ($menu_list->type ==1) ?'selected':''; ?>>Bữa Sáng</option>
                                <option value="2" <?php echo ($menu_list->type ==2) ?'selected':''; ?>>Bữa Trưa</option>
                                <option value="3"<?php echo ($menu_list->type ==4) ?'selected':''; ?>>Đặc biệt trong ngày</option>
                                <option value="4"<?php echo ($menu_list->type ==3) ?'selected':''; ?>>Đồ uống</option>
                            </select>
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