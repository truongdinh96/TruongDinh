<div id="container">
	<h1>Danh bạ</h1>

	<div id="body">
		<table>
			<tr>
				<th>STT</th>
				<th>Tên</th>
				<th>Số điện thoại</th>
				<th></th>
			</tr>
			<?php foreach ($contacts as $idx => $item): ?>
				<tr class="<?= ($idx % 2) ? 'odd' : 'even' ?>">
					<td class="center"><?= $idx + 1 ?></td>
					<td><?= $item->name ?></td>
					<td><?= $item->phone1 ?></td>
					<td class="center"><a href="index.php/contact/edit/<?= $item->id ?>">Chi tiết</a></td>
				</tr>
			<?php endforeach; ?>
		</table>

		<a href="index.php/contact/add" class="btn">Thêm mới</a>
	</div>
</div>
