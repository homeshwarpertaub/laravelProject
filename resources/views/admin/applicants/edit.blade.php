@extends('admin.layouts.app')
@section('headSection')


@endsection


@section('main-content')

    <div class="panel panel-inverse">
        <div class="panel-heading">{{ $applicants -> id }}

            {{-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                 {{ csrf_field() }}
                 {{method_field('PUT')}}
                 <div class="form-group">
                     <select name="payment" id="payment" class="form-control">
                         <option value="{{ $applicant->Payment['payment_status']  }}">{{ $applicant->Payment['payment_status'] }}</option>
                         <option value="paid">Paid</option>
                     </select>
                 </div>
             </form>--}}

        </div>
        <div class="panel-wrapper collapse in" aria-expanded="true">
            <div class="panel-body">
                <div class="white-box">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Surname</th>
                                <th>Other Name</th>
                                <th>Email</th>

                                @can('Payment.update',Auth::user())
                                    <th>Payment</th>

                                {{--@can('Delivery.update',Auth::user())--}}
                                    <th>Delivery Status</th>
                                    <th>Delivery Comments</th>
                                @endcan
                                {{--@endcan--}}

                                <th>Result status</th>
                                <th>Result comments</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <form action="{{ route('admin-applicants.update',$applicants->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <td>{{ $applicants -> applicant_surname }}</td>
                                    <td>{{ $applicants -> applicant_otherName }}</td>
                                    <td>{{ $applicants -> applicant_email }}</td>

                                    @can('Payment.update',Auth::user())
                                        <td><input type="text" name="paymentStatus"
                                                   value="{{ $applicants->Payment['payment_status']  }}">
                                        </td>

                                    {{--@can('Delivery.update',Auth::user())--}}
                                        <td><input type="text" name="status" placeholder="Delivery Status"
                                                   value="{{ $applicants->Delivery['deliveries_status'] }}"></td>
                                        <td><input type="text" name="deliveredTo" placeholder="Recipient Name"
                                                   value="{{ $applicants->Delivery['comments'] }}"></td>
                                    @endcan
                                    {{--@endcan--}}
                                    {{--@can('Result.update',Auth::user())--}}
                                        <td><input type="text" name="result_status" placeholder="Accepted/Rejected"
                                                   value="{{ $applicants->Result['result_status'] }}"></td>
                                        <td><input type="text" name="result_comments"
                                                   value="{{ $applicants->Result['result_comments'] }}"></td>
                                {{--@endcan--}}


                            </tr>
                            <tr>
                                <td>
                                    <button type="submit" class="btn btn-success">Save</button>
                                </td>
                            </tr>
                            </form>

                            </tbody>
                        </table>
                    </div>
                    {{--<h3 class="box-title">--}}
                    {{--<ol>--}}
                    {{--<li>{{ $courseChoice -> title1 }}--}}
                    {{--</li>--}}
                    {{--<li>{{ $courseChoice -> title2 }}</li>--}}
                    {{--<li>{{ $courseChoice -> title3 }}</li>--}}
                    {{--</ol>--}}
                    {{--</h3>--}}
                </div>

                {{--@foreach($applicant->institution as $institution)--}}
                {{--{{ $institution-> inst_name1 }}--}}

            </div>
        </div>
    </div>





@endsection

@section('footerSection')

@endsection