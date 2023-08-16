<div class="modal fade apps-portfolio-modal" id="modal_for_project" tabindex="-1" aria-labelledby="modal_for_projectLabel" aria-hidden="true">
    <div class="container">
        <div class="apps-portfolio-modal-top-114  pt-40">
            <div class="apps-portfolio-moal-top-left-box">
                <button type="button" class="btn-close apps-portfolio-close" data-bs-dismiss="modal"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M24 1.414L22.586 0L12 10.586L1.414 0L0 1.414L10.586 12L0 22.586L1.414 24L12 13.414L22.586 24L24 22.586L13.414 12L24 1.414Z" fill="white"/>
</svg>
</button>
                <div class="icon">
                    <img src="https://wadialbadaitsolutions.ae/wp-content/uploads/2023/08/portfolio-details.svg" alt="icon">
                </div>
                <div class="content">
                    <h5 class="title">Easpa – Mobile Wallet App</h5>
                    <div class="meta">
                        <p>Wadi Al Bada</p>
                        <a href="#">Follow</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-dialog modal-xl">
        <div class="modal-content bg-transparent">
            <img src="#" alt="image">
        </div>
    </div>
</div>
<!-- project area start -->
<section class="project-area">
    <div class="container">
        <div class="apps-project-wrapper-114 p-rel">
            <div class="swiper-container apps-project-active-114">
            <?php if ($wp_query->have_posts()) : ?>
                <div class="swiper-wrapper">
                    <?php 
                    $post_type = 'project';
                    $taxonomy = 'project_category';
                    while ($wp_query->have_posts()) : $wp_query->the_post();
                        $post_id = get_the_ID();
                        $categories = get_the_terms($post_id, $taxonomy); // Get the categories for the current post
                        $project_big_image = get_post_meta($post_id, 'project_image', true);
                    ?>
                        <div class="swiper-slide">
                            <!-- project card -->
                            <div class="apps-project-card-114 apps-has-portfolio-popup cursor-pointer" data-bs-toggle="modal" data-bs-target="#modal_for_project" data-url="<?php echo $project_big_image ? esc_url($project_big_image): ''; ?>" data-title="<?php echo get_the_title(); ?>">
                                <?php if (has_post_thumbnail(get_the_ID())) : ?>
                                    <div class="apps-project-card-image-114">
                                        <?php the_post_thumbnail(get_the_ID(), 'full'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="apps-project-card-description-wrapper-114" data-url="<?php echo $project_big_image ? esc_url($project_big_image) : ''; ?>" data-bs-toggle="modal" data-bs-target="#modal_for_project" data-title="<?php echo get_the_title(); ?>">
                                    <div class="row">
                                        <div class="col-xxl-10 col-xl-10 mb-30 mb-xl-0">
                                            <h5 class="apps-project-card-title-114"><button data-bs-toggle="modal" data-bs-target="#modal_for_project" data-url="<?php echo $project_big_image ? esc_url($project_big_image) : ''; ?>" class="apps-has-portfolio-popup" data-title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></button></h5>
                                            <?php
                                            if ($categories && !is_wp_error($categories)) {
                                                $first_category = reset($categories); // Get the first category for the current post

                                                if ($first_category) {
                                                    $cat_name = $first_category->name;
                                                    $cat_link = get_term_link($first_category, $taxonomy); // Get the category link
                                                    echo '<span class="apps-project-card-category-114">' . esc_html($cat_name) . '</span>';
                                                }
                                            }
                                            ?>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2">
                                            <div class="apps-project-card-action-icon-114 text-xl-end">
                                                <button class="apps-has-portfolio-popup"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-top-right.svg" loading="async" width="20" height="20" alt="project"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            </div>
            <div class="apps-project-pagination-wrapper-114">
                <div class="apps-project-next-114">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 5L9.115 5.885L12.6042 9.375H5V10.625H12.6042L9.115 14.115L10 15L15 10L10 5Z" fill="#73A7C3"/>
                    </svg>
                </div>
                <div class="apps-project-prev-114">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 15L10.885 14.115L7.39583 10.625H15V9.375H7.39583L10.885 5.885L10 5L5 10L10 15Z" fill="#73A7C3"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- project area end -->