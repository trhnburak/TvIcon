<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Slider Ekle') }}
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
                                    <h3 style="color: #000">Slide Ekle</h3>

                                </div>
                            </div>

                        </div>

                        <div class="card-body">
                            <form action="{{ route('blog.update')}}" method="POST" enctype="application/x-www-form-urlencoded">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="title">Title:</label>
                                            <input type="text" class="form-control" name="title" id="title" value="{{ $blog->title }}">
                                            <input type="hidden" value="{{ $blog->id }}" name="id">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="body">Body:</label>
                                            <textarea class="form-control" name="body" id="body">{{ $blog->body }}</textarea>

                                        </div>
                                    </div>
                                    <div class="col-12 text-right pt-2">
                                        <button type="submit" class="btn btn-primary add-button"><i class="fas fa-edit"></i> Düzenle</button>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
