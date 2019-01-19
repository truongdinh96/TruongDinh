<div id="body">
	<form method="post" action="/ows-contact/CodeIgniter/index.php/contact/save/<?= $contact_item->id ?>">
		<div class="input">
			<label for="">Tên</label>
			<input type="text" name="name" value="<?= $contact_item->name ?>">
		</div>
		<div class="input">
			<label for="">Số điện thoại 1</label>
			<input type="text" name="phone1" value="<?= $contact_item->phone1 ?>">
		</div>
		<div class="input">
			<label for="">Số điện thoại 2</label>
			<input type="text" name="phone2" value="<?= $contact_item->phone2 ?>">
		</div>
		<div class="input">
			<label for="">Email</label>
			<input type="text" name="email" value="<?= $contact_item->email ?>">
		</div>
		<div class="input">
			<label for="">Facebook</label>
			<input type="text" name="fb" value="<?= $contact_item->fb ?>">
		</div>
		<div class="input">
			<label for="">Company</label>
			<input type="text" name="company" value="<?= $contact_item->company ?>">
		</div>
		<input type="submit" value="Cập nhật"/>
		<button id="deleteBtn" data-contact-id="<?= $contact_item->id ?>">Xóa</button>
		<button id="backBtn">Quay lại</button>
	</form>
</div>
<script
	src="https://code.jquery.com/jquery-1.12.4.min.js"
	integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
	crossorigin="anonymous"></script>
<script>
	(function($){
		$(function() {
		    $("#deleteBtn").click(function(e){
		    	e.preventDefault();
		    	let id = $(this).attr('data-contact-id');
		    	if (confirm("Bạn có chắc muốn xóa không?")) {
					$.get('/ows-contact/CodeIgniter/index.php/contact/del/' + id).then(function (data) {
						if (data == "success")
							window.location = "/ows-contact/CodeIgniter/";
						else
							alert('Có lỗi xảy ra.');
					})
				}
				return false;
		    });

		    $("#backBtn").click(function(e){
		    	e.preventDefault();
		    	window.history.back();
		    	return false;
		    });
		});
	})(jQuery);
</script>
