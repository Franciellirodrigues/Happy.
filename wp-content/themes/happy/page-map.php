<?php get_header(); ?>
<main> 
    <div class="flex">
        <aside class="w-[410px]">
            <div class="gradient p-20">
                <img class="mb-[80px]" src="<?php echo get_theme_file_uri("/assets/logo.svg") ?>" alt="logo com sorriso e nome happy">
                <h2 class="font-nunito text-white text-4xl font-extrabold mx-6 my-6">Escolha um orfanato no mapa</h2>
                <p class="font-nunito text-white leading-7 mx-6">Muitas crianças estão esperando a sua visita :) </p>
                <div class="flex flex-col font-nunito text-white leading-7 mx-6 mt-[203px]">
                    <strong class="font-extrabold">São José dos Pinhais</strong>
                    <span>Paraná</span>
                </div> 
            </div> 
        </aside>
        <aside class="flex flex-1"> 
            <div id="map" class="w-full"></div>
        </aside>   
    </div>
</main>
<?php get_footer(); ?>









