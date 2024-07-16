<?php $header_menu_counter = 0; ?>
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand logo pt-0" href="<?php echo site_url(); ?>">
      <img loading="lazy" src="<?php echo site_url('uploads/system/' . get_frontend_settings('dark_logo')) ?>"
        alt="Logo" />
    </a>

    <!-- Mobile Offcanves  Icon Show -->
    <ul class="menu-offcanves">
      <li>
        <div class="search-item">
          <span class="m-cross-icon"><i class="fa-solid fa-xmark"></i></span>
          <!-- <span><a href="" class="btn btn-sm btn-primary">Quiz</a></span> -->
          <span class="m-search-icon"> <i class="fa-solid fa-magnifying-glass"></i></span>
        </div>
      </li>
      <li>
        <a href="#" class="btn-bar" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
          aria-controls="offcanvasWithBothOptions"><i class="fa-sharp fa-solid fa-bars"></i></a>
      </li>
    </ul>

    <div class="navbar-collapse" id="navbarSupportedContent">
      <!-- Small Device Hide -->
      <ul class="navbar-nav main-nav-wrap mb-2 mb-lg-0 align-items-center">
        <!--<li class="nav-item" style="margin-right:5px">-->
        <!--  <button class="nav-link header-dropdown px-3 text-nowrap" onclick="openAssessment();" id="">Take An-->
        <!--    Assessment Test</button>-->
        <!--</li>-->

        <li class="nav-item" style="margin-right:5px">
          <a class="nav-link header-dropdown px-3 text-nowrap" href="<?php echo site_url('home/webinar'); ?>"
            id=""><?php echo site_phrase('Webinar'); ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link header-dropdown px-3 text-nowrap" href="#" id="navbarDropdown1">
            <!-- <img loading="lazy" src="<?php echo site_url('assets/frontend/default-new/') ?>image/menu.png" alt="Menu" /> -->
            <span class="ms-2"><?php echo get_phrase('Courses'); ?></span>
          </a>
          <ul class="navbarHover">
            <?php
            $categories = $this->crud_model->get_categories()->result_array();
            foreach ($categories as $key => $category): ?>
              <li class="dropdown-submenu">
                <a href="<?php echo site_url('home/courses?category=' . slugify($category['slug'])) ?>">
                  <span class="icons"><i class="<?php echo $category['font_awesome_class']; ?>"></i></span>
                  <span class="text-cat"><?php echo $category['name']; ?></span>
                  <span class="has-sub-category ms-auto"><i class="fa-solid fa-angle-right"></i></span>
                </a>
                <ul class="sub-category-menu">
                  <?php
                  $sub_categories = $this->crud_model->get_sub_categories($category['id']);
                  foreach ($sub_categories as $sub_category): ?>
                    <li><a
                        href="<?php echo site_url('home/courses?category=' . slugify($sub_category['slug'])) ?>"><?php echo $sub_category['name']; ?></a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </li>
            <?php endforeach; ?>
            <li>
              <a href="<?php echo site_url('home/courses'); ?>">
                <i class="fas fa-list-ul px-2"></i>
                <?php echo get_phrase('All Courses'); ?>
              </a>
            </li>
          </ul>
        </li>
      </ul>



      <?php if (addon_status('course_bundle')): ?>
        <?php $header_menu_counter += 1; ?>
        <ul class="navbar-nav main-nav-wrap mb-2 mb-lg-0 ms-2">
          <li class="nav-item">
            <a class="nav-link header-dropdown bg-white text-dark fw-600 text-nowrap"
              href="<?php echo site_url('course_bundles'); ?>" id="navbarDropdown3">
              <span class="ms-2"><?php echo get_phrase('Course Bundle'); ?></span>
            </a>
          </li>
        </ul>
      <?php endif; ?>



      <?php if (addon_status('bootcamp')): ?>
        <?php $header_menu_counter += 1; ?>
        <ul class="navbar-nav main-nav-wrap mb-2 mb-lg-0 ms-2">
          <li class="nav-item">
            <a class="nav-link header-dropdown bg-white text-dark fw-600 text-nowrap"
              href="<?php echo site_url('addons/bootcamp/bootcamp_list'); ?>" id="navbarDropdown4">
              <span class="ms-2"><?php echo get_phrase('bootcamps'); ?></span>
            </a>
          </li>
        </ul>
      <?php endif; ?>



      <?php if (addon_status('team_training')): ?>
        <?php $header_menu_counter += 1; ?>
        <ul class="navbar-nav main-nav-wrap mb-2 mb-lg-0 ms-2">
          <li class="nav-item">
            <a class="nav-link header-dropdown bg-white text-dark fw-600 text-nowrap"
              href="<?php echo site_url('addons/team_training/packages'); ?>" id="navbarDropdown4">
              <span class="ms-2"><?php echo get_phrase('Team training'); ?></span>
            </a>
          </li>
        </ul>
      <?php endif; ?>


      <?php if (addon_status('ebook')): ?>
        <?php $header_menu_counter += 1; ?>
        <ul class="navbar-nav main-nav-wrap mb-2 mb-lg-0 ms-2">
          <li class="nav-item">
            <a class="nav-link header-dropdown bg-white text-dark fw-600 text-nowrap" href="#" id="navbarDropdown1">
              <span class="ms-2"><?php echo get_phrase('Ebook'); ?></span>
              <i class="fas fa-angle-down ms-1"></i>
            </a>
            <ul class="navbarHover">
              <?php
              $ebook_categories = $this->db->get('ebook_category')->result_array();
              foreach ($ebook_categories as $key => $ebook_category): ?>
                <li class="dropdown-submenu">
                  <a href="<?php echo site_url('ebook?category=' . $ebook_category['slug'] . '&price=all&rating=all') ?>">
                    <span class="text-cat"><?php echo $ebook_category['title']; ?></span>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </li>
        </ul>
      <?php endif; ?>

      <?php if (addon_status('tutor_booking')): ?>
        <?php $header_menu_counter += 1; ?>
        <ul class="navbar-nav main-nav-wrap mb-2 mb-lg-0 ms-2">
          <li class="nav-item">
            <a class="nav-link header-dropdown bg-white text-dark fw-600 text-nowrap"
              href="<?php echo site_url('tutors'); ?>" id="navbarDropdown2">
              <?php echo get_phrase('Find a Tutor'); ?>
            </a>
          </li>
        </ul>
      <?php endif; ?>

      <?php $custom_page_menus = $this->crud_model->get_custom_pages('', 'header'); ?>
      <?php if ($custom_page_menus->num_rows() == 1): ?>
        <?php $header_menu_counter += 1; ?>
        <?php $custom_page_menu = $custom_page_menus->row_array(); ?>
        <a class="text-dark fw-600 text-15px ms-3"
          href="<?php echo site_url('page/' . $custom_page_menu['page_url']); ?>"><?php echo $custom_page_menu['button_title']; ?></a>
      <?php elseif ($custom_page_menus->num_rows() > 1): ?>
        <?php $header_menu_counter += 1; ?>
        <ul class="navbar-nav main-nav-wrap mb-2 mb-lg-0 ms-2">
          <li class="nav-item">
            <a class="nav-link header-dropdown  bg-white text-dark fw-600 d-flex" href="#" id="navbarDropdown">
              <span class="ms-2"><?php echo get_phrase('More'); ?></span>
              <i class="fas fa-angle-down ms-1"></i>
            </a>
            <ul class="navbarHover">
              <?php foreach ($custom_page_menus->result_array() as $custom_page_menu): ?>
                <li>
                  <a href="<?php echo site_url('page/' . $custom_page_menu['page_url']); ?>">
                    <?php echo $custom_page_menu['button_title']; ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </li>
        </ul>
      <?php endif; ?>



      <?php if ($header_menu_counter > 3): ?>
        <form class="search-input-form" action="<?php echo site_url('home/courses'); ?>" method="get">
          <div class="dropdown">
            <button class="btn search-input-button dropdown-toggle" type="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="fas fa-search search-menu-icon"></i>
              <i class="fas fa-times text-18px close-menu-icon"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end p-0 border-0">
              <li>
                <div class="header-search mt-2 w-100 flex-column" style="box-shadow: 0px 2px 8px -1px #bbb;">
                  <!-- <p class="text-muted text-14px text-start w-100 mb-2"><?php echo get_phrase('Discover which courses are the best for you'); ?></p> -->
                  <div class="search-container w-100">
                    <input id="headerSearchBarLg" name="query" type="text"
                      class="search-input-floating <?php echo isset($_GET['query']) ? 'focused' : ''; ?>"
                      placeholder="<?php echo get_phrase('Search'); ?>"
                      value="<?php echo isset($_GET['query']) ? $_GET['query'] : ''; ?>">
                    <button type="submit"
                      class="header-search-icon border-0 text-dark text-16px <?php echo isset($_GET['query']) ? '' : 'd-hidden'; ?>"><i
                        class="fas fa-search"></i></button>
                    <label for="headerSearchBarLg"
                      class="header-search-icon text-dark text-16px <?php echo isset($_GET['query']) ? 'd-hidden' : ''; ?>"><i
                        class="fas fa-search"></i></label>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </form>
      <?php else: ?>
        <form class="w-100" action="<?php echo site_url('home/courses'); ?>" method="get" style="max-width: 400px;">
          <div class="header-search py-0 px-2 w-100">
            <div class="search-container w-100 me-3">
              <input id="headerSearchBarLg" name="query" type="text"
                class="search-input <?php echo isset($_GET['query']) ? 'focused' : ''; ?>"
                placeholder="<?php echo get_phrase('Search'); ?>"
                value="<?php echo isset($_GET['query']) ? $_GET['query'] : ''; ?>">
              <button type="submit"
                class="header-search-icon border-0 text-dark text-16px <?php echo isset($_GET['query']) ? '' : 'd-hidden'; ?>"><i
                  class="fas fa-search"></i></button>
              <label for="headerSearchBarLg"
                class="header-search-icon text-dark text-16px <?php echo isset($_GET['query']) ? 'd-hidden' : ''; ?>"><i
                  class="fas fa-search"></i></label>
            </div>
          </div>
        </form>
      <?php endif; ?>

      <!-- <ul style="display:flex; justify-content:space-between">
        <li>menu 1</li>
        <li>menu 2</li>
        <li>menu 3</li>
        <li>menu 4</li>
        <li>menu 4</li>
        <li>menu 4</li>
      </ul>
      -->




      <div class="right-menubar ms-auto">

        <?php if ($user_login): ?>
          <li><a class="dropdown-item"
              href="<?php echo site_url('home/my_courses') ?>"><?php echo site_phrase('My Courses') ?></a></li>
        <?php elseif ($admin_login): ?>
          <li><a class="dropdown-item"
              href="<?php echo site_url('admin'); ?>"><?php echo get_phrase('Administration') ?></a></li>
        <?php endif; ?>


        <!-- Cart List Area -->
        <div class="wisth_tgl_div">
          <div class="wisth_tgl_2div">
            <!-- <a class="menu_pro_cart_tgl mt-1"
              >
              <i class="fa-solid fa-cart-shopping"></i>

              <p class="menu_number" id="cartItemsCounter"><?php echo count($cart_items); ?></p>
            </a> -->
            <div class="menu_pro_wish">
              <div class="overflow-control" id="cartItems">

                <?php include "cart_items.php"; ?>

              </div>
              <div class="menu_pro_btn">
                <a href="<?php echo site_url('home/shopping_cart'); ?>" type="submit"
                  class="btn btn-primary text-white"><?php echo get_phrase('Checkout'); ?></a>
              </div>
            </div>
          </div>
        </div>

        <?php if ($user_login): ?>
          <!-- Wish List Area -->
          <div class="wisth_tgl_div">
            <div class="wisth_tgl_2div">
              <a class="menu_wisth_tgl mt-1">
                <i class="fa-regular fa-heart"></i>

                <?php if (count($my_wishlist_items) > 0): ?>
                  <p class="menu_number" id="wishlistItemsCounter">
                    <?php echo count($my_wishlist_items); ?>
                  </p>
                <?php endif; ?>
              </a>
              <div class="menu_pro_wish">
                <div class="overflow-control" id="wishlistItems">
                  <?php include "wishlist_items.php"; ?>
                </div>
                <div class="menu_pro_btn">
                  <a href="<?php echo site_url('home/my_wishlist'); ?>"
                    class="btn btn-primary text-white"><?php echo get_phrase('Go to wishlist'); ?></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Notification Area -->
          <div class="wisth_tgl_div">
            <div class="wisth_tgl_2div" id="headerNotification">
              <?php include "notifications.php"; ?>
            </div>
          </div>
        <?php endif; ?>


        <?php if (!$user_id): ?>

          <a href="<?php echo site_url('login'); ?>" class="mx-3"> <?php echo get_phrase('Login'); ?></a>
          <a href="<?php echo site_url('sign_up'); ?>" class="mx-3 text-capitalize" style="min-width: 70px">
            <?php echo get_phrase('Join Now'); ?></a>

          <!-- <a href="<?php echo site_url('quiz'); ?>" class="btn btn-primary text-white">Quiz</a> -->
        <?php endif; ?>

        <?php if ($user_login || $admin_login): ?>
          <!-- Profile Area -->
          <div class="menu_pro_tgl_div">
            <div class="menu_pro_tgl-2div">
              <a class="menu_pro_tgl profile-dropdown"><img loading="lazy"
                  src="<?php echo $this->user_model->get_user_image_url($user_id); ?>" alt="User Image" /></a>
            </div>
            <div class="menu_pro_tgl_bg">
              <div class="path-pos">
                <a href="#"><img loading="lazy" src="<?php echo $this->user_model->get_user_image_url($user_id); ?>"
                    alt="User Image" /></a>
                <a href="#">
                  <h4><?php echo $user_details['first_name'] . ' ' . $user_details['last_name']; ?></h4>
                </a>
                <p><?php echo $user_details['email']; ?></p>
                <ul>
                  <?php if ($user_login): ?>

                    <?php if ($user_details['is_instructor'] == 1): ?>
                      <li class="user-dropdown-menu-item"><a href="<?php echo site_url('user/dashboard'); ?>"><i
                            class="fas fa-columns"></i><?php echo site_phrase('Instructor Dashboard'); ?></a></li>
                    <?php else: ?>
                      <?php if (get_settings('allow_instructor') == 1): ?>
                        <li class="user-dropdown-menu-item"><a href="<?php echo site_url('home/become_an_instructor'); ?>"><i
                              class="fas fa-columns"></i><?php echo site_phrase('Become an instructor'); ?></a></li>
                      <?php endif; ?>
                    <?php endif; ?>

                    <li class="user-dropdown-menu-item"><a href="<?php echo site_url('home/my_courses'); ?>"><i
                          class="far fa-gem"></i><?php echo site_phrase('my_courses'); ?></a></li>
                    <li class="user-dropdown-menu-item"><a href="<?php echo site_url('home/my_wishlist'); ?>"><i
                          class="far fa-heart"></i><?php echo site_phrase('my_wishlist'); ?></a></li>
                    <!--<li class="user-dropdown-menu-item"><a href="<?php echo site_url('home/my_messages'); ?>"><i class="far fa-envelope"></i><?php echo site_phrase('my_messages'); ?></a></li>-->
                    <li class="user-dropdown-menu-item"><a href="<?php echo site_url('home/purchase_history'); ?>"><i
                          class="fas fa-shopping-cart"></i><?php echo site_phrase('purchase_history'); ?></a></li>
                    <li class="user-dropdown-menu-item"><a href="<?php echo site_url('home/profile/user_profile'); ?>"><i
                          class="fas fa-user"></i><?php echo site_phrase('user_profile'); ?></a></li>
                    <?php if (addon_status('affiliate_course')):
                      $CI = &get_instance();
                      $CI->load->model('addons/affiliate_course_model');
                      $x = $CI->affiliate_course_model->is_affilator($this->session->userdata('user_id'));
                      $is_affiliator = $CI->affiliate_course_model->is_affilator($this->session->userdata('user_id'));

                      if ($x == 0 && get_settings('affiliate_addon_active_status') == 1): ?>


                        <li class="user-dropdown-menu-item"><a
                            href="<?php echo site_url('addons/affiliate_course/become_an_affiliator'); ?>"><i
                              class="fas fa-user-plus"></i><?php echo site_phrase('Become_an_Affiliator'); ?></a></li>
                      <?php else: ?>
                        <?php if ($is_affiliator == 1): ?>


                          <li class="user-dropdown-menu-item"><a
                              href="<?php echo site_url('addons/affiliate_course/affiliate_course_history '); ?>"><i
                                class="fa fa-book"></i><?php echo site_phrase('Affiliation History'); ?></a></li>
                        <?php endif; ?>
                      <?php endif; ?>
                    <?php endif; ?>
                    <?php if (addon_status('customer_support')): ?>
                      <li class="user-dropdown-menu-item"><a
                          href="<?php echo site_url('addons/customer_support/user_tickets'); ?>"><i
                            class="fas fa-life-ring"></i><?php echo site_phrase('support'); ?></a></li>
                    <?php endif; ?>
                  <?php endif; ?>

                  <?php if ($admin_login): ?>
                    <li>
                      <a href="<?php echo site_url('admin'); ?>">
                        <i class="fas fa-location-arrow"></i>
                        <?php echo get_phrase('Administration'); ?>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo site_url('admin/manage_profile'); ?>">
                        <i class="fas fa-user"></i>
                        <?php echo get_phrase('Manage profile') ?>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo site_url('admin/system_settings'); ?>">
                        <i class="fas fa-cog"></i>
                        <?php echo get_phrase('Settings') ?>
                      </a>
                    </li>
                  <?php endif; ?>

                  <li>
                    <a href="<?php echo site_url('login/logout'); ?>">
                      <i class="fa-solid fa-arrow-right-from-bracket"></i>
                      <?php echo get_phrase('Log out'); ?>
                    </a>
                  </li>


                </ul>
              </div>
            </div>
          </div>
        <?php endif; ?>

      </div>
    </div>

    <!-- Mobile Device Form -->
    <form action="<?php echo site_url('home/courses'); ?>" method="get" class="inline-form">
      <div class="mobile-search test">
        <button type="submit" class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
        <input value="<?php echo isset($_GET['query']) ? $_GET['query'] : ''; ?>" name="query" class="form-control"
          type="text" placeholder="<?php echo get_phrase('Search'); ?>" />
      </div>
    </form>

  </div>
