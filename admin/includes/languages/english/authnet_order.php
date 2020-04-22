<?php
/*  portions copyright by... zen-cart.com

    developed and brought to you by proseLA
    https://rossroberts.com

    released under GPU
    https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0

   04/2020  project: authorizenet_cim; file: authnet_order.php; version 2.0
*/

    define('TEXT_CIM_DATA', 'Authorizenet CIM Payments');
    define('CIM_NUMBER', 'Transaction ID');
    define('CIM_NAME', 'Payment Name');
    define('CIM_AMOUNT', 'Amount');
    define('CIM_TYPE', 'Payment Type');
    define('CIM_POSTED', 'Date Posted');
    define('CIM_MODIFIED', 'Last Modified');
    define('CIM_ACTION', 'Action');
    define('CIM_APPROVAL', 'Code');

    define('HEADER_DELETE_PAYMENT', 'Refund Payment');
    define('DELETE_PAYMENT_NOTE',
      'Leave blank for Total Refund.<br><span class="alert alert-dark">Payments not settled will void.</span><br>Irrespective of amount entered.');
    define('HEADER_DELETE_PO', 'Delete Purchase Order');
    define('HEADER_DELETE_REFUND', 'Delete Refund');
    
    define('HEADER_ORDER_ID', 'Order #');
    define('HEADER_PAYMENT_UID', 'Payment UID #');
    define('HEADER_REFUND_UID', 'Refund UID #');

    define('TEXT_REFUND_AMOUNT', 'Amount:');
    define('TEXT_NO_MINUS', ' * No minus sign');
    
    define('BUTTON_SUBMIT', 'Submit');
    define('BUTTON_CANCEL', 'Cancel');
    define('BUTTON_SAVE_CLOSE', 'Close & Return');
    define('BUTTON_MODIFY', 'Modify');
    define('BUTTON_ADD_NEW', 'Add Another');
    define('BUTTON_ADD_PAYMENT', 'Add Payment');
    
    define('WARN_DELETE_PAYMENT', 'Are you sure you want to refund this payment?<p>This action cannot be undone!');

    define('HEADER_REFUND_DONE', 'Refund/Void Successful');
    define('HEADER_REFUND_FAIL', 'Refund/Void Failed!');
    define('TEXT_DELETE_CONFIRM', 'The operation is complete.<p><strong>%s</strong> line(s) affected in the process.');
    define('BUTTON_DELETE_CONFIRM', 'Return');
    
    define('EMAIL_SEPARATOR', '------------------------------------------------------');
    define('EMAIL_TEXT_SUBJECT', 'Order Update');
    define('EMAIL_TEXT_ORDER_NUMBER', 'Order Number:');
    define('EMAIL_TEXT_INVOICE_URL', 'Detailed Invoice:');
    define('EMAIL_TEXT_DATE_ORDERED', 'Date Ordered:');
    define('EMAIL_TEXT_COMMENTS_UPDATE', "\n" . '<br><strong><em>Comments:</em></strong><br>' . "\n");
    define('EMAIL_TEXT_STATUS_UPDATED', "\n" . '<br>Your current order status is:  ');
    define('EMAIL_TEXT_STATUS_LABEL', '<em>%s</em><br><br>' . "\n\n");
    define('EMAIL_TEXT_STATUS_PLEASE_REPLY',
      "\n" . '<br>Please reply to this email if you have any questions.<br><br>' . "\n\n");