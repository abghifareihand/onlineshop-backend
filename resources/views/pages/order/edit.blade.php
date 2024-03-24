@extends('layouts.app')

@section('title', 'Edit Product')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Order Status</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <form action="{{ route('order.update', $order) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">


                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <select class="form-control selectric @error('status') is-invalid @enderror" name="status">
                                    <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>PENDING
                                    </option>
                                    <option value="paid" {{ $order->status == 'paid' ? 'selected' : '' }}>PAID</option>
                                    <option value="on_delivery" {{ $order->status == 'on_delivery' ? 'selected' : '' }}>ON
                                        DELIVERY</option>
                                    <option value="delivered" {{ $order->status == 'delivered' ? 'selected' : '' }}>
                                        DELIVERED</option>
                                    <option value="expired" {{ $order->status == 'expired' ? 'selected' : '' }}>EXPIRED
                                    </option>
                                    <option value="canceled" {{ $order->status == 'canceled' ? 'selected' : '' }}>CANCELED
                                    </option>



                                </select>
                            </div>

                            {{-- text no resi --}}
                            <div class="form-group">
                                <label>No Resi</label>
                                <input type="text"
                                    class="form-control @error('shipping_resi')
                                is-invalid
                            @enderror"
                                    name="shipping_resi" value="{{ $order->shipping_resi }}">
                                @error('shipping_resi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Submit</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/upload-preview/upload-preview.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-post-create.js') }}"></script>
@endpush
