
<div class="table-room ">
	<h3 class="mb-4">Phòng <a href="<?php echo ue_get_admin_link('book','add'); ?>" class="btn btn-info btn-sm float-right">Thêm mới</a></h3>
	<?php
	if(!empty($res)) {
		UE_Message::show('room');
		?>
		<table class="table">
			<thead>
			<tr>
				<th scope="col">Tên</th>
				<th scope="col">Giá</th>
                <th scope="col">Người lớn</th>
				<th scope="col">Trẻ em</th>
				<th scope="col"></th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($res as $k => $v){ ?>
			<tr>
				<td><?php echo $v['room_name']; ?></td>
				<td><?php echo ue_format_price($v['price']); ?></td>
                <td><?php echo $v['adults']; ?></td>
				<td><?php echo $v['children']; ?></td>
				<td>
					<a href="<?php echo ue_get_admin_link('book', 'edit') . '/' . $v['id']; ?>" class="btn btn-info btn-sm">Sửa</a>
					<a href="<?php echo ue_get_admin_link('room', 'delete') . '/' . $v['room_id']; ?>" class="btn btn-danger btn-sm">Xóa</a>
				</td>
			</tr>
			<?php } ?>
			</tbody>
		</table>
		<?php
	}else{
		?>
		<div class="alert alert-warning">Không có quyển sách nào.</div>
		<?php
	}
	?>
</div>