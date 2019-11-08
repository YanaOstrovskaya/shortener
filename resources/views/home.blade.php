@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ route('links.generate') }}">
                @csrf
                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" class="form-control" id="link" name="link">
                </div>            
                <button type="submit" class="btn btn-primary">{{ __('link.submit') }}</button>
            </form>
        </div>
    </div>
    <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">{{ __('link.link') }}</th>
                            <th scope="col">{{ __('link.short_link')  }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($links as $key => $link)
                        <tr>
                            <td>{{ $links->firstItem() + $key }}</td>
                            <td>{{ $link->link }}</td>
                            <td><a href="{{ route('links.short', $link->short_link) }}" target="_blank">{{ route('links.short', $link->short_link) }}</a></td>
                        </tr>
                        @empty
                            <tr>
                                <td col="3">{{ __('link.no_links')  }}</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                         <tr>
                             <td colspan="{{ 3 }}">
                                {{$links->links()}}
                                 </td>
                            </tr>
                         </tfoot>
                </table>
            </div>
        </div>
</div>
@endsection