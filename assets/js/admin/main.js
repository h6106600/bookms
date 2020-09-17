var borrow = function(id,name){
	$("#modal-title").text(name);
	$("#borrow_number").val(id);
}  

var returnBook = function(id){
	$("#return_number").val(id);
	$("#return_book").submit();
}  