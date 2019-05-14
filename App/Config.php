<?php
namespace App;

/* 
 * Application configuration
 */
class Config{
    /**
     * Database host
     * @var string
     */
    const DB_HOST = '********';
    
    /**
     * Database name
     * @var string
     */
    const DB_NAME = '********';
    
    /**
     * Database user
     * @var string
     */
    const DB_USER = '********';
    
    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = '********';
    
    /**
     * Show or hide error messages on screen
     */
    const SHOW_ERRORS = true;

    /**
     * Secret key for hashing
     * @var string
     */
    const SECRET_KEY = '********';

    /**
     * PHPMailer domain
     * @var string
     */
    const MAIL_HOST = '********';
    
    /**
     * PHPMailer user
     * @var string
     */
    const MAIL_USER = '********';
    
    /**
     * PHPMailer password
     * @var string
     */
    const MAIL_PASSWORD = '********';
    
    /**
     * PHPMailer port
     * @var string
     */
    const MAIL_PORT = '********';

    /**
     * Name of the Site/System
     * @var string
     */
    const SITE_NAME = '********';
}

