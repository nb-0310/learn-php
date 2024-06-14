<?php

function mysql_prep($value, $connection) {
    // echo "<pre>";
    // var_dump($connection);
    // echo "</pre>";
    // if (!($connection instanceof mysqli)) {
    //     throw new Exception("Invalid MySQL connection object.");
    // }
    $new_val = stripslashes($value);
    echo $new_val;
    $res = $connection->real_escape_string($new_val);
    return $res;
}

function redirect_to($location = NULL) {
    if ($location != NULL) {
        header("Location: {$location}");
        exit;
    }
}

function confirm_query($result_set, $connection) {
    if (!$result_set) {
        die("Database query failed: " . mysqli_error($connection));
    }
}

function get_all_subjects($connection) {
    $query = "SELECT * FROM subjects ORDER BY position ASC";
    $subject_set = $connection->query($query);
    // $subject_array = $subject_set->fetch_assoc();
    // echo "<pre>";
    // print_r($subject_set);
    // echo "</pre>";
    return $subject_set;
}

function get_pages_for_subject($subject_id, $connection) {
    $query = "SELECT * FROM pages WHERE subject_id = {$subject_id} ORDER BY position ASC";
    $page_set = mysqli_query($connection, $query);
    confirm_query($page_set, $connection);
    return $page_set;
}

function get_subject_by_id($subject_id, $connection) {
    $query = "SELECT * FROM subjects WHERE id={$subject_id} LIMIT 1";
    $result_set = mysqli_query($connection, $query);
    confirm_query($result_set, $connection);
    if ($subject = mysqli_fetch_assoc($result_set)) {
        return $subject;
    } else {
        return NULL;
    }
}

function get_page_by_id($page_id, $connection) {
    $query = "SELECT * FROM pages WHERE id={$page_id} LIMIT 1";
    $result_set = mysqli_query($connection, $query);
    confirm_query($result_set, $connection);
    if ($page = mysqli_fetch_assoc($result_set)) {
        return $page;
    } else {
        return NULL;
    }
}

function find_selected_page($connection) {
    global $sel_subject;
    global $sel_page;
    if (isset($_GET['subj'])) {
        $sel_subject = get_subject_by_id($_GET['subj'], $connection);
        $sel_page = NULL;
        // $sel_page = get_page_by_id($_GET['page'], $connection);
    } elseif (isset($_GET['page'])) {
        $sel_subject = NULL;
        $sel_page = get_page_by_id($_GET['page'], $connection);
    } else {
        $sel_subject = NULL;
        $sel_page = NULL;
    }
}

function navigation($sel_subject, $sel_page, $connection) {
    $output = "<ul class=\"subjects\">";
    $subject_set = get_all_subjects($connection);
    while ($subject = mysqli_fetch_assoc($subject_set)) {
        $output .= "<li";
        if (isset($sel_subject['id']) && $subject["id"] == $sel_subject['id']) {
            $output .= " class=\"selected\"";
        }
        $output .= "><a href=\"editSubject.php?subj=" . urlencode($subject["id"]) . "\">{$subject["menu_name"]}</a></li>";
        $page_set = get_pages_for_subject($subject["id"], $connection);
        $output .= "<ul class=\"pages\">";
        while ($page = mysqli_fetch_assoc($page_set)) {
            $output .= "<li";
            if (isset($sel_page['id']) && $page["id"] == $sel_page['id']) {
                $output .= " class=\"selected\"";
            }
            $output .= "><a href=\"content.php?page=" . urlencode($page["id"]) . "\">{$page["menu_name"]}</a></li>";
        }
        $output .= "</ul>";
    }
    $output .= "</ul>";
    return $output;
}

function public_navigation($sel_subject, $sel_page, $connection) {
    $output = "<ul class=\"subjects\">";
    $subject_set = get_all_subjects($connection);
    // $subject_array = mysqli_fetch_assoc($subject_set);
    while ($subject = mysqli_fetch_assoc($subject_set)) {
        $output .= "<li";
        if (isset($subject["id"]) && isset($sel_subject['id']) && $subject["id"] == $sel_subject['id']) {
            $output .= " class=\"selected\"";
        }
        $output .= "><a href=\"index.php?subj=" . urlencode($subject["id"]) . 
            "\">{$subject["menu_name"]}</a></li>";
        if (isset($subject["id"]) && isset($sel_subject['id']) && $subject["id"] == $sel_subject['id']) {	
            $page_set = get_pages_for_subject($subject["id"], $connection);
            $output .= "<ul class=\"pages\">";
            // $page_array = mysqli_fetch_assoc($page_set);
            while ($page = mysqli_fetch_assoc($page_set)) {
                $output .= "<li";
                if (isset($sel_page) && isset($sel_page["id"]) && $page["id"] == $sel_page['id']) { $output .= " class=\"selected\""; }
                $output .= "><a href=\"index.php?page=" . urlencode($page["id"]) .
                    "\">{$page["menu_name"]}</a></li>";
            }
            $output .= "</ul>";
        }
    }
    $output .= "</ul>";
    return $output;
}