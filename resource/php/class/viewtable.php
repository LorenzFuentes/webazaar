<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/webazaar/resource/php/class/core/init.php';
require_once 'config.php';

class viewtable extends config{

  public function viewApproveTable(){
    $con = $this->con();
    $sql = "SELECT * FROM `men-products`";
    $data= $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $data) {
    echo "<tr>";
    echo "<td class='d-none d-sm-table-cell' >$data[stdnumber]</td>";
    echo "<td style='font-size: 85%;'>$data[fullname]</td>";
    echo "<td class='d-none d-sm-table-cell' style='font-size: 85%;'>".$data['application_type']."</td>";
    echo "<td class='d-none d-sm-table-cell'>$data[email]</td>";
    echo "<td class='d-none d-sm-table-cell'>$data[status]</td>";


    echo "</tr>";
    }
    echo "</table>";

  }
  public function menProducts(){
    $con = $this->con();
    $sql = "SELECT * FROM `men-products`";
    $data= $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $data) {
      echo "<article>
      <img src='$data[image]' alt='tshirt photo'>
      <div class='text'>
        <h3>$data[name]</h3>
        <p>by Webazaar</p>
        <p>$data[price]</p>
        <input type='number' min='1' name='product_quantity' value='1'>
        <input type='hidden' name='product_image' value='$data[image]'>
        <input type='hidden' name='product_name' value='$data[name]'>
        <input type='hidden' name='product_price' value='$data[price]'>
        <input type='submit' value='add to cart' name='add_to_cart' class='btn'>
      </div>
    </article>";
    }
  }
  public function womenProducts(){
    $con = $this->con();
    $sql = "SELECT * FROM `women-products`";
    $data= $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $data) {
      echo "<article>
      <img src='$data[image]' alt='tshirt photo'>
      <div class='text'>
        <h3>$data[name]</h3>
        <p>by Webazaar</p>
        <p>$data[price]</p>
        <input type='number' min='1' name='product_quantity' value='1'>
        <input type='hidden' name='product_image' value='$data[image]'>
        <input type='hidden' name='product_name' value='$data[name]'>
        <input type='hidden' name='product_price' value='$data[price]'>
        <input type='submit' value='add to cart' name='add_to_cart' class='btn'>
      </div>
    </article>";
    }
  }
  public function accProducts(){
    $con = $this->con();
    $sql = "SELECT * FROM `accesories`";
    $data= $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $data) {
      echo "<article>
      <img src='$data[image]' alt='tshirt photo'>
      <div class='text'>
        <h3>$data[name]</h3>
        <p>by Webazaar</p>
        <p>$data[price]</p>
        <input type='number' min='1' name='product_quantity' value='1'>
        <input type='hidden' name='product_image' value='$data[image]'>
        <input type='hidden' name='product_name' value='$data[name]'>
        <input type='hidden' name='product_price' value='$data[price]'>
        <input type='submit' value='add to cart' name='add_to_cart' class='btn'>
      </div>
    </article>";
    }
  }
};