</nav>





<div id="popupAssessForm" class="popup">
  <div class="popup-content">
    <span class="close-btn" onclick="closeQuiz()">&times;</span>
    <div class="quiz-container" style="padding: 2%;">
      <h3>English Assessment Test</h3>
      <form id="quizForm" style="padding: 2%;">
        <div class="question" id="question1">
          <p>1. A few trainees were/was absent yesterday.</p>
          <label><input type="radio" name="q1" value="a"> A) were</label><br>
          <label><input type="radio" name="q1" value="b"> B) was</label>
        </div>
        <div class="question" id="question2" style="display:none;">
          <p>2. Although/However the applicants were bad with calligraphy, yet they tried their best to write
            a letter.</p>
          <label><input type="radio" name="q2" value="a"> A) Although</label><br>
          <label><input type="radio" name="q2" value="b"> B) However</label>
        </div>
        <div class="question" id="question3" style="display:none;">
          <p>3. Have you ever been/gone to London?</p>
          <label><input type="radio" name="q3" value="a"> A) been</label><br>
          <label><input type="radio" name="q3" value="b"> B) gone</label>
        </div>
        <div class="question" id="question4" style="display:none;">
          <p>4. I apologise for/on not being able to come to the wedding ceremony.</p>
          <label><input type="radio" name="q4" value="a"> A) for</label><br>
          <label><input type="radio" name="q4" value="b"> B) on</label>
        </div>
        <div class="question" id="question5" style="display:none;">
          <p>5. I didn’t watch/watched TV last night.</p>
          <label><input type="radio" name="q5" value="a"> A) watch</label><br>
          <label><input type="radio" name="q5" value="b"> B) watched</label>
        </div>
        <div class="question" id="question6" style="display:none;">
          <p>6. I wish you will/would top the university.</p>
          <label><input type="radio" name="q6" value="a"> A) will</label><br>
          <label><input type="radio" name="q6" value="b"> B) would</label>
        </div>
        <div class="question" id="question7" style="display:none;">
          <p>7. I’m looking forward to see/seeing you.</p>
          <label><input type="radio" name="q7" value="a"> A) see</label><br>
          <label><input type="radio" name="q7" value="b"> B) seeing</label>
        </div>
        <div class="question" id="question8" style="display:none;">
          <p>8. It will/would be better to enquire about the price of the product.</p>
          <label><input type="radio" name="q8" value="a"> A) will</label><br>
          <label><input type="radio" name="q8" value="b"> B) would</label>
        </div>
        <div class="question" id="question9" style="display:none;">
          <p>9. Let’s trip the light fantastic/fantastically to a Bollywood song.</p>
          <label><input type="radio" name="q9" value="a"> A) fantastic</label><br>
          <label><input type="radio" name="q9" value="b"> B) fantastically</label>
        </div>
        <div class="question" id="question10" style="display:none;">
          <p>10. She is married to/with a dentist.</p>
          <label><input type="radio" name="q10" value="a"> A) to</label><br>
          <label><input type="radio" name="q10" value="b"> B) with</label>
        </div>
        <div class="navigation">
          <button type="button" id="prevButton" onclick="prevQuestion()" style="display: none;">Previous</button>
          <button type="button" id="nextButton" onclick="nextQuestion()">Next</button>
          <button type="button" id="submitButton" onclick="calculateScore()" style="display:none;">Submit</button>
        </div>
      </form>
    </div>



  </div>
