<nav aria-label="breadcrumb">
   <ol class="breadcrumb">
      <li class="breadcrumb-item active"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Menu</a></li>
      <div class="btn btn-info" style="float: right"><a href="<?php echo admin_url('menu')?>/add">Thêm mới</a></div>
      <div class="clearfix"></div>
   </ol>
</nav>

<div class="panel panel-success">
   <div class="panel-heading">
      <h3 class="panel-title">Danh sách Menu</h3>

   </div>
   <div class="panel-body">
      <div class="div" style="padding:10px">
         <div class="table-reponsive">
            <table class="table table-bordered table-hover" >
                <?php if($this->session->flashdata('message')):?>
               <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong> <?php echo  $this->session->flashdata('message');?> </strong>
               </div>
                <?php endif;?>
               <thead>
               <form action="<?php echo admin_url('menu')?>/delete_all" method="post">
               <tr style="background-color: #44c25b;" >
                  <th scope="col" width="20px" >STT</th>
                  <th scope="row"><input type="checkbox" value="" id="checkAll" style="width: 18px;height: 18px"></th>
                  <th scope="col" style="width: 160px">Tên Thực Đơn</th>
                  <th  width="80px">Hình Ảnh</th>
                  <th scope="col">Mô tả</th>
                  <th scope="col">Giá</th>
                  <th scope="col">Trạng thái</th>
                  <th scope="col">Loại</th>
                  <th scope="col" colspan="2">Tùy Chọn</th>
               </tr>
               </thead>
               <tbody>
             <?php if(count( $menu_list ) >1){?>
             <?php $i=1; foreach ($menu_list as $value) :?>
                <tr>
                   <th ><?= $i++?></th>
                   <th><input class="checkboxs" type="checkbox" value="<?php echo $value->id?>" name="ids[]" style="width: 18px;height: 18px"></th>
                   <th><?= $value->name?></th>
                   <th  width="70px" style="padding: 5px"><img src="<?php echo base_url()?>/uploads/menu/<?=$value->img?> " alt=""></th>
                   <th ><?= $value->description?></th>
                   <th ><?= $value->price?> $</th>
                   <th ><?= ($value->status == 1 ) ? 'Hiện' : 'Ẩn' ?></th>
                   <th ><?php  if ($value->type == 1){echo 'Bữa sáng';}
                      elseif ($value->type==2){echo 'Bữa trưa';}elseif ($value->type==3)
                       {echo 'Bữa tối';}else{ echo 'Bữa đặc biệt';}?></th>
                   <th ><a href="<?php echo admin_url('menu')?>/edit/<?php echo $value->id?>">Sửa</a>   </th>
                   <th onclick=" return  confirm ('Bạn Chắc chắn xóa không ?')" ><a href="<?php echo admin_url('menu')?>/del/<?php echo $value->id?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Xóa</a>  </th>
                </tr>
             <?php endforeach;?>
               <?php }else{?>
                 <th colspan="8">Không có dữ liệu</th>
               <?php }?>

               </tbody>
            </table>
            <div class="list_action itemActions">
               <input onclick=" return confirm('Bạn đã chắc chắn ?')" type="submit"  class="btn btn-info" value="Xóa hết" >
            </div>
            </form>
         </div>
      </div>
</div>