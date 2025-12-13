<?php
// Lightweight statecheck-specific stubs to augment global dev stubs for static analysis
require_once __DIR__ . '/../dev_global_stubs.php';

if (!class_exists('PluginStatecheckRule')) {
    class PluginStatecheckRule extends \CommonDBTM {
        public $fields = [];
        public static $itemtype = '';
        public static $rightname = 'plugin_statecheck';

        public static function getType() { return static::class; }
        public static function canUpdate() { return true; }
        public static function canEdit() { return true; }
        public static function getTypeName($n = 0) { return ''; }
        public static function getSearchURL() { return ''; }
        public static function getFormURLWithID($id = 0) { return ''; }
        public static function getRuleObjectByID($id) { return null; }
        public static function getSpecificMassiveActions() { return []; }
        public static function isNewID($id = null) { return false; }
        public static function check($input = []) { return true; }
        public static function checkGlobal($input = []) { return true; }
        public static function showFormHeader(...$a) { return ''; }
        public static function showFormButtons(...$a) { return ''; }
        public function getFromDB($id = 0) { return new self(); }
        public static function getNextRanking() { return 0; }
        public static function getLink($id = 0) { return ''; }
        public static function createTabEntry(...$a) { return $a[0] ?? ''; }
        public static function getSpecificValueToDisplay($field, $values, array $options = []) { return ''; }
        public static function getSpecificValueToSelect($field, $name = '', $values = '', array $options = []) { return ''; }
        public function add(array $input, $history = null): bool { return true; }
        public function getEmpty() { return new self(); }
        public static function getRuleObjectByIDStatic($id) { return null; }

        public static function __callStatic($name, $args) { return null; }
        public function __call($name, $args) { return null; }
    }
}

if (!class_exists('PluginStatecheckRuleAction')) {
    class PluginStatecheckRuleAction extends \CommonDBTM {
        public static $itemtype = '';
        public $fields = [];
        public function getTabNameForItem($item, $with = null): array|string { return ''; }
        public static function getSpecificValueToDisplay($field, $values, array $options = []) { return ''; }
        public static function getSpecificValueToSelect($field, $name = '', $values = '', array $options = []) { return ''; }
        public static function __callStatic($name, $args) { return null; }
        public function __call($name, $args) { return null; }
    }
}

if (!class_exists('PluginStatecheckRuleCriteria')) {
    class PluginStatecheckRuleCriteria extends \CommonDBTM { public static $itemtype = ''; public $fields = []; public static function __callStatic($n,$a){return null;} public function __call($n,$a){return null;} }
}

if (!class_exists('PluginStatecheckNotificationTargetRule')) {
    class PluginStatecheckNotificationTargetRule {
        public static $raiseevent;
        public static $data;
        public static $obj;
        public static $tag_descriptions;
        public static function addTarget(...$a) { }
        public static function getDistinctUserSql() { return ''; }
        public static function getJoinProfileSql() { return ''; }
        public static function addToAddressesList() { return []; }
        public static function getAllEvents() { return []; }
        public static function addTagToList(...$a) { return []; }
        public static function __callStatic($n,$a){return null;}
    }
}

// Provide ProfileRight shim if missing in this context
if (!class_exists('ProfileRight')) {
    class ProfileRight { public static function addProfileRights($a){} public static function getProfileRights($id,$arr=[]){return [];} public function deleteByCriteria($a){} public function add($a){} }
}