</div>

<div id="popupAssessResult" class="popup">
  <div class="popup-content">
    <span class="close-btn" onclick="closeResult()">&times;</span>


    <div class="result-container">
      <h3>Your Score</h3>
      <div id="result"></div>

      <p>Course recommendation for you:</p>
      <!-- <button onclick="goBack()">Go Back</button> -->

      <div class="row">
        <div class="col-12 " id="course1" style="display:none; flex-direction: column;align-items: center;margin-top: 5%;">
          <!-- •	Less than 20 percent -->
          <h1>Elementary Level </h1>
          <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">

                <div class="courses-card">
                    
                       
                            <div class="single-popup-course">
                                <a href="/home/course/elementary-english-course/1" id="latest_course_1" class="checkPropagation courses-card-body" data-target="webuiPopover0">
                                    <div class="courses-card-image">
                                        <img loading="lazy" src="/uploads/thumbnails/course_thumbnails/optimized/course_thumbnail_default-new_11718256761.jpg">
                                        <div class="courses-icon " id="coursesWishlistIconLatestCourse1">
                                            <i class="fa-solid fa-heart checkPropagation" onclick="actionTo('/home/toggleWishlistItems/1/LatestCourse')"></i>
                                        </div>
                                        <div class="courses-card-image-text">
                                            <h3>Beginner</h3>
                                        </div> 
                                    </div>
                                    <div class="courses-text">
                                        <h5 class="mb-2">Elementary English Course</h5>
                                        <div class="review-icon">
                                            
                                            <div class="review-btn d-flex align-items-center">
                                            <span class="compare-img checkPropagation" onclick="redirectTo('/home/compare?course-1=elementary-english-course&amp;course-id-1=1');">
                                                    <img loading="lazy" src="/assets/frontend/default-new/image/compare.png">
                                                    Compare                                                </span>
                                            </div>
                                        </div>
                                        <p class="ellipsis-line-2"></p>
                                        <div class="courses-price-border">
                                            <div class="courses-price">
                                                <div class="courses-price-left">
                                                                                                            <h5>₹18000</h5>
                                                                                                    </div>
                                                <!--<div class="courses-price-right ">-->
                                                <!--    -->
                                                <!--        <p class="m-0"><i class="fa-regular fa-clock p-0 text-15px"></i>  Hours</p>-->
                                                <!--    -->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </a>




                                
                            </div>
                        
                
                </div>

            </div>
        </div>

        <div class="col-12 course2" id="course2" style="display:none; flex-direction: column;align-items: center;margin-top: 5%;">
          <!-- •	Up to 30 percent -->
          <h1>Basic to advanced Level </h1>
          <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">

                <div class="courses-card">
                    
                       
                            <div class="single-popup-course">
                                <a href="/home/course/basic-english-course/2" id="latest_course_2" class="checkPropagation courses-card-body">
                                    <div class="courses-card-image">
                                        <img loading="lazy" src="/uploads/thumbnails/course_thumbnails/optimized/course_thumbnail_default-new_21718256893.jpg">
                                        <div class="courses-icon " id="coursesWishlistIconLatestCourse2">
                                            <i class="fa-solid fa-heart checkPropagation" onclick="actionTo('/home/toggleWishlistItems/2/LatestCourse')"></i>
                                        </div>
                                        <div class="courses-card-image-text">
                                            <h3>Beginner</h3>
                                        </div> 
                                    </div>
                                    <div class="courses-text">
                                        <h5 class="mb-2">Basic English Course</h5>
                                        <div class="review-icon">
                                            
                                            <div class="review-btn d-flex align-items-center">
                                            <span class="compare-img checkPropagation" onclick="redirectTo('/home/compare?course-1=basic-english-course&amp;course-id-1=2');">
                                                    <img loading="lazy" src="/assets/frontend/default-new/image/compare.png">
                                                    Compare                                                </span>
                                            </div>
                                        </div>
                                        <p class="ellipsis-line-2"></p>
                                        <div class="courses-price-border">
                                            <div class="courses-price">
                                                <div class="courses-price-left">
                                                                                                            <h5>₹15000</h5>
                                                                                                    </div>
                                                <!--<div class="courses-price-right ">-->
                                                <!--    -->
                                                <!--        <p class="m-0"><i class="fa-regular fa-clock p-0 text-15px"></i>  Hours</p>-->
                                                <!--    -->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </a>




                                <div id="latest_course_feature_2" class="course-popover-content">
                                    <!---->
                                    <!--    <p class="last-update">Last updated Thu, 13-Jun-2024</p>-->
                                    <!---->
                                    <div class="course-title">
                                        <a href="/home/course/basic-english-course/2">Basic English Course</a>
                                    </div>
                                    <div class="course-meta">
                                                                                    <!--<span class=""><i class="fas fa-play-circle"></i>-->
                                            <!--    48 Lessons-->
                                            <!--</span>-->
                                            <!---->
                                            <!--    <span class=""><i class="far fa-clock"></i>-->
                                            <!--         Hours-->
                                            <!--    </span>-->
                                            <!---->
                                                                                <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                    </div>
                                    <div class="course-subtitle">
                                                                            </div>
                                    <h6 class="text-black text-14px mb-1">Outcomes:</h6>
                                    <ul class="will-learn">
                                                                            </ul>
                                    <div class="popover-btns">
                                                                                                                            
                                                <!-- Cart button -->
                                                <!-- <a id="added_to_cart_btn_latest_course2" class="purchase-btn align-items-center me-auto d-hidden" href="javascript:void(0)" onclick="actionTo('/home/handle_cart_items/2/latest_course');">
                                                    <i class="fas fa-minus me-2"></i> Remove from cart                                                </a>
                                                <a id="add_to_cart_btn_latest_course2" class="purchase-btn align-items-center me-auto " href="javascript:void(0)" onclick="actionTo('/home/handle_cart_items/2/latest_course'); ">
                                                    <i class="fas fa-plus me-2"></i> Add to cart                                                </a> -->
                                                <a id="add_to_cart_btn_latest_course2" class="purchase-btn align-items-center me-auto " href="/home/course/basic-english-course/2" onclick="actionTo('/home/course/basic-english-course/2'); ?>'); ">
                                                    <i class="fas fa-credit-card me-2"></i> Buy now                                                </a>
                                                <!-- Cart button ended-->
                                                                                                                        </div>
                                    <script>
                                        $(document).ready(function(){
                                            $('#latest_course_2').webuiPopover({
                                                url:'#latest_course_feature_2',
                                                trigger:'hover',
                                                animation:'pop',
                                                cache:false,
                                                multi:true,
                                                direction:'rtl', 
                                                placement:'horizontal',
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                        
                
                </div>

            </div>
        </div>

        <div class="col-12 course3" id="course3" style="display:none; flex-direction: column;align-items: center;margin-top: 5%;">
          <!-- •	Up to 60 percent -->
          <h1>Intermediate Level </h1>
          <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">

                <div class="courses-card">
                    
                       
                            <div class="single-popup-course">
                                <a href="/home/course/crash-course-in-english/3" id="latest_course_3" class="checkPropagation courses-card-body" data-target="webuiPopover2">
                                    <div class="courses-card-image">
                                        <img loading="lazy" src="/uploads/thumbnails/course_thumbnails/optimized/course_thumbnail_default-new_31718168893.jpg">
                                        <div class="courses-icon " id="coursesWishlistIconLatestCourse3">
                                            <i class="fa-solid fa-heart checkPropagation" onclick="actionTo('/home/toggleWishlistItems/3/LatestCourse')"></i>
                                        </div>
                                        <div class="courses-card-image-text">
                                            <h3>Beginner</h3>
                                        </div> 
                                    </div>
                                    <div class="courses-text">
                                        <h5 class="mb-2">Crash Course in English</h5>
                                        <div class="review-icon">
                                            
                                            <div class="review-btn d-flex align-items-center">
                                            <span class="compare-img checkPropagation" onclick="redirectTo('/home/compare?course-1=crash-course-in-english&amp;course-id-1=3');">
                                                    <img loading="lazy" src="/assets/frontend/default-new/image/compare.png">
                                                    Compare                                                </span>
                                            </div>
                                        </div>
                                        <p class="ellipsis-line-2"></p>
                                        <div class="courses-price-border">
                                            <div class="courses-price">
                                                <div class="courses-price-left">
                                                                                                            <h5>₹12000</h5>
                                                                                                    </div>
                                                <!--<div class="courses-price-right ">-->
                                                <!--    -->
                                                <!--        <p class="m-0"><i class="fa-regular fa-clock p-0 text-15px"></i>  Hours</p>-->
                                                <!--    -->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </a>




                                
                            </div>
                        
                
                </div>

            </div>
        </div>

        <div class="col-12 course4" id="course4" style="display:none; flex-direction: column;align-items: center;margin-top: 5%;">
          <!-- •	More than 70 percent -->
          <h1>Advanced Level </h1>
          <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">

                <div class="courses-card">
                    
                       
                            <div class="single-popup-course">
                                <a href="/home/course/advanced-course-in-english/4" id="latest_course_4" class="checkPropagation courses-card-body" data-target="webuiPopover3">
                                    <div class="courses-card-image">
                                        <img loading="lazy" src="/uploads/thumbnails/course_thumbnails/optimized/course_thumbnail_default-new_41718168914.jpg">
                                        <div class="courses-icon " id="coursesWishlistIconLatestCourse4">
                                            <i class="fa-solid fa-heart checkPropagation" onclick="actionTo('/home/toggleWishlistItems/4/LatestCourse')"></i>
                                        </div>
                                        <div class="courses-card-image-text">
                                            <h3>Advanced</h3>
                                        </div> 
                                    </div>
                                    <div class="courses-text">
                                        <h5 class="mb-2">Advanced Course in English</h5>
                                        <div class="review-icon">
                                            
                                            <div class="review-btn d-flex align-items-center">
                                            <span class="compare-img checkPropagation" onclick="redirectTo('/home/compare?course-1=advanced-course-in-english&amp;course-id-1=4');">
                                                    <img loading="lazy" src="/assets/frontend/default-new/image/compare.png">
                                                    Compare                                                </span>
                                            </div>
                                        </div>
                                        <p class="ellipsis-line-2"></p>
                                        <div class="courses-price-border">
                                            <div class="courses-price">
                                                <div class="courses-price-left">
                                                                                                            <h5>₹10000</h5>
                                                                                                    </div>
                                                <!--<div class="courses-price-right ">-->
                                                <!--    -->
                                                <!--        <p class="m-0"><i class="fa-regular fa-clock p-0 text-15px"></i>  Hours</p>-->
                                                <!--    -->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </a>




                                
                            </div>
                        
                
                </div>

            </div>
        </div>


      </div>



    </div>



  </div>
</div>



<script>
  function openAssessment() {
    document.getElementById("popupAssessForm").style.display = "flex";
  }




  function closeQuiz() {
    document.getElementById("popupAssessForm").style.display = "none";
  }

  function closeResult() {
    document.getElementById("popupAssessResult").style.display = "none";
  }

  document.getElementById("quizForm").addEventListener("submit", function (event) {
    event.preventDefault();
    // Handle form submission logic here (e.g., send data to server)
    alert("Form submitted!");
    closeQuiz();
  });










  let currentQuestion = 1;
  const totalQuestions = 10;

  function showQuestion(questionNumber) {
    for (let i = 1; i <= totalQuestions; i++) {
      const question = document.getElementById(`question${i}`);
      question.style.display = i === questionNumber ? 'block' : 'none';
    }
    const prevButton = document.getElementById('prevButton');
    prevButton.style.display = questionNumber === 1 ? 'none' : 'inline-block';
    document.getElementById('nextButton').style.display = questionNumber === totalQuestions ? 'none' : 'inline-block';
    document.getElementById('submitButton').style.display = questionNumber === totalQuestions ? 'inline-block' : 'none';
  }

  function nextQuestion() {
    if (validateAnswer()) {
      if (currentQuestion < totalQuestions) {
        currentQuestion++;
        showQuestion(currentQuestion);
      }
    } else {
      alert('Please select an answer before proceeding.');
    }
  }

  function prevQuestion() {
    if (currentQuestion > 1) {
      currentQuestion--;
      showQuestion(currentQuestion);
    }
  }

  function validateAnswer() {
    const form = document.getElementById('quizForm');
    const currentAnswer = form[`q${currentQuestion}`];
    return currentAnswer ? currentAnswer.value !== '' : false;
  }

  function calculateScore() {
    document.getElementById("popupAssessResult").style.display = "flex";
    document.getElementById("popupAssessForm").style.display = "none";

    if (!validateAnswer()) {
      alert('Please answer the current question before submitting.');
      return;
    }



    const form = document.getElementById('quizForm');
    let score = 0;

    const answers = {
      q1: 'a',
      q2: 'a',
      q3: 'a',
      q4: 'a',
      q5: 'a',
      q6: 'b',
      q7: 'b',
      q8: 'b',
      q9: 'a',
      q10: 'a'
    };

    for (let i = 1; i <= totalQuestions; i++) {
      const question = form[`q${i}`];
      if (question) {
        const userAnswer = question.value;
        if (userAnswer === answers[`q${i}`]) {
          score++;
        }
      }
    }


    result.textContent = `Well done! You achieved  ${score} out of 10.`;

    result.textContent = `Well done! You achieved ${score} out of 10.`;

if (score <= 2) {
  console.log('Elementary Level');
  document.getElementById("course1").style.display = "block flex";
  document.getElementById("course2").style.display = "none";
  document.getElementById("course3").style.display = "none";
  document.getElementById("course4").style.display = "none";
} else if (score > 2 && score <= 3) {
  console.log('Basic to advanced Level');
  document.getElementById("course1").style.display = "none";
  document.getElementById("course2").style.display = "block flex";
  document.getElementById("course3").style.display = "none";
  document.getElementById("course4").style.display = "none";
} else if (score > 3 && score <= 6) {
  console.log('Intermediate Level');
  document.getElementById("course1").style.display = "none";
  document.getElementById("course2").style.display = "none";
  document.getElementById("course3").style.display = "block flex";
  document.getElementById("course4").style.display = "none";
} else {
  console.log('Advanced Level');
  document.getElementById("course1").style.display = "none";
  document.getElementById("course2").style.display = "none";
  document.getElementById("course3").style.display = "none";
  document.getElementById("course4").style.display = "block flex";
}







  }

  // Initialize the first question to be shown
  showQuestion(currentQuestion);






</script>