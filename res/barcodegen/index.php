<!DOCTYPE html>
<html lang="en">
<head>
  <title>Barcode Generator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body style="background-color:gray;">

<div class="container">
  <div style="margin: 10%;">
  	<h2 class="text-center">Generate product barcode</h2>
  	<form class="form-horizontal" method="post" action="barcode.php" target="_blank">
  	<div class="form-group">
      <label class="control-label col-sm-2" for="product">Product:</label>
      <div class="col-sm-10">
        <input autocomplete="OFF" type="text" class="form-control" id="product" name="product" required="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="product_id">Product ID:</label>
      <div class="col-sm-10">
        <input autocomplete="OFF" type="text" class="form-control" id="product_id" name="product_id" required="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="rate">Rate</label>
      <div class="col-sm-10">          
        <input autocomplete="OFF" type="text" class="form-control" id="rate"  name="rate" required="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="print_qty">Barcode Quantity</label>
      <div class="col-sm-10">          
        <input autocomplete="OFF" type="print_qty" class="form-control" id="print_qty"  name="print_qty" required="">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
  </div>
</div>

<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>


