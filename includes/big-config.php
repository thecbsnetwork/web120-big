<?php
/* BIG-CONFIG */
/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//reference other includes files here
include 'big-credentials.php';

//this helps eliminate PHP date errors
    date_default_timezone_set('America/Los Angeles');

//this constant allows a page to know its own url/name
    define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//switch info between pages that are in this site
switch(THIS_PAGE)
{
    case "index.php":
        $title = "Catherine Blake Smith: Web Dev Examples";
        $logo = "fa-home";
        $PageID = " Welcome";
    break;
        
    case "flexbox.php":
        $title = "Research: Flexbox";
        $logo = "fa-cubes";
        $PageID = " Flexbox";
    break;
        
    case "galleries.php":
        $title = "Research: Galleries";
        $logo = "fa-file-picture-o";
        $PageID = " Galleries";
    break;
    
    case "map.php":
        $title = "Responsive Google Map";
        $logo = "fa-map-marker";
        $PageID = " Find Annex Theatre";
    break;
    
    case "calendar.php":
        $title = "Responsive Google Calendar";
        $logo = "fa-calendar";
        $PageID = " Google Calendar";
    break;
        
    case "youtube.php":
        $title = "CMS Video";
        $logo = "fa-youtube-play";
        $PageID = " Content Management System Video";
    break;
        
    case "parallax.php":
        $title = "Research: Parallax";
        $logo = "fa-th-large";
        $PageID = " Parallax";
    break;
        
    case "shopping.php":
        $title = "Research: Shopping Carts";
        $logo = "fa-shopping-cart";
        $PageID = " Shopping Carts";
    break;
        
    case "siteapp.php":
        $title = "Research: Responsive v. Native";
        $logo = "fa-mobile";
        $PageID = " Responsive Sites v. Mobile Apps";
    break;  
        
    case "webcam.php":
        $title = "Two Live Web Cams";
        $logo = "fa-video-camera";
        $PageID = " Goats and Traffic Livestreams";
    break;  
//this is a default in case something breaks
    default:
        $title = THIS_PAGE;
        $logo = "";
        $PageID = "";
    break;   
}