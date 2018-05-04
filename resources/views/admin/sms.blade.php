@extends('admin.layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('message') }}" method="post" class="form-horizontal">
                    {{csrf_field()}}
                    <div class="form-group"><label for="message" class="control-label">Enter Message</label>
                        <textarea name="message" required autofocus id="" cols="30" rows="10"
                                  class="form-control"></textarea></div>

                    <table>
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Username</th>
                            <th>email</th>
                            <th>mobile</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($user) > 0)
                            @foreach($user as $users)

                                <tr>
                                    <td><input type="checkbox" name="mobile[]" value="{{ $users->mobile }}"
                                               class="checkbox checkbox-success"></td>
                                    <td>{{ $users->name }}
                                    </td>
                                    <td>{{ $users->email }}</td>
                                    <td>{{$users->mobile}}</td>
                                </tr>

                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection