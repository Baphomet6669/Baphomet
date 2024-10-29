<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

<style>
            @media print{.do_not_print {display:none;}}
        </style>

	
	<title>Editable Invoice by Baphomet😈</title>
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>

<body>

	<div id="page-wrap">

		<textarea id="header">INVOICE</textarea>
		
		<div id="identity">
		
            <textarea id="address">Chris Coyier
123 Appleseed Street
Appleville, WI 53719

Phone: (555) 555-5555</textarea>

            <div id="logo">
<div id="preview" height="540" width="540"/>

              <div id="logoctr">
<input type="file" name="upload_file" class="form-control" placeholder="Enter Name" id="upload_file" onchange="getImagePreview(event)"/>


                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>

                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="images/logo.png" alt="logo" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

    
            <table id="meta">
			
                <tr>
				
                    <td class="meta-head">Invoice #</td>
                    <td><textarea>001</textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date">03/10/22</textarea></td>
                </tr>
             

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Item</th>
		      <th>Description</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea>Web Updates</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea>Monthly web updates for </textarea></td>
		      <td><textarea class="cost">650.00</textarea></td>
		      <td><textarea class="qty">1</textarea></td>
		      <td><span class="price">650.00</span></td>
		  </tr>
	
		  
		  <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr>
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="subtotal">650.00</div></td>
		  </tr>
		  
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Cgst</td>
		      <td class="total-value"><div>        <textarea></textarea></div></td>
		  </tr>
		  
		   <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Sgst</td>
		      <td class="total-value"><div>        <textarea>               9</textarea></div></td>
		  </tr>
		  
		   <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Igst</td>
		      <td class="total-value"><div>        <textarea>               18</textarea></div></td>
		  </tr>
		  
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Grand Total</td>
		      <td class="total-value"><div>        <textarea>               .00</textarea></div></td>
		  </tr>
 <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Discount</td>
		      <td class="total-value"><div id="">650.00</div></td>
		  </tr>

		</table>
		
		<div id="terms">
		  <h5><textarea>Rules and Regulations Or Enter Your Upi Or Phone Number You can Upload Qr Code Image Below</textarea></h5>
		  <span class="do_not_print">
		  <input type="file" name="upload_file" class="form-control" placeholder="Enter Name" id="upload_file" onchange="getImagePreviews(event)"/>
		  <button onclick="javascript: window.print();">Print Invoice</button> <br>
		  </span>
		  <div id="previews" height="540" width="540"/>
		<span class="do_not_print">
               
			 <br> <button> <a href="/res/inv/make.html" target="_blank">Try This!</a> </button>
            </span>
		</div>
	
	</div>
	
	</div>



<script type="text/javascript">
document.getElementById('printBtn').addEventListener('click', () => { window.print() });
// Prints area to which class was assigned only
</script>

<script>
 function getImagePreview(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('preview');
    var newimg=document.createElement('img');
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="300";
    imagediv.appendChild(newimg);
  }
</script>


<script>
 function getImagePreviews(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('previews');
    var newimg=document.createElement('img');
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="300";
    imagediv.appendChild(newimg);
  }
</script>



