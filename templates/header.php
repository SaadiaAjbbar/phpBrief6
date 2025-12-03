 <header class="bg-black shadow-md text-white">
   <nav class="container mx-auto flex justify-between items-center py-4 p-32 ">
     <h1 class=" text-4xl font-bold text-[#FA871F] ml-3.5">DigitalWave</h1>
     <?php
      function active($currect_page)
      {
        
        if (isset($_GET['page']) && $_GET['page'] == $currect_page) {
          echo 'text-[#FA871F]';
        }
      }
      ?>
     <ul class="flex space-x-6">
       <li><a href="index.php?page=home" class=" <?php active('home'); ?> text-xl  hover:text-[#FA871F]">Accueil</a></li>
       <li><a href="index.php?page=services" class="<?php active('services'); ?>  text-xl hover:text-[#FA871F]">Services</a></li>
       <li><a href="index.php?page=about" class="<?php active('about'); ?>  text-xl hover:text-[#FA871F]">À propos</a></li>
       <li><a href="index.php?page=contact" class="<?php active('contact'); ?>  text-xl hover:text-[#FA871F]">Contact</a></li>
     </ul>
   </nav>
 </header>