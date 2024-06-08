<?php get_header(); ?>
<?php
if (isset($_GET['post_id'])) {
    $post_id = intval($_GET['post_id']);
    $post = get_post($post_id);
   
    if ($post && $post->post_type == 'post') { // Certifique-se de que o post é do tipo correto
        setup_postdata($post);
        $atendimento = get_field('atendimento', $post_id);
?>

<main class="bg-slate-100 font-nunito py-16"> 
    <aside class="fixed h-full top-0 gradient py-4 px-2 flex flex-col justify-between">
        <img class="w-[45px]" src="<?php echo get_theme_file_uri("/assets/map-marker.svg") ?>" alt="logo com sorriso e nome happy">
        <a href="<?php echo site_url('/map') ?>">
            <div class="w-[48px] h-[48px] bg-customYellow rounded-2xl flex items-center justify-center cursor-pointer hover:bg-customBlue hover:duration-500">
                <img src="<?php echo get_theme_file_uri("/assets/Arrowsmall.svg") ?>" alt="flecha para esquerda">
            </div>
        </a>
    </aside>
    <section class="w-[700px] p-20 mx-auto bg-white border border-gray-300 rounded-2xl overflow-hidden">
        <h1 class="text-customGray font-extrabold text-[54px] leading-[54px] mb-2"><?php echo get_field('titulo') ?></h1>
        <p class="leading-7 text-[#5C8599] mt-6"><?php echo get_field('subtitulo') ?></p>
    
        <div class="map-container mt-8 mb-8 w-[546px] h-[280px] bg-[#E6F7FB] border rounded-[20px]	border-solid border-blue-200">
            <div class="text-center text-lg ">
                <?php echo get_field('mapa') ?>
            </div>
            <p class="font-bold pt-[12px] text-center leading-6 text-[#0089A5]">ver rota no google</p>
        </div>
        <hr />

        <h2 class="text-customGray font-extrabold text-[36px] leading-[46px] mb-2 mt-8">Instruções para visita</h2>
        <p class="leading-7 text-[#5C8599]">Venha como se sentir mais à vontade e traga muito amor para dar.</p>

        <div class=" mt-6 flex gap-5 items-center justify-center ">
            <div class="w-full text-lg text-[#5C8599] p-4 rounded-[20px] line-height-7 border border-solid border-customOcean bg-customWhite">
                <img class="w-10 h-10 mb-8" src="<?php echo get_theme_file_uri("/assets/Clock.svg") ?>" alt="logo horario">
                Segunda à Sexta <br />
                Das <?php echo get_field('horario-inicio') ?> às <?php echo get_field('horario-final') ?>
            </div>
            
            <?php if($atendimento == 1) { ?>
                <div class="w-full text-lg text-[#5C8599] p-4 rounded-[20px] line-height-7 border border-solid border-customGreen bg-customGreenLight">
                    <img class="w-10 h-10 mb-8" src="<?php echo get_theme_file_uri("/assets/Alerta.svg") ?>" alt="logo horario">
                    <p>Atendemos <br /> fim de semana</p>
                </div>
            <?php } else { ?>
                <div class="w-full text-lg text-[#FF69B4] p-4 rounded-[20px] line-height-7 border border-solid border-[#FF69B4] bg-[#eddee4]">
                    <img class="w-10 h-10 mb-8" src="<?php echo get_theme_file_uri("/assets/Alerta-second.svg") ?>" alt="logo horario">
                    <p>Não Atendemos <br /> no fim de semana</p>
                </div>
            <?php } ?>  
        </div>
        <div class="leading-7 text-[#5C8599] pt-12">
            <span>Agende seu horario:<?php echo get_field('agendamento') ?></span>
        </div>
    </section>
</main>

<?php
    }
}
?>

<?php get_footer(); ?>

