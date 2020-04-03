<?php
/**
*IndexSwither
*
* @author      youranreus
*/
?>

<?php if ($this->options->IndexStyle == 1 or $this->options->IndexStyle == 0): ?>

  <?php while($this->next()): ?>
   <a href="<?php $this->permalink() ?>">
    <div id="article-<?php $this->cid();?>" class="article-item hoverup">
      <h2 id="article-<?php $this->cid();?>-title"><span><?php $this->sticky(); $this->title() ?></span></h2>
      <?php if ($this->options->IndexStyle == 1): ?><em><?php $this->excerpt(50);?></em><?php endif; ?>
      <p class="clear"><span id="article-author"><?php $this->author(); ?></span><span id="article-date"><?php $this->date('F j, Y'); ?></span></p>
    </div>
    </a>
  <?php endwhile; ?>

<?php elseif($this->options->IndexStyle == 2): ?>

  <?php while($this->next()): ?>
    <div class="card-item">
       <article>
         <div class="card-cover" style="background-image: url(<?php  $imgurl = $this->fields->imgurl;if(isset($imgurl)){echo $imgurl;}else{$this->options->defaultPostIMG();}?>)"></div>
         <a class="article-link card-link" href="<?php $this->permalink() ?>" itemprop="url"></a>
         <h2 class="article-title"><?php $this->title() ?></h2>
         <div class="article-meta">
           <div class="article-category">
             <a class="article-category-link"><?php $this->category(',',false); ?></a>
             <a class="article-date"><?php echo formatTime($this->created);?></a>
           </div>
         </div>

       </article>
     </div>
  <?php endwhile; ?>

<?php endif; ?>
