@extends('/layouts/master')
@section('title')
invoiceform
@endsection
@section('csslink') 
<link rel="stylesheet" href="css/invoice.css"/>
@endsection
@section('content')
<script src="{{asset('assets/js/jquery.js')}}"></script>

<script type="text/javascript">
	$(function(){
		$('.add').click(function(){
			var product = $('product_id').html();
			var n = ($('.body tr').length-0)+1;
			var tr = '<tr><th class="no">'+n+'</th>' +
					 '<td><input type="text" name="title[]" class="title form-control"></td>' +
					 '<td><input type="text" name="qty[]" class="qty form-control"</td>' +
					 '<td><input type="text" name="price[]" class="price form-control"</td>' +
					 '<td><input type="text" name="dis[]" class="dis form-control"</td>' +
					 '<td><input type="text" name="amount[]" class="amount form-control"</td>' +
					 '<td><button type="button" class="btn btn-danger">Delete Item</button></td></tr>';
					 $('.body').append(tr);
		    });

		$('.body').on('click', 'button.btn-danger', function() {
   				$(this).parents('tr').remove();  
		});

		$('.body').delegate('.qty,.price,.dis','keyup',function(){
			var tr = $(this).parent().parent();
			var qty = tr.find('.qty').val()-0;
			var price = tr.find('.price').val()-0;
			var dis = tr.find('.dis').val()-0;
			var Total = 0;
			var total = (price * qty) - ((qty * price * dis)/100);
			
			tr.find('.amount').val(total);
			var Total = Total + total;
			tr.find('.all_amount').val(Total);
		});
	});
</script>

<div class="row">
	<div class="col-third">
		<div class="icon-bar">
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a> 
			<a href="#"><i class="fa fa-google"></i></a>
			<a href="#"><i class="fa fa-yahoo"></i></a> 
		</div> 
	</div>
	<div class="col-third">
		<h3>Select at Date</h3>
		<div class="input-group input-group-icon">
		<input name = "date" type="date" placeholder="0000-00-00" >
		<div class="input-icon"><i class="glyphicon glyphicon-calendar"></i></div>
		</div>
	</div>
	<div class="col-third">
		<h3>Recept Issue by</h3>
		<div class="input-group input-group-icon">
			<input type="text" name="user_name" placeholder="Created by"/>
			<div class="input-icon"><i class="glyphicon glyphicon-check"></i></div>
		</div>
	</div>
</div>

  <table class="table table-bordered table-hover">
  	<thead>
  		<th>No</th>
  		<th>Title</th>
  		<th>Quantity</th>
  		<th>Price</th>
  		<th>Discount</th>
  		<th>Amount</th>
  		<th><input type="button" class="btn btn-primary add" value="Add Item"></th>
  	</thead>
  	<tbody class="body">
  		<tr>
  			<th class="no">1</th>

  			<td><input type="text" name="title[]" class="title form-control"></td>
  			<td><input type="text" name="qty[]" class="qty form-control"></td>
  			<td><input type="text" name="price[]" class="price form-control"></td>
  			<td><input type="text" name="dis[]" class="dis form-control"></td>
  			<td><input type="text" name="amount[]" class="amount form-control" readonly="readonly"></td>
  			<td><a href="#" class="btn btn-danger">Delete Item</td>
  		</tr>
  		<tr>
  			<td></td>
  			<td></td>
  			<td></td>
  			<td></td>
  			<td></td>
  			<td><input type="text" name="all_amount[]" readonly="readonly" class="amount form-control"></td>
  			<td></td>
  		</tr>
  	</tbody>
  </table>
     <form>
    <div class="row"  align="center">
      <div class="input-group">
    <button type="button" class="btn btn-success">Add to recipt</button>
      </div>
    </div>
  </form>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/index.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

@endsection