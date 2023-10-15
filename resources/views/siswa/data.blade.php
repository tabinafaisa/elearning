@extends('template.layout')
@section('content')
    <main>

        <!-- cart-area start -->
        <section class="cart-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <h4>Siswa yang Tergabung</h4>
                    <div class="col-12">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">No</th>
                                        <th class="cart-product-name">Nama</th>
                                    </tr>
                                </thead>
                                @foreach ($data_siswa as $key => $value)
                                    @php
                                        $index = $key + 1;
                                    @endphp
                                    <tbody>
                                        <tr>
                                            <td class="product-name">{{ $index++ }}</td>
                                            <td class="product-price"><span class="amount">{{ $value->nama_siswa }}</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart-area end -->


    </main>
@endsection
