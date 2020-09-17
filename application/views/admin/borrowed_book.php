<table border='1'>
    <tr>
        <th>書籍編號</th>
        <th>書籍名稱</th>
        <th>借出時間</th>
        <th>借書人</th>
		<th>狀態</th>
    </tr>
    <?php foreach($data as $v):  ?>
        <?php if($v['borrow_status'] == 1): ?>
            <tr>
                <td><?= $v['book_number'] ?></td>
                <td><?= $v['book_name'] ?></td>
                <td><?= $v['borrow_time'] ?></td>
                <td><?= $v['borrow_name'] ?></td>
				<td class="text-center"><div class="btn btn-primary" onclick="returnBook('<?= $v['id'] ?>')">還書</div></td>
            </tr>
        <?php endif ?>
    <?php endforeach ?>
</table>

<form action="<?= base_url(); ?>admin/borrowed_book" method="post" id="return_book">
	<input type="hidden" id="return_number" name="return_number" value="">
</form>