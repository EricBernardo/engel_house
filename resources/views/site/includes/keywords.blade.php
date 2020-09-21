<?php if(isset($seo['keywords']) && $seo['keywords']) : ?>

        <div class="keywords js-keywords-carousel">
            <div class="keywords__view">
                <ul class="keywords-list js-keywords-list">

                    <?php
                        $arr_keywords = explode(',', $seo['keywords']);
                        shuffle($arr_keywords);
                        foreach ($arr_keywords as $key => $value) {
                            echo '<li class="keywords-list__item"><p data-slide="'.$key.'" class="keywords">'.trim($value).'</p></li>';
                        }
                    ?>

                </ul>
            </div>
        </div>

    <?php endif; ?>
