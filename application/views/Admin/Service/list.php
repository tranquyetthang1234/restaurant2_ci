<nav aria-label="breadcrumb">
   <ol class="breadcrumb">
      <li class="breadcrumb-item active"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Menu</a></li>
      <div class="btn btn-info" style="float: right"><a href="<?php echo admin_url('service')?>/add">Thêm mới</a></div>
      <div class="clearfix"></div>
   </ol>
</nav>

<div class="panel panel-success">
   <div class="panel-heading">
      <h3 class="panel-title">Các dịch vụ của cửa hàng</h3>
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
                  <tr style="background-color: #5c9cc6;" >
                     <th scope="col" width="20px" >STT</th>
                     <th scope="row"><input type="checkbox" value="" id="checkAll" style="width: 18px;height: 18px"></th>
                     <th scope="col" style="width: 160px">Tiêu đề</th>
                     <th  width="80px">Hình Ảnh</th>
                     <th scope="col">Mô tả</th>
                     <th scope="col">Vị Trí</th>
                     <th scope="col">Trạng thái</th>
                     <th scope="col" colspan="2">Tùy Chọn</th>
                  </tr>
               </thead>
               <tbody>
               <?php //print_r($service);?>
             <?php if(count( $service ) >1){?>
             <?php $i=1; foreach ($service as $value) :?>
                <tr>
                   <th scope="row"><?= $i++?></th>
                   <th scope="row"><input class="checkboxs" type="checkbox" value="<?php echo $value->id?>" name="ids[]" style="width: 18px;height: 18px"></th>
                   <th scope="row"><?= $value->title?>
                   <th scope="row" width="70px" style="padding: 5px"><img src="<?php echo public_url('frontend')?>/images/<?=$value->img?> " alt=""></th>
                   <th scope="row"><?= $value->content?></th>

                   <th scope="row"><?= ($value->special == 1 ) ? 'Top' : 'Bottom' ?></th>
                   <th scope="row"><?= ($value->special == 1 ) ? 'Hiện' : 'Ẩn' ?></th>
                   <th ><a href="<?php echo admin_url('service')?>/edit/<?php echo $value->id?>">Sửa</a>   </th>
                   <th onclick=" return  confirm ('Bạn Chắc chắn xóa không ?')" ><a href="<?php echo admin_url('service')?>/del/<?php echo $value->id?>">Xóa</a>  </th>
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
            <div class="dropdown">
               <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Tùy Chọn
                  <span class="caret"></span></button>
               <ul class="dropdown-menu">
                  <li><a href="#" onclick=" return confirm('Bạn đã chắc chắn ?')">Xóa</a></li>
                  <li><a href="#" onclick=" return confirm('Bạn đã chắc chắn ?')">Cập nhậ trạng thái</a></li>

               </ul>
            </div>
            </form>
         </div>
      </div>
</div>