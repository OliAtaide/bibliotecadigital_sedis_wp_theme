<?php /* Template Name: TestPage */?>
<?php
global $posts_per_page;

$imp_query = new WP_Query([
    'post_type' => 'impressos',
    'category_name' => '',
    'posts_per_page' => -1,
    'order' => 'desc',
]);

$impressos = $imp_query->get_posts();

$max_num_pages = ceil($imp_query->found_posts / 18);

?>

<div id="Main" class="container">
    <button class="btn voltar">
        Voltar
    </button>
    <div class="row">
        <div class="col">
            <div class="btn w-100 categoria categoria-1" data-type="impressos" data-category="biologia">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M8.75 6.75c0 1.25-.75 3-.75 3m.25-2.5s.75-2-1-3.5s-4.5-1-4.5-1s0 2 1.5 3.5s4 1 4 1zm.5-1s-.75-2 1-3.5s4.5-1 4.5-1s0 2-1.5 3.5s-4 1-4 1zm-4 3.5h6.5s.5 4.5-3.25 4.5s-3.25-4.5-3.25-4.5z" />
                </svg>
                <h4>
                    Biologia
                </h4>
            </div>
        </div>
        <div class="col">
            <div class="btn w-100 categoria categoria-2" data-type="impressos" data-category="geografia">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <title>earth</title>
                    <path
                        d="M17.9,17.39C17.64,16.59 16.89,16 16,16H15V13A1,1 0 0,0 14,12H8V10H10A1,1 0 0,0 11,9V7H13A2,2 0 0,0 15,5V4.59C17.93,5.77 20,8.64 20,12C20,14.08 19.2,15.97 17.9,17.39M11,19.93C7.05,19.44 4,16.08 4,12C4,11.38 4.08,10.78 4.21,10.21L9,15V16A2,2 0 0,0 11,18M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                </svg>
                <h4>
                    Geografia
                </h4>
            </div>
        </div>
        <div class="col">
            <div class="btn w-100 categoria categoria-3" data-type="impressos" data-category="matematica">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="#000" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M16 13l4 4m0 -4l-4 4" />
                    <path d="M20 5h-7l-4 14l-3 -6h-2" />
                </svg>
                <h4>
                    Matemática
                </h4>
            </div>
        </div>
        <div class="col">
            <div class="btn w-100 categoria categoria-4" data-type="impressos" data-category="fisica">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <title>atom</title>
                    <path
                        d="M12,11A1,1 0 0,1 13,12A1,1 0 0,1 12,13A1,1 0 0,1 11,12A1,1 0 0,1 12,11M4.22,4.22C5.65,2.79 8.75,3.43 12,5.56C15.25,3.43 18.35,2.79 19.78,4.22C21.21,5.65 20.57,8.75 18.44,12C20.57,15.25 21.21,18.35 19.78,19.78C18.35,21.21 15.25,20.57 12,18.44C8.75,20.57 5.65,21.21 4.22,19.78C2.79,18.35 3.43,15.25 5.56,12C3.43,8.75 2.79,5.65 4.22,4.22M15.54,8.46C16.15,9.08 16.71,9.71 17.23,10.34C18.61,8.21 19.11,6.38 18.36,5.64C17.62,4.89 15.79,5.39 13.66,6.77C14.29,7.29 14.92,7.85 15.54,8.46M8.46,15.54C7.85,14.92 7.29,14.29 6.77,13.66C5.39,15.79 4.89,17.62 5.64,18.36C6.38,19.11 8.21,18.61 10.34,17.23C9.71,16.71 9.08,16.15 8.46,15.54M5.64,5.64C4.89,6.38 5.39,8.21 6.77,10.34C7.29,9.71 7.85,9.08 8.46,8.46C9.08,7.85 9.71,7.29 10.34,6.77C8.21,5.39 6.38,4.89 5.64,5.64M9.88,14.12C10.58,14.82 11.3,15.46 12,16.03C12.7,15.46 13.42,14.82 14.12,14.12C14.82,13.42 15.46,12.7 16.03,12C15.46,11.3 14.82,10.58 14.12,9.88C13.42,9.18 12.7,8.54 12,7.97C11.3,8.54 10.58,9.18 9.88,9.88C9.18,10.58 8.54,11.3 7.97,12C8.54,12.7 9.18,13.42 9.88,14.12M18.36,18.36C19.11,17.62 18.61,15.79 17.23,13.66C16.71,14.29 16.15,14.92 15.54,15.54C14.92,16.15 14.29,16.71 13.66,17.23C15.79,18.61 17.62,19.11 18.36,18.36Z" />
                </svg>
                <h4>
                    Física
                </h4>
            </div>
        </div>
        <div class="col">
            <div class="btn w-100 categoria categoria-5" data-type="impressos" data-category="quimica">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path
                        d="M8.6 42q-2.1 0-2.975-1.95T6.2 36.5l12.4-14V9H16q-.65 0-1.075-.425Q14.5 8.15 14.5 7.5q0-.65.425-1.075Q15.35 6 16 6h16q.65 0 1.075.425.425.425.425 1.075 0 .65-.425 1.075Q32.65 9 32 9h-2.6v13.5l12.4 14q1.45 1.6.575 3.55Q41.5 42 39.4 42ZM8 39h32L26.4 23.6V9h-4.8v14.6Zm15.9-15Z" />
                </svg>
                <h4>
                    Química
                </h4>
            </div>
        </div>
        <div class="col">
            <div class="btn w-100 categoria categoria-6" data-type="impressos" data-category="interdisciplinares">
                <svg viewBox='0 0 24 24' version='1.1' xmlns='http://www.w3.org/2000/svg'
                    xmlns:xlink='http://www.w3.org/1999/xlink'>
                    <title>book_5_line</title>
                    <g id='页面-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'>
                        <g id='Education' transform='translate(-672.000000, 0.000000)'>
                            <g id='book_5_line' transform='translate(672.000000, 0.000000)'>
                                <path
                                    d='M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z'
                                    id='MingCute' fill-rule='nonzero'></path>
                                <path
                                    d='M3,4 C3,2.89543 3.89543,2 5,2 L7,2 C7.36429,2 7.70583,2.09739 8,2.26757 C8.29418,2.09739 8.63571,2 9,2 L11,2 C11.7274,2 12.3642,2.38835 12.7142,2.96904 C12.9235,2.80144 13.1702,2.67346 13.4459,2.5996 L15.3777,2.08196 C16.4447,1.79607 17.5413,2.42924 17.8272,3.49617 L21.9683,18.951 C22.2542,20.0179 21.621,21.1146 20.5541,21.4005 L18.6223,21.9181 C17.5553,22.204 16.4587,21.5708 16.1728,20.5039 L13,8.66297 L13,20 C13,21.1046 12.1046,22 11,22 L9,22 C8.63571,22 8.29417,21.9026 8,21.7324 C7.70583,21.9026 7.36429,22 7,22 L5,22 C3.89543,22 3,21.1046 3,20 L3,4 Z M5,4 L7,4 L7,20 L5,20 L5,4 Z M11,20 L9,20 L9,4 L11,4 L11,20 Z M13.9635,4.53145 L15.8954,4.01381 L20.0365,19.4686 L18.1046,19.9863 L13.9635,4.53145 Z'
                                    id='形状' fill='#000000FF'></path>
                            </g>
                        </g>
                    </g>
                </svg>
                <h4>
                    Interdisciplinares
                </h4>
            </div>
        </div>
    </div>
    <div class="d-flex my-4">
        <h4>
            <?php echo $posts_per_page ?>
            de
            <?php echo $imp_query->found_posts ?>
            livros
        </h4>
        <div class="search input-group w-auto ms-auto">
            <div class="input-group-prepend">
                <span class="input-group-text h-100" id="basic-addon1">
                    <img src="<?php
                    echo get_template_directory_uri() . '/icons/mingcute_search-line.svg'
                        ?>" alt="">
                </span>
            </div>
            <input class="imp-input" value="">
            <input type="text" class="imp-busca form-control rounded-pill" placeholder="Busque o livro que procura"
                aria-label="Username" aria-describedby="basic-addon1" value="">
        </div>
    </div>
    <div id="carouselImpressos" class="carousel carousel-impressos">
        <?php include_once('impressos_loop.php') ?>
    </div>
</div>