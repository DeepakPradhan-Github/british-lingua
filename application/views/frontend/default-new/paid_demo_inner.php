<?php //include "header.php"; ?>
<?php //foreach ($top_courses as $course): ?>
    <?php
$course_details = $this->crud_model->get_course_by_id($course_id)->row_array();
$lessons = $this->crud_model->get_lessons('course', $course_details['id']);
$instructor_details = $this->user_model->get_all_user($course_details['creator'])->row_array();
$course_duration = $this->crud_model->get_total_duration_of_lesson_by_course_id($course_details['id']);
$number_of_enrolments = $this->crud_model->enrol_history($course_details['id'])->num_rows();
$total_rating =  $this->crud_model->get_ratings('course', $course_details['id'], true)->row()->rating;
$number_of_ratings = $this->crud_model->get_ratings('course', $course_details['id'])->num_rows();
if ($number_of_ratings > 0) {
    $average_ceil_rating = ceil($total_rating / $number_of_ratings);
} else {
    $average_ceil_rating = 0;
}
?>
<section>
    <div class="bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="http://localhost/application_1/">
                                    <img loading="lazy" class="brd-home mb-1" src="http://localhost/application_1/assets/frontend/default-new/image/c-bread-crumb-home.png">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li><i class="fa-solid fa-chevron-right"></i></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <span>Demo Cart</span>
                            </li>
                        </ol>
                    </nav>
                    <h1>Paid Demo Cart</h1>
                </div>
                <div class="col-3 ms-auto d-none d-sm-inline-block">
                    <div class="book-img">
                        <img loading="lazy" src="http://localhost/application_1/assets/frontend/default-new/image/brd-book.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cart-page">
    <div class="container" id="shoppingCart">
		
<div class="row">
    <div class="col-lg-9 col-md-8">
        <div class="cart-table">
            <div class="cart-heading-text">
                <h3>Your cart items</h3>
            </div>
            <div class="cart-scroll-bar">
                <table class="table ">
                    <thead>
                      <tr>
                        <th scope="col"><p>Items</p></th>
                        <th scope="col"><p class="text-start">Price</p></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                                                                                                      <tr>
                            <td>
                                <div class="cart-table-image">
                                    <img loading="lazy" src="https://tse4.mm.bing.net/th?id=OIP.2Kjkzl_PKwhSbGDt7ShcYQHaFj&pid=Api&P=0&h=180">
                                    <a href="http://localhost/application_1/home/course/elementary-english-course/1">
                                        <h5 class="my-1">Webinar Alpha</h5>
                                        <p class="ellipsis-line-2"></p>
                                    </a>
                                </div>
                            </td>
                            <td class="d-flex">
                                                                                                        <h4>₹28000</h4>
                                                            </td>
                            <td class="text-end">
                                <a class="ms-auto" href="#" onclick="actionTo('http://localhost/application_1/home/handle_cart_items/1');"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                          </tr>
                                          </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4">
        <div class="cart-total">
            <h4>Total</h4>
                                        
            <div class="tax">
                <h6>Subtotal</h6>
                <h6><?= $course['price']; ?></h6>
            </div>

                        <div class="tax">
                                <h6>Total</h6>
                <h6><?= $course['price']; ?></h6>
            </div>
         

                            <form action="payment" method="post">
                    
                    <div id="gift_email_section" class="d-hidden">
                        <div class="input-group mb-0">
                            <input type="email" name="gift_email" id="gift_email" class="form-control text-14px py-2 w-100" onkeyup="check_gift_user(this)" placeholder="Email address">
                        </div>
                        <span id="check_gift_user_message" class="text-12px"></span>
                    </div>
                    <div class="cart-total-btn mt-3">
                        <button id="payment-button" type="submit" class="btn btn-primary px-2 w-100" fdprocessedid="12j3fb">Continue to payment</button>
                    </div>
                </form>
                    </div>
    </div>
</div>
<?php //endforeach; ?>
<script type="text/javascript">
    var timer = 0;
    function check_gift_user(e){
        $('#payment-button').attr('disabled', true);
        $('#check_gift_user_message').html('Searching...');
        var gift_email = $(e).val().replace(/\s/g, '');

        clearTimeout(timer);
        timer = setTimeout(function(){
            actionTo('http://localhost/application_1/home/check_gift_user?gift_email='+gift_email, 'post');
            $(e).val(gift_email);
            $('#payment-button').attr('disabled', false);
        }, 2000);
    }
</script>

<script type="text/javascript">
	$(function () {

		if($('[data-bs-toggle="tooltip"]').length > 0){
			$('[data-bs-toggle="tooltip"]').tooltip();
		}

		if($('.tagify').length > 0){
			$('.tagify:not(.initialized)').tagify();
			$('.tagify:not(.initialized)').addClass('initialized');
		}

		$('a[href="#"]').on('click', function(event){
	      event.preventDefault();
	    });

	    if($('.text_editor:not(.initialized)').length){
			$('.text_editor:not(.initialized)').summernote({
				height: 180,                 // set editor height
				minHeight: null,             // set minimum height of editor
				maxHeight: null,             // set maximum height of editor
				focus: true                  // set focus to editable area after initializing summernote
			});
			$('.text_editor:not(.initialized)').addClass('initialized');
		}


		//When need to add a wishlist button inside a anchor tag
		$('.checkPropagation').on('click', function(event){
			var action = $(this).attr('action');
			var onclickFunction = $(this).attr('onclick');
			var onChange = $(this).attr('onchange');
			var tag = $(this).prop("tagName").toLowerCase();
			console.log(tag);
			if(tag != 'a' && action){
				$(location).attr('href', $(this).attr('action'));
				return false;
			}else if(onclickFunction){
				if(onclickFunction){
					onclickFunction;					
				}
				return false;
			}else if(tag == 'a'){
				return true;
			}
		});

		//Ajax for submission start
		var formElement;
		if($('.ajaxForm:not(.initialized)').length > 0){
			$('.ajaxForm:not(.initialized)').ajaxForm({
				beforeSend: function(data, form) {
					var formElement = $(form);
				},
				uploadProgress: function(event, position, total, percentComplete) {
				},
				complete: function(xhr) {

					setTimeout(function(){
						distributeServerResponse(xhr.responseText);
					}, 400);

					if($('.ajaxForm.resetable').length > 0){
						$('.ajaxForm.resetable')[0].reset();
					}
				},
				error: function(e)
				{
					console.log(e);
				}
			});
			$('.ajaxForm:not(.initialized)').addClass('initialized');
		}
	});

</script>    </div>
</section>
<?php //include "footer.php"; ?>