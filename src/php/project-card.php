<?php
$post = get_post();
$terms = get_the_terms( $post->ID, 'blog_category' ); 

?>
<a class="project-link" href="<?=get_post_permalink()?>">
    <div class="project-card">
        <div class="project-header"><?=get_the_title() ?></div>
        <div class="project-filter">
        <?php foreach ($terms as $term):?>
            <span class = "filter__item">
            <?php echo $term->name;?>
        </span>
        <?php endforeach;?>  
        </div>
        <div class="project-image"> <img
                src="<?php echo get_field('project_preview');?>" alt=""></div>
        <div class="project-caption"><?php echo get_field('project_desc');?></div>
    </div>
</a>