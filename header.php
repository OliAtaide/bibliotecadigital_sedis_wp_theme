<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <?php wp_head() ?>
</head>

<body>
    <div class="navbar p-0">
        <div class="container-fluid container">
            <div class="navbar-brand">
                <img src="<?php echo get_theme_file_uri("icons/mingcute_book-5-line.svg")?>" alt="">
                <strong>Biblioteca Digital</strong>
            </div>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a href="#impressos" class="nav-link" id="nav-impressos-tab" data-bs-toggle="tab" data-bs-target="#nav-impressos"
                    type="button" role="tab" aria-controls="nav-impressos" aria-selected="true">Impressos</a>
                <a href="#interativos" class="nav-link active" id="nav-interativos-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-interativos" type="button" role="tab" aria-controls="nav-interativos"
                    aria-selected="false">Interativos</a>
                <a href="#videoaulas" class="nav-link" id="nav-videoaulas-tab" data-bs-toggle="tab" data-bs-target="#nav-videoaulas"
                    type="button" role="tab" aria-controls="nav-videoaulas" aria-selected="false">Vídeoaulas</a>
            </div>
        </div>
    </div>

    <div class="filter"></div>