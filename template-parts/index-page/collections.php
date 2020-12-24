<?php
/**
 * collections in index page template part
 * 
 * @package Ucef
 */
?>

<div class="collections mt-32 mb-32">

    <div class="container">

        
        <h2 class="collections__title text-uppercase text-center text-black mb-32">collections</h2>
        
        <div class="collections__content">

        <?php
            $items = array(
                array(
                    'href'   => '#',
                    'src'    => 'man',
                    'alt'    => 'man',
                    'title'  => 'men'
                ),
                array(
                    'href'   => '#',
                    'src'    => 'woman',
                    'alt'    => 'woman',
                    'title'  => 'women'
                ),
                array(
                    'href'   => '#',
                    'src'    => 'boy',
                    'alt'    => 'boy',
                    'title'  => 'boys'
                ),
                array(
                    'href'   => '#',
                    'src'    => 'girl',
                    'alt'    => 'girl',
                    'title'  => 'girls'
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
                        <h3 class="collections__item__title text-uppercase text-center text-semibold text-black mt-16"><?php echo $item['title'] ?></h3>
                    </a>
                </div>
            <?php
            }
        ?>
            
        </div>
        
    </div>

</div>