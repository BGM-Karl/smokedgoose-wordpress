<?php

add_filter('zcpri/get-condition-type-group-cart_items', 'zcpri_get_condition_type_cart_items_attributes', 10, 2);
if (!function_exists('zcpri_get_condition_type_cart_items_attributes')) {

    function zcpri_get_condition_type_cart_items_attributes($list, $args) {
        $list['cart_items_attributes'] = esc_html__('Attributes In Cart', 'zcpri-woopricely');
        return $list;
    }

}


add_filter('zcpri/get-condition-type-fields', 'zcpri_get_condition_type_cart_items_attributes_fields', 10, 2);

if (!function_exists('zcpri_get_condition_type_cart_items_attributes_fields')) {

    function zcpri_get_condition_type_cart_items_attributes_fields($fields, $args) {

        $fields['cart_items_attributes'] = array(
            array(
                'id' => 'compare',
                'type' => 'select2',
                'default' => 'in_list',
                'options' => array(
                    'in_list' => esc_html__('Any in the list', 'zcpri-woopricely'),
                    'in_all_list' => esc_html__('All in the list', 'zcpri-woopricely'),
                    'in_list_only' => esc_html__('Only in the list', 'zcpri-woopricely'),
                    'in_all_list_only' => esc_html__('Only all in the list', 'zcpri-woopricely'),
                    'none' => esc_html__('None in the list', 'zcpri-woopricely'),
                ),
                'width' => '98%',
                'box_width' => '25%',
            ),
            array(
                'id' => 'attribute_ids',
                'type' => 'select2',
                'multiple' => true,
                'minimum_input_length' => 2,
                'placeholder' => 'Search attributes...',
                'allow_clear' => true,
                'minimum_results_forsearch' => 10,
                'ajax_data' => 'wc:attributes',
                'width' => '100%',
                'box_width' => '56%',
            )
        );
        return $fields;
    }

}

add_filter('zcpri/validate-condition-cart_items_attributes', 'zcpri_validate_condition_cart_items_attributes', 10, 3);
if (!function_exists('zcpri_validate_condition_cart_items_attributes')) {

    function zcpri_validate_condition_cart_items_attributes($rule, $args) {
        $attrs = array();

        foreach (WooPricely::get_products_from_cart() as $product) {
            $db_attrs = wc_get_product($product['id'])->get_attributes();
            foreach ($db_attrs as $db_attr) {
                foreach ($db_attr->get_options() as $attr_option) {
                    $attrs[] = $attr_option;
                }
            }
        }

        if (!is_array($rule['attribute_ids'])) {
            return false;
        }

        if (count($attrs) == 0) {
            return false;
        }

        return WooPricely_Validation_Util::validate_list_list($attrs, $rule['attribute_ids'], $rule['compare']);
    }

}