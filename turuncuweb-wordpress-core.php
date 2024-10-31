<?php
/**
 * TuruncuWeb Wordpress Core
 *
 * @package       TURUNCUWEB
 * @author        Erhan KARACA
 * @license       gplv2
 * @version       1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:   TuruncuWeb Wordpress Core
 * Plugin URI:    https://turuncuweb.net
 * Description:   Wordpress core plugin for Turuncu Internet Solutions projects
 * Version:       1.0.0
 * Author:        Erhan KARACA
 * Author URI:    https://turuncuweb.net
 * Text Domain:   turuncuweb-wordpress-core
 * Domain Path:   /languages
 * License:       GPLv2
 * License URI:   https://www.gnu.org/licenses/gpl-2.0.html
 *
 * You should have received a copy of the GNU General Public License
 * along with TuruncuWeb Wordpress Core. If not, see <https://www.gnu.org/licenses/gpl-2.0.html/>.
 */

namespace TuruncuWeb;


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

define('TURUNCUWEB_VERSION', '1.0.0');
define('TURUNCUWEB__FILE__', __FILE__);
define('TURUNCUWEB_PLUGIN_BASE', plugin_basename(TURUNCUWEB__FILE__));
define('TURUNCUWEB_PATH', plugin_dir_path(TURUNCUWEB__FILE__));
define('TURUNCUWEB_URL', plugin_dir_url(TURUNCUWEB__FILE__));

// Load Configs
require TURUNCUWEB_PATH . 'core/config/svg-supports.php';
require TURUNCUWEB_PATH . 'core/config/page-post-type.php';

// Elementor Widgets
require TURUNCUWEB_PATH . 'core/elementor/widgets/init.php';

add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('turuncuweb', TURUNCUWEB_URL . 'assets/css/turuncuweb.css', array(), '1.0.7');
    wp_enqueue_script('turuncuweb', TURUNCUWEB_URL . 'assets/js/turuncuweb.js', ['jquery'], '1.0.3', true);
});