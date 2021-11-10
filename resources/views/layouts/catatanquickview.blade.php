@section('script')
<script>




 // ------------------------Quick view----------------------------------------
//  var produk = <?php echo json_encode($produk);?>;
$(document).ready(function() {    
    
            // $('.quick-wiew-button').on("click", function() {
                
            //     $.magnificPopup.open({
            //         items: {
            //             src: 
            //                 '@foreach ($produk as $p)'+
            //                 '<div class="kt-popup-quickview ">'+
            //                     '<div class="details-thumb">'+
            //                         '<div class="slider-product slider-for">'+
            //                             '<div class="details-item">'+
            //                                ' @foreach ($galpro->slice(0, 1) as $gal)'+
            //                                     '@if ($p->id == $gal->id_produk)'+
            //                                     '<span href="{!! url('/ecom-product-detail') !!}">'+
            //                                         '<img class="mr-3 img-fluid rounded"  style="max-width: 300px" src="{{ asset($gal->foto) }}" alt="Gamber Produk">'+
            //                                    ' </span>'+
            //                                    ' @else'+
            //                                     '<img src="{{ asset('+teamo/images/popup-quickview-item-1.jpg+')}}" alt="img">'+
            //                                     '@endif'+
            //                                 '@endforeach'+
            //                             '</div>'+
            //                         '</div>'+
            //                        ' <div class="slider-product-button slider-nav nav-center">'+
            //                             '<div class="details-item">'+
            //                                 '<img src="" alt="img">'+
            //                             '</div>'+
            //                         '</div>'+
            //                     '</div>'+
            //                     '<div class="details-infor">'+
            //                         '<h1 class="product-title">{{$p->nama_produk}}</h1>'+
            //                         '<div class="price">'+
            //                             '<span>{{$p->harga_produk}}</span>'+
            //                         '</div>'+
            //                        ' <div class="product-details-description">'+
            //                             '<ul>'+
            //                                 '<li>{{$p->nama_kategori}}</li>'+
            //                                 '<li>{{$p->tipe_produk}}</li>'+
            //                                 '<li>{{$p->deskripsi_produk}}</li>'+
            //                             '</ul>'+
            //                         '</div>'+
                                   
            //                         '<div class="group-button">'+
            //                             '<div class="quantity-add-to-cart">'+
            //                                 '<div class="quantity">'+
            //                                    ' <div class="control">'+
            //                                         '<a class="btn-number qtyminus quantity-minus" href="#">-</a>'+
            //                                        ' <input type="text" data-step="1" data-min="0" value="1" title="Qty" class="input-qty qty" size="4">'+
            //                                         '<a href="#" class="btn-number qtyplus quantity-plus">+</a>'+
            //                                     '</div>'+
            //                                ' </div>'+
            //                                 '<button class="single_add_to_cart_button button">Add to cart</button>'+
            //                             '</div>'+
            //                         '</div>'+
            //                     '</div>'+
            //                 '</div>'+
            //                 '@endforeach',
            //             type: 'inline'
            //         }
            //     });
            //     slick_quickview_popup();
            //     return false;
            
            // });
        
    

    function slick_quickview_popup() {
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            focusOnSelect: true,
            infinite: true,
            prevArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            nextArrow: '<i class="fa fa-angle-right " aria-hidden="true"></i>',
        });
    }
});
</script>
@endsection