
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


// Form-group component
Vue.component('form-group', {
    props: {
      field: String,
      fieldLabel: String,
      isRequired: Boolean,
    },
    template: `
        <div class="form-group">
            <label>{{ fieldLabel }} <em class="required" v-if="isRequired">*</em>
            <slot></slot>
            </label>
            <div class="flag"></div>
        </div>
    `
});


// Instantiate vue
new Vue({
  el: '#app'
}) 



// jQuery form functionality
jQuery(document).ready(function(){
    jQuery('#submit').click(function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "",
            method: 'post',
            data: {
                name: jQuery('#name').val(),
                email: jQuery('#email').val(),
                phone: jQuery('#phone').val(),
                subject: jQuery('#subject').val(),
                message: jQuery('#message').val()
            },
            success: function(result){
                $("main").html('<header><h1>Contact Form Demo Project</h1></header><div class="success">Thanks for sending us a message! We\'ll get back with you soon.</div>');
            },
            error: function (result) {
                var errors = $.parseJSON(result.responseText).errors;
                $('.flag').removeClass('visible');
                $('input').removeClass('error');
                $.each(errors, function (key, value) {
                    $('#' + key).addClass('error');
                    $('#' + key).parent().siblings('.flag').first().text(value);
                    $('#' + key).parent().siblings('.flag').first().addClass('visible');
                });
            }
        });
    });
});