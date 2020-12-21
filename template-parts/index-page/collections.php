<?php
/**
 * collections in index page template part
 * 
 * @package Ucef
 */
?>

<div class="collections">

    <div class="container">

        
        <h2 class="collections__title">COLLECTIONS</h2>
        
        <div class="collections__content">

        <?php
            $items = array(
                array(
                    'href'   => '#',
                    'src'    => 'man',
                    'alt'    => 'man',
                    'title'  => 'MEN'
                ),
                array(
                    'href'   => '#',
                    'src'    => 'woman',
                    'alt'    => 'woman',
                    'title'  => 'WOMEN'
                ),
                array(
                    'href'   => '#',
                    'src'    => 'boy',
                    'alt'    => 'boy',
                    'title'  => 'BOY'
                ),
                array(
                    'href'   => '#',
                    'src'    => 'girl',
                    'alt'    => 'girl',
                    'title'  => 'GIRL'
                ),
            );

            foreach ( $items as $item ){
            ?>
                <div class="collections__item">
                    <a class="collections__item__link" href="<?php echo $item['href']; ?>">
                        <div class="collections__item__photo">
                            <div class="collections__item__photo__content">
                                <img srcset="<?php echo get_template_directory_uri() . '/assets/dist/images/collections/'. $item['src'] .'-small.jpg' ?> 450w,
                                            <?php echo get_template_directory_uri() . '/assets/dist/images/collections/'. $item['src'] .'-medium.jpg' ?> 900w,
                                            <?php echo get_template_directory_uri() . '/assets/dist/images/collections/'. $item['src'] .'.jpg' ?> 2000w"
                                            alt="<?php echo $item['alt'] ?>">
                            </div>
                        </div>
                        <h4 class="collections__item__title"><?php echo $item['title'] ?></h4>
                    </a>
                </div>
            <?php
            }
        ?>
            
        </div>
        
    </div>

</div>