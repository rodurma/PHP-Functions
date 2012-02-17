<?
$menu = Array( // Presumed to have been coming from a SQL SELECT, populated for demo.
  Array('id'=>1,'title'=>'Menu 1',             'parent_id'=>null),
  Array('id'=>2,'title'=>'Sub 1.1',            'parent_id'=>1),
  Array('id'=>3,'title'=>'Sub 1.2',            'parent_id'=>1),
  Array('id'=>4,'title'=>'Sub 1.3',            'parent_id'=>1),
  Array('id'=>5,'title'=>'Menu 2',             'parent_id'=>null),
  Array('id'=>6,'title'=>'Sub 2.1',            'parent_id'=>5),
  Array('id'=>7,'title'=>'Sub Sub 2.1.1',      'parent_id'=>6),
  Array('id'=>10,'title'=>'Sub Sub 2.1.1.1',   'parent_id'=>7),
  Array('id'=>8,'title'=>'Sub 2.2',            'parent_id'=>5),
  Array('id'=>9,'title'=>'Menu 3',             'parent_id'=>null)
);

function has_children($rows,$id) {
  foreach ($rows as $row) {
    if ($row['parent_id'] == $id)
      return true;
  }
  return false;
}
function build_menu($rows,$parent=0)
{  
  $result = "<ul>";
  foreach ($rows as $row)
  {
    if ($row['parent_id'] == $parent){
      $result.= "<li>{$row['title']}";
      if (has_children($rows,$row['id']))
        $result.= build_menu($rows,$row['id']);
      $result.= "</li>";
    }
  }
  $result.= "</ul>";

  return $result;
}
echo build_menu($menu);

?>