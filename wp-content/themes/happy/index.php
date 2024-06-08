<?php get_header(); ?>
<main class="gradient h-screen py-[120px] px-[160px]"> 
    <section class="flex">
        <div class="w-[400px]">
            <img class="mb-[108px]" src="<?php echo get_theme_file_uri("/assets/logo.svg") ?>" alt="logo com sorriso e nome happy">
            <h1 class="font-nunito font-black text-[76px] leading-[70px] mb-10 text-white">Leve felicidade para o mundo</h1>
            <p class="text-white">Visite orfanatos e mude o dia de muitas crianças.</p>
        </div>
        <div class="relative flex flex-1">
            <img class="h-[600px]" src="<?php echo get_theme_file_uri("/assets/landing-ilustra.svg") ?>" alt="três crianças felizes">
            <div class="absolute right-0 flex flex-col text-end text-white">
                <strong>São José dos Pinhais</strong>
                <span>Paraná</span>
            </div>
            <a href="<?php echo site_url('/map') ?>">
                <div class="w-[80px] h-[80px] bg-customYellow rounded-[30px] flex items-center justify-center absolute right-0 bottom-0 cursor-pointer hover:bg-customBlue hover:duration-500">
                    <img src="<?php echo get_theme_file_uri("/assets/arrow.svg") ?>" alt="flecha para direita">
                </div>
            </a>
        </div>
    </section>
</main>
<?php get_footer(); ?>
