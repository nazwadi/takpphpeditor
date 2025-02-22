<?php

$traptype = array(
    0 => "Casting",
    1 => "Alarm",
    2 => "NPC S. Area (Mystics)",
    3 => "NPC L. Area (Bandits)",
    4 => "Damage"
);

$alarmtype = array(
    0 => "All aggro",
    1 => "KOS aggro"
);

switch ($action) {
    case 0:
        if ($z) {
            $body = new Template("templates/misc/misc.default.tmpl.php");
            $body->set('currzone', $z);
            $body->set('currzoneid', $zoneid);
        }
        break;
    case 1: // View fishing
        $body = new Template("templates/misc/fishing.tmpl.php");
        $body->set('currzone', $z);
        $body->set('currzoneid', $zoneid);
        $fishing = get_fishing();
        if ($fishing) {
            foreach ($fishing as $key => $value) {
                $body->set($key, $value);
            }
        }
        break;
    case 2: // Edit fishing
        check_authorization();
        $javascript = new Template("templates/iframes/js.tmpl.php");
        $body = new Template("templates/misc/fishing.edit.tmpl.php");
        $body->set('currzone', $z);
        $body->set('currzoneid', $zoneid);
        $fishing = fishing_info();
        if ($fishing) {
            foreach ($fishing as $key => $value) {
                $body->set($key, $value);
            }
        }
        break;
    case 3: // Update fishing
        check_authorization();
        update_fishing();
        header("Location: index.php?editor=misc&z=$z&zoneid=$zoneid&action=1");
        exit;
    case 4: // Delete fishing
        check_authorization();
        delete_fishing();
        header("Location: index.php?editor=misc&z=$z&zoneid=$zoneid&action=1");
        exit;
    case 5: // Get fishing ID
        check_authorization();
        $javascript = new Template("templates/iframes/js.tmpl.php");
        $body = new Template("templates/misc/fishing.add.tmpl.php");
        $body->set('currzone', $z);
        $body->set('currzoneid', $zoneid);
        $body->set('zid', getZoneID($z));
        $body->set('suggestfsid', suggest_fishing_id());
        break;
    case 6: // Add fishing
        check_authorization();
        add_fishing();
        header("Location: index.php?editor=misc&z=$z&zoneid=$zoneid&action=1");
        exit;
    case 7: // View forage
        $body = new Template("templates/misc/forage.tmpl.php");
        $body->set('currzone', $z);
        $body->set('currzoneid', $zoneid);
        $forage = get_forage();
        if ($forage) {
            foreach ($forage as $key => $value) {
                $body->set($key, $value);
            }
        }
        break;
    case 8: // Edit forage
        check_authorization();
        $javascript = new Template("templates/iframes/js.tmpl.php");
        $body = new Template("templates/misc/forage.edit.tmpl.php");
        $body->set('currzone', $z);
        $body->set('currzoneid', $zoneid);
        $forage = forage_info();
        if ($forage) {
            foreach ($forage as $key => $value) {
                $body->set($key, $value);
            }
        }
        break;
    case 9: // Update forage
        check_authorization();
        update_forage();
        header("Location: index.php?editor=misc&z=$z&zoneid=$zoneid&action=7");
        exit;
    case 10: // Delete forage
        check_authorization();
        delete_forage();
        header("Location: index.php?editor=misc&z=$z&zoneid=$zoneid&action=7");
        exit;
    case 11: // Get forage ID
        check_authorization();
        $javascript = new Template("templates/iframes/js.tmpl.php");
        $body = new Template("templates/misc/forage.add.tmpl.php");
        $body->set('currzone', $z);
        $body->set('currzoneid', $zoneid);
        $body->set('zid', getZoneID($z));
        $body->set('suggestfgid', suggest_forage_id());
        break;
    case 12: // Add forage
        check_authorization();
        add_forage();
        header("Location: index.php?editor=misc&z=$z&zoneid=$zoneid&action=7");
        exit;
    case 13: // View ground spawns
        check_authorization();
        $body = new Template("templates/misc/groundspawn.tmpl.php");
        $body->set('currzone', $z);
        $body->set('currzoneid', $zoneid);
        $gspawn = get_gspawn();
        if ($gspawn) {
            foreach ($gspawn as $key => $value) {
                $body->set($key, $value);
            }
        }
        break;
    case 14: // Edit ground spawns
        check_authorization();
        $javascript = new Template("templates/iframes/js.tmpl.php");
        $body = new Template("templates/misc/groundspawn.edit.tmpl.php");
        $body->set('currzone', $z);
        $body->set('currzoneid', $zoneid);
        $gspawn = gspawn_info();
        if ($gspawn) {
            foreach ($gspawn as $key => $value) {
                $body->set($key, $value);
            }
        }
        break;
    case 15: // Update ground spawns
        check_authorization();
        update_gspawn();
        header("Location: index.php?editor=misc&z=$z&zoneid=$zoneid&action=13");
        exit;
    case 16: // Delete ground spawns
        check_authorization();
        delete_gspawn();
        header("Location: index.php?editor=misc&z=$z&zoneid=$zoneid&action=13");
        exit;
    case 17: // Get ground spawn ID
        check_authorization();
        $javascript = new Template("templates/iframes/js.tmpl.php");
        $body = new Template("templates/misc/groundspawn.add.tmpl.php");
        $body->set('currzone', $z);
        $body->set('currzoneid', $zoneid);
        $body->set('zid', getZoneID($z));
        $body->set('suggestgsid', suggest_gspawn_id());
        break;
    case 18: // Add ground spawn
        check_authorization();
        add_gspawn();
        header("Location: index.php?editor=misc&z=$z&zoneid=$zoneid&action=13");
        exit;
    case 19: // View traps
        check_authorization();
        $body = new Template("templates/misc/traps.tmpl.php");
        $body->set('currzone', $z);
        $body->set('currzoneid', $zoneid);
        $body->set("traptype", $traptype);
        $body->set("alarmtype", $alarmtype);
        $traps = get_traps();
        if ($traps) {
            foreach ($traps as $key => $value) {
                $body->set($key, $value);
            }
        }
        break;
    case 20: // Edit traps
        check_authorization();
        $body = new Template("templates/misc/traps.edit.tmpl.php");
        $body->set('currzone', $z);
        $body->set('currzoneid', $zoneid);
        $body->set("traptype", $traptype);
        $body->set('yesno', $yesno);
        $traps = traps_info();
        if ($traps) {
            foreach ($traps as $key => $value) {
                $body->set($key, $value);
            }
        }
        break;
    case 21: // Update traps
        check_authorization();
        update_traps();
        header("Location: index.php?editor=misc&z=$z&zoneid=$zoneid&action=19");
        exit;
    case 22: // Delete traps
        check_authorization();
        delete_traps();
        header("Location: index.php?editor=misc&z=$z&zoneid=$zoneid&action=19");
        exit;
    case 23: // Get traps ID
        check_authorization();
        $body = new Template("templates/misc/traps.add.tmpl.php");
        $body->set('currzone', $z);
        $body->set('currzoneid', $zoneid);
        $body->set("traptype", $traptype);
        $body->set("alarmtype", $alarmtype);
        $body->set('yesno', $yesno);
        $body->set('suggesttid', suggest_traps_id());
        break;
    case 24: // Add traps
        check_authorization();
        add_traps();
        header("Location: index.php?editor=misc&z=$z&zoneid=$zoneid&action=19");
        exit;
    case 25:  // Search functions
        $body = new Template("templates/misc/misc.searchresults.tmpl.php");
        if (isset($_GET['gspawnid']) && $_GET['gspawnid'] != "GroundSpawn") {
            $gspawn = search_gspawn_by_id();
        }
        if (isset($_GET['forageid']) && $_GET['forageid'] != "Forage") {
            $forage = search_forage_by_id();
        }
        if (isset($_GET['fishid']) && $_GET['fishid'] != "Fishing") {
            $fishing = search_fishing_by_id();
        }
        $body->set("fishing", $fishing);
        $body->set("forage", $forage);
        $body->set("gspawn", $gspawn);
        break;
    case 26: // View fishing
        $body = new Template("templates/misc/fishing.view.tmpl.php");
        $fishing = fishing_info();
        if ($fishing) {
            foreach ($fishing as $key => $value) {
                $body->set($key, $value);
            }
        }
        break;
    case 27: // View forage
        $body = new Template("templates/misc/forage.view.tmpl.php");
        $forage = forage_info();
        if ($forage) {
            foreach ($forage as $key => $value) {
                $body->set($key, $value);
            }
        }
        break;
    case 28: // View ground spawns
        check_authorization();
        $body = new Template("templates/misc/groundspawn.view.tmpl.php");
        $gspawn = gspawn_info();
        if ($gspawn) {
            foreach ($gspawn as $key => $value) {
                $body->set($key, $value);
            }
        }
        break;
    case 29: // View horses
        $body = new Template("templates/misc/horses.tmpl.php");
        $horses = get_horses();
        $body->set("races", $races);
        $body->set("genders", $genders);
        if ($horses) {
            foreach ($horses as $key => $value) {
                $body->set($key, $value);
            }
        }
        break;
    case 30: // Edit horses
        check_authorization();
        $body = new Template("templates/misc/horses.edit.tmpl.php");
        $body->set("races", $races);
        $body->set("genders", $genders);
        $horses = horses_info();
        if ($horses) {
            foreach ($horses as $key => $value) {
                $body->set($key, $value);
            }
        }
        break;
    case 31: // Update horses
        check_authorization();
        update_horses();
        header("Location: index.php?editor=misc&z=$z&zoneid=$zoneid&action=29");
        exit;
    case 32: // Delete horses
        check_authorization();
        delete_horses();
        header("Location: index.php?editor=misc&z=$z&zoneid=$zoneid&action=29");
        exit;
    case 33: // Add horses
        check_authorization();
        $body = new Template("templates/misc/horses.add.tmpl.php");
        $body->set("races", $races);
        $body->set("genders", $genders);
        break;
    case 34: // Add horses
        check_authorization();
        add_horses();
        header("Location: index.php?editor=misc&z=$z&zoneid=$zoneid&action=29");
        exit;
    case 35: // View doors
        $body = new Template("templates/misc/doors.tmpl.php");
        $body->set('currzone', $z);
        $body->set('currzoneid', $zoneid);
        $doors = get_doors(1);
        if ($doors) {
            foreach ($doors as $key => $value) {
                $body->set($key, $value);
            }
        }
        break;
    case 36: // Edit doors
        check_authorization();
        $body = new Template("templates/misc/doors.edit.tmpl.php");
        $body->set('currzone', $z);
        $body->set('currzoneid', $zoneid);
        $body->set('yesno', $yesno);
        $doors = doors_info();
        if ($doors) {
            foreach ($doors as $key => $value) {
                $body->set($key, $value);
            }
        }
        break;
    case 37: // Update doors
        check_authorization();
        update_doors();
        header("Location: index.php?editor=misc&z=$z&zoneid=$zoneid&action=35");
        exit;
    case 38: // Delete doors
        check_authorization();
        delete_doors();
        header("Location: index.php?editor=misc&z=$z&zoneid=$zoneid&action=35");
        exit;
    case 39: // Get doors ID
        check_authorization();
        $body = new Template("templates/misc/doors.add.tmpl.php");
        $body->set('currzone', $z);
        $body->set('currzoneid', $zoneid);
        $body->set('zid', getZoneID($z));
        $body->set('suggestdrid', suggest_door_id());
        $body->set('suggestdoorid', suggest_doorid());
        $body->set('yesno', $yesno);
        break;
    case 40: // Add doors
        check_authorization();
        add_doors();
        header("Location: index.php?editor=misc&z=$z&zoneid=$zoneid&action=35");
        exit;
    case 41: // View objects
        $body = new Template("templates/misc/objects.tmpl.php");
        $body->set('currzone', $z);
        $body->set('currzoneid', $zoneid);
        $body->set("world_containers", $world_containers);
        $objects = get_objects();
        if ($objects) {
            foreach ($objects as $key => $value) {
                $body->set($key, $value);
            }
        }
        break;
    case 42: // Edit objects
        check_authorization();
        $body = new Template("templates/misc/objects.edit.tmpl.php");
        $body->set('currzone', $z);
        $body->set('currzoneid', $zoneid);
        $body->set("world_containers", $world_containers);
        $objects = objects_info();
        if ($objects) {
            foreach ($objects as $key => $value) {
                $body->set($key, $value);
            }
        }
        break;
    case 43: // Update objects
        check_authorization();
        update_objects();
        header("Location: index.php?editor=misc&z=$z&zoneid=$zoneid&action=41");
        exit;
    case 44: // Delete objects
        check_authorization();
        delete_objects();
        header("Location: index.php?editor=misc&z=$z&zoneid=$zoneid&action=41");
        exit;
    case 45: // Get objects ID
        check_authorization();
        $body = new Template("templates/misc/objects.add.tmpl.php");
        $body->set('currzone', $z);
        $body->set('currzoneid', $zoneid);
        $body->set('zid', getZoneID($z));
        $body->set("world_containers", $world_containers);
        $body->set('suggestobjid', suggest_object_id());
        break;
    case 46: // Add objects
        check_authorization();
        add_objects();
        header("Location: index.php?editor=misc&z=$z&zoneid=$zoneid&action=41");
        exit;
    case 47: // View doors
        $body = new Template("templates/misc/doors.objects.tmpl.php");
        $body->set('currzone', $z);
        $body->set('currzoneid', $zoneid);
        $doors = get_doors(0);
        if ($doors) {
            foreach ($doors as $key => $value) {
                $body->set($key, $value);
            }
        }
        break;
}

