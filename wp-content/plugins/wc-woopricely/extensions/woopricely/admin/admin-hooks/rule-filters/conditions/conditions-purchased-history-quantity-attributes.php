<?php

add_filter('zcpri/get-condition-type-group-purchased_history_qty', 'zcpri_get_condition_type_purchased_qty_attributes', 10, 2);
if (!function_exists('zcpri_get_condition_type_purchased_qty_attributes')) {

    function zcpri_get_condition_type_purchased_qty_attributes($list, $args) {
        $list['purchased_qty_attributes'] = esc_html__('Bought Attributes Quantity', 'zcpri-woopricely');
        return $list;
    }

}

add_filter('zcpri/get-condition-type-fields', 'zcpri_get_condition_type_purchased_qty_attributes_fields', 10, 2);

if (!function_exists('zcpri_get_condition_type_purchased_qty_attributes_fields')) {

    function zcpri_get_condition_type_purchased_qty_attributes_fields($fields, $args) {

        $flds = array(
            array(
                'id' => 'attribute_ids',
                'type' => 'select2',
                'multiple' => true,
                'minimum_input_length' => 2,
                'placeholder' => 'Search attributes...',
                'allow_clear' => true,
                'minimum_results_forsearch' => 10,
                'ajax_data' => 'wc:attributes',
                'width' => '98%',
                'box_width' => '35%',
            ),
            array(
                'id' => 'compare',
                'type' => 'select2',
                'default' => '>',
                'options' => array(
                    '>=' => esc_html__('More than or equal to', 'zcpri-woopricely'),
                    '>' => esc_html__('More than', 'zcpri-woopricely'),
                    '<=' => esc_html__('Less than or equal to', 'zcpri-woopricely'),
                    '<' => esc_html__('Less than', 'zcpri-woopricely'),
                    '==' => esc_html__('Equal to', 'zcpri-woopricely'),
                    '!=' => esc_html__('Not equal to', 'zcpri-woopricely'),
                ),
                'width' => '98%',
                'box_width' => '31%',
            ),
            array(
                'id' => 'quantity',
                'type' => 'textbox',
                'input_type' => 'number',
                'default' => '0',
                'placeholder' => esc_html__('0', 'zcpri-woopricely'),
                'width' => '100%',
                'box_width' => '15%',
                'attributes' => array(
                    'min' => '0',
                    'step' => '1',
                ),
            ),
        );

        $fields['purchased_qty_attributes'] = $flds;
        return $fields;
    }

}

add_filter('zcpri/validate-condition-purchased_qty_attributes', 'zcpri_validate_condition_purchased_qty_attributes', 10, 3);
if (!function_exists('zcpri_validate_condition_purchased_qty_attributes')) {

    function zcpri_validate_condition_purchased_qty_attributes($rule, $args) {

        if (!is_array($rule['attribute_ids'])) {
            return false;
        }

        $quantity = WooPricelyUtil::get_purchase_history_quantity(get_current_user_id(), 'attribute_ids', $rule['attribute_ids'], '', true, true);

        return WooPricely_Validation_Util::validate_value($rule['compare'], $quantity, $rule['quantity'], 'no');
    }

}