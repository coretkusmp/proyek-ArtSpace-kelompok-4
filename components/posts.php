<div class="mainContent">
   <ul>
      <?php foreach ($posts as $post): ?>
         <a href="#">
            <li>
               <div class="post">
                  <img src="<?= $post['picture']; ?>" alt="">
                  <div class="description">
                     <p><?= $post['title'] ?></p>
                     <span><img src="/assets/icons/view.png" alt="view:">
                        <p><?= $post['view'] ?></p>
                     </span>
                  </div>
               </div>
            </li>
         </a>
      <?php endforeach; ?>
   </ul>
</div>