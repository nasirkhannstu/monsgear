<html>
<body>
<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">  <tbody><tr><td>    <table align="center" bgcolor="#ababab" border="0" cellpadding="1" cellspacing="0" width="100%">      <tbody><tr><td>        <table align="center" border="0" cellpadding="3" cellspacing="0" width="100%">          <tbody><tr bgcolor="#ffffff"><td><table align="left" border="0" cellpadding="1" cellspacing="5">
                                        <tbody><tr><td align="left"><br><pre>New customer order

You have received an order from {{$info->fname.' '.$info->lname}}. Their order is as follows:

****************************************************

Order number: #{{$order->id}}
Order date: {{$order->created_at}}
@foreach($products as $product){{ $product['item']['name'] }}

Quantity: {{ $product['qty'] }}
Cost: ${{ $product['price'] }}
@endforeach


----------

Cart Subtotal:${{ $totalPrice }}
Shipping:$@if($coupon)@if($coupon->freeship == 'No' && $totalPrice <= 500)+ $25 @else $0 @endif @elseif($totalPrice <= 500) +$25 @else $0 @endif
Payment Method:{{ $order->method }}
Order Total:@if($couponTotal)${{ $couponTotal }}@else @if($totalPrice <= 500) ${{ $totalPrice + 25 }} @else ${{ $totalPrice }} @endif @endif

****************************************************

Customer details
Email:<a href="/squirrelmail/src/compose.php?send_to={{ $info->email }}">{{ $info->email }}</a>
Board Id: {{$info->board}}

Shipping address:{{$info->fname.' '.$info->lname}}
                                                    <br>{{ $info->address }}<br>{{ $info->city }}<br>{{ $info->state }}<br>{{ $info->zip }}


****************************************************

Powered by MONSTER Gear

</pre>
                                            </td>
                                        </tr>            </tbody></table>                 </tbody></table></td></tr>    </tbody></table>  </td></tr><tr><td colspan="2" height="5" bgcolor="#ffffff"></td></tr>
    <tr><td>    <table align="center" bgcolor="#ababab" border="0" cellpadding="1" cellspacing="0" width="100%">     <tbody><tr><td>       <table align="center" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="100%">        <tbody><tr><td align="left" bgcolor="#ababab">
                                       </td></tr>        <tr><td>          <table align="center" bgcolor="#dcdcdc" border="0" cellpadding="2" cellspacing="2" width="100%"><tbody><tr><td></td></tr><tr><td><a href="../src/view_text.php?mailbox=INBOX&amp;passed_id=10335&amp;startMessage=1&amp;override_type0=text&amp;override_type1=html&amp;ent_id=2"></a></td><td><small><b><small>k</small></b></small></td><td><small></small></td><td><small><b></b></small></td><td><small>&nbsp;<a href="../src/download.php?absolute_dl=true&amp;passed_id=10335&amp;mailbox=INBOX&amp;ent_id=2"></a><a href="../src/view_text.php?mailbox=INBOX&amp;passed_id=10335&amp;startMessage=1&amp;override_type0=text&amp;override_type1=html&amp;ent_id=2"></a></small></td></tr>
                                        </tbody></table>       </td></tr></tbody></table>    </td></tr></tbody></table>  </td></tr><tr><td colspan="2" height="5" bgcolor="#ffffff"></td></tr></tbody></table>



</body>
</html>