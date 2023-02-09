<?php /* Template Name: MainPage */?>

<?php
$int_query = new WP_Query(array('post_type' => 'interativos'));

$interativos = $int_query->get_posts();

$imp_query = new WP_Query(array('post_type' => 'impressos', 'posts_per_page' => 18));

$impressos = $imp_query->get_posts();


$vid_query = new WP_Query(array('post_type' => 'videoaulas', 'order' => 'ASC'));

$videoaulas = $vid_query->get_posts();
?>

<div class="container">
    <div class="tab-content my-4" id="nav-tabContent">
        <div class="tab-pane fade" id="nav-impressos" role="tabpanel" aria-labelledby="nav-impressos-tab" tabindex="0">
            <?php include('impressos.php') ?>
        </div>
        <div class="tab-pane interativos-tab fade show active" id="nav-interativos" role="tabpanel"
            aria-labelledby="nav-interativos-tab" tabindex="0">
            <div class="d-flex mb-4">
                <h3>
                    Livros interativos
                </h3>
                <div class="search input-group w-auto ms-auto">
                    <div class="input-group-prepend">
                        <span class="input-group-text h-100" id="basic-addon1">
                            <img src="<?php
                            echo get_template_directory_uri() . '/icons/mingcute_search-line.svg'
                                ?>" alt="">
                        </span>
                    </div>
                    <input type="text" class="form-control rounded-pill" placeholder="Busque o livro que procura"
                        aria-label="Username" aria-describedby="basic-addon1">
                </div>

            </div>
            <div class="row row-cols-6 align-items-stretch">
                <?php foreach ($interativos as $interativo): ?>
                    <div class="col">
                        <button value="<?php echo $interativo->post_title ?>" class="card h-100 text-start"
                            data-bs-toggle="modal" data-bs-target="#interativoModal<?php echo $interativo->ID ?>">
                            <div class="card-body d-flex flex-column ">
                                <img class="card-icon" src="<?php
                                echo get_template_directory_uri() . '/icons/tabler_book-2.svg'
                                    ?>" alt="">
                                <div class="card-title my-3">
                                    <?php echo $interativo->post_title ?>
                                </div>
                                <img class="card-img img-fluid mt-auto" src="<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($interativo->ID), 'medium');
                                echo $image[0]; ?>" alt="">
                            </div>
                        </button>
                    </div>
                    <div class="modal modal-open interativo-modal fade" id="interativoModal<?php echo $interativo->ID ?>"
                        tabindex="-1" aria-labelledby="interativoModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <div class="modal-body d-flex">
                                    <img src="<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($interativo->ID), 'medium');
                                    echo $image[0]; ?>" alt="" class="interativo-capa">
                                    <div class="text ms-5 d-flex flex-column justify-content-around">
                                        <h1 class="modal-title">
                                            <?php echo $interativo->post_title ?>
                                        </h1>
                                        <p>
                                            Acessibilidade para deficientes visuais no serviço de transporte urbano: uma
                                            abordagem
                                            baseada em convergência tecnológica
                                        </p>
                                        <button type="button"
                                            class="btn w-100 d-flex justify-content-center align-items-center">
                                            <span>Baixar no iBooks</span>
                                            <img src="icons/open.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-videoaulas" role="tabpanel" aria-labelledby="nav-videoaulas-tab"
            tabindex="0">
            <div class="row">
                <?php foreach ($videoaulas as $videoaula): ?>
                    <div class="col-3">
                        <button class="videoaula w-100 d-flex flex-column border-0 text-start"
                            style="background-color: <?php echo $videoaula->cor ?>;" data-bs-toggle="modal"
                            data-bs-target="#videoaulaModal<?php echo $videoaula->ID ?>">
                            <?php echo $videoaula->icone ?>
                            <h1 class="mt-auto">
                                <?php echo $videoaula->post_title ?>
                            </h1>
                        </button>
                        <div class="modal fade videoaula-modal" id="videoaulaModal<?php echo $videoaula->ID ?>"
                            tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content d-flex justify-content-center align-items-center">
                                    <div class="modal-header w-100">
                                        <h3 class="modal-title">
                                            <?php echo $videoaula->post_title ?>
                                        </h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <video controls>
                                            <source
                                                src="<?php echo wp_get_attachment_url($attachment_id = $videoaula->arquivo) ?>"
                                                type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>