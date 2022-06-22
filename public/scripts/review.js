$(document).ready(function() {
  $("#review-form").validate({
  rules: {
	full_name: {
	  required: true,
	  minlength: 12,
	},
	surname: {
	  required: true,
	},
	text: {
	  required: true,
	  minlength: 20,
	},
	},
  messages : {
	full_name: {
	  required: "Это поле обязательно для заполнения",
	  minlength: "Минимальное количество символов 1."
	},
	surname: {
	  required: "Это поле обязательно для заполнения",
	},
	text: {
	  required: "Это поле обязательно для заполнения",
	  minlength: "Минимальное количество символов 20."
	},
  }
});
});
