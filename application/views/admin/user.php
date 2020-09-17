<table border='1'>
    <tr>
        <th>email</th>
        <th>密碼</th>
    </tr>

    <?php foreach($data as $v):  ?>
    <tr>
        <td><?= $v['email'] ?></td>
        <td><?= $v['password'] ?></td>
    </tr>
    <?php endforeach ?>
</table>


         