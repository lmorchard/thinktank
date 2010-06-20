<?php
/**
 * Profiler
 * @author Gina Trapani <ginatrapani[at]gmail[dot]com>
 *
 */
class Profiler {
    /**
     *
     * @var Profiler
     */
    private static $instance;
    /**
     *
     * @var array
     */
    private static $logged_actions = array();
    /**
     * @var int
     */
    public $total_queries = 0;
    /**
     * Get singleton instance
     * @return Profiler
     */
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new Profiler();
        }
        return self::$instance;
    }
    /**
     * Add action
     * @param float $time
     * @param str $action
     */
    public function add($time, $action, $is_query=false) {
        if ($is_query) {
            $this->total_queries = $this->total_queries + 1;
        }
        $rounded_time = round($time, 3);
        $this->logged_actions[] =  number_format($rounded_time,3) . " | " . trim($action);
    }

    /**
     * Get sorted profiled actions
     * @return array
     */
    public function getProfile() {
        sort($this->logged_actions);
        return array_reverse($this->logged_actions);
    }
}