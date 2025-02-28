<?php
add_action('acf/include_fields', function () {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_67c1904ab320f',
        'title' => 'Travel fields (aside)',
        'fields' => array(
            array(
                'key' => 'field_67c1904a007b3',
                'label' => 'L\'image sur le côté',
                'name' => 'side_image',
                'aria-label' => '',
                'type' => 'image',
                'instructions' => 'Préférez une image carré. Un recadrage automatique aura lieu !',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'id',
                'library' => 'all',
                'min_width' => 420,
                'min_height' => 420,
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'allow_in_bindings' => 0,
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_67c18d39d92e2',
                'label' => 'Point clés',
                'name' => 'keypoints',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'allow_in_bindings' => 0,
                'tabs' => 'visual',
                'toolbar' => 'basic',
                'media_upload' => 0,
                'delay' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'travel',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'side',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
        ),
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));

    acf_add_local_field_group(array(
        'key' => 'group_67c1776f14b1e',
        'title' => 'Travel fields (main)',
        'fields' => array(
            array(
                'key' => 'field_67c1776fe356d',
                'label' => 'Appréciation',
                'name' => 'rating',
                'aria-label' => '',
                'type' => 'select',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    0 => '0 étoiles',
                    1 => '1 étoiles',
                    2 => '2 étoiles',
                    3 => '3 étoiles',
                    4 => '4 étoiles',
                    5 => '5 étoiles',
                ),
                'default_value' => false,
                'return_format' => 'value',
                'multiple' => 0,
                'allow_null' => 0,
                'allow_in_bindings' => 0,
                'ui' => 0,
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'field_67c17941e356e',
                'label' => 'Date de départ',
                'name' => 'departure',
                'aria-label' => '',
                'type' => 'date_picker',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '25',
                    'class' => '',
                    'id' => '',
                ),
                'display_format' => 'd/m/Y',
                'return_format' => 'U',
                'first_day' => 1,
                'allow_in_bindings' => 0,
            ),
            array(
                'key' => 'field_67c179dee356f',
                'label' => 'Date de retour',
                'name' => 'return',
                'aria-label' => '',
                'type' => 'date_picker',
                'instructions' => 'Laisser si vide vous n\'êtes pas encore revenu.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '25',
                    'class' => '',
                    'id' => '',
                ),
                'display_format' => 'd/m/Y',
                'return_format' => 'U',
                'first_day' => 1,
                'allow_in_bindings' => 0,
            ),
            array(
                'key' => 'field_67c18d9fd92e3',
                'label' => 'Récit de voyage',
                'name' => 'story',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'allow_in_bindings' => 0,
                'tabs' => 'visual',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'travel',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'acf_after_title',
        'style' => 'seamless',
        'label_placement' => 'top',
        'instruction_placement' => 'field',
        'hide_on_screen' => array(
            0 => 'the_content',
        ),
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
});

