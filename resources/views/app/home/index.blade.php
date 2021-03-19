<x-appp-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tüm Blog Yazıları') }}
        </h2>
    </x-slot>

    <div class="card-info mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-4">
                                    <h3 style="color: #000">Tüm Blog Yazıları</h3>
                                </div>
                                <div class="col-8 text-right">
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Yazar</th>

                                    <th scope="col">Başlık</th>
                                    <th scope="col">Detay</th>
                                    <th scope="col">Tarih</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->users->name }}</td>
                                        <td>{{ substr($blog->title, 0, 10) . '...' }}</td>
                                        <td>{{ substr($blog->body, 0, 10) . '...' }}</td>
                                        <td>{{ $blog->created_at }}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <x-slot name="scripts">

    </x-slot>

</x-appp-layout>


