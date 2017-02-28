<html>
<body>
<div marginwidth="0" marginheight="0">
    <div style="background-color:#f5f5f5;width:100%;margin:0;padding:70px 0 70px 0">
        <table height="100%" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td align="center" valign="top">
                    <div id="m_7710281554876410320template_header_image">
                    </div>
                    <table id="m_7710281554876410320template_container" style="border-radius:6px!important;background-color:#fdfdfd;border:1px solid #dcdcdc;border-radius:6px!important" border="0" cellpadding="0" cellspacing="0" width="600"><tbody><tr><td align="center" valign="top">

                                <table id="m_7710281554876410320template_header" style="background-color:#557da1;color:#ffffff;border-top-left-radius:6px!important;border-top-right-radius:6px!important;border-bottom:0;font-family:Arial;font-weight:bold;line-height:100%;vertical-align:middle" bgcolor="#557da1" border="0" cellpadding="0" cellspacing="0" width="600"><tbody><tr><td>
                                            <h1 style="color:#ffffff;margin:0;padding:28px 24px;display:block;font-family:Arial;font-size:45px;font-weight:bold;text-align:left;line-height:150%">Thank you for your order.Now we are processing your order.Our
                                                customer service manager will contact with you soon.</h1>

                                        </td>
                                    </tr></tbody></table></td>
                        </tr><tr><td align="center" valign="top">

                                <table id="m_7710281554876410320template_body" border="0" cellpadding="0" cellspacing="0" width="600"><tbody><tr><td style="background-color:#fdfdfd;border-radius:6px!important" valign="top">

                                            <table border="0" cellpadding="20" cellspacing="0" width="100%"><tbody><tr><td valign="top">
                                                        <div style="color:#737373;font-family:Arial;font-size:14px;line-height:150%;text-align:left">

                                                            <p>Your order has been received and is now being processed. Your order
                                                                details are shown below for your reference:</p>

                                                            <p>Once this is submitted you will receive specific instructions for
                                                                sending<br>
                                                                the payment <span tabindex="0" class="aBn" data-term="goog_1254349789"><span class="aQJ">within 3 hours</span></span> if during normal business hours.</p>


                                                            <h2 style="color:#505050;display:block;font-family:Arial;font-size:60px;font-weight:bold;margin-top:10px;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;line-height:150%">Order Number:{{$order->id}}</h2>

                                                            <table style="width:100%;border:1px solid #eee" border="1" cellpadding="6" cellspacing="0"><thead><tr><th scope="col" style="text-align:left;border:1px solid #eee">Product</th>
                                                                    <th scope="col" style="text-align:left;border:1px solid #eee">Quantity</th>
                                                                    <th scope="col" style="text-align:left;border:1px solid #eee">Price</th>
                                                                </tr></thead><tbody>
                                                                @foreach($cartproducts as $product)
                                                                <tr>

                                                                    <td style="text-align:left;vertical-align:middle;border:1px solid #eee;word-wrap:break-word">{{ $product->name }}<br><small></small></td>
                                                                    <td style="text-align:left;vertical-align:middle;border:1px solid #eee">{{ $product->product_amount }}</td>
                                                                    <td style="text-align:left;vertical-align:middle;border:1px solid #eee"><span class="m_7710281554876410320amount">${{ $product->price * $product->product_amount }}</span></td>

                                                                </tr>
                                                                @endforeach
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th scope="row" colspan="2" style="text-align:left;border:1px solid #eee;border-top-width:4px">Cart Subtotal:</th>
                                                                        <td style="text-align:left;border:1px solid #eee;border-top-width:4px"><span class="m_7710281554876410320amount">${{$order->total}}</span></td>
                                                                    </tr>
                                                                    @if($coupon)
                                                                    <tr>
                                                                        <th scope="row" colspan="2" style="text-align:left;border:1px solid #eee">Coupone({{ $coupon->name }})</th>
                                                                        <td style="text-align:left;border:1px solid #eee">
                                                                            <span class="m_7710281554876410320amount">
                                                                                @if($coupon->dtype == 'cart')
                                                                                    -{{ $coupon->amount }}
                                                                                @endif
                                                                                @if($coupon->dtype == 'percent')
                                                                                    %{{ $coupon->amount }}
                                                                                @endif
                                                                            </td>
                                                                    </tr>
                                                                    @endif
                                                                    <tr>
                                                                        <th scope="row" colspan="2" style="text-align:left;border:1px solid #eee">Shipping:</th>
                                                                        <td style="text-align:left;border:1px solid #eee">
                                                                            <span class="m_7710281554876410320amount">
                                                                                @if($coupon)
                                                                                    @if($coupon->freeship == 'No' && $totalPrice <= 500)
                                                                                        + $25
                                                                                    @else
                                                                                        $0
                                                                                    @endif
                                                                                @elseif($totalPrice <= 500)
                                                                                    +$25
                                                                                @else
                                                                                    $0
                                                                                @endif
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" colspan="2" style="text-align:left;border:1px solid #eee">Payment Method:</th>
                                                                        <td style="text-align:left;border:1px solid #eee">{{ $order->method }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" colspan="2" style="text-align:left;border:1px solid #eee">Order Total:</th>
                                                                        <td style="text-align:left;border:1px solid #eee"><span class="m_7710281554876410320amount">
                                                                                ${{$order->grandtotal}}</span></td>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                            <h2 style="color:#505050;display:block;font-family:Arial;font-size:60px;font-weight:bold;margin-top:10px;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;line-height:150%"></h2>
                                                            <p><strong>Note:</strong>{{ $info->info }}</p>
                                                            <h2 style="color:#505050;display:block;font-family:Arial;font-size:60px;font-weight:bold;margin-top:10px;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;line-height:150%">Customer details</h2>

                                                            <p><strong>Email:</strong> <a href="mailto:towhedurrone93@gmail.com" target="_blank">{{ $info->email }}</a></p>

                                                            <table style="width:100%;vertical-align:top" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td valign="top" width="50%">

                                                                        <h3 style="color:#505050;display:block;font-family:Arial;font-size:26px;font-weight:bold;margin-top:10px;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;line-height:150%">Shipping address</h3>

                                                                        <p><br>{{ $info->address }}<br>{{ $info->city }}<br>{{ $info->state }}<br>{{ $info->zip }}</p>

                                                                    </td>


                                                                </tr></tbody></table></div>
                                                    </td>
                                                </tr></tbody></table></td>
                                    </tr></tbody></table></td>
                        </tr><tr><td align="center" valign="top">

                                <table id="m_7710281554876410320template_footer" style="border-top:0" border="0" cellpadding="10" cellspacing="0" width="600"><tbody><tr><td valign="top">
                                            <table border="0" cellpadding="10" cellspacing="0" width="100%"><tbody><tr><td colspan="2" id="m_7710281554876410320credit" style="border:0;color:#99b1c7;font-family:Arial;font-size:12px;line-height:125%;text-align:center" valign="middle">
                                                        <p>Powered by
                                                            MONSTER</p>
                                                    </td>
                                                </tr></tbody></table></td>
                                    </tr></tbody></table></td>
                        </tr></tbody></table></td>
            </tr></tbody></table></div><div class="yj6qo"></div><div class="adL">
    </div></div>
</body>
</html>