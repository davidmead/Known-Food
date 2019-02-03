<?php

    namespace IdnoPlugins\Food {

        class ContentType extends \Idno\Common\ContentType {

            public $title = 'Eat/Drink';
            public $category_title = 'Eat/Drink';
            public $entity_class = 'IdnoPlugins\\Food\\Food';
            public $logo = '<i class="icon-align-left"></i>';
            public $indieWebContentType = array('food');

        }

    }
