@extends('main')

@section('content')
    <br><br><br>
    <div class="container">

        <h1>Place Order</h1>
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">New Order</div>

                    <div class="card-body">
                        <form method="POST" action="/order">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Select Items</label>

                                <div class="col-md-6">
                                    <select multiple  name="items" id="items" class="form-control">
                                        @foreach($items as $item)
                                            <option value="{{$item->id}}" data-price="{{$item->price}}">{{$item->name}} -- ${{$item->price}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right"> Total Price: $<span id="price">0</span></label>

                            </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                       Submit Order
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- lets import cdn for jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

    <script>

        //lets get all the keyed items to reference
        var items = <?php echo json_encode($itemPrice); ?>

        //lets use jquey to manipulate the dom
        $(document).ready(function () {

            //as we selected/deselect items lets calculate the total price
            $('#items').change(function(){
                var totalPrice = 0;

                var option = $('option:selected', this).attr('data-price');
                console.log('change');
                var values = $(this).val();
                console.log($(this).val());
                for(var i = 0; i< values.length; i++){
                    totalPrice = totalPrice + parseInt(items[values[i]]);
                }

                $('#price').html('').append(totalPrice);

                console.log(totalPrice);

            });
        });
    </script>


@endsection