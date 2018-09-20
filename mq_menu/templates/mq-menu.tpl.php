<?php $items = $variables['menu']; ?>
<svg class="hidden">
      <symbol id="icon-menu" viewBox="0 0 14 37">
        <title>menu</title>
        <path d="M13.95.94v36.01h-3.858V.94zM3.919.94v36.01H.06V.94z"/>
      </symbol>
    </svg>
        <div class="menu__button-wrap">
          <button class="menu__button"><svg class="icon icon--menu"><use xlink:href="#icon-menu"></use></svg></button>
        </div>
        <div class="menu__inner">

<?php foreach ($items as $key => $item): ?>
  <?php if($item['link']['mlid'] == 218): ?>
<a href="/" class="menu__item"><?php echo $item['link']['title']; ?> </a>
<?php else : ?>
<a href="/<?php echo drupal_get_path_alias($item['link']['link_path']); ?>" class="menu__item"><?php echo $item['link']['title']; ?> </a>
<?php endif; ?>
<?php endforeach; ?>
        </div>
