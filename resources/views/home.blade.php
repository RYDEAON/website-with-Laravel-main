@extends('layouts.app')

@section('title', 'Ana Sayfa')

@section('content_header_title', 'Ana Sayfa')
@section('content_header_subtitle', 'Kontrol Paneli')

@section('content')
<p>Bu güzel yönetici paneline hoş geldiniz.</p>

<section>

    @can('admin.home')
    <div class="scroll-container">
        <div class="wrapper" id="scrolling-1" style="background-color:#ccc; width: 400px; overflow-x:auto; overflow-y:hidden; white-space:nowrap; border-radius:8px; padding-top:25px; box-shadow:#233 8px 16px 8px;">
            <button type="button" onclick="window.location.href='/users'" class="item">KULLANICILAR</button>
            <button type="button" onclick="window.location.href='/products'" class="item">ÜRÜNLER</button>
            <button type="button" onclick="window.location.href='/providers'" class="item">TEDARİKÇİLER</button>
            <button type="button" onclick="window.location.href='/shippings'" class="item">KARGO</button>
            <button type="button" onclick="window.location.href='/roles'" class="item">ROLLER</button>
            <button type="button" onclick="window.location.href='/statistics'" class="item">İSTATİSTİKLER</button>
        </div>
    </div>
    @endcan

    <div class="section-body my-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="background: #ddd; border-radius: 12px; box-shadow:#233 8px 16px 8px;">

                    <div class="card-body">
                        <div class="row">

                            @can('seller.home')
                            <div class="col-md-6 col-xl-4">
                                <div class="card bg-purple order-card">
                                    <div class="card-block">
                                        <h4 class="mt-2 mx-2">Kullanıcılar</h4>
                                        <h2 class="text-right"><i class="fa fa-users f-left"></i><span class="mx-2">{{ $cant_users }}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/users" class="text-white text-decoration-none mx-2">Daha fazla...</a></p>
                                    </div>
                                </div>
                            </div>
                            @endcan

                            @can('supervisor.home')
                            <div class="col-md-6 col-xl-4">
                                <div class="card bg-red order-card">
                                    <div class="card-block">
                                        <h4 class="mt-2 mx-2">Roller</h4>
                                        <h2 class="text-right"><i class="fa fa-key f-left"></i><span class="mx-2">{{ $cant_roles }}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/roles" class="text-white text-decoration-none mx-2">Daha fazla...</a></p>
                                    </div>
                                </div>
                            </div>
                            @endcan

                            <div class="col-md-6 col-xl-4">
                                <div class="card bg-green order-card">
                                    <div class="card-block">
                                        <h4 class="mt-2 mx-2">Ürünler</h4>
                                        <h2 class="text-right"><i class="fa fa-shopping-bag f-left"></i><span class="mx-2">{{ $cant_products }}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/products" class="text-white text-decoration-none mx-2">Daha fazla...</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card order-card" style="background-color: olive;">
                                    <div class="card-block">
                                        <h4 class="mt-2 mx-2 text-white">Kargo</h4>
                                        <h2 class="text-right"><i class="fa fa-truck f-left text-white"></i><span class="mx-2 text-white">{{ $cant_shipping_services }}</span></h2>
                                        <p class="m-b-0 text-right text-white"><a href="/shippings" class="text-white text-decoration-none mx-2">Daha fazla...</a></p>
                                    </div>
                                </div>
                            </div>

                            @can('supervisor.home')
                            <div class="col-md-6 col-xl-4">
                                <div class="card bg-orange order-card">
                                    <div class="card-block">
                                        <h4 class="mt-2 mx-2 text-white">Tedarikçiler</h4>
                                        <h2 class="text-right"><i class="fa fa-handshake f-left text-white"></i><span class="mx-2 text-white">{{ $cant_providers }}</span></h2>
                                        <p class="m-b-0 text-right text-white"><a href="/providers" class="text-white text-decoration-none mx-2">Daha fazla...</a></p>
                                    </div>
                                </div>
                            </div>
                            @endcan

                            <div class="col-md-6 col-xl-4">
                                <div class="card order-card" style="background-color: #906030;">
                                    <div class="card-block">
                                        <h4 class="mt-2 mx-2 text-white">İstatistikler</h4>
                                        <h2 class="text-right"><i class="fa fa-tasks f-left text-white" aria-hidden="true"></i><span class="mx-2 text-white"></span></h2>
                                        <p class="m-b-0 text-right text-white"><a href="/statistics" class="text-white text-decoration-none mx-2">Daha fazla...</a></p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
@stop

@section('css')
<style>
    .scroll-container {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .wrapper::-webkit-scrollbar {
        width: 0;
    }

    .item {
        width: 200px;
        height: 100px;
        background-color: #f0f0f0;
        color: #000;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-inline: 10px;
        border-radius: 6px;
        border: 2px solid transparent;
        font-size: 2rem;
    }

    .item:hover {
        cursor: pointer;
        background: linear-gradient(to right, #0d4bf5, #040f74, #043e6e, #1093ff);
        border: 2px solid #7c8af5;
        border-radius: 6px;
        color: #eee;
        font-weight: bolder;
    }

    .box-container {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        margin-top: 40px;
        padding: 12px;
        background: #042f58;
        border-radius: 8px;
    }

    .order-card {
        border-radius: 8px;
        width: 33.33%;
        height: 120px;
        margin: 4px;
        color: #eee;
    }

    .order-card:hover {
        box-shadow: #233 8px 16px 8px;
        background: linear-gradient(to right, #0d4bf5, #040f74, #043e6e, #1093ff);
    }

    .order-card a:hover {
        font-weight: bolder;
    }

    .btn:hover {
        background: linear-gradient(to right, #0d4bf5, #040f74, #043e6e, #1093ff);
    }
</style>
@stop

@section('js')
<script>
    console.log("Merhaba, Laravel-AdminLTE paketini kullanıyorum!");
</script>
<script>
    // İlk konteynerde fare tekerleği ile yatay kaydırmayı etkinleştirme
    var contenedor1 = document.getElementById('scrolling-1');

    contenedor1.addEventListener('wheel', function(event) {
        if (event.deltaY !== 0) {
            event.preventDefault();
            contenedor1.scrollLeft += event.deltaY;
        }
    });
</script>
@stop