function get_fishing(): array
{
    global $mysql, $z;
    $zid = getZoneID($z);
    $array = array();

    $query = "SELECT fishing.id,Itemid AS fiid,zoneid,skill_level,chance, items.name AS name
                FROM fishing, items
                WHERE fishing.zoneid=$zid
                AND fishing.Itemid=items.id
                OR fishing.zoneid=0
                AND fishing.Itemid=items.id";
    $results = $mysql->query_mult_assoc($query);
    if ($results) {
        foreach ($results as $result) {
            $array['fishing'][$result['id']] = array("fsid" => $result['id'], "fiid" => $result['fiid'], "zoneid" => $result['zoneid'], "skill_level" => $result['skill_level'], "chance" => $result['chance'], "name" => $result['name']);
        }
    }
    return $array;
}

function get_forage(): array
{
    global $mysql, $z;
    $zid = getZoneID($z);
    $array = array();

    $query = "SELECT forage.id,zoneid,Itemid AS fgiid,level,chance, items.name AS name
                FROM forage, items
                WHERE forage.zoneid=$zid
                AND forage.Itemid=items.id
                OR forage.zoneid=0
                AND forage.Itemid=items.id";
    $results = $mysql->query_mult_assoc($query);
    if ($results) {
        foreach ($results as $result) {
            $array['forage'][$result['id']] = array("fgid" => $result['id'], "fgiid" => $result['fgiid'], "zoneid" => $result['zoneid'], "level" => $result['level'], "chance" => $result['chance'], "name" => $result['name']);
        }
    }
    return $array;
}

