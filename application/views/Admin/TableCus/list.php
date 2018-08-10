<nav aria-label="breadcrumb">
   <ol class="breadcrumb">
      <li class="breadcrumb-item active"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Menu</a></li>
      <div class="btn btn-info" style="float: right"><a href="<?php echo admin_url('TableCus')?>/add">Thêm mới</a></div>
      <div class="clearfix"></div>
   </ol>
</nav>

<div class="panel panel-success">
   <div class="panel-heading">
      <h3 class="panel-title">Danh sách Đặt Bàn</h3>

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
               <form action="<?php echo admin_url('TableCus')?>/setStatus" method="post" id="form_muti">
                  <div class="dropdown">
                     <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Tùy Chọn
                        <span class="caret"></span></button>
                     <ul class="dropdown-menu">
                        <li><input type="submit" value="Xóa" name="delcheck"  onclick=" return confirm('Bạn đã chắc chắn ?')" class="btn btn-info btn-block"></li>
                        <li><input type="submit" value="Cập nhật trạng thái" name="statuscheck" onclick=" return confirm('Bạn đã chắc chắn ?')" class="btn btn-danger btn-block"></li>

                     </ul>
                  </div>
                  <tr style="background-color: #5c9cc6;" >
                     <th scope="col" width="20px" >STT</th>
                     <th scope="row"><input type="checkbox" value="" id="checkAll" style="width: 18px;height: 18px"></th>
                     <th scope="col" style="width: 160px">Thời gian</th>
                     <th  width="120px">Phone</th>
                     <th scope="col">Ngày đặt</th>
                     <th scope="col">Số người</th>
                     <th scope="col">Ngày tạo</th>
                     <th scope="col" colspan="2">Tùy Chọn</th>
                  </tr>
               </thead>
               <tbody>
               <?php //print_r($listOrder);?>
             <?php if(count( $listTable ) >1){?>
             <?php $i=1; foreach ($listTable as $value) :?>
                <tr>
                   <th scope="row"><?= $i++?></th>
                   <th scope="row"><input class="checkboxs" type="checkbox" value="<?php echo $value->id?>" name="ids[]" style="width: 18px;height: 18px"></th>
                   <th scope="row"><?= $value->time?>
                   <th scope="row"><?= formatPhoneNumber($value->phone)?></th>
                   <th scope="row"><?= $value->calendar?></th>
                   <th scope="row"><?= ($value->people >0) ? $value->people :'Nhiều hơn 5' ?></th>
                   <th scope="row"><?= date('H:i:s d/m/Y',strtotime($value->created_at));?></th>
                   <th ><a href="<?php echo admin_url('TableCus')?>/edit/<?php echo $value->id?>" class="btn btn-info btn-xs "><span class="glyphicon glyphicon-pencil"></span> Sửa</a>   </th>
                   <th onclick=" return  confirm ('Bạn Chắc chắn xóa không ?')" ><a  href="<?php echo admin_url('TableCus')?>/del/<?php echo $value->id?>" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-trash "></span> Xóa</a>  </th>
                </tr>
             <?php endforeach;?>
               <?php }else{?>
                 <th colspan="8">Không có dữ liệu</th>
               <?php }?>

               </tbody>
            </table>
           <!-- <div class="list_action itemActions">
               <input onclick=" return confirm('Bạn đã chắc chắn ?')" type="submit"  class="btn btn-info" value="" >
            </div>-->

            </form>
         </div>
      </div>
</div>