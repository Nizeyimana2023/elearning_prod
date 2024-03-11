<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();
$CFG->dbsessions='0';
//$CFG->theme = 'boost';
//$CFG->disablelogintoken = true;
$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodledb';
$CFG->dbuser    = 'root';
$CFG->dbpass    = '';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);
//$CFG->wwwroot   = 'http://elearning.ulk.ac.rw';
$CFG->wwwroot   = 'https://elearning.ulk.ac.rw';
//$CFG->wwwroot   = 'http://localhost:82/ulk_elearning';
$CFG->dataroot  = 'C:\\xampp\\moodledata';
$CFG->dataroot  = 'C:\\xampp\\moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;
@error_reporting(E_ALL | E_STRICT);
@ini_set('display_errors', '1');
//$CFG->debug = (E_ALL | E_STRICT);
$CFG->debugdisplay = 0;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
