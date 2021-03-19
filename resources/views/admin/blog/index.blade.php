<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog Yazıları') }}
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
                                    <h3 style="color: #000">Blog Yazıları</h3>
                                </div>
                                <div class="col-8 text-right">
                                    <a class="btn btn-primary" href="{{ route('blog.create') }}"><i class="fas fa-plus"></i> Ekle</a>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Başlık</th>
                                    <th scope="col">Detay</th>
                                    <th scope="col">Aksiyonlar</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{ substr($blog->title, 0, 10) . '...' }}</td>
                                        <td>{{ substr($blog->body, 0, 10) . '...' }}</td>

                                        <td>
                                            <a href="{{ url('blog/edit/' . $blog->id) }}" class="btn btn-success text-left"><i class="fas fa-edit"></i></a>
                                            <a href="{{ url('blog/delete/' . $blog->id) }}" class="btn btn-danger text-left"><i class="far fa-trash-alt"></i></a>
                                        </td>

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

</x-app-layout>