function get_gspawn(): array
{
    global $mysql, $z;
    $zid = getZoneID($z);
    $array = array();

    $query = "SELECT ground_spawns.id,zoneid,max_x,max_y,max_z,min_x,min_y,heading,max_allowed, ground_spawns.comment As comment, respawn_timer,item AS giid, items.name AS name
                FROM ground_spawns, items
                WHERE ground_spawns.zoneid=$zid
                AND ground_spawns.item=items.id
                OR ground_spawns.zoneid=0
                AND ground_spawns.item=items.id";
    $results = $mysql->query_mult_assoc($query);
    if ($results) {
        foreach ($results as $result) {
            $array['gspawn'][$result['id']] = array("gsid" => $result['id'], "giid" => $result['giid'], "zoneid" => $result['zoneid'], "max_x" => $result['max_x'], "max_y" => $result['max_y'], "max_z" => $result['max_z'], "min_x" => $result['min_x'], "min_y" => $result['min_y'], "heading" => $result['heading'], "gname" => $result['name'], "max_allowed" => $result['max_allowed'], "comment" => $result['comment'], "respawn_timer" => $result['respawn_timer'], "iname" => $result['name']);
        }
    }

    return $array;
}

function get_traps(): array
{
    global $mysql, $z;
    $array = array();

    $query = "SELECT * FROM traps WHERE zone=\"$z\"";
    $results = $mysql->query_mult_assoc($query);
    if ($results) {
        foreach ($results as $result) {
            $array['traps'][$result['id']] = array("tid" => $result['id'], "x_coord" => $result['x'], "y_coord" => $result['y'], "z_coord" => $result['z'], "chance" => $result['chance'], "maxzdiff" => $result['maxzdiff'], "radius" => $result['radius'], "effect" => $result['effect'], "effectvalue" => $result['effectvalue'], "effectvalue2" => $result['effectvalue2'], "message" => $result['message'], "skill" => $result['skill'], "level" => $result['level'], "respawn_time" => $result['respawn_time'], "respawn_var" => $result['respawn_var'], "group" => $result['group'], "triggered_number" => $result['triggered_number'], "despawn_when_triggered" => $result['despawn_when_triggered'], "undetectable" => $result['undetectable']);
        }
    }

    return $array;
}

