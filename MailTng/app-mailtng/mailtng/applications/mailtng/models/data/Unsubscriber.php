<?php namespace ma\applications\mailtng\models\data
{
    if (!defined('MAILTNG_FMW')) die('<pre>It\'s forbidden to access these files directly , access should be only via index.php </pre>');
    /**
     * @framework       MailTng Framework
     * @version         1.1
     * @author          MailTng Team
     * @copyright       Copyright (c) 100015 - 100016.	
     * @license		
     * @link	
     */
    use ma\mailtng\application\Model as Model;
    /**
     * @name            Unsubscriber.model 
     * @description     The Unsubscriber model
     * @package		ma\applications\mailtng\models\data
     * @category        Model
     * @author		MailTng Team			
     */
    class Unsubscriber extends Model
    {
        #table 
        
        /**
         * @schema
         * @readwrite
         */
        protected $_schema = '';
        
        /**
         * @table
         * @readwrite
         */
        protected $_table = 'unsubscribers';

        # Columns 

        /**
	 * @column
	 * @readwrite
         * @autoincrement
         * @primary
	 * @type integer
         * @nullable false
	 * @length 
	 */
        protected $_id;
        
        /**
	 * @column
	 * @readwrite
	 * @type text
         * @nullable false
	 * @length 100
	 */
        protected $_email;
        
        /**
	 * @column
	 * @readwrite
	 * @type integer
         * @nullable true
	 * @length
	 */
        protected $_drop_id;
        
        /**
	 * @column
	 * @readwrite
	 * @type timestamp
         * @nullable true
	 * @length
	 */
        protected $_action_date;
        
        /**
	 * @column
	 * @readwrite
	 * @type text
         * @nullable true
	 * @length
	 */
        protected $_message;

        /**
	 * @column
	 * @readwrite
	 * @type text
         * @nullable true
	 * @length
	 */
        protected $_offers_excluded;
        
        /**
	 * @column
	 * @readwrite
	 * @type text
         * @nullable true
	 * @length
	 */
        protected $_verticals;
        
        /**
	 * @column
	 * @readwrite
	 * @type text
         * @nullable true
	 * @length 
	 */
        protected $_agent;
        
        /**
	 * @column
	 * @readwrite
	 * @type text
         * @nullable true
	 * @length 1000
	 */
        protected $_ip;

        /**
	 * @column
	 * @readwrite
	 * @type text
         * @nullable true
	 * @length
	 */
        protected $_country;
        
        /**
	 * @column
	 * @readwrite
	 * @type text
         * @nullable true
	 * @length
	 */
        protected $_region;
        
        /**
	 * @column
	 * @readwrite
	 * @type text
         * @nullable true
	 * @length
	 */
        protected $_city;
        
        /**
	 * @column
	 * @readwrite
	 * @type text
         * @nullable true
	 * @length 100
	 */
        protected $_language;
        
        /**
	 * @column
	 * @readwrite
	 * @type text
         * @nullable true
	 * @length 
	 */
        protected $_device_type;
        
        /**
	 * @column
	 * @readwrite
	 * @type text
         * @nullable true
	 * @length 100
	 */
        protected $_device_name;
        
        /**
	 * @column
	 * @readwrite
	 * @type text
         * @nullable true
	 * @length 
	 */
        protected $_os;
        
        /**
	 * @column
	 * @readwrite
	 * @type text
         * @nullable true
	 * @length 
	 */
        protected $_browser_name;
        
        /**
	 * @column
	 * @readwrite
	 * @type text
         * @nullable true
	 * @length 100
	 */
        protected $_browser_version;
    }
}