


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!--<a href="https://wa.me/919999107254?text=Hello" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a> -->




<div class="floating-button" id="mainButton">
       <i class="fa fa-mobile"></i>
        <div class="floating-menu" id="floatingMenu">
            <div class="whatsapp"><a href="https://wa.me/919999107254?text=Hello" target="_blank" class="menu-item" ><i class="fa fa-whatsapp my-float"></i></a></div>
           <div class="contactFloat">
           <a href="tel:+919999107254" target="_blank" class="menu-item"><img src="<?php echo base_url("assets/frontend/default-new/image/icon/outgoingCALL.png"); ?>" width="24px"></a>
           </div> 
        </div>
    </div>

    <script>
      document.getElementById('mainButton').addEventListener('click', function() {
    const menu = document.getElementById('floatingMenu');
    if (menu.style.display === 'none' || menu.style.display === '') {
        menu.style.display = 'block';
    } else {
        menu.style.display = 'none';
    }
});

    </script>








<!--------- footer Section Start--------------->
<section class="footer wow  animate__animated animate__fadeIn" data-wow-duration="1000" data-wow-delay="500" data-wow-duration="1000" data-wow-delay="600">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 col-12 mb-5 ">
                <div class="lightlogo">
                    <img loading="lazy" src="<?php echo base_url('uploads/system/'.get_frontend_settings('light_logo')); ?>">
                </div>
                <p><?php echo get_settings('website_description'); ?></p>
                
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-4 mb-5">
                <h1><?php echo site_phrase('top_categories'); ?></h1>
                <ul>
                <?php $top_10_categories = $this->crud_model->get_top_categories(6, 'sub_category_id'); ?>
                <?php foreach($top_10_categories as $top_10_category): ?>
                  <?php $category_details = $this->crud_model->get_category_details_by_id($top_10_category['sub_category_id'])->row_array(); ?>
                    <li><a href="<?php echo site_url('home/courses?category='.$category_details['slug']); ?>"> <?php echo $category_details['name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-4">
                <h1><?php echo site_phrase('useful_links'); ?></h1>
                <ul>
                    <?php if (get_settings('allow_instructor') == 1) : ?>
                        <li> <a href="<?php echo site_url('home/become_an_instructor'); ?>"><?php echo site_phrase('Become an instructor'); ?></a></li>
                    <?php endif; ?>
                    <li> <a href="<?php echo site_url('blog'); ?>"><?php echo site_phrase('blog'); ?></a></li>
                    <li><a href="<?php echo site_url('home/courses'); ?>"><?php echo site_phrase('all_courses'); ?></a></li>
                    <li><a href="<?php echo site_url('sign_up'); ?>"><?php echo site_phrase('sign_up'); ?></a></li>
                     <li><a href="<?php echo site_url('home/managing_director') ?>"><?php echo site_phrase('managing_director'); ?></a></li>
                    <li><a href="<?php echo site_url('home/disclaimer') ?>"><?php echo site_phrase('disclaimer'); ?></a></li>
                    <?php $custom_page_menus = $this->crud_model->get_custom_pages('', 'footer'); ?>
                    <?php foreach($custom_page_menus->result_array() as $custom_page_menu): ?>
                      <li><a href="<?php echo site_url('page/'.$custom_page_menu['page_url']); ?>"><?php echo $custom_page_menu['button_title']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-4">
                <h1><?php echo site_phrase('help'); ?></h1>
                <ul>
                    <li><a href="<?php echo site_url('home/contact_us'); ?>"><?php echo site_phrase('contact_us'); ?></a></li>
                    <li><a href="<?php echo site_url('home/about_us'); ?>"><?php echo site_phrase('about_us'); ?></a></li>
                    <li><a href="<?php echo site_url('home/privacy_policy'); ?>"><?php echo site_phrase('privacy_policy'); ?></a></li>
                    <li><a href="<?php echo site_url('home/terms_and_condition'); ?>"><?php echo site_phrase('terms_and_condition'); ?></a></li>
                    <li><a href="<?php echo site_url('home/faq'); ?>"><?php echo site_phrase('FAQ'); ?></a></li>
                    <li><a href="<?php echo site_url('home/refund_policy'); ?>"><?php echo site_phrase('refund_policy'); ?></a></li>
                </ul>
            </div>
        </div>
        <div class="lattest-news">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!--<h1><?php echo get_phrase('Subscribe to our Newsletter'); ?></h1>-->
                    <!--<form class="ajaxForm resetable" action="<?php echo site_url('home/subscribe_to_our_newsletter'); ?>" method="post">-->
                    <!--    <input type="email" class="form-control" id="subscribe_email" placeholder="<?php echo get_phrase('Enter your email address'); ?>" name="email">-->
                    <!--    <button class="form-arrow" type="submit"><i class="fa-solid fa-arrow-right-long"></i></button>-->
                    <!--</form>-->
                     <style>
                      .socialIcons img{
                        width: 50px;
                        height: 50px;
                       margin:10px;

                      }
                    </style>


                    <div class="socialIcons">
                      <a href="https://www.instagram.com/britishlingua?igsh=MXQwNGR1bGt1M210eg=="><img src="<?php echo base_url("assets/frontend/default-new/image/icon/instagram.png"); ?>" alt=""> </a>
                      <a href="https://m.facebook.com/spokenenglishtraininginstitute/"><img src="<?php echo base_url("assets/frontend/default-new/image/icon/facebook.png"); ?>" alt=""> </a>
                      <a href="https://youtube.com/@britishlingua9999107254?si=zY6j6ESF2GVsyZwQ"><img src="<?php echo base_url("assets/frontend/default-new/image/icon/youtube.png"); ?>" alt=""> </a>
                      
                    </div>
                </div>
                
                <div class="col-lg-8 col-md-6  col-sm-12 col-12">
                    <div class="multiservices">
                        <p class="float-right">British Lingua is the trademark of Lingua Multiservices Pvt Ltd.</p>
                        <div class="icon right-icon">
                        
                        <ul class="nav justify-content-end">
                          <li class="nav-item">
                            <a target="_blank" href="<?php echo get_settings('footer_link'); ?>">
                              <?php echo site_phrase(get_settings('footer_text')); ?>
                            </a>
                          </li>
                        </ul>
                    </div>  
                    </div>
                    
                              
                </div>
                
            </div>
        </div>
    </div>
</section>
<!--------- footer Section End--------------->

<!-- PAYMENT MODAL -->
<!-- Modal -->
<?php
$paypal_info = json_decode(get_settings('paypal'), true);
$stripe_info = json_decode(get_settings('stripe_keys'), true);
if ($paypal_info[0]['active'] == 0) {
  $paypal_status = 'disabled';
}else {
  $paypal_status = '';
}
if ($stripe_info[0]['active'] == 0) {
  $stripe_status = 'disabled';
}else {
  $stripe_status = '';
}
?>


<script>
  $('document').ready(function(){
    new WOW().init();
  });
</script>