function get_horses(): array
{
    global $mysql;
    $array = array();

    $query = "SELECT * FROM horses";
    $results = $mysql->query_mult_assoc($query);
    if ($results) {
        foreach ($results as $result) {
            $array['horses'][$result['filename']] = array("filename" => $result['filename'], "race" => $result['race'], "gender" => $result['gender'], "texture" => $result['texture'], "mountspeed" => $result['mountspeed'], "notes" => $result['notes']);
        }
    }
    return $array;
}

function get_doors($open): array
{
    global $mysql, $z;

    $array = array();

    $query = "SELECT * FROM doors WHERE zone=\"$z\" AND can_open = $open";
    $results = $mysql->query_mult_assoc($query);
    if ($results) {
        foreach ($results as $result) {
            $array['doors'][$result['id']] = array("drid" => $result['id'], "doorid" => $result['doorid'], "name" => $result['name'], "pos_x" => $result['pos_x'], "pos_y" => $result['pos_y'], "pos_z" => $result['pos_z'], "heading" => $result['heading'], "opentype" => $result['opentype'], "lockpick" => $result['lockpick'], "keyitem" => $result['keyitem'], "altkeyitem" => $result['altkeyitem'], "triggerdoor" => $result['triggerdoor'], "triggertype" => $result['triggertype'], "doorisopen" => $result['doorisopen'], "door_param" => $result['door_param'], "dest_zone" => $result['dest_zone'], "dest_x" => $result['dest_x'], "dest_y" => $result['dest_y'], "dest_z" => $result['dest_z'], "dest_heading" => $result['dest_heading'], "invert_state" => $result['invert_state'], "incline" => $result['incline'], "size" => $result['size'], "client_version_mask" => $result['client_version_mask'], "nokeyring" => $result['nokeyring'], "islift" => $result['islift'], "close_time" => $result['close_time'], "can_open" => $result['can_open']);

        }
    }
    return $array;
}

function get_objects(): array
{
    global $mysql, $z;

    $zid = getZoneID($z);
    $array = array();

    $query = "SELECT * FROM object WHERE zoneid=\"$zid\"";
    $results = $mysql->query_mult_assoc($query);
    if ($results) {
        foreach ($results as $result) {
            $array['objects'][$result['id']] = array("objid" => $result['id'], "objectname" => $result['objectname'], "xpos" => $result['xpos'], "ypos" => $result['ypos'], "zpos" => $result['zpos'], "heading" => $result['heading'], "itemid" => $result['itemid'], "charges" => $result['charges'], "type" => $result['type'], "icon" => $result['icon']);
        }
    }
    return $array;
}

