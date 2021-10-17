@extends('web.admin.main')

@section('view')
    <div>
        <div class="row m-0 my-5">
            @forelse($items as $item)
                <div class="col-4 m-auto shadow">
                    <div class="card">
                        <img src="{{ $item->item->image->path }}" class="card-img-top" alt="{{ $item->item->image->alt }}">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $item->item->name }}
                            </h5>
                            <p class="card-text">
                                By: {{ $item->item->brand->name }}<br />
                                Left: {{ $item->item->number }}
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Price: {{ $item->item->price }}
                            </li>
                            <li class="list-group-item">
                                Score: {{ $item->item->score }}
                            </li>
                            <li class="list-group-item">
                                View: {{ $item->item->view }}
                            </li>
                        </ul>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <span class="bg-danger text-white">
                        Empty
                    </span>
                </div>
            @endforelse
        </div>
        <div class="mt-5">
            {{ $items->links() }}
        </div>
    </div>
@stop

