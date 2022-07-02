<?php

/*
Plugin Name: Feedback 
Description: This is a simple plugin to add a feedback form to your website.
Version: 1.0
Author: nadia ELHADRI
*/

if( !defined('ABSPATH'))
{
    die;
}
class contact{
    public function __construct()
    {
        //Create custom post type
        add_action('init', array($this, 'create_custom_post_type'));   
        add_shortcode('feedback-form', array($this, 'load_shortcode'));
        
    }
// add_shortcode('feedback-form', 'feedback_form');
// add_action('init','create_custom_post_type');
public function create_custom_post_type()
{
    $args= array(
        'public' => true,
        'has_archive' => true,
        'supports' => array('title'),
        'exlude_from_search' => true,
        'publicly_queryable' => false,
        'capability' => 'manage_options',
        'labels' => array(
            'name' => 'nadia',
            'singular_name' => 'Feedback Form Entry'
        ),
        'menu_icon' => 'dashicons-media-text'
    );

    register_post_type('simple_feedback_form', $args);
}


function load_shortcode()
{
    ?>
        <script src="https://cdn.tailwindcss.com"></script>
        <div>
        <h1 class=" font-gris text-lg text-4xl text-black text-center m-4">Envoyez-nous un commentaire</h1>
        <div class="">
            <form method="post" class="feedback_form">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-white-700 text-xs font-bold mb-2" for="name">
                            Name
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-white-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="name" type="text" placeholder="Name">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-white-700 text-xs font-bold mb-2" for="email">
                            Email
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-white-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="email" type="email" placeholder="......@gmail.com" >
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-white-700 text-xs font-bold mb-2" for="message">
                            Message
                        </label>
                        <textarea class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="message" placeholder="Entrer votre message" ></textarea>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-white-700 text-xs font-bold mb-2" for="rating">
                            Rating
                        </label>
                        <input type="radio" name="rating" value="1"> 1
                        <input type="radio" name="rating" value="2"> 2
                        <input type="radio" name="rating" value="3"> 3
                        <input type="radio" name="rating" value="4"> 4
                        <input type="radio" name="rating" value="5"> 5
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit">
                            Submit
                        </button>
                        <div><input type="hidden" name="id" value="<?php echo get_the_ID() ?> "></div>
                    </div>
                </div>
            </form>
        </div>
    <?php 
}
}
if (class_exists('contact')) {
    $feedBackPlugin = new contact();
 }


if (isset($_POST['submit'])) {
    
    global $wpdb;

   $wpdb->insert('wp_contact', [
       'name' => $_POST['name'], 
       'email' =>  $_POST['email'], 
       'content'=>  $_POST['message'], 
       'rating' =>  $_POST['rating'],
       'id_post'=>  $_POST['id'], 


    ]);

   header('refresh:0', 'Location: ' . $_SERVER['HTTP_REFERER']);
   exit();
}