function fishing_info(): bool|array|string|null
{
    global $mysql;

    $fsid = $_GET['fsid'];

    $query = "SELECT id AS fsid,Itemid AS fiid,zoneid,skill_level,chance FROM fishing WHERE id=\"$fsid\"";
    return $mysql->query_assoc($query);
}

function forage_info(): bool|array|string|null
{
    global $mysql;

    $fgid = $_GET['fgid'];

    $query = "SELECT id AS fgid,Itemid AS fgiid,zoneid,level,chance FROM forage WHERE id=\"$fgid\"";
    return $mysql->query_assoc($query);
}

function gspawn_info(): bool|array|string|null
{
    global $mysql;

    $gsid = $_GET['gsid'];

    $query = "SELECT id AS gsid,zoneid,max_x,max_y,max_z,min_x,min_y,heading,name,item AS giid,max_allowed,comment,respawn_timer FROM ground_spawns WHERE id=\"$gsid\"";
    return $mysql->query_assoc($query);
}

function traps_info(): bool|array|string|null
{
    global $mysql;

    $tid = $_GET['tid'];

    $query = "SELECT * FROM traps WHERE id=\"$tid\"";
    return $mysql->query_assoc($query);
}

function horses_info(): bool|array|string|null
{
    global $mysql;

    $filename = $_GET['filename'];

    $query = "SELECT * FROM horses WHERE filename=\"$filename\"";
    return $mysql->query_assoc($query);
}

function doors_info(): bool|array|string|null
{
    global $mysql;

    $drid = $_GET['drid'];

    $query = "SELECT * FROM doors WHERE id=\"$drid\"";
    return $mysql->query_assoc($query);
}

function objects_info(): bool|array|string|null
{
    global $mysql;

    $objid = $_GET['objid'];

    $query = "SELECT * FROM object WHERE id=\"$objid\"";
    return $mysql->query_assoc($query);
}

function update_fishing(): void
{
    global $mysql;

    $fsid = $_POST['fsid'];
    $fiid = $_POST['fiid'];
    $zoneid = $_POST['zoneid'];
    $skill_level = $_POST['skill_level'];
    $chance = $_POST['chance'];

    $query = "UPDATE fishing SET Itemid=\"$fiid\", zoneid=\"$zoneid\", skill_level=\"$skill_level\", chance=\"$chance\" WHERE id=\"$fsid\"";
    $mysql->query_no_result($query);
}

function update_forage(): void
{
    global $mysql;

    $fgid = $_POST['fgid'];
    $fgiid = $_POST['fgiid'];
    $zoneid = $_POST['zoneid'];
    $level = $_POST['level'];
    $chance = $_POST['chance'];

    $query = "UPDATE forage SET Itemid=\"$fgiid\", zoneid=\"$zoneid\", level=\"$level\", chance=\"$chance\" WHERE id=\"$fgid\"";
    $mysql->query_no_result($query);
}

function update_horses(): void
{
    global $mysql;

    $filename = $_POST['filename'];
    $filenamea = $_POST['filenamea'];
    $race = $_POST['race'];
    $gender = $_POST['gender'];
    $texture = $_POST['texture'];
    $mountspeed = $_POST['mountspeed'];
    $notes = $_POST['notes'];

    $query = "UPDATE horses SET filename=\"$filenamea\", race=\"$race\", gender=\"$gender\", texture=\"$texture\", mountspeed=\"$mountspeed\", notes=\"$notes\" WHERE filename=\"$filename\"";
    $mysql->query_no_result($query);
}

function update_gspawn(): void
{
    global $mysql;

    $gsid = $_POST['gsid'];
    $giid = $_POST['giid'];
    $zoneid = $_POST['zoneid'];
    $max_x = $_POST['max_x'];
    $max_y = $_POST['max_y'];
    $max_z = $_POST['max_z'];
    $min_x = $_POST['min_x'];
    $min_y = $_POST['min_y'];
    $heading = $_POST['heading'];
    $max_allowed = $_POST['max_allowed'];
    $respawn_timer = $_POST['respawn_timer'];
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    $query = "UPDATE ground_spawns SET item=\"$giid\", zoneid=\"$zoneid\", max_x=\"$max_x\", max_y=\"$max_y\", max_z=\"$max_z\", min_x=\"$min_x\", min_y=\"$min_y\", heading=\"$heading\", max_allowed=\"$max_allowed\", respawn_timer=\"$respawn_timer\", name=\"$name\", comment=\"$comment\" 
  WHERE id=\"$gsid\"";
    $mysql->query_no_result($query);
}

