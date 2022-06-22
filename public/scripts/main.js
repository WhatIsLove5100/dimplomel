$(".content__btn").on('click', function() {
	$(".custom-model-main").addClass('model-open');
	$("#basic-form").validate();
  }); 
  $(".close-btn, .bg-overlay").click(function(){
	$(".custom-model-main").removeClass('model-open');
  });

$(document).ready(function() {
  $("#order-form").validate({
  rules: {
	place: {
	  required: true,
	  minlength: 10,
	},
	date: {
	  required: true,
	},
	full_name: {
	  required: true,
	  minlength: 6,
	},
	phone: {
	  required: true,
	  minlength: 11,
	},
	time: {
	  required: true,
	},
	police: {
	  required: true,
	},
  },
   messages : {
	place: {
	  minlength: "Минимальное количество символов 10.",
	  required: "Это поле обязательно для заполнения",
	},
	date: {
	  required: "Это поле обязательно для заполнения",
	},
	full_name: {
	  required: "Это поле обязательно для заполнения",
	  minlength: "Минимальное количество символов 6."
	},
	phone: {
	  required: "Это поле обязательно для заполнения",
	  minlength: "Минимальное количество символов 11."
	},
	time: {
	  required: "Это поле обязательно для заполнения",
	},
	police: {
	  required: "Это поле обязательно для заполнения",
	}
  }
});
});