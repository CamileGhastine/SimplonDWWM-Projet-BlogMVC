<div class="card border-dark mb-3">
  <div class="card-header"><?= $post['user'] . ', le ' . $post['date'] ?></div>
  <div class="card-body">
    <h4 class="card-title"><?= $post['title'] ?></h4>
    <p class="card-text"><?= $post['content'] ?></p>
  </div>
</div>
<p><a href="?page=post.home">Retour à la liste des articles</a></p>