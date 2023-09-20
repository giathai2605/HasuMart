@extends('backend.layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">{{ translate('Refferal Users')}}</h5>
    </div>
    <div class="card-body">
        <form action="{{route('refferal.update',['id'=>$refferal_user->id])}}" method="POST">
            @csrf
        <table class="table aiz-table mb-0">
            <thead>
            <tr>
                <th>{{ translate('Name')}}</th>
                <th data-breakpoints="lg">{{ translate('Phone')}}</th>
                <th data-breakpoints="lg">{{ translate('Email Address')}}</th>
                <th data-breakpoints="lg">{{ translate('Reffered By')}}</th>
                <th data-breakpoints="lg">Action</th>
            </tr>
            </thead>
            <tbody>
               
                    <tr>
                        <td>{{$refferal_user->name}}</td>
                        <td>{{$refferal_user->phone}}</td>
                        <td>{{$refferal_user->email}}</td>
                        <td>
                          <select name="reffered_by" id="" class="form-control">
                                @foreach ($affiliates as $key => $item)
                                    <option value="{{$item->user_id}}" <?= $item->user_id == $refferal_user->referred_by ? "selected" :"" ?> >{{ $item->user->name}}</option>
                                @endforeach
                          </select>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-outline-warning">Xác nhận</button>
                        </td>
                    </tr>
            
                   
           
            </tbody>
        </table>
    </form>
     
    </div>
</div>



@endsection