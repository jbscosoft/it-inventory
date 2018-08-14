<?php
error_reporting(E_ALL ^ E_NOTICE);

include "../config/view.php";
include_once '../config/login/login-func.php';
//include "focus.php";

if (isset($_REQUEST['token'])){
  $signing = base64_decode($_REQUEST['token']);

  switch($signing){
    case "dashboard":
    dashboard();
    break;
    case "welcome":
    first_login_admin();
    break;
    case "add_item":
    addItem();
    break;
    case "assign_item":
    assignItem();
    break;
    case "categories":
    categories();
    break;
    case "departments":
    departments();
    break;
    case "supplier":
    suppliers();
    break;
    case "ousers":
    ousers();
    break;
    case "Users":
    Users();
    break;
    case "viewUser":
    view_user();
    break;
    case "manageUsers":
    $inst_no = getfield('institute_instituteID',$mysqli);
    manageUsers($inst_no);
    break;
    case "updateInstDetails":
    $inst_no = getfield('institute_instituteID',$mysqli);
    updateinstituteDetails($inst_no);
    break;
    case "addUser":
    addUser();
    break;
    case "view_items":
    items();
    break;
    case "itemsSummaryReport":
    itemsSummaryReport();
    break;
    case "updateProfile":
    $id = getfield('id',$mysqli);
    updateProfile($id);
    break;
    default:
    pagenotfound();
    break;
    
   }
}
if (isset($_REQUEST['view'])){
  $id = $_REQUEST['view'];
  view_user($id);
}
if (isset($_REQUEST['view_item'])){
  $id = $_REQUEST['view_item'];
  viewThisItem($id);
}
if (isset($_REQUEST['updateItem'])){
  $id = $_REQUEST['updateItem'];
  updateItem($id);
}
if (isset($_REQUEST['print'])){
  $id = $_REQUEST['print'];
  printThisItem($id);
}
if (isset($_REQUEST['printuseritem'])){
  $id = $_REQUEST['printuseritem'];
  viewUserInfoPrint($id);
}
if (isset($_REQUEST['spec_view'])){
  $name = $_REQUEST['spec_view'];
  items_spec($name);
}
if (isset($_REQUEST['all_items'])){
    $all_items = $_REQUEST['all_items'];
  view_all_item($all_items);
}
if (isset($_REQUEST['id'])){
  $id = $_REQUEST['id'];
  viewUserInfo($id);
}
