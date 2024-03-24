@extends('layouts.app')

@section('title', 'Order')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Order</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>



                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="clearfix mb-3"></div>
                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>ID Order</th>
                                            {{-- <th>Product Cost</th>
                                            <th>Shipping Cost</th> --}}
                                            <th>Total</th>
                                            <th>Payment</th>
                                            <th>Shipping</th>
                                            <th>Status</th>
                                            <th style="text-align: center;">Action</th>

                                        </tr>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $order->transaction_number }}</td>
                                                {{-- <td>{{ 'Rp ' . number_format($order->subtotal, 0, ',', '.') }}</td>
                                                <td>{{ 'Rp ' . number_format($order->shipping_cost, 0, ',', '.') }}</td> --}}
                                                <td>{{ 'Rp ' . number_format($order->total_cost, 0, ',', '.') }}</td>
                                                <td>{{ strtoupper($order->payment_va_name) }}</td>
                                                <td>{{ strtoupper($order->shipping_service) }}</td>
                                                <td>
                                                    @if ($order->status == 'pending')
                                                        <div class="badge badge-danger">{{ strtoupper($order->status) }}
                                                        </div>
                                                    @else
                                                        <div class="badge badge-success">{{ strtoupper($order->status) }}
                                                        </div>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href='{{ route('order.edit', $order->id) }}'
                                                            class="btn btn-sm btn-info btn-icon">
                                                            <i class="fas fa-edit"></i>
                                                            Edit
                                                        </a>
                                                    </div>
                                                </td>



                                            </tr>
                                        @endforeach



                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $orders->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/sweetalert/dist/sweetalert.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-sweetalert.js') }}"></script>
@endpush
