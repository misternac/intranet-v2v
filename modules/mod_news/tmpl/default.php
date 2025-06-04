<?php defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Router\Route;

?>
<div class="mod-news">
  <form method="get" action="">
    <input type="text" name="search" placeholder="Search..." />
    <select name="category">
      <option value="">All Categories</option>
      <!-- Dynamically populate categories -->
    </select>
    <button type="submit">Filter</button>
  </form>

  <?php if (!empty($articles) && is_array($articles)): ?>
    <?php foreach ($articles as $article): ?>
    <div class="article">
      <h3><a href="<?php echo Route::_(ContentHelperRoute::getArticleRoute($article->id, $article->catid)); ?>"><?php echo $article->title; ?></a></h3>
      <p><?php echo JHtml::_('string.truncate', strip_tags($article->introtext), 150); ?></p>
    </div>
  <?php endforeach; ?>
<?php else: ?>
    <p>Aucun article trouvé.</p>
<?php endif; ?>

  <!-- Pagination placeholder -->
</div>