function update_traps(): void
{
    global $mysql;

    $tid = $_POST['tid'];
    $zone = $_POST['zone'];
    $x = $_POST['x_coord'];
    $y = $_POST['y_coord'];
    $z_coord = $_POST['z_coord'];
    $chance = $_POST['chance'];
    $maxzdiff = $_POST['maxzdiff'];
    $radius = $_POST['radius'];
    $effect = $_POST['effect'];
    $effectvalue = $_POST['effectvalue'];
    $effectvalue2 = $_POST['effectvalue2'];
    $message = $_POST['message'];
    $skill = $_POST['skill'];
    $level = $_POST['level'];
    $respawn_time = $_POST['respawn_time'];
    $respawn_var = $_POST['respawn_var'];
    $group = $_POST['group'];
    $triggered_number = $_POST['triggered_number'];
    $despawn_when_triggered = $_POST['despawn_when_triggered'];
    $undetectable = $_POST['undetectable'];

    $query = "UPDATE traps SET zone=\"$zone\", x=\"$x\", y=\"$y\", z=\"$z_coord\", chance=\"$chance\", maxzdiff=\"$maxzdiff\", radius=\"$radius\", effect=\"$effect\", effectvalue=\"$effectvalue\", effectvalue2=\"$effectvalue2\", message=\"$message\", skill=\"$skill\", level=\"$level\", respawn_time=\"$respawn_time\", respawn_var=\"$respawn_var\", `group`=\"$group\", triggered_number=\"$triggered_number\", despawn_when_triggered=\"$despawn_when_triggered\", undetectable=\"$undetectable\" WHERE id=\"$tid\"";
    $mysql->query_no_result($query);
}

function update_doors(): void
{
    global $mysql;

    $drid = $_POST['drid'];
    $doorid = $_POST['doorid'];
    $name = $_POST['name'];
    $pos_x = $_POST['pos_x'];
    $pos_y = $_POST['pos_y'];
    $pos_z = $_POST['pos_z'];
    $heading = $_POST['heading'];
    $opentype = $_POST['opentype'];
    $lockpick = $_POST['lockpick'];
    $keyitem = $_POST['keyitem'];
    $altkeyitem = $_POST['altkeyitem'];
    $triggerdoor = $_POST['triggerdoor'];
    $triggertype = $_POST['triggertype'];
    $doorisopen = $_POST['doorisopen'];
    $door_param = $_POST['door_param'];
    $dest_zone = $_POST['dest_zone'];
    $dest_x = $_POST['dest_x'];
    $dest_y = $_POST['dest_y'];
    $dest_z = $_POST['dest_z'];
    $dest_heading = $_POST['dest_heading'];
    $invert_state = $_POST['invert_state'];
    $incline = $_POST['incline'];
    $size = $_POST['size'];
    $client_version_mask = $_POST['client_version_mask'];
    $nokeyring = $_POST['nokeyring'];
    $islift = $_POST['islift'];
    $close_time = $_POST['close_time'];
    $can_open = $_POST['can_open'];

    $query = "UPDATE doors SET doorid=\"$doorid\", name=\"$name\", pos_x=\"$pos_x\", pos_y=\"$pos_y\", pos_z=\"$pos_z\", heading=\"$heading\", opentype=\"$opentype\", lockpick=\"$lockpick\", keyitem=\"$keyitem\", altkeyitem=\"$altkeyitem\", triggerdoor=\"$triggerdoor\", triggertype=\"$triggertype\", doorisopen=\"$doorisopen\", door_param=\"$door_param\", dest_zone=\"$dest_zone\", dest_x=\"$dest_x\", dest_y=\"$dest_y\", dest_z=\"$dest_z\", dest_heading=\"$dest_heading\", invert_state=\"$invert_state\", incline=\"$incline\", size=\"$size\", client_version_mask=\"$client_version_mask\", nokeyring=\"$nokeyring\", islift=\"$islift\", close_time=\"$close_time\", can_open=\"$can_open\" WHERE id=\"$drid\"";
    $mysql->query_no_result($query);
}

function update_objects(): void
{
    global $mysql;

    $objid = $_POST['objid'];
    $objectname = $_POST['objectname'];
    $xpos = $_POST['xpos'];
    $ypos = $_POST['ypos'];
    $zpos = $_POST['zpos'];
    $heading = $_POST['heading'];
    $itemid = $_POST['itemid'];
    $charges = $_POST['charges'];
    $type = $_POST['type'];
    $icon = $_POST['icon'];

    $query = "UPDATE object SET objectname=\"$objectname\", xpos=\"$xpos\", ypos=\"$ypos\", zpos=\"$zpos\", heading=\"$heading\", itemid=\"$itemid\", charges=\"$charges\", type=\"$type\", icon=\"$icon\" WHERE id=\"$objid\"";

    $mysql->query_no_result($query);
}

function delete_fishing(): void
{
    global $mysql;

    $fsid = $_GET['fsid'];

    $query = "DELETE from fishing WHERE id=\"$fsid\"";
    $mysql->query_no_result($query);
}

function delete_forage(): void
{
    global $mysql;

    $fgid = $_GET['fgid'];

    $query = "DELETE from forage WHERE id=\"$fgid\"";
    $mysql->query_no_result($query);
}

function delete_gspawn(): void
{
    global $mysql;

    $gsid = $_GET['gsid'];

    $query = "DELETE from ground_spawns WHERE id=\"$gsid\"";
    $mysql->query_no_result($query);
}

function delete_traps(): void
{
    global $mysql;

    $tid = $_GET['tid'];

    $query = "DELETE from traps WHERE id=\"$tid\"";
    $mysql->query_no_result($query);
}

function delete_horses(): void
{
    global $mysql;

    $filename = $_GET['filename'];

    $query = "DELETE from horses WHERE filename=\"$filename\"";
    $mysql->query_no_result($query);
}

