@extends('admin.layouts.app')
@section('headSection')


@endsection


@section('main-content')
    <div class="container">
        <div class="row m-t-10">

            <div class="col-md-10">
                @foreach($applicants as $applicant)

                    <div class="panel panel-inverse">
                        <div class="panel-heading">{{ $applicant -> id }}

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
                            <div class="panel-action">
                                <div class="dropdown">
                                    <a href="#" aria-expanded="false" data-toggle="dropdown" role="button"
                                       class="dropdown-toggle" id="panelDropdown">Options <span
                                                class="caret"></span></a>
                                    <ul class="dropdown-menu bullet dropdown-menu-right" aria-labelledby="panelDropdown"
                                        role="menu">
                                        <li role="presentation"><a href="#" role="menuitem">View PDF</a></li>
                                        <li role="presentation"><a
                                                    href="{{ route('admin-applicants.edit',$applicant->id) }}"
                                                    role="menuitem">Edit</a></li>
                                        <li role="presentation"><a href="#" role="menuitem" data-toggle="modal"
                                                                   data-target="#deliveryModal">Delivery</a></li>
                                    </ul>
                                </div>
                            </div>
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
                                                <th>Sex</th>
                                                <th>Nationality</th>
                                                <th>Email</th>
                                                <th>Photo</th>
                                                <th>Payment</th>
                                                <th>Delivered To</th>
                                                <th>Result</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>{{ $applicant -> applicant_surname }}
                                                </td>
                                                <td>{{ $applicant -> applicant_otherName }}</td>
                                                <td>{{ $applicant -> applicant_sex }}</td>
                                                <td>{{ $applicant -> applicant_nationality }}</td>
                                                <td>{{ $applicant -> applicant_email }}</td>
                                                <td>
                                                    <a href="{{route('admin.pdfs',$applicant->id)}}">{{$applicant->id}}</a>
                                                </td>
                                                <td>{{ $applicant->Payment['payment_status']  }}</td>
                                                <td></td>
                                                <td></td>


                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    @foreach($applicant->courseChoice  as $courseChoice)
                                        <h3 class="box-title">
                                            <ol>
                                                <li>{{ $courseChoice -> title1 }}
                                                </li>
                                                <li>{{ $courseChoice -> title2 }}</li>
                                                <li>{{ $courseChoice -> title3 }}</li>
                                            </ol>
                                        </h3>
                                </div>

                                {{--@foreach($applicant->institution as $institution)--}}
                                {{--{{ $institution-> inst_name1 }}--}}

                            </div>
                        </div>
                    </div>

                    <p>
                        {{--{{dump($applicantt)}}--}}
                    </p>
                    <br>

                @endforeach

                @endforeach
                {{--@endforeach--}}

            </div>
        </div>
    </div>



    <div id="deliveryModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deliveryModal"
         aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Application Delivery</h4></div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="deliveryStatus-name" class="control-label">Delivered/Not Delivered:</label>
                            <input type="text" class="form-control" id="deliveryStatus"></div>
                        <div class="form-group">
                            <label for="deliveryRecipient" class="control-label">Comments:</label>
                            <textarea class="form-control" id="deliveryRecipient"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>
                </div>
            </div>
        </div>

@endsection

@section('footerSection')


@endsection