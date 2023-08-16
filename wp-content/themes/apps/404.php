<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package apps
 */

get_header();

$cbtoolkit_error_404_image = get_theme_mod('cbtoolkit_error_404_image', get_template_directory_uri() . '/assets/img/404-page-error-image.svg');
$cbtoolkit_error_title = get_theme_mod('cbtoolkit_error_title', __('Oh no! This Page Not Found', 'apps'));
$cbtoolkit_error_desc = get_theme_mod('cbtoolkit_error_desc', __('The page you are looking for might have been removed its name, changed or is temporary unavailable.', 'apps'));
$cbtoolkit_error_link_text = get_theme_mod('cbtoolkit_error_link_text', __('Back To Home', 'apps'));
$cbtoolkit_error_page_second_btn_text = get_theme_mod('cbtoolkit_error_page_second_btn_text', __('Contact', 'apps'));
$cbtoolkit_error_page_second_btn_link = get_theme_mod('cbtoolkit_error_page_second_btn_link', __('https://wadialbadaitsolutions.ae/contact-us/', 'apps'));
?>
<!-- error area start -->
<section class="apps-error-area-114 pt-165 pb-100">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="apps-error-cotnent-114">
               <?php if(!empty($cbtoolkit_error_title)) : ?>
                  <h4 class="title"><?php echo wp_kses_post($cbtoolkit_error_title); ?></h4>
               <?php endif; ?>
               <?php if(!empty($cbtoolkit_error_desc)) : ?>
                  <p><?php echo wp_kses_post($cbtoolkit_error_desc); ?></p>
               <?php endif; ?>

                  <div class="navbar-right btn-wrap d-flex flex-wrap gap-3 gap-lg-4">
                           
                     <?php if(!empty($cbtoolkit_error_link_text)) : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn position-relative rounded bg-btn text-uppercase border-0 text-clr-dark1 fs-14 fw-bold d-flex align-items-center">

                        <?php echo wp_kses_post($cbtoolkit_error_link_text); ?>
                        
                        <svg class="btn-icon position-absolute" width="10" height="10" viewBox="0 0 10 10"
                              fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M5 10L4.115 9.115L7.60417 5.625H0V4.375H7.60417L4.115 0.885L5 0L10 5L5 10Z"
                                 fill="#003C4F" />
                        </svg>
                     </a>
                     <?php endif; ?>

                     <?php if(!empty($cbtoolkit_error_page_second_btn_text)) : ?>
                        <a href="<?php echo wp_kses_post($cbtoolkit_error_page_second_btn_link); ?>" class="btn position-relative rounded bg-btn btn-secondary text-uppercase border-0 text-clr-dark1 fs-14 fw-bold d-flex align-items-center">

                        <?php echo wp_kses_post($cbtoolkit_error_page_second_btn_text); ?>

                        <svg class="btn-icon position-absolute " width="10" height="10" viewBox="0 0 10 10"
                              fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M5 10L4.115 9.115L7.60417 5.625H0V4.375H7.60417L4.115 0.885L5 0L10 5L5 10Z"
                                 fill="#003C4F" />
                        </svg>
                        </a>
                     <?php endif; ?>
                  </div>

            </div>
         </div>

         <div class="col-lg-6">
            <?php if(!empty($cbtoolkit_error_404_image)) : ?>
            <div class="apps-error-image-top-114">
               <img src="<?php echo esc_url($cbtoolkit_error_404_image); ?>" alt="<?php echo esc_attr__('Error image', 'apps'); ?>">
            </div>
            <?php endif; ?>
         </div>
      </div>
   </div>
</section>
<!-- error area end -->

