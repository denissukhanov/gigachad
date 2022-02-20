<?php
function addWhere($where, $add, $and = true) {
  if ($where) {
    if ($and) $where .= " AND $add";
    else $where .= " OR $add";
  }
  else $where = $add;
  return $where;
}
if (empty($_GET["filter"])) {$sql="SELECT * from `books`  inner join `authors` on `books`.id_author=`authors`.id";
  $result = mysqli_query($link,$sql);}

if (!empty($_GET["filter"])) {
  $where = "";
  if ($_GET["costFrom"]) $where = addWhere($where, "`cost`>= '".mysqli_real_escape_string( $link,$_GET["costFrom"]))."'";
  if ($_GET["costTo"]) $where = addWhere($where, "`cost`<= '".mysqli_real_escape_string( $link,$_GET["costTo"]))."'";
  if ($_GET["desc"]) $where  = addWhere($where, "`description`LIKE '%".mysqli_real_escape_string( $link,$_GET["desc"]))."%'";
  if ($_GET["name"]) $where = addWhere($where, "nameLIKE'%".mysqli_real_escape_string( $link,$_GET["name"]))."%'";

  if ($_GET["auth"]) $where = addWhere($where, "`author`LIKE '%".mysqli_real_escape_string($link,$_GET["auth"]))."%'";

  $sql = "SELECT * FROM `books`  inner join `authors` on `books`.id_author=`authors`.id";
  if ($where){ $sql .= " WHERE $where";
    $result = mysqli_query($link,$sql);

  }
  echo $sql;
}
?>