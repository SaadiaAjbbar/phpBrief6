 <header class="bg-white shadow-md">
   <nav class="container mx-auto flex justify-between items-center py-4 p-14">
     <h1 class="text-2xl font-bold text-blue-600 ml-3.5">DigitalWave</h1>
     <?php
      function active($currect_page)
      {
        
        if (isset($_GET['page']) && $_GET['page'] == $currect_page) {
          echo 'text-blue-600';
        }
      }
      ?>
     <ul class="flex space-x-6">
       <li><a href="index.php?page=home" class="<?php active('home'); ?> hover:text-[#C47BE4]">Accueil</a></li>
       <li><a href="index.php?page=services" class="<?php active('services'); ?> hover:text-blue-600">Services</a></li>
       <li><a href="index.php?page=about" class="<?php active('about'); ?> hover:text-blue-600">À propos</a></li>
       <li><a href="index.php?page=contact" class="<?php active('contact'); ?> hover:text-blue-600">Contact</a></li>
     </ul>
   </nav>
 </header>