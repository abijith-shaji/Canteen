
<?php
//fetch.php
//$connect = mysqli_connect("localhost", "root", "", "register1");
//$columns = array('first_name', 'last_name');
$connect = mysqli_connect("localhost", "root", "", "canteen");
$columns = array('order_num', 'cust_name');

// $query = "SELECT * FROM register ";
$query = "SELECT * FROM transactions ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE order_num LIKE "%'.$_POST["search"]["value"].'%" 
 OR cust_name LIKE "%'.$_POST["search"]["value"].'%" 
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY tid DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
  $sub_array[] = '<div contenteditable class="update" data-tid="'.$row["tid"].'" data-column="order_num">' . $row["order_num"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-tid="'.$row["tid"].'" data-column="order_date">' . $row["order_date"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-tid="'.$row["tid"].'" data-column="cust_name">' . $row["cust_name"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-tid="'.$row["tid"].'" data-column="amount">' . $row["amount"] . '</div>';
//    $sub_array[] = '<div contenteditable class="update" data-tid="'.$row["tid"].'" data-column="home_address">' . $row["home_address"] . '</div>';
//   $sub_array[] = '<div contenteditable class="update" data-tid="'.$row["tid"].'" data-column="contact_num">' . $row["contact_num"] . '</div>';
  
//  $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" tid="'.$row["tid"].'">Delete</button>';
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM transactions";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>