function delete_doors(): void
{
    global $mysql;

    $drid = $_GET['drid'];

    $query = "DELETE from doors WHERE id=\"$drid\"";
    $mysql->query_no_result($query);
}

function delete_objects(): void
{
    global $mysql;

    $objid = $_GET['objid'];

    $query = "DELETE from object WHERE id=\"$objid\"";
    $mysql->query_no_result($query);
}

function suggest_fishing_id()
{
    global $mysql;

    $query = "SELECT MAX(id) AS fsid FROM fishing";
    $result = $mysql->query_assoc($query);

    return ($result['fsid'] + 1);
}

function suggest_forage_id()
{
    global $mysql;

    $query = "SELECT MAX(id) AS fgid FROM forage";
    $result = $mysql->query_assoc($query);

    return ($result['fgid'] + 1);
}

function suggest_gspawn_id()
{
    global $mysql;

    $query = "SELECT MAX(id) AS gsid FROM ground_spawns";
    $result = $mysql->query_assoc($query);

    return ($result['gsid'] + 1);
}


function suggest_traps_id()
{
    global $mysql;

    $query = "SELECT MAX(id) AS tid FROM traps";
    $result = $mysql->query_assoc($query);

    return ($result['tid'] + 1);
}

function suggest_door_id()
{
    global $mysql;

    $query = "SELECT MAX(id) AS drid FROM doors";
    $result = $mysql->query_assoc($query);

    return ($result['drid'] + 1);
}

function suggest_doorid()
{
    global $mysql, $z;

    $query = "SELECT MAX(doorid) AS dorid FROM doors WHERE zone=\"$z\"";
    $result = $mysql->query_assoc($query);

    return ($result['dorid'] + 1);
}

function suggest_object_id()
{
    global $mysql;

    $query = "SELECT MAX(id) AS objid FROM object";
    $result = $mysql->query_assoc($query);

    return ($result['objid'] + 1);
}

function add_fishing(): void
{
    global $mysql;

    $fiid = $_POST['fiid'];
    $zoneid = $_POST['zoneid'];
    $skill_level = $_POST['skill_level'];
    $chance = $_POST['chance'];

    $query = "INSERT INTO fishing SET id=\"fsid\", Itemid=\"$fiid\", zoneid=\"$zoneid\", skill_level=\"$skill_level\", chance=\"$chance\"";
    $mysql->query_no_result($query);
}

function add_forage(): void
{
    global $mysql;

    $fgiid = $_POST['fgiid'];
    $zoneid = $_POST['zoneid'];
    $level = $_POST['level'];
    $chance = $_POST['chance'];

    $query = "INSERT INTO forage SET id=\"fgid\", Itemid=\"$fgiid\", zoneid=\"$zoneid\", level=\"$level\", chance=\"$chance\"";
    $mysql->query_no_result($query);
}

function add_gspawn(): void
{
    global $mysql;

    $gsid = $_POST['gsid'];
    $giid = $_POST['giid'];
    $zoneid = $_POST['zoneid'];
    $max_x = $_POST['max_x'];
    $max_y = $_POST['max_y'];
    $max_z = $_POST['max_z'];
    $min_x = $_POST['min_x'];
    $min_y = $_POST['min_y'];
    $heading = $_POST['heading'];
    $max_allowed = $_POST['max_allowed'];
    $respawn_timer = $_POST['respawn_timer'];
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO ground_spawns SET id=\"$gsid\", item=\"$giid\", zoneid=\"$zoneid\", max_x=\"$max_x\", max_y=\"$max_y\", max_z=\"$max_z\", min_x=\"$min_x\", min_y=\"$min_y\", heading=\"$heading\", max_allowed=\"$max_allowed\", respawn_timer=\"$respawn_timer\", name=\"$name\", comment=\"$comment\"";
    $mysql->query_no_result($query);
}

function add_traps(): void
{
    global $mysql;

    $tid = $_POST['tid'];
    $zone = $_POST['zone'];
    $x = $_POST['x_coord'];
    $y = $_POST['y_coord'];
    $z_coord = $_POST['z_coord'];
    $chance = $_POST['chance'];
    $maxzdiff = $_POST['maxzdiff'];
    $radius = $_POST['radius'];
    $effect = $_POST['effect'];
    $effectvalue = $_POST['effectvalue'];
    $effectvalue2 = $_POST['effectvalue2'];
    $message = $_POST['message'];
    $skill = $_POST['skill'];
    $level = $_POST['level'];
    $respawn_time = $_POST['respawn_time'];
    $respawn_var = $_POST['respawn_var'];
    $group = $_POST['group'];
    $triggered_number = $_POST['triggered_number'];
    $despawn_when_triggered = $_POST['despawn_when_triggered'];
    $undetectable = $_POST['undetectable'];

    $query = "INSERT INTO traps SET id=\"$tid\", zone=\"$zone\", x=\"$x\", y=\"$y\", z=\"$z_coord\", chance=\"$chance\", maxzdiff=\"$maxzdiff\", radius=\"$radius\", effect=\"$effect\", effectvalue=\"$effectvalue\", effectvalue2=\"$effectvalue2\", message=\"$message\", skill=\"$skill\", level=\"$level\", respawn_time=\"$respawn_time\", respawn_var=\"$respawn_var\", `group`=\"$group\", triggered_number=\"$triggered_number\", despawn_when_triggered=\"$despawn_when_triggered\", undetectable=\"$undetectable\"";
    $mysql->query_no_result($query);
}

function add_horses(): void
{
    global $mysql;

    $filename = $_POST['filename'];
    $race = $_POST['race'];
    $gender = $_POST['gender'];
    $texture = $_POST['texture'];
    $mountspeed = $_POST['mountspeed'];
    $notes = $_POST['notes'];

    $query = "INSERT INTO horses SET filename=\"$filename\", race=\"$race\", gender=\"$gender\", texture=\"$texture\", mountspeed=\"$mountspeed\", notes=\"$notes\"";
    $mysql->query_no_result($query);
}

function add_doors(): void
{
    global $mysql, $z;

    $drid = $_POST['drid'];
    $doorid = $_POST['doorid'];
    $name = $_POST['name'];
    $pos_x = $_POST['pos_x'];
    $pos_y = $_POST['pos_y'];
    $pos_z = $_POST['pos_z'];
    $heading = $_POST['heading'];
    $opentype = $_POST['opentype'];
    $lockpick = $_POST['lockpick'];
    $keyitem = $_POST['keyitem'];
    $altkeyitem = $_POST['altkeyitem'];
    $triggerdoor = $_POST['triggerdoor'];
    $triggertype = $_POST['triggertype'];
    $doorisopen = $_POST['doorisopen'];
    $door_param = $_POST['door_param'];
    $dest_zone = $_POST['dest_zone'];
    $dest_x = $_POST['dest_x'];
    $dest_y = $_POST['dest_y'];
    $dest_z = $_POST['dest_z'];
    $dest_heading = $_POST['dest_heading'];
    $invert_state = $_POST['invert_state'];
    $incline = $_POST['incline'];
    $size = $_POST['size'];
    $client_version_mask = $_POST['client_version_mask'];
    $nokeyring = $_POST['nokeyring'];
    $islift = $_POST['islift'];
    $close_time = $_POST['close_time'];
    $can_open = $_POST['can_open'];

    $query = "INSERT INTO doors SET id=\"$drid\", zone=\"$z\", doorid=\"$doorid\", name=\"$name\", pos_x=\"$pos_x\", pos_y=\"$pos_y\", pos_z=\"$pos_z\", heading=\"$heading\", opentype=\"$opentype\", lockpick=\"$lockpick\", keyitem=\"$keyitem\", altkeyitem=\"$altkeyitem\", triggerdoor=\"$triggerdoor\", triggertype=\"$triggertype\", doorisopen=\"$doorisopen\", door_param=\"$door_param\", dest_zone=\"$dest_zone\", dest_x=\"$dest_x\", dest_y=\"$dest_y\", dest_z=\"$dest_z\", dest_heading=\"$dest_heading\", invert_state=\"$invert_state\", incline=\"$incline\", size=\"$size\", client_version_mask=\"$client_version_mask\", nokeyring=\"$nokeyring\", islift=\"$islift\", close_time=\"$close_time\", can_open=\"$can_open\"";
    $mysql->query_no_result($query);
}

function add_objects(): void
{
    global $mysql, $z;

    $zid = getZoneID($z);
    $objid = $_POST['objid'];
    $objectname = $_POST['objectname'];
    $xpos = $_POST['xpos'];
    $ypos = $_POST['ypos'];
    $zpos = $_POST['zpos'];
    $heading = $_POST['heading'];
    $itemid = $_POST['itemid'];
    $charges = $_POST['charges'];
    $type = $_POST['type'];
    $icon = $_POST['icon'];

    $query = "INSERT INTO object SET id=\"$objid\", zoneid=\"$zid\", objectname=\"$objectname\", xpos=\"$xpos\", ypos=\"$ypos\", zpos=\"$zpos\", heading=\"$heading\", itemid=\"$itemid\", charges=\"$charges\", type=\"$type\", icon=\"$icon\"";

    $mysql->query_no_result($query);
}

function search_fishing_by_id(): array|string|null
{
    global $mysql;

    $fishid = $_GET['fishid'];

    $query = "SELECT id AS fsid, Itemid AS fiid FROM fishing WHERE Itemid=\"$fishid\"";
    return $mysql->query_mult_assoc($query);
}

function search_gspawn_by_id(): array|string|null
{
    global $mysql;

    $gspawnid = $_GET['gspawnid'];

    $query = "SELECT id AS gsid, item AS giid FROM ground_spawns where item=\"$gspawnid\"";
    return $mysql->query_mult_assoc($query);
}

function search_forage_by_id(): array|string|null
{
    global $mysql;

    $forageid = $_GET['forageid'];

    $query = "SELECT id AS fgid, Itemid AS fgiid FROM forage where Itemid=\"$forageid\"";
    return $mysql->query_mult_assoc($query);
}

?>