<table border='1'>
    <tr>
        <th>書籍編號</th>
        <th>書籍名稱</th>
        <th>狀態</th>
    </tr>
    <?php foreach($data as $v):  ?>
    <tr>
        <td><?= $v['book_number'] ?></td>
        <td><?= $v['book_name'] ?></td>
        <td class="text-center">
            <div class="btn btn-primary" onclick="borrow('<?= $v['id'] ?>', '<?= $v['book_name'] ?>')" data-toggle="modal" data-target="#myModal">
                借閱
            </div>
        </td>
    </tr>
    <?php endforeach ?>
</table>

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
			  <h4 class="modal-title" id="modal-title"></h4>
			  <button type="button" class="close" data-dismiss="modal">×</button>
			</div>
			
			<!-- Modal body -->
			<div class="modal-body" id="modal-body">
				<form action="<?= base_url(); ?>admin/all_book" method="post">
					<input type="hidden" id="borrow_number" name="borrow_number" value="">
					<div class="form-group">
						<label for="borrow_name">Borrow Name:</label>
						<input type="text" class="form-control" id="borrow_name" name="borrow_name">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
    </div>
</div>
