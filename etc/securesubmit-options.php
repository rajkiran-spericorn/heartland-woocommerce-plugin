<?php

if (!defined('ABSPATH')) {
    exit();
}

return array(
    'enabled' => array(
        'title'       => __('Enable/Disable', 'wc_securesubmit'),
        'label'       => __('Enable SecureSubmit', 'wc_securesubmit'),
        'type'        => 'checkbox',
        'description' => '',
        'default'     => 'no',
    ),
    'title' => array(
        'title'       => __('Title', 'wc_securesubmit'),
        'type'        => 'text',
        'description' => __('This controls the title the user sees during checkout.', 'wc_securesubmit'),
        'default'     => __('Credit Card', 'wc_securesubmit'),
    ),
    'description' => array(
        'title'       => __('Description', 'wc_securesubmit'),
        'type'        => 'textarea',
        'description' => __('This controls the description the user sees during checkout.', 'wc_securesubmit'),
        'default'     => 'Pay with your credit card via SecureSubmit.',
    ),
    'public_key' => array(
        'title'       => __('Public Key', 'wc_securesubmit'),
        'type'        => 'text',
        'description' => __('Get your API keys from your SecureSubmit account.', 'wc_securesubmit'),
        'default'     => '',
    ),
    'secret_key' => array(
        'title'       => __('Secret Key', 'wc_securesubmit'),
        'type'        => 'text',
        'description' => __('Get your API keys from your SecureSubmit account.', 'wc_securesubmit'),
        'default'     => '',
    ),
    'custom_error' => array(
        'title'       => __('Custom Error', 'wc_securesubmit'),
        'type'        => 'textarea',
        'description' => __('To use the default Secure Submit error message use %s in the custom message text, ex. My message. %s -> will be displayed as: My message. Original Secure Submit message.', 'wc_securesubmit'),
        'default'     => '%s',
    ),
    'allow_card_saving' => array(
        'title'       => __('Allow Card Saving', 'wc_securesubmit'),
        'label'       => __('Allow Card Saving', 'wc_securesubmit'),
        'type'        => 'checkbox',
        'description' => 'Note: to use the card saving feature, you must have multi-use tokenization enabled on your Heartland account.',
        'default'     => 'no',
    ),
    'allow_fraud' => array(
        'title'       => __('Enable Advanced Fraud', 'wc_securesubmit'),
        'label'       => __('Do not fail suspicious orders', 'wc_securesubmit'),
        'type'        => 'checkbox',
        'description' => 'Note: You will have 72 hours from the original authorization date to manually review suspicious orders in the virtual terminal and make a final decision (either to accept the gateway fraud decision or to manually override).',
        'default'     => 'no',
    ),
    'email_fraud' => array(
        'title'       => __('Email Suspicious', 'wc_securesubmit'),
        'label'       => __('Email store owner on suspicious orders', 'wc_securesubmit'),
        'type'        => 'checkbox',
        'description' => '',
        'default'     => 'no',
    ),
    'fraud_address' => array(
        'title'       => __('Notification Email Address', 'wc_securesubmit'),
        'type'        => 'text',
        'description' => __('This email address will be notified of suspicious orders.', 'wc_securesubmit'),
        'default'     => __('', 'wc_securesubmit'),
    ),
    'velocity_attempts' => array(
        'title'       => __('Maximum Velocity of Failures', 'wc_securesubmit'),
        'type'        => 'text',
        'description' => __('This is the maximum amount of attempts for a single IP address to try and submit credit cards. 0 for unlimited.', 'wc_securesubmit'),
        'default'     => __('0', 'wc_securesubmit'),
    ),
    'velocity_duration' => array(
        'title'       => __('Velocity Check Duration', 'wc_securesubmit'),
        'type'        => 'text',
        'description' => __('This is the amount of time, in minutes, between failed attempts that will be considered before resetting the count back to 0.', 'wc_securesubmit'),
        'default'     => __('10', 'wc_securesubmit'),
    ),
    'velocity_text' => array(
        'title'       => __('Maximum Velocity Error Text', 'wc_securesubmit'),
        'type'        => 'textarea',
        'description' => __('This is the text that will display to the customer when the maximum amount of failed attempts is met.', 'wc_securesubmit'),
        'default'     => __('Please call customer service.', 'wc_securesubmit'),
    ),
    'fraud_text' => array(
        'title'       => __('Fraud Text', 'wc_securesubmit'),
        'type'        => 'text',
        'description' => __('This is the text that will display to the customer when fraud is detected and the transaction fails.', 'wc_securesubmit'),
        'default'     => __('Please call customer service.', 'wc_securesubmit'),
    ),
    'paymentaction' => array(
        'title'       => __('Payment Action', 'wc_securesubmit'),
        'type'        => 'select',
        'description' => __('Choose whether you wish to capture funds immediately or authorize payment only.', 'wc_securesubmit'),
        'default'     => 'sale',
        'desc_tip'    => true,
        'options'     => array(
            'sale'          => __('Capture', 'wc_securesubmit'),
            'authorization' => __('Authorize', 'wc_securesubmit'),
        ),
    ),
    'use_iframes' => array(
        'title'       => __('Use iFrames', 'wc_securesubmit'),
        'label'       => __('Host the payment fields on Heartland\'s servers', 'wc_securesubmit'),
        'type'        => 'checkbox',
        'description' => 'Note: The customer will remain on your site throughout the checkout process, and there will be no redirect. This option only helps reduce your PCI scope.',
        'default'     => 'yes',
    ),
		'gift_cards' => array(
			'title'       => __( 'Enable Gift Cards', 'wc_securesubmit' ),
			'label'       => __( 'Allow customers to use gift cards to pay for purchases in full or in part.', 'wc_securesubmit' ),
			'type'        => 'checkbox',
			'description' => 'This will display a gift card entry field in the checkout above the credit card entry area.',
			'default'     => 'no',
		),
		'gift_cards_gateway_title' => array(
			'title'       => __( 'Gift Card Title', 'wc_securesubmit' ),
			'label'       => __( 'This controls the payment method name users see when gift cards are enabled.', 'wc_securesubmit' ),
			'type'        => 'text',
			'description' => 'This updates the payment method title on checkout if you have enabled gift card usage.',
			'default'     => 'Credit and/or Gift Cards',
		),
		'gift_cards_gateway_description' => array(
			'title'       => __( 'Gift Card Description', 'wc_securesubmit' ),
			'label'       => __( 'This controls the payment method description users see when gift cards are enabled.', 'wc_securesubmit' ),
			'type'        => 'textarea',
			'description' => 'This is the description that will display in the payment area of checkout if gift cards are enabled.',
			'default'     => 'Pay with your credit or gift card via SecureSubmit.',
		),
);