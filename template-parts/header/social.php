<ul class="social">
    <?php
        global $wayup_options;
        $social_links = $wayup_options['social_sortable'];
        foreach($social_links as $key => $value){
            $label = '';
            $svg = '';
            $class = '';

            if ($key == 'Vkontakte link'){
                $label = '<span>Vk</span>';
                $svg = '<svg  width="21" height="18">
                            <use xlink:href="#vk"/>
                        </svg>';
                $class = 'social__icon social__icon_vk';
            }else if ($key == 'Facebook link'){
                $label = '<span>Fb</span>';
                $svg = '<svg  width="14" height="17">
                            <use xlink:href="#facebook"/>
                        </svg>';
                $class = 'social__icon social__icon_fb';
            }else if ($key == 'Twitter link'){
                $label = '<span>Tw</span>';
                
                $svg = '<svg  width="18" height="15">
                            <use xlink:href="#twitter"/>
                        </svg>';
                $class = 'social__icon social__icon_tw';

            }else if ($key == 'Instagram link'){
                $label = '';
                $svg = '<svg   width="16" height="16">
                            <use xlink:href="#instagram"/>
                        </svg>';
                $class = 'social__icon social__icon_inst';
            }

            if($value){
            ?>        
            <li class="social__item">
                <?php echo $label; ?>
                <a class="<?php echo $class; ?>" target="_blank" href="<?php echo $value;?>">
                    <?php  echo $svg; ?>
                </a>
            </li>
        <?}?>    
    <?}?>

</ul>