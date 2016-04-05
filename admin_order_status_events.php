<?php
/**
 * Plugin Name:Admin Order Status Events
 * Plugin URI:http://facebook.com/Alamdeveloper
 * Description:Admin Order Status Events
 * Version:1.0.0
 * Author:Mohd Alam
 * Author URI:http://facebook.com/Alamdeveloper
 * Email:mohdalam392@gmail.com
 * License:IPL
 */
?>


<?php 
    /** Order Pending **/
    function orderPending($order_id) {
        // do your work here 
    }

    /** Order Failed **/
    function orderFailed($order_id) {
      // do your work here 
    }

    /** Order On Hold **/
    function orderHold($order_id) {
        // do your work here 
    }

    /** Order Processing **/
    function orderProcessing($order_id) {
        // do your work here 
    }

    /** Order Completed **/
    function orderCompleted($order_id) {
        // do your work here 
    }

    /** Order Refunded **/
    function orderRefunded($order_id) {
        // do your work here 
    }

    /** Order Cancelled **/
    function orderCancelled($order_id) {
        // do your work here 
    }

?>
<?php

    /** Order Pending **/
    add_action("woocommerce_order_status_pending", "orderPending");

    /** Order Failed **/
    add_action( "woocommerce_order_status_failed", "orderFailed");

    /** Order On Hold **/
    add_action( "woocommerce_order_status_on-hold", "orderHold");

   
    // Note that it’s woocommerce_order_status_on-hold, not on_hold.

    /** Order Processing **/
    add_action( "woocommerce_order_status_processing", "orderProcessing");

    /** Order Completed **/
    add_action( "woocommerce_order_status_completed", "orderCompleted");

    /** Order Refunded **/
    add_action( "woocommerce_order_status_refunded", "orderRefunded");

    /** Order Cancelled **/
    add_action( "woocommerce_order_status_cancelled", "orderCancelled");
?>
