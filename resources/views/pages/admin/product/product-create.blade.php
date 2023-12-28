@extends('layouts.admin.admin')

@section('contents')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3 text-end">
                <a href="{{route('admin.product')}}">Back</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <img id="preview" src="{{ url('/assets/uploadyourown.png') }}" alt="" class="w-100">
                    </div>
                    <div class="col-md-9">
                        <form id="form-submit"
                              method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    placeholder="Enter product name"
                                    required
                                >
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="price"
                                    name="price"
                                    placeholder="Enter product price"
                                    required
                                >
                            </div>
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="desc"
                                    name="desc"
                                    placeholder="Enter product description"
                                    required
                                >
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control" id="category" name="category" required>
                                    <option value="pizza">Pizza</option>
                                    <option value="side">Side</option>
                                    <option value="dessert">Dessert</option>
                                    <option value="drink">Drink</option>
                                </select>
                            </div>

                            <div id="additional-pizza">
                                <div class="form-group">
                                    <label for="additionalProperties[variant]">Variant</label>
                                    <select class="form-control" id="additionalProperties[variant]"
                                            name="additionalProperties[variant]" required>
                                        <option
                                            value="flavors of the world">
                                            Flavors Of The World
                                        </option>
                                        <option value="supper topping">
                                            Supper Topping
                                        </option>
                                        <option value="seafood cravers">
                                            Seafood Cravers
                                        </option>
                                        <option value="traditional & meatlovers">
                                            Traditional & Meatlovers
                                        </option>
                                        <option value="kid favors">
                                            Kid Favors
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="additionalProperties[topping]">Topping</label>
                                    <select class="form-control" id="additionalProperties[topping]"
                                            name="additionalProperties[topping]"
                                            required>
                                        <option value="Seafood">
                                            Seafood
                                        </option>
                                        <option value="Beef">
                                            Beef
                                        </option>
                                        <option value="Chicken">
                                            Chicken
                                        </option>
                                        <option value="Pork">
                                            Pork
                                        </option>
                                        <option value="Vegetarian">
                                            Vegetarian
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div id="additional-side" style="display: none">
                                <div class="form-group">
                                    <label for="additionalProperties[variant]">Variant</label>
                                    <select class="form-control" id="additionalProperties[variant]"
                                            name="additionalProperties[variant]" required>
                                        <option
                                            value="Potato">
                                            Potato
                                        </option>
                                        <option
                                            value="Chicken">
                                            Chicken
                                        </option>
                                        <option
                                            value="Spaghetti">
                                            Spaghetti
                                        </option>
                                        <option
                                            value="Sausage">
                                            Sausage
                                        </option>
                                        <option
                                            value="Bread">
                                            Bread
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="additionalProperties[topping]">Topping</label>
                                    <select class="form-control" id="additionalProperties[topping]"
                                            name="additionalProperties[topping]"
                                            required>
                                        <option
                                            value="Seafood">
                                            Seafood
                                        </option>
                                        <option
                                            value="Beef">
                                            Beef
                                        </option>
                                        <option
                                            value="Chicken">
                                            Chicken
                                        </option>
                                        <option
                                            value="Pork">
                                            Pork
                                        </option>
                                        <option
                                            value="Vegetarian">
                                            Vegetarian
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Product Image</label>
                                <input type="file" class="form-control-file" id="image"
                                       accept="image/png, image/jpeg, image/jpg">
                            </div>

                            <div>
                                <button type="button" data-toggle="modal" data-target="#confirmModal"
                                        class="btn btn-success">Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModal">Are you sure to update?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Update" below if you want to make this change.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" id="btn-submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custome-scripts')
    <script>
        $('#category').change(function () {
            const selectedValue = $(this).val();

            if (selectedValue === 'pizza') {
                $('#additional-side').hide();
                $('#additional-pizza').show();
            } else if (selectedValue === 'side') {
                $('#additional-pizza').hide();
                $('#additional-side').show();
            } else {
                $('#additional-pizza').hide();
                $('#additional-side').hide();
            }
        });

        $('#image').change(function (event) {
            const input = event.target;

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    document.getElementById('preview').src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            }
        });

    </script>
@endsection
