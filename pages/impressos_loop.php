<?php
global $impressos, $max_num_pages, $imp_query;

$posts_per_page = 18;
?>
<div class="carousel-inner">
    <?php for ($i = 0; $i < $max_num_pages; $i++) { ?>
        <div class="carousel-item <?php if ($i == 0): ?>active<?php endif ?>">
            <?php
            $min = $posts_per_page * $i;
            if ($i == $max_num_pages - 1) {
                $max = ($posts_per_page * $i) + $imp_query->found_posts % $posts_per_page;
            } else {
                $max = $posts_per_page * ($i + 1);
            }
            ?>
            <div class="row row-cols-6 align-items-stretch">
                <?php for ($j = $min; $j < $max; $j++):
                    $impresso = $impressos[$j]; ?>
                    <?php $category = get_the_category($impresso->ID)[0]->cat_name ?>
                    <div class="col mb-4 panel">

                        <button
                            onclick="location.href='<?php echo wp_get_attachment_url($attachment_id = $impresso->arquivo) ?>'"
                            value="<?php echo $impresso->post_title ?>"
                            class="card h-100 card-<?php echo $category ?> text-start" data-bs-toggle="modal">
                            <div class="card-body d-flex flex-column">
                                <?php
                                switch ($category) {
                                    case 'biologia':
                                        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.75 6.75c0 1.25-.75 3-.75 3m.25-2.5s.75-2-1-3.5s-4.5-1-4.5-1s0 2 1.5 3.5s4 1 4 1zm.5-1s-.75-2 1-3.5s4.5-1 4.5-1s0 2-1.5 3.5s-4 1-4 1zm-4 3.5h6.5s.5 4.5-3.25 4.5s-3.25-4.5-3.25-4.5z"></path>
                                        </svg>';
                                        break;
                                    case 'geografia':
                                        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <title>earth</title>
                                            <path d="M17.9,17.39C17.64,16.59 16.89,16 16,16H15V13A1,1 0 0,0 14,12H8V10H10A1,1 0 0,0 11,9V7H13A2,2 0 0,0 15,5V4.59C17.93,5.77 20,8.64 20,12C20,14.08 19.2,15.97 17.9,17.39M11,19.93C7.05,19.44 4,16.08 4,12C4,11.38 4.08,10.78 4.21,10.21L9,15V16A2,2 0 0,0 11,18M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z">
                                            </path>
                                        </svg>';
                                        break;
                                    case 2:
                                        echo "i equals 2";
                                        break;
                                }
                                ?>
                                <div class="card-title my-3">
                                    <?php echo $impresso->post_title ?>
                                </div>
                                <img class="card-img mt-auto img-fluid" src="<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($impresso->ID), 'medium');
                                echo $image[0]; ?>" alt="">
                            </div>
                        </button>

                    </div>
                <?php endfor ?>
            </div>
        </div>
    <?php } ?>
</div>
<div class="carousel-indicators">
    <?php for ($i = 0; $i < $max_num_pages; $i++) { ?>
        <button type="button" data-bs-target="#carouselImpressos" data-bs-slide-to="<?php echo $i ?>"
            class="btn<?php if ($i == 0): ?> active" aria-current="true" <?php else: ?> " <?php endif ?>>
            <?php echo $i + 1 ?>
        </button>
    <?php } ?>